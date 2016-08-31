<?php

namespace mbzCampaign;

class Segment
{

    /**
     * @var int $idSegment
     */
    protected $idSegment = null;

    /**
     * @var int $position
     */
    protected $position = null;

    /**
     * @var SegmentParameters $parameters
     */
    protected $parameters = null;

    /**
     * @var ArrayOfSegmentAdvertisement $advertisements
     */
    protected $advertisements = null;

    /**
     * @var int $lastCount
     */
    protected $lastCount = null;

    /**
     * @var float $lastSpamScore
     */
    protected $lastSpamScore = null;

    /**
     * @param int $idSegment
     * @param int $position
     * @param int $lastCount
     * @param float $lastSpamScore
     */
    public function __construct($idSegment, $position, $lastCount, $lastSpamScore)
    {
      $this->idSegment = $idSegment;
      $this->position = $position;
      $this->lastCount = $lastCount;
      $this->lastSpamScore = $lastSpamScore;
    }

    /**
     * @return int
     */
    public function getIdSegment()
    {
      return $this->idSegment;
    }

    /**
     * @param int $idSegment
     * @return \mbzCampaign\Segment
     */
    public function setIdSegment($idSegment)
    {
      $this->idSegment = $idSegment;
      return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param int $position
     * @return \mbzCampaign\Segment
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return SegmentParameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param SegmentParameters $parameters
     * @return \mbzCampaign\Segment
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return ArrayOfSegmentAdvertisement
     */
    public function getAdvertisements()
    {
      return $this->advertisements;
    }

    /**
     * @param ArrayOfSegmentAdvertisement $advertisements
     * @return \mbzCampaign\Segment
     */
    public function setAdvertisements($advertisements)
    {
      $this->advertisements = $advertisements;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastCount()
    {
      return $this->lastCount;
    }

    /**
     * @param int $lastCount
     * @return \mbzCampaign\Segment
     */
    public function setLastCount($lastCount)
    {
      $this->lastCount = $lastCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getLastSpamScore()
    {
      return $this->lastSpamScore;
    }

    /**
     * @param float $lastSpamScore
     * @return \mbzCampaign\Segment
     */
    public function setLastSpamScore($lastSpamScore)
    {
      $this->lastSpamScore = $lastSpamScore;
      return $this;
    }

}
