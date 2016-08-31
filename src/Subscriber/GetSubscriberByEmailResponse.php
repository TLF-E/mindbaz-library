<?php

namespace mbzSubscriber;

class GetSubscriberByEmailResponse
{

    /**
     * @var Subscriber $GetSubscriberByEmailResult
     */
    protected $GetSubscriberByEmailResult = null;

    /**
     * @param Subscriber $GetSubscriberByEmailResult
     */
    public function __construct($GetSubscriberByEmailResult)
    {
      $this->GetSubscriberByEmailResult = $GetSubscriberByEmailResult;
    }

    /**
     * @return Subscriber
     */
    public function getGetSubscriberByEmailResult()
    {
      return $this->GetSubscriberByEmailResult;
    }

    /**
     * @param Subscriber $GetSubscriberByEmailResult
     * @return \mbzSubscriber\GetSubscriberByEmailResponse
     */
    public function setGetSubscriberByEmailResult($GetSubscriberByEmailResult)
    {
      $this->GetSubscriberByEmailResult = $GetSubscriberByEmailResult;
      return $this;
    }

}
