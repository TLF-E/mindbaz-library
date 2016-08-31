<?php

namespace mbzTarget;

class SetTargetFieldFilterResponse
{

    /**
     * @var boolean $SetTargetFieldFilterResult
     */
    protected $SetTargetFieldFilterResult = null;

    /**
     * @param boolean $SetTargetFieldFilterResult
     */
    public function __construct($SetTargetFieldFilterResult)
    {
      $this->SetTargetFieldFilterResult = $SetTargetFieldFilterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTargetFieldFilterResult()
    {
      return $this->SetTargetFieldFilterResult;
    }

    /**
     * @param boolean $SetTargetFieldFilterResult
     * @return \mbzTarget\SetTargetFieldFilterResponse
     */
    public function setSetTargetFieldFilterResult($SetTargetFieldFilterResult)
    {
      $this->SetTargetFieldFilterResult = $SetTargetFieldFilterResult;
      return $this;
    }

}
