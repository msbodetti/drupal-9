<?php

namespace Drupal\ninja_stats;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the ninja stats entity type.
 */
class NinjaStatsAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view ninja stats');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit ninja stats', 'administer ninja stats'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete ninja stats', 'administer ninja stats'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create ninja stats', 'administer ninja stats'], 'OR');
  }

}
