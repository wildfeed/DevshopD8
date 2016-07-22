<?php

/**
 * @file
 * Contains \Drupal\welcome\Plugin\Block\DefaultBlock.
 */

namespace Drupal\welcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['default_block']['#markup'] = 'Implement DefaultBlock.';

    return $build;
  }

}
