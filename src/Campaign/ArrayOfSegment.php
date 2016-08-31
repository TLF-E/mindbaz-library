<?php

namespace mbzCampaign;

class ArrayOfSegment
{

    /**
     * @var Segment[] $Segment
     */
    protected $Segment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Segment[]
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param Segment[] $Segment
     * @return \mbzCampaign\ArrayOfSegment
     */
    public function setSegment(array $Segment = null)
    {
      $this->Segment = $Segment;
      return $this;
    }

}
