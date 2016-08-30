<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\User\DrupalUserService.
 */
namespace Kerasai\Drupal\Units\Service\User;

/**
 * Wrapper for Drupal user services.
 */
class DrupalUserService implements UserServiceInterface {

  /**
   * {@inheritdoc}
   */
  public function access($permission, $account = NULL) {
    return user_access($permission, $account);
  }

}
