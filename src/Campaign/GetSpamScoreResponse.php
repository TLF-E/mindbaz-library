<?php

namespace mbzCampaign;

class GetSpamScoreResponse
{

    /**
     * @var SpamScoreInfos $GetSpamScoreResult
     */
    protected $GetSpamScoreResult = null;

    /**
     * @param SpamScoreInfos $GetSpamScoreResult
     */
    public function __construct($GetSpamScoreResult)
    {
      $this->GetSpamScoreResult = $GetSpamScoreResult;
    }

    /**
     * @return SpamScoreInfos
     */
    public function getGetSpamScoreResult()
    {
      return $this->GetSpamScoreResult;
    }

    /**
     * @param SpamScoreInfos $GetSpamScoreResult
     * @return \mbzCampaign\GetSpamScoreResponse
     */
    public function setGetSpamScoreResult($GetSpamScoreResult)
    {
      $this->GetSpamScoreResult = $GetSpamScoreResult;
      return $this;
    }

}
