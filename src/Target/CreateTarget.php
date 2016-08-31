<?php

namespace mbzTarget;

class CreateTarget
{

    /**
     * @var TargetParameters $targetParameters
     */
    protected $targetParameters = null;

    /**
     * @param TargetParameters $targetParameters
     */
    public function __construct($targetParameters)
    {
      $this->targetParameters = $targetParameters;
    }

    /**
     * @return TargetParameters
     */
    public function getTargetParameters()
    {
      return $this->targetParameters;
    }

    /**
     * @param TargetParameters $targetParameters
     * @return \mbzTarget\CreateTarget
     */
    public function setTargetParameters($targetParameters)
    {
      $this->targetParameters = $targetParameters;
      return $this;
    }

}
