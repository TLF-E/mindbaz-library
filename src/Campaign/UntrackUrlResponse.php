<?php

namespace mbzCampaign;

class UntrackUrlResponse
{

    /**
     * @var boolean $UntrackUrlResult
     */
    protected $UntrackUrlResult = null;

    /**
     * @param boolean $UntrackUrlResult
     */
    public function __construct($UntrackUrlResult)
    {
      $this->UntrackUrlResult = $UntrackUrlResult;
    }

    /**
     * @return boolean
     */
    public function getUntrackUrlResult()
    {
      return $this->UntrackUrlResult;
    }

    /**
     * @param boolean $UntrackUrlResult
     * @return \mbzCampaign\UntrackUrlResponse
     */
    public function setUntrackUrlResult($UntrackUrlResult)
    {
      $this->UntrackUrlResult = $UntrackUrlResult;
      return $this;
    }

}
