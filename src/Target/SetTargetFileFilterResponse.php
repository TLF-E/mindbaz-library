<?php

namespace mbzTarget;

class SetTargetFileFilterResponse
{

    /**
     * @var boolean $SetTargetFileFilterResult
     */
    protected $SetTargetFileFilterResult = null;

    /**
     * @param boolean $SetTargetFileFilterResult
     */
    public function __construct($SetTargetFileFilterResult)
    {
      $this->SetTargetFileFilterResult = $SetTargetFileFilterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTargetFileFilterResult()
    {
      return $this->SetTargetFileFilterResult;
    }

    /**
     * @param boolean $SetTargetFileFilterResult
     * @return \mbzTarget\SetTargetFileFilterResponse
     */
    public function setSetTargetFileFilterResult($SetTargetFileFilterResult)
    {
      $this->SetTargetFileFilterResult = $SetTargetFileFilterResult;
      return $this;
    }

}
