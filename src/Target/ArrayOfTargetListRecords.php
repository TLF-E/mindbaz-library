<?php

namespace mbzTarget;

class ArrayOfTargetListRecords
{

    /**
     * @var TargetListRecords[] $TargetListRecords
     */
    protected $TargetListRecords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetListRecords[]
     */
    public function getTargetListRecords()
    {
      return $this->TargetListRecords;
    }

    /**
     * @param TargetListRecords[] $TargetListRecords
     * @return \mbzTarget\ArrayOfTargetListRecords
     */
    public function setTargetListRecords(array $TargetListRecords = null)
    {
      $this->TargetListRecords = $TargetListRecords;
      return $this;
    }

}
