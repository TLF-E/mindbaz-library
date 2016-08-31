<?php

namespace mbzSubscriber;

class GetSubscribersByEncodedEmailResponse
{

    /**
     * @var ArrayOfSubscriber $GetSubscribersByEncodedEmailResult
     */
    protected $GetSubscribersByEncodedEmailResult = null;

    /**
     * @param ArrayOfSubscriber $GetSubscribersByEncodedEmailResult
     */
    public function __construct($GetSubscribersByEncodedEmailResult)
    {
      $this->GetSubscribersByEncodedEmailResult = $GetSubscribersByEncodedEmailResult;
    }

    /**
     * @return ArrayOfSubscriber
     */
    public function getGetSubscribersByEncodedEmailResult()
    {
      return $this->GetSubscribersByEncodedEmailResult;
    }

    /**
     * @param ArrayOfSubscriber $GetSubscribersByEncodedEmailResult
     * @return \mbzSubscriber\GetSubscribersByEncodedEmailResponse
     */
    public function setGetSubscribersByEncodedEmailResult($GetSubscribersByEncodedEmailResult)
    {
      $this->GetSubscribersByEncodedEmailResult = $GetSubscribersByEncodedEmailResult;
      return $this;
    }

}
