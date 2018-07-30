<?php
/**
 * HistoryItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ID4i API
 *
 * ID4i HTTP API
 *
 * OpenAPI spec version: 0.8.6-SNAPSHOT
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HistoryItem Class Doc Comment
 *
 * @category Class
 * @description GUID history item
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HistoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_properties' => 'map[string,string]',
        'organization_id' => 'string',
        'sequence_id' => 'int',
        'timestamp' => 'int',
        'type' => 'string',
        'visibility' => '\Swagger\Client\Model\Visibility'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_properties' => null,
        'organization_id' => null,
        'sequence_id' => 'int32',
        'timestamp' => 'int64',
        'type' => null,
        'visibility' => null
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
        'additional_properties' => 'additionalProperties',
        'organization_id' => 'organizationId',
        'sequence_id' => 'sequenceId',
        'timestamp' => 'timestamp',
        'type' => 'type',
        'visibility' => 'visibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_properties' => 'setAdditionalProperties',
        'organization_id' => 'setOrganizationId',
        'sequence_id' => 'setSequenceId',
        'timestamp' => 'setTimestamp',
        'type' => 'setType',
        'visibility' => 'setVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_properties' => 'getAdditionalProperties',
        'organization_id' => 'getOrganizationId',
        'sequence_id' => 'getSequenceId',
        'timestamp' => 'getTimestamp',
        'type' => 'getType',
        'visibility' => 'getVisibility'
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

    const TYPE_CREATED = 'CREATED';
    const TYPE_DESTROYED = 'DESTROYED';
    const TYPE_RECYCLED = 'RECYCLED';
    const TYPE_SHIPMENT_PREPARED = 'SHIPMENT_PREPARED';
    const TYPE_STORED = 'STORED';
    const TYPE_RETRIEVED_FROM_STORAGE = 'RETRIEVED_FROM_STORAGE';
    const TYPE_PACKAGED = 'PACKAGED';
    const TYPE_DISPATCHED = 'DISPATCHED';
    const TYPE_RECEIVED = 'RECEIVED';
    const TYPE_REPROCESSING_STARTED = 'REPROCESSING_STARTED';
    const TYPE_REPROCESSING_CANCELLED = 'REPROCESSING_CANCELLED';
    const TYPE_REPROCESSING_FINISHED = 'REPROCESSING_FINISHED';
    const TYPE_DISASSEMBLED = 'DISASSEMBLED';
    const TYPE_MAINTENANCE_STARTED = 'MAINTENANCE_STARTED';
    const TYPE_MAINTENANCE_CANCELLED = 'MAINTENANCE_CANCELLED';
    const TYPE_MAINTENANCE_FINISHED = 'MAINTENANCE_FINISHED';
    const TYPE_PRODUCTION_STEP_STARTED = 'PRODUCTION_STEP_STARTED';
    const TYPE_PRODUCTION_STEP_CANCELLED = 'PRODUCTION_STEP_CANCELLED';
    const TYPE_PRODUCTION_STEP_FINISHED = 'PRODUCTION_STEP_FINISHED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREATED,
            self::TYPE_DESTROYED,
            self::TYPE_RECYCLED,
            self::TYPE_SHIPMENT_PREPARED,
            self::TYPE_STORED,
            self::TYPE_RETRIEVED_FROM_STORAGE,
            self::TYPE_PACKAGED,
            self::TYPE_DISPATCHED,
            self::TYPE_RECEIVED,
            self::TYPE_REPROCESSING_STARTED,
            self::TYPE_REPROCESSING_CANCELLED,
            self::TYPE_REPROCESSING_FINISHED,
            self::TYPE_DISASSEMBLED,
            self::TYPE_MAINTENANCE_STARTED,
            self::TYPE_MAINTENANCE_CANCELLED,
            self::TYPE_MAINTENANCE_FINISHED,
            self::TYPE_PRODUCTION_STEP_STARTED,
            self::TYPE_PRODUCTION_STEP_CANCELLED,
            self::TYPE_PRODUCTION_STEP_FINISHED,
        ];
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
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['sequence_id'] = isset($data['sequence_id']) ? $data['sequence_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['organization_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets additional_properties
     *
     * @return map[string,string]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param map[string,string] $additional_properties History items custom additional properties
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id Originator of the history item
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets sequence_id
     *
     * @return int
     */
    public function getSequenceId()
    {
        return $this->container['sequence_id'];
    }

    /**
     * Sets sequence_id
     *
     * @param int $sequence_id Forms the primary key of the history item together with the GUID and the organizationId
     *
     * @return $this
     */
    public function setSequenceId($sequence_id)
    {
        $this->container['sequence_id'] = $sequence_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp History item timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the history item
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \Swagger\Client\Model\Visibility
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \Swagger\Client\Model\Visibility $visibility History item visibility restrictions
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

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


