<?php

namespace mbzTarget;

class TargetBehaviourFilter
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
     * @var boolean $hasDone
     */
    protected $hasDone = null;

    /**
     * @var EActionType $actionType
     */
    protected $actionType = null;

    /**
     * @var EBehaviourType $behaviourType
     */
    protected $behaviourType = null;

    /**
     * @var int $nbDaysAgo
     */
    protected $nbDaysAgo = null;

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
     * @param boolean $hasDone
     * @param EActionType $actionType
     * @param EBehaviourType $behaviourType
     * @param int $nbDaysAgo
     * @param ECombinaisonMode $combinaisonMode
     * @param int $idCampaign
     */
    public function __construct($idTarget, $isFilterEnabled, $hasDone, $actionType, $behaviourType, $nbDaysAgo, $combinaisonMode, $idCampaign)
    {
      $this->idTarget = $idTarget;
      $this->isFilterEnabled = $isFilterEnabled;
      $this->hasDone = $hasDone;
      $this->actionType = $actionType;
      $this->behaviourType = $behaviourType;
      $this->nbDaysAgo = $nbDaysAgo;
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
     * @return \mbzTarget\TargetBehaviourFilter
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
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setIsFilterEnabled($isFilterEnabled)
    {
      $this->isFilterEnabled = $isFilterEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDone()
    {
      return $this->hasDone;
    }

    /**
     * @param boolean $hasDone
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setHasDone($hasDone)
    {
      $this->hasDone = $hasDone;
      return $this;
    }

    /**
     * @return EActionType
     */
    public function getActionType()
    {
      return $this->actionType;
    }

    /**
     * @param EActionType $actionType
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setActionType($actionType)
    {
      $this->actionType = $actionType;
      return $this;
    }

    /**
     * @return EBehaviourType
     */
    public function getBehaviourType()
    {
      return $this->behaviourType;
    }

    /**
     * @param EBehaviourType $behaviourType
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setBehaviourType($behaviourType)
    {
      $this->behaviourType = $behaviourType;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbDaysAgo()
    {
      return $this->nbDaysAgo;
    }

    /**
     * @param int $nbDaysAgo
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setNbDaysAgo($nbDaysAgo)
    {
      $this->nbDaysAgo = $nbDaysAgo;
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
     * @return \mbzTarget\TargetBehaviourFilter
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
     * @return \mbzTarget\TargetBehaviourFilter
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
     * @return \mbzTarget\TargetBehaviourFilter
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
     * @return \mbzTarget\TargetBehaviourFilter
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

}
