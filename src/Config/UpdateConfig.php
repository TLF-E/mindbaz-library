<?php

namespace mbzConfig;

class UpdateConfig
{

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

    /**
     * @var ConfigParameters $confParameters
     */
    protected $confParameters = null;

    /**
     * @param int $idConfig
     * @param ConfigParameters $confParameters
     */
    public function __construct($idConfig, $confParameters)
    {
      $this->idConfig = $idConfig;
      $this->confParameters = $confParameters;
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
     * @return \mbzConfig\UpdateConfig
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
      return $this;
    }

    /**
     * @return ConfigParameters
     */
    public function getConfParameters()
    {
      return $this->confParameters;
    }

    /**
     * @param ConfigParameters $confParameters
     * @return \mbzConfig\UpdateConfig
     */
    public function setConfParameters($confParameters)
    {
      $this->confParameters = $confParameters;
      return $this;
    }

}
