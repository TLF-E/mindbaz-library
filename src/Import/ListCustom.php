<?php

namespace mbzImport;

class ListCustom
{

    /**
     * @var int $start
     */
    protected $start = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var string $sortField
     */
    protected $sortField = null;

    /**
     * @var ESortDir $sortDir
     */
    protected $sortDir = null;

    /**
     * @param int $start
     * @param int $limit
     * @param string $sortField
     * @param ESortDir $sortDir
     */
    public function __construct($start, $limit, $sortField, $sortDir)
    {
      $this->start = $start;
      $this->limit = $limit;
      $this->sortField = $sortField;
      $this->sortDir = $sortDir;
    }

    /**
     * @return int
     */
    public function getStart()
    {
      return $this->start;
    }

    /**
     * @param int $start
     * @return \mbzImport\List
     */
    public function setStart($start)
    {
      $this->start = $start;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \mbzImport\List
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortField()
    {
      return $this->sortField;
    }

    /**
     * @param string $sortField
     * @return \mbzImport\List
     */
    public function setSortField($sortField)
    {
      $this->sortField = $sortField;
      return $this;
    }

    /**
     * @return ESortDir
     */
    public function getSortDir()
    {
      return $this->sortDir;
    }

    /**
     * @param ESortDir $sortDir
     * @return \mbzImport\List
     */
    public function setSortDir($sortDir)
    {
      $this->sortDir = $sortDir;
      return $this;
    }

}
