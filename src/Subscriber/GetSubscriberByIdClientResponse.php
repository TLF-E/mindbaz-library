<?php

namespace mbzSubscriber;

class GetSubscriberByIdClientResponse
{

    /**
     * @var Subscriber $GetSubscriberByIdClientResult
     */
    protected $GetSubscriberByIdClientResult = null;

    /**
     * @param Subscriber $GetSubscriberByIdClientResult
     */
    public function __construct($GetSubscriberByIdClientResult)
    {
      $this->GetSubscriberByIdClientResult = $GetSubscriberByIdClientResult;
    }

    /**
     * @return Subscriber
     */
    public function getGetSubscriberByIdClientResult()
    {
      return $this->GetSubscriberByIdClientResult;
    }

    /**
     * @param Subscriber $GetSubscriberByIdClientResult
     * @return \mbzSubscriber\GetSubscriberByIdClientResponse
     */
    public function setGetSubscriberByIdClientResult($GetSubscriberByIdClientResult)
    {
      $this->GetSubscriberByIdClientResult = $GetSubscriberByIdClientResult;
      return $this;
    }

}
