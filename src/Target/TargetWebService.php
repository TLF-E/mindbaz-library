<?php

namespace mbzTarget;

class TargetWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'List' => 'mbzTarget\\ListCustom',
  'ListResponse' => 'mbzTarget\\ListResponse',
  'TargetListResult' => 'mbzTarget\\TargetListResult',
  'ArrayOfTargetListRecords' => 'mbzTarget\\ArrayOfTargetListRecords',
  'TargetListRecords' => 'mbzTarget\\TargetListRecords',
  'MindbazAuthHeader' => 'mbzTarget\\MindbazAuthHeader',
  'GetTarget' => 'mbzTarget\\GetTarget',
  'GetTargetResponse' => 'mbzTarget\\GetTargetResponse',
  'Target' => 'mbzTarget\\Target',
  'TargetParameters' => 'mbzTarget\\TargetParameters',
  'ArrayOfInt' => 'mbzTarget\\ArrayOfInt',
  'GetTargetFieldFilter' => 'mbzTarget\\GetTargetFieldFilter',
  'GetTargetFieldFilterResponse' => 'mbzTarget\\GetTargetFieldFilterResponse',
  'TargetFieldFilter' => 'mbzTarget\\TargetFieldFilter',
  'ArrayOfFieldFilter' => 'mbzTarget\\ArrayOfFieldFilter',
  'FieldFilter' => 'mbzTarget\\FieldFilter',
  'GetTargetSqlFilter' => 'mbzTarget\\GetTargetSqlFilter',
  'GetTargetSqlFilterResponse' => 'mbzTarget\\GetTargetSqlFilterResponse',
  'TargetSqlFilter' => 'mbzTarget\\TargetSqlFilter',
  'GetTargetSendingFilter' => 'mbzTarget\\GetTargetSendingFilter',
  'GetTargetSendingFilterResponse' => 'mbzTarget\\GetTargetSendingFilterResponse',
  'TargetSendingFilter' => 'mbzTarget\\TargetSendingFilter',
  'GetTargetFileFilter' => 'mbzTarget\\GetTargetFileFilter',
  'GetTargetFileFilterResponse' => 'mbzTarget\\GetTargetFileFilterResponse',
  'TargetFileFilter' => 'mbzTarget\\TargetFileFilter',
  'GetTargetBehaviourFilter' => 'mbzTarget\\GetTargetBehaviourFilter',
  'GetTargetBehaviourFilterResponse' => 'mbzTarget\\GetTargetBehaviourFilterResponse',
  'TargetBehaviourFilter' => 'mbzTarget\\TargetBehaviourFilter',
  'CreateTarget' => 'mbzTarget\\CreateTarget',
  'CreateTargetResponse' => 'mbzTarget\\CreateTargetResponse',
  'UpdateTarget' => 'mbzTarget\\UpdateTarget',
  'UpdateTargetResponse' => 'mbzTarget\\UpdateTargetResponse',
  'SetTargetFieldFilter' => 'mbzTarget\\SetTargetFieldFilter',
  'SetTargetFieldFilterResponse' => 'mbzTarget\\SetTargetFieldFilterResponse',
  'SetTargetSqlFilter' => 'mbzTarget\\SetTargetSqlFilter',
  'SetTargetSqlFilterResponse' => 'mbzTarget\\SetTargetSqlFilterResponse',
  'SetTargetBehaviourFilter' => 'mbzTarget\\SetTargetBehaviourFilter',
  'SetTargetBehaviourFilterResponse' => 'mbzTarget\\SetTargetBehaviourFilterResponse',
  'SetTargetSendingFilter' => 'mbzTarget\\SetTargetSendingFilter',
  'SetTargetSendingFilterResponse' => 'mbzTarget\\SetTargetSendingFilterResponse',
  'SetTargetFileFilter' => 'mbzTarget\\SetTargetFileFilter',
  'SetTargetFileFilterResponse' => 'mbzTarget\\SetTargetFileFilterResponse',
  'GetTargetDesc' => 'mbzTarget\\GetTargetDesc',
  'GetTargetDescResponse' => 'mbzTarget\\GetTargetDescResponse',
  'DuplicateTarget' => 'mbzTarget\\DuplicateTarget',
  'DuplicateTargetResponse' => 'mbzTarget\\DuplicateTargetResponse',
  'Count' => 'mbzTarget\\Count',
  'CountResponse' => 'mbzTarget\\CountResponse',
  'DeleteTarget' => 'mbzTarget\\DeleteTarget',
  'DeleteTargetResponse' => 'mbzTarget\\DeleteTargetResponse',
  'ArchiveTarget' => 'mbzTarget\\ArchiveTarget',
  'ArchiveTargetResponse' => 'mbzTarget\\ArchiveTargetResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Target.asmx?WSDL')
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
     * Lists the targets in your database
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

    /**
     * Retrieves a target by its ID
     *
     * @param GetTarget $parameters
     * @return GetTargetResponse
     */
    public function GetTarget(GetTarget $parameters)
    {
      return $this->__soapCall('GetTarget', array($parameters));
    }

    /**
     * Retrieves the filter by field of a target by its ID
     *
     * @param GetTargetFieldFilter $parameters
     * @return GetTargetFieldFilterResponse
     */
    public function GetTargetFieldFilter(GetTargetFieldFilter $parameters)
    {
      return $this->__soapCall('GetTargetFieldFilter', array($parameters));
    }

    /**
     * Retrieves the SQL of a target by its ID
     *
     * @param GetTargetSqlFilter $parameters
     * @return GetTargetSqlFilterResponse
     */
    public function GetTargetSqlFilter(GetTargetSqlFilter $parameters)
    {
      return $this->__soapCall('GetTargetSqlFilter', array($parameters));
    }

    /**
     * Retrieves the filter by mailing of a target by its ID
     *
     * @param GetTargetSendingFilter $parameters
     * @return GetTargetSendingFilterResponse
     */
    public function GetTargetSendingFilter(GetTargetSendingFilter $parameters)
    {
      return $this->__soapCall('GetTargetSendingFilter', array($parameters));
    }

    /**
     * Retrieves the filter by file of a target by its ID
     *
     * @param GetTargetFileFilter $parameters
     * @return GetTargetFileFilterResponse
     */
    public function GetTargetFileFilter(GetTargetFileFilter $parameters)
    {
      return $this->__soapCall('GetTargetFileFilter', array($parameters));
    }

    /**
     * Retrieves the filter by behaviour of a target by its ID
     *
     * @param GetTargetBehaviourFilter $parameters
     * @return GetTargetBehaviourFilterResponse
     */
    public function GetTargetBehaviourFilter(GetTargetBehaviourFilter $parameters)
    {
      return $this->__soapCall('GetTargetBehaviourFilter', array($parameters));
    }

    /**
     * Creates a new target
     *
     * @param CreateTarget $parameters
     * @return CreateTargetResponse
     */
    public function CreateTarget(CreateTarget $parameters)
    {
      return $this->__soapCall('CreateTarget', array($parameters));
    }

    /**
     * Changes the base parameters of a target
     *
     * @param UpdateTarget $parameters
     * @return UpdateTargetResponse
     */
    public function UpdateTarget(UpdateTarget $parameters)
    {
      return $this->__soapCall('UpdateTarget', array($parameters));
    }

    /**
     * Sets filter by field of a target
     *
     * @param SetTargetFieldFilter $parameters
     * @return SetTargetFieldFilterResponse
     */
    public function SetTargetFieldFilter(SetTargetFieldFilter $parameters)
    {
      return $this->__soapCall('SetTargetFieldFilter', array($parameters));
    }

    /**
     * Sets SQL filter of a target
     *
     * @param SetTargetSqlFilter $parameters
     * @return SetTargetSqlFilterResponse
     */
    public function SetTargetSqlFilter(SetTargetSqlFilter $parameters)
    {
      return $this->__soapCall('SetTargetSqlFilter', array($parameters));
    }

    /**
     * Sets filter by behaviour of a target
     *
     * @param SetTargetBehaviourFilter $parameters
     * @return SetTargetBehaviourFilterResponse
     */
    public function SetTargetBehaviourFilter(SetTargetBehaviourFilter $parameters)
    {
      return $this->__soapCall('SetTargetBehaviourFilter', array($parameters));
    }

    /**
     * Sets filter by mailing of a target
     *
     * @param SetTargetSendingFilter $parameters
     * @return SetTargetSendingFilterResponse
     */
    public function SetTargetSendingFilter(SetTargetSendingFilter $parameters)
    {
      return $this->__soapCall('SetTargetSendingFilter', array($parameters));
    }

    /**
     * Sets filter by file of a target
     *
     * @param SetTargetFileFilter $parameters
     * @return SetTargetFileFilterResponse
     */
    public function SetTargetFileFilter(SetTargetFileFilter $parameters)
    {
      return $this->__soapCall('SetTargetFileFilter', array($parameters));
    }

    /**
     * Retrieves target description
     *
     * @param GetTargetDesc $parameters
     * @return GetTargetDescResponse
     */
    public function GetTargetDesc(GetTargetDesc $parameters)
    {
      return $this->__soapCall('GetTargetDesc', array($parameters));
    }

    /**
     * Duplicates a target
     *
     * @param DuplicateTarget $parameters
     * @return DuplicateTargetResponse
     */
    public function DuplicateTarget(DuplicateTarget $parameters)
    {
      return $this->__soapCall('DuplicateTarget', array($parameters));
    }

    /**
     * Counts the target volume
     *
     * @param Count $parameters
     * @return CountResponse
     */
    public function Count(Count $parameters)
    {
      return $this->__soapCall('Count', array($parameters));
    }

    /**
     * Deletes a target
     *
     * @param DeleteTarget $parameters
     * @return DeleteTargetResponse
     */
    public function DeleteTarget(DeleteTarget $parameters)
    {
      return $this->__soapCall('DeleteTarget', array($parameters));
    }

    /**
     * Archives a target
     *
     * @param ArchiveTarget $parameters
     * @return ArchiveTargetResponse
     */
    public function ArchiveTarget(ArchiveTarget $parameters)
    {
      return $this->__soapCall('ArchiveTarget', array($parameters));
    }

}
