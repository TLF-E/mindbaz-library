<?php

namespace mbzConfig;

class ConfigParameters
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $senderEmail
     */
    protected $senderEmail = null;

    /**
     * @var string $senderAlias
     */
    protected $senderAlias = null;

    /**
     * @var string $toAlias
     */
    protected $toAlias = null;

    /**
     * @var string $responseEmail
     */
    protected $responseEmail = null;

    /**
     * @var string $responseAlias
     */
    protected $responseAlias = null;

    /**
     * @var string $headerHtml
     */
    protected $headerHtml = null;

    /**
     * @var string $headerTxt
     */
    protected $headerTxt = null;

    /**
     * @var string $footerHtml
     */
    protected $footerHtml = null;

    /**
     * @var string $footerTxt
     */
    protected $footerTxt = null;

    /**
     * @var string $unsubHtml
     */
    protected $unsubHtml = null;

    /**
     * @var string $unsubTxt
     */
    protected $unsubTxt = null;

    /**
     * @var string $objectPrefixBAT
     */
    protected $objectPrefixBAT = null;

    /**
     * @var string $senderAliasPrefixBAT
     */
    protected $senderAliasPrefixBAT = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \mbzConfig\ConfigParameters
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderEmail()
    {
      return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     * @return \mbzConfig\ConfigParameters
     */
    public function setSenderEmail($senderEmail)
    {
      $this->senderEmail = $senderEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderAlias()
    {
      return $this->senderAlias;
    }

    /**
     * @param string $senderAlias
     * @return \mbzConfig\ConfigParameters
     */
    public function setSenderAlias($senderAlias)
    {
      $this->senderAlias = $senderAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getToAlias()
    {
      return $this->toAlias;
    }

    /**
     * @param string $toAlias
     * @return \mbzConfig\ConfigParameters
     */
    public function setToAlias($toAlias)
    {
      $this->toAlias = $toAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseEmail()
    {
      return $this->responseEmail;
    }

    /**
     * @param string $responseEmail
     * @return \mbzConfig\ConfigParameters
     */
    public function setResponseEmail($responseEmail)
    {
      $this->responseEmail = $responseEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseAlias()
    {
      return $this->responseAlias;
    }

    /**
     * @param string $responseAlias
     * @return \mbzConfig\ConfigParameters
     */
    public function setResponseAlias($responseAlias)
    {
      $this->responseAlias = $responseAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeaderHtml()
    {
      return $this->headerHtml;
    }

    /**
     * @param string $headerHtml
     * @return \mbzConfig\ConfigParameters
     */
    public function setHeaderHtml($headerHtml)
    {
      $this->headerHtml = $headerHtml;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeaderTxt()
    {
      return $this->headerTxt;
    }

    /**
     * @param string $headerTxt
     * @return \mbzConfig\ConfigParameters
     */
    public function setHeaderTxt($headerTxt)
    {
      $this->headerTxt = $headerTxt;
      return $this;
    }

    /**
     * @return string
     */
    public function getFooterHtml()
    {
      return $this->footerHtml;
    }

    /**
     * @param string $footerHtml
     * @return \mbzConfig\ConfigParameters
     */
    public function setFooterHtml($footerHtml)
    {
      $this->footerHtml = $footerHtml;
      return $this;
    }

    /**
     * @return string
     */
    public function getFooterTxt()
    {
      return $this->footerTxt;
    }

    /**
     * @param string $footerTxt
     * @return \mbzConfig\ConfigParameters
     */
    public function setFooterTxt($footerTxt)
    {
      $this->footerTxt = $footerTxt;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnsubHtml()
    {
      return $this->unsubHtml;
    }

    /**
     * @param string $unsubHtml
     * @return \mbzConfig\ConfigParameters
     */
    public function setUnsubHtml($unsubHtml)
    {
      $this->unsubHtml = $unsubHtml;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnsubTxt()
    {
      return $this->unsubTxt;
    }

    /**
     * @param string $unsubTxt
     * @return \mbzConfig\ConfigParameters
     */
    public function setUnsubTxt($unsubTxt)
    {
      $this->unsubTxt = $unsubTxt;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectPrefixBAT()
    {
      return $this->objectPrefixBAT;
    }

    /**
     * @param string $objectPrefixBAT
     * @return \mbzConfig\ConfigParameters
     */
    public function setObjectPrefixBAT($objectPrefixBAT)
    {
      $this->objectPrefixBAT = $objectPrefixBAT;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderAliasPrefixBAT()
    {
      return $this->senderAliasPrefixBAT;
    }

    /**
     * @param string $senderAliasPrefixBAT
     * @return \mbzConfig\ConfigParameters
     */
    public function setSenderAliasPrefixBAT($senderAliasPrefixBAT)
    {
      $this->senderAliasPrefixBAT = $senderAliasPrefixBAT;
      return $this;
    }

}
