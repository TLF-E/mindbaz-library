<?php

namespace mbzCampaign;

class PlayResponse
{

    /**
     * @var boolean $PlayResult
     */
    protected $PlayResult = null;

    /**
     * @param boolean $PlayResult
     */
    public function __construct($PlayResult)
    {
      $this->PlayResult = $PlayResult;
    }

    /**
     * @return boolean
     */
    public function getPlayResult()
    {
      return $this->PlayResult;
    }

    /**
     * @param boolean $PlayResult
     * @return \mbzCampaign\PlayResponse
     */
    public function setPlayResult($PlayResult)
    {
      $this->PlayResult = $PlayResult;
      return $this;
    }

}
