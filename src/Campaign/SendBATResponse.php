<?php

namespace mbzCampaign;

class SendBATResponse
{

    /**
     * @var boolean $SendBATResult
     */
    protected $SendBATResult = null;

    /**
     * @param boolean $SendBATResult
     */
    public function __construct($SendBATResult)
    {
      $this->SendBATResult = $SendBATResult;
    }

    /**
     * @return boolean
     */
    public function getSendBATResult()
    {
      return $this->SendBATResult;
    }

    /**
     * @param boolean $SendBATResult
     * @return \mbzCampaign\SendBATResponse
     */
    public function setSendBATResult($SendBATResult)
    {
      $this->SendBATResult = $SendBATResult;
      return $this;
    }

}
