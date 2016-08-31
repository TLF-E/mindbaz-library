<?php

namespace mbzCampaign;

class PauseResponse
{

    /**
     * @var boolean $PauseResult
     */
    protected $PauseResult = null;

    /**
     * @param boolean $PauseResult
     */
    public function __construct($PauseResult)
    {
      $this->PauseResult = $PauseResult;
    }

    /**
     * @return boolean
     */
    public function getPauseResult()
    {
      return $this->PauseResult;
    }

    /**
     * @param boolean $PauseResult
     * @return \mbzCampaign\PauseResponse
     */
    public function setPauseResult($PauseResult)
    {
      $this->PauseResult = $PauseResult;
      return $this;
    }

}
