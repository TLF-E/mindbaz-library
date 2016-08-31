<?php

namespace mbzImport;

class ImportListResult
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var ArrayOfImportListRecords $records
     */
    protected $records = null;

    /**
     * @param int $total
     */
    public function __construct($total)
    {
      $this->total = $total;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param int $total
     * @return \mbzImport\ImportListResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return ArrayOfImportListRecords
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfImportListRecords $records
     * @return \mbzImport\ImportListResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
