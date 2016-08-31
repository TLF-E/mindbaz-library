<?php

namespace mbzConfig;

class ArchiveConfigResponse
{

    /**
     * @var boolean $ArchiveConfigResult
     */
    protected $ArchiveConfigResult = null;

    /**
     * @param boolean $ArchiveConfigResult
     */
    public function __construct($ArchiveConfigResult)
    {
      $this->ArchiveConfigResult = $ArchiveConfigResult;
    }

    /**
     * @return boolean
     */
    public function getArchiveConfigResult()
    {
      return $this->ArchiveConfigResult;
    }

    /**
     * @param boolean $ArchiveConfigResult
     * @return \mbzConfig\ArchiveConfigResponse
     */
    public function setArchiveConfigResult($ArchiveConfigResult)
    {
      $this->ArchiveConfigResult = $ArchiveConfigResult;
      return $this;
    }

}
