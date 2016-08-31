<?php

namespace mbzConfig;

class ConfigListRecords
{

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

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
     * @param int $idConfig
     * @param \DateTime $lastUpdateDate
     */
    public function __construct($idConfig, \DateTime $lastUpdateDate)
    {
      $this->idConfig = $idConfig;
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getIdConfig()
    {
      return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return \mbzConfig\ConfigListRecords
     */
    public function setIdConfig($idConfig)
    {
      $this->idConfig = $idConfig;
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
     * @return \mbzConfig\ConfigListRecords
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
     * @return \mbzConfig\ConfigListRecords
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
     * @return \mbzConfig\ConfigListRecords
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

}
