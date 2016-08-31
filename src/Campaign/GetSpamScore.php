<?php

namespace mbzCampaign;

class GetSpamScore
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
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @param int $idCampaign
     * @param int $segmentPosition
     * @param int $idSubscriber
     */
    public function __construct($idCampaign, $segmentPosition, $idSubscriber)
    {
      $this->idCampaign = $idCampaign;
      $this->segmentPosition = $segmentPosition;
      $this->idSubscriber = $idSubscriber;
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
     * @return \mbzCampaign\GetSpamScore
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
     * @return \mbzCampaign\GetSpamScore
     */
    public function setSegmentPosition($segmentPosition)
    {
      $this->segmentPosition = $segmentPosition;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSubscriber()
    {
      return $this->idSubscriber;
    }

    /**
     * @param int $idSubscriber
     * @return \mbzCampaign\GetSpamScore
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

}
