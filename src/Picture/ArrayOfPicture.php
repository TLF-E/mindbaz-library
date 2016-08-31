<?php

namespace mbzPicture;

class ArrayOfPicture
{

    /**
     * @var Picture[] $Picture
     */
    protected $Picture = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Picture[]
     */
    public function getPicture()
    {
      return $this->Picture;
    }

    /**
     * @param Picture[] $Picture
     * @return \mbzPicture\ArrayOfPicture
     */
    public function setPicture(array $Picture = null)
    {
      $this->Picture = $Picture;
      return $this;
    }

}
