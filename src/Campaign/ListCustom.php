<?php

namespace mbzCampaign;

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
     * @var ECampMode $campMode
     */
    protected $campMode = null;

    /**
     * @var ECampType $campType
     */
    protected $campType = null;

    /**
     * @var \DateTime $creationStartDate
     */
    protected $creationStartDate = null;

    /**
     * @var \DateTime $creationEndDate
     */
    protected $creationEndDate = null;

    /**
     * @param string $location
     * @param int $start
     * @param int $limit
     * @param string $sortField
     * @param ESortDir $sortDir
     * @param string $nameFilter
     * @param ECampMode $campMode
     * @param ECampType $campType
     * @param \DateTime $creationStartDate
     * @param \DateTime $creationEndDate
     */
    public function __construct($location, $start, $limit, $sortField, $sortDir, $nameFilter, $campMode, $campType, \DateTime $creationStartDate, \DateTime $creationEndDate)
    {
      $this->location = $location;
      $this->start = $start;
      $this->limit = $limit;
      $this->sortField = $sortField;
      $this->sortDir = $sortDir;
      $this->nameFilter = $nameFilter;
      $this->campMode = $campMode;
      $this->campType = $campType;
      $this->creationStartDate = $creationStartDate->format(\DateTime::ATOM);
      $this->creationEndDate = $creationEndDate->format(\DateTime::ATOM);
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
     * @return \mbzCampaign\List
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
     * @return \mbzCampaign\List
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
     * @return \mbzCampaign\List
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
     * @return \mbzCampaign\List
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
     * @return \mbzCampaign\List
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
     * @return \mbzCampaign\List
     */
    public function setNameFilter($nameFilter)
    {
      $this->nameFilter = $nameFilter;
      return $this;
    }

    /**
     * @return ECampMode
     */
    public function getCampMode()
    {
      return $this->campMode;
    }

    /**
     * @param ECampMode $campMode
     * @return \mbzCampaign\List
     */
    public function setCampMode($campMode)
    {
      $this->campMode = $campMode;
      return $this;
    }

    /**
     * @return ECampType
     */
    public function getCampType()
    {
      return $this->campType;
    }

    /**
     * @param ECampType $campType
     * @return \mbzCampaign\List
     */
    public function setCampType($campType)
    {
      $this->campType = $campType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationStartDate()
    {
      if ($this->creationStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationStartDate
     * @return \mbzCampaign\List
     */
    public function setCreationStartDate(\DateTime $creationStartDate)
    {
      $this->creationStartDate = $creationStartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationEndDate()
    {
      if ($this->creationEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationEndDate
     * @return \mbzCampaign\List
     */
    public function setCreationEndDate(\DateTime $creationEndDate)
    {
      $this->creationEndDate = $creationEndDate->format(\DateTime::ATOM);
      return $this;
    }

}
