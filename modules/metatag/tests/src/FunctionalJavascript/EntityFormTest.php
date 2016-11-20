<?php

namespace Drupal\Tests\metatag\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

/**
 * Tests metatag defaults in entity forms.
 *
 * @group Metatag
 */
class EntityFormTest extends JavascriptTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['metatag'];


  /**
   * {@inheritdoc}
   */
  public $profile = 'standard';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {

    parent::setUp();

    $editor = $this->drupalCreateUser([
      'administer taxonomy',
      'create article content',
      'edit any article content',
    ]);
    $editor->save();
    $this->drupalLogin($editor);

  }

  /**
   * Add custom field for form.
   *
   * @param string $entityType
   *   Entity type.
   * @param string $entityBundle
   *   Entity type.
   * @param string $fieldName
   *   Field name.
   * @param string $fieldLabel
   *   Field label.
   * @param string $fieldType
   *   Field type.
   * @param string $fieldWidget
   *   Field widget.
   */
  protected function addField($entityType, $entityBundle, $fieldName, $fieldLabel, $fieldType, $fieldWidget) {

    $entityTypeManager = \Drupal::entityTypeManager();

    $fieldStorage = $entityTypeManager
      ->getStorage('field_storage_config')
      ->load("$entityType.$fieldName");
    if (empty($fieldStorage)) {
      $fieldStorageDefinition = array(
        'field_name' => $fieldName,
        'entity_type' => $entityType,
        'type' => $fieldType,
      );
      $fieldStorage = $entityTypeManager
        ->getStorage('field_storage_config')
        ->create($fieldStorageDefinition);
      $fieldStorage->save();
    }
    $fieldDefinition = array(
      'label' => $fieldLabel,
      'field_name' => $fieldStorage->getName(),
      'entity_type' => $entityType,
      'bundle' => $entityBundle,
      'settings' => [
        'display_default' => '1',
        'display_field' => '1',
      ],
    );
    $field = entity_create('field_config', $fieldDefinition);
    $field->save();
    entity_get_form_display($entityType, $entityBundle, 'default')
      ->setComponent($fieldName, array(
        'type' => $fieldWidget,
      ))
      ->save();
  }

  public function testTaxonomyTerm() {

    $this->addField('taxonomy_term', 'tags', 'field_metatag', 'Metatag', 'metatag', 'metatag_firehose');

    $this->drupalGet('admin/structure/taxonomy/manage/tags/add');

    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][title]', '[term:name] | [site:name]');
    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][description]', '[term:description]');
  }

  public function testNode() {

    $this->addField('node', 'article', 'field_metatag', 'Metatag', 'metatag', 'metatag_firehose');

    $this->drupalGet('node/add/article');

    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][title]', '[node:title] | [site:name]');
    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][description]', '[node:summary]');

    $node = $this->drupalCreateNode(array(
      'title' => t('Hello, world!'),
      'type' => 'article',
    ));

    $this->drupalGet('node/'  . $node->id() .'/edit');

    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][title]', '[node:title] | [site:name]');
    $this->assertSession()
      ->fieldValueEquals('field_metatag[0][basic][description]', '[node:summary]');
  }

}
