<?php
/**
 * @file
 * Contains Drupal\photography\Tests\Unit\GalleryControllerTest.
 */

namespace Drupal\Tests\photography\Unit\GalleryControllerTest;

use Drupal\Tests\UnitTestCase;
use Drupal\photography\Controller\GalleryController;

/**
 * Tests validation of postal codes.
 *
 * @group photography
 */
class GalleryContoller extends UnitTestCase {

  public function testStub() {
    // Create a stub for the SomeClass class.
    $controllerStub = $this->getMockBuilder('GalleryController')
      ->getMock();

    $controllerStub->method('getStorage')
      ->willReturnCallback('testStorageObject');
  }

}