<?php

namespace mbzSubscriber;

class UnsubscribeFromSpecificNewsletterResponse
{

    /**
     * @var boolean $UnsubscribeFromSpecificNewsletterResult
     */
    protected $UnsubscribeFromSpecificNewsletterResult = null;

    /**
     * @param boolean $UnsubscribeFromSpecificNewsletterResult
     */
    public function __construct($UnsubscribeFromSpecificNewsletterResult)
    {
      $this->UnsubscribeFromSpecificNewsletterResult = $UnsubscribeFromSpecificNewsletterResult;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeFromSpecificNewsletterResult()
    {
      return $this->UnsubscribeFromSpecificNewsletterResult;
    }

    /**
     * @param boolean $UnsubscribeFromSpecificNewsletterResult
     * @return \mbzSubscriber\UnsubscribeFromSpecificNewsletterResponse
     */
    public function setUnsubscribeFromSpecificNewsletterResult($UnsubscribeFromSpecificNewsletterResult)
    {
      $this->UnsubscribeFromSpecificNewsletterResult = $UnsubscribeFromSpecificNewsletterResult;
      return $this;
    }

}
