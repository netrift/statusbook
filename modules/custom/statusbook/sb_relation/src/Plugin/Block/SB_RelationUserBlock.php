<?php

/**
 * @file
 * Contains the block to be displayed when viewing other user profiles.
 */

namespace Drupal\sb_relation\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\Core\Session\AccountInterface;


/** 
 * Provide block to actions on currently viewed user profile.
 * 
 * @Block(
 *    id = "sb_relation_user_block",
 *    admin_label = @Translation("User Relation"),
 * )
 */
class SB_RelationUserBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    return $account->hasPermission('access content');
  }

  /**
  * {@inheritdoc}
  */
  public function build() {
    return array(
      '#markup' => $this->t('This content needs to use MVC'),
    );
  }

}
