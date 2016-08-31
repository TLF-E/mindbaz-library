<?php

namespace mbzCampaign;

class CampaignListRecords
{

    /**
     * @var int $idCampaign
     */
    protected $idCampaign = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var \DateTime $creationDate
     */
    protected $creationDate = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    protected $lastUpdateDate = null;

    /**
     * @var ECampMode $campMode
     */
    protected $campMode = null;

    /**
     * @var ECampType $campType
     */
    protected $campType = null;

    /**
     * @var int $nbSubscribers
     */
    protected $nbSubscribers = null;

    /**
     * @var SchedulingInfos $schedulingInfos
     */
    protected $schedulingInfos = null;

    /**
     * @var int $nbSegmentsSent
     */
    protected $nbSegmentsSent = null;

    /**
     * @var int $nbCampaignsSent
     */
    protected $nbCampaignsSent = null;

    /**
     * @var string $directories
     */
    protected $directories = null;

    /**
     * @var boolean $isEditable
     */
    protected $isEditable = null;

    /**
     * @param int $idCampaign
     * @param \DateTime $creationDate
     * @param \DateTime $lastUpdateDate
     * @param ECampMode $campMode
     * @param ECampType $campType
     * @param int $nbSubscribers
     * @param int $nbSegmentsSent
     * @param int $nbCampaignsSent
     * @param boolean $isEditable
     */
    public function __construct($idCampaign, \DateTime $creationDate, \DateTime $lastUpdateDate, $campMode, $campType, $nbSubscribers, $nbSegmentsSent, $nbCampaignsSent, $isEditable)
    {
      $this->idCampaign = $idCampaign;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      $this->campMode = $campMode;
      $this->campType = $campType;
      $this->nbSubscribers = $nbSubscribers;
      $this->nbSegmentsSent = $nbSegmentsSent;
      $this->nbCampaignsSent = $nbCampaignsSent;
      $this->isEditable = $isEditable;
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
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setIdCampaign($idCampaign)
    {
      $this->idCampaign = $idCampaign;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setAuthor($author)
    {
      $this->author = $author;
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
     * @return \mbzCampaign\CampaignListRecords
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
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ECampMode
     */
    public function getCampMode()
    {
      return $this->campMode;
    }

    /**
     * @param ECampMode $campMode
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setCampMode($campMode)
    {
      $this->campMode = $campMode;
      return $this;
    }

    /**
     * @return ECampType
     */
    public function getCampType()
    {
      return $this->campType;
    }

    /**
     * @param ECampType $campType
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setCampType($campType)
    {
      $this->campType = $campType;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbSubscribers()
    {
      return $this->nbSubscribers;
    }

    /**
     * @param int $nbSubscribers
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setNbSubscribers($nbSubscribers)
    {
      $this->nbSubscribers = $nbSubscribers;
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
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setSchedulingInfos($schedulingInfos)
    {
      $this->schedulingInfos = $schedulingInfos;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbSegmentsSent()
    {
      return $this->nbSegmentsSent;
    }

    /**
     * @param int $nbSegmentsSent
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setNbSegmentsSent($nbSegmentsSent)
    {
      $this->nbSegmentsSent = $nbSegmentsSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbCampaignsSent()
    {
      return $this->nbCampaignsSent;
    }

    /**
     * @param int $nbCampaignsSent
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setNbCampaignsSent($nbCampaignsSent)
    {
      $this->nbCampaignsSent = $nbCampaignsSent;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectories()
    {
      return $this->directories;
    }

    /**
     * @param string $directories
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setDirectories($directories)
    {
      $this->directories = $directories;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEditable()
    {
      return $this->isEditable;
    }

    /**
     * @param boolean $isEditable
     * @return \mbzCampaign\CampaignListRecords
     */
    public function setIsEditable($isEditable)
    {
      $this->isEditable = $isEditable;
      return $this;
    }

}
