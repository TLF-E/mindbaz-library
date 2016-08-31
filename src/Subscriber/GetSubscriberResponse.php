<?php

namespace mbzSubscriber;

class GetSubscriberResponse
{

    /**
     * @var Subscriber $GetSubscriberResult
     */
    protected $GetSubscriberResult = null;

    /**
     * @param Subscriber $GetSubscriberResult
     */
    public function __construct($GetSubscriberResult)
    {
      $this->GetSubscriberResult = $GetSubscriberResult;
    }

    /**
     * @return Subscriber
     */
    public function getGetSubscriberResult()
    {
      return $this->GetSubscriberResult;
    }

    /**
     * @param Subscriber $GetSubscriberResult
     * @return \mbzSubscriber\GetSubscriberResponse
     */
    public function setGetSubscriberResult($GetSubscriberResult)
    {
      $this->GetSubscriberResult = $GetSubscriberResult;
      return $this;
    }

}
