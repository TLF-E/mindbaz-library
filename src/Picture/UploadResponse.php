<?php

namespace mbzPicture;

class UploadResponse
{

    /**
     * @var Picture $UploadResult
     */
    protected $UploadResult = null;

    /**
     * @param Picture $UploadResult
     */
    public function __construct($UploadResult)
    {
      $this->UploadResult = $UploadResult;
    }

    /**
     * @return Picture
     */
    public function getUploadResult()
    {
      return $this->UploadResult;
    }

    /**
     * @param Picture $UploadResult
     * @return \mbzPicture\UploadResponse
     */
    public function setUploadResult($UploadResult)
    {
      $this->UploadResult = $UploadResult;
      return $this;
    }

}
