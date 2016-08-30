<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Form\ValidatorBase.
 */

namespace Kerasai\Drupal\Units\Form;
use Kerasai\Drupal\Units\Service\Form\DrupalFormService;
use Kerasai\Drupal\Units\Service\Form\FormServiceInterface;
use Kerasai\Drupal\Units\Service\Translation\DrupalTranslationService;
use Kerasai\Drupal\Units\Service\Translation\TranslationServiceInterface;

/**
 * Base class for form validators.
 */
abstract class ValidatorBase implements ValidatorInterface {

  /** @var FormServiceInterface $form_service */
  protected $form_service;
  /** @var TranslationServiceInterface $translation_service */
  protected $translation_service;

  /**
   * {@inheritdoc}
   */
  public function __construct($form_service = NULL, $translation_service = NULL) {
    if (!$form_service) {
      $form_service = new DrupalFormService();
    }
    if (!$translation_service) {
      $translation_service = new DrupalTranslationService();
    }

    $this->form_service = $form_service;
    $this->translation_service = $translation_service;
  }

}
