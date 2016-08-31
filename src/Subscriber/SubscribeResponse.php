<?php

namespace mbzSubscriber;

class SubscribeResponse
{

    /**
     * @var boolean $SubscribeResult
     */
    protected $SubscribeResult = null;

    /**
     * @param boolean $SubscribeResult
     */
    public function __construct($SubscribeResult)
    {
      $this->SubscribeResult = $SubscribeResult;
    }

    /**
     * @return boolean
     */
    public function getSubscribeResult()
    {
      return $this->SubscribeResult;
    }

    /**
     * @param boolean $SubscribeResult
     * @return \mbzSubscriber\SubscribeResponse
     */
    public function setSubscribeResult($SubscribeResult)
    {
      $this->SubscribeResult = $SubscribeResult;
      return $this;
    }

}
