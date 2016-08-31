<?php

namespace mbzCampaign;

class CountAllSegmentsResponse
{

    /**
     * @var ArrayOfSegmentCountInfos $CountAllSegmentsResult
     */
    protected $CountAllSegmentsResult = null;

    /**
     * @param ArrayOfSegmentCountInfos $CountAllSegmentsResult
     */
    public function __construct($CountAllSegmentsResult)
    {
      $this->CountAllSegmentsResult = $CountAllSegmentsResult;
    }

    /**
     * @return ArrayOfSegmentCountInfos
     */
    public function getCountAllSegmentsResult()
    {
      return $this->CountAllSegmentsResult;
    }

    /**
     * @param ArrayOfSegmentCountInfos $CountAllSegmentsResult
     * @return \mbzCampaign\CountAllSegmentsResponse
     */
    public function setCountAllSegmentsResult($CountAllSegmentsResult)
    {
      $this->CountAllSegmentsResult = $CountAllSegmentsResult;
      return $this;
    }

}
