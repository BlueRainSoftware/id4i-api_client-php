<?php
/**
 * Id4nPresentation
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
 * OpenAPI spec version: 0.8.4-SNAPSHOT
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
 * Id4nPresentation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Id4nPresentation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Id4nPresentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_timestamp' => 'int',
        'holder_organization_id' => 'string',
        'id4n' => 'string',
        'label' => 'string',
        'owner_organization_id' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_timestamp' => 'int64',
        'holder_organization_id' => null,
        'id4n' => null,
        'label' => null,
        'owner_organization_id' => null,
        'type' => null
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
        'created_timestamp' => 'createdTimestamp',
        'holder_organization_id' => 'holderOrganizationId',
        'id4n' => 'id4n',
        'label' => 'label',
        'owner_organization_id' => 'ownerOrganizationId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_timestamp' => 'setCreatedTimestamp',
        'holder_organization_id' => 'setHolderOrganizationId',
        'id4n' => 'setId4n',
        'label' => 'setLabel',
        'owner_organization_id' => 'setOwnerOrganizationId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_timestamp' => 'getCreatedTimestamp',
        'holder_organization_id' => 'getHolderOrganizationId',
        'id4n' => 'getId4n',
        'label' => 'getLabel',
        'owner_organization_id' => 'getOwnerOrganizationId',
        'type' => 'getType'
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

    const TYPE_GUID = 'GUID';
    const TYPE_ROUTING_COLLECTION = 'ROUTING_COLLECTION';
    const TYPE_LOGISTIC_COLLECTION = 'LOGISTIC_COLLECTION';
    const TYPE_LABELLED_COLLECTION = 'LABELLED_COLLECTION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_GUID,
            self::TYPE_ROUTING_COLLECTION,
            self::TYPE_LOGISTIC_COLLECTION,
            self::TYPE_LABELLED_COLLECTION,
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
        $this->container['created_timestamp'] = isset($data['created_timestamp']) ? $data['created_timestamp'] : null;
        $this->container['holder_organization_id'] = isset($data['holder_organization_id']) ? $data['holder_organization_id'] : null;
        $this->container['id4n'] = isset($data['id4n']) ? $data['id4n'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['owner_organization_id'] = isset($data['owner_organization_id']) ? $data['owner_organization_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_timestamp'] === null) {
            $invalidProperties[] = "'created_timestamp' can't be null";
        }
        if ($this->container['id4n'] === null) {
            $invalidProperties[] = "'id4n' can't be null";
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

        if ($this->container['created_timestamp'] === null) {
            return false;
        }
        if ($this->container['id4n'] === null) {
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
     * Gets created_timestamp
     *
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param int $created_timestamp The UTC unix timestamp of when this ID has been created
     *
     * @return $this
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets holder_organization_id
     *
     * @return string
     */
    public function getHolderOrganizationId()
    {
        return $this->container['holder_organization_id'];
    }

    /**
     * Sets holder_organization_id
     *
     * @param string $holder_organization_id ${Id4nPresentation.Guid.holderOrganizationId}
     *
     * @return $this
     */
    public function setHolderOrganizationId($holder_organization_id)
    {
        $this->container['holder_organization_id'] = $holder_organization_id;

        return $this;
    }

    /**
     * Gets id4n
     *
     * @return string
     */
    public function getId4n()
    {
        return $this->container['id4n'];
    }

    /**
     * Sets id4n
     *
     * @param string $id4n The ID
     *
     * @return $this
     */
    public function setId4n($id4n)
    {
        $this->container['id4n'] = $id4n;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets owner_organization_id
     *
     * @return string
     */
    public function getOwnerOrganizationId()
    {
        return $this->container['owner_organization_id'];
    }

    /**
     * Sets owner_organization_id
     *
     * @param string $owner_organization_id ${Id4nPresentation.Guid.ownerOrganizationId}
     *
     * @return $this
     */
    public function setOwnerOrganizationId($owner_organization_id)
    {
        $this->container['owner_organization_id'] = $owner_organization_id;

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
     * @param string $type The type of ID
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


