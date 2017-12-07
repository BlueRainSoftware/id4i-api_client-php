<?php
/**
 * GuidCollection
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ID4i API
 *
 * HTTP API Documentation for ID4i
 *
 * OpenAPI spec version: 0.0.1-alpha
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GuidCollection Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GuidCollection implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GuidCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_timestamp' => 'int',
        'id4n' => 'string',
        'label' => 'string',
        'next_scan_ownership' => 'bool',
        'owner_organization_id' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_timestamp' => 'int64',
        'id4n' => null,
        'label' => null,
        'next_scan_ownership' => null,
        'owner_organization_id' => 'int64',
        'type' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'created_timestamp' => 'createdTimestamp',
        'id4n' => 'id4n',
        'label' => 'label',
        'next_scan_ownership' => 'nextScanOwnership',
        'owner_organization_id' => 'ownerOrganizationId',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created_timestamp' => 'setCreatedTimestamp',
        'id4n' => 'setId4n',
        'label' => 'setLabel',
        'next_scan_ownership' => 'setNextScanOwnership',
        'owner_organization_id' => 'setOwnerOrganizationId',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created_timestamp' => 'getCreatedTimestamp',
        'id4n' => 'getId4n',
        'label' => 'getLabel',
        'next_scan_ownership' => 'getNextScanOwnership',
        'owner_organization_id' => 'getOwnerOrganizationId',
        'type' => 'getType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_ROUTING_COLLECTION = 'ROUTING_COLLECTION';
    const TYPE_LOGISTIC_COLLECTION = 'LOGISTIC_COLLECTION';
    const TYPE_LABELLED_COLLECTION = 'LABELLED_COLLECTION';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ROUTING_COLLECTION,
            self::TYPE_LOGISTIC_COLLECTION,
            self::TYPE_LABELLED_COLLECTION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['created_timestamp'] = isset($data['created_timestamp']) ? $data['created_timestamp'] : null;
        $this->container['id4n'] = isset($data['id4n']) ? $data['id4n'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['next_scan_ownership'] = isset($data['next_scan_ownership']) ? $data['next_scan_ownership'] : null;
        $this->container['owner_organization_id'] = isset($data['owner_organization_id']) ? $data['owner_organization_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['label']) && (strlen($this->container['label']) > 128)) {
            $invalid_properties[] = "invalid value for 'label', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['label']) && (strlen($this->container['label']) < 5)) {
            $invalid_properties[] = "invalid value for 'label', the character length must be bigger than or equal to 5.";
        }

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['label']) > 128) {
            return false;
        }
        if (strlen($this->container['label']) < 5) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets created_timestamp
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     * @param int $created_timestamp
     * @return $this
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets id4n
     * @return string
     */
    public function getId4n()
    {
        return $this->container['id4n'];
    }

    /**
     * Sets id4n
     * @param string $id4n
     * @return $this
     */
    public function setId4n($id4n)
    {
        $this->container['id4n'] = $id4n;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        if (!is_null($label) && (strlen($label) > 128)) {
            throw new \InvalidArgumentException('invalid length for $label when calling GuidCollection., must be smaller than or equal to 128.');
        }
        if (!is_null($label) && (strlen($label) < 5)) {
            throw new \InvalidArgumentException('invalid length for $label when calling GuidCollection., must be bigger than or equal to 5.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets next_scan_ownership
     * @return bool
     */
    public function getNextScanOwnership()
    {
        return $this->container['next_scan_ownership'];
    }

    /**
     * Sets next_scan_ownership
     * @param bool $next_scan_ownership
     * @return $this
     */
    public function setNextScanOwnership($next_scan_ownership)
    {
        $this->container['next_scan_ownership'] = $next_scan_ownership;

        return $this;
    }

    /**
     * Gets owner_organization_id
     * @return int
     */
    public function getOwnerOrganizationId()
    {
        return $this->container['owner_organization_id'];
    }

    /**
     * Sets owner_organization_id
     * @param int $owner_organization_id
     * @return $this
     */
    public function setOwnerOrganizationId($owner_organization_id)
    {
        $this->container['owner_organization_id'] = $owner_organization_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


