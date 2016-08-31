<?php

namespace mbzCampaign;

class TrackAllResponse
{

    /**
     * @var ArrayOfTrackedUrl $TrackAllResult
     */
    protected $TrackAllResult = null;

    /**
     * @param ArrayOfTrackedUrl $TrackAllResult
     */
    public function __construct($TrackAllResult)
    {
      $this->TrackAllResult = $TrackAllResult;
    }

    /**
     * @return ArrayOfTrackedUrl
     */
    public function getTrackAllResult()
    {
      return $this->TrackAllResult;
    }

    /**
     * @param ArrayOfTrackedUrl $TrackAllResult
     * @return \mbzCampaign\TrackAllResponse
     */
    public function setTrackAllResult($TrackAllResult)
    {
      $this->TrackAllResult = $TrackAllResult;
      return $this;
    }

}
