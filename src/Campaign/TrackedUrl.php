<?php

namespace mbzCampaign;

class TrackedUrl
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $urlParsed
     */
    protected $urlParsed = null;

    /**
     * @var string $origin
     */
    protected $origin = null;

    /**
     * @var int $idPubInSegment
     */
    protected $idPubInSegment = null;

    /**
     * @var int $idSegment
     */
    protected $idSegment = null;

    /**
     * @var int $idPub
     */
    protected $idPub = null;

    /**
     * @var boolean $isTracked
     */
    protected $isTracked = null;

    /**
     * @var int $idTrackingUrl
     */
    protected $idTrackingUrl = null;

    /**
     * @var TrackingParameter $parameters
     */
    protected $parameters = null;

    /**
     * @param int $idPubInSegment
     * @param int $idSegment
     * @param int $idPub
     * @param boolean $isTracked
     * @param int $idTrackingUrl
     */
    public function __construct($idPubInSegment, $idSegment, $idPub, $isTracked, $idTrackingUrl)
    {
      $this->idPubInSegment = $idPubInSegment;
      $this->idSegment = $idSegment;
      $this->idPub = $idPub;
      $this->isTracked = $isTracked;
      $this->idTrackingUrl = $idTrackingUrl;
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
     * @return \mbzCampaign\TrackedUrl
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlParsed()
    {
      return $this->urlParsed;
    }

    /**
     * @param string $urlParsed
     * @return \mbzCampaign\TrackedUrl
     */
    public function setUrlParsed($urlParsed)
    {
      $this->urlParsed = $urlParsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param string $origin
     * @return \mbzCampaign\TrackedUrl
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
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
     * @return \mbzCampaign\TrackedUrl
     */
    public function setIdPubInSegment($idPubInSegment)
    {
      $this->idPubInSegment = $idPubInSegment;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSegment()
    {
      return $this->idSegment;
    }

    /**
     * @param int $idSegment
     * @return \mbzCampaign\TrackedUrl
     */
    public function setIdSegment($idSegment)
    {
      $this->idSegment = $idSegment;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPub()
    {
      return $this->idPub;
    }

    /**
     * @param int $idPub
     * @return \mbzCampaign\TrackedUrl
     */
    public function setIdPub($idPub)
    {
      $this->idPub = $idPub;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTracked()
    {
      return $this->isTracked;
    }

    /**
     * @param boolean $isTracked
     * @return \mbzCampaign\TrackedUrl
     */
    public function setIsTracked($isTracked)
    {
      $this->isTracked = $isTracked;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdTrackingUrl()
    {
      return $this->idTrackingUrl;
    }

    /**
     * @param int $idTrackingUrl
     * @return \mbzCampaign\TrackedUrl
     */
    public function setIdTrackingUrl($idTrackingUrl)
    {
      $this->idTrackingUrl = $idTrackingUrl;
      return $this;
    }

    /**
     * @return TrackingParameter
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param TrackingParameter $parameters
     * @return \mbzCampaign\TrackedUrl
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
