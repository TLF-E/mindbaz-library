<?php

namespace mbzCampaign;

class TrackAll
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @param int $idCampaign
     */
    public function __construct($idCampaign)
    {
      $this->idCampaign = $idCampaign;
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
     * @return \mbzCampaign\TrackAll
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

}
