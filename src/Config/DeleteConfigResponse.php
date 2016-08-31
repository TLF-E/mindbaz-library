<?php

namespace mbzConfig;

class DeleteConfigResponse
{

    /**
     * @var boolean $DeleteConfigResult
     */
    protected $DeleteConfigResult = null;

    /**
     * @param boolean $DeleteConfigResult
     */
    public function __construct($DeleteConfigResult)
    {
      $this->DeleteConfigResult = $DeleteConfigResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteConfigResult()
    {
      return $this->DeleteConfigResult;
    }

    /**
     * @param boolean $DeleteConfigResult
     * @return \mbzConfig\DeleteConfigResponse
     */
    public function setDeleteConfigResult($DeleteConfigResult)
    {
      $this->DeleteConfigResult = $DeleteConfigResult;
      return $this;
    }

}
