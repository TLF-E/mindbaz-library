<?php

namespace mbzOneshot;

class SendFromCampaign
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
     * @param int $idCamp
     * @param int $idSubscriber
     */
    public function __construct($idCamp, $idSubscriber)
    {
      $this->idCamp = $idCamp;
      $this->idSubscriber = $idSubscriber;
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
     * @return \mbzOneshot\SendFromCampaign
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
     * @return \mbzOneshot\SendFromCampaign
     */
    public function setIdSubscriber($idSubscriber)
    {
      $this->idSubscriber = $idSubscriber;
      return $this;
    }

}
