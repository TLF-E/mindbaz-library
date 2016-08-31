<?php

namespace mbzCampaign;

class GetSegmentResponse
{

    /**
     * @var Segment $GetSegmentResult
     */
    protected $GetSegmentResult = null;

    /**
     * @param Segment $GetSegmentResult
     */
    public function __construct($GetSegmentResult)
    {
      $this->GetSegmentResult = $GetSegmentResult;
    }

    /**
     * @return Segment
     */
    public function getGetSegmentResult()
    {
      return $this->GetSegmentResult;
    }

    /**
     * @param Segment $GetSegmentResult
     * @return \mbzCampaign\GetSegmentResponse
     */
    public function setGetSegmentResult($GetSegmentResult)
    {
      $this->GetSegmentResult = $GetSegmentResult;
      return $this;
    }

}
