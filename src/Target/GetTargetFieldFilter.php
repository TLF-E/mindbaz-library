<?php

namespace mbzTarget;

class GetTargetFieldFilter
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @param int $idTarget
     */
    public function __construct($idTarget)
    {
      $this->idTarget = $idTarget;
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
     * @return \mbzTarget\GetTargetFieldFilter
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
    }

}
