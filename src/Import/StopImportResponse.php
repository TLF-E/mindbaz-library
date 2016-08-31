<?php

namespace mbzImport;

class StopImportResponse
{

    /**
     * @var boolean $StopImportResult
     */
    protected $StopImportResult = null;

    /**
     * @param boolean $StopImportResult
     */
    public function __construct($StopImportResult)
    {
      $this->StopImportResult = $StopImportResult;
    }

    /**
     * @return boolean
     */
    public function getStopImportResult()
    {
      return $this->StopImportResult;
    }

    /**
     * @param boolean $StopImportResult
     * @return \mbzImport\StopImportResponse
     */
    public function setStopImportResult($StopImportResult)
    {
      $this->StopImportResult = $StopImportResult;
      return $this;
    }

}
