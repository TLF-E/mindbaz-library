<?php

namespace mbzStatistics;

class MindbazAuthHeader
{

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $IdSite
     */
    protected $IdSite = null;

    /**
     * @param int $IdSite
     */
    public function __construct($IdSite)
    {
      $this->IdSite = $IdSite;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return \mbzStatistics\MindbazAuthHeader
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \mbzStatistics\MindbazAuthHeader
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSite()
    {
      return $this->IdSite;
    }

    /**
     * @param int $IdSite
     * @return \mbzStatistics\MindbazAuthHeader
     */
    public function setIdSite($IdSite)
    {
      $this->IdSite = $IdSite;
      return $this;
    }

}
