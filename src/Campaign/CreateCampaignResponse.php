<?php

namespace mbzCampaign;

class CreateCampaignResponse
{

    /**
     * @var Campaign $CreateCampaignResult
     */
    protected $CreateCampaignResult = null;

    /**
     * @param Campaign $CreateCampaignResult
     */
    public function __construct($CreateCampaignResult)
    {
      $this->CreateCampaignResult = $CreateCampaignResult;
    }

    /**
     * @return Campaign
     */
    public function getCreateCampaignResult()
    {
      return $this->CreateCampaignResult;
    }

    /**
     * @param Campaign $CreateCampaignResult
     * @return \mbzCampaign\CreateCampaignResponse
     */
    public function setCreateCampaignResult($CreateCampaignResult)
    {
      $this->CreateCampaignResult = $CreateCampaignResult;
      return $this;
    }

}
