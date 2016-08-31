<?php

namespace mbzTarget;

class TargetSendingFilter
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var boolean $isFilterEnabled
     */
    protected $isFilterEnabled = null;

    /**
     * @var boolean $hasReceived
     */
    protected $hasReceived = null;

    /**
     * @var string $idSentList
     */
    protected $idSentList = null;

    /**
     * @var string $idSentNames
     */
    protected $idSentNames = null;

    /**
     * @var ECombinaisonMode $combinaisonMode
     */
    protected $combinaisonMode = null;

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @param int $idTarget
     * @param boolean $isFilterEnabled
     * @param boolean $hasReceived
     * @param ECombinaisonMode $combinaisonMode
     * @param int $idCampaign
     */
    public function __construct($idTarget, $isFilterEnabled, $hasReceived, $combinaisonMode, $idCampaign)
    {
      $this->idTarget = $idTarget;
      $this->isFilterEnabled = $isFilterEnabled;
      $this->hasReceived = $hasReceived;
      $this->combinaisonMode = $combinaisonMode;
      $this->idCampaign = $idCampaign;
    }

    /**
     * @return int
     */
    public function getIdTarget()
    {
      return $this->idTarget;
    }

    /**
     * @param int $idTarget
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFilterEnabled()
    {
      return $this->isFilterEnabled;
    }

    /**
     * @param boolean $isFilterEnabled
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setIsFilterEnabled($isFilterEnabled)
    {
      $this->isFilterEnabled = $isFilterEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasReceived()
    {
      return $this->hasReceived;
    }

    /**
     * @param boolean $hasReceived
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setHasReceived($hasReceived)
    {
      $this->hasReceived = $hasReceived;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdSentList()
    {
      return $this->idSentList;
    }

    /**
     * @param string $idSentList
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setIdSentList($idSentList)
    {
      $this->idSentList = $idSentList;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdSentNames()
    {
      return $this->idSentNames;
    }

    /**
     * @param string $idSentNames
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setIdSentNames($idSentNames)
    {
      $this->idSentNames = $idSentNames;
      return $this;
    }

    /**
     * @return ECombinaisonMode
     */
    public function getCombinaisonMode()
    {
      return $this->combinaisonMode;
    }

    /**
     * @param ECombinaisonMode $combinaisonMode
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setCombinaisonMode($combinaisonMode)
    {
      $this->combinaisonMode = $combinaisonMode;
      return $this;
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
     * @return \mbzTarget\TargetSendingFilter
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

}
