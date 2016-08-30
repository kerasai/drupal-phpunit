<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\Translation\TranslationServiceInterface.
 */

namespace Kerasai\Drupal\Units\Service\Translation;

interface TranslationServiceInterface {

  /**
   * Translate a string.
   *
   * @param string $string
   * @param array $args
   * @param array $options
   *
   * @return string
   *
   * @see t()
   */
  public function translate($string, array $args = array(), array $options = array());

}
