<?php
/**
 * Room
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
 * Room Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Room implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'numeric_id' => 'string',
        'name' => 'string',
        'origin_pop_id' => 'int',
        'is_large_meeting' => 'bool',
        'show_video_animations' => 'bool',
        'background_image' => 'string',
        'is_moderator_less' => 'bool',
        'welcome_message' => 'string',
        'disallow_chat' => 'bool',
        'encryption_type' => 'string',
        'show_all_participants_in_ics' => 'bool',
        'participant_passcode' => 'string',
        'publish_meeting' => 'bool',
        'moderator_less' => 'bool',
        'video_best_fit' => 'bool',
        'mute_participants_on_entry' => 'bool',
        'enforce_meeting_encryption' => 'bool',
        'enforce_meeting_encryption_allow_pstn' => 'bool',
        'idle_timeout' => 'int',
        'default_layout' => 'string',
        'play_audio_alerts' => 'bool',
        'personal_meeting_id' => 'int',
        'moderator_passcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'numeric_id' => null,
        'name' => null,
        'origin_pop_id' => null,
        'is_large_meeting' => null,
        'show_video_animations' => null,
        'background_image' => null,
        'is_moderator_less' => null,
        'welcome_message' => null,
        'disallow_chat' => null,
        'encryption_type' => null,
        'show_all_participants_in_ics' => null,
        'participant_passcode' => null,
        'publish_meeting' => null,
        'moderator_less' => null,
        'video_best_fit' => null,
        'mute_participants_on_entry' => null,
        'enforce_meeting_encryption' => null,
        'enforce_meeting_encryption_allow_pstn' => null,
        'idle_timeout' => null,
        'default_layout' => null,
        'play_audio_alerts' => null,
        'personal_meeting_id' => null,
        'moderator_passcode' => null
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
        'numeric_id' => 'numericId',
        'name' => 'name',
        'origin_pop_id' => 'originPopId',
        'is_large_meeting' => 'isLargeMeeting',
        'show_video_animations' => 'showVideoAnimations',
        'background_image' => 'backgroundImage',
        'is_moderator_less' => 'isModeratorLess',
        'welcome_message' => 'welcomeMessage',
        'disallow_chat' => 'disallowChat',
        'encryption_type' => 'encryptionType',
        'show_all_participants_in_ics' => 'showAllParticipantsInIcs',
        'participant_passcode' => 'participantPasscode',
        'publish_meeting' => 'publishMeeting',
        'moderator_less' => 'moderatorLess',
        'video_best_fit' => 'videoBestFit',
        'mute_participants_on_entry' => 'muteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'enforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'enforceMeetingEncryptionAllowPSTN',
        'idle_timeout' => 'idleTimeout',
        'default_layout' => 'defaultLayout',
        'play_audio_alerts' => 'playAudioAlerts',
        'personal_meeting_id' => 'personalMeetingId',
        'moderator_passcode' => 'moderatorPasscode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'numeric_id' => 'setNumericId',
        'name' => 'setName',
        'origin_pop_id' => 'setOriginPopId',
        'is_large_meeting' => 'setIsLargeMeeting',
        'show_video_animations' => 'setShowVideoAnimations',
        'background_image' => 'setBackgroundImage',
        'is_moderator_less' => 'setIsModeratorLess',
        'welcome_message' => 'setWelcomeMessage',
        'disallow_chat' => 'setDisallowChat',
        'encryption_type' => 'setEncryptionType',
        'show_all_participants_in_ics' => 'setShowAllParticipantsInIcs',
        'participant_passcode' => 'setParticipantPasscode',
        'publish_meeting' => 'setPublishMeeting',
        'moderator_less' => 'setModeratorLess',
        'video_best_fit' => 'setVideoBestFit',
        'mute_participants_on_entry' => 'setMuteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'setEnforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'setEnforceMeetingEncryptionAllowPstn',
        'idle_timeout' => 'setIdleTimeout',
        'default_layout' => 'setDefaultLayout',
        'play_audio_alerts' => 'setPlayAudioAlerts',
        'personal_meeting_id' => 'setPersonalMeetingId',
        'moderator_passcode' => 'setModeratorPasscode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'numeric_id' => 'getNumericId',
        'name' => 'getName',
        'origin_pop_id' => 'getOriginPopId',
        'is_large_meeting' => 'getIsLargeMeeting',
        'show_video_animations' => 'getShowVideoAnimations',
        'background_image' => 'getBackgroundImage',
        'is_moderator_less' => 'getIsModeratorLess',
        'welcome_message' => 'getWelcomeMessage',
        'disallow_chat' => 'getDisallowChat',
        'encryption_type' => 'getEncryptionType',
        'show_all_participants_in_ics' => 'getShowAllParticipantsInIcs',
        'participant_passcode' => 'getParticipantPasscode',
        'publish_meeting' => 'getPublishMeeting',
        'moderator_less' => 'getModeratorLess',
        'video_best_fit' => 'getVideoBestFit',
        'mute_participants_on_entry' => 'getMuteParticipantsOnEntry',
        'enforce_meeting_encryption' => 'getEnforceMeetingEncryption',
        'enforce_meeting_encryption_allow_pstn' => 'getEnforceMeetingEncryptionAllowPstn',
        'idle_timeout' => 'getIdleTimeout',
        'default_layout' => 'getDefaultLayout',
        'play_audio_alerts' => 'getPlayAudioAlerts',
        'personal_meeting_id' => 'getPersonalMeetingId',
        'moderator_passcode' => 'getModeratorPasscode'
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
        $this->container['numeric_id'] = isset($data['numeric_id']) ? $data['numeric_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['origin_pop_id'] = isset($data['origin_pop_id']) ? $data['origin_pop_id'] : null;
        $this->container['is_large_meeting'] = isset($data['is_large_meeting']) ? $data['is_large_meeting'] : null;
        $this->container['show_video_animations'] = isset($data['show_video_animations']) ? $data['show_video_animations'] : null;
        $this->container['background_image'] = isset($data['background_image']) ? $data['background_image'] : null;
        $this->container['is_moderator_less'] = isset($data['is_moderator_less']) ? $data['is_moderator_less'] : null;
        $this->container['welcome_message'] = isset($data['welcome_message']) ? $data['welcome_message'] : null;
        $this->container['disallow_chat'] = isset($data['disallow_chat']) ? $data['disallow_chat'] : null;
        $this->container['encryption_type'] = isset($data['encryption_type']) ? $data['encryption_type'] : null;
        $this->container['show_all_participants_in_ics'] = isset($data['show_all_participants_in_ics']) ? $data['show_all_participants_in_ics'] : null;
        $this->container['participant_passcode'] = isset($data['participant_passcode']) ? $data['participant_passcode'] : null;
        $this->container['publish_meeting'] = isset($data['publish_meeting']) ? $data['publish_meeting'] : null;
        $this->container['moderator_less'] = isset($data['moderator_less']) ? $data['moderator_less'] : null;
        $this->container['video_best_fit'] = isset($data['video_best_fit']) ? $data['video_best_fit'] : null;
        $this->container['mute_participants_on_entry'] = isset($data['mute_participants_on_entry']) ? $data['mute_participants_on_entry'] : null;
        $this->container['enforce_meeting_encryption'] = isset($data['enforce_meeting_encryption']) ? $data['enforce_meeting_encryption'] : null;
        $this->container['enforce_meeting_encryption_allow_pstn'] = isset($data['enforce_meeting_encryption_allow_pstn']) ? $data['enforce_meeting_encryption_allow_pstn'] : null;
        $this->container['idle_timeout'] = isset($data['idle_timeout']) ? $data['idle_timeout'] : null;
        $this->container['default_layout'] = isset($data['default_layout']) ? $data['default_layout'] : null;
        $this->container['play_audio_alerts'] = isset($data['play_audio_alerts']) ? $data['play_audio_alerts'] : null;
        $this->container['personal_meeting_id'] = isset($data['personal_meeting_id']) ? $data['personal_meeting_id'] : null;
        $this->container['moderator_passcode'] = isset($data['moderator_passcode']) ? $data['moderator_passcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param int $id Unique identifier for room.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets numeric_id
     *
     * @return string
     */
    public function getNumericId()
    {
        return $this->container['numeric_id'];
    }

    /**
     * Sets numeric_id
     *
     * @param string $numeric_id Unique identifier for room.
     *
     * @return $this
     */
    public function setNumericId($numeric_id)
    {
        $this->container['numeric_id'] = $numeric_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the room.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets origin_pop_id
     *
     * @return int
     */
    public function getOriginPopId()
    {
        return $this->container['origin_pop_id'];
    }

    /**
     * Sets origin_pop_id
     *
     * @param int $origin_pop_id origin_pop_id
     *
     * @return $this
     */
    public function setOriginPopId($origin_pop_id)
    {
        $this->container['origin_pop_id'] = $origin_pop_id;

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
     * @param bool $is_large_meeting is_large_meeting
     *
     * @return $this
     */
    public function setIsLargeMeeting($is_large_meeting)
    {
        $this->container['is_large_meeting'] = $is_large_meeting;

        return $this;
    }

    /**
     * Gets show_video_animations
     *
     * @return bool
     */
    public function getShowVideoAnimations()
    {
        return $this->container['show_video_animations'];
    }

    /**
     * Sets show_video_animations
     *
     * @param bool $show_video_animations show_video_animations
     *
     * @return $this
     */
    public function setShowVideoAnimations($show_video_animations)
    {
        $this->container['show_video_animations'] = $show_video_animations;

        return $this;
    }

    /**
     * Gets background_image
     *
     * @return string
     */
    public function getBackgroundImage()
    {
        return $this->container['background_image'];
    }

    /**
     * Sets background_image
     *
     * @param string $background_image background_image
     *
     * @return $this
     */
    public function setBackgroundImage($background_image)
    {
        $this->container['background_image'] = $background_image;

        return $this;
    }

    /**
     * Gets is_moderator_less
     *
     * @return bool
     */
    public function getIsModeratorLess()
    {
        return $this->container['is_moderator_less'];
    }

    /**
     * Sets is_moderator_less
     *
     * @param bool $is_moderator_less is_moderator_less
     *
     * @return $this
     */
    public function setIsModeratorLess($is_moderator_less)
    {
        $this->container['is_moderator_less'] = $is_moderator_less;

        return $this;
    }

    /**
     * Gets welcome_message
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->container['welcome_message'];
    }

    /**
     * Sets welcome_message
     *
     * @param string $welcome_message welcome_message
     *
     * @return $this
     */
    public function setWelcomeMessage($welcome_message)
    {
        $this->container['welcome_message'] = $welcome_message;

        return $this;
    }

    /**
     * Gets disallow_chat
     *
     * @return bool
     */
    public function getDisallowChat()
    {
        return $this->container['disallow_chat'];
    }

    /**
     * Sets disallow_chat
     *
     * @param bool $disallow_chat disallow_chat
     *
     * @return $this
     */
    public function setDisallowChat($disallow_chat)
    {
        $this->container['disallow_chat'] = $disallow_chat;

        return $this;
    }

    /**
     * Gets encryption_type
     *
     * @return string
     */
    public function getEncryptionType()
    {
        return $this->container['encryption_type'];
    }

    /**
     * Sets encryption_type
     *
     * @param string $encryption_type encryption_type
     *
     * @return $this
     */
    public function setEncryptionType($encryption_type)
    {
        $this->container['encryption_type'] = $encryption_type;

        return $this;
    }

    /**
     * Gets show_all_participants_in_ics
     *
     * @return bool
     */
    public function getShowAllParticipantsInIcs()
    {
        return $this->container['show_all_participants_in_ics'];
    }

    /**
     * Sets show_all_participants_in_ics
     *
     * @param bool $show_all_participants_in_ics show_all_participants_in_ics
     *
     * @return $this
     */
    public function setShowAllParticipantsInIcs($show_all_participants_in_ics)
    {
        $this->container['show_all_participants_in_ics'] = $show_all_participants_in_ics;

        return $this;
    }

    /**
     * Gets participant_passcode
     *
     * @return string
     */
    public function getParticipantPasscode()
    {
        return $this->container['participant_passcode'];
    }

    /**
     * Sets participant_passcode
     *
     * @param string $participant_passcode participant_passcode
     *
     * @return $this
     */
    public function setParticipantPasscode($participant_passcode)
    {
        $this->container['participant_passcode'] = $participant_passcode;

        return $this;
    }

    /**
     * Gets publish_meeting
     *
     * @return bool
     */
    public function getPublishMeeting()
    {
        return $this->container['publish_meeting'];
    }

    /**
     * Sets publish_meeting
     *
     * @param bool $publish_meeting publish_meeting
     *
     * @return $this
     */
    public function setPublishMeeting($publish_meeting)
    {
        $this->container['publish_meeting'] = $publish_meeting;

        return $this;
    }

    /**
     * Gets moderator_less
     *
     * @return bool
     */
    public function getModeratorLess()
    {
        return $this->container['moderator_less'];
    }

    /**
     * Sets moderator_less
     *
     * @param bool $moderator_less moderator_less
     *
     * @return $this
     */
    public function setModeratorLess($moderator_less)
    {
        $this->container['moderator_less'] = $moderator_less;

        return $this;
    }

    /**
     * Gets video_best_fit
     *
     * @return bool
     */
    public function getVideoBestFit()
    {
        return $this->container['video_best_fit'];
    }

    /**
     * Sets video_best_fit
     *
     * @param bool $video_best_fit video_best_fit
     *
     * @return $this
     */
    public function setVideoBestFit($video_best_fit)
    {
        $this->container['video_best_fit'] = $video_best_fit;

        return $this;
    }

    /**
     * Gets mute_participants_on_entry
     *
     * @return bool
     */
    public function getMuteParticipantsOnEntry()
    {
        return $this->container['mute_participants_on_entry'];
    }

    /**
     * Sets mute_participants_on_entry
     *
     * @param bool $mute_participants_on_entry mute_participants_on_entry
     *
     * @return $this
     */
    public function setMuteParticipantsOnEntry($mute_participants_on_entry)
    {
        $this->container['mute_participants_on_entry'] = $mute_participants_on_entry;

        return $this;
    }

    /**
     * Gets enforce_meeting_encryption
     *
     * @return bool
     */
    public function getEnforceMeetingEncryption()
    {
        return $this->container['enforce_meeting_encryption'];
    }

    /**
     * Sets enforce_meeting_encryption
     *
     * @param bool $enforce_meeting_encryption enforce_meeting_encryption
     *
     * @return $this
     */
    public function setEnforceMeetingEncryption($enforce_meeting_encryption)
    {
        $this->container['enforce_meeting_encryption'] = $enforce_meeting_encryption;

        return $this;
    }

    /**
     * Gets enforce_meeting_encryption_allow_pstn
     *
     * @return bool
     */
    public function getEnforceMeetingEncryptionAllowPstn()
    {
        return $this->container['enforce_meeting_encryption_allow_pstn'];
    }

    /**
     * Sets enforce_meeting_encryption_allow_pstn
     *
     * @param bool $enforce_meeting_encryption_allow_pstn enforce_meeting_encryption_allow_pstn
     *
     * @return $this
     */
    public function setEnforceMeetingEncryptionAllowPstn($enforce_meeting_encryption_allow_pstn)
    {
        $this->container['enforce_meeting_encryption_allow_pstn'] = $enforce_meeting_encryption_allow_pstn;

        return $this;
    }

    /**
     * Gets idle_timeout
     *
     * @return int
     */
    public function getIdleTimeout()
    {
        return $this->container['idle_timeout'];
    }

    /**
     * Sets idle_timeout
     *
     * @param int $idle_timeout idle_timeout
     *
     * @return $this
     */
    public function setIdleTimeout($idle_timeout)
    {
        $this->container['idle_timeout'] = $idle_timeout;

        return $this;
    }

    /**
     * Gets default_layout
     *
     * @return string
     */
    public function getDefaultLayout()
    {
        return $this->container['default_layout'];
    }

    /**
     * Sets default_layout
     *
     * @param string $default_layout default_layout
     *
     * @return $this
     */
    public function setDefaultLayout($default_layout)
    {
        $this->container['default_layout'] = $default_layout;

        return $this;
    }

    /**
     * Gets play_audio_alerts
     *
     * @return bool
     */
    public function getPlayAudioAlerts()
    {
        return $this->container['play_audio_alerts'];
    }

    /**
     * Sets play_audio_alerts
     *
     * @param bool $play_audio_alerts play_audio_alerts
     *
     * @return $this
     */
    public function setPlayAudioAlerts($play_audio_alerts)
    {
        $this->container['play_audio_alerts'] = $play_audio_alerts;

        return $this;
    }

    /**
     * Gets personal_meeting_id
     *
     * @return int
     */
    public function getPersonalMeetingId()
    {
        return $this->container['personal_meeting_id'];
    }

    /**
     * Sets personal_meeting_id
     *
     * @param int $personal_meeting_id personal_meeting_id
     *
     * @return $this
     */
    public function setPersonalMeetingId($personal_meeting_id)
    {
        $this->container['personal_meeting_id'] = $personal_meeting_id;

        return $this;
    }

    /**
     * Gets moderator_passcode
     *
     * @return string
     */
    public function getModeratorPasscode()
    {
        return $this->container['moderator_passcode'];
    }

    /**
     * Sets moderator_passcode
     *
     * @param string $moderator_passcode moderator_passcode
     *
     * @return $this
     */
    public function setModeratorPasscode($moderator_passcode)
    {
        $this->container['moderator_passcode'] = $moderator_passcode;

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


