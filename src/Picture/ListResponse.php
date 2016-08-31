<?php

namespace mbzPicture;

class ListResponse
{

    /**
     * @var PictureListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param PictureListResult $ListResult
     */
    public function __construct($ListResult)
    {
      $this->ListResult = $ListResult;
    }

    /**
     * @return PictureListResult
     */
    public function getListResult()
    {
      return $this->ListResult;
    }

    /**
     * @param PictureListResult $ListResult
     * @return \mbzPicture\ListResponse
     */
    public function setListResult($ListResult)
    {
      $this->ListResult = $ListResult;
      return $this;
    }

}
