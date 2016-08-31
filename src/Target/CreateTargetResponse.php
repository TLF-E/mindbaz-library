<?php

namespace mbzTarget;

class CreateTargetResponse
{

    /**
     * @var Target $CreateTargetResult
     */
    protected $CreateTargetResult = null;

    /**
     * @param Target $CreateTargetResult
     */
    public function __construct($CreateTargetResult)
    {
      $this->CreateTargetResult = $CreateTargetResult;
    }

    /**
     * @return Target
     */
    public function getCreateTargetResult()
    {
      return $this->CreateTargetResult;
    }

    /**
     * @param Target $CreateTargetResult
     * @return \mbzTarget\CreateTargetResponse
     */
    public function setCreateTargetResult($CreateTargetResult)
    {
      $this->CreateTargetResult = $CreateTargetResult;
      return $this;
    }

}
