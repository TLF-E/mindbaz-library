<?php

namespace mbzImport;

class SchedulingInfos
{

    /**
     * @var \DateTime $scheduledDate
     */
    protected $scheduledDate = null;

    /**
     * @var boolean $isRecurring
     */
    protected $isRecurring = null;

    /**
     * @var RecurringInfos $recurringInfos
     */
    protected $recurringInfos = null;

    /**
     * @param boolean $isRecurring
     */
    public function __construct($isRecurring)
    {
      $this->isRecurring = $isRecurring;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDate()
    {
      if ($this->scheduledDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->scheduledDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $scheduledDate
     * @return \mbzImport\SchedulingInfos
     */
    public function setScheduledDate(\DateTime $scheduledDate = null)
    {
      if ($scheduledDate == null) {
       $this->scheduledDate = null;
      } else {
        $this->scheduledDate = $scheduledDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRecurring()
    {
      return $this->isRecurring;
    }

    /**
     * @param boolean $isRecurring
     * @return \mbzImport\SchedulingInfos
     */
    public function setIsRecurring($isRecurring)
    {
      $this->isRecurring = $isRecurring;
      return $this;
    }

    /**
     * @return RecurringInfos
     */
    public function getRecurringInfos()
    {
      return $this->recurringInfos;
    }

    /**
     * @param RecurringInfos $recurringInfos
     * @return \mbzImport\SchedulingInfos
     */
    public function setRecurringInfos($recurringInfos)
    {
      $this->recurringInfos = $recurringInfos;
      return $this;
    }

}
