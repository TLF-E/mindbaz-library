<?php

namespace mbzImport;

class GetImportResponse
{

    /**
     * @var Import $GetImportResult
     */
    protected $GetImportResult = null;

    /**
     * @param Import $GetImportResult
     */
    public function __construct($GetImportResult)
    {
      $this->GetImportResult = $GetImportResult;
    }

    /**
     * @return Import
     */
    public function getGetImportResult()
    {
      return $this->GetImportResult;
    }

    /**
     * @param Import $GetImportResult
     * @return \mbzImport\GetImportResponse
     */
    public function setGetImportResult($GetImportResult)
    {
      $this->GetImportResult = $GetImportResult;
      return $this;
    }

}
