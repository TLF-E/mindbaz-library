<?php

namespace mbzStatistics;

class StatisticsWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetSentStatistics' => 'mbzStatistics\\GetSentStatistics',
  'GetSentStatisticsResponse' => 'mbzStatistics\\GetSentStatisticsResponse',
  'GetSentStatisticsResult' => 'mbzStatistics\\GetSentStatisticsResult',
  'MindbazAuthHeader' => 'mbzStatistics\\MindbazAuthHeader',
  'GetSentStatistics2' => 'mbzStatistics\\GetSentStatistics2',
  'GetSentStatistics2Response' => 'mbzStatistics\\GetSentStatistics2Response',
  'SentStatistics' => 'mbzStatistics\\SentStatistics',
  'GetSentsStatistics' => 'mbzStatistics\\GetSentsStatistics',
  'GetSentsStatisticsResponse' => 'mbzStatistics\\GetSentsStatisticsResponse',
  'GetSentsStatisticsResult' => 'mbzStatistics\\GetSentsStatisticsResult',
  'GetSentsStatistics2' => 'mbzStatistics\\GetSentsStatistics2',
  'GetSentsStatistics2Response' => 'mbzStatistics\\GetSentsStatistics2Response',
  'ArrayOfSentStatistics' => 'mbzStatistics\\ArrayOfSentStatistics',
  'GetSentsStatistics3' => 'mbzStatistics\\GetSentsStatistics3',
  'GetSentsStatistics3Response' => 'mbzStatistics\\GetSentsStatistics3Response',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/StatisticsV2.asmx?WSDL')
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Retrieves mailing stats (ID=idSent) in a datatable.
     *
     * @param GetSentStatistics $parameters
     * @return GetSentStatisticsResponse
     */
    public function GetSentStatistics(GetSentStatistics $parameters)
    {
      return $this->__soapCall('GetSentStatistics', array($parameters));
    }

    /**
     * Retrieves mailing stats (ID=idSent) in a SentStatistics structure.
     *
     * @param GetSentStatistics2 $parameters
     * @return GetSentStatistics2Response
     */
    public function GetSentStatistics2(GetSentStatistics2 $parameters)
    {
      return $this->__soapCall('GetSentStatistics2', array($parameters));
    }

    /**
     * Retrieves mailing stats within the last nbDays in a datatable.
     *
     * @param GetSentsStatistics $parameters
     * @return GetSentsStatisticsResponse
     */
    public function GetSentsStatistics(GetSentsStatistics $parameters)
    {
      return $this->__soapCall('GetSentsStatistics', array($parameters));
    }

    /**
     * Retrieves mailing stats within the last nbDays in a SentStatistics table.
     *
     * @param GetSentsStatistics2 $parameters
     * @return GetSentsStatistics2Response
     */
    public function GetSentsStatistics2(GetSentsStatistics2 $parameters)
    {
      return $this->__soapCall('GetSentsStatistics2', array($parameters));
    }

    /**
     * Retrieves mailing stats from a campaign  within the last nbDays in a SentStatistics table.
     *
     * @param GetSentsStatistics3 $parameters
     * @return GetSentsStatistics3Response
     */
    public function GetSentsStatistics3(GetSentsStatistics3 $parameters)
    {
      return $this->__soapCall('GetSentsStatistics3', array($parameters));
    }

}
