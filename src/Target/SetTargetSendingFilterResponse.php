<?php

namespace mbzTarget;

class SetTargetSendingFilterResponse
{

    /**
     * @var boolean $SetTargetSendingFilterResult
     */
    protected $SetTargetSendingFilterResult = null;

    /**
     * @param boolean $SetTargetSendingFilterResult
     */
    public function __construct($SetTargetSendingFilterResult)
    {
      $this->SetTargetSendingFilterResult = $SetTargetSendingFilterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTargetSendingFilterResult()
    {
      return $this->SetTargetSendingFilterResult;
    }

    /**
     * @param boolean $SetTargetSendingFilterResult
     * @return \mbzTarget\SetTargetSendingFilterResponse
     */
    public function setSetTargetSendingFilterResult($SetTargetSendingFilterResult)
    {
      $this->SetTargetSendingFilterResult = $SetTargetSendingFilterResult;
      return $this;
    }

}
