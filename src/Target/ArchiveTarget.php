<?php

namespace mbzTarget;

class ArchiveTarget
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var boolean $archive
     */
    protected $archive = null;

    /**
     * @param int $idTarget
     * @param boolean $archive
     */
    public function __construct($idTarget, $archive)
    {
      $this->idTarget = $idTarget;
      $this->archive = $archive;
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
     * @return \mbzTarget\ArchiveTarget
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
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
     * @return \mbzTarget\ArchiveTarget
     */
    public function setArchive($archive)
    {
      $this->archive = $archive;
      return $this;
    }

}
