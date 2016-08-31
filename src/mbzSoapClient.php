<?php
class mbzSoapClient extends \SoapClient
{
	const MBZ_WS_NAMESPACE = 'http://www.mindbaz.com/webservices/'; 	
	
     

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = 'http://webservice.mindbaz.com/Campaign.asmx?WSDL', array $options = array())
    {       
      parent::__construct($wsdl, $options);
	 
	  parent::__setSoapHeaders(self::createHeader($options));   
    }
	
	private static function createHeader(array $options) 
	{
		if (isset($options['idSite'])) {
          $IdSite = $options['idSite'];
        }
		else $IdSite = -1;
		if (isset($options['login'])) {
          $Login = $options['login'];
        }
		else $Login = '';
		if (isset($options['password'])) {
          $Password = $options['password'];
        }   
		else $Password = '';
		$struct = new stdClass();
        $struct->IdSite = new SoapVar($IdSite, XSD_INTEGER, null, null, null, self::MBZ_WS_NAMESPACE);
		$struct->Login = new SoapVar($Login, XSD_STRING, null, null, null, self::MBZ_WS_NAMESPACE); 
		$struct->Password = new SoapVar($Password, XSD_STRING, null, null, null, self::MBZ_WS_NAMESPACE);		
		$header_values = new SoapVar($struct, SOAP_ENC_OBJECT, null, null,null, self::MBZ_WS_NAMESPACE); 
		$header = new SoapHeader(self::MBZ_WS_NAMESPACE, "MindbazAuthHeader", $header_values);
		 
		return $header; 
	} 
}

?>