<?php

namespace mbzPicture;

class PictureWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'List' => 'mbzPicture\\ListCustom',
  'ListResponse' => 'mbzPicture\\ListResponse',
  'PictureListResult' => 'mbzPicture\\PictureListResult',
  'ArrayOfPicture' => 'mbzPicture\\ArrayOfPicture',
  'Picture' => 'mbzPicture\\Picture',
  'MindbazAuthHeader' => 'mbzPicture\\MindbazAuthHeader',
  'Rename' => 'mbzPicture\\Rename',
  'RenameResponse' => 'mbzPicture\\RenameResponse',
  'Upload' => 'mbzPicture\\Upload',
  'UploadResponse' => 'mbzPicture\\UploadResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Picture.asmx?WSDL')
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
     * List of pictures on your site / in your dbase with pagination
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

    /**
     * Renames a picture
     *
     * @param Rename $parameters
     * @return RenameResponse
     */
    public function Rename(Rename $parameters)
    {
      return $this->__soapCall('Rename', array($parameters));
    }

    /**
     * Uploads a new picture to the server
     *
     * @param Upload $parameters
     * @return UploadResponse
     */
    public function Upload(Upload $parameters)
    {
      return $this->__soapCall('Upload', array($parameters));
    }

}
