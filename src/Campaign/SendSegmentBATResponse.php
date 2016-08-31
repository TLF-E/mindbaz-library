<?php

namespace mbzCampaign;

class SendSegmentBATResponse
{

    /**
     * @var boolean $SendSegmentBATResult
     */
    protected $SendSegmentBATResult = null;

    /**
     * @param boolean $SendSegmentBATResult
     */
    public function __construct($SendSegmentBATResult)
    {
      $this->SendSegmentBATResult = $SendSegmentBATResult;
    }

    /**
     * @return boolean
     */
    public function getSendSegmentBATResult()
    {
      return $this->SendSegmentBATResult;
    }

    /**
     * @param boolean $SendSegmentBATResult
     * @return \mbzCampaign\SendSegmentBATResponse
     */
    public function setSendSegmentBATResult($SendSegmentBATResult)
    {
      $this->SendSegmentBATResult = $SendSegmentBATResult;
      return $this;
    }

}
