<?php

namespace mbzCampaign;

class GetAllSegmentIdsResponse
{

    /**
     * @var ArrayOfInt $GetAllSegmentIdsResult
     */
    protected $GetAllSegmentIdsResult = null;

    /**
     * @param ArrayOfInt $GetAllSegmentIdsResult
     */
    public function __construct($GetAllSegmentIdsResult)
    {
      $this->GetAllSegmentIdsResult = $GetAllSegmentIdsResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetAllSegmentIdsResult()
    {
      return $this->GetAllSegmentIdsResult;
    }

    /**
     * @param ArrayOfInt $GetAllSegmentIdsResult
     * @return \mbzCampaign\GetAllSegmentIdsResponse
     */
    public function setGetAllSegmentIdsResult($GetAllSegmentIdsResult)
    {
      $this->GetAllSegmentIdsResult = $GetAllSegmentIdsResult;
      return $this;
    }

}
