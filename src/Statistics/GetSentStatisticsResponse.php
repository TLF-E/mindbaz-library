<?php

namespace mbzStatistics;

class GetSentStatisticsResponse
{

    /**
     * @var GetSentStatisticsResult $GetSentStatisticsResult
     */
    protected $GetSentStatisticsResult = null;

    /**
     * @param GetSentStatisticsResult $GetSentStatisticsResult
     */
    public function __construct($GetSentStatisticsResult)
    {
      $this->GetSentStatisticsResult = $GetSentStatisticsResult;
    }

    /**
     * @return GetSentStatisticsResult
     */
    public function getGetSentStatisticsResult()
    {
      return $this->GetSentStatisticsResult;
    }

    /**
     * @param GetSentStatisticsResult $GetSentStatisticsResult
     * @return \mbzStatistics\GetSentStatisticsResponse
     */
    public function setGetSentStatisticsResult($GetSentStatisticsResult)
    {
      $this->GetSentStatisticsResult = $GetSentStatisticsResult;
      return $this;
    }

}
