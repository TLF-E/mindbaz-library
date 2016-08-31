<?php

namespace mbzOneshot;

class OneshotWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'SendToMD5' => 'mbzOneshot\\SendToMD5',
  'SendToMD5Response' => 'mbzOneshot\\SendToMD5Response',
  'MindbazAuthHeader' => 'mbzOneshot\\MindbazAuthHeader',
  'SendToIdClient' => 'mbzOneshot\\SendToIdClient',
  'SendToIdClientResponse' => 'mbzOneshot\\SendToIdClientResponse',
  'Send' => 'mbzOneshot\\Send',
  'SendResponse' => 'mbzOneshot\\SendResponse',
  'SendFromCampaign' => 'mbzOneshot\\SendFromCampaign',
  'SendFromCampaignResponse' => 'mbzOneshot\\SendFromCampaignResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/OneshotV2.asmx?WSDL')
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
     * OneShot mailing has e-mail encrypted in md5
     *
     * @param SendToMD5 $parameters
     * @return SendToMD5Response
     */
    public function SendToMD5(SendToMD5 $parameters)
    {
      return $this->__soapCall('SendToMD5', array($parameters));
    }

    /**
     * Sends a message in one shot to a client by their idClient(fld43)
     *
     * @param SendToIdClient $parameters
     * @return SendToIdClientResponse
     */
    public function SendToIdClient(SendToIdClient $parameters)
    {
      return $this->__soapCall('SendToIdClient', array($parameters));
    }

    /**
     * Sends a message in one shot to a subscriber
     *
     * @param Send $parameters
     * @return SendResponse
     */
    public function Send(Send $parameters)
    {
      return $this->__soapCall('Send', array($parameters));
    }

    /**
     * Sends a message in one shot to a subscriber using a mindbaz data (message, subject, sender alias) campaign
     *
     * @param SendFromCampaign $parameters
     * @return SendFromCampaignResponse
     */
    public function SendFromCampaign(SendFromCampaign $parameters)
    {
      return $this->__soapCall('SendFromCampaign', array($parameters));
    }

}
