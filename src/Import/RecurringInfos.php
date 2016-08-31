<?php

namespace mbzImport;

class RecurringInfos
{

    /**
     * @var string $filenameTemplate
     */
    protected $filenameTemplate = null;

    /**
     * @var int $idFrequencyType
     */
    protected $idFrequencyType = null;

    /**
     * @var int $frequency
     */
    protected $frequency = null;

    /**
     * @var int $monthDay
     */
    protected $monthDay = null;

    /**
     * @var string $monthDay2
     */
    protected $monthDay2 = null;

    /**
     * @var string $weekDays
     */
    protected $weekDays = null;

    /**
     * @var string $time
     */
    protected $time = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @param int $idFrequencyType
     * @param int $frequency
     * @param int $monthDay
     */
    public function __construct($idFrequencyType, $frequency, $monthDay)
    {
      $this->idFrequencyType = $idFrequencyType;
      $this->frequency = $frequency;
      $this->monthDay = $monthDay;
    }

    /**
     * @return string
     */
    public function getFilenameTemplate()
    {
      return $this->filenameTemplate;
    }

    /**
     * @param string $filenameTemplate
     * @return \mbzImport\RecurringInfos
     */
    public function setFilenameTemplate($filenameTemplate)
    {
      $this->filenameTemplate = $filenameTemplate;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdFrequencyType()
    {
      return $this->idFrequencyType;
    }

    /**
     * @param int $idFrequencyType
     * @return \mbzImport\RecurringInfos
     */
    public function setIdFrequencyType($idFrequencyType)
    {
      $this->idFrequencyType = $idFrequencyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param int $frequency
     * @return \mbzImport\RecurringInfos
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonthDay()
    {
      return $this->monthDay;
    }

    /**
     * @param int $monthDay
     * @return \mbzImport\RecurringInfos
     */
    public function setMonthDay($monthDay)
    {
      $this->monthDay = $monthDay;
      return $this;
    }

    /**
     * @return string
     */
    public function getMonthDay2()
    {
      return $this->monthDay2;
    }

    /**
     * @param string $monthDay2
     * @return \mbzImport\RecurringInfos
     */
    public function setMonthDay2($monthDay2)
    {
      $this->monthDay2 = $monthDay2;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeekDays()
    {
      return $this->weekDays;
    }

    /**
     * @param string $weekDays
     * @return \mbzImport\RecurringInfos
     */
    public function setWeekDays($weekDays)
    {
      $this->weekDays = $weekDays;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param string $time
     * @return \mbzImport\RecurringInfos
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \mbzImport\RecurringInfos
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \mbzImport\RecurringInfos
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
