<?php

/**
 * @file
 * Contains Drupal\photography\Tests\GalleryController.
 */

namespace Drupal\photography\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the photography module.
 */
class GalleryControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "photography GalleryController's controller functionality",
      'description' => 'Test Unit for module photography and controller GalleryController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests photography functionality.
   */
  public function testGalleryController() {
    // Check that the basic functions of module photography.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
