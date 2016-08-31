<?php

namespace mbzTarget;

class SetTargetBehaviourFilter
{

    /**
     * @var TargetBehaviourFilter $behaviourFilter
     */
    protected $behaviourFilter = null;

    /**
     * @param TargetBehaviourFilter $behaviourFilter
     */
    public function __construct($behaviourFilter)
    {
      $this->behaviourFilter = $behaviourFilter;
    }

    /**
     * @return TargetBehaviourFilter
     */
    public function getBehaviourFilter()
    {
      return $this->behaviourFilter;
    }

    /**
     * @param TargetBehaviourFilter $behaviourFilter
     * @return \mbzTarget\SetTargetBehaviourFilter
     */
    public function setBehaviourFilter($behaviourFilter)
    {
      $this->behaviourFilter = $behaviourFilter;
      return $this;
    }

}
