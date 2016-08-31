<?php

namespace mbzImport;

class ScheduleImportOneTimeResponse
{

    /**
     * @var Import $ScheduleImportOneTimeResult
     */
    protected $ScheduleImportOneTimeResult = null;

    /**
     * @param Import $ScheduleImportOneTimeResult
     */
    public function __construct($ScheduleImportOneTimeResult)
    {
      $this->ScheduleImportOneTimeResult = $ScheduleImportOneTimeResult;
    }

    /**
     * @return Import
     */
    public function getScheduleImportOneTimeResult()
    {
      return $this->ScheduleImportOneTimeResult;
    }

    /**
     * @param Import $ScheduleImportOneTimeResult
     * @return \mbzImport\ScheduleImportOneTimeResponse
     */
    public function setScheduleImportOneTimeResult($ScheduleImportOneTimeResult)
    {
      $this->ScheduleImportOneTimeResult = $ScheduleImportOneTimeResult;
      return $this;
    }

}
