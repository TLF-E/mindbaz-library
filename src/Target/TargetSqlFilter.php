<?php

namespace mbzTarget;

class TargetSqlFilter
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
     * @var string $sql
     */
    protected $sql = null;

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
     * @return \mbzTarget\TargetSqlFilter
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
     * @return \mbzTarget\TargetSqlFilter
     */
    public function setIsFilterEnabled($isFilterEnabled)
    {
      $this->isFilterEnabled = $isFilterEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getSql()
    {
      return $this->sql;
    }

    /**
     * @param string $sql
     * @return \mbzTarget\TargetSqlFilter
     */
    public function setSql($sql)
    {
      $this->sql = $sql;
      return $this;
    }

}
