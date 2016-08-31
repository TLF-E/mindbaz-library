<?php

namespace mbzCampaign;

class CountSegmentResponse
{

    /**
     * @var ArrayOfSegmentCountInfos $CountSegmentResult
     */
    protected $CountSegmentResult = null;

    /**
     * @param ArrayOfSegmentCountInfos $CountSegmentResult
     */
    public function __construct($CountSegmentResult)
    {
      $this->CountSegmentResult = $CountSegmentResult;
    }

    /**
     * @return ArrayOfSegmentCountInfos
     */
    public function getCountSegmentResult()
    {
      return $this->CountSegmentResult;
    }

    /**
     * @param ArrayOfSegmentCountInfos $CountSegmentResult
     * @return \mbzCampaign\CountSegmentResponse
     */
    public function setCountSegmentResult($CountSegmentResult)
    {
      $this->CountSegmentResult = $CountSegmentResult;
      return $this;
    }

}
