<?php
/**
 * @file
 * Contains \Drupal\agls\Plugin\metatag\Tag\ProtectiveMarking.
 */

namespace Drupal\agls\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * The AGLS Protective Marking tag.
 *
 * @MetatagTag(
 *   id = "agls_protectivemarking",
 *   label = @Translation("Protective Marking"),
 *   description = @Translation("A protective marking applied to the described resource."),
 *   name = "AGLSTERMS.protectiveMarking",
 *   group = "agls",
 *   weight = 12,
 *   image = FALSE,
 *   multiple = FALSE
 * )
 */
class ProtectiveMarking extends MetaNameBase {
  // Inherits everything from Base.
}
