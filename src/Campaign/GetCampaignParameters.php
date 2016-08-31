<?php

namespace mbzCampaign;

class GetCampaignParameters
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
     * @return \mbzCampaign\GetCampaignParameters
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

}
