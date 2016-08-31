<?php

namespace mbzTarget;

class SetTargetSendingFilter
{

    /**
     * @var TargetSendingFilter $sendingFilter
     */
    protected $sendingFilter = null;

    /**
     * @param TargetSendingFilter $sendingFilter
     */
    public function __construct($sendingFilter)
    {
      $this->sendingFilter = $sendingFilter;
    }

    /**
     * @return TargetSendingFilter
     */
    public function getSendingFilter()
    {
      return $this->sendingFilter;
    }

    /**
     * @param TargetSendingFilter $sendingFilter
     * @return \mbzTarget\SetTargetSendingFilter
     */
    public function setSendingFilter($sendingFilter)
    {
      $this->sendingFilter = $sendingFilter;
      return $this;
    }

}
