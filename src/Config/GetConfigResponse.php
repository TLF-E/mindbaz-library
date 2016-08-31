<?php

namespace mbzConfig;

class GetConfigResponse
{

    /**
     * @var Config $GetConfigResult
     */
    protected $GetConfigResult = null;

    /**
     * @param Config $GetConfigResult
     */
    public function __construct($GetConfigResult)
    {
      $this->GetConfigResult = $GetConfigResult;
    }

    /**
     * @return Config
     */
    public function getGetConfigResult()
    {
      return $this->GetConfigResult;
    }

    /**
     * @param Config $GetConfigResult
     * @return \mbzConfig\GetConfigResponse
     */
    public function setGetConfigResult($GetConfigResult)
    {
      $this->GetConfigResult = $GetConfigResult;
      return $this;
    }

}
