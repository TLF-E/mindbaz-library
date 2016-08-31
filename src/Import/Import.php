<?php

namespace mbzImport;

class Import
{

    /**
     * @var int $idImport
     */
    protected $idImport = null;

    /**
     * @var ImportParameters $parameters
     */
    protected $parameters = null;

    /**
     * @var \DateTime $creationDate
     */
    protected $creationDate = null;

    /**
     * @var int $idImportState
     */
    protected $idImportState = null;

    /**
     * @var boolean $isDeleted
     */
    protected $isDeleted = null;

    /**
     * @var \DateTime $deletionDate
     */
    protected $deletionDate = null;

    /**
     * @var SchedulingInfos $schedulingInfos
     */
    protected $schedulingInfos = null;

    /**
     * @var ImportLog $lastImportLog
     */
    protected $lastImportLog = null;

    /**
     * @param int $idImport
     * @param \DateTime $creationDate
     * @param int $idImportState
     * @param boolean $isDeleted
     */
    public function __construct($idImport, \DateTime $creationDate, $idImportState, $isDeleted)
    {
      $this->idImport = $idImport;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->idImportState = $idImportState;
      $this->isDeleted = $isDeleted;
    }

    /**
     * @return int
     */
    public function getIdImport()
    {
      return $this->idImport;
    }

    /**
     * @param int $idImport
     * @return \mbzImport\Import
     */
    public function setIdImport($idImport)
    {
      $this->idImport = $idImport;
      return $this;
    }

    /**
     * @return ImportParameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param ImportParameters $parameters
     * @return \mbzImport\Import
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->creationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationDate
     * @return \mbzImport\Import
     */
    public function setCreationDate(\DateTime $creationDate)
    {
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getIdImportState()
    {
      return $this->idImportState;
    }

    /**
     * @param int $idImportState
     * @return \mbzImport\Import
     */
    public function setIdImportState($idImportState)
    {
      $this->idImportState = $idImportState;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
      return $this->isDeleted;
    }

    /**
     * @param boolean $isDeleted
     * @return \mbzImport\Import
     */
    public function setIsDeleted($isDeleted)
    {
      $this->isDeleted = $isDeleted;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeletionDate()
    {
      if ($this->deletionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->deletionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $deletionDate
     * @return \mbzImport\Import
     */
    public function setDeletionDate(\DateTime $deletionDate = null)
    {
      if ($deletionDate == null) {
       $this->deletionDate = null;
      } else {
        $this->deletionDate = $deletionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SchedulingInfos
     */
    public function getSchedulingInfos()
    {
      return $this->schedulingInfos;
    }

    /**
     * @param SchedulingInfos $schedulingInfos
     * @return \mbzImport\Import
     */
    public function setSchedulingInfos($schedulingInfos)
    {
      $this->schedulingInfos = $schedulingInfos;
      return $this;
    }

    /**
     * @return ImportLog
     */
    public function getLastImportLog()
    {
      return $this->lastImportLog;
    }

    /**
     * @param ImportLog $lastImportLog
     * @return \mbzImport\Import
     */
    public function setLastImportLog($lastImportLog)
    {
      $this->lastImportLog = $lastImportLog;
      return $this;
    }

}
