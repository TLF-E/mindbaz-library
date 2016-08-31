<?php

namespace mbzImport;

class ArrayOfImportListRecords
{

    /**
     * @var ImportListRecords[] $ImportListRecords
     */
    protected $ImportListRecords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImportListRecords[]
     */
    public function getImportListRecords()
    {
      return $this->ImportListRecords;
    }

    /**
     * @param ImportListRecords[] $ImportListRecords
     * @return \mbzImport\ArrayOfImportListRecords
     */
    public function setImportListRecords(array $ImportListRecords = null)
    {
      $this->ImportListRecords = $ImportListRecords;
      return $this;
    }

}
