<?php

namespace mbzSubscriber;

class SubscriberWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetSubscriberByEmail' => 'mbzSubscriber\\GetSubscriberByEmail',
  'ArrayOfInt' => 'mbzSubscriber\\ArrayOfInt',
  'GetSubscriberByEmailResponse' => 'mbzSubscriber\\GetSubscriberByEmailResponse',
  'Subscriber' => 'mbzSubscriber\\Subscriber',
  'SubscriberFieldData' => 'mbzSubscriber\\SubscriberFieldData',
  'MindbazAuthHeader' => 'mbzSubscriber\\MindbazAuthHeader',
  'GetSubscribersByEmail' => 'mbzSubscriber\\GetSubscribersByEmail',
  'ArrayOfString' => 'mbzSubscriber\\ArrayOfString',
  'ArrayOfSubscriber' => 'mbzSubscriber\\ArrayOfSubscriber',
  'GetSubscribersByEmailResponse' => 'mbzSubscriber\\GetSubscribersByEmailResponse',
  'GetSubscriberByEncodedEmail' => 'mbzSubscriber\\GetSubscriberByEncodedEmail',
  'GetSubscriberByEncodedEmailResponse' => 'mbzSubscriber\\GetSubscriberByEncodedEmailResponse',
  'GetSubscribersByEncodedEmail' => 'mbzSubscriber\\GetSubscribersByEncodedEmail',
  'GetSubscribersByEncodedEmailResponse' => 'mbzSubscriber\\GetSubscribersByEncodedEmailResponse',
  'GetSubscriber' => 'mbzSubscriber\\GetSubscriber',
  'GetSubscriberResponse' => 'mbzSubscriber\\GetSubscriberResponse',
  'GetSubscriberByIdClient' => 'mbzSubscriber\\GetSubscriberByIdClient',
  'GetSubscriberByIdClientResponse' => 'mbzSubscriber\\GetSubscriberByIdClientResponse',
  'GetSubscriberFields' => 'mbzSubscriber\\GetSubscriberFields',
  'Field' => 'mbzSubscriber\\Field',
  'FieldListTypeValue' => 'mbzSubscriber\\FieldListTypeValue',
  'ArrayOfField' => 'mbzSubscriber\\ArrayOfField',
  'GetSubscriberFieldsResponse' => 'mbzSubscriber\\GetSubscriberFieldsResponse',
  'CountSubscribers' => 'mbzSubscriber\\CountSubscribers',
  'ArrayOfSubscriberFieldData' => 'mbzSubscriber\\ArrayOfSubscriberFieldData',
  'CountSubscribersResponse' => 'mbzSubscriber\\CountSubscribersResponse',
  'UpdateSubscriber' => 'mbzSubscriber\\UpdateSubscriber',
  'UpdateSubscriberResponse' => 'mbzSubscriber\\UpdateSubscriberResponse',
  'UpdateSubscribers' => 'mbzSubscriber\\UpdateSubscribers',
  'UpdateSubscribersResponse' => 'mbzSubscriber\\UpdateSubscribersResponse',
  'InsertSubscriber' => 'mbzSubscriber\\InsertSubscriber',
  'InsertSubscriberResponse' => 'mbzSubscriber\\InsertSubscriberResponse',
  'Unsubscribe' => 'mbzSubscriber\\Unsubscribe',
  'UnsubscribeResponse' => 'mbzSubscriber\\UnsubscribeResponse',
  'UnsubscribeFromPartnersOffers' => 'mbzSubscriber\\UnsubscribeFromPartnersOffers',
  'UnsubscribeFromPartnersOffersResponse' => 'mbzSubscriber\\UnsubscribeFromPartnersOffersResponse',
  'UnsubscribeFromSpecificNewsletter' => 'mbzSubscriber\\UnsubscribeFromSpecificNewsletter',
  'UnsubscribeFromSpecificNewsletterResponse' => 'mbzSubscriber\\UnsubscribeFromSpecificNewsletterResponse',
  'Subscribe' => 'mbzSubscriber\\Subscribe',
  'SubscribeResponse' => 'mbzSubscriber\\SubscribeResponse',
  'SubscribeNewSubscriber' => 'mbzSubscriber\\SubscribeNewSubscriber',
  'SubscribeNewSubscriberResponse' => 'mbzSubscriber\\SubscribeNewSubscriberResponse',
  'SubscribeToSpecificNewsletter' => 'mbzSubscriber\\SubscribeToSpecificNewsletter',
  'SubscribeToSpecificNewsletterResponse' => 'mbzSubscriber\\SubscribeToSpecificNewsletterResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Subscriberv2.asmx?WSDL')
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
     * How to retrieve a subscriber by an e-mail address encrypted in MD5.
     *
     * @param GetSubscriberByEmail $parameters
     * @return GetSubscriberByEmailResponse
     */
    public function GetSubscriberByEmail(GetSubscriberByEmail $parameters)
    {
      return $this->__soapCall('GetSubscriberByEmail', array($parameters));
    }

    /**
     * How to retrieve subscribers by their e-mail addresses.
     *
     * @param GetSubscribersByEmail $parameters
     * @return GetSubscribersByEmailResponse
     */
    public function GetSubscribersByEmail(GetSubscribersByEmail $parameters)
    {
      return $this->__soapCall('GetSubscribersByEmail', array($parameters));
    }

    /**
     * How to retrieve a subscriber by an e-mail address encrypted in MD5.
     *
     * @param GetSubscriberByEncodedEmail $parameters
     * @return GetSubscriberByEncodedEmailResponse
     */
    public function GetSubscriberByEncodedEmail(GetSubscriberByEncodedEmail $parameters)
    {
      return $this->__soapCall('GetSubscriberByEncodedEmail', array($parameters));
    }

    /**
     * How to retrieve subscribers by e-mail addresses encrypted in MD5.
     *
     * @param GetSubscribersByEncodedEmail $parameters
     * @return GetSubscribersByEncodedEmailResponse
     */
    public function GetSubscribersByEncodedEmail(GetSubscribersByEncodedEmail $parameters)
    {
      return $this->__soapCall('GetSubscribersByEncodedEmail', array($parameters));
    }

    /**
     * How to retrieve a subscriber by ID
     *
     * @param GetSubscriber $parameters
     * @return GetSubscriberResponse
     */
    public function GetSubscriber(GetSubscriber $parameters)
    {
      return $this->__soapCall('GetSubscriber', array($parameters));
    }

    /**
     * How to retrieve a subscriber by their idClient (fld43)
     *
     * @param GetSubscriberByIdClient $parameters
     * @return GetSubscriberByIdClientResponse
     */
    public function GetSubscriberByIdClient(GetSubscriberByIdClient $parameters)
    {
      return $this->__soapCall('GetSubscriberByIdClient', array($parameters));
    }

    /**
     * How to retrieve the list of fields for a subscriber database.
     *
     * @param GetSubscriberFields $parameters
     * @return GetSubscriberFieldsResponse
     */
    public function GetSubscriberFields(GetSubscriberFields $parameters)
    {
      return $this->__soapCall('GetSubscriberFields', array($parameters));
    }

    /**
     * Counts the nb of subscribers in your database
     *
     * @param CountSubscribers $parameters
     * @return CountSubscribersResponse
     */
    public function CountSubscribers(CountSubscribers $parameters)
    {
      return $this->__soapCall('CountSubscribers', array($parameters));
    }

    /**
     * How to update a subscriber
     *
     * @param UpdateSubscriber $parameters
     * @return UpdateSubscriberResponse
     */
    public function UpdateSubscriber(UpdateSubscriber $parameters)
    {
      return $this->__soapCall('UpdateSubscriber', array($parameters));
    }

    /**
     * How to update a subscriber list (5000 maximum)
     *
     * @param UpdateSubscribers $parameters
     * @return UpdateSubscribersResponse
     */
    public function UpdateSubscribers(UpdateSubscribers $parameters)
    {
      return $this->__soapCall('UpdateSubscribers', array($parameters));
    }

    /**
     * How to insert a new subscriber
     *
     * @param InsertSubscriber $parameters
     * @return InsertSubscriberResponse
     */
    public function InsertSubscriber(InsertSubscriber $parameters)
    {
      return $this->__soapCall('InsertSubscriber', array($parameters));
    }

    /**
     * How to remove a subscriber (fld7->1) and update the unsubscribe stats.
     *
     * @param Unsubscribe $parameters
     * @return UnsubscribeResponse
     */
    public function Unsubscribe(Unsubscribe $parameters)
    {
      return $this->__soapCall('Unsubscribe', array($parameters));
    }

    /**
     * How to remove a subscriber from partner offers (fld8->0) and update the unsubscribe stats.
     *
     * @param UnsubscribeFromPartnersOffers $parameters
     * @return UnsubscribeFromPartnersOffersResponse
     */
    public function UnsubscribeFromPartnersOffers(UnsubscribeFromPartnersOffers $parameters)
    {
      return $this->__soapCall('UnsubscribeFromPartnersOffers', array($parameters));
    }

    /**
     * How to remove a subscriber from a specific newsletter and update the unsubscribe stats.
     *
     * @param UnsubscribeFromSpecificNewsletter $parameters
     * @return UnsubscribeFromSpecificNewsletterResponse
     */
    public function UnsubscribeFromSpecificNewsletter(UnsubscribeFromSpecificNewsletter $parameters)
    {
      return $this->__soapCall('UnsubscribeFromSpecificNewsletter', array($parameters));
    }

    /**
     * How to sign up an e-mail address for newsletters and change only the last source
     *
     * @param Subscribe $parameters
     * @return SubscribeResponse
     */
    public function Subscribe(Subscribe $parameters)
    {
      return $this->__soapCall('Subscribe', array($parameters));
    }

    /**
     * How to sign up an e-mail address for newsletters and change only the first (and last) provenance.
     *
     * @param SubscribeNewSubscriber $parameters
     * @return SubscribeNewSubscriberResponse
     */
    public function SubscribeNewSubscriber(SubscribeNewSubscriber $parameters)
    {
      return $this->__soapCall('SubscribeNewSubscriber', array($parameters));
    }

    /**
     * How to sign up an e-mail address for partner offers
     *
     * @param SubscribeToSpecificNewsletter $parameters
     * @return SubscribeToSpecificNewsletterResponse
     */
    public function SubscribeToSpecificNewsletter(SubscribeToSpecificNewsletter $parameters)
    {
      return $this->__soapCall('SubscribeToSpecificNewsletter', array($parameters));
    }

}
