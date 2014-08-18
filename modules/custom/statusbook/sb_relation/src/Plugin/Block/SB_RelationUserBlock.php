<?php

/**
 * @file
 * Contains the block to be displayed when viewing other user profiles.
 */

namespace Drupal\sb_relation\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RequestStack;


/** 
 * Provide block for actions on currently viewed user profile.
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
    $request = \Drupal::request();
    if ($account = $request->get('user')) {

      $relationship = l ($account->getUsername(), $account->url());

      $return_val = array(
        '#markup' => $relationship,
      );

    }
    else {
      $return_val = array(
        '#markup' => t('Not viewing a user')
      );
    }
    return $return_val;
  }

}
