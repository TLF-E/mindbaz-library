<?php

namespace mbzTarget;

class SetTargetBehaviourFilterResponse
{

    /**
     * @var boolean $SetTargetBehaviourFilterResult
     */
    protected $SetTargetBehaviourFilterResult = null;

    /**
     * @param boolean $SetTargetBehaviourFilterResult
     */
    public function __construct($SetTargetBehaviourFilterResult)
    {
      $this->SetTargetBehaviourFilterResult = $SetTargetBehaviourFilterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTargetBehaviourFilterResult()
    {
      return $this->SetTargetBehaviourFilterResult;
    }

    /**
     * @param boolean $SetTargetBehaviourFilterResult
     * @return \mbzTarget\SetTargetBehaviourFilterResponse
     */
    public function setSetTargetBehaviourFilterResult($SetTargetBehaviourFilterResult)
    {
      $this->SetTargetBehaviourFilterResult = $SetTargetBehaviourFilterResult;
      return $this;
    }

}
