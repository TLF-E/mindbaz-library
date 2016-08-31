<?php

namespace mbzStatistics;

class SentStatistics
{

    /**
     * @var int $id_sent
     */
    protected $id_sent = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $sendingName
     */
    protected $sendingName = null;

    /**
     * @var string $mailObject
     */
    protected $mailObject = null;

    /**
     * @var int $nbAddressSent
     */
    protected $nbAddressSent = null;

    /**
     * @var int $nbHardBounces
     */
    protected $nbHardBounces = null;

    /**
     * @var int $nbSoftBounces
     */
    protected $nbSoftBounces = null;

    /**
     * @var int $nbResponseBounces
     */
    protected $nbResponseBounces = null;

    /**
     * @var int $nbNetworkBounces
     */
    protected $nbNetworkBounces = null;

    /**
     * @var int $nbSpamBounces
     */
    protected $nbSpamBounces = null;

    /**
     * @var int $nbSpamComplaints
     */
    protected $nbSpamComplaints = null;

    /**
     * @var int $nbOpenings
     */
    protected $nbOpenings = null;

    /**
     * @var int $nbOpeners
     */
    protected $nbOpeners = null;

    /**
     * @var int $nbClicks
     */
    protected $nbClicks = null;

    /**
     * @var int $nbClickers
     */
    protected $nbClickers = null;

    /**
     * @var int $nbClicks_unsub
     */
    protected $nbClicks_unsub = null;

    /**
     * @var int $nbClicks_mirror
     */
    protected $nbClicks_mirror = null;

    /**
     * @var int $nbClicks_edito
     */
    protected $nbClicks_edito = null;

    /**
     * @var int $nbClicks_pub
     */
    protected $nbClicks_pub = null;

    /**
     * @var int $nbClicks_viral
     */
    protected $nbClicks_viral = null;

    /**
     * @var int $nbClickers_unsub
     */
    protected $nbClickers_unsub = null;

    /**
     * @var int $nbClickers_mirror
     */
    protected $nbClickers_mirror = null;

    /**
     * @var int $nbClickers_edito
     */
    protected $nbClickers_edito = null;

    /**
     * @var int $nbClickers_pub
     */
    protected $nbClickers_pub = null;

    /**
     * @var int $nbClickers_viral
     */
    protected $nbClickers_viral = null;

    /**
     * @var float $reac
     */
    protected $reac = null;

    /**
     * @var float $reac_unsub
     */
    protected $reac_unsub = null;

    /**
     * @var float $reac_mirror
     */
    protected $reac_mirror = null;

    /**
     * @var float $reac_edito
     */
    protected $reac_edito = null;

    /**
     * @var float $reac_pub
     */
    protected $reac_pub = null;

    /**
     * @var float $reac_viral
     */
    protected $reac_viral = null;

    /**
     * @var int $nbUnsubs
     */
    protected $nbUnsubs = null;

    /**
     * @var int $nbGodsons
     */
    protected $nbGodsons = null;

    /**
     * @param int $id_sent
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param int $nbAddressSent
     * @param int $nbHardBounces
     * @param int $nbSoftBounces
     * @param int $nbResponseBounces
     * @param int $nbNetworkBounces
     * @param int $nbSpamBounces
     * @param int $nbSpamComplaints
     * @param int $nbOpenings
     * @param int $nbOpeners
     * @param int $nbClicks
     * @param int $nbClickers
     * @param int $nbClicks_unsub
     * @param int $nbClicks_mirror
     * @param int $nbClicks_edito
     * @param int $nbClicks_pub
     * @param int $nbClicks_viral
     * @param int $nbClickers_unsub
     * @param int $nbClickers_mirror
     * @param int $nbClickers_edito
     * @param int $nbClickers_pub
     * @param int $nbClickers_viral
     * @param float $reac
     * @param float $reac_unsub
     * @param float $reac_mirror
     * @param float $reac_edito
     * @param float $reac_pub
     * @param float $reac_viral
     * @param int $nbUnsubs
     * @param int $nbGodsons
     */
    public function __construct($id_sent, \DateTime $startDate, \DateTime $endDate, $nbAddressSent, $nbHardBounces, $nbSoftBounces, $nbResponseBounces, $nbNetworkBounces, $nbSpamBounces, $nbSpamComplaints, $nbOpenings, $nbOpeners, $nbClicks, $nbClickers, $nbClicks_unsub, $nbClicks_mirror, $nbClicks_edito, $nbClicks_pub, $nbClicks_viral, $nbClickers_unsub, $nbClickers_mirror, $nbClickers_edito, $nbClickers_pub, $nbClickers_viral, $reac, $reac_unsub, $reac_mirror, $reac_edito, $reac_pub, $reac_viral, $nbUnsubs, $nbGodsons)
    {
      $this->id_sent = $id_sent;
      $this->startDate = $startDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
      $this->nbAddressSent = $nbAddressSent;
      $this->nbHardBounces = $nbHardBounces;
      $this->nbSoftBounces = $nbSoftBounces;
      $this->nbResponseBounces = $nbResponseBounces;
      $this->nbNetworkBounces = $nbNetworkBounces;
      $this->nbSpamBounces = $nbSpamBounces;
      $this->nbSpamComplaints = $nbSpamComplaints;
      $this->nbOpenings = $nbOpenings;
      $this->nbOpeners = $nbOpeners;
      $this->nbClicks = $nbClicks;
      $this->nbClickers = $nbClickers;
      $this->nbClicks_unsub = $nbClicks_unsub;
      $this->nbClicks_mirror = $nbClicks_mirror;
      $this->nbClicks_edito = $nbClicks_edito;
      $this->nbClicks_pub = $nbClicks_pub;
      $this->nbClicks_viral = $nbClicks_viral;
      $this->nbClickers_unsub = $nbClickers_unsub;
      $this->nbClickers_mirror = $nbClickers_mirror;
      $this->nbClickers_edito = $nbClickers_edito;
      $this->nbClickers_pub = $nbClickers_pub;
      $this->nbClickers_viral = $nbClickers_viral;
      $this->reac = $reac;
      $this->reac_unsub = $reac_unsub;
      $this->reac_mirror = $reac_mirror;
      $this->reac_edito = $reac_edito;
      $this->reac_pub = $reac_pub;
      $this->reac_viral = $reac_viral;
      $this->nbUnsubs = $nbUnsubs;
      $this->nbGodsons = $nbGodsons;
    }

    /**
     * @return int
     */
    public function getId_sent()
    {
      return $this->id_sent;
    }

    /**
     * @param int $id_sent
     * @return \mbzStatistics\SentStatistics
     */
    public function setId_sent($id_sent)
    {
      $this->id_sent = $id_sent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \mbzStatistics\SentStatistics
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \mbzStatistics\SentStatistics
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \mbzStatistics\SentStatistics
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendingName()
    {
      return $this->sendingName;
    }

    /**
     * @param string $sendingName
     * @return \mbzStatistics\SentStatistics
     */
    public function setSendingName($sendingName)
    {
      $this->sendingName = $sendingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailObject()
    {
      return $this->mailObject;
    }

    /**
     * @param string $mailObject
     * @return \mbzStatistics\SentStatistics
     */
    public function setMailObject($mailObject)
    {
      $this->mailObject = $mailObject;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbAddressSent()
    {
      return $this->nbAddressSent;
    }

    /**
     * @param int $nbAddressSent
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbAddressSent($nbAddressSent)
    {
      $this->nbAddressSent = $nbAddressSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbHardBounces()
    {
      return $this->nbHardBounces;
    }

    /**
     * @param int $nbHardBounces
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbHardBounces($nbHardBounces)
    {
      $this->nbHardBounces = $nbHardBounces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbSoftBounces()
    {
      return $this->nbSoftBounces;
    }

    /**
     * @param int $nbSoftBounces
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbSoftBounces($nbSoftBounces)
    {
      $this->nbSoftBounces = $nbSoftBounces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbResponseBounces()
    {
      return $this->nbResponseBounces;
    }

    /**
     * @param int $nbResponseBounces
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbResponseBounces($nbResponseBounces)
    {
      $this->nbResponseBounces = $nbResponseBounces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbNetworkBounces()
    {
      return $this->nbNetworkBounces;
    }

    /**
     * @param int $nbNetworkBounces
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbNetworkBounces($nbNetworkBounces)
    {
      $this->nbNetworkBounces = $nbNetworkBounces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbSpamBounces()
    {
      return $this->nbSpamBounces;
    }

    /**
     * @param int $nbSpamBounces
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbSpamBounces($nbSpamBounces)
    {
      $this->nbSpamBounces = $nbSpamBounces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbSpamComplaints()
    {
      return $this->nbSpamComplaints;
    }

    /**
     * @param int $nbSpamComplaints
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbSpamComplaints($nbSpamComplaints)
    {
      $this->nbSpamComplaints = $nbSpamComplaints;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbOpenings()
    {
      return $this->nbOpenings;
    }

    /**
     * @param int $nbOpenings
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbOpenings($nbOpenings)
    {
      $this->nbOpenings = $nbOpenings;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbOpeners()
    {
      return $this->nbOpeners;
    }

    /**
     * @param int $nbOpeners
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbOpeners($nbOpeners)
    {
      $this->nbOpeners = $nbOpeners;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks()
    {
      return $this->nbClicks;
    }

    /**
     * @param int $nbClicks
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks($nbClicks)
    {
      $this->nbClicks = $nbClicks;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers()
    {
      return $this->nbClickers;
    }

    /**
     * @param int $nbClickers
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers($nbClickers)
    {
      $this->nbClickers = $nbClickers;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks_unsub()
    {
      return $this->nbClicks_unsub;
    }

    /**
     * @param int $nbClicks_unsub
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks_unsub($nbClicks_unsub)
    {
      $this->nbClicks_unsub = $nbClicks_unsub;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks_mirror()
    {
      return $this->nbClicks_mirror;
    }

    /**
     * @param int $nbClicks_mirror
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks_mirror($nbClicks_mirror)
    {
      $this->nbClicks_mirror = $nbClicks_mirror;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks_edito()
    {
      return $this->nbClicks_edito;
    }

    /**
     * @param int $nbClicks_edito
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks_edito($nbClicks_edito)
    {
      $this->nbClicks_edito = $nbClicks_edito;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks_pub()
    {
      return $this->nbClicks_pub;
    }

    /**
     * @param int $nbClicks_pub
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks_pub($nbClicks_pub)
    {
      $this->nbClicks_pub = $nbClicks_pub;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClicks_viral()
    {
      return $this->nbClicks_viral;
    }

    /**
     * @param int $nbClicks_viral
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClicks_viral($nbClicks_viral)
    {
      $this->nbClicks_viral = $nbClicks_viral;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers_unsub()
    {
      return $this->nbClickers_unsub;
    }

    /**
     * @param int $nbClickers_unsub
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers_unsub($nbClickers_unsub)
    {
      $this->nbClickers_unsub = $nbClickers_unsub;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers_mirror()
    {
      return $this->nbClickers_mirror;
    }

    /**
     * @param int $nbClickers_mirror
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers_mirror($nbClickers_mirror)
    {
      $this->nbClickers_mirror = $nbClickers_mirror;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers_edito()
    {
      return $this->nbClickers_edito;
    }

    /**
     * @param int $nbClickers_edito
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers_edito($nbClickers_edito)
    {
      $this->nbClickers_edito = $nbClickers_edito;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers_pub()
    {
      return $this->nbClickers_pub;
    }

    /**
     * @param int $nbClickers_pub
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers_pub($nbClickers_pub)
    {
      $this->nbClickers_pub = $nbClickers_pub;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbClickers_viral()
    {
      return $this->nbClickers_viral;
    }

    /**
     * @param int $nbClickers_viral
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbClickers_viral($nbClickers_viral)
    {
      $this->nbClickers_viral = $nbClickers_viral;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac()
    {
      return $this->reac;
    }

    /**
     * @param float $reac
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac($reac)
    {
      $this->reac = $reac;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac_unsub()
    {
      return $this->reac_unsub;
    }

    /**
     * @param float $reac_unsub
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac_unsub($reac_unsub)
    {
      $this->reac_unsub = $reac_unsub;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac_mirror()
    {
      return $this->reac_mirror;
    }

    /**
     * @param float $reac_mirror
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac_mirror($reac_mirror)
    {
      $this->reac_mirror = $reac_mirror;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac_edito()
    {
      return $this->reac_edito;
    }

    /**
     * @param float $reac_edito
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac_edito($reac_edito)
    {
      $this->reac_edito = $reac_edito;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac_pub()
    {
      return $this->reac_pub;
    }

    /**
     * @param float $reac_pub
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac_pub($reac_pub)
    {
      $this->reac_pub = $reac_pub;
      return $this;
    }

    /**
     * @return float
     */
    public function getReac_viral()
    {
      return $this->reac_viral;
    }

    /**
     * @param float $reac_viral
     * @return \mbzStatistics\SentStatistics
     */
    public function setReac_viral($reac_viral)
    {
      $this->reac_viral = $reac_viral;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbUnsubs()
    {
      return $this->nbUnsubs;
    }

    /**
     * @param int $nbUnsubs
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbUnsubs($nbUnsubs)
    {
      $this->nbUnsubs = $nbUnsubs;
      return $this;
    }

    /**
     * @return int
     */
    public function getNbGodsons()
    {
      return $this->nbGodsons;
    }

    /**
     * @param int $nbGodsons
     * @return \mbzStatistics\SentStatistics
     */
    public function setNbGodsons($nbGodsons)
    {
      $this->nbGodsons = $nbGodsons;
      return $this;
    }

}
