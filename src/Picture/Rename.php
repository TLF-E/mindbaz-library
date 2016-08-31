<?php

namespace mbzPicture;

class Rename
{

    /**
     * @var int $idPicture
     */
    protected $idPicture = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param int $idPicture
     * @param string $newName
     */
    public function __construct($idPicture, $newName)
    {
      $this->idPicture = $idPicture;
      $this->newName = $newName;
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
     * @return \mbzPicture\Rename
     */
    public function setIdPicture($idPicture)
    {
      $this->idPicture = $idPicture;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \mbzPicture\Rename
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
