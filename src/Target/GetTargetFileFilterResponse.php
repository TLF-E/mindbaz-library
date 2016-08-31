<?php

namespace mbzTarget;

class GetTargetFileFilterResponse
{

    /**
     * @var TargetFileFilter $GetTargetFileFilterResult
     */
    protected $GetTargetFileFilterResult = null;

    /**
     * @param TargetFileFilter $GetTargetFileFilterResult
     */
    public function __construct($GetTargetFileFilterResult)
    {
      $this->GetTargetFileFilterResult = $GetTargetFileFilterResult;
    }

    /**
     * @return TargetFileFilter
     */
    public function getGetTargetFileFilterResult()
    {
      return $this->GetTargetFileFilterResult;
    }

    /**
     * @param TargetFileFilter $GetTargetFileFilterResult
     * @return \mbzTarget\GetTargetFileFilterResponse
     */
    public function setGetTargetFileFilterResult($GetTargetFileFilterResult)
    {
      $this->GetTargetFileFilterResult = $GetTargetFileFilterResult;
      return $this;
    }

}
