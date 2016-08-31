<?php

namespace mbzSubscriber;

class UnsubscribeFromPartnersOffersResponse
{

    /**
     * @var boolean $UnsubscribeFromPartnersOffersResult
     */
    protected $UnsubscribeFromPartnersOffersResult = null;

    /**
     * @param boolean $UnsubscribeFromPartnersOffersResult
     */
    public function __construct($UnsubscribeFromPartnersOffersResult)
    {
      $this->UnsubscribeFromPartnersOffersResult = $UnsubscribeFromPartnersOffersResult;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeFromPartnersOffersResult()
    {
      return $this->UnsubscribeFromPartnersOffersResult;
    }

    /**
     * @param boolean $UnsubscribeFromPartnersOffersResult
     * @return \mbzSubscriber\UnsubscribeFromPartnersOffersResponse
     */
    public function setUnsubscribeFromPartnersOffersResult($UnsubscribeFromPartnersOffersResult)
    {
      $this->UnsubscribeFromPartnersOffersResult = $UnsubscribeFromPartnersOffersResult;
      return $this;
    }

}
