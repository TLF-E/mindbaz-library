<?php

namespace mbzCampaign;

class ArrayOfSegmentCountInfos
{

    /**
     * @var SegmentCountInfos[] $SegmentCountInfos
     */
    protected $SegmentCountInfos = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SegmentCountInfos[]
     */
    public function getSegmentCountInfos()
    {
      return $this->SegmentCountInfos;
    }

    /**
     * @param SegmentCountInfos[] $SegmentCountInfos
     * @return \mbzCampaign\ArrayOfSegmentCountInfos
     */
    public function setSegmentCountInfos(array $SegmentCountInfos = null)
    {
      $this->SegmentCountInfos = $SegmentCountInfos;
      return $this;
    }

}
