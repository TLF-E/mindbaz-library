<?php

namespace mbzTarget;

class GetTargetBehaviourFilterResponse
{

    /**
     * @var TargetBehaviourFilter $GetTargetBehaviourFilterResult
     */
    protected $GetTargetBehaviourFilterResult = null;

    /**
     * @param TargetBehaviourFilter $GetTargetBehaviourFilterResult
     */
    public function __construct($GetTargetBehaviourFilterResult)
    {
      $this->GetTargetBehaviourFilterResult = $GetTargetBehaviourFilterResult;
    }

    /**
     * @return TargetBehaviourFilter
     */
    public function getGetTargetBehaviourFilterResult()
    {
      return $this->GetTargetBehaviourFilterResult;
    }

    /**
     * @param TargetBehaviourFilter $GetTargetBehaviourFilterResult
     * @return \mbzTarget\GetTargetBehaviourFilterResponse
     */
    public function setGetTargetBehaviourFilterResult($GetTargetBehaviourFilterResult)
    {
      $this->GetTargetBehaviourFilterResult = $GetTargetBehaviourFilterResult;
      return $this;
    }

}
