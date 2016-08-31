<?php

namespace mbzCampaign;

class UntrackUrl
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var int $idTrackedUrl
     */
    protected $idTrackedUrl = null;

    /**
     * @param int $idCampaign
     * @param int $idTrackedUrl
     */
    public function __construct($idCampaign, $idTrackedUrl)
    {
      $this->idCampaign = $idCampaign;
      $this->idTrackedUrl = $idTrackedUrl;
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
     * @return \mbzCampaign\UntrackUrl
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdTrackedUrl()
    {
      return $this->idTrackedUrl;
    }

    /**
     * @param int $idTrackedUrl
     * @return \mbzCampaign\UntrackUrl
     */
    public function setIdTrackedUrl($idTrackedUrl)
    {
      $this->idTrackedUrl = $idTrackedUrl;
      return $this;
    }

}
