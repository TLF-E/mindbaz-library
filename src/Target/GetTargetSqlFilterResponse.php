<?php

namespace mbzTarget;

class GetTargetSqlFilterResponse
{

    /**
     * @var TargetSqlFilter $GetTargetSqlFilterResult
     */
    protected $GetTargetSqlFilterResult = null;

    /**
     * @param TargetSqlFilter $GetTargetSqlFilterResult
     */
    public function __construct($GetTargetSqlFilterResult)
    {
      $this->GetTargetSqlFilterResult = $GetTargetSqlFilterResult;
    }

    /**
     * @return TargetSqlFilter
     */
    public function getGetTargetSqlFilterResult()
    {
      return $this->GetTargetSqlFilterResult;
    }

    /**
     * @param TargetSqlFilter $GetTargetSqlFilterResult
     * @return \mbzTarget\GetTargetSqlFilterResponse
     */
    public function setGetTargetSqlFilterResult($GetTargetSqlFilterResult)
    {
      $this->GetTargetSqlFilterResult = $GetTargetSqlFilterResult;
      return $this;
    }

}
