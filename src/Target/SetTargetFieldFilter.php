<?php

namespace mbzTarget;

class SetTargetFieldFilter
{

    /**
     * @var TargetFieldFilter $fieldFilters
     */
    protected $fieldFilters = null;

    /**
     * @param TargetFieldFilter $fieldFilters
     */
    public function __construct($fieldFilters)
    {
      $this->fieldFilters = $fieldFilters;
    }

    /**
     * @return TargetFieldFilter
     */
    public function getFieldFilters()
    {
      return $this->fieldFilters;
    }

    /**
     * @param TargetFieldFilter $fieldFilters
     * @return \mbzTarget\SetTargetFieldFilter
     */
    public function setFieldFilters($fieldFilters)
    {
      $this->fieldFilters = $fieldFilters;
      return $this;
    }

}
