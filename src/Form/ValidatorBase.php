<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Form\ValidatorBase.
 */

namespace Kerasai\Drupal\Units\Form;
use Kerasai\Drupal\Units\Service\Form\FormServiceInterface;

/**
 * Base class for form validators.
 */
abstract class ValidatorBase implements ValidatorInterface {

  protected $service;

  /**
   * ValidatorBase constructor.
   *
   * @param FormServiceInterface $form_service
   */
  public function __construct(FormServiceInterface $form_service) {
    $this->service = $form_service;
  }

}
