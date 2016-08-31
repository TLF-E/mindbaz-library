<?php

namespace mbzCampaign;

class GetAllTrackedUrlsResponse
{

    /**
     * @var ArrayOfTrackedUrl $GetAllTrackedUrlsResult
     */
    protected $GetAllTrackedUrlsResult = null;

    /**
     * @param ArrayOfTrackedUrl $GetAllTrackedUrlsResult
     */
    public function __construct($GetAllTrackedUrlsResult)
    {
      $this->GetAllTrackedUrlsResult = $GetAllTrackedUrlsResult;
    }

    /**
     * @return ArrayOfTrackedUrl
     */
    public function getGetAllTrackedUrlsResult()
    {
      return $this->GetAllTrackedUrlsResult;
    }

    /**
     * @param ArrayOfTrackedUrl $GetAllTrackedUrlsResult
     * @return \mbzCampaign\GetAllTrackedUrlsResponse
     */
    public function setGetAllTrackedUrlsResult($GetAllTrackedUrlsResult)
    {
      $this->GetAllTrackedUrlsResult = $GetAllTrackedUrlsResult;
      return $this;
    }

}
