<?php

namespace mbzCampaign;

class TrackUrl
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var int $idPubInSegment
     */
    protected $idPubInSegment = null;

    /**
     * @var TrackingParameter $trackingParameters
     */
    protected $trackingParameters = null;

    /**
     * @param int $idCampaign
     * @param string $url
     * @param int $idPubInSegment
     * @param TrackingParameter $trackingParameters
     */
    public function __construct($idCampaign, $url, $idPubInSegment, $trackingParameters)
    {
      $this->idCampaign = $idCampaign;
      $this->url = $url;
      $this->idPubInSegment = $idPubInSegment;
      $this->trackingParameters = $trackingParameters;
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
     * @return \mbzCampaign\TrackUrl
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \mbzCampaign\TrackUrl
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPubInSegment()
    {
      return $this->idPubInSegment;
    }

    /**
     * @param int $idPubInSegment
     * @return \mbzCampaign\TrackUrl
     */
    public function setIdPubInSegment($idPubInSegment)
    {
      $this->idPubInSegment = $idPubInSegment;
      return $this;
    }

    /**
     * @return TrackingParameter
     */
    public function getTrackingParameters()
    {
      return $this->trackingParameters;
    }

    /**
     * @param TrackingParameter $trackingParameters
     * @return \mbzCampaign\TrackUrl
     */
    public function setTrackingParameters($trackingParameters)
    {
      $this->trackingParameters = $trackingParameters;
      return $this;
    }

}
