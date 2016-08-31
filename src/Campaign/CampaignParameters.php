<?php

namespace mbzCampaign;

class CampaignParameters
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ECampMode $campMode
     */
    protected $campMode = null;

    /**
     * @var ECampType $campType
     */
    protected $campType = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var boolean $hasTxtMsg
     */
    protected $hasTxtMsg = null;

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

    /**
     * @var string $responseAlias
     */
    protected $responseAlias = null;

    /**
     * @var string $senderAlias
     */
    protected $senderAlias = null;

    /**
     * @var int $genSpeed
     */
    protected $genSpeed = null;

    /**
     * @var int $idTestTarget
     */
    protected $idTestTarget = null;

    /**
     * @var boolean $useListUnsubscribe
     */
    protected $useListUnsubscribe = null;

    /**
     * @var boolean $nhdActive
     */
    protected $nhdActive = null;

    /**
     * @param ECampMode $campMode
     * @param ECampType $campType
     * @param boolean $hasTxtMsg
     * @param int $idConfig
     * @param int $genSpeed
     * @param int $idTestTarget
     * @param boolean $useListUnsubscribe
     * @param boolean $nhdActive
     */
    public function __construct($campMode, $campType, $hasTxtMsg, $idConfig, $genSpeed, $idTestTarget, $useListUnsubscribe, $nhdActive)
    {
      $this->campMode = $campMode;
      $this->campType = $campType;
      $this->hasTxtMsg = $hasTxtMsg;
      $this->idConfig = $idConfig;
      $this->genSpeed = $genSpeed;
      $this->idTestTarget = $idTestTarget;
      $this->useListUnsubscribe = $useListUnsubscribe;
      $this->nhdActive = $nhdActive;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \mbzCampaign\CampaignParameters
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ECampMode
     */
    public function getCampMode()
    {
      return $this->campMode;
    }

    /**
     * @param ECampMode $campMode
     * @return \mbzCampaign\CampaignParameters
     */
    public function setCampMode($campMode)
    {
      $this->campMode = $campMode;
      return $this;
    }

    /**
     * @return ECampType
     */
    public function getCampType()
    {
      return $this->campType;
    }

    /**
     * @param ECampType $campType
     * @return \mbzCampaign\CampaignParameters
     */
    public function setCampType($campType)
    {
      $this->campType = $campType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \mbzCampaign\CampaignParameters
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasTxtMsg()
    {
      return $this->hasTxtMsg;
    }

    /**
     * @param boolean $hasTxtMsg
     * @return \mbzCampaign\CampaignParameters
     */
    public function setHasTxtMsg($hasTxtMsg)
    {
      $this->hasTxtMsg = $hasTxtMsg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdConfig()
    {
      return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return \mbzCampaign\CampaignParameters
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseAlias()
    {
      return $this->responseAlias;
    }

    /**
     * @param string $responseAlias
     * @return \mbzCampaign\CampaignParameters
     */
    public function setResponseAlias($responseAlias)
    {
      $this->responseAlias = $responseAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderAlias()
    {
      return $this->senderAlias;
    }

    /**
     * @param string $senderAlias
     * @return \mbzCampaign\CampaignParameters
     */
    public function setSenderAlias($senderAlias)
    {
      $this->senderAlias = $senderAlias;
      return $this;
    }

    /**
     * @return int
     */
    public function getGenSpeed()
    {
      return $this->genSpeed;
    }

    /**
     * @param int $genSpeed
     * @return \mbzCampaign\CampaignParameters
     */
    public function setGenSpeed($genSpeed)
    {
      $this->genSpeed = $genSpeed;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdTestTarget()
    {
      return $this->idTestTarget;
    }

    /**
     * @param int $idTestTarget
     * @return \mbzCampaign\CampaignParameters
     */
    public function setIdTestTarget($idTestTarget)
    {
      $this->idTestTarget = $idTestTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseListUnsubscribe()
    {
      return $this->useListUnsubscribe;
    }

    /**
     * @param boolean $useListUnsubscribe
     * @return \mbzCampaign\CampaignParameters
     */
    public function setUseListUnsubscribe($useListUnsubscribe)
    {
      $this->useListUnsubscribe = $useListUnsubscribe;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNhdActive()
    {
      return $this->nhdActive;
    }

    /**
     * @param boolean $nhdActive
     * @return \mbzCampaign\CampaignParameters
     */
    public function setNhdActive($nhdActive)
    {
      $this->nhdActive = $nhdActive;
      return $this;
    }

}
