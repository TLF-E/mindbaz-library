<?php

namespace mbzImport;

class StopImport
{

    /**
     * @var int $idImport
     */
    protected $idImport = null;

    /**
     * @param int $idImport
     */
    public function __construct($idImport)
    {
      $this->idImport = $idImport;
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
     * @return \mbzImport\StopImport
     */
    public function setIdImport($idImport)
    {
      $this->idImport = $idImport;
      return $this;
    }

}
