<?php

namespace mbzCampaign;

class SendBAT
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
     * @return \mbzCampaign\SendBAT
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

}
