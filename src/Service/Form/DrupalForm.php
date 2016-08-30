<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\Form\DrupalForm.
 */

namespace Kerasai\Drupal\Units\Service\Form;

/**
 * Service wrapper for Drupal form handling.
 */
class DrupalForm implements FormInterface {

  protected $errors = array();

  /**
   * {@inheritdoc}
   */
  public function hasError() {
    return count($this->errors) > 0;
  }

  /**
   * {@inheritdoc}
   */
  public function setError($name = NULL, $message = '', $limit_validation_errors = NULL) {
    $this->errors[] = array(
      'name' => $name,
      'message' => $message,
      'limit_validation_errors' => $limit_validation_errors,
    );
    form_set_error($name, $message, $limit_validation_errors);
  }

}
