<?php

namespace mbzSubscriber;

class GetSubscriberFieldsResponse
{

    /**
     * @var ArrayOfField $GetSubscriberFieldsResult
     */
    protected $GetSubscriberFieldsResult = null;

    /**
     * @param ArrayOfField $GetSubscriberFieldsResult
     */
    public function __construct($GetSubscriberFieldsResult)
    {
      $this->GetSubscriberFieldsResult = $GetSubscriberFieldsResult;
    }

    /**
     * @return ArrayOfField
     */
    public function getGetSubscriberFieldsResult()
    {
      return $this->GetSubscriberFieldsResult;
    }

    /**
     * @param ArrayOfField $GetSubscriberFieldsResult
     * @return \mbzSubscriber\GetSubscriberFieldsResponse
     */
    public function setGetSubscriberFieldsResult($GetSubscriberFieldsResult)
    {
      $this->GetSubscriberFieldsResult = $GetSubscriberFieldsResult;
      return $this;
    }

}
