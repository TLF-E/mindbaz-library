<?php

namespace mbzImport;

class ArrayOfImportMapping
{

    /**
     * @var ImportMapping[] $ImportMapping
     */
    protected $ImportMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImportMapping[]
     */
    public function getImportMapping()
    {
      return $this->ImportMapping;
    }

    /**
     * @param ImportMapping[] $ImportMapping
     * @return \mbzImport\ArrayOfImportMapping
     */
    public function setImportMapping(array $ImportMapping = null)
    {
      $this->ImportMapping = $ImportMapping;
      return $this;
    }

}
