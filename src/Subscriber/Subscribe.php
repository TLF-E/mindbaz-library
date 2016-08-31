<?php

namespace mbzSubscriber;

class Subscribe
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var string $lastProvenance
     */
    protected $lastProvenance = null;

    /**
     * @var \DateTime $subDate
     */
    protected $subDate = null;

    /**
     * @var boolean $subscribeToPartnersOffers
     */
    protected $subscribeToPartnersOffers = null;

    /**
     * @param int $idSubscriber
     * @param string $lastProvenance
     * @param \DateTime $subDate
     * @param boolean $subscribeToPartnersOffers
     */
    public function __construct($idSubscriber, $lastProvenance, \DateTime $subDate, $subscribeToPartnersOffers)
    {
      $this->idSubscriber = $idSubscriber;
      $this->lastProvenance = $lastProvenance;
      $this->subDate = $subDate->format(\DateTime::ATOM);
      $this->subscribeToPartnersOffers = $subscribeToPartnersOffers;
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
     * @return \mbzSubscriber\Subscribe
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastProvenance()
    {
      return $this->lastProvenance;
    }

    /**
     * @param string $lastProvenance
     * @return \mbzSubscriber\Subscribe
     */
    public function setLastProvenance($lastProvenance)
    {
      $this->lastProvenance = $lastProvenance;
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
     * @return \mbzSubscriber\Subscribe
     */
    public function setSubDate(\DateTime $subDate)
    {
      $this->subDate = $subDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeToPartnersOffers()
    {
      return $this->subscribeToPartnersOffers;
    }

    /**
     * @param boolean $subscribeToPartnersOffers
     * @return \mbzSubscriber\Subscribe
     */
    public function setSubscribeToPartnersOffers($subscribeToPartnersOffers)
    {
      $this->subscribeToPartnersOffers = $subscribeToPartnersOffers;
      return $this;
    }

}
