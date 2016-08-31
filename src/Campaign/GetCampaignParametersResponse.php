<?php

namespace mbzCampaign;

class GetCampaignParametersResponse
{

    /**
     * @var CampaignParameters $GetCampaignParametersResult
     */
    protected $GetCampaignParametersResult = null;

    /**
     * @param CampaignParameters $GetCampaignParametersResult
     */
    public function __construct($GetCampaignParametersResult)
    {
      $this->GetCampaignParametersResult = $GetCampaignParametersResult;
    }

    /**
     * @return CampaignParameters
     */
    public function getGetCampaignParametersResult()
    {
      return $this->GetCampaignParametersResult;
    }

    /**
     * @param CampaignParameters $GetCampaignParametersResult
     * @return \mbzCampaign\GetCampaignParametersResponse
     */
    public function setGetCampaignParametersResult($GetCampaignParametersResult)
    {
      $this->GetCampaignParametersResult = $GetCampaignParametersResult;
      return $this;
    }

}
