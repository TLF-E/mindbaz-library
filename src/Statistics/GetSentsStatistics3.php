<?php

namespace mbzStatistics;

class GetSentsStatistics3
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var int $nbDays
     */
    protected $nbDays = null;

    /**
     * @var int $mode
     */
    protected $mode = null;

    /**
     * @param int $idCampaign
     * @param int $nbDays
     * @param int $mode
     */
    public function __construct($idCampaign, $nbDays, $mode)
    {
      $this->idCampaign = $idCampaign;
      $this->nbDays = $nbDays;
      $this->mode = $mode;
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
     * @return \mbzStatistics\GetSentsStatistics3
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
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
     * @return \mbzStatistics\GetSentsStatistics3
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
     * @return \mbzStatistics\GetSentsStatistics3
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

}
