<?php

namespace mbzCampaign;

class ArrayOfSegmentAdvertisement
{

    /**
     * @var SegmentAdvertisement[] $SegmentAdvertisement
     */
    protected $SegmentAdvertisement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SegmentAdvertisement[]
     */
    public function getSegmentAdvertisement()
    {
      return $this->SegmentAdvertisement;
    }

    /**
     * @param SegmentAdvertisement[] $SegmentAdvertisement
     * @return \mbzCampaign\ArrayOfSegmentAdvertisement
     */
    public function setSegmentAdvertisement(array $SegmentAdvertisement = null)
    {
      $this->SegmentAdvertisement = $SegmentAdvertisement;
      return $this;
    }

}
