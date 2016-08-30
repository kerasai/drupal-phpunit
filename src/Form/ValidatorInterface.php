<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Form.
 */
namespace Kerasai\Drupal\Units\Form;
use Kerasai\Drupal\Units\Service\Form\FormServiceInterface;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface {

  /**
   * ValidatorInterface constructor.
   *
   * @param FormServiceInterface $form_service
   */
  public function __construct(FormServiceInterface $form_service);

  /**
   * Validate the form.
   *
   * @param array $form_state
   */
  public function validate(&$form_state);

}
