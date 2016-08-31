<?php

namespace mbzConfig;

class ConfigListResult
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var ArrayOfConfigListRecords $records
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
     * @return \mbzConfig\ConfigListResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return ArrayOfConfigListRecords
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfConfigListRecords $records
     * @return \mbzConfig\ConfigListResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
