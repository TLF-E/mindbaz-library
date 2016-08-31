<?php

namespace mbzCampaign;

class DeleteSegment
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
     * @param int $idCampaign
     * @param int $segmentPosition
     */
    public function __construct($idCampaign, $segmentPosition)
    {
      $this->idCampaign = $idCampaign;
      $this->segmentPosition = $segmentPosition;
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
     * @return \mbzCampaign\DeleteSegment
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
     * @return \mbzCampaign\DeleteSegment
     */
    public function setSegmentPosition($segmentPosition)
    {
      $this->segmentPosition = $segmentPosition;
      return $this;
    }

}
