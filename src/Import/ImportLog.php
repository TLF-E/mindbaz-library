<?php

namespace mbzImport;

class ImportLog
{

    /**
     * @var int $idImportLog
     */
    protected $idImportLog = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

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
     * @var string $badFormattedRowNumbers
     */
    protected $badFormattedRowNumbers = null;

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
     * @param int $idImportLog
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
    public function __construct($idImportLog, \DateTime $startDate, \DateTime $endDate, $totalRows, $totalDuplicateKeys, $nbValidations, $nbErrorRows, $nbBadFormattedRows, $totalUpdates, $nbUpdates, $totalInserts, $nbInserts, $nbForbiddenInserts)
    {
      $this->idImportLog = $idImportLog;
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
    public function getIdImportLog()
    {
      return $this->idImportLog;
    }

    /**
     * @param int $idImportLog
     * @return \mbzImport\ImportLog
     */
    public function setIdImportLog($idImportLog)
    {
      $this->idImportLog = $idImportLog;
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
     * @return \mbzImport\ImportLog
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \mbzImport\ImportLog
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
     */
    public function setNbBadFormattedRows($nbBadFormattedRows)
    {
      $this->nbBadFormattedRows = $nbBadFormattedRows;
      return $this;
    }

    /**
     * @return string
     */
    public function getBadFormattedRowNumbers()
    {
      return $this->badFormattedRowNumbers;
    }

    /**
     * @param string $badFormattedRowNumbers
     * @return \mbzImport\ImportLog
     */
    public function setBadFormattedRowNumbers($badFormattedRowNumbers)
    {
      $this->badFormattedRowNumbers = $badFormattedRowNumbers;
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
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
     * @return \mbzImport\ImportLog
     */
    public function setNbForbiddenInserts($nbForbiddenInserts)
    {
      $this->nbForbiddenInserts = $nbForbiddenInserts;
      return $this;
    }

}
