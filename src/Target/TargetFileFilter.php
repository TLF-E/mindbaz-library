<?php

namespace mbzTarget;

class TargetFileFilter
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var boolean $isFilterEnabled
     */
    protected $isFilterEnabled = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $dbFieldName
     */
    protected $dbFieldName = null;

    /**
     * @var \DateTime $fileAutomaticDeletionDate
     */
    protected $fileAutomaticDeletionDate = null;

    /**
     * @param int $idTarget
     * @param boolean $isFilterEnabled
     * @param \DateTime $fileAutomaticDeletionDate
     */
    public function __construct($idTarget, $isFilterEnabled, \DateTime $fileAutomaticDeletionDate)
    {
      $this->idTarget = $idTarget;
      $this->isFilterEnabled = $isFilterEnabled;
      $this->fileAutomaticDeletionDate = $fileAutomaticDeletionDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getIdTarget()
    {
      return $this->idTarget;
    }

    /**
     * @param int $idTarget
     * @return \mbzTarget\TargetFileFilter
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFilterEnabled()
    {
      return $this->isFilterEnabled;
    }

    /**
     * @param boolean $isFilterEnabled
     * @return \mbzTarget\TargetFileFilter
     */
    public function setIsFilterEnabled($isFilterEnabled)
    {
      $this->isFilterEnabled = $isFilterEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param string $filename
     * @return \mbzTarget\TargetFileFilter
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getDbFieldName()
    {
      return $this->dbFieldName;
    }

    /**
     * @param string $dbFieldName
     * @return \mbzTarget\TargetFileFilter
     */
    public function setDbFieldName($dbFieldName)
    {
      $this->dbFieldName = $dbFieldName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFileAutomaticDeletionDate()
    {
      if ($this->fileAutomaticDeletionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fileAutomaticDeletionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fileAutomaticDeletionDate
     * @return \mbzTarget\TargetFileFilter
     */
    public function setFileAutomaticDeletionDate(\DateTime $fileAutomaticDeletionDate)
    {
      $this->fileAutomaticDeletionDate = $fileAutomaticDeletionDate->format(\DateTime::ATOM);
      return $this;
    }

}
