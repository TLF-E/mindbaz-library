<?php

namespace mbzSubscriber;

class FieldListTypeValue
{

    /**
     * @var int $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param int $key
     */
    public function __construct($key)
    {
      $this->key = $key;
    }

    /**
     * @return int
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param int $key
     * @return \mbzSubscriber\FieldListTypeValue
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \mbzSubscriber\FieldListTypeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
