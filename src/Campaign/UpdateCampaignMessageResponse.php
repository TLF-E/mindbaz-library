<?php

namespace mbzCampaign;

class UpdateCampaignMessageResponse
{

    /**
     * @var boolean $UpdateCampaignMessageResult
     */
    protected $UpdateCampaignMessageResult = null;

    /**
     * @param boolean $UpdateCampaignMessageResult
     */
    public function __construct($UpdateCampaignMessageResult)
    {
      $this->UpdateCampaignMessageResult = $UpdateCampaignMessageResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateCampaignMessageResult()
    {
      return $this->UpdateCampaignMessageResult;
    }

    /**
     * @param boolean $UpdateCampaignMessageResult
     * @return \mbzCampaign\UpdateCampaignMessageResponse
     */
    public function setUpdateCampaignMessageResult($UpdateCampaignMessageResult)
    {
      $this->UpdateCampaignMessageResult = $UpdateCampaignMessageResult;
      return $this;
    }

}
