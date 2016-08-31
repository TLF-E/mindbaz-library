<?php

namespace mbzSubscriber;

class ArrayOfSubscriberFieldData
{

    /**
     * @var SubscriberFieldData[] $SubscriberFieldData
     */
    protected $SubscriberFieldData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriberFieldData[]
     */
    public function getSubscriberFieldData()
    {
      return $this->SubscriberFieldData;
    }

    /**
     * @param SubscriberFieldData[] $SubscriberFieldData
     * @return \mbzSubscriber\ArrayOfSubscriberFieldData
     */
    public function setSubscriberFieldData(array $SubscriberFieldData = null)
    {
      $this->SubscriberFieldData = $SubscriberFieldData;
      return $this;
    }

}
