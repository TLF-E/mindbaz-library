<?php

namespace mbzImport;

class ImportListRecords
{

    /**
     * @var int $idImport
     */
    protected $idImport = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var \DateTime $scheduledDate
     */
    protected $scheduledDate = null;

    /**
     * @var int $idImportState
     */
    protected $idImportState = null;

    /**
     * @var string $importState
     */
    protected $importState = null;

    /**
     * @var string $progression
     */
    protected $progression = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var int $totalRows
     */
    protected $totalRows = null;

    /**
     * @var int $totalDuplicateKeys
     */
    protected $totalDuplicateKeys = null;

    /**
     * @var int $nbValidations
     */
    protected $nbValidations = null;

    /**
     * @var int $nbErrorRows
     */
    protected $nbErrorRows = null;

    /**
     * @var int $nbBadFormattedRows
     */
    protected $nbBadFormattedRows = null;

    /**
     * @var int $totalUpdates
     */
    protected $totalUpdates = null;

    /**
     * @var int $nbUpdates
     */
    protected $nbUpdates = null;

    /**
     * @var int $totalInserts
     */
    protected $totalInserts = null;

    /**
     * @var int $nbInserts
     */
    protected $nbInserts = null;

    /**
     * @var int $nbForbiddenInserts
     */
    protected $nbForbiddenInserts = null;

    /**
     * @param int $idImport
     * @param \DateTime $scheduledDate
     * @param int $idImportState
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param int $totalRows
     * @param int $totalDuplicateKeys
     * @param int $nbValidations
     * @param int $nbErrorRows
     * @param int $nbBadFormattedRows
     * @param int $totalUpdates
     * @param int $nbUpdates
     * @param int $totalInserts
     * @param int $nbInserts
     * @param int $nbForbiddenInserts
     */
    public function __construct($idImport, \DateTime $scheduledDate, $idImportState, \DateTime $startDate, \DateTime $endDate, $totalRows, $totalDuplicateKeys, $nbValidations, $nbErrorRows, $nbBadFormattedRows, $totalUpdates, $nbUpdates, $totalInserts, $nbInserts, $nbForbiddenInserts)
    {
      $this->idImport = $idImport;
      $this->scheduledDate = $scheduledDate->format(\DateTime::ATOM);
      $this->idImportState = $idImportState;
      $this->startDate = $startDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
      $this->totalRows = $totalRows;
      $this->totalDuplicateKeys = $totalDuplicateKeys;
      $this->nbValidations = $nbValidations;
      $this->nbErrorRows = $nbErrorRows;
      $this->nbBadFormattedRows = $nbBadFormattedRows;
      $this->totalUpdates = $totalUpdates;
      $this->nbUpdates = $nbUpdates;
      $this->totalInserts = $totalInserts;
      $this->nbInserts = $nbInserts;
      $this->nbForbiddenInserts = $nbForbiddenInserts;
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
     * @return \mbzImport\ImportListRecords
     */
    public function setIdImport($idImport)
    {
      $this->idImport = $idImport;
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
     * @return \mbzImport\ImportListRecords
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return \mbzImport\ImportListRecords
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDate()
    {
      if ($this->scheduledDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->scheduledDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $scheduledDate
     * @return \mbzImport\ImportListRecords
     */
    public function setScheduledDate(\DateTime $scheduledDate)
    {
      $this->scheduledDate = $scheduledDate->format(\DateTime::ATOM);
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
     * @return \mbzImport\ImportListRecords
     */
    public function setIdImportState($idImportState)
    {
      $this->idImportState = $idImportState;
      return $this;
    }

    /**
     * @return string
     */
    public function getImportState()
    {
      return $this->importState;
    }

    /**
     * @param string $importState
     * @return \mbzImport\ImportListRecords
     */
    public function setImportState($importState)
    {
      $this->importState = $importState;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgression()
    {
      return $this->progression;
    }

    /**
     * @param string $progression
     * @return \mbzImport\ImportListRecords
     */
    public function setProgression($progression)
    {
      $this->progression = $progression;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \mbzImport\ImportListRecords
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \mbzImport\ImportListRecords
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRows()
    {
      return $this->totalRows;
    }

    /**
     * @param int $totalRows
     * @return \mbzImport\ImportListRecords
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalDuplicateKeys()
    {
      return $this->totalDuplicateKeys;
    }

    /**
     * @param int $totalDuplicateKeys
     * @return \mbzImport\ImportListRecords
     */
    public function setTotalDuplicateKeys($totalDuplicateKeys)
    {
      $this->totalDuplicateKeys = $totalDuplicateKeys;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbValidations()
    {
      return $this->nbValidations;
    }

    /**
     * @param int $nbValidations
     * @return \mbzImport\ImportListRecords
     */
    public function setNbValidations($nbValidations)
    {
      $this->nbValidations = $nbValidations;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbErrorRows()
    {
      return $this->nbErrorRows;
    }

    /**
     * @param int $nbErrorRows
     * @return \mbzImport\ImportListRecords
     */
    public function setNbErrorRows($nbErrorRows)
    {
      $this->nbErrorRows = $nbErrorRows;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbBadFormattedRows()
    {
      return $this->nbBadFormattedRows;
    }

    /**
     * @param int $nbBadFormattedRows
     * @return \mbzImport\ImportListRecords
     */
    public function setNbBadFormattedRows($nbBadFormattedRows)
    {
      $this->nbBadFormattedRows = $nbBadFormattedRows;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalUpdates()
    {
      return $this->totalUpdates;
    }

    /**
     * @param int $totalUpdates
     * @return \mbzImport\ImportListRecords
     */
    public function setTotalUpdates($totalUpdates)
    {
      $this->totalUpdates = $totalUpdates;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbUpdates()
    {
      return $this->nbUpdates;
    }

    /**
     * @param int $nbUpdates
     * @return \mbzImport\ImportListRecords
     */
    public function setNbUpdates($nbUpdates)
    {
      $this->nbUpdates = $nbUpdates;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalInserts()
    {
      return $this->totalInserts;
    }

    /**
     * @param int $totalInserts
     * @return \mbzImport\ImportListRecords
     */
    public function setTotalInserts($totalInserts)
    {
      $this->totalInserts = $totalInserts;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbInserts()
    {
      return $this->nbInserts;
    }

    /**
     * @param int $nbInserts
     * @return \mbzImport\ImportListRecords
     */
    public function setNbInserts($nbInserts)
    {
      $this->nbInserts = $nbInserts;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbForbiddenInserts()
    {
      return $this->nbForbiddenInserts;
    }

    /**
     * @param int $nbForbiddenInserts
     * @return \mbzImport\ImportListRecords
     */
    public function setNbForbiddenInserts($nbForbiddenInserts)
    {
      $this->nbForbiddenInserts = $nbForbiddenInserts;
      return $this;
    }

}
