<?php

namespace mbzCampaign;

class UpdateCampaign
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var CampaignParameters $campParameters
     */
    protected $campParameters = null;

    /**
     * @param int $idCampaign
     * @param CampaignParameters $campParameters
     */
    public function __construct($idCampaign, $campParameters)
    {
      $this->idCampaign = $idCampaign;
      $this->campParameters = $campParameters;
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
     * @return \mbzCampaign\UpdateCampaign
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return CampaignParameters
     */
    public function getCampParameters()
    {
      return $this->campParameters;
    }

    /**
     * @param CampaignParameters $campParameters
     * @return \mbzCampaign\UpdateCampaign
     */
    public function setCampParameters($campParameters)
    {
      $this->campParameters = $campParameters;
      return $this;
    }

}
