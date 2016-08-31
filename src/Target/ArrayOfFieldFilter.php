<?php

namespace mbzTarget;

class ArrayOfFieldFilter
{

    /**
     * @var FieldFilter[] $FieldFilter
     */
    protected $FieldFilter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldFilter[]
     */
    public function getFieldFilter()
    {
      return $this->FieldFilter;
    }

    /**
     * @param FieldFilter[] $FieldFilter
     * @return \mbzTarget\ArrayOfFieldFilter
     */
    public function setFieldFilter(array $FieldFilter = null)
    {
      $this->FieldFilter = $FieldFilter;
      return $this;
    }

}
