<?php

/**
 * @file
 * Contains \Drupal\welcome\Controller\WelcomeController.
 */

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WelcomeController.
 *
 * @package Drupal\welcome\Controller
 */
class WelcomeController extends ControllerBase {
  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('try changing this')
    ];
  }

}
