<?php

namespace mbzImport;

class ImportParameters
{

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var int $startLine
     */
    protected $startLine = null;

    /**
     * @var boolean $columnNamesFirstLine
     */
    protected $columnNamesFirstLine = null;

    /**
     * @var string $textQualifier
     */
    protected $textQualifier = null;

    /**
     * @var string $columnDelimiter
     */
    protected $columnDelimiter = null;

    /**
     * @var string $rowDelimiter
     */
    protected $rowDelimiter = null;

    /**
     * @var int $codepage
     */
    protected $codepage = null;

    /**
     * @var string $sheetName
     */
    protected $sheetName = null;

    /**
     * @var string $keyDbFieldName
     */
    protected $keyDbFieldName = null;

    /**
     * @var boolean $keepFld7
     */
    protected $keepFld7 = null;

    /**
     * @var boolean $insertEnabled
     */
    protected $insertEnabled = null;

    /**
     * @var boolean $safeMode
     */
    protected $safeMode = null;

    /**
     * @var string $emailNotification
     */
    protected $emailNotification = null;

    /**
     * @var boolean $deleteFile
     */
    protected $deleteFile = null;

    /**
     * @var ArrayOfImportMapping $columnMapping
     */
    protected $columnMapping = null;

    /**
     * @param int $startLine
     * @param boolean $columnNamesFirstLine
     * @param int $codepage
     * @param boolean $keepFld7
     * @param boolean $insertEnabled
     * @param boolean $safeMode
     * @param boolean $deleteFile
     */
    public function __construct($startLine, $columnNamesFirstLine, $codepage, $keepFld7, $insertEnabled, $safeMode, $deleteFile)
    {
      $this->startLine = $startLine;
      $this->columnNamesFirstLine = $columnNamesFirstLine;
      $this->codepage = $codepage;
      $this->keepFld7 = $keepFld7;
      $this->insertEnabled = $insertEnabled;
      $this->safeMode = $safeMode;
      $this->deleteFile = $deleteFile;
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
     * @return \mbzImport\ImportParameters
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartLine()
    {
      return $this->startLine;
    }

    /**
     * @param int $startLine
     * @return \mbzImport\ImportParameters
     */
    public function setStartLine($startLine)
    {
      $this->startLine = $startLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getColumnNamesFirstLine()
    {
      return $this->columnNamesFirstLine;
    }

    /**
     * @param boolean $columnNamesFirstLine
     * @return \mbzImport\ImportParameters
     */
    public function setColumnNamesFirstLine($columnNamesFirstLine)
    {
      $this->columnNamesFirstLine = $columnNamesFirstLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextQualifier()
    {
      return $this->textQualifier;
    }

    /**
     * @param string $textQualifier
     * @return \mbzImport\ImportParameters
     */
    public function setTextQualifier($textQualifier)
    {
      $this->textQualifier = $textQualifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getColumnDelimiter()
    {
      return $this->columnDelimiter;
    }

    /**
     * @param string $columnDelimiter
     * @return \mbzImport\ImportParameters
     */
    public function setColumnDelimiter($columnDelimiter)
    {
      $this->columnDelimiter = $columnDelimiter;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowDelimiter()
    {
      return $this->rowDelimiter;
    }

    /**
     * @param string $rowDelimiter
     * @return \mbzImport\ImportParameters
     */
    public function setRowDelimiter($rowDelimiter)
    {
      $this->rowDelimiter = $rowDelimiter;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodepage()
    {
      return $this->codepage;
    }

    /**
     * @param int $codepage
     * @return \mbzImport\ImportParameters
     */
    public function setCodepage($codepage)
    {
      $this->codepage = $codepage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSheetName()
    {
      return $this->sheetName;
    }

    /**
     * @param string $sheetName
     * @return \mbzImport\ImportParameters
     */
    public function setSheetName($sheetName)
    {
      $this->sheetName = $sheetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyDbFieldName()
    {
      return $this->keyDbFieldName;
    }

    /**
     * @param string $keyDbFieldName
     * @return \mbzImport\ImportParameters
     */
    public function setKeyDbFieldName($keyDbFieldName)
    {
      $this->keyDbFieldName = $keyDbFieldName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepFld7()
    {
      return $this->keepFld7;
    }

    /**
     * @param boolean $keepFld7
     * @return \mbzImport\ImportParameters
     */
    public function setKeepFld7($keepFld7)
    {
      $this->keepFld7 = $keepFld7;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsertEnabled()
    {
      return $this->insertEnabled;
    }

    /**
     * @param boolean $insertEnabled
     * @return \mbzImport\ImportParameters
     */
    public function setInsertEnabled($insertEnabled)
    {
      $this->insertEnabled = $insertEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSafeMode()
    {
      return $this->safeMode;
    }

    /**
     * @param boolean $safeMode
     * @return \mbzImport\ImportParameters
     */
    public function setSafeMode($safeMode)
    {
      $this->safeMode = $safeMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailNotification()
    {
      return $this->emailNotification;
    }

    /**
     * @param string $emailNotification
     * @return \mbzImport\ImportParameters
     */
    public function setEmailNotification($emailNotification)
    {
      $this->emailNotification = $emailNotification;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteFile()
    {
      return $this->deleteFile;
    }

    /**
     * @param boolean $deleteFile
     * @return \mbzImport\ImportParameters
     */
    public function setDeleteFile($deleteFile)
    {
      $this->deleteFile = $deleteFile;
      return $this;
    }

    /**
     * @return ArrayOfImportMapping
     */
    public function getColumnMapping()
    {
      return $this->columnMapping;
    }

    /**
     * @param ArrayOfImportMapping $columnMapping
     * @return \mbzImport\ImportParameters
     */
    public function setColumnMapping($columnMapping)
    {
      $this->columnMapping = $columnMapping;
      return $this;
    }

}
