<?php

namespace mbzPicture;

class PictureListResult
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var ArrayOfPicture $records
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
     * @return \mbzPicture\PictureListResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return ArrayOfPicture
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfPicture $records
     * @return \mbzPicture\PictureListResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
