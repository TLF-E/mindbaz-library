<?php

namespace mbzSubscriber;

class GetSubscriberByEncodedEmailResponse
{

    /**
     * @var Subscriber $GetSubscriberByEncodedEmailResult
     */
    protected $GetSubscriberByEncodedEmailResult = null;

    /**
     * @param Subscriber $GetSubscriberByEncodedEmailResult
     */
    public function __construct($GetSubscriberByEncodedEmailResult)
    {
      $this->GetSubscriberByEncodedEmailResult = $GetSubscriberByEncodedEmailResult;
    }

    /**
     * @return Subscriber
     */
    public function getGetSubscriberByEncodedEmailResult()
    {
      return $this->GetSubscriberByEncodedEmailResult;
    }

    /**
     * @param Subscriber $GetSubscriberByEncodedEmailResult
     * @return \mbzSubscriber\GetSubscriberByEncodedEmailResponse
     */
    public function setGetSubscriberByEncodedEmailResult($GetSubscriberByEncodedEmailResult)
    {
      $this->GetSubscriberByEncodedEmailResult = $GetSubscriberByEncodedEmailResult;
      return $this;
    }

}
