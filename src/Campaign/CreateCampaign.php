<?php

namespace mbzCampaign;

class CreateCampaign
{

    /**
     * @var CampaignParameters $campParameters
     */
    protected $campParameters = null;

    /**
     * @var string $htmlMsg
     */
    protected $htmlMsg = null;

    /**
     * @var string $txtMsg
     */
    protected $txtMsg = null;

    /**
     * @param CampaignParameters $campParameters
     * @param string $htmlMsg
     * @param string $txtMsg
     */
    public function __construct($campParameters, $htmlMsg, $txtMsg)
    {
      $this->campParameters = $campParameters;
      $this->htmlMsg = $htmlMsg;
      $this->txtMsg = $txtMsg;
    }

    /**
     * @return CampaignParameters
     */
    public function getCampParameters()
    {
      return $this->campParameters;
    }

    /**
     * @param CampaignParameters $campParameters
     * @return \mbzCampaign\CreateCampaign
     */
    public function setCampParameters($campParameters)
    {
      $this->campParameters = $campParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlMsg()
    {
      return $this->htmlMsg;
    }

    /**
     * @param string $htmlMsg
     * @return \mbzCampaign\CreateCampaign
     */
    public function setHtmlMsg($htmlMsg)
    {
      $this->htmlMsg = $htmlMsg;
      return $this;
    }

    /**
     * @return string
     */
    public function getTxtMsg()
    {
      return $this->txtMsg;
    }

    /**
     * @param string $txtMsg
     * @return \mbzCampaign\CreateCampaign
     */
    public function setTxtMsg($txtMsg)
    {
      $this->txtMsg = $txtMsg;
      return $this;
    }

}
