<?php

namespace mbzCampaign;

class SegmentAdvertisement
{

    /**
     * @var int $advertisementPosition
     */
    protected $advertisementPosition = null;

    /**
     * @var int $idAdvertisement
     */
    protected $idAdvertisement = null;

    /**
     * @param int $advertisementPosition
     * @param int $idAdvertisement
     */
    public function __construct($advertisementPosition, $idAdvertisement)
    {
      $this->advertisementPosition = $advertisementPosition;
      $this->idAdvertisement = $idAdvertisement;
    }

    /**
     * @return int
     */
    public function getAdvertisementPosition()
    {
      return $this->advertisementPosition;
    }

    /**
     * @param int $advertisementPosition
     * @return \mbzCampaign\SegmentAdvertisement
     */
    public function setAdvertisementPosition($advertisementPosition)
    {
      $this->advertisementPosition = $advertisementPosition;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdAdvertisement()
    {
      return $this->idAdvertisement;
    }

    /**
     * @param int $idAdvertisement
     * @return \mbzCampaign\SegmentAdvertisement
     */
    public function setIdAdvertisement($idAdvertisement)
    {
      $this->idAdvertisement = $idAdvertisement;
      return $this;
    }

}
