<?php

namespace mbzTarget;

class TargetListRecords
{

    /**
     * @var int $idTarget
     */
    protected $idTarget = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    protected $lastUpdateDate = null;

    /**
     * @var ETargetType $targetType
     */
    protected $targetType = null;

    /**
     * @var boolean $isEditable
     */
    protected $isEditable = null;

    /**
     * @var boolean $isTestTarget
     */
    protected $isTestTarget = null;

    /**
     * @var int $pctSelect
     */
    protected $pctSelect = null;

    /**
     * @var int $maxSelect
     */
    protected $maxSelect = null;

    /**
     * @var boolean $isRandomMode
     */
    protected $isRandomMode = null;

    /**
     * @var string $directories
     */
    protected $directories = null;

    /**
     * @param int $idTarget
     * @param \DateTime $lastUpdateDate
     * @param ETargetType $targetType
     * @param boolean $isEditable
     * @param boolean $isTestTarget
     * @param int $pctSelect
     * @param int $maxSelect
     * @param boolean $isRandomMode
     */
    public function __construct($idTarget, \DateTime $lastUpdateDate, $targetType, $isEditable, $isTestTarget, $pctSelect, $maxSelect, $isRandomMode)
    {
      $this->idTarget = $idTarget;
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      $this->targetType = $targetType;
      $this->isEditable = $isEditable;
      $this->isTestTarget = $isTestTarget;
      $this->pctSelect = $pctSelect;
      $this->maxSelect = $maxSelect;
      $this->isRandomMode = $isRandomMode;
    }

    /**
     * @return int
     */
    public function getIdTarget()
    {
      return $this->idTarget;
    }

    /**
     * @param int $idTarget
     * @return \mbzTarget\TargetListRecords
     */
    public function setIdTarget($idTarget)
    {
      $this->idTarget = $idTarget;
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
     * @return \mbzTarget\TargetListRecords
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
     * @return \mbzTarget\TargetListRecords
     */
    public function setAuthor($author)
    {
      $this->author = $author;
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
     * @return \mbzTarget\TargetListRecords
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ETargetType
     */
    public function getTargetType()
    {
      return $this->targetType;
    }

    /**
     * @param ETargetType $targetType
     * @return \mbzTarget\TargetListRecords
     */
    public function setTargetType($targetType)
    {
      $this->targetType = $targetType;
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
     * @return \mbzTarget\TargetListRecords
     */
    public function setIsEditable($isEditable)
    {
      $this->isEditable = $isEditable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTestTarget()
    {
      return $this->isTestTarget;
    }

    /**
     * @param boolean $isTestTarget
     * @return \mbzTarget\TargetListRecords
     */
    public function setIsTestTarget($isTestTarget)
    {
      $this->isTestTarget = $isTestTarget;
      return $this;
    }

    /**
     * @return int
     */
    public function getPctSelect()
    {
      return $this->pctSelect;
    }

    /**
     * @param int $pctSelect
     * @return \mbzTarget\TargetListRecords
     */
    public function setPctSelect($pctSelect)
    {
      $this->pctSelect = $pctSelect;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxSelect()
    {
      return $this->maxSelect;
    }

    /**
     * @param int $maxSelect
     * @return \mbzTarget\TargetListRecords
     */
    public function setMaxSelect($maxSelect)
    {
      $this->maxSelect = $maxSelect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRandomMode()
    {
      return $this->isRandomMode;
    }

    /**
     * @param boolean $isRandomMode
     * @return \mbzTarget\TargetListRecords
     */
    public function setIsRandomMode($isRandomMode)
    {
      $this->isRandomMode = $isRandomMode;
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
     * @return \mbzTarget\TargetListRecords
     */
    public function setDirectories($directories)
    {
      $this->directories = $directories;
      return $this;
    }

}
