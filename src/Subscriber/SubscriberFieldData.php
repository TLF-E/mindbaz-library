<?php

namespace mbzSubscriber;

class SubscriberFieldData
{

    /**
     * @var int $idField
     */
    protected $idField = null;

    /**
     * @var anyType $value
     */
    protected $value = null;

    /**
     * @param int $idField
     */
    public function __construct($idField)
    {
      $this->idField = $idField;
    }

    /**
     * @return int
     */
    public function getIdField()
    {
      return $this->idField;
    }

    /**
     * @param int $idField
     * @return \mbzSubscriber\SubscriberFieldData
     */
    public function setIdField($idField)
    {
      $this->idField = $idField;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param anyType $value
     * @return \mbzSubscriber\SubscriberFieldData
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
