<?php

namespace mbzSubscriber;

class Unsubscribe
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var int $idSent
     */
    protected $idSent = null;

    /**
     * @var boolean $unsubOnlySubscribers
     */
    protected $unsubOnlySubscribers = null;

    /**
     * @param int $idSubscriber
     * @param int $idSent
     * @param boolean $unsubOnlySubscribers
     */
    public function __construct($idSubscriber, $idSent, $unsubOnlySubscribers)
    {
      $this->idSubscriber = $idSubscriber;
      $this->idSent = $idSent;
      $this->unsubOnlySubscribers = $unsubOnlySubscribers;
    }

    /**
     * @return int
     */
    public function getIdSubscriber()
    {
      return $this->idSubscriber;
    }

    /**
     * @param int $idSubscriber
     * @return \mbzSubscriber\Unsubscribe
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSent()
    {
      return $this->idSent;
    }

    /**
     * @param int $idSent
     * @return \mbzSubscriber\Unsubscribe
     */
    public function setIdSent($idSent)
    {
      $this->idSent = $idSent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnsubOnlySubscribers()
    {
      return $this->unsubOnlySubscribers;
    }

    /**
     * @param boolean $unsubOnlySubscribers
     * @return \mbzSubscriber\Unsubscribe
     */
    public function setUnsubOnlySubscribers($unsubOnlySubscribers)
    {
      $this->unsubOnlySubscribers = $unsubOnlySubscribers;
      return $this;
    }

}
