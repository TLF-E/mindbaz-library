<?php

namespace mbzSubscriber;

class UpdateSubscribersResponse
{

    /**
     * @var int $UpdateSubscribersResult
     */
    protected $UpdateSubscribersResult = null;

    /**
     * @param int $UpdateSubscribersResult
     */
    public function __construct($UpdateSubscribersResult)
    {
      $this->UpdateSubscribersResult = $UpdateSubscribersResult;
    }

    /**
     * @return int
     */
    public function getUpdateSubscribersResult()
    {
      return $this->UpdateSubscribersResult;
    }

    /**
     * @param int $UpdateSubscribersResult
     * @return \mbzSubscriber\UpdateSubscribersResponse
     */
    public function setUpdateSubscribersResult($UpdateSubscribersResult)
    {
      $this->UpdateSubscribersResult = $UpdateSubscribersResult;
      return $this;
    }

}
