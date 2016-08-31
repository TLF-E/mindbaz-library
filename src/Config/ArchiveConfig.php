<?php

namespace mbzConfig;

class ArchiveConfig
{

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

    /**
     * @var boolean $archive
     */
    protected $archive = null;

    /**
     * @param int $idConfig
     * @param boolean $archive
     */
    public function __construct($idConfig, $archive)
    {
      $this->idConfig = $idConfig;
      $this->archive = $archive;
    }

    /**
     * @return int
     */
    public function getIdConfig()
    {
      return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return \mbzConfig\ArchiveConfig
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArchive()
    {
      return $this->archive;
    }

    /**
     * @param boolean $archive
     * @return \mbzConfig\ArchiveConfig
     */
    public function setArchive($archive)
    {
      $this->archive = $archive;
      return $this;
    }

}
