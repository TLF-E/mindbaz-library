<?php

namespace mbzConfig;

class ListResponse
{

    /**
     * @var ConfigListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ConfigListResult $ListResult
     */
    public function __construct($ListResult)
    {
      $this->ListResult = $ListResult;
    }

    /**
     * @return ConfigListResult
     */
    public function getListResult()
    {
      return $this->ListResult;
    }

    /**
     * @param ConfigListResult $ListResult
     * @return \mbzConfig\ListResponse
     */
    public function setListResult($ListResult)
    {
      $this->ListResult = $ListResult;
      return $this;
    }

}
