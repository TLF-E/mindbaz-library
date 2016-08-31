<?php

namespace mbzStatistics;

class ArrayOfSentStatistics
{

    /**
     * @var SentStatistics[] $SentStatistics
     */
    protected $SentStatistics = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SentStatistics[]
     */
    public function getSentStatistics()
    {
      return $this->SentStatistics;
    }

    /**
     * @param SentStatistics[] $SentStatistics
     * @return \mbzStatistics\ArrayOfSentStatistics
     */
    public function setSentStatistics(array $SentStatistics = null)
    {
      $this->SentStatistics = $SentStatistics;
      return $this;
    }

}
