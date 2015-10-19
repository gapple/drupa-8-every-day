<?php

/**
 * @file
 * Contains Drupal\photography\Controller\GalleryController.
 */

namespace Drupal\photography\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class GalleryController.
 *
 * @package Drupal\photography\Controller
 */
class GalleryController extends ControllerBase {
  /**
   * Gallery.
   *
   * @return string
   *   Return Hello string.
   */
  public function gallery() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: gallery')
    ];
  }

}
