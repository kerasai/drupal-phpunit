<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\Form\FormInterface.
 */

namespace Kerasai\Drupal\Units\Service\Form;

interface FormServiceInterface {

  /**
   * Determines if the form has errors set.
   *
   * @return boolean
   */
  public function hasError();

  /**
   * Set an error on the form.
   *
   * @param $name
   * @param string $message
   * @param boolean $limit_validation_errors
   *
   * @return mixed
   *
   * @see form_set_error()
   */
  public function setError($name = NULL, $message = '', $limit_validation_errors = NULL);

}
