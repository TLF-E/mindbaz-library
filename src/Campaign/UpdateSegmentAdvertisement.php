<?php

namespace mbzCampaign;

class UpdateSegmentAdvertisement
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
     * @var SegmentAdvertisement $segmentAdvertissement
     */
    protected $segmentAdvertissement = null;

    /**
     * @param int $idCampaign
     * @param int $segmentPosition
     * @param SegmentAdvertisement $segmentAdvertissement
     */
    public function __construct($idCampaign, $segmentPosition, $segmentAdvertissement)
    {
      $this->idCampaign = $idCampaign;
      $this->segmentPosition = $segmentPosition;
      $this->segmentAdvertissement = $segmentAdvertissement;
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
     * @return \mbzCampaign\UpdateSegmentAdvertisement
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
     * @return \mbzCampaign\UpdateSegmentAdvertisement
     */
    public function setSegmentPosition($segmentPosition)
    {
      $this->segmentPosition = $segmentPosition;
      return $this;
    }

    /**
     * @return SegmentAdvertisement
     */
    public function getSegmentAdvertissement()
    {
      return $this->segmentAdvertissement;
    }

    /**
     * @param SegmentAdvertisement $segmentAdvertissement
     * @return \mbzCampaign\UpdateSegmentAdvertisement
     */
    public function setSegmentAdvertissement($segmentAdvertissement)
    {
      $this->segmentAdvertissement = $segmentAdvertissement;
      return $this;
    }

}
