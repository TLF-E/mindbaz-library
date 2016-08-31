<?php

namespace mbzSubscriber;

class SubscribeNewSubscriber
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var string $firstProvenance
     */
    protected $firstProvenance = null;

    /**
     * @var \DateTime $subDate
     */
    protected $subDate = null;

    /**
     * @var EcollectMode $collectMode
     */
    protected $collectMode = null;

    /**
     * @var EcollectType $collectType
     */
    protected $collectType = null;

    /**
     * @var boolean $subscribeToPartnersOffers
     */
    protected $subscribeToPartnersOffers = null;

    /**
     * @param int $idSubscriber
     * @param string $firstProvenance
     * @param \DateTime $subDate
     * @param EcollectMode $collectMode
     * @param EcollectType $collectType
     * @param boolean $subscribeToPartnersOffers
     */
    public function __construct($idSubscriber, $firstProvenance, \DateTime $subDate, $collectMode, $collectType, $subscribeToPartnersOffers)
    {
      $this->idSubscriber = $idSubscriber;
      $this->firstProvenance = $firstProvenance;
      $this->subDate = $subDate->format(\DateTime::ATOM);
      $this->collectMode = $collectMode;
      $this->collectType = $collectType;
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
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstProvenance()
    {
      return $this->firstProvenance;
    }

    /**
     * @param string $firstProvenance
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setFirstProvenance($firstProvenance)
    {
      $this->firstProvenance = $firstProvenance;
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
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setSubDate(\DateTime $subDate)
    {
      $this->subDate = $subDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return EcollectMode
     */
    public function getCollectMode()
    {
      return $this->collectMode;
    }

    /**
     * @param EcollectMode $collectMode
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setCollectMode($collectMode)
    {
      $this->collectMode = $collectMode;
      return $this;
    }

    /**
     * @return EcollectType
     */
    public function getCollectType()
    {
      return $this->collectType;
    }

    /**
     * @param EcollectType $collectType
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setCollectType($collectType)
    {
      $this->collectType = $collectType;
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
     * @return \mbzSubscriber\SubscribeNewSubscriber
     */
    public function setSubscribeToPartnersOffers($subscribeToPartnersOffers)
    {
      $this->subscribeToPartnersOffers = $subscribeToPartnersOffers;
      return $this;
    }

}
