<?php

namespace mbzPicture;

class Picture
{

    /**
     * @var int $idPicture
     */
    protected $idPicture = null;

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
     * @var int $fileSize
     */
    protected $fileSize = null;

    /**
     * @var string $pictureDim
     */
    protected $pictureDim = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $filePath
     */
    protected $filePath = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param int $idPicture
     * @param \DateTime $creationDate
     * @param \DateTime $lastUpdateDate
     * @param int $fileSize
     */
    public function __construct($idPicture, \DateTime $creationDate, \DateTime $lastUpdateDate, $fileSize)
    {
      $this->idPicture = $idPicture;
      $this->creationDate = $creationDate->format(\DateTime::ATOM);
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getIdPicture()
    {
      return $this->idPicture;
    }

    /**
     * @param int $idPicture
     * @return \mbzPicture\Picture
     */
    public function setIdPicture($idPicture)
    {
      $this->idPicture = $idPicture;
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
     * @return \mbzPicture\Picture
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
     * @return \mbzPicture\Picture
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
     * @return \mbzPicture\Picture
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
     * @return \mbzPicture\Picture
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
      $this->lastUpdateDate = $lastUpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return \mbzPicture\Picture
     */
    public function setFileSize($fileSize)
    {
      $this->fileSize = $fileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPictureDim()
    {
      return $this->pictureDim;
    }

    /**
     * @param string $pictureDim
     * @return \mbzPicture\Picture
     */
    public function setPictureDim($pictureDim)
    {
      $this->pictureDim = $pictureDim;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \mbzPicture\Picture
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
      return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return \mbzPicture\Picture
     */
    public function setFilePath($filePath)
    {
      $this->filePath = $filePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \mbzPicture\Picture
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
