<?php
/**
 * URL
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
 * OpenAPI spec version: 0.9.4-SNAPSHOT
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
 * URL Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class URL implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'URL';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authority' => 'string',
        'content' => 'object',
        'default_port' => 'int',
        'file' => 'string',
        'host' => 'string',
        'path' => 'string',
        'port' => 'int',
        'protocol' => 'string',
        'query' => 'string',
        'ref' => 'string',
        'user_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authority' => null,
        'content' => null,
        'default_port' => 'int32',
        'file' => null,
        'host' => null,
        'path' => null,
        'port' => 'int32',
        'protocol' => null,
        'query' => null,
        'ref' => null,
        'user_info' => null
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
        'authority' => 'authority',
        'content' => 'content',
        'default_port' => 'defaultPort',
        'file' => 'file',
        'host' => 'host',
        'path' => 'path',
        'port' => 'port',
        'protocol' => 'protocol',
        'query' => 'query',
        'ref' => 'ref',
        'user_info' => 'userInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authority' => 'setAuthority',
        'content' => 'setContent',
        'default_port' => 'setDefaultPort',
        'file' => 'setFile',
        'host' => 'setHost',
        'path' => 'setPath',
        'port' => 'setPort',
        'protocol' => 'setProtocol',
        'query' => 'setQuery',
        'ref' => 'setRef',
        'user_info' => 'setUserInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authority' => 'getAuthority',
        'content' => 'getContent',
        'default_port' => 'getDefaultPort',
        'file' => 'getFile',
        'host' => 'getHost',
        'path' => 'getPath',
        'port' => 'getPort',
        'protocol' => 'getProtocol',
        'query' => 'getQuery',
        'ref' => 'getRef',
        'user_info' => 'getUserInfo'
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
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['default_port'] = isset($data['default_port']) ? $data['default_port'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['user_info'] = isset($data['user_info']) ? $data['user_info'] : null;
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

        return true;
    }


    /**
     * Gets authority
     *
     * @return string
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     *
     * @param string $authority authority
     *
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets content
     *
     * @return object
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param object $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets default_port
     *
     * @return int
     */
    public function getDefaultPort()
    {
        return $this->container['default_port'];
    }

    /**
     * Sets default_port
     *
     * @param int $default_port default_port
     *
     * @return $this
     */
    public function setDefaultPort($default_port)
    {
        $this->container['default_port'] = $default_port;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets user_info
     *
     * @return string
     */
    public function getUserInfo()
    {
        return $this->container['user_info'];
    }

    /**
     * Sets user_info
     *
     * @param string $user_info user_info
     *
     * @return $this
     */
    public function setUserInfo($user_info)
    {
        $this->container['user_info'] = $user_info;

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


