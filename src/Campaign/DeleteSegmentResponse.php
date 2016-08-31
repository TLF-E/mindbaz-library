<?php

namespace mbzCampaign;

class DeleteSegmentResponse
{

    /**
     * @var ArrayOfInt $DeleteSegmentResult
     */
    protected $DeleteSegmentResult = null;

    /**
     * @param ArrayOfInt $DeleteSegmentResult
     */
    public function __construct($DeleteSegmentResult)
    {
      $this->DeleteSegmentResult = $DeleteSegmentResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getDeleteSegmentResult()
    {
      return $this->DeleteSegmentResult;
    }

    /**
     * @param ArrayOfInt $DeleteSegmentResult
     * @return \mbzCampaign\DeleteSegmentResponse
     */
    public function setDeleteSegmentResult($DeleteSegmentResult)
    {
      $this->DeleteSegmentResult = $DeleteSegmentResult;
      return $this;
    }

}
