<?php
/**
 * @file
 * Contains Drupal\photography\Tests\OrderFormTest.
 */

namespace Drupal\photography\Tests\OrderFormTest;

use Drupal\Tests\UnitTestCase;
use Drupal\photography\Form\OrderForm;

/**
 * Tests validation of postal codes.
 *
 * @group photography
 */
class OrderFormTest extends UnitTestCase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "Photography OrderFormTest's tests",
      'description' => 'Test Unit for form OrderForm.',
      'group' => 'photography',
    );
  }

  /**
   * Set up our strings to test.
   * @var string
   */
  public $validPostalCode   = 'M5A 1N1';
  public $invalidPostalCode = '90210';

  /**
   * Get an accessible method using reflection.
   */
  protected function getAccessibleMethod($class_name, $method_name) {
    $class = new \ReflectionClass($class_name);
    $method = $class->getMethod($method_name);
    $method->setAccessible(TRUE);
    return $method;
  }

  /**
   * Test valid postal codes.
   */
  public function testPostalCodeValid() {
    $postalCodeValidator = $this->getAccessibleMethod(
      'Drupal\photography\Form\OrderForm',
      'validPostalCode'
    );
    $form = new OrderForm();
    $this->assertTrue($postalCodeValidator->invokeArgs($form, array($this->validPostalCode)));
  }
  /**
   * Test invalid postal codes.
   */
  public function testPostalCodeInvalid() {
    $postalCodeValidator = $this->getAccessibleMethod(
      'Drupal\photography\Form\OrderForm',
      'validPostalCode'
    );
    $form = new OrderForm();
    $this->assertFALSE($postalCodeValidator->invokeArgs($form, array($this->invalidPostalCode)));
  }
}
