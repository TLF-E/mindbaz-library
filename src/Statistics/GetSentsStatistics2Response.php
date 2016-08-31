<?php

namespace mbzStatistics;

class GetSentsStatistics2Response
{

    /**
     * @var ArrayOfSentStatistics $GetSentsStatistics2Result
     */
    protected $GetSentsStatistics2Result = null;

    /**
     * @param ArrayOfSentStatistics $GetSentsStatistics2Result
     */
    public function __construct($GetSentsStatistics2Result)
    {
      $this->GetSentsStatistics2Result = $GetSentsStatistics2Result;
    }

    /**
     * @return ArrayOfSentStatistics
     */
    public function getGetSentsStatistics2Result()
    {
      return $this->GetSentsStatistics2Result;
    }

    /**
     * @param ArrayOfSentStatistics $GetSentsStatistics2Result
     * @return \mbzStatistics\GetSentsStatistics2Response
     */
    public function setGetSentsStatistics2Result($GetSentsStatistics2Result)
    {
      $this->GetSentsStatistics2Result = $GetSentsStatistics2Result;
      return $this;
    }

}
