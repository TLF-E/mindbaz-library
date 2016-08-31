<?php

namespace mbzConfig;

class ArrayOfConfigListRecords
{

    /**
     * @var ConfigListRecords[] $ConfigListRecords
     */
    protected $ConfigListRecords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfigListRecords[]
     */
    public function getConfigListRecords()
    {
      return $this->ConfigListRecords;
    }

    /**
     * @param ConfigListRecords[] $ConfigListRecords
     * @return \mbzConfig\ArrayOfConfigListRecords
     */
    public function setConfigListRecords(array $ConfigListRecords = null)
    {
      $this->ConfigListRecords = $ConfigListRecords;
      return $this;
    }

}
