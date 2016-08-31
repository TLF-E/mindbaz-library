<?php

namespace mbzStatistics;

class GetSentStatistics2Response
{

    /**
     * @var SentStatistics $GetSentStatistics2Result
     */
    protected $GetSentStatistics2Result = null;

    /**
     * @param SentStatistics $GetSentStatistics2Result
     */
    public function __construct($GetSentStatistics2Result)
    {
      $this->GetSentStatistics2Result = $GetSentStatistics2Result;
    }

    /**
     * @return SentStatistics
     */
    public function getGetSentStatistics2Result()
    {
      return $this->GetSentStatistics2Result;
    }

    /**
     * @param SentStatistics $GetSentStatistics2Result
     * @return \mbzStatistics\GetSentStatistics2Response
     */
    public function setGetSentStatistics2Result($GetSentStatistics2Result)
    {
      $this->GetSentStatistics2Result = $GetSentStatistics2Result;
      return $this;
    }

}
