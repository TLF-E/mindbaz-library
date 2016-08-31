<?php

namespace mbzCampaign;

class Campaign
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var CampaignParameters $parameters
     */
    protected $parameters = null;

    /**
     * @var string $htmlMsg
     */
    protected $htmlMsg = null;

    /**
     * @var string $txtMsg
     */
    protected $txtMsg = null;

    /**
     * @var \DateTime $creationDate
     */
    protected $creationDate = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    protected $lastUpdateDate = null;

    /**
     * @var SchedulingInfos $schedulingInfos
     */
    protected $schedulingInfos = null;

    /**
     * @param int $idCampaign
     * @param \DateTime $creationDate
     * @param \DateTime $lastUpdateDate
     */
    public function __construct($idCampaign, \DateTime $creationDate, \DateTime $lastUpdateDate)
    {
      $this->idCampaign = $idCampaign;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
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
     * @return \mbzCampaign\Campaign
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return CampaignParameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param CampaignParameters $parameters
     * @return \mbzCampaign\Campaign
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
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
     * @return \mbzCampaign\Campaign
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
     * @return \mbzCampaign\Campaign
     */
    public function setTxtMsg($txtMsg)
    {
      $this->txtMsg = $txtMsg;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->creationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationDate
     * @return \mbzCampaign\Campaign
     */
    public function setCreationDate(\DateTime $creationDate)
    {
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
      if ($this->lastUpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastUpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastUpdateDate
     * @return \mbzCampaign\Campaign
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return SchedulingInfos
     */
    public function getSchedulingInfos()
    {
      return $this->schedulingInfos;
    }

    /**
     * @param SchedulingInfos $schedulingInfos
     * @return \mbzCampaign\Campaign
     */
    public function setSchedulingInfos($schedulingInfos)
    {
      $this->schedulingInfos = $schedulingInfos;
      return $this;
    }

}
