<?php

/**
 * @file
 * Contains \Kerasai\Drupal\Units\Service\Menu\MenuServiceInterface.
 */
namespace Kerasai\Drupal\Units\Service\Menu;

/**
 * Menu services interface.
 */
interface MenuServiceInterface {

  /**
   * Gets a router item.
   *
   * @param string|null $path
   *   The path.
   * @param array|null $router_item
   *   Internal use only.
   *
   * @return array|bool
   *   The loaded menu item.
   *
   * @see menu_get_item()
   */
  public function getItem($path = NULL, $router_item = NULL);

}
