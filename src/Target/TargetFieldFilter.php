<?php

namespace mbzTarget;

class TargetFieldFilter
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
     * @var ArrayOfFieldFilter $filters
     */
    protected $filters = null;

    /**
     * @param int $idTarget
     * @param boolean $isFilterEnabled
     */
    public function __construct($idTarget, $isFilterEnabled)
    {
      $this->idTarget = $idTarget;
      $this->isFilterEnabled = $isFilterEnabled;
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
     * @return \mbzTarget\TargetFieldFilter
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
     * @return \mbzTarget\TargetFieldFilter
     */
    public function setIsFilterEnabled($isFilterEnabled)
    {
      $this->isFilterEnabled = $isFilterEnabled;
      return $this;
    }

    /**
     * @return ArrayOfFieldFilter
     */
    public function getFilters()
    {
      return $this->filters;
    }

    /**
     * @param ArrayOfFieldFilter $filters
     * @return \mbzTarget\TargetFieldFilter
     */
    public function setFilters($filters)
    {
      $this->filters = $filters;
      return $this;
    }

}
