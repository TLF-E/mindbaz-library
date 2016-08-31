<?php

namespace mbzOneshot;

class SendToMD5Response
{

    /**
     * @var string $SendToMD5Result
     */
    protected $SendToMD5Result = null;

    /**
     * @param string $SendToMD5Result
     */
    public function __construct($SendToMD5Result)
    {
      $this->SendToMD5Result = $SendToMD5Result;
    }

    /**
     * @return string
     */
    public function getSendToMD5Result()
    {
      return $this->SendToMD5Result;
    }

    /**
     * @param string $SendToMD5Result
     * @return \mbzOneshot\SendToMD5Response
     */
    public function setSendToMD5Result($SendToMD5Result)
    {
      $this->SendToMD5Result = $SendToMD5Result;
      return $this;
    }

}
