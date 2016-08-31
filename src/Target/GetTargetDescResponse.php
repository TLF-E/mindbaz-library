<?php

namespace mbzTarget;

class GetTargetDescResponse
{

    /**
     * @var string $GetTargetDescResult
     */
    protected $GetTargetDescResult = null;

    /**
     * @param string $GetTargetDescResult
     */
    public function __construct($GetTargetDescResult)
    {
      $this->GetTargetDescResult = $GetTargetDescResult;
    }

    /**
     * @return string
     */
    public function getGetTargetDescResult()
    {
      return $this->GetTargetDescResult;
    }

    /**
     * @param string $GetTargetDescResult
     * @return \mbzTarget\GetTargetDescResponse
     */
    public function setGetTargetDescResult($GetTargetDescResult)
    {
      $this->GetTargetDescResult = $GetTargetDescResult;
      return $this;
    }

}
