<?php

namespace mbzSubscriber;

class SubscribeToSpecificNewsletterResponse
{

    /**
     * @var boolean $SubscribeToSpecificNewsletterResult
     */
    protected $SubscribeToSpecificNewsletterResult = null;

    /**
     * @param boolean $SubscribeToSpecificNewsletterResult
     */
    public function __construct($SubscribeToSpecificNewsletterResult)
    {
      $this->SubscribeToSpecificNewsletterResult = $SubscribeToSpecificNewsletterResult;
    }

    /**
     * @return boolean
     */
    public function getSubscribeToSpecificNewsletterResult()
    {
      return $this->SubscribeToSpecificNewsletterResult;
    }

    /**
     * @param boolean $SubscribeToSpecificNewsletterResult
     * @return \mbzSubscriber\SubscribeToSpecificNewsletterResponse
     */
    public function setSubscribeToSpecificNewsletterResult($SubscribeToSpecificNewsletterResult)
    {
      $this->SubscribeToSpecificNewsletterResult = $SubscribeToSpecificNewsletterResult;
      return $this;
    }

}
