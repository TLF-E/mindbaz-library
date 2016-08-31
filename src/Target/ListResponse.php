<?php

namespace mbzTarget;

class ListResponse
{

    /**
     * @var TargetListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param TargetListResult $ListResult
     */
    public function __construct($ListResult)
    {
      $this->ListResult = $ListResult;
    }

    /**
     * @return TargetListResult
     */
    public function getListResult()
    {
      return $this->ListResult;
    }

    /**
     * @param TargetListResult $ListResult
     * @return \mbzTarget\ListResponse
     */
    public function setListResult($ListResult)
    {
      $this->ListResult = $ListResult;
      return $this;
    }

}
