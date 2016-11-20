<?php

namespace Drupal\media_expire;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\media_entity\MediaAccessController;
use Drupal\taxonomy\TermAccessControlHandler;

/**
 * Defines the access control handler for the taxonomy term entity type.
 *
 * @see \Drupal\taxonomy\Entity\Term
 */
class MediaAccessControlHandler extends MediaAccessController {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':

        $bundle = \Drupal::entityTypeManager()
          ->getStorage('media_bundle')
          ->load($entity->bundle());

        if ($bundle->getThirdPartySetting('media_expire', 'enable_expiring')) {
          return AccessResult::allowedIf($account->hasPermission('view media') && $bundle->getThirdPartySetting('media_expire', 'fallback_media'));
        } else {
          return parent::checkAccess($entity, $operation, $account);
        }

      default:
        return parent::checkAccess($entity, $operation, $account);

    }
  }

}
