<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\User\UserServiceInterface.
 */

namespace Kerasai\Drupal\Units\Service\User;

/**
 * User services interface.
 */
interface UserServiceInterface {

  /**
   * Determines if a user has via permission.
   *
   * @param $permission
   * @param \stdClass $account
   *
   * @return boolean
   *
   * @see user_access()
   */
  public function access($permission, $account);

}
