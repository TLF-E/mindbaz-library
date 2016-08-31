<?php

namespace mbzConfig;

class CreateConfigResponse
{

    /**
     * @var Config $CreateConfigResult
     */
    protected $CreateConfigResult = null;

    /**
     * @param Config $CreateConfigResult
     */
    public function __construct($CreateConfigResult)
    {
      $this->CreateConfigResult = $CreateConfigResult;
    }

    /**
     * @return Config
     */
    public function getCreateConfigResult()
    {
      return $this->CreateConfigResult;
    }

    /**
     * @param Config $CreateConfigResult
     * @return \mbzConfig\CreateConfigResponse
     */
    public function setCreateConfigResult($CreateConfigResult)
    {
      $this->CreateConfigResult = $CreateConfigResult;
      return $this;
    }

}
