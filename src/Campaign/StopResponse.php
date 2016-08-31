<?php

namespace mbzCampaign;

class StopResponse
{

    /**
     * @var boolean $StopResult
     */
    protected $StopResult = null;

    /**
     * @param boolean $StopResult
     */
    public function __construct($StopResult)
    {
      $this->StopResult = $StopResult;
    }

    /**
     * @return boolean
     */
    public function getStopResult()
    {
      return $this->StopResult;
    }

    /**
     * @param boolean $StopResult
     * @return \mbzCampaign\StopResponse
     */
    public function setStopResult($StopResult)
    {
      $this->StopResult = $StopResult;
      return $this;
    }

}
