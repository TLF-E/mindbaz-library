<?php

namespace mbzSubscriber;

class GetSubscriber
{

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

    /**
     * @var ArrayOfInt $idFields
     */
    protected $idFields = null;

    /**
     * @param int $idSubscriber
     * @param ArrayOfInt $idFields
     */
    public function __construct($idSubscriber, $idFields)
    {
      $this->idSubscriber = $idSubscriber;
      $this->idFields = $idFields;
    }

    /**
     * @return int
     */
    public function getIdSubscriber()
    {
      return $this->idSubscriber;
    }

    /**
     * @param int $idSubscriber
     * @return \mbzSubscriber\GetSubscriber
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getIdFields()
    {
      return $this->idFields;
    }

    /**
     * @param ArrayOfInt $idFields
     * @return \mbzSubscriber\GetSubscriber
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

}
