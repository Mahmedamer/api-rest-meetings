<?php
/**
 * MeetingDeprecated
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr>
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * MeetingDeprecated Class Doc Comment
 *
 * @category Class
 * @description DEPRECATED (2/5/2018) -- This JSON object contains the fields associated with a BlueJeans&#39;meeting.
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingDeprecated implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingDeprecated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'start' => 'int',
        'end' => 'int',
        'timezone' => 'string',
        'numeric_meeting_id' => 'string',
        'attendee_passcode' => 'string',
        'is_personal_meeting' => 'bool',
        'is_large_meeting' => 'bool',
        'add_attendee_passcode' => 'bool',
        'end_point_version' => 'string',
        'end_point_type' => 'string',
        'attendees' => '\BlueJeansMeetingsRestApi\Model\Attendee[]',
        'advanced_meeting_options' => '\BlueJeansMeetingsRestApi\Model\MeetingDeprecatedAdvancedMeetingOptions',
        'recurrence_pattern' => '\BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'description' => null,
        'start' => 'int64',
        'end' => 'int64',
        'timezone' => null,
        'numeric_meeting_id' => null,
        'attendee_passcode' => null,
        'is_personal_meeting' => null,
        'is_large_meeting' => null,
        'add_attendee_passcode' => null,
        'end_point_version' => null,
        'end_point_type' => null,
        'attendees' => null,
        'advanced_meeting_options' => null,
        'recurrence_pattern' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'description' => 'description',
        'start' => 'start',
        'end' => 'end',
        'timezone' => 'timezone',
        'numeric_meeting_id' => 'numericMeetingId',
        'attendee_passcode' => 'attendeePasscode',
        'is_personal_meeting' => 'isPersonalMeeting',
        'is_large_meeting' => 'isLargeMeeting',
        'add_attendee_passcode' => 'addAttendeePasscode',
        'end_point_version' => 'endPointVersion',
        'end_point_type' => 'endPointType',
        'attendees' => 'attendees',
        'advanced_meeting_options' => 'advancedMeetingOptions',
        'recurrence_pattern' => 'recurrencePattern'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'start' => 'setStart',
        'end' => 'setEnd',
        'timezone' => 'setTimezone',
        'numeric_meeting_id' => 'setNumericMeetingId',
        'attendee_passcode' => 'setAttendeePasscode',
        'is_personal_meeting' => 'setIsPersonalMeeting',
        'is_large_meeting' => 'setIsLargeMeeting',
        'add_attendee_passcode' => 'setAddAttendeePasscode',
        'end_point_version' => 'setEndPointVersion',
        'end_point_type' => 'setEndPointType',
        'attendees' => 'setAttendees',
        'advanced_meeting_options' => 'setAdvancedMeetingOptions',
        'recurrence_pattern' => 'setRecurrencePattern'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'start' => 'getStart',
        'end' => 'getEnd',
        'timezone' => 'getTimezone',
        'numeric_meeting_id' => 'getNumericMeetingId',
        'attendee_passcode' => 'getAttendeePasscode',
        'is_personal_meeting' => 'getIsPersonalMeeting',
        'is_large_meeting' => 'getIsLargeMeeting',
        'add_attendee_passcode' => 'getAddAttendeePasscode',
        'end_point_version' => 'getEndPointVersion',
        'end_point_type' => 'getEndPointType',
        'attendees' => 'getAttendees',
        'advanced_meeting_options' => 'getAdvancedMeetingOptions',
        'recurrence_pattern' => 'getRecurrencePattern'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : 'My Test Meeting';
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : 'America/New_York';
        $this->container['numeric_meeting_id'] = isset($data['numeric_meeting_id']) ? $data['numeric_meeting_id'] : null;
        $this->container['attendee_passcode'] = isset($data['attendee_passcode']) ? $data['attendee_passcode'] : null;
        $this->container['is_personal_meeting'] = isset($data['is_personal_meeting']) ? $data['is_personal_meeting'] : false;
        $this->container['is_large_meeting'] = isset($data['is_large_meeting']) ? $data['is_large_meeting'] : null;
        $this->container['add_attendee_passcode'] = isset($data['add_attendee_passcode']) ? $data['add_attendee_passcode'] : null;
        $this->container['end_point_version'] = isset($data['end_point_version']) ? $data['end_point_version'] : '2.10';
        $this->container['end_point_type'] = isset($data['end_point_type']) ? $data['end_point_type'] : 'WEB_APP';
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['advanced_meeting_options'] = isset($data['advanced_meeting_options']) ? $data['advanced_meeting_options'] : null;
        $this->container['recurrence_pattern'] = isset($data['recurrence_pattern']) ? $data['recurrence_pattern'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['end_point_version'] === null) {
            $invalidProperties[] = "'end_point_version' can't be null";
        }
        if ($this->container['end_point_type'] === null) {
            $invalidProperties[] = "'end_point_type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique identifier for meeting.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start
     *
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param int $start A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return int
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param int $end A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets numeric_meeting_id
     *
     * @return string
     */
    public function getNumericMeetingId()
    {
        return $this->container['numeric_meeting_id'];
    }

    /**
     * Sets numeric_meeting_id
     *
     * @param string $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
     *
     * @return $this
     */
    public function setNumericMeetingId($numeric_meeting_id)
    {
        $this->container['numeric_meeting_id'] = $numeric_meeting_id;

        return $this;
    }

    /**
     * Gets attendee_passcode
     *
     * @return string
     */
    public function getAttendeePasscode()
    {
        return $this->container['attendee_passcode'];
    }

    /**
     * Sets attendee_passcode
     *
     * @param string $attendee_passcode attendee_passcode
     *
     * @return $this
     */
    public function setAttendeePasscode($attendee_passcode)
    {
        $this->container['attendee_passcode'] = $attendee_passcode;

        return $this;
    }

    /**
     * Gets is_personal_meeting
     *
     * @return bool
     */
    public function getIsPersonalMeeting()
    {
        return $this->container['is_personal_meeting'];
    }

    /**
     * Sets is_personal_meeting
     *
     * @param bool $is_personal_meeting Use the scheduler's personal meeting room and Id for this meeting.
     *
     * @return $this
     */
    public function setIsPersonalMeeting($is_personal_meeting)
    {
        $this->container['is_personal_meeting'] = $is_personal_meeting;

        return $this;
    }

    /**
     * Gets is_large_meeting
     *
     * @return bool
     */
    public function getIsLargeMeeting()
    {
        return $this->container['is_large_meeting'];
    }

    /**
     * Sets is_large_meeting
     *
     * @param bool $is_large_meeting If true, the meeting is assumed to be large and thus no announcement will be made when a participant joins.
     *
     * @return $this
     */
    public function setIsLargeMeeting($is_large_meeting)
    {
        $this->container['is_large_meeting'] = $is_large_meeting;

        return $this;
    }

    /**
     * Gets add_attendee_passcode
     *
     * @return bool
     */
    public function getAddAttendeePasscode()
    {
        return $this->container['add_attendee_passcode'];
    }

    /**
     * Sets add_attendee_passcode
     *
     * @param bool $add_attendee_passcode Indicate if you want the attendees to be forced to enter a passcode on entry for extra security. The passcode will be randomly generated at schedule and will be returned in attendeePasscode property of the meeting.
     *
     * @return $this
     */
    public function setAddAttendeePasscode($add_attendee_passcode)
    {
        $this->container['add_attendee_passcode'] = $add_attendee_passcode;

        return $this;
    }

    /**
     * Gets end_point_version
     *
     * @return string
     */
    public function getEndPointVersion()
    {
        return $this->container['end_point_version'];
    }

    /**
     * Sets end_point_version
     *
     * @param string $end_point_version end_point_version
     *
     * @return $this
     */
    public function setEndPointVersion($end_point_version)
    {
        $this->container['end_point_version'] = $end_point_version;

        return $this;
    }

    /**
     * Gets end_point_type
     *
     * @return string
     */
    public function getEndPointType()
    {
        return $this->container['end_point_type'];
    }

    /**
     * Sets end_point_type
     *
     * @param string $end_point_type end_point_type
     *
     * @return $this
     */
    public function setEndPointType($end_point_type)
    {
        $this->container['end_point_type'] = $end_point_type;

        return $this;
    }

    /**
     * Gets attendees
     *
     * @return \BlueJeansMeetingsRestApi\Model\Attendee[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param \BlueJeansMeetingsRestApi\Model\Attendee[] $attendees attendees
     *
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets advanced_meeting_options
     *
     * @return \BlueJeansMeetingsRestApi\Model\MeetingDeprecatedAdvancedMeetingOptions
     */
    public function getAdvancedMeetingOptions()
    {
        return $this->container['advanced_meeting_options'];
    }

    /**
     * Sets advanced_meeting_options
     *
     * @param \BlueJeansMeetingsRestApi\Model\MeetingDeprecatedAdvancedMeetingOptions $advanced_meeting_options advanced_meeting_options
     *
     * @return $this
     */
    public function setAdvancedMeetingOptions($advanced_meeting_options)
    {
        $this->container['advanced_meeting_options'] = $advanced_meeting_options;

        return $this;
    }

    /**
     * Gets recurrence_pattern
     *
     * @return \BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /**
     * Sets recurrence_pattern
     *
     * @param \BlueJeansMeetingsRestApi\Model\MeetingRecurrencePattern $recurrence_pattern recurrence_pattern
     *
     * @return $this
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


