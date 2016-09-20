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

  /**
   * {@inheritdoc}
   */
  public function currentUser() {
    global $user;

    if (user_is_logged_in()) {
      return user_load($user->uid);
    }

    return drupal_anonymous_user();
  }
}
