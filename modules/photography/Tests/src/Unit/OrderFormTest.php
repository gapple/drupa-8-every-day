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
   * Get an accessible method using reflection.
   */
  protected function getAccessibleMethod($class_name, $method_name) {
    $class = new \ReflectionClass($class_name);
    $method = $class->getMethod($method_name);
    $method->setAccessible(TRUE);
    return $method;
  }

  protected static function getValidPostalCode() {
    return 'M6G 2S5';
  }
  protected static function getInvalidPostalCode() {
    return '90210';
  }
  /**
   * Test Valid postal codes.
   */
  public function testPostalCodeValid() {
    $postalCodeValidator = $this->getAccessibleMethod(
      'Drupal\photography\Form\OrderForm',
      'validPostalCode'
    );
    $form = new OrderForm();
    $postal_code = $this->getValidPostalCode();
    $this->assertTrue($postalCodeValidator->invokeArgs($form, array($postal_code)));
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
    $postal_code = $this->getInvalidPostalCode();
    $this->assertFALSE($postalCodeValidator->invokeArgs($form, array($postal_code)));
  }
}
