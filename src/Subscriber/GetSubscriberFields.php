<?php

namespace mbzSubscriber;

class GetSubscriberFields
{

    /**
     * @var ArrayOfInt $idFields
     */
    protected $idFields = null;

    /**
     * @param ArrayOfInt $idFields
     */
    public function __construct($idFields)
    {
      $this->idFields = $idFields;
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
     * @return \mbzSubscriber\GetSubscriberFields
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

}
