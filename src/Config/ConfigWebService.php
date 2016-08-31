<?php

namespace mbzConfig;

class ConfigWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetConfig' => 'mbzConfig\\GetConfig',
  'GetConfigResponse' => 'mbzConfig\\GetConfigResponse',
  'Config' => 'mbzConfig\\Config',
  'ConfigParameters' => 'mbzConfig\\ConfigParameters',
  'MindbazAuthHeader' => 'mbzConfig\\MindbazAuthHeader',
  'List' => 'mbzConfig\\ListCustom',
  'ListResponse' => 'mbzConfig\\ListResponse',
  'ConfigListResult' => 'mbzConfig\\ConfigListResult',
  'ArrayOfConfigListRecords' => 'mbzConfig\\ArrayOfConfigListRecords',
  'ConfigListRecords' => 'mbzConfig\\ConfigListRecords',
  'CreateConfig' => 'mbzConfig\\CreateConfig',
  'CreateConfigResponse' => 'mbzConfig\\CreateConfigResponse',
  'UpdateConfig' => 'mbzConfig\\UpdateConfig',
  'UpdateConfigResponse' => 'mbzConfig\\UpdateConfigResponse',
  'DeleteConfig' => 'mbzConfig\\DeleteConfig',
  'DeleteConfigResponse' => 'mbzConfig\\DeleteConfigResponse',
  'ArchiveConfig' => 'mbzConfig\\ArchiveConfig',
  'ArchiveConfigResponse' => 'mbzConfig\\ArchiveConfigResponse',
  'DuplicateConfig' => 'mbzConfig\\DuplicateConfig',
  'DuplicateConfigResponse' => 'mbzConfig\\DuplicateConfigResponse',
  'ListSenderDomains' => 'mbzConfig\\ListSenderDomains',
  'ListSenderDomainsResponse' => 'mbzConfig\\ListSenderDomainsResponse',
  'ArrayOfString' => 'mbzConfig\\ArrayOfString',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Config.asmx?WSDL')
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
     * Retrieves a config by its id
     *
     * @param GetConfig $parameters
     * @return GetConfigResponse
     */
    public function GetConfig(GetConfig $parameters)
    {
      return $this->__soapCall('GetConfig', array($parameters));
    }

    /**
     * Lists the mailing configs for your database
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

    /**
     * Creates a new mailing config from your database
     *
     * @param CreateConfig $parameters
     * @return CreateConfigResponse
     */
    public function CreateConfig(CreateConfig $parameters)
    {
      return $this->__soapCall('CreateConfig', array($parameters));
    }

    /**
     * Changes the parameters of a mailing configuration
     *
     * @param UpdateConfig $parameters
     * @return UpdateConfigResponse
     */
    public function UpdateConfig(UpdateConfig $parameters)
    {
      return $this->__soapCall('UpdateConfig', array($parameters));
    }

    /**
     * Removes a config.
     *
     * @param DeleteConfig $parameters
     * @return DeleteConfigResponse
     */
    public function DeleteConfig(DeleteConfig $parameters)
    {
      return $this->__soapCall('DeleteConfig', array($parameters));
    }

    /**
     * Archives a config
     *
     * @param ArchiveConfig $parameters
     * @return ArchiveConfigResponse
     */
    public function ArchiveConfig(ArchiveConfig $parameters)
    {
      return $this->__soapCall('ArchiveConfig', array($parameters));
    }

    /**
     * Duplicates a mailing config
     *
     * @param DuplicateConfig $parameters
     * @return DuplicateConfigResponse
     */
    public function DuplicateConfig(DuplicateConfig $parameters)
    {
      return $this->__soapCall('DuplicateConfig', array($parameters));
    }

    /**
     * Lists the authorised sender domains in the database.
     *
     * @param ListSenderDomains $parameters
     * @return ListSenderDomainsResponse
     */
    public function ListSenderDomains(ListSenderDomains $parameters)
    {
      return $this->__soapCall('ListSenderDomains', array($parameters));
    }

}
