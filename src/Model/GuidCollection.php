<?php
/**
 * GuidCollection
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bluerain\ID4iClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ID4i API
 *
 * ID4i HTTP API
 *
 * OpenAPI spec version: 1.0.2-SNAPSHOT
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bluerain\ID4iClient\Model;

use \ArrayAccess;
use \Bluerain\ID4iClient\ObjectSerializer;

/**
 * GuidCollection Class Doc Comment
 *
 * @category Class
 * @package  Bluerain\ID4iClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuidCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GuidCollection';

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
        'physical_state' => 'string',
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
        'physical_state' => null,
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
        'physical_state' => 'physicalState',
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
        'physical_state' => 'setPhysicalState',
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
        'physical_state' => 'getPhysicalState',
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

    const PHYSICAL_STATE_UNATTACHED = 'UNATTACHED';
    const PHYSICAL_STATE_ATTACHED = 'ATTACHED';
    const PHYSICAL_STATE_DETACHED = 'DETACHED';
    const TYPE_ROUTING_COLLECTION = 'ROUTING_COLLECTION';
    const TYPE_LOGISTIC_COLLECTION = 'LOGISTIC_COLLECTION';
    const TYPE_LABELLED_COLLECTION = 'LABELLED_COLLECTION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhysicalStateAllowableValues()
    {
        return [
            self::PHYSICAL_STATE_UNATTACHED,
            self::PHYSICAL_STATE_ATTACHED,
            self::PHYSICAL_STATE_DETACHED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
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
        $this->container['physical_state'] = isset($data['physical_state']) ? $data['physical_state'] : null;
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

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 128)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 5)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 5.";
        }

        $allowedValues = $this->getPhysicalStateAllowableValues();
        if (!is_null($this->container['physical_state']) && !in_array($this->container['physical_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'physical_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
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
        return count($this->listInvalidProperties()) === 0;
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
     * @param int $created_timestamp The UTC unix timestamp of when this collection has been created
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
     * @param string $holder_organization_id Organization namespace of the holder of the collection
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
        if (!is_null($label) && (mb_strlen($label) > 128)) {
            throw new \InvalidArgumentException('invalid length for $label when calling GuidCollection., must be smaller than or equal to 128.');
        }
        if (!is_null($label) && (mb_strlen($label) < 5)) {
            throw new \InvalidArgumentException('invalid length for $label when calling GuidCollection., must be bigger than or equal to 5.');
        }

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
     * @param string $owner_organization_id Organization namespace of the collection owner
     *
     * @return $this
     */
    public function setOwnerOrganizationId($owner_organization_id)
    {
        $this->container['owner_organization_id'] = $owner_organization_id;

        return $this;
    }

    /**
     * Gets physical_state
     *
     * @return string
     */
    public function getPhysicalState()
    {
        return $this->container['physical_state'];
    }

    /**
     * Sets physical_state
     *
     * @param string $physical_state Physical attachment state of the collection
     *
     * @return $this
     */
    public function setPhysicalState($physical_state)
    {
        $allowedValues = $this->getPhysicalStateAllowableValues();
        if (!is_null($physical_state) && !in_array($physical_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'physical_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['physical_state'] = $physical_state;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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


