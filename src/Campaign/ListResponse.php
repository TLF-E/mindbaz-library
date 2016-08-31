<?php

namespace mbzCampaign;

class ListResponse
{

    /**
     * @var CampaignListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param CampaignListResult $ListResult
     */
    public function __construct($ListResult)
    {
      $this->ListResult = $ListResult;
    }

    /**
     * @return CampaignListResult
     */
    public function getListResult()
    {
      return $this->ListResult;
    }

    /**
     * @param CampaignListResult $ListResult
     * @return \mbzCampaign\ListResponse
     */
    public function setListResult($ListResult)
    {
      $this->ListResult = $ListResult;
      return $this;
    }

}
