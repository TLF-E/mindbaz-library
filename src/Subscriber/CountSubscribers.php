<?php

namespace mbzSubscriber;

class CountSubscribers
{

    /**
     * @var ArrayOfSubscriberFieldData $whereFields
     */
    protected $whereFields = null;

    /**
     * @param ArrayOfSubscriberFieldData $whereFields
     */
    public function __construct($whereFields)
    {
      $this->whereFields = $whereFields;
    }

    /**
     * @return ArrayOfSubscriberFieldData
     */
    public function getWhereFields()
    {
      return $this->whereFields;
    }

    /**
     * @param ArrayOfSubscriberFieldData $whereFields
     * @return \mbzSubscriber\CountSubscribers
     */
    public function setWhereFields($whereFields)
    {
      $this->whereFields = $whereFields;
      return $this;
    }

}
