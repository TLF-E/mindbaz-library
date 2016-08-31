<?php

namespace mbzOneshot;

class SendToIdClientResponse
{

    /**
     * @var string $SendToIdClientResult
     */
    protected $SendToIdClientResult = null;

    /**
     * @param string $SendToIdClientResult
     */
    public function __construct($SendToIdClientResult)
    {
      $this->SendToIdClientResult = $SendToIdClientResult;
    }

    /**
     * @return string
     */
    public function getSendToIdClientResult()
    {
      return $this->SendToIdClientResult;
    }

    /**
     * @param string $SendToIdClientResult
     * @return \mbzOneshot\SendToIdClientResponse
     */
    public function setSendToIdClientResult($SendToIdClientResult)
    {
      $this->SendToIdClientResult = $SendToIdClientResult;
      return $this;
    }

}
