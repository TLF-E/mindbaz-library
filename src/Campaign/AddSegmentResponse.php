<?php

namespace mbzCampaign;

class AddSegmentResponse
{

    /**
     * @var int $AddSegmentResult
     */
    protected $AddSegmentResult = null;

    /**
     * @param int $AddSegmentResult
     */
    public function __construct($AddSegmentResult)
    {
      $this->AddSegmentResult = $AddSegmentResult;
    }

    /**
     * @return int
     */
    public function getAddSegmentResult()
    {
      return $this->AddSegmentResult;
    }

    /**
     * @param int $AddSegmentResult
     * @return \mbzCampaign\AddSegmentResponse
     */
    public function setAddSegmentResult($AddSegmentResult)
    {
      $this->AddSegmentResult = $AddSegmentResult;
      return $this;
    }

}
