<?php
/**
 * CreateGuidRequest
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
 * OpenAPI spec version: 0.9.1-SNAPSHOT
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
 * CreateGuidRequest Class Doc Comment
 *
 * @category Class
 * @description GUID creation information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateGuidRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateGuidRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'length' => 'int',
        'organization_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => 'int32',
        'length' => 'int32',
        'organization_id' => null
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
        'count' => 'count',
        'length' => 'length',
        'organization_id' => 'organizationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'length' => 'setLength',
        'organization_id' => 'setOrganizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'length' => 'getLength',
        'organization_id' => 'getOrganizationId'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if (($this->container['count'] > 1000)) {
            $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1000.";
        }

        if (($this->container['count'] < 1)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
        }

        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if (($this->container['length'] > 255)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 255.";
        }

        if (($this->container['length'] < 7)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 7.";
        }

        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
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

        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['count'] > 1000) {
            return false;
        }
        if ($this->container['count'] < 1) {
            return false;
        }
        if ($this->container['length'] === null) {
            return false;
        }
        if ($this->container['length'] > 255) {
            return false;
        }
        if ($this->container['length'] < 7) {
            return false;
        }
        if ($this->container['organization_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The total number of GUIDs to create
     *
     * @return $this
     */
    public function setCount($count)
    {

        if (($count > 1000)) {
            throw new \InvalidArgumentException('invalid value for $count when calling CreateGuidRequest., must be smaller than or equal to 1000.');
        }
        if (($count < 1)) {
            throw new \InvalidArgumentException('invalid value for $count when calling CreateGuidRequest., must be bigger than or equal to 1.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length The charactersequence length of the GUID
     *
     * @return $this
     */
    public function setLength($length)
    {

        if (($length > 255)) {
            throw new \InvalidArgumentException('invalid value for $length when calling CreateGuidRequest., must be smaller than or equal to 255.');
        }
        if (($length < 7)) {
            throw new \InvalidArgumentException('invalid value for $length when calling CreateGuidRequest., must be bigger than or equal to 7.');
        }

        $this->container['length'] = $length;

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
     * @param string $organization_id The namespace of the organization where the generated GUIDs should be assigned.
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

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


