<?php

namespace mbzSubscriber;

class ArrayOfInt
{

    /**
     * @var int[] $int
     */
    protected $int = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getInt()
    {
      return $this->int;
    }

    /**
     * @param int[] $int
     * @return \mbzSubscriber\ArrayOfInt
     */
    public function setInt(array $int = null)
    {
      $this->int = $int;
      return $this;
    }

}
