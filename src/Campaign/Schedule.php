<?php

namespace mbzCampaign;

class Schedule
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var ArrayOfDateTime $calendarDates
     */
    protected $calendarDates = null;

    /**
     * @param int $idCampaign
     * @param ArrayOfDateTime $calendarDates
     */
    public function __construct($idCampaign, $calendarDates)
    {
      $this->idCampaign = $idCampaign;
      $this->calendarDates = $calendarDates;
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
     * @return \mbzCampaign\Schedule
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return ArrayOfDateTime
     */
    public function getCalendarDates()
    {
      return $this->calendarDates;
    }

    /**
     * @param ArrayOfDateTime $calendarDates
     * @return \mbzCampaign\Schedule
     */
    public function setCalendarDates($calendarDates)
    {
      $this->calendarDates = $calendarDates;
      return $this;
    }

}
