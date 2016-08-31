<?php

namespace mbzTarget;

class TargetParameters
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $isTestTarget
     */
    protected $isTestTarget = null;

    /**
     * @var int $pctSelect
     */
    protected $pctSelect = null;

    /**
     * @var int $maxSelect
     */
    protected $maxSelect = null;

    /**
     * @var boolean $isRandomMode
     */
    protected $isRandomMode = null;

    /**
     * @var ArrayOfInt $excludedTargets
     */
    protected $excludedTargets = null;

    /**
     * @param boolean $isTestTarget
     * @param int $pctSelect
     * @param int $maxSelect
     * @param boolean $isRandomMode
     */
    public function __construct($isTestTarget, $pctSelect, $maxSelect, $isRandomMode)
    {
      $this->isTestTarget = $isTestTarget;
      $this->pctSelect = $pctSelect;
      $this->maxSelect = $maxSelect;
      $this->isRandomMode = $isRandomMode;
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
     * @return \mbzTarget\TargetParameters
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTestTarget()
    {
      return $this->isTestTarget;
    }

    /**
     * @param boolean $isTestTarget
     * @return \mbzTarget\TargetParameters
     */
    public function setIsTestTarget($isTestTarget)
    {
      $this->isTestTarget = $isTestTarget;
      return $this;
    }

    /**
     * @return int
     */
    public function getPctSelect()
    {
      return $this->pctSelect;
    }

    /**
     * @param int $pctSelect
     * @return \mbzTarget\TargetParameters
     */
    public function setPctSelect($pctSelect)
    {
      $this->pctSelect = $pctSelect;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxSelect()
    {
      return $this->maxSelect;
    }

    /**
     * @param int $maxSelect
     * @return \mbzTarget\TargetParameters
     */
    public function setMaxSelect($maxSelect)
    {
      $this->maxSelect = $maxSelect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRandomMode()
    {
      return $this->isRandomMode;
    }

    /**
     * @param boolean $isRandomMode
     * @return \mbzTarget\TargetParameters
     */
    public function setIsRandomMode($isRandomMode)
    {
      $this->isRandomMode = $isRandomMode;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getExcludedTargets()
    {
      return $this->excludedTargets;
    }

    /**
     * @param ArrayOfInt $excludedTargets
     * @return \mbzTarget\TargetParameters
     */
    public function setExcludedTargets($excludedTargets)
    {
      $this->excludedTargets = $excludedTargets;
      return $this;
    }

}
