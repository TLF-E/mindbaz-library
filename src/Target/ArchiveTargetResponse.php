<?php

namespace mbzTarget;

class ArchiveTargetResponse
{

    /**
     * @var boolean $ArchiveTargetResult
     */
    protected $ArchiveTargetResult = null;

    /**
     * @param boolean $ArchiveTargetResult
     */
    public function __construct($ArchiveTargetResult)
    {
      $this->ArchiveTargetResult = $ArchiveTargetResult;
    }

    /**
     * @return boolean
     */
    public function getArchiveTargetResult()
    {
      return $this->ArchiveTargetResult;
    }

    /**
     * @param boolean $ArchiveTargetResult
     * @return \mbzTarget\ArchiveTargetResponse
     */
    public function setArchiveTargetResult($ArchiveTargetResult)
    {
      $this->ArchiveTargetResult = $ArchiveTargetResult;
      return $this;
    }

}
