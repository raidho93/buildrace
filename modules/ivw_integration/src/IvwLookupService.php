<?php

namespace Drupal\ivw_integration;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\TermInterface;

/**
 * Class IvwLookupService.
 *
 * @package Drupal\ivw_integration
 */
class IvwLookupService implements IvwLookupServiceInterface {

  const SUPPORTED_ENTITY_PARAMETERS = ['node', 'media', 'taxonomy_term'];
  /**
   * The route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $currentRouteMatch;
  /**
   * IVW integration configuration.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected $config;
  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * IvwLookupService constructor.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $currentRouteMatch
   *   The route match.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   *   The config factory.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   */
  public function __construct(RouteMatchInterface $currentRouteMatch, ConfigFactoryInterface $configFactory, EntityTypeManagerInterface $entityTypeManager) {
    $this->currentRouteMatch = $currentRouteMatch;
    $this->config            = $configFactory->get('ivw_integration.settings');
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * {@inheritdoc}
   */
  public function byCurrentRoute($name, $parentOnly = FALSE) {
    return $this->byRoute($name, $this->currentRouteMatch, $parentOnly);
  }

  /**
   * {@inheritdoc}
   */
  public function byRoute($name, RouteMatchInterface $route, $parentOnly = FALSE) {

    $entity = NULL;

    foreach (static::SUPPORTED_ENTITY_PARAMETERS as $parameter) {
      /* @var ContentEntityInterface $entity */
      if ($entity = $route->getParameter($parameter)) {

        // FIXME is this part required?
        if (is_numeric($entity)) {
          $entity = Node::load($entity);
        }
        if ($entity instanceof TermInterface) {
          $setting = $this->searchTerm($name, $entity, $parentOnly);
        }
        else {
          $setting = $this->searchEntity($name, $entity, $parentOnly);
        }

        if ($setting !== NULL) {
          return $setting;
        }
      }
    }

    return $this->defaults($name);
  }

  /**
   * {@inheritdoc}
   */
  public function byEntity($name, ContentEntityInterface $entity, $parentOnly = FALSE) {
    $result = $this->searchEntity($name, $entity, $parentOnly);
    return $result !== NULL ? $result : $this->defaults($name);
  }

  /**
   * {@inheritdoc}
   */
  public function byTerm($name, TermInterface $term, $parentOnly = FALSE) {
    $result = $this->searchTerm($name, $term, $parentOnly);
    return $result !== NULL ? $result : $this->defaults($name);
  }

  /**
   * Search value for property $name in entity.
   *
   * @param string $name
   *   The name of the IVW property to look up.
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   *   The content entity (usually node) to look up the property on.
   * @param bool $parentOnly
   *   If set to TRUE, skips lookup on first level ivw_settings field.
   *   This is used when determining which property the
   *   currently examined entity WOULD inherit if it had
   *   no property for $name in its own ivw settings.
   *
   * @return string|null
   *   The property value.
   */
  protected function searchEntity($name, ContentEntityInterface $entity, $parentOnly = FALSE) {
    // Search for ivw_integration_settings field.
    foreach ($entity->getFieldDefinitions() as $fieldDefinition) {
      $fieldType = $fieldDefinition->getType();
      if (!$parentOnly) {
        /*
         * If settings are found, check if an overridden value for the
         * given setting is found and return that
         */
        $overiddenSetting = $this->getOverriddenIvwSetting($name, $fieldDefinition, $entity);
        if (isset($overiddenSetting)) {
          return $overiddenSetting;
        }
      }

      // Check for fallback categories if no ivw_integration_setting is found.
      if ($fieldType === 'entity_reference' && $fieldDefinition->getSetting('target_type') === 'taxonomy_term') {
        $fieldName = $fieldDefinition->getName();
        if ($tid = $entity->$fieldName->target_id) {
          $term = Term::load($tid);
          if ($term) {
            $termOverride = $this->searchTerm($name, $term);
          }
        }
      }
    }

    // If we did not return before, it is possible that we found a termOverride.
    if (isset($termOverride)) {
      return $termOverride;
    }

    return NULL;
  }

  /**
   * Search value for property $name in terms.
   *
   * @param string $name
   *   The name of the IVW property to look up.
   * @param \Drupal\taxonomy\TermInterface $term
   *   The term to look up the property on.
   * @param bool $parentOnly
   *   If set to TRUE, skips lookup on first level ivw_settings field.
   *   This is used when determining which property the
   *   currently examined entity WOULD inherit if it had
   *   no property for $name in its own ivw settings.
   *
   * @return null|string
   *   The property value.
   */
  protected function searchTerm($name, TermInterface $term, $parentOnly = FALSE) {
    if (!$parentOnly) {
      foreach ($term->getFieldDefinitions() as $fieldDefinition) {
        $override = $this->getOverriddenIvwSetting($name, $fieldDefinition, $term);
        if (isset($override)) {
          return $override;
        }
      }
    }

    /* @var TermStorage $termStorage  */
    $termStorage = $this->entityTypeManager->getStorage('taxonomy_term');

    foreach ($termStorage->loadParents($term->id()) as $parent) {
      $override = $this->searchTerm($name, $parent);
      if (isset($override)) {
        return $override;
      }
    }

    return NULL;
  }

  /**
   * Get the value for a setting for the current context.
   *
   * @param string $name
   *   The name of the IVW property to look up.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $fieldDefinition
   *   The field definition interface.
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   *   The entity interface.
   *
   * @return string|null
   *   The property value.
   */
  protected function getOverriddenIvwSetting($name, FieldDefinitionInterface $fieldDefinition, ContentEntityInterface $entity) {
    if ($fieldDefinition->getType() === 'ivw_integration_settings') {
      $fieldName = $fieldDefinition->getName();
      if (!empty($entity->$fieldName->get(0)->$name)) {
        return $entity->$fieldName->get(0)->$name;
      }
    }
    return NULL;
  }

  /**
   * Get defined default values.
   *
   * @param string $name
   *   The name of the IVW property to look up.
   *
   * @return string|null
   *   The property value.
   */
  private function defaults($name) {
    return $this->config->get($name . '_default');
  }

}
