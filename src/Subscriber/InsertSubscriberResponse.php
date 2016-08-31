<?php

namespace mbzSubscriber;

class InsertSubscriberResponse
{

    /**
     * @var int $InsertSubscriberResult
     */
    protected $InsertSubscriberResult = null;

    /**
     * @param int $InsertSubscriberResult
     */
    public function __construct($InsertSubscriberResult)
    {
      $this->InsertSubscriberResult = $InsertSubscriberResult;
    }

    /**
     * @return int
     */
    public function getInsertSubscriberResult()
    {
      return $this->InsertSubscriberResult;
    }

    /**
     * @param int $InsertSubscriberResult
     * @return \mbzSubscriber\InsertSubscriberResponse
     */
    public function setInsertSubscriberResult($InsertSubscriberResult)
    {
      $this->InsertSubscriberResult = $InsertSubscriberResult;
      return $this;
    }

}
