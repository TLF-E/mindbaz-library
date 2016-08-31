<?php

namespace mbzCampaign;

class ArrayOfCampaignListRecords
{

    /**
     * @var CampaignListRecords[] $CampaignListRecords
     */
    protected $CampaignListRecords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignListRecords[]
     */
    public function getCampaignListRecords()
    {
      return $this->CampaignListRecords;
    }

    /**
     * @param CampaignListRecords[] $CampaignListRecords
     * @return \mbzCampaign\ArrayOfCampaignListRecords
     */
    public function setCampaignListRecords(array $CampaignListRecords = null)
    {
      $this->CampaignListRecords = $CampaignListRecords;
      return $this;
    }

}
