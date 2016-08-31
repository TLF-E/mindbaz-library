<?php

namespace mbzCampaign;

class UpdateSegmentResponse
{

    /**
     * @var boolean $UpdateSegmentResult
     */
    protected $UpdateSegmentResult = null;

    /**
     * @param boolean $UpdateSegmentResult
     */
    public function __construct($UpdateSegmentResult)
    {
      $this->UpdateSegmentResult = $UpdateSegmentResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSegmentResult()
    {
      return $this->UpdateSegmentResult;
    }

    /**
     * @param boolean $UpdateSegmentResult
     * @return \mbzCampaign\UpdateSegmentResponse
     */
    public function setUpdateSegmentResult($UpdateSegmentResult)
    {
      $this->UpdateSegmentResult = $UpdateSegmentResult;
      return $this;
    }

}
