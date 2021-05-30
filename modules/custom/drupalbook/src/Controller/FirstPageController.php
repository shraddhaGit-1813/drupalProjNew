<?php

/**
 * @file
 * Provides basic hello world message functionality.
 */

namespace Drupal\drupalbook\Controller;

use Drupal\Core\Controller\ControllerBase;



/**
 * Provides route responses for the DrupalBook module.
 */
class FirstPageController extends ControllerBase{

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function content() {
    $element = array(
      '#markup' => 'Hello World!',
    );
    return $element;
  }

}
