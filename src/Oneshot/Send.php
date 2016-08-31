<?php

namespace mbzOneshot;

class Send
{

    /**
     * @var int $idCamp
     */
    protected $idCamp = null;

    /**
     * @var int $idSubscriber
     */
    protected $idSubscriber = null;

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
     * @param int $idSubscriber
     * @param string $messageHTML
     * @param string $messageTXT
     * @param string $fromAlias
     * @param string $subject
     */
    public function __construct($idCamp, $idSubscriber, $messageHTML, $messageTXT, $fromAlias, $subject)
    {
      $this->idCamp = $idCamp;
      $this->idSubscriber = $idSubscriber;
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
     * @return \mbzOneshot\Send
     */
    public function setIdCamp($idCamp)
    {
      $this->idCamp = $idCamp;
      return $this;
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
     * @return \mbzOneshot\Send
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
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
     * @return \mbzOneshot\Send
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
     * @return \mbzOneshot\Send
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
     * @return \mbzOneshot\Send
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
     * @return \mbzOneshot\Send
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}
