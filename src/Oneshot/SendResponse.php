<?php

namespace mbzOneshot;

class SendResponse
{

    /**
     * @var string $SendResult
     */
    protected $SendResult = null;

    /**
     * @param string $SendResult
     */
    public function __construct($SendResult)
    {
      $this->SendResult = $SendResult;
    }

    /**
     * @return string
     */
    public function getSendResult()
    {
      return $this->SendResult;
    }

    /**
     * @param string $SendResult
     * @return \mbzOneshot\SendResponse
     */
    public function setSendResult($SendResult)
    {
      $this->SendResult = $SendResult;
      return $this;
    }

}
