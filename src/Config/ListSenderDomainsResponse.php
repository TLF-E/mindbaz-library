<?php

namespace mbzConfig;

class ListSenderDomainsResponse
{

    /**
     * @var ArrayOfString $ListSenderDomainsResult
     */
    protected $ListSenderDomainsResult = null;

    /**
     * @param ArrayOfString $ListSenderDomainsResult
     */
    public function __construct($ListSenderDomainsResult)
    {
      $this->ListSenderDomainsResult = $ListSenderDomainsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getListSenderDomainsResult()
    {
      return $this->ListSenderDomainsResult;
    }

    /**
     * @param ArrayOfString $ListSenderDomainsResult
     * @return \mbzConfig\ListSenderDomainsResponse
     */
    public function setListSenderDomainsResult($ListSenderDomainsResult)
    {
      $this->ListSenderDomainsResult = $ListSenderDomainsResult;
      return $this;
    }

}
