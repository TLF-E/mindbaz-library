<?php

namespace mbzStatistics;

class GetSentsStatistics
{

    /**
     * @var int $nbDays
     */
    protected $nbDays = null;

    /**
     * @var int $mode
     */
    protected $mode = null;

    /**
     * @param int $nbDays
     * @param int $mode
     */
    public function __construct($nbDays, $mode)
    {
      $this->nbDays = $nbDays;
      $this->mode = $mode;
    }

    /**
     * @return int
     */
    public function getNbDays()
    {
      return $this->nbDays;
    }

    /**
     * @param int $nbDays
     * @return \mbzStatistics\GetSentsStatistics
     */
    public function setNbDays($nbDays)
    {
      $this->nbDays = $nbDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param int $mode
     * @return \mbzStatistics\GetSentsStatistics
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

}
