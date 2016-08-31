<?php

namespace mbzOneshot;

class SendToMD5
{

    /**
     * @var int $idCamp
     */
    protected $idCamp = null;

    /**
     * @var string $toMD5
     */
    protected $toMD5 = null;

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
     * @param string $toMD5
     * @param string $messageHTML
     * @param string $messageTXT
     * @param string $fromAlias
     * @param string $subject
     */
    public function __construct($idCamp, $toMD5, $messageHTML, $messageTXT, $fromAlias, $subject)
    {
      $this->idCamp = $idCamp;
      $this->toMD5 = $toMD5;
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
     * @return \mbzOneshot\SendToMD5
     */
    public function setIdCamp($idCamp)
    {
      $this->idCamp = $idCamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getToMD5()
    {
      return $this->toMD5;
    }

    /**
     * @param string $toMD5
     * @return \mbzOneshot\SendToMD5
     */
    public function setToMD5($toMD5)
    {
      $this->toMD5 = $toMD5;
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
     * @return \mbzOneshot\SendToMD5
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
     * @return \mbzOneshot\SendToMD5
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
     * @return \mbzOneshot\SendToMD5
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
     * @return \mbzOneshot\SendToMD5
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}
