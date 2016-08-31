<?php

namespace mbzSubscriber;

class ArrayOfField
{

    /**
     * @var Field[] $Field
     */
    protected $Field = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Field[]
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param Field[] $Field
     * @return \mbzSubscriber\ArrayOfField
     */
    public function setField(array $Field = null)
    {
      $this->Field = $Field;
      return $this;
    }

}
