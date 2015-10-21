<?php
/**
 * @file
 * Contains Drupal\photography\Tests\GalleryControllerTest.
 */

namespace Drupal\Tests\photography\GalleryControllerTest;

use Drupal\Tests\UnitTestCase;
use Drupal\photography\Controller\GalleryController;

/**
 * Tests validation of postal codes.
 *
 * @group photography
 */
class GalleryContollerTest extends UnitTestCase {

  public function testStub() {
    // Create a stub for the SomeClass class.
    $controllerStub = $this->getMockBuilder('GalleryController')
      ->getMock();

    $controllerStub->method('getStorage')
      ->willReturnCallback('testStorageObject');
  }

}