<?php

namespace mbzSubscriber;

class GetSubscriberByEncodedEmail
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
     * @var EEncodingType $emailEncoding
     */
    protected $emailEncoding = null;

    /**
     * @param string $email
     * @param ArrayOfInt $idFields
     * @param EEncodingType $emailEncoding
     */
    public function __construct($email, $idFields, $emailEncoding)
    {
      $this->email = $email;
      $this->idFields = $idFields;
      $this->emailEncoding = $emailEncoding;
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
     * @return \mbzSubscriber\GetSubscriberByEncodedEmail
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
     * @return \mbzSubscriber\GetSubscriberByEncodedEmail
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

    /**
     * @return EEncodingType
     */
    public function getEmailEncoding()
    {
      return $this->emailEncoding;
    }

    /**
     * @param EEncodingType $emailEncoding
     * @return \mbzSubscriber\GetSubscriberByEncodedEmail
     */
    public function setEmailEncoding($emailEncoding)
    {
      $this->emailEncoding = $emailEncoding;
      return $this;
    }

}
