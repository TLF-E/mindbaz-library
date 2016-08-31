<?php

namespace mbzConfig;

class Config
{

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

    /**
     * @var ConfigParameters $parameters
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
     * @param int $idConfig
     * @param \DateTime $creationDate
     * @param \DateTime $lastUpdateDate
     */
    public function __construct($idConfig, \DateTime $creationDate, \DateTime $lastUpdateDate)
    {
      $this->idConfig = $idConfig;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getIdConfig()
    {
      return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return \mbzConfig\Config
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
      return $this;
    }

    /**
     * @return ConfigParameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param ConfigParameters $parameters
     * @return \mbzConfig\Config
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
     * @return \mbzConfig\Config
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
     * @return \mbzConfig\Config
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

}
