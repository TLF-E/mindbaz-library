<?php

namespace mbzSubscriber;

class SubscribeNewSubscriberResponse
{

    /**
     * @var boolean $SubscribeNewSubscriberResult
     */
    protected $SubscribeNewSubscriberResult = null;

    /**
     * @param boolean $SubscribeNewSubscriberResult
     */
    public function __construct($SubscribeNewSubscriberResult)
    {
      $this->SubscribeNewSubscriberResult = $SubscribeNewSubscriberResult;
    }

    /**
     * @return boolean
     */
    public function getSubscribeNewSubscriberResult()
    {
      return $this->SubscribeNewSubscriberResult;
    }

    /**
     * @param boolean $SubscribeNewSubscriberResult
     * @return \mbzSubscriber\SubscribeNewSubscriberResponse
     */
    public function setSubscribeNewSubscriberResult($SubscribeNewSubscriberResult)
    {
      $this->SubscribeNewSubscriberResult = $SubscribeNewSubscriberResult;
      return $this;
    }

}
