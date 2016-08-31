<?php

namespace mbzCampaign;

class UpdateSegment
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var int $segmentPosition
     */
    protected $segmentPosition = null;

    /**
     * @var SegmentParameters $segmentParameters
     */
    protected $segmentParameters = null;

    /**
     * @param int $idCampaign
     * @param int $segmentPosition
     * @param SegmentParameters $segmentParameters
     */
    public function __construct($idCampaign, $segmentPosition, $segmentParameters)
    {
      $this->idCampaign = $idCampaign;
      $this->segmentPosition = $segmentPosition;
      $this->segmentParameters = $segmentParameters;
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
     * @return \mbzCampaign\UpdateSegment
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentPosition()
    {
      return $this->segmentPosition;
    }

    /**
     * @param int $segmentPosition
     * @return \mbzCampaign\UpdateSegment
     */
    public function setSegmentPosition($segmentPosition)
    {
      $this->segmentPosition = $segmentPosition;
      return $this;
    }

    /**
     * @return SegmentParameters
     */
    public function getSegmentParameters()
    {
      return $this->segmentParameters;
    }

    /**
     * @param SegmentParameters $segmentParameters
     * @return \mbzCampaign\UpdateSegment
     */
    public function setSegmentParameters($segmentParameters)
    {
      $this->segmentParameters = $segmentParameters;
      return $this;
    }

}
