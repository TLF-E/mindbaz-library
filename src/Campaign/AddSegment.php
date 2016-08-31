<?php

namespace mbzCampaign;

class AddSegment
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var SegmentParameters $newSegment
     */
    protected $newSegment = null;

    /**
     * @param int $idCampaign
     * @param SegmentParameters $newSegment
     */
    public function __construct($idCampaign, $newSegment)
    {
      $this->idCampaign = $idCampaign;
      $this->newSegment = $newSegment;
    }

    /**
     * @return int
     */
    public function getIdCampaign()
    {
      return $this->idCampaign;
    }

    /**
     * @param int $idCampaign
     * @return \mbzCampaign\AddSegment
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return SegmentParameters
     */
    public function getNewSegment()
    {
      return $this->newSegment;
    }

    /**
     * @param SegmentParameters $newSegment
     * @return \mbzCampaign\AddSegment
     */
    public function setNewSegment($newSegment)
    {
      $this->newSegment = $newSegment;
      return $this;
    }

}
