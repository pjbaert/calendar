<?php
/**
 * @file
 * Contains \Drupal\calendar\CalendarEvent.
 */

namespace Drupal\calendar;

/**
 * Defines a calendar event object.
 */
class CalendarEvent {

  /**
   * @var int $entityId
   *   The id of the entity for this event.
   */
  protected $entityId;

  /**
   * @var string $entityType
   *   The type id of the entity for this event.
   */
  protected $entityTypeId;

  /**
   * @var string $type
   *   The type of the entity.
   */
  protected $type;

  /**
   * @var \DateTime $startDate
   *   The start date of the event.
   */
  protected $startDate;

  /**
   * @var \DateTime $end_date
   *   The end date of the event.
   */
  protected $end_date;

  /**
   * @var \DateTimeZone $timezone
   *   The timezone of the event.
   */
  protected $timezone;

  /**
   * @var string $title
   *   The title of the event.
   */
  protected $title;

  /**
   * @var string $url
   *   The public url for this event.
   */
  protected $url;

  /**
   * @var string $stripeLabel
   *   The label to be used for this stripe option.
   */
  protected $stripeLabel;

  /**
   * @var string $stripeHex
   *  The hex code of the color to be used.
   */
  protected $stripeHex;

  /**
   * Getter for the entity id.
   *
   * @return int mixed
   *   The entity id.
   */
  public function getEntityId() {
    return $this->entityId;
  }

  /**
   * Setter for the entity id.
   *
   * @param int $entityId
   *   The entity id.
   */
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }

  /**
   * Getter for the entity type id.
   *
   * @return string
   *   The entity type id.
   */
  public function getEntityTypeId() {
    return $this->entityTypeId;
  }

  /**
   * Setter for the entity type d.
   *
   * @param string $entityTypeId
   *   The entity type id.
   */
  public function setEntityTypeId($entityTypeId) {
    $this->entityTypeId = $entityTypeId;
  }

  /**
   * Getter for the type.
   *
   * @return string
   *   The type of the entity.
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Setter for the type.
   *
   * @param string $type
   *   The type of the entity.
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * Getter for the start date.
   *
   * @return \DateTime
   *   The start date.
   */
  public function getStartDate() {
    return $this->startDate;
  }

  /**
   * Setter for the start date.
   *
   * @param \DateTime $startDate
   *   The start date.
   */
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }

  /**
   * Getter for the end date.
   *
   * @return \DateTime
   *   The end date.
   */
  public function getEndDate() {
    return $this->endDate;
  }

  /**
   * Setter for the end date.
   *
   * @param \DateTime $endDate
   *   The end date.
   */
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
  }

  /**
   * Getter for the timezone property.
   *
   * @return \DateTimeZone
   *   The timezone of this event.
   */
  public function getTimezone() {
    return $this->timezone;
  }

  /**
   * Setter for the timezone property.
   *
   * @param \DateTimeZone $timezone
   *   The timezone of this event.
   */
  public function setTimezone($timezone) {
    $this->timezone = $timezone;
  }

  /**
   * The title getter.
   *
   * @return string
   *   The title of the event.
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * The title setter.
   *
   * @param string $title
   *   The title of the event.
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Getter for the url.
   *
   * @return string
   *   The public url to this event.
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * Setter for the url.
   *
   * @param string $url
   *   The public url to this event.
   */
  public function setUrl($url) {
    $this->url = $url;
  }

  /**
   * Getter for the stripe label.
   *
   * @return string
   *   The stripe label.
   */
  public function getStripeLabel() {
    return $this->stripeLabel;
  }

  /**
   * Setter for the stripe label.
   *
   * @param string $stripeLabel
   *   The stripe label.
   */
  public function setStripeLabel($stripeLabel) {
    $this->stripeLabel = $stripeLabel;
  }

  /**
   * Getter for the stripe hex code.
   *
   * @return string
   *   The stripe hex code.
   */
  public function getStripeHex() {
    return $this->stripeHex;
  }

  /**
   * The setter for the stripe hex code.
   *
   * @param string $stripeHex
   *   The stripe hex code.
   */
  public function setStripeHex($stripeHex) {
    $this->stripeHex = $stripeHex;
  }
}