<?php

namespace mbzCampaign;

class SegmentCountInfos
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
     * @var int $percent
     */
    protected $percent = null;

    /**
     * @var int $targetCount
     */
    protected $targetCount = null;

    /**
     * @var int $deduplicatedCount
     */
    protected $deduplicatedCount = null;

    /**
     * @var int $segmentCount
     */
    protected $segmentCount = null;

    /**
     * @param int $idSegment
     * @param int $position
     * @param int $percent
     * @param int $targetCount
     * @param int $deduplicatedCount
     * @param int $segmentCount
     */
    public function __construct($idSegment, $position, $percent, $targetCount, $deduplicatedCount, $segmentCount)
    {
      $this->idSegment = $idSegment;
      $this->position = $position;
      $this->percent = $percent;
      $this->targetCount = $targetCount;
      $this->deduplicatedCount = $deduplicatedCount;
      $this->segmentCount = $segmentCount;
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
     * @return \mbzCampaign\SegmentCountInfos
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
     * @return \mbzCampaign\SegmentCountInfos
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
      return $this->percent;
    }

    /**
     * @param int $percent
     * @return \mbzCampaign\SegmentCountInfos
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetCount()
    {
      return $this->targetCount;
    }

    /**
     * @param int $targetCount
     * @return \mbzCampaign\SegmentCountInfos
     */
    public function setTargetCount($targetCount)
    {
      $this->targetCount = $targetCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeduplicatedCount()
    {
      return $this->deduplicatedCount;
    }

    /**
     * @param int $deduplicatedCount
     * @return \mbzCampaign\SegmentCountInfos
     */
    public function setDeduplicatedCount($deduplicatedCount)
    {
      $this->deduplicatedCount = $deduplicatedCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentCount()
    {
      return $this->segmentCount;
    }

    /**
     * @param int $segmentCount
     * @return \mbzCampaign\SegmentCountInfos
     */
    public function setSegmentCount($segmentCount)
    {
      $this->segmentCount = $segmentCount;
      return $this;
    }

}
