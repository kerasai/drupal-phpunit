<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Form.
 */
namespace Kerasai\Drupal\Units\Form;
use Kerasai\Drupal\Units\Service\Form\FormServiceInterface;
use Kerasai\Drupal\Units\Service\Translation\TranslationServiceInterface;

/**
 * Interface ValidatorInterface.
 */
interface ValidatorInterface {

  /**
   * ValidatorInterface constructor.
   *
   * @param FormServiceInterface $form_service
   * @param TranslationServiceInterface $translation_service
   */
  public function __construct($form_service = NULL, $translation_service = NULL);

  /**
   * Validate the form.
   *
   * @param array $form_state
   */
  public function validate(&$form_state);

}
