<?php

namespace mbzCampaign;

class ArrayOfDateTime
{

    /**
     * @var dateTime[] $dateTime
     */
    protected $dateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dateTime[]
     */
    public function getDateTime()
    {
      return $this->dateTime;
    }

    /**
     * @param dateTime[] $dateTime
     * @return \mbzCampaign\ArrayOfDateTime
     */
    public function setDateTime(array $dateTime = null)
    {
      $this->dateTime = $dateTime;
      return $this;
    }

}
