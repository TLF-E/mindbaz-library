<?php

namespace mbzSubscriber;

class CountSubscribersResponse
{

    /**
     * @var int $CountSubscribersResult
     */
    protected $CountSubscribersResult = null;

    /**
     * @param int $CountSubscribersResult
     */
    public function __construct($CountSubscribersResult)
    {
      $this->CountSubscribersResult = $CountSubscribersResult;
    }

    /**
     * @return int
     */
    public function getCountSubscribersResult()
    {
      return $this->CountSubscribersResult;
    }

    /**
     * @param int $CountSubscribersResult
     * @return \mbzSubscriber\CountSubscribersResponse
     */
    public function setCountSubscribersResult($CountSubscribersResult)
    {
      $this->CountSubscribersResult = $CountSubscribersResult;
      return $this;
    }

}
