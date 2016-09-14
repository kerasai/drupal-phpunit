<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\Menu\DrupalMenuService.
 */
namespace Kerasai\Drupal\Units\Service\Menu;

/**
 * Wrapper for Drupal menu services.
 */
class DrupalMenuService implements MenuServiceInterface {

  /**
   * {@inheritdoc}
   */
  public function getItem($path = NULL, $router_item = NULL) {
    return menu_get_item($path, $router_item);
  }

}
