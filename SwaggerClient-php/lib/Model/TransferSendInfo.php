<?php
/**
 * TransferSendInfo
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
 * OpenAPI spec version: 0.5.0
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
 * TransferSendInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferSendInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferSendInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'holder_organization_id' => 'int',
        'keep_ownership' => 'bool',
        'next_scan_ownership' => 'bool',
        'owner_organization_id' => 'int',
        'recipient_organization_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'holder_organization_id' => 'int64',
        'keep_ownership' => null,
        'next_scan_ownership' => null,
        'owner_organization_id' => 'int64',
        'recipient_organization_ids' => 'int64'
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
        'holder_organization_id' => 'holderOrganizationId',
        'keep_ownership' => 'keepOwnership',
        'next_scan_ownership' => 'nextScanOwnership',
        'owner_organization_id' => 'ownerOrganizationId',
        'recipient_organization_ids' => 'recipientOrganizationIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'holder_organization_id' => 'setHolderOrganizationId',
        'keep_ownership' => 'setKeepOwnership',
        'next_scan_ownership' => 'setNextScanOwnership',
        'owner_organization_id' => 'setOwnerOrganizationId',
        'recipient_organization_ids' => 'setRecipientOrganizationIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'holder_organization_id' => 'getHolderOrganizationId',
        'keep_ownership' => 'getKeepOwnership',
        'next_scan_ownership' => 'getNextScanOwnership',
        'owner_organization_id' => 'getOwnerOrganizationId',
        'recipient_organization_ids' => 'getRecipientOrganizationIds'
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
        $this->container['holder_organization_id'] = isset($data['holder_organization_id']) ? $data['holder_organization_id'] : null;
        $this->container['keep_ownership'] = isset($data['keep_ownership']) ? $data['keep_ownership'] : null;
        $this->container['next_scan_ownership'] = isset($data['next_scan_ownership']) ? $data['next_scan_ownership'] : null;
        $this->container['owner_organization_id'] = isset($data['owner_organization_id']) ? $data['owner_organization_id'] : null;
        $this->container['recipient_organization_ids'] = isset($data['recipient_organization_ids']) ? $data['recipient_organization_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['keep_ownership'] === null) {
            $invalidProperties[] = "'keep_ownership' can't be null";
        }
        if ($this->container['next_scan_ownership'] === null) {
            $invalidProperties[] = "'next_scan_ownership' can't be null";
        }
        if ($this->container['recipient_organization_ids'] === null) {
            $invalidProperties[] = "'recipient_organization_ids' can't be null";
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

        if ($this->container['keep_ownership'] === null) {
            return false;
        }
        if ($this->container['next_scan_ownership'] === null) {
            return false;
        }
        if ($this->container['recipient_organization_ids'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets holder_organization_id
     *
     * @return int
     */
    public function getHolderOrganizationId()
    {
        return $this->container['holder_organization_id'];
    }

    /**
     * Sets holder_organization_id
     *
     * @param int $holder_organization_id The current holder of the object
     *
     * @return $this
     */
    public function setHolderOrganizationId($holder_organization_id)
    {
        $this->container['holder_organization_id'] = $holder_organization_id;

        return $this;
    }

    /**
     * Gets keep_ownership
     *
     * @return bool
     */
    public function getKeepOwnership()
    {
        return $this->container['keep_ownership'];
    }

    /**
     * Sets keep_ownership
     *
     * @param bool $keep_ownership Keep the public ownership while transferring the object
     *
     * @return $this
     */
    public function setKeepOwnership($keep_ownership)
    {
        $this->container['keep_ownership'] = $keep_ownership;

        return $this;
    }

    /**
     * Gets next_scan_ownership
     *
     * @return bool
     */
    public function getNextScanOwnership()
    {
        return $this->container['next_scan_ownership'];
    }

    /**
     * Sets next_scan_ownership
     *
     * @param bool $next_scan_ownership Allow anyone which scans or knows the ID4N to obtain this object
     *
     * @return $this
     */
    public function setNextScanOwnership($next_scan_ownership)
    {
        $this->container['next_scan_ownership'] = $next_scan_ownership;

        return $this;
    }

    /**
     * Gets owner_organization_id
     *
     * @return int
     */
    public function getOwnerOrganizationId()
    {
        return $this->container['owner_organization_id'];
    }

    /**
     * Sets owner_organization_id
     *
     * @param int $owner_organization_id The current publicly visible owner of the object
     *
     * @return $this
     */
    public function setOwnerOrganizationId($owner_organization_id)
    {
        $this->container['owner_organization_id'] = $owner_organization_id;

        return $this;
    }

    /**
     * Gets recipient_organization_ids
     *
     * @return int[]
     */
    public function getRecipientOrganizationIds()
    {
        return $this->container['recipient_organization_ids'];
    }

    /**
     * Sets recipient_organization_ids
     *
     * @param int[] $recipient_organization_ids Allow only these organizations to obtain this object
     *
     * @return $this
     */
    public function setRecipientOrganizationIds($recipient_organization_ids)
    {
        $this->container['recipient_organization_ids'] = $recipient_organization_ids;

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


