<?php

namespace mbzImport;

class ImportWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetImport' => 'mbzImport\\GetImport',
  'GetImportResponse' => 'mbzImport\\GetImportResponse',
  'Import' => 'mbzImport\\Import',
  'ImportParameters' => 'mbzImport\\ImportParameters',
  'ArrayOfImportMapping' => 'mbzImport\\ArrayOfImportMapping',
  'ImportMapping' => 'mbzImport\\ImportMapping',
  'SchedulingInfos' => 'mbzImport\\SchedulingInfos',
  'RecurringInfos' => 'mbzImport\\RecurringInfos',
  'ImportLog' => 'mbzImport\\ImportLog',
  'MindbazAuthHeader' => 'mbzImport\\MindbazAuthHeader',
  'ScheduleImportNow' => 'mbzImport\\ScheduleImportNow',
  'ScheduleImportNowResponse' => 'mbzImport\\ScheduleImportNowResponse',
  'ScheduleImportOneTime' => 'mbzImport\\ScheduleImportOneTime',
  'ScheduleImportOneTimeResponse' => 'mbzImport\\ScheduleImportOneTimeResponse',
  'StopImport' => 'mbzImport\\StopImport',
  'StopImportResponse' => 'mbzImport\\StopImportResponse',
  'List' => 'mbzImport\\ListCustom',
  'ListResponse' => 'mbzImport\\ListResponse',
  'ImportListResult' => 'mbzImport\\ImportListResult',
  'ArrayOfImportListRecords' => 'mbzImport\\ArrayOfImportListRecords',
  'ImportListRecords' => 'mbzImport\\ImportListRecords',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Import.asmx?WSDL')
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
     * Retrieves an import by its ID.
     *
     * @param GetImport $parameters
     * @return GetImportResponse
     */
    public function GetImport(GetImport $parameters)
    {
      return $this->__soapCall('GetImport', array($parameters));
    }

    /**
     * Schedules an import immediately
     *
     * @param ScheduleImportNow $parameters
     * @return ScheduleImportNowResponse
     */
    public function ScheduleImportNow(ScheduleImportNow $parameters)
    {
      return $this->__soapCall('ScheduleImportNow', array($parameters));
    }

    /**
     * Schedules an import for an exact date
     *
     * @param ScheduleImportOneTime $parameters
     * @return ScheduleImportOneTimeResponse
     */
    public function ScheduleImportOneTime(ScheduleImportOneTime $parameters)
    {
      return $this->__soapCall('ScheduleImportOneTime', array($parameters));
    }

    /**
     * Stops an import in progress or cancels a scheduled import
     *
     * @param StopImport $parameters
     * @return StopImportResponse
     */
    public function StopImport(StopImport $parameters)
    {
      return $this->__soapCall('StopImport', array($parameters));
    }

    /**
     * Lists all imports scheduled or terminated during the last 15 days
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

}
