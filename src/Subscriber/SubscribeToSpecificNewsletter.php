<?php

namespace mbzSubscriber;

class SubscribeToSpecificNewsletter
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
     * @var \DateTime $subDate
     */
    protected $subDate = null;

    /**
     * @param int $idSubscriber
     * @param int $idSubscriptionField
     * @param \DateTime $subDate
     */
    public function __construct($idSubscriber, $idSubscriptionField, \DateTime $subDate)
    {
      $this->idSubscriber = $idSubscriber;
      $this->idSubscriptionField = $idSubscriptionField;
      $this->subDate = $subDate->format(\DateTime::ATOM);
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
     * @return \mbzSubscriber\SubscribeToSpecificNewsletter
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
     * @return \mbzSubscriber\SubscribeToSpecificNewsletter
     */
    public function setIdSubscriptionField($idSubscriptionField)
    {
      $this->idSubscriptionField = $idSubscriptionField;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubDate()
    {
      if ($this->subDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->subDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $subDate
     * @return \mbzSubscriber\SubscribeToSpecificNewsletter
     */
    public function setSubDate(\DateTime $subDate)
    {
      $this->subDate = $subDate->format(\DateTime::ATOM);
      return $this;
    }

}
