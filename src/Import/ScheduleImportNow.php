<?php

namespace mbzImport;

class ScheduleImportNow
{

    /**
     * @var ImportParameters $importParameters
     */
    protected $importParameters = null;

    /**
     * @param ImportParameters $importParameters
     */
    public function __construct($importParameters)
    {
      $this->importParameters = $importParameters;
    }

    /**
     * @return ImportParameters
     */
    public function getImportParameters()
    {
      return $this->importParameters;
    }

    /**
     * @param ImportParameters $importParameters
     * @return \mbzImport\ScheduleImportNow
     */
    public function setImportParameters($importParameters)
    {
      $this->importParameters = $importParameters;
      return $this;
    }

}
