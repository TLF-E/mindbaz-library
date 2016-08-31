<?php

namespace mbzCampaign;

class ArrayOfTrackedUrl
{

    /**
     * @var TrackedUrl[] $TrackedUrl
     */
    protected $TrackedUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TrackedUrl[]
     */
    public function getTrackedUrl()
    {
      return $this->TrackedUrl;
    }

    /**
     * @param TrackedUrl[] $TrackedUrl
     * @return \mbzCampaign\ArrayOfTrackedUrl
     */
    public function setTrackedUrl(array $TrackedUrl = null)
    {
      $this->TrackedUrl = $TrackedUrl;
      return $this;
    }

}
