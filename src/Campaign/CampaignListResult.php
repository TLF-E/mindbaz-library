<?php

namespace mbzCampaign;

class CampaignListResult
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var ArrayOfCampaignListRecords $records
     */
    protected $records = null;

    /**
     * @param int $total
     */
    public function __construct($total)
    {
      $this->total = $total;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param int $total
     * @return \mbzCampaign\CampaignListResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return ArrayOfCampaignListRecords
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfCampaignListRecords $records
     * @return \mbzCampaign\CampaignListResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
