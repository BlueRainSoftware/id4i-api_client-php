<?php
/**
 * ApiError
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
 * HTTP API Documentation for ID4i
 *
 * OpenAPI spec version: 0.2.2-SNAPSHOT
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.2.3
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
 * ApiError Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'error_id' => 'string',
        'error_list' => '\Swagger\Client\Model\ApiError[]',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'error_id' => null,
        'error_list' => null,
        'message' => null
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
        'code' => 'code',
        'error_id' => 'errorId',
        'error_list' => 'errorList',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'error_id' => 'setErrorId',
        'error_list' => 'setErrorList',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'error_id' => 'getErrorId',
        'error_list' => 'getErrorList',
        'message' => 'getMessage'
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

    const CODE_REGISTRATION_VERIFICATION_NO_TOKEN = 'ERR_REGISTRATION_VERIFICATION_NO_TOKEN';
    const CODE_REGISTRATION_VERIFICATION_INVALID_TOKEN = 'ERR_REGISTRATION_VERIFICATION_INVALID_TOKEN';
    const CODE_REGISTRATION_VERIFICATION_EXPIRED_TOKEN = 'ERR_REGISTRATION_VERIFICATION_EXPIRED_TOKEN';
    const CODE_AUTHENTICATION_NO_TOKEN = 'ERR_AUTHENTICATION_NO_TOKEN';
    const CODE_AUTHENTICATION_INVALID_TOKEN = 'ERR_AUTHENTICATION_INVALID_TOKEN';
    const CODE_AUTHENTICATION_EXPIRED_TOKEN = 'ERR_AUTHENTICATION_EXPIRED_TOKEN';
    const CODE_AUTHENTICATION_FAILED = 'ERR_AUTHENTICATION_FAILED';
    const CODE_AUTHORIZATION_MISSING_PRIVILEGES = 'ERR_AUTHORIZATION_MISSING_PRIVILEGES';
    const CODE_AUTHORIZATION_FORBIDDEN = 'ERR_AUTHORIZATION_FORBIDDEN';
    const CODE_INPUT_VALIDATION_FAILED = 'ERR_INPUT_VALIDATION_FAILED';
    const CODE_FIELD_INPUT_VALIDATION_FAILED = 'ERR_FIELD_INPUT_VALIDATION_FAILED';
    const CODE_VALIDATION_CONSTRAINT_FAILED = 'ERR_VALIDATION_CONSTRAINT_FAILED';
    const CODE_INPUT_NOT_READABLE = 'ERR_INPUT_NOT_READABLE';
    const CODE_INVALID_INPUT_PARAMETER = 'ERR_INVALID_INPUT_PARAMETER';
    const CODE_GUID_CREATION = 'ERR_GUID_CREATION';
    const CODE_INVALID_ID4_N_OBJECT_TYPE = 'ERR_INVALID_ID4N_OBJECT_TYPE';
    const CODE_COLLECTION_UPDATE_DENIED = 'ERR_COLLECTION_UPDATE_DENIED';
    const CODE_ENTITY_NOT_FOUND = 'ERR_ENTITY_NOT_FOUND';
    const CODE_ENTITY_TOO_BIG = 'ERR_ENTITY_TOO_BIG';
    const CODE_DUPLICATE = 'ERR_DUPLICATE';
    const CODE_INTERNAL = 'ERR_INTERNAL';
    const CODE_UNKNOWN = 'ERR_UNKNOWN';
    const CODE_INVALID_ORGANIZATION_USERROLE = 'ERR_INVALID_ORGANIZATION_USERROLE';
    const CODE_ORGANIZATION_ROLE_INCONSISTENCY = 'ERR_ORGANIZATION_ROLE_INCONSISTENCY';
    const CODE_ORGANIZATION_NOT_DELETABLE = 'ERR_ORGANIZATION_NOT_DELETABLE';
    const CODE_USER_ALREADY_IN_ORGANIZATION = 'ERR_USER_ALREADY_IN_ORGANIZATION';
    const CODE_USER_INVITATION_NEEDS_MINIMUM_ONE_ROLE = 'ERR_USER_INVITATION_NEEDS_MINIMUM_ONE_ROLE';
    const CODE_USER_INVITATION_SPECIFY_EMAIL_OR_USERNAME = 'ERR_USER_INVITATION_SPECIFY_EMAIL_OR_USERNAME';
    const CODE_LANGUAGE_NOT_SUPPORTED = 'ERR_LANGUAGE_NOT_SUPPORTED';
    const CODE_EMAIL_MISSING_TEMPLATE_PARAM = 'ERR_EMAIL_MISSING_TEMPLATE_PARAM';
    const CODE_EMAIL_TEMPLATE_NOT_AVAILABLE = 'ERR_EMAIL_TEMPLATE_NOT_AVAILABLE';
    const CODE_EMAIL_PREPARATION_FAILED = 'ERR_EMAIL_PREPARATION_FAILED';
    const CODE_IMAGE_CONVERSION = 'ERR_IMAGE_CONVERSION';
    const CODE_UPLOAD_TOO_LARGE = 'ERR_UPLOAD_TOO_LARGE';
    const CODE_INVALID_ALIAS_TYPE = 'ERR_INVALID_ALIAS_TYPE';
    const CODE_INVALID_URI_TEMPLATE = 'ERR_INVALID_URI_TEMPLATE';
    const CODE_INVALID_URI_TEMPLATE_VARIABLE = 'ERR_INVALID_URI_TEMPLATE_VARIABLE';
    const CODE_MODULE_NOT_ACTIVE = 'ERR_MODULE_NOT_ACTIVE';
    const CODE_INSECURE_PASSWORD_LENGTH = 'ERR_INSECURE_PASSWORD_LENGTH';
    const CODE_INSECURE_PASSWORD_CHARACTER_CLASSES = 'ERR_INSECURE_PASSWORD_CHARACTER_CLASSES';
    const CODE_INSECURE_PASSWORD_PATTERN = 'ERR_INSECURE_PASSWORD_PATTERN';
    const CODE_INSECURE_PASSWORD_SAME = 'ERR_INSECURE_PASSWORD_SAME';
    const CODE_INSECURE_PASSWORD_COMMON = 'ERR_INSECURE_PASSWORD_COMMON';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_REGISTRATION_VERIFICATION_NO_TOKEN,
            self::CODE_REGISTRATION_VERIFICATION_INVALID_TOKEN,
            self::CODE_REGISTRATION_VERIFICATION_EXPIRED_TOKEN,
            self::CODE_AUTHENTICATION_NO_TOKEN,
            self::CODE_AUTHENTICATION_INVALID_TOKEN,
            self::CODE_AUTHENTICATION_EXPIRED_TOKEN,
            self::CODE_AUTHENTICATION_FAILED,
            self::CODE_AUTHORIZATION_MISSING_PRIVILEGES,
            self::CODE_AUTHORIZATION_FORBIDDEN,
            self::CODE_INPUT_VALIDATION_FAILED,
            self::CODE_FIELD_INPUT_VALIDATION_FAILED,
            self::CODE_VALIDATION_CONSTRAINT_FAILED,
            self::CODE_INPUT_NOT_READABLE,
            self::CODE_INVALID_INPUT_PARAMETER,
            self::CODE_GUID_CREATION,
            self::CODE_INVALID_ID4_N_OBJECT_TYPE,
            self::CODE_COLLECTION_UPDATE_DENIED,
            self::CODE_ENTITY_NOT_FOUND,
            self::CODE_ENTITY_TOO_BIG,
            self::CODE_DUPLICATE,
            self::CODE_INTERNAL,
            self::CODE_UNKNOWN,
            self::CODE_INVALID_ORGANIZATION_USERROLE,
            self::CODE_ORGANIZATION_ROLE_INCONSISTENCY,
            self::CODE_ORGANIZATION_NOT_DELETABLE,
            self::CODE_USER_ALREADY_IN_ORGANIZATION,
            self::CODE_USER_INVITATION_NEEDS_MINIMUM_ONE_ROLE,
            self::CODE_USER_INVITATION_SPECIFY_EMAIL_OR_USERNAME,
            self::CODE_LANGUAGE_NOT_SUPPORTED,
            self::CODE_EMAIL_MISSING_TEMPLATE_PARAM,
            self::CODE_EMAIL_TEMPLATE_NOT_AVAILABLE,
            self::CODE_EMAIL_PREPARATION_FAILED,
            self::CODE_IMAGE_CONVERSION,
            self::CODE_UPLOAD_TOO_LARGE,
            self::CODE_INVALID_ALIAS_TYPE,
            self::CODE_INVALID_URI_TEMPLATE,
            self::CODE_INVALID_URI_TEMPLATE_VARIABLE,
            self::CODE_MODULE_NOT_ACTIVE,
            self::CODE_INSECURE_PASSWORD_LENGTH,
            self::CODE_INSECURE_PASSWORD_CHARACTER_CLASSES,
            self::CODE_INSECURE_PASSWORD_PATTERN,
            self::CODE_INSECURE_PASSWORD_SAME,
            self::CODE_INSECURE_PASSWORD_COMMON,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['error_id'] = isset($data['error_id']) ? $data['error_id'] : null;
        $this->container['error_list'] = isset($data['error_list']) ? $data['error_list'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($this->container['code'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
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

        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($this->container['code'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets error_id
     *
     * @return string
     */
    public function getErrorId()
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param string $error_id error_id
     *
     * @return $this
     */
    public function setErrorId($error_id)
    {
        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets error_list
     *
     * @return \Swagger\Client\Model\ApiError[]
     */
    public function getErrorList()
    {
        return $this->container['error_list'];
    }

    /**
     * Sets error_list
     *
     * @param \Swagger\Client\Model\ApiError[] $error_list error_list
     *
     * @return $this
     */
    public function setErrorList($error_list)
    {
        $this->container['error_list'] = $error_list;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


