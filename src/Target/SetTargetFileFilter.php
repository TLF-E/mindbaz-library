<?php

namespace mbzTarget;

class SetTargetFileFilter
{

    /**
     * @var TargetFileFilter $fileFilter
     */
    protected $fileFilter = null;

    /**
     * @param TargetFileFilter $fileFilter
     */
    public function __construct($fileFilter)
    {
      $this->fileFilter = $fileFilter;
    }

    /**
     * @return TargetFileFilter
     */
    public function getFileFilter()
    {
      return $this->fileFilter;
    }

    /**
     * @param TargetFileFilter $fileFilter
     * @return \mbzTarget\SetTargetFileFilter
     */
    public function setFileFilter($fileFilter)
    {
      $this->fileFilter = $fileFilter;
      return $this;
    }

}
