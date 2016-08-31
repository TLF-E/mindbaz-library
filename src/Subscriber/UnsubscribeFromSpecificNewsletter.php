<?php

namespace mbzSubscriber;

class UnsubscribeFromSpecificNewsletter
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var int $idSubscriptionField
     */
    protected $idSubscriptionField = null;

    /**
     * @var int $idUnsubDateField
     */
    protected $idUnsubDateField = null;

    /**
     * @var int $idSent
     */
    protected $idSent = null;

    /**
     * @var boolean $unsubOnlySubscribers
     */
    protected $unsubOnlySubscribers = null;

    /**
     * @param int $idSubscriber
     * @param int $idSubscriptionField
     * @param int $idUnsubDateField
     * @param int $idSent
     * @param boolean $unsubOnlySubscribers
     */
    public function __construct($idSubscriber, $idSubscriptionField, $idUnsubDateField, $idSent, $unsubOnlySubscribers)
    {
      $this->idSubscriber = $idSubscriber;
      $this->idSubscriptionField = $idSubscriptionField;
      $this->idUnsubDateField = $idUnsubDateField;
      $this->idSent = $idSent;
      $this->unsubOnlySubscribers = $unsubOnlySubscribers;
    }

    /**
     * @return int
     */
    public function getIdSubscriber()
    {
      return $this->idSubscriber;
    }

    /**
     * @param int $idSubscriber
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletter
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSubscriptionField()
    {
      return $this->idSubscriptionField;
    }

    /**
     * @param int $idSubscriptionField
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletter
     */
    public function setIdSubscriptionField($idSubscriptionField)
    {
      $this->idSubscriptionField = $idSubscriptionField;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdUnsubDateField()
    {
      return $this->idUnsubDateField;
    }

    /**
     * @param int $idUnsubDateField
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletter
     */
    public function setIdUnsubDateField($idUnsubDateField)
    {
      $this->idUnsubDateField = $idUnsubDateField;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSent()
    {
      return $this->idSent;
    }

    /**
     * @param int $idSent
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletter
     */
    public function setIdSent($idSent)
    {
      $this->idSent = $idSent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnsubOnlySubscribers()
    {
      return $this->unsubOnlySubscribers;
    }

    /**
     * @param boolean $unsubOnlySubscribers
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletter
     */
    public function setUnsubOnlySubscribers($unsubOnlySubscribers)
    {
      $this->unsubOnlySubscribers = $unsubOnlySubscribers;
      return $this;
    }

}
