<?php

namespace mbzImport;

class ScheduleImportNowResponse
{

    /**
     * @var Import $ScheduleImportNowResult
     */
    protected $ScheduleImportNowResult = null;

    /**
     * @param Import $ScheduleImportNowResult
     */
    public function __construct($ScheduleImportNowResult)
    {
      $this->ScheduleImportNowResult = $ScheduleImportNowResult;
    }

    /**
     * @return Import
     */
    public function getScheduleImportNowResult()
    {
      return $this->ScheduleImportNowResult;
    }

    /**
     * @param Import $ScheduleImportNowResult
     * @return \mbzImport\ScheduleImportNowResponse
     */
    public function setScheduleImportNowResult($ScheduleImportNowResult)
    {
      $this->ScheduleImportNowResult = $ScheduleImportNowResult;
      return $this;
    }

}
