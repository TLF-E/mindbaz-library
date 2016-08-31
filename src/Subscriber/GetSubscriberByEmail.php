<?php

namespace mbzSubscriber;

class GetSubscriberByEmail
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var ArrayOfInt $idFields
     */
    protected $idFields = null;

    /**
     * @param string $email
     * @param ArrayOfInt $idFields
     */
    public function __construct($email, $idFields)
    {
      $this->email = $email;
      $this->idFields = $idFields;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \mbzSubscriber\GetSubscriberByEmail
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \mbzSubscriber\GetSubscriberByEmail
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

}
