<?php

namespace mbzTarget;

class SetTargetSqlFilter
{

    /**
     * @var TargetSqlFilter $sqlFilter
     */
    protected $sqlFilter = null;

    /**
     * @param TargetSqlFilter $sqlFilter
     */
    public function __construct($sqlFilter)
    {
      $this->sqlFilter = $sqlFilter;
    }

    /**
     * @return TargetSqlFilter
     */
    public function getSqlFilter()
    {
      return $this->sqlFilter;
    }

    /**
     * @param TargetSqlFilter $sqlFilter
     * @return \mbzTarget\SetTargetSqlFilter
     */
    public function setSqlFilter($sqlFilter)
    {
      $this->sqlFilter = $sqlFilter;
      return $this;
    }

}
