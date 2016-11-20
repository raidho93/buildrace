<?php
/**
 * @file
 * Contains \Drupal\agls\Plugin\metatag\Tag\Regulation.
 */

namespace Drupal\agls\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * The AGLS Regulation tag.
 *
 * @MetatagTag(
 *   id = "agls_regulation",
 *   label = @Translation("Regulation"),
 *   description = @Translation("A specific regulation which requires or drives the creation or provision of the resource."),
 *   name = "AGLSTERMS.regulation",
 *   group = "agls",
 *   weight = 13,
 *   image = FALSE,
 *   multiple = FALSE
 * )
 */
class Regulation extends MetaNameBase {
  // Inherits everything from Base.
}
