<?php

namespace mbzCampaign;

class UpdateSegmentAdvertisementResponse
{

    /**
     * @var boolean $UpdateSegmentAdvertisementResult
     */
    protected $UpdateSegmentAdvertisementResult = null;

    /**
     * @param boolean $UpdateSegmentAdvertisementResult
     */
    public function __construct($UpdateSegmentAdvertisementResult)
    {
      $this->UpdateSegmentAdvertisementResult = $UpdateSegmentAdvertisementResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSegmentAdvertisementResult()
    {
      return $this->UpdateSegmentAdvertisementResult;
    }

    /**
     * @param boolean $UpdateSegmentAdvertisementResult
     * @return \mbzCampaign\UpdateSegmentAdvertisementResponse
     */
    public function setUpdateSegmentAdvertisementResult($UpdateSegmentAdvertisementResult)
    {
      $this->UpdateSegmentAdvertisementResult = $UpdateSegmentAdvertisementResult;
      return $this;
    }

}
