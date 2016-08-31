<?php

namespace mbzTarget;

class UpdateTargetResponse
{

    /**
     * @var Target $UpdateTargetResult
     */
    protected $UpdateTargetResult = null;

    /**
     * @param Target $UpdateTargetResult
     */
    public function __construct($UpdateTargetResult)
    {
      $this->UpdateTargetResult = $UpdateTargetResult;
    }

    /**
     * @return Target
     */
    public function getUpdateTargetResult()
    {
      return $this->UpdateTargetResult;
    }

    /**
     * @param Target $UpdateTargetResult
     * @return \mbzTarget\UpdateTargetResponse
     */
    public function setUpdateTargetResult($UpdateTargetResult)
    {
      $this->UpdateTargetResult = $UpdateTargetResult;
      return $this;
    }

}
