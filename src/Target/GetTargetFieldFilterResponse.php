<?php

namespace mbzTarget;

class GetTargetFieldFilterResponse
{

    /**
     * @var TargetFieldFilter $GetTargetFieldFilterResult
     */
    protected $GetTargetFieldFilterResult = null;

    /**
     * @param TargetFieldFilter $GetTargetFieldFilterResult
     */
    public function __construct($GetTargetFieldFilterResult)
    {
      $this->GetTargetFieldFilterResult = $GetTargetFieldFilterResult;
    }

    /**
     * @return TargetFieldFilter
     */
    public function getGetTargetFieldFilterResult()
    {
      return $this->GetTargetFieldFilterResult;
    }

    /**
     * @param TargetFieldFilter $GetTargetFieldFilterResult
     * @return \mbzTarget\GetTargetFieldFilterResponse
     */
    public function setGetTargetFieldFilterResult($GetTargetFieldFilterResult)
    {
      $this->GetTargetFieldFilterResult = $GetTargetFieldFilterResult;
      return $this;
    }

}
