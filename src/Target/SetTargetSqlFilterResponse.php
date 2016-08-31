<?php

namespace mbzTarget;

class SetTargetSqlFilterResponse
{

    /**
     * @var boolean $SetTargetSqlFilterResult
     */
    protected $SetTargetSqlFilterResult = null;

    /**
     * @param boolean $SetTargetSqlFilterResult
     */
    public function __construct($SetTargetSqlFilterResult)
    {
      $this->SetTargetSqlFilterResult = $SetTargetSqlFilterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTargetSqlFilterResult()
    {
      return $this->SetTargetSqlFilterResult;
    }

    /**
     * @param boolean $SetTargetSqlFilterResult
     * @return \mbzTarget\SetTargetSqlFilterResponse
     */
    public function setSetTargetSqlFilterResult($SetTargetSqlFilterResult)
    {
      $this->SetTargetSqlFilterResult = $SetTargetSqlFilterResult;
      return $this;
    }

}
