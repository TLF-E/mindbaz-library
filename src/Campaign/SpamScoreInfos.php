<?php

namespace mbzCampaign;

class SpamScoreInfos
{

    /**
     * @var string $score
     */
    protected $score = null;

    /**
     * @var string $details
     */
    protected $details = null;

    /**
     * @var string $vrspamScore
     */
    protected $vrspamScore = null;

    /**
     * @var string $vrspamstate
     */
    protected $vrspamstate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getScore()
    {
      return $this->score;
    }

    /**
     * @param string $score
     * @return \mbzCampaign\SpamScoreInfos
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param string $details
     * @return \mbzCampaign\SpamScoreInfos
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

    /**
     * @return string
     */
    public function getVrspamScore()
    {
      return $this->vrspamScore;
    }

    /**
     * @param string $vrspamScore
     * @return \mbzCampaign\SpamScoreInfos
     */
    public function setVrspamScore($vrspamScore)
    {
      $this->vrspamScore = $vrspamScore;
      return $this;
    }

    /**
     * @return string
     */
    public function getVrspamstate()
    {
      return $this->vrspamstate;
    }

    /**
     * @param string $vrspamstate
     * @return \mbzCampaign\SpamScoreInfos
     */
    public function setVrspamstate($vrspamstate)
    {
      $this->vrspamstate = $vrspamstate;
      return $this;
    }

}
