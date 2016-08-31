<?php

namespace mbzCampaign;

class TrackingParameter
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isUnsubUrl
     */
    protected $isUnsubUrl = null;

    /**
     * @var boolean $isMirrorUrl
     */
    protected $isMirrorUrl = null;

    /**
     * @var int $idDirectory
     */
    protected $idDirectory = null;

    /**
     * @var int $idLinkType
     */
    protected $idLinkType = null;

    /**
     * @var int $idSector
     */
    protected $idSector = null;

    /**
     * @var int $idIncentive
     */
    protected $idIncentive = null;

    /**
     * @param boolean $isUnsubUrl
     * @param boolean $isMirrorUrl
     * @param int $idDirectory
     * @param int $idLinkType
     * @param int $idSector
     * @param int $idIncentive
     */
    public function __construct($isUnsubUrl, $isMirrorUrl, $idDirectory, $idLinkType, $idSector, $idIncentive)
    {
      $this->isUnsubUrl = $isUnsubUrl;
      $this->isMirrorUrl = $isMirrorUrl;
      $this->idDirectory = $idDirectory;
      $this->idLinkType = $idLinkType;
      $this->idSector = $idSector;
      $this->idIncentive = $idIncentive;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \mbzCampaign\TrackingParameter
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnsubUrl()
    {
      return $this->isUnsubUrl;
    }

    /**
     * @param boolean $isUnsubUrl
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIsUnsubUrl($isUnsubUrl)
    {
      $this->isUnsubUrl = $isUnsubUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMirrorUrl()
    {
      return $this->isMirrorUrl;
    }

    /**
     * @param boolean $isMirrorUrl
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIsMirrorUrl($isMirrorUrl)
    {
      $this->isMirrorUrl = $isMirrorUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDirectory()
    {
      return $this->idDirectory;
    }

    /**
     * @param int $idDirectory
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIdDirectory($idDirectory)
    {
      $this->idDirectory = $idDirectory;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdLinkType()
    {
      return $this->idLinkType;
    }

    /**
     * @param int $idLinkType
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIdLinkType($idLinkType)
    {
      $this->idLinkType = $idLinkType;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSector()
    {
      return $this->idSector;
    }

    /**
     * @param int $idSector
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIdSector($idSector)
    {
      $this->idSector = $idSector;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdIncentive()
    {
      return $this->idIncentive;
    }

    /**
     * @param int $idIncentive
     * @return \mbzCampaign\TrackingParameter
     */
    public function setIdIncentive($idIncentive)
    {
      $this->idIncentive = $idIncentive;
      return $this;
    }

}
