<?php

/**
 * @file
 *
 * Contains Kerasai\Drupal\Units\Service\Translation\PassThruTranslationService.
 */
namespace Kerasai\Drupal\Units\Service\Translation;

/**
 * Pass thru translation service.
 */
class PassThruTranslationService implements TranslationServiceInterface {

  /**
   * {@inheritdoc}
   */
  public function translate($string, array $args = array(), array $options = array()) {
    return str_replace(array_keys($args), $args, $string);
  }

}
