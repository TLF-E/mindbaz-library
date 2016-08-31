<?php

namespace mbzImport;

class ScheduleImportOneTime
{

    /**
     * @var \DateTime $scheduleDate
     */
    protected $scheduleDate = null;

    /**
     * @var ImportParameters $importParameters
     */
    protected $importParameters = null;

    /**
     * @param \DateTime $scheduleDate
     * @param ImportParameters $importParameters
     */
    public function __construct(\DateTime $scheduleDate, $importParameters)
    {
      $this->scheduleDate = $scheduleDate->format(\DateTime::ATOM);
      $this->importParameters = $importParameters;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleDate()
    {
      if ($this->scheduleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->scheduleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $scheduleDate
     * @return \mbzImport\ScheduleImportOneTime
     */
    public function setScheduleDate(\DateTime $scheduleDate)
    {
      $this->scheduleDate = $scheduleDate->format(\DateTime::ATOM);
      return $this;
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
     * @return \mbzImport\ScheduleImportOneTime
     */
    public function setImportParameters($importParameters)
    {
      $this->importParameters = $importParameters;
      return $this;
    }

}
