<?php

namespace mbzTarget;

class GetTargetResponse
{

    /**
     * @var Target $GetTargetResult
     */
    protected $GetTargetResult = null;

    /**
     * @param Target $GetTargetResult
     */
    public function __construct($GetTargetResult)
    {
      $this->GetTargetResult = $GetTargetResult;
    }

    /**
     * @return Target
     */
    public function getGetTargetResult()
    {
      return $this->GetTargetResult;
    }

    /**
     * @param Target $GetTargetResult
     * @return \mbzTarget\GetTargetResponse
     */
    public function setGetTargetResult($GetTargetResult)
    {
      $this->GetTargetResult = $GetTargetResult;
      return $this;
    }

}
