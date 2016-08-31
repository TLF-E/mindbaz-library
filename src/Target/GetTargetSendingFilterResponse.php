<?php

namespace mbzTarget;

class GetTargetSendingFilterResponse
{

    /**
     * @var TargetSendingFilter $GetTargetSendingFilterResult
     */
    protected $GetTargetSendingFilterResult = null;

    /**
     * @param TargetSendingFilter $GetTargetSendingFilterResult
     */
    public function __construct($GetTargetSendingFilterResult)
    {
      $this->GetTargetSendingFilterResult = $GetTargetSendingFilterResult;
    }

    /**
     * @return TargetSendingFilter
     */
    public function getGetTargetSendingFilterResult()
    {
      return $this->GetTargetSendingFilterResult;
    }

    /**
     * @param TargetSendingFilter $GetTargetSendingFilterResult
     * @return \mbzTarget\GetTargetSendingFilterResponse
     */
    public function setGetTargetSendingFilterResult($GetTargetSendingFilterResult)
    {
      $this->GetTargetSendingFilterResult = $GetTargetSendingFilterResult;
      return $this;
    }

}
