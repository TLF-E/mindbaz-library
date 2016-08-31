<?php

namespace mbzTarget;

class ListCustom
{

    /**
     * @var string $location
     */
    protected $location = null;

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
     * @var string $nameFilter
     */
    protected $nameFilter = null;

    /**
     * @param string $location
     * @param int $start
     * @param int $limit
     * @param string $sortField
     * @param ESortDir $sortDir
     * @param string $nameFilter
     */
    public function __construct($location, $start, $limit, $sortField, $sortDir, $nameFilter)
    {
      $this->location = $location;
      $this->start = $start;
      $this->limit = $limit;
      $this->sortField = $sortField;
      $this->sortDir = $sortDir;
      $this->nameFilter = $nameFilter;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \mbzTarget\List
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
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
     * @return \mbzTarget\List
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
     * @return \mbzTarget\List
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
     * @return \mbzTarget\List
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
     * @return \mbzTarget\List
     */
    public function setSortDir($sortDir)
    {
      $this->sortDir = $sortDir;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameFilter()
    {
      return $this->nameFilter;
    }

    /**
     * @param string $nameFilter
     * @return \mbzTarget\List
     */
    public function setNameFilter($nameFilter)
    {
      $this->nameFilter = $nameFilter;
      return $this;
    }

}
