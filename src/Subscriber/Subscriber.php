<?php

namespace mbzSubscriber;

class Subscriber
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var SubscriberFieldData[] $fld
     */
    protected $fld = null;

    /**
     * @param int $idSubscriber
     */
    public function __construct($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
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
     * @return \mbzSubscriber\Subscriber
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return SubscriberFieldData[]
     */
    public function getFld()
    {
      return $this->fld;
    }

    /**
     * @param SubscriberFieldData[] $fld
     * @return \mbzSubscriber\Subscriber
     */
    public function setFld(array $fld = null)
    {
      $this->fld = $fld;
      return $this;
    }

}
