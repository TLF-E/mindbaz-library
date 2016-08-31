<?php

namespace mbzCampaign;

class TrackUrlResponse
{

    /**
     * @var TrackedUrl $TrackUrlResult
     */
    protected $TrackUrlResult = null;

    /**
     * @param TrackedUrl $TrackUrlResult
     */
    public function __construct($TrackUrlResult)
    {
      $this->TrackUrlResult = $TrackUrlResult;
    }

    /**
     * @return TrackedUrl
     */
    public function getTrackUrlResult()
    {
      return $this->TrackUrlResult;
    }

    /**
     * @param TrackedUrl $TrackUrlResult
     * @return \mbzCampaign\TrackUrlResponse
     */
    public function setTrackUrlResult($TrackUrlResult)
    {
      $this->TrackUrlResult = $TrackUrlResult;
      return $this;
    }

}
