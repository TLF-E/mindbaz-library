<?php

namespace mbzStatistics;

class GetSentStatistics
{

    /**
     * @var int $idSent
     */
    protected $idSent = null;

    /**
     * @var int $mode
     */
    protected $mode = null;

    /**
     * @param int $idSent
     * @param int $mode
     */
    public function __construct($idSent, $mode)
    {
      $this->idSent = $idSent;
      $this->mode = $mode;
    }

    /**
     * @return int
     */
    public function getIdSent()
    {
      return $this->idSent;
    }

    /**
     * @param int $idSent
     * @return \mbzStatistics\GetSentStatistics
     */
    public function setIdSent($idSent)
    {
      $this->idSent = $idSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param int $mode
     * @return \mbzStatistics\GetSentStatistics
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

}
