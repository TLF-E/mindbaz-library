<?php

namespace mbzOneshot;

class SendFromCampaignResponse
{

    /**
     * @var string $SendFromCampaignResult
     */
    protected $SendFromCampaignResult = null;

    /**
     * @param string $SendFromCampaignResult
     */
    public function __construct($SendFromCampaignResult)
    {
      $this->SendFromCampaignResult = $SendFromCampaignResult;
    }

    /**
     * @return string
     */
    public function getSendFromCampaignResult()
    {
      return $this->SendFromCampaignResult;
    }

    /**
     * @param string $SendFromCampaignResult
     * @return \mbzOneshot\SendFromCampaignResponse
     */
    public function setSendFromCampaignResult($SendFromCampaignResult)
    {
      $this->SendFromCampaignResult = $SendFromCampaignResult;
      return $this;
    }

}
