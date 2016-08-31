<?php

namespace mbzSubscriber;

class GetSubscribersByEncodedEmail
{

    /**
     * @var ArrayOfString $emails
     */
    protected $emails = null;

    /**
     * @var ArrayOfInt $idFields
     */
    protected $idFields = null;

    /**
     * @var EEncodingType $emailEncoding
     */
    protected $emailEncoding = null;

    /**
     * @param ArrayOfString $emails
     * @param ArrayOfInt $idFields
     * @param EEncodingType $emailEncoding
     */
    public function __construct($emails, $idFields, $emailEncoding)
    {
      $this->emails = $emails;
      $this->idFields = $idFields;
      $this->emailEncoding = $emailEncoding;
    }

    /**
     * @return ArrayOfString
     */
    public function getEmails()
    {
      return $this->emails;
    }

    /**
     * @param ArrayOfString $emails
     * @return \mbzSubscriber\GetSubscribersByEncodedEmail
     */
    public function setEmails($emails)
    {
      $this->emails = $emails;
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
     * @return \mbzSubscriber\GetSubscribersByEncodedEmail
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
     * @return \mbzSubscriber\GetSubscribersByEncodedEmail
     */
    public function setEmailEncoding($emailEncoding)
    {
      $this->emailEncoding = $emailEncoding;
      return $this;
    }

}
