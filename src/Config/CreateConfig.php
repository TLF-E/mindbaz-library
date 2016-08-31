<?php

namespace mbzConfig;

class CreateConfig
{

    /**
     * @var ConfigParameters $confParameters
     */
    protected $confParameters = null;

    /**
     * @param ConfigParameters $confParameters
     */
    public function __construct($confParameters)
    {
      $this->confParameters = $confParameters;
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
     * @return \mbzConfig\CreateConfig
     */
    public function setConfParameters($confParameters)
    {
      $this->confParameters = $confParameters;
      return $this;
    }

}
