<?php

namespace mbzSubscriber;

class GetSubscribersByEmail
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
     * @param ArrayOfString $emails
     * @param ArrayOfInt $idFields
     */
    public function __construct($emails, $idFields)
    {
      $this->emails = $emails;
      $this->idFields = $idFields;
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
     * @return \mbzSubscriber\GetSubscribersByEmail
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
     * @return \mbzSubscriber\GetSubscribersByEmail
     */
    public function setIdFields($idFields)
    {
      $this->idFields = $idFields;
      return $this;
    }

}
