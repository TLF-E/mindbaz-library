<?php

namespace mbzStatistics;

class GetSentsStatistics3Response
{

    /**
     * @var ArrayOfSentStatistics $GetSentsStatistics3Result
     */
    protected $GetSentsStatistics3Result = null;

    /**
     * @param ArrayOfSentStatistics $GetSentsStatistics3Result
     */
    public function __construct($GetSentsStatistics3Result)
    {
      $this->GetSentsStatistics3Result = $GetSentsStatistics3Result;
    }

    /**
     * @return ArrayOfSentStatistics
     */
    public function getGetSentsStatistics3Result()
    {
      return $this->GetSentsStatistics3Result;
    }

    /**
     * @param ArrayOfSentStatistics $GetSentsStatistics3Result
     * @return \mbzStatistics\GetSentsStatistics3Response
     */
    public function setGetSentsStatistics3Result($GetSentsStatistics3Result)
    {
      $this->GetSentsStatistics3Result = $GetSentsStatistics3Result;
      return $this;
    }

}
