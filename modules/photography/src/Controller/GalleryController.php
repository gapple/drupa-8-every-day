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
   * Helper function to load all published photographs.
   *
   * @param string $bundle_type
   * @return \Drupal\Core\Entity\EntityInterface[]
   *   Array of node objects keyed by nid.
   */
  protected function loadAllPhotos($bundle_type = 'photograph') {
    // Return the entity manager service and load the the storage instance for nodes.
    // That way we have access to the enity api while keeping our controller lean.
    $storage = $this->entityManager()->getStorage('node');

    // loadByProperties() allows us to query and load entities in one line!
    return $storage->loadByProperties(array(
      'type' => $bundle_type,
      'status' => 1,
    ));
  }

  /**
   * Gallery display.
   *
   * @return string
   *   Return Gallery output string.
   */
  public function gallery() {

    // Load the language manager service, so we can parse the user's current language.
    $langcode    = $this->languageManager()->getCurrentLanguage('language');

    $photographs = $this->loadAllPhotos();
    $view_mode   = 'teaser';
    $gallery     = array();

    // Loop through the loaded photograph node objects and output their rendered result into a list.
    foreach ($photographs as $photograph) {
      $render    = node_view($photograph, $view_mode, $langcode);
      $gallery[] = render($render);
    }

    // If the gallery is empty, we should apologise.
    if (empty($gallery)) {
      return [
        '#type' => 'markup',
        '#markup' => $this->t('Sorry, I have no photographs to share at the moment'),
        '#prefix' => '<h2>',
        '#suffix' => '</h2>',
      ];
    }

    // Return an item list of photographs for our gallery.
    return [
      '#theme' => 'item_list',
      '#items' => $gallery,
    ];

  }
}
