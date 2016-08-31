<?php

namespace mbzCampaign;

class SegmentParameters
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var boolean $isExcluded
     */
    protected $isExcluded = null;

    /**
     * @var boolean $isRandom
     */
    protected $isRandom = null;

    /**
     * @var int $percent
     */
    protected $percent = null;

    /**
     * @var string $mailobject
     */
    protected $mailobject = null;

    /**
     * @param int $idTarget
     * @param boolean $isExcluded
     * @param boolean $isRandom
     * @param int $percent
     */
    public function __construct($idTarget, $isExcluded, $isRandom, $percent)
    {
      $this->idTarget = $idTarget;
      $this->isExcluded = $isExcluded;
      $this->isRandom = $isRandom;
      $this->percent = $percent;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \mbzCampaign\SegmentParameters
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdTarget()
    {
      return $this->idTarget;
    }

    /**
     * @param int $idTarget
     * @return \mbzCampaign\SegmentParameters
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExcluded()
    {
      return $this->isExcluded;
    }

    /**
     * @param boolean $isExcluded
     * @return \mbzCampaign\SegmentParameters
     */
    public function setIsExcluded($isExcluded)
    {
      $this->isExcluded = $isExcluded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRandom()
    {
      return $this->isRandom;
    }

    /**
     * @param boolean $isRandom
     * @return \mbzCampaign\SegmentParameters
     */
    public function setIsRandom($isRandom)
    {
      $this->isRandom = $isRandom;
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
     * @return \mbzCampaign\SegmentParameters
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailobject()
    {
      return $this->mailobject;
    }

    /**
     * @param string $mailobject
     * @return \mbzCampaign\SegmentParameters
     */
    public function setMailobject($mailobject)
    {
      $this->mailobject = $mailobject;
      return $this;
    }

}
