<?php

namespace Drupal\ninja_stats;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a ninja stats entity type.
 */
interface NinjaStatsInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the ninja stats title.
   *
   * @return string
   *   Title of the ninja stats.
   */
  public function getTitle();

  /**
   * Sets the ninja stats title.
   *
   * @param string $title
   *   The ninja stats title.
   *
   * @return \Drupal\ninja_stats\NinjaStatsInterface
   *   The called ninja stats entity.
   */
  public function setTitle($title);

  /**
   * Gets the ninja stats creation timestamp.
   *
   * @return int
   *   Creation timestamp of the ninja stats.
   */
  public function getCreatedTime();

  /**
   * Sets the ninja stats creation timestamp.
   *
   * @param int $timestamp
   *   The ninja stats creation timestamp.
   *
   * @return \Drupal\ninja_stats\NinjaStatsInterface
   *   The called ninja stats entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the ninja stats status.
   *
   * @return bool
   *   TRUE if the ninja stats is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the ninja stats status.
   *
   * @param bool $status
   *   TRUE to enable this ninja stats, FALSE to disable.
   *
   * @return \Drupal\ninja_stats\NinjaStatsInterface
   *   The called ninja stats entity.
   */
  public function setStatus($status);

}
