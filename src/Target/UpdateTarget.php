<?php

namespace mbzTarget;

class UpdateTarget
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var TargetParameters $targetParameters
     */
    protected $targetParameters = null;

    /**
     * @param int $idTarget
     * @param TargetParameters $targetParameters
     */
    public function __construct($idTarget, $targetParameters)
    {
      $this->idTarget = $idTarget;
      $this->targetParameters = $targetParameters;
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
     * @return \mbzTarget\UpdateTarget
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
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
     * @return \mbzTarget\UpdateTarget
     */
    public function setTargetParameters($targetParameters)
    {
      $this->targetParameters = $targetParameters;
      return $this;
    }

}
