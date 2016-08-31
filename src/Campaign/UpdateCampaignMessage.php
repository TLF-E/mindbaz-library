<?php

namespace mbzCampaign;

class UpdateCampaignMessage
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var string $htmlMsg
     */
    protected $htmlMsg = null;

    /**
     * @var string $txtMsg
     */
    protected $txtMsg = null;

    /**
     * @param int $idCampaign
     * @param string $htmlMsg
     * @param string $txtMsg
     */
    public function __construct($idCampaign, $htmlMsg, $txtMsg)
    {
      $this->idCampaign = $idCampaign;
      $this->htmlMsg = $htmlMsg;
      $this->txtMsg = $txtMsg;
    }

    /**
     * @return int
     */
    public function getIdCampaign()
    {
      return $this->idCampaign;
    }

    /**
     * @param int $idCampaign
     * @return \mbzCampaign\UpdateCampaignMessage
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
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
     * @return \mbzCampaign\UpdateCampaignMessage
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
     * @return \mbzCampaign\UpdateCampaignMessage
     */
    public function setTxtMsg($txtMsg)
    {
      $this->txtMsg = $txtMsg;
      return $this;
    }

}
