<?php

namespace mbzCampaign;

class SchedulingInfos
{

    /**
     * @var string $calendar
     */
    protected $calendar = null;

    /**
     * @var int $idProgType
     */
    protected $idProgType = null;

    /**
     * @var string $progType
     */
    protected $progType = null;

    /**
     * @var int $idProgState
     */
    protected $idProgState = null;

    /**
     * @var string $progState
     */
    protected $progState = null;

    /**
     * @param int $idProgType
     * @param int $idProgState
     */
    public function __construct($idProgType, $idProgState)
    {
      $this->idProgType = $idProgType;
      $this->idProgState = $idProgState;
    }

    /**
     * @return string
     */
    public function getCalendar()
    {
      return $this->calendar;
    }

    /**
     * @param string $calendar
     * @return \mbzCampaign\SchedulingInfos
     */
    public function setCalendar($calendar)
    {
      $this->calendar = $calendar;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdProgType()
    {
      return $this->idProgType;
    }

    /**
     * @param int $idProgType
     * @return \mbzCampaign\SchedulingInfos
     */
    public function setIdProgType($idProgType)
    {
      $this->idProgType = $idProgType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgType()
    {
      return $this->progType;
    }

    /**
     * @param string $progType
     * @return \mbzCampaign\SchedulingInfos
     */
    public function setProgType($progType)
    {
      $this->progType = $progType;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdProgState()
    {
      return $this->idProgState;
    }

    /**
     * @param int $idProgState
     * @return \mbzCampaign\SchedulingInfos
     */
    public function setIdProgState($idProgState)
    {
      $this->idProgState = $idProgState;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgState()
    {
      return $this->progState;
    }

    /**
     * @param string $progState
     * @return \mbzCampaign\SchedulingInfos
     */
    public function setProgState($progState)
    {
      $this->progState = $progState;
      return $this;
    }

}
