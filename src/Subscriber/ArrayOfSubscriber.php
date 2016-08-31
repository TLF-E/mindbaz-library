<?php

namespace mbzSubscriber;

class ArrayOfSubscriber
{

    /**
     * @var Subscriber[] $Subscriber
     */
    protected $Subscriber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Subscriber[]
     */
    public function getSubscriber()
    {
      return $this->Subscriber;
    }

    /**
     * @param Subscriber[] $Subscriber
     * @return \mbzSubscriber\ArrayOfSubscriber
     */
    public function setSubscriber(array $Subscriber = null)
    {
      $this->Subscriber = $Subscriber;
      return $this;
    }

}
