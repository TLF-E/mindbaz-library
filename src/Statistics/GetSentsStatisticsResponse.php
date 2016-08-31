<?php

namespace mbzStatistics;

class GetSentsStatisticsResponse
{

    /**
     * @var GetSentsStatisticsResult $GetSentsStatisticsResult
     */
    protected $GetSentsStatisticsResult = null;

    /**
     * @param GetSentsStatisticsResult $GetSentsStatisticsResult
     */
    public function __construct($GetSentsStatisticsResult)
    {
      $this->GetSentsStatisticsResult = $GetSentsStatisticsResult;
    }

    /**
     * @return GetSentsStatisticsResult
     */
    public function getGetSentsStatisticsResult()
    {
      return $this->GetSentsStatisticsResult;
    }

    /**
     * @param GetSentsStatisticsResult $GetSentsStatisticsResult
     * @return \mbzStatistics\GetSentsStatisticsResponse
     */
    public function setGetSentsStatisticsResult($GetSentsStatisticsResult)
    {
      $this->GetSentsStatisticsResult = $GetSentsStatisticsResult;
      return $this;
    }

}
