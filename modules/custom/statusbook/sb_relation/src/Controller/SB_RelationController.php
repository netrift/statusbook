<?php
/**
 * @file
 * Contains \Drupal\sb_relation\Controller\SB_RelationController.
 */

namespace Drupal\sb_relation\Controller;

use Drupal\Core\Session\AccountInterface;

/**
 * Friend list.
 */
class SB_RelationController {
  /**
   * Generate a list of friends 
   */
  public function friends() {
    /** 
     * AccountProxyInterface - for Drupal::currentUser()
     */
    $account = \Drupal::currentUser();
    return array(
      '#markup' => t('All My Friends'),
    );
  }

}
