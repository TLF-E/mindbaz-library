<?php

namespace mbzConfig;

class DuplicateConfigResponse
{

    /**
     * @var int $DuplicateConfigResult
     */
    protected $DuplicateConfigResult = null;

    /**
     * @param int $DuplicateConfigResult
     */
    public function __construct($DuplicateConfigResult)
    {
      $this->DuplicateConfigResult = $DuplicateConfigResult;
    }

    /**
     * @return int
     */
    public function getDuplicateConfigResult()
    {
      return $this->DuplicateConfigResult;
    }

    /**
     * @param int $DuplicateConfigResult
     * @return \mbzConfig\DuplicateConfigResponse
     */
    public function setDuplicateConfigResult($DuplicateConfigResult)
    {
      $this->DuplicateConfigResult = $DuplicateConfigResult;
      return $this;
    }

}
