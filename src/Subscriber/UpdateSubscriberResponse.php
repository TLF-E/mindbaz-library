<?php

namespace mbzSubscriber;

class UpdateSubscriberResponse
{

    /**
     * @var boolean $UpdateSubscriberResult
     */
    protected $UpdateSubscriberResult = null;

    /**
     * @param boolean $UpdateSubscriberResult
     */
    public function __construct($UpdateSubscriberResult)
    {
      $this->UpdateSubscriberResult = $UpdateSubscriberResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSubscriberResult()
    {
      return $this->UpdateSubscriberResult;
    }

    /**
     * @param boolean $UpdateSubscriberResult
     * @return \mbzSubscriber\UpdateSubscriberResponse
     */
    public function setUpdateSubscriberResult($UpdateSubscriberResult)
    {
      $this->UpdateSubscriberResult = $UpdateSubscriberResult;
      return $this;
    }

}
