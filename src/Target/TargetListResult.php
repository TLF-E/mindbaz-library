<?php

namespace mbzTarget;

class TargetListResult
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var ArrayOfTargetListRecords $records
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
     * @return \mbzTarget\TargetListResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return ArrayOfTargetListRecords
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfTargetListRecords $records
     * @return \mbzTarget\TargetListResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
