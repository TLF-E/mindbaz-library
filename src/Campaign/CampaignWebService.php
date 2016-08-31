<?php

namespace mbzCampaign;

class CampaignWebService extends \mbzSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateCampaign' => 'mbzCampaign\\CreateCampaign',
  'CampaignParameters' => 'mbzCampaign\\CampaignParameters',
  'CreateCampaignResponse' => 'mbzCampaign\\CreateCampaignResponse',
  'Campaign' => 'mbzCampaign\\Campaign',
  'SchedulingInfos' => 'mbzCampaign\\SchedulingInfos',
  'MindbazAuthHeader' => 'mbzCampaign\\MindbazAuthHeader',
  'UpdateCampaign' => 'mbzCampaign\\UpdateCampaign',
  'UpdateCampaignResponse' => 'mbzCampaign\\UpdateCampaignResponse',
  'GetCampaignParameters' => 'mbzCampaign\\GetCampaignParameters',
  'GetCampaignParametersResponse' => 'mbzCampaign\\GetCampaignParametersResponse',
  'GetCampaign' => 'mbzCampaign\\GetCampaign',
  'GetCampaignResponse' => 'mbzCampaign\\GetCampaignResponse',
  'DeleteCampaign' => 'mbzCampaign\\DeleteCampaign',
  'DeleteCampaignResponse' => 'mbzCampaign\\DeleteCampaignResponse',
  'DuplicateCampaign' => 'mbzCampaign\\DuplicateCampaign',
  'DuplicateCampaignResponse' => 'mbzCampaign\\DuplicateCampaignResponse',
  'UpdateCampaignMessage' => 'mbzCampaign\\UpdateCampaignMessage',
  'UpdateCampaignMessageResponse' => 'mbzCampaign\\UpdateCampaignMessageResponse',
  'GetSpamScore' => 'mbzCampaign\\GetSpamScore',
  'GetSpamScoreResponse' => 'mbzCampaign\\GetSpamScoreResponse',
  'SpamScoreInfos' => 'mbzCampaign\\SpamScoreInfos',
  'AddSegment' => 'mbzCampaign\\AddSegment',
  'SegmentParameters' => 'mbzCampaign\\SegmentParameters',
  'AddSegmentResponse' => 'mbzCampaign\\AddSegmentResponse',
  'DeleteSegment' => 'mbzCampaign\\DeleteSegment',
  'DeleteSegmentResponse' => 'mbzCampaign\\DeleteSegmentResponse',
  'ArrayOfInt' => 'mbzCampaign\\ArrayOfInt',
  'UpdateSegment' => 'mbzCampaign\\UpdateSegment',
  'UpdateSegmentResponse' => 'mbzCampaign\\UpdateSegmentResponse',
  'ReorganizeSegmentPositions' => 'mbzCampaign\\ReorganizeSegmentPositions',
  'ReorganizeSegmentPositionsResponse' => 'mbzCampaign\\ReorganizeSegmentPositionsResponse',
  'UpdateSegmentAdvertisement' => 'mbzCampaign\\UpdateSegmentAdvertisement',
  'SegmentAdvertisement' => 'mbzCampaign\\SegmentAdvertisement',
  'UpdateSegmentAdvertisementResponse' => 'mbzCampaign\\UpdateSegmentAdvertisementResponse',
  'GetAllSegments' => 'mbzCampaign\\GetAllSegments',
  'GetAllSegmentsResponse' => 'mbzCampaign\\GetAllSegmentsResponse',
  'ArrayOfSegment' => 'mbzCampaign\\ArrayOfSegment',
  'Segment' => 'mbzCampaign\\Segment',
  'ArrayOfSegmentAdvertisement' => 'mbzCampaign\\ArrayOfSegmentAdvertisement',
  'GetAllSegmentIds' => 'mbzCampaign\\GetAllSegmentIds',
  'GetAllSegmentIdsResponse' => 'mbzCampaign\\GetAllSegmentIdsResponse',
  'GetSegment' => 'mbzCampaign\\GetSegment',
  'GetSegmentResponse' => 'mbzCampaign\\GetSegmentResponse',
  'CountSegment' => 'mbzCampaign\\CountSegment',
  'CountSegmentResponse' => 'mbzCampaign\\CountSegmentResponse',
  'ArrayOfSegmentCountInfos' => 'mbzCampaign\\ArrayOfSegmentCountInfos',
  'SegmentCountInfos' => 'mbzCampaign\\SegmentCountInfos',
  'CountAllSegments' => 'mbzCampaign\\CountAllSegments',
  'CountAllSegmentsResponse' => 'mbzCampaign\\CountAllSegmentsResponse',
  'GetAllTrackedUrls' => 'mbzCampaign\\GetAllTrackedUrls',
  'GetAllTrackedUrlsResponse' => 'mbzCampaign\\GetAllTrackedUrlsResponse',
  'ArrayOfTrackedUrl' => 'mbzCampaign\\ArrayOfTrackedUrl',
  'TrackedUrl' => 'mbzCampaign\\TrackedUrl',
  'TrackingParameter' => 'mbzCampaign\\TrackingParameter',
  'TrackAll' => 'mbzCampaign\\TrackAll',
  'TrackAllResponse' => 'mbzCampaign\\TrackAllResponse',
  'TrackUrl' => 'mbzCampaign\\TrackUrl',
  'TrackUrlResponse' => 'mbzCampaign\\TrackUrlResponse',
  'UntrackUrl' => 'mbzCampaign\\UntrackUrl',
  'UntrackUrlResponse' => 'mbzCampaign\\UntrackUrlResponse',
  'SendBAT' => 'mbzCampaign\\SendBAT',
  'SendBATResponse' => 'mbzCampaign\\SendBATResponse',
  'SendSegmentBAT' => 'mbzCampaign\\SendSegmentBAT',
  'SendSegmentBATResponse' => 'mbzCampaign\\SendSegmentBATResponse',
  'Schedule' => 'mbzCampaign\\Schedule',
  'ArrayOfDateTime' => 'mbzCampaign\\ArrayOfDateTime',
  'ScheduleResponse' => 'mbzCampaign\\ScheduleResponse',
  'Play' => 'mbzCampaign\\Play',
  'PlayResponse' => 'mbzCampaign\\PlayResponse',
  'Pause' => 'mbzCampaign\\Pause',
  'PauseResponse' => 'mbzCampaign\\PauseResponse',
  'Stop' => 'mbzCampaign\\Stop',
  'StopResponse' => 'mbzCampaign\\StopResponse',
  'List' => 'mbzCampaign\\ListCustom',
  'ListResponse' => 'mbzCampaign\\ListResponse',
  'CampaignListResult' => 'mbzCampaign\\CampaignListResult',
  'ArrayOfCampaignListRecords' => 'mbzCampaign\\ArrayOfCampaignListRecords',
  'CampaignListRecords' => 'mbzCampaign\\CampaignListRecords',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice.mindbaz.com/Campaign.asmx?WSDL')
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
     * Create a campaign
     *
     * @param CreateCampaign $parameters
     * @return CreateCampaignResponse
     */
    public function CreateCampaign(CreateCampaign $parameters)
    {
      return $this->__soapCall('CreateCampaign', array($parameters));
    }

    /**
     * Changes the parameters of a campaign
     *
     * @param UpdateCampaign $parameters
     * @return UpdateCampaignResponse
     */
    public function UpdateCampaign(UpdateCampaign $parameters)
    {
      return $this->__soapCall('UpdateCampaign', array($parameters));
    }

    /**
     * Retrieves the parameters of a campaign
     *
     * @param GetCampaignParameters $parameters
     * @return GetCampaignParametersResponse
     */
    public function GetCampaignParameters(GetCampaignParameters $parameters)
    {
      return $this->__soapCall('GetCampaignParameters', array($parameters));
    }

    /**
     * Retrieves a campaign
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Deletes a campaign
     *
     * @param DeleteCampaign $parameters
     * @return DeleteCampaignResponse
     */
    public function DeleteCampaign(DeleteCampaign $parameters)
    {
      return $this->__soapCall('DeleteCampaign', array($parameters));
    }

    /**
     * Duplique une campagne sans sa programmation
     *
     * @param DuplicateCampaign $parameters
     * @return DuplicateCampaignResponse
     */
    public function DuplicateCampaign(DuplicateCampaign $parameters)
    {
      return $this->__soapCall('DuplicateCampaign', array($parameters));
    }

    /**
     * Updates the html message and / or the text of a campaign
     *
     * @param UpdateCampaignMessage $parameters
     * @return UpdateCampaignMessageResponse
     */
    public function UpdateCampaignMessage(UpdateCampaignMessage $parameters)
    {
      return $this->__soapCall('UpdateCampaignMessage', array($parameters));
    }

    /**
     * Calculates the spam score of a segment
     *
     * @param GetSpamScore $parameters
     * @return GetSpamScoreResponse
     */
    public function GetSpamScore(GetSpamScore $parameters)
    {
      return $this->__soapCall('GetSpamScore', array($parameters));
    }

    /**
     * Adds a new campaign segment
     *
     * @param AddSegment $parameters
     * @return AddSegmentResponse
     */
    public function AddSegment(AddSegment $parameters)
    {
      return $this->__soapCall('AddSegment', array($parameters));
    }

    /**
     * Deletes a campaign segment based on its position (beginning at 1). Returns a list of IDs of the remaining segments.
     *
     * @param DeleteSegment $parameters
     * @return DeleteSegmentResponse
     */
    public function DeleteSegment(DeleteSegment $parameters)
    {
      return $this->__soapCall('DeleteSegment', array($parameters));
    }

    /**
     * Updates a campaign segment
     *
     * @param UpdateSegment $parameters
     * @return UpdateSegmentResponse
     */
    public function UpdateSegment(UpdateSegment $parameters)
    {
      return $this->__soapCall('UpdateSegment', array($parameters));
    }

    /**
     * Changes the order of the segments
     *
     * @param ReorganizeSegmentPositions $parameters
     * @return ReorganizeSegmentPositionsResponse
     */
    public function ReorganizeSegmentPositions(ReorganizeSegmentPositions $parameters)
    {
      return $this->__soapCall('ReorganizeSegmentPositions', array($parameters));
    }

    /**
     * Assigns an advert to an insert within a segment. An advert can be assigned to all inserts and /or all segments at once.
     *
     * @param UpdateSegmentAdvertisement $parameters
     * @return UpdateSegmentAdvertisementResponse
     */
    public function UpdateSegmentAdvertisement(UpdateSegmentAdvertisement $parameters)
    {
      return $this->__soapCall('UpdateSegmentAdvertisement', array($parameters));
    }

    /**
     * Retrieves all the segments of a campaign
     *
     * @param GetAllSegments $parameters
     * @return GetAllSegmentsResponse
     */
    public function GetAllSegments(GetAllSegments $parameters)
    {
      return $this->__soapCall('GetAllSegments', array($parameters));
    }

    /**
     * Retrieves a table of the segment IDs of a campaign in order of segment (rather than ID) number
     *
     * @param GetAllSegmentIds $parameters
     * @return GetAllSegmentIdsResponse
     */
    public function GetAllSegmentIds(GetAllSegmentIds $parameters)
    {
      return $this->__soapCall('GetAllSegmentIds', array($parameters));
    }

    /**
     * Retrieves the segment data of a campaign
     *
     * @param GetSegment $parameters
     * @return GetSegmentResponse
     */
    public function GetSegment(GetSegment $parameters)
    {
      return $this->__soapCall('GetSegment', array($parameters));
    }

    /**
     * Counts the number of subscribers in a campaign segment and returns the results for that segment and those preceding it.
     *
     * @param CountSegment $parameters
     * @return CountSegmentResponse
     */
    public function CountSegment(CountSegment $parameters)
    {
      return $this->__soapCall('CountSegment', array($parameters));
    }

    /**
     * Counts the number of subscribers in all campaign segments and returns the results for that segment and those preceding it.
     *
     * @param CountAllSegments $parameters
     * @return CountAllSegmentsResponse
     */
    public function CountAllSegments(CountAllSegments $parameters)
    {
      return $this->__soapCall('CountAllSegments', array($parameters));
    }

    /**
     * Retrieves the urls of a campaign and creates tracked urls by default if this is the first request for the campaign.
     *
     * @param GetAllTrackedUrls $parameters
     * @return GetAllTrackedUrlsResponse
     */
    public function GetAllTrackedUrls(GetAllTrackedUrls $parameters)
    {
      return $this->__soapCall('GetAllTrackedUrls', array($parameters));
    }

    /**
     * This function allows all urls in a campaign to be tracked. It is similar to the GetAllTrackedUrls function as it tracks all urls by default.
     *
     * @param TrackAll $parameters
     * @return TrackAllResponse
     */
    public function TrackAll(TrackAll $parameters)
    {
      return $this->__soapCall('TrackAll', array($parameters));
    }

    /**
     * This function allows a url in a campaign to be tracked. Urls within advertisements are tracked on the basis of the tracking parameters of the advertisement rather than on the basis of trackingParameters.
     *
     * @param TrackUrl $parameters
     * @return TrackUrlResponse
     */
    public function TrackUrl(TrackUrl $parameters)
    {
      return $this->__soapCall('TrackUrl', array($parameters));
    }

    /**
     * De-activates url tracking
     *
     * @param UntrackUrl $parameters
     * @return UntrackUrlResponse
     */
    public function UntrackUrl(UntrackUrl $parameters)
    {
      return $this->__soapCall('UntrackUrl', array($parameters));
    }

    /**
     * Sends a BAT on all the segments of a campaign
     *
     * @param SendBAT $parameters
     * @return SendBATResponse
     */
    public function SendBAT(SendBAT $parameters)
    {
      return $this->__soapCall('SendBAT', array($parameters));
    }

    /**
     * Sends a BAT on one segment of a campaign
     *
     * @param SendSegmentBAT $parameters
     * @return SendSegmentBATResponse
     */
    public function SendSegmentBAT(SendSegmentBAT $parameters)
    {
      return $this->__soapCall('SendSegmentBAT', array($parameters));
    }

    /**
     * Schedules a campaign for a number of different dates (=calendar type schedule)
     *
     * @param Schedule $parameters
     * @return ScheduleResponse
     */
    public function Schedule(Schedule $parameters)
    {
      return $this->__soapCall('Schedule', array($parameters));
    }

    /**
     * Mail a campaign now (within 30+s) or put a campaign on hold
     *
     * @param Play $parameters
     * @return PlayResponse
     */
    public function Play(Play $parameters)
    {
      return $this->__soapCall('Play', array($parameters));
    }

    /**
     * Puts a programme or a mailing within a campaign on hold
     *
     * @param Pause $parameters
     * @return PauseResponse
     */
    public function Pause(Pause $parameters)
    {
      return $this->__soapCall('Pause', array($parameters));
    }

    /**
     * Cancels a programme or stops a mailing within a campaign
     *
     * @param Stop $parameters
     * @return StopResponse
     */
    public function Stop(Stop $parameters)
    {
      return $this->__soapCall('Stop', array($parameters));
    }

    /**
     * Lists the campaigns with scheduling info and nb of sendings.
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

}
