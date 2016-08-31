<?php

namespace mbzConfig;

class ArrayOfString
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \mbzConfig\ArrayOfString
     */
    public function setString(array $string = null)
    {
      $this->string = $string;
      return $this;
    }

}
