<?php

/**
 * @file
 *
 * Contains Kerasai\Drupal\Units\Service\Translation\DrupalTranslationService.
 */
namespace Kerasai\Drupal\Units\Service\Translation;

/**
 * Service wrapper for Drupal translations.
 */
class DrupalTranslationService implements TranslationServiceInterface {

  /**
   * {@inheritdoc}
   */
  public function translate($string, array $args = array(), array $options = array()) {
    return t($string, $args, $options);
  }

}
