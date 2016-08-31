<?php

namespace mbzPicture;

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
     * @var string $fileNameFilter
     */
    protected $fileNameFilter = null;

    /**
     * @param string $location
     * @param int $start
     * @param int $limit
     * @param string $sortField
     * @param ESortDir $sortDir
     * @param string $nameFilter
     * @param string $fileNameFilter
     */
    public function __construct($location, $start, $limit, $sortField, $sortDir, $nameFilter, $fileNameFilter)
    {
      $this->location = $location;
      $this->start = $start;
      $this->limit = $limit;
      $this->sortField = $sortField;
      $this->sortDir = $sortDir;
      $this->nameFilter = $nameFilter;
      $this->fileNameFilter = $fileNameFilter;
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
     * @return \mbzPicture\List
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
     * @return \mbzPicture\List
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
     * @return \mbzPicture\List
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
     * @return \mbzPicture\List
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
     * @return \mbzPicture\List
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
     * @return \mbzPicture\List
     */
    public function setNameFilter($nameFilter)
    {
      $this->nameFilter = $nameFilter;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileNameFilter()
    {
      return $this->fileNameFilter;
    }

    /**
     * @param string $fileNameFilter
     * @return \mbzPicture\List
     */
    public function setFileNameFilter($fileNameFilter)
    {
      $this->fileNameFilter = $fileNameFilter;
      return $this;
    }

}
