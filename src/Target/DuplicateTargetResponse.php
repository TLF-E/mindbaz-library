<?php

namespace mbzTarget;

class DuplicateTargetResponse
{

    /**
     * @var int $DuplicateTargetResult
     */
    protected $DuplicateTargetResult = null;

    /**
     * @param int $DuplicateTargetResult
     */
    public function __construct($DuplicateTargetResult)
    {
      $this->DuplicateTargetResult = $DuplicateTargetResult;
    }

    /**
     * @return int
     */
    public function getDuplicateTargetResult()
    {
      return $this->DuplicateTargetResult;
    }

    /**
     * @param int $DuplicateTargetResult
     * @return \mbzTarget\DuplicateTargetResponse
     */
    public function setDuplicateTargetResult($DuplicateTargetResult)
    {
      $this->DuplicateTargetResult = $DuplicateTargetResult;
      return $this;
    }

}
