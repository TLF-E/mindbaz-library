<?php

namespace mbzCampaign;

class ReorganizeSegmentPositions
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var ArrayOfInt $idSegmentsArray
     */
    protected $idSegmentsArray = null;

    /**
     * @param int $idCampaign
     * @param ArrayOfInt $idSegmentsArray
     */
    public function __construct($idCampaign, $idSegmentsArray)
    {
      $this->idCampaign = $idCampaign;
      $this->idSegmentsArray = $idSegmentsArray;
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
     * @return \mbzCampaign\ReorganizeSegmentPositions
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getIdSegmentsArray()
    {
      return $this->idSegmentsArray;
    }

    /**
     * @param ArrayOfInt $idSegmentsArray
     * @return \mbzCampaign\ReorganizeSegmentPositions
     */
    public function setIdSegmentsArray($idSegmentsArray)
    {
      $this->idSegmentsArray = $idSegmentsArray;
      return $this;
    }

}
