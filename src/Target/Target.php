<?php

namespace mbzTarget;

class Target
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var TargetParameters $parameters
     */
    protected $parameters = null;

    /**
     * @var \DateTime $creationDate
     */
    protected $creationDate = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    protected $lastUpdateDate = null;

    /**
     * @var ETargetType $targetType
     */
    protected $targetType = null;

    /**
     * @var boolean $hasFieldFilter
     */
    protected $hasFieldFilter = null;

    /**
     * @var boolean $hasGeolocFilter
     */
    protected $hasGeolocFilter = null;

    /**
     * @var boolean $hasSqlFilter
     */
    protected $hasSqlFilter = null;

    /**
     * @var boolean $hasEmailPressureFilter
     */
    protected $hasEmailPressureFilter = null;

    /**
     * @var boolean $hasBehaviourFilter
     */
    protected $hasBehaviourFilter = null;

    /**
     * @var boolean $hasReactivityFilter
     */
    protected $hasReactivityFilter = null;

    /**
     * @var boolean $hasSendingFilter
     */
    protected $hasSendingFilter = null;

    /**
     * @var boolean $hasFileFilter
     */
    protected $hasFileFilter = null;

    /**
     * @param int $idTarget
     * @param \DateTime $creationDate
     * @param \DateTime $lastUpdateDate
     * @param ETargetType $targetType
     * @param boolean $hasFieldFilter
     * @param boolean $hasGeolocFilter
     * @param boolean $hasSqlFilter
     * @param boolean $hasEmailPressureFilter
     * @param boolean $hasBehaviourFilter
     * @param boolean $hasReactivityFilter
     * @param boolean $hasSendingFilter
     * @param boolean $hasFileFilter
     */
    public function __construct($idTarget, \DateTime $creationDate, \DateTime $lastUpdateDate, $targetType, $hasFieldFilter, $hasGeolocFilter, $hasSqlFilter, $hasEmailPressureFilter, $hasBehaviourFilter, $hasReactivityFilter, $hasSendingFilter, $hasFileFilter)
    {
      $this->idTarget = $idTarget;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      $this->targetType = $targetType;
      $this->hasFieldFilter = $hasFieldFilter;
      $this->hasGeolocFilter = $hasGeolocFilter;
      $this->hasSqlFilter = $hasSqlFilter;
      $this->hasEmailPressureFilter = $hasEmailPressureFilter;
      $this->hasBehaviourFilter = $hasBehaviourFilter;
      $this->hasReactivityFilter = $hasReactivityFilter;
      $this->hasSendingFilter = $hasSendingFilter;
      $this->hasFileFilter = $hasFileFilter;
    }

    /**
     * @return int
     */
    public function getIdTarget()
    {
      return $this->idTarget;
    }

    /**
     * @param int $idTarget
     * @return \mbzTarget\Target
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
    }

    /**
     * @return TargetParameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param TargetParameters $parameters
     * @return \mbzTarget\Target
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->creationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationDate
     * @return \mbzTarget\Target
     */
    public function setCreationDate(\DateTime $creationDate)
    {
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
      if ($this->lastUpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastUpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastUpdateDate
     * @return \mbzTarget\Target
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ETargetType
     */
    public function getTargetType()
    {
      return $this->targetType;
    }

    /**
     * @param ETargetType $targetType
     * @return \mbzTarget\Target
     */
    public function setTargetType($targetType)
    {
      $this->targetType = $targetType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasFieldFilter()
    {
      return $this->hasFieldFilter;
    }

    /**
     * @param boolean $hasFieldFilter
     * @return \mbzTarget\Target
     */
    public function setHasFieldFilter($hasFieldFilter)
    {
      $this->hasFieldFilter = $hasFieldFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasGeolocFilter()
    {
      return $this->hasGeolocFilter;
    }

    /**
     * @param boolean $hasGeolocFilter
     * @return \mbzTarget\Target
     */
    public function setHasGeolocFilter($hasGeolocFilter)
    {
      $this->hasGeolocFilter = $hasGeolocFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSqlFilter()
    {
      return $this->hasSqlFilter;
    }

    /**
     * @param boolean $hasSqlFilter
     * @return \mbzTarget\Target
     */
    public function setHasSqlFilter($hasSqlFilter)
    {
      $this->hasSqlFilter = $hasSqlFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasEmailPressureFilter()
    {
      return $this->hasEmailPressureFilter;
    }

    /**
     * @param boolean $hasEmailPressureFilter
     * @return \mbzTarget\Target
     */
    public function setHasEmailPressureFilter($hasEmailPressureFilter)
    {
      $this->hasEmailPressureFilter = $hasEmailPressureFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasBehaviourFilter()
    {
      return $this->hasBehaviourFilter;
    }

    /**
     * @param boolean $hasBehaviourFilter
     * @return \mbzTarget\Target
     */
    public function setHasBehaviourFilter($hasBehaviourFilter)
    {
      $this->hasBehaviourFilter = $hasBehaviourFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasReactivityFilter()
    {
      return $this->hasReactivityFilter;
    }

    /**
     * @param boolean $hasReactivityFilter
     * @return \mbzTarget\Target
     */
    public function setHasReactivityFilter($hasReactivityFilter)
    {
      $this->hasReactivityFilter = $hasReactivityFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSendingFilter()
    {
      return $this->hasSendingFilter;
    }

    /**
     * @param boolean $hasSendingFilter
     * @return \mbzTarget\Target
     */
    public function setHasSendingFilter($hasSendingFilter)
    {
      $this->hasSendingFilter = $hasSendingFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasFileFilter()
    {
      return $this->hasFileFilter;
    }

    /**
     * @param boolean $hasFileFilter
     * @return \mbzTarget\Target
     */
    public function setHasFileFilter($hasFileFilter)
    {
      $this->hasFileFilter = $hasFileFilter;
      return $this;
    }

}
