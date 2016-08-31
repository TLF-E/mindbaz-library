<?php

namespace mbzCampaign;

class GetCampaignResponse
{

    /**
     * @var Campaign $GetCampaignResult
     */
    protected $GetCampaignResult = null;

    /**
     * @param Campaign $GetCampaignResult
     */
    public function __construct($GetCampaignResult)
    {
      $this->GetCampaignResult = $GetCampaignResult;
    }

    /**
     * @return Campaign
     */
    public function getGetCampaignResult()
    {
      return $this->GetCampaignResult;
    }

    /**
     * @param Campaign $GetCampaignResult
     * @return \mbzCampaign\GetCampaignResponse
     */
    public function setGetCampaignResult($GetCampaignResult)
    {
      $this->GetCampaignResult = $GetCampaignResult;
      return $this;
    }

}
