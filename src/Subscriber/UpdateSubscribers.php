<?php

namespace mbzSubscriber;

class UpdateSubscribers
{

    /**
     * @var ArrayOfSubscriber $subscribers
     */
    protected $subscribers = null;

    /**
     * @var boolean $checkEmailSyntax
     */
    protected $checkEmailSyntax = null;

    /**
     * @param ArrayOfSubscriber $subscribers
     * @param boolean $checkEmailSyntax
     */
    public function __construct($subscribers, $checkEmailSyntax)
    {
      $this->subscribers = $subscribers;
      $this->checkEmailSyntax = $checkEmailSyntax;
    }

    /**
     * @return ArrayOfSubscriber
     */
    public function getSubscribers()
    {
      return $this->subscribers;
    }

    /**
     * @param ArrayOfSubscriber $subscribers
     * @return \mbzSubscriber\UpdateSubscribers
     */
    public function setSubscribers($subscribers)
    {
      $this->subscribers = $subscribers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckEmailSyntax()
    {
      return $this->checkEmailSyntax;
    }

    /**
     * @param boolean $checkEmailSyntax
     * @return \mbzSubscriber\UpdateSubscribers
     */
    public function setCheckEmailSyntax($checkEmailSyntax)
    {
      $this->checkEmailSyntax = $checkEmailSyntax;
      return $this;
    }

}
