<?php

namespace mbzSubscriber;

class UpdateSubscriber
{

    /**
     * @var Subscriber $subscriber
     */
    protected $subscriber = null;

    /**
     * @var boolean $checkEmailSyntax
     */
    protected $checkEmailSyntax = null;

    /**
     * @param Subscriber $subscriber
     * @param boolean $checkEmailSyntax
     */
    public function __construct($subscriber, $checkEmailSyntax)
    {
      $this->subscriber = $subscriber;
      $this->checkEmailSyntax = $checkEmailSyntax;
    }

    /**
     * @return Subscriber
     */
    public function getSubscriber()
    {
      return $this->subscriber;
    }

    /**
     * @param Subscriber $subscriber
     * @return \mbzSubscriber\UpdateSubscriber
     */
    public function setSubscriber($subscriber)
    {
      $this->subscriber = $subscriber;
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
     * @return \mbzSubscriber\UpdateSubscriber
     */
    public function setCheckEmailSyntax($checkEmailSyntax)
    {
      $this->checkEmailSyntax = $checkEmailSyntax;
      return $this;
    }

}
