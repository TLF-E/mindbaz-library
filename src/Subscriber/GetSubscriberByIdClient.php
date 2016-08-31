<?php

namespace mbzSubscriber;

class GetSubscriberByIdClient
{

    /**
     * @var string $idClient
     */
    protected $idClient = null;

    /**
     * @var ArrayOfInt $idFields
     */
    protected $idFields = null;

    /**
     * @param string $idClient
     * @param ArrayOfInt $idFields
     */
    public function __construct($idClient, $idFields)
    {
      $this->idClient = $idClient;
      $this->idFields = $idFields;
    }

    /**
     * @return string
     */
    public function getIdClient()
    {
      return $this->idClient;
    }

    /**
     * @param string $idClient
     * @return \mbzSubscriber\GetSubscriberByIdClient
     */
    public function setIdClient($idClient)
    {
      $this->idClient = $idClient;
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
     * @return \mbzSubscriber\GetSubscriberByIdClient
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

}
