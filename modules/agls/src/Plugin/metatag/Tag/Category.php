<?php
/**
 * @file
 * Contains \Drupal\agls\Plugin\metatag\Tag\Category.
 */

namespace Drupal\agls\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * The AGLS Category tag.
 *
 * @MetatagTag(
 *   id = "agls_category",
 *   label = @Translation("Category"),
 *   description = @Translation("The generic type of the resource being described. There are only three valid values for this property—'service', 'document' or 'agency'"),
 *   name = "AGLSTERMS.category",
 *   group = "agls",
 *   weight = 4,
 *   image = FALSE,
 *   multiple = FALSE
 * )
 */
class Category extends MetaNameBase {
  // Inherits everything from Base.
}
