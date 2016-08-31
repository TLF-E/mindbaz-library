<?php

namespace mbzCampaign;

class GetAllSegmentsResponse
{

    /**
     * @var ArrayOfSegment $GetAllSegmentsResult
     */
    protected $GetAllSegmentsResult = null;

    /**
     * @param ArrayOfSegment $GetAllSegmentsResult
     */
    public function __construct($GetAllSegmentsResult)
    {
      $this->GetAllSegmentsResult = $GetAllSegmentsResult;
    }

    /**
     * @return ArrayOfSegment
     */
    public function getGetAllSegmentsResult()
    {
      return $this->GetAllSegmentsResult;
    }

    /**
     * @param ArrayOfSegment $GetAllSegmentsResult
     * @return \mbzCampaign\GetAllSegmentsResponse
     */
    public function setGetAllSegmentsResult($GetAllSegmentsResult)
    {
      $this->GetAllSegmentsResult = $GetAllSegmentsResult;
      return $this;
    }

}
