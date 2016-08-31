<?php

namespace mbzConfig;

class DeleteConfig
{

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

    /**
     * @param int $idConfig
     */
    public function __construct($idConfig)
    {
      $this->idConfig = $idConfig;
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
     * @return \mbzConfig\DeleteConfig
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
      return $this;
    }

}
