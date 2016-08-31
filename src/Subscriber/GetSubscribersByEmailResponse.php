<?php

namespace mbzSubscriber;

class GetSubscribersByEmailResponse
{

    /**
     * @var ArrayOfSubscriber $GetSubscribersByEmailResult
     */
    protected $GetSubscribersByEmailResult = null;

    /**
     * @param ArrayOfSubscriber $GetSubscribersByEmailResult
     */
    public function __construct($GetSubscribersByEmailResult)
    {
      $this->GetSubscribersByEmailResult = $GetSubscribersByEmailResult;
    }

    /**
     * @return ArrayOfSubscriber
     */
    public function getGetSubscribersByEmailResult()
    {
      return $this->GetSubscribersByEmailResult;
    }

    /**
     * @param ArrayOfSubscriber $GetSubscribersByEmailResult
     * @return \mbzSubscriber\GetSubscribersByEmailResponse
     */
    public function setGetSubscribersByEmailResult($GetSubscribersByEmailResult)
    {
      $this->GetSubscribersByEmailResult = $GetSubscribersByEmailResult;
      return $this;
    }

}
