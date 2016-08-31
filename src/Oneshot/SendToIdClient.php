<?php

namespace mbzOneshot;

class SendToIdClient
{

    /**
     * @var int $idCamp
     */
    protected $idCamp = null;

    /**
     * @var string $idClient
     */
    protected $idClient = null;

    /**
     * @var string $messageHTML
     */
    protected $messageHTML = null;

    /**
     * @var string $messageTXT
     */
    protected $messageTXT = null;

    /**
     * @var string $fromAlias
     */
    protected $fromAlias = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @param int $idCamp
     * @param string $idClient
     * @param string $messageHTML
     * @param string $messageTXT
     * @param string $fromAlias
     * @param string $subject
     */
    public function __construct($idCamp, $idClient, $messageHTML, $messageTXT, $fromAlias, $subject)
    {
      $this->idCamp = $idCamp;
      $this->idClient = $idClient;
      $this->messageHTML = $messageHTML;
      $this->messageTXT = $messageTXT;
      $this->fromAlias = $fromAlias;
      $this->subject = $subject;
    }

    /**
     * @return int
     */
    public function getIdCamp()
    {
      return $this->idCamp;
    }

    /**
     * @param int $idCamp
     * @return \mbzOneshot\SendToIdClient
     */
    public function setIdCamp($idCamp)
    {
      $this->idCamp = $idCamp;
      return $this;
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
     * @return \mbzOneshot\SendToIdClient
     */
    public function setIdClient($idClient)
    {
      $this->idClient = $idClient;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageHTML()
    {
      return $this->messageHTML;
    }

    /**
     * @param string $messageHTML
     * @return \mbzOneshot\SendToIdClient
     */
    public function setMessageHTML($messageHTML)
    {
      $this->messageHTML = $messageHTML;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageTXT()
    {
      return $this->messageTXT;
    }

    /**
     * @param string $messageTXT
     * @return \mbzOneshot\SendToIdClient
     */
    public function setMessageTXT($messageTXT)
    {
      $this->messageTXT = $messageTXT;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromAlias()
    {
      return $this->fromAlias;
    }

    /**
     * @param string $fromAlias
     * @return \mbzOneshot\SendToIdClient
     */
    public function setFromAlias($fromAlias)
    {
      $this->fromAlias = $fromAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \mbzOneshot\SendToIdClient
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}
