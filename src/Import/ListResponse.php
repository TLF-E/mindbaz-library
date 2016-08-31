<?php

namespace mbzImport;

class ListResponse
{

    /**
     * @var ImportListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ImportListResult $ListResult
     */
    public function __construct($ListResult)
    {
      $this->ListResult = $ListResult;
    }

    /**
     * @return ImportListResult
     */
    public function getListResult()
    {
      return $this->ListResult;
    }

    /**
     * @param ImportListResult $ListResult
     * @return \mbzImport\ListResponse
     */
    public function setListResult($ListResult)
    {
      $this->ListResult = $ListResult;
      return $this;
    }

}
