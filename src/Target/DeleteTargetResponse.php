<?php

namespace mbzTarget;

class DeleteTargetResponse
{

    /**
     * @var boolean $DeleteTargetResult
     */
    protected $DeleteTargetResult = null;

    /**
     * @param boolean $DeleteTargetResult
     */
    public function __construct($DeleteTargetResult)
    {
      $this->DeleteTargetResult = $DeleteTargetResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteTargetResult()
    {
      return $this->DeleteTargetResult;
    }

    /**
     * @param boolean $DeleteTargetResult
     * @return \mbzTarget\DeleteTargetResponse
     */
    public function setDeleteTargetResult($DeleteTargetResult)
    {
      $this->DeleteTargetResult = $DeleteTargetResult;
      return $this;
    }

}
