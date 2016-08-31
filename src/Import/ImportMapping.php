<?php

namespace mbzImport;

class ImportMapping
{

    /**
     * @var string $dbFieldName
     */
    protected $dbFieldName = null;

    /**
     * @var int $idMappingMode
     */
    protected $idMappingMode = null;

    /**
     * @var string $fileColumnName
     */
    protected $fileColumnName = null;

    /**
     * @var string $fixedValue
     */
    protected $fixedValue = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @param int $idMappingMode
     */
    public function __construct($idMappingMode)
    {
      $this->idMappingMode = $idMappingMode;
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
     * @return \mbzImport\ImportMapping
     */
    public function setDbFieldName($dbFieldName)
    {
      $this->dbFieldName = $dbFieldName;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdMappingMode()
    {
      return $this->idMappingMode;
    }

    /**
     * @param int $idMappingMode
     * @return \mbzImport\ImportMapping
     */
    public function setIdMappingMode($idMappingMode)
    {
      $this->idMappingMode = $idMappingMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileColumnName()
    {
      return $this->fileColumnName;
    }

    /**
     * @param string $fileColumnName
     * @return \mbzImport\ImportMapping
     */
    public function setFileColumnName($fileColumnName)
    {
      $this->fileColumnName = $fileColumnName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFixedValue()
    {
      return $this->fixedValue;
    }

    /**
     * @param string $fixedValue
     * @return \mbzImport\ImportMapping
     */
    public function setFixedValue($fixedValue)
    {
      $this->fixedValue = $fixedValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \mbzImport\ImportMapping
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

}
