<?php

namespace mbzPicture;

class Upload
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $file
     */
    protected $file = null;

    /**
     * @var int $idDirectory
     */
    protected $idDirectory = null;

    /**
     * @param string $name
     * @param string $fileName
     * @param string $file
     * @param int $idDirectory
     */
    public function __construct($name, $fileName, $file, $idDirectory)
    {
      $this->name = $name;
      $this->fileName = $fileName;
      $this->file = $file;
      $this->idDirectory = $idDirectory;
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
     * @return \mbzPicture\Upload
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \mbzPicture\Upload
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param string $file
     * @return \mbzPicture\Upload
     */
    public function setFile($file)
    {
      $this->file = $file;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDirectory()
    {
      return $this->idDirectory;
    }

    /**
     * @param int $idDirectory
     * @return \mbzPicture\Upload
     */
    public function setIdDirectory($idDirectory)
    {
      $this->idDirectory = $idDirectory;
      return $this;
    }

}
