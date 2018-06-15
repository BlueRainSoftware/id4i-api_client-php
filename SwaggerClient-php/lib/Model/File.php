<?php
/**
 * File
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
 * OpenAPI spec version: 0.8.0-SNAPSHOT
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
 * File Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class File implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'absolute' => 'bool',
        'absolute_file' => '\Swagger\Client\Model\File',
        'absolute_path' => 'string',
        'canonical_file' => '\Swagger\Client\Model\File',
        'canonical_path' => 'string',
        'directory' => 'bool',
        'file' => 'bool',
        'free_space' => 'int',
        'hidden' => 'bool',
        'name' => 'string',
        'parent' => 'string',
        'parent_file' => '\Swagger\Client\Model\File',
        'path' => 'string',
        'total_space' => 'int',
        'usable_space' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'absolute' => null,
        'absolute_file' => null,
        'absolute_path' => null,
        'canonical_file' => null,
        'canonical_path' => null,
        'directory' => null,
        'file' => null,
        'free_space' => 'int64',
        'hidden' => null,
        'name' => null,
        'parent' => null,
        'parent_file' => null,
        'path' => null,
        'total_space' => 'int64',
        'usable_space' => 'int64'
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
        'absolute' => 'absolute',
        'absolute_file' => 'absoluteFile',
        'absolute_path' => 'absolutePath',
        'canonical_file' => 'canonicalFile',
        'canonical_path' => 'canonicalPath',
        'directory' => 'directory',
        'file' => 'file',
        'free_space' => 'freeSpace',
        'hidden' => 'hidden',
        'name' => 'name',
        'parent' => 'parent',
        'parent_file' => 'parentFile',
        'path' => 'path',
        'total_space' => 'totalSpace',
        'usable_space' => 'usableSpace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'absolute' => 'setAbsolute',
        'absolute_file' => 'setAbsoluteFile',
        'absolute_path' => 'setAbsolutePath',
        'canonical_file' => 'setCanonicalFile',
        'canonical_path' => 'setCanonicalPath',
        'directory' => 'setDirectory',
        'file' => 'setFile',
        'free_space' => 'setFreeSpace',
        'hidden' => 'setHidden',
        'name' => 'setName',
        'parent' => 'setParent',
        'parent_file' => 'setParentFile',
        'path' => 'setPath',
        'total_space' => 'setTotalSpace',
        'usable_space' => 'setUsableSpace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'absolute' => 'getAbsolute',
        'absolute_file' => 'getAbsoluteFile',
        'absolute_path' => 'getAbsolutePath',
        'canonical_file' => 'getCanonicalFile',
        'canonical_path' => 'getCanonicalPath',
        'directory' => 'getDirectory',
        'file' => 'getFile',
        'free_space' => 'getFreeSpace',
        'hidden' => 'getHidden',
        'name' => 'getName',
        'parent' => 'getParent',
        'parent_file' => 'getParentFile',
        'path' => 'getPath',
        'total_space' => 'getTotalSpace',
        'usable_space' => 'getUsableSpace'
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
        $this->container['absolute'] = isset($data['absolute']) ? $data['absolute'] : null;
        $this->container['absolute_file'] = isset($data['absolute_file']) ? $data['absolute_file'] : null;
        $this->container['absolute_path'] = isset($data['absolute_path']) ? $data['absolute_path'] : null;
        $this->container['canonical_file'] = isset($data['canonical_file']) ? $data['canonical_file'] : null;
        $this->container['canonical_path'] = isset($data['canonical_path']) ? $data['canonical_path'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['free_space'] = isset($data['free_space']) ? $data['free_space'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['parent_file'] = isset($data['parent_file']) ? $data['parent_file'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['total_space'] = isset($data['total_space']) ? $data['total_space'] : null;
        $this->container['usable_space'] = isset($data['usable_space']) ? $data['usable_space'] : null;
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
     * Gets absolute
     *
     * @return bool
     */
    public function getAbsolute()
    {
        return $this->container['absolute'];
    }

    /**
     * Sets absolute
     *
     * @param bool $absolute absolute
     *
     * @return $this
     */
    public function setAbsolute($absolute)
    {
        $this->container['absolute'] = $absolute;

        return $this;
    }

    /**
     * Gets absolute_file
     *
     * @return \Swagger\Client\Model\File
     */
    public function getAbsoluteFile()
    {
        return $this->container['absolute_file'];
    }

    /**
     * Sets absolute_file
     *
     * @param \Swagger\Client\Model\File $absolute_file absolute_file
     *
     * @return $this
     */
    public function setAbsoluteFile($absolute_file)
    {
        $this->container['absolute_file'] = $absolute_file;

        return $this;
    }

    /**
     * Gets absolute_path
     *
     * @return string
     */
    public function getAbsolutePath()
    {
        return $this->container['absolute_path'];
    }

    /**
     * Sets absolute_path
     *
     * @param string $absolute_path absolute_path
     *
     * @return $this
     */
    public function setAbsolutePath($absolute_path)
    {
        $this->container['absolute_path'] = $absolute_path;

        return $this;
    }

    /**
     * Gets canonical_file
     *
     * @return \Swagger\Client\Model\File
     */
    public function getCanonicalFile()
    {
        return $this->container['canonical_file'];
    }

    /**
     * Sets canonical_file
     *
     * @param \Swagger\Client\Model\File $canonical_file canonical_file
     *
     * @return $this
     */
    public function setCanonicalFile($canonical_file)
    {
        $this->container['canonical_file'] = $canonical_file;

        return $this;
    }

    /**
     * Gets canonical_path
     *
     * @return string
     */
    public function getCanonicalPath()
    {
        return $this->container['canonical_path'];
    }

    /**
     * Sets canonical_path
     *
     * @param string $canonical_path canonical_path
     *
     * @return $this
     */
    public function setCanonicalPath($canonical_path)
    {
        $this->container['canonical_path'] = $canonical_path;

        return $this;
    }

    /**
     * Gets directory
     *
     * @return bool
     */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
     * Sets directory
     *
     * @param bool $directory directory
     *
     * @return $this
     */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;

        return $this;
    }

    /**
     * Gets file
     *
     * @return bool
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param bool $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets free_space
     *
     * @return int
     */
    public function getFreeSpace()
    {
        return $this->container['free_space'];
    }

    /**
     * Sets free_space
     *
     * @param int $free_space free_space
     *
     * @return $this
     */
    public function setFreeSpace($free_space)
    {
        $this->container['free_space'] = $free_space;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets parent_file
     *
     * @return \Swagger\Client\Model\File
     */
    public function getParentFile()
    {
        return $this->container['parent_file'];
    }

    /**
     * Sets parent_file
     *
     * @param \Swagger\Client\Model\File $parent_file parent_file
     *
     * @return $this
     */
    public function setParentFile($parent_file)
    {
        $this->container['parent_file'] = $parent_file;

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
     * Gets total_space
     *
     * @return int
     */
    public function getTotalSpace()
    {
        return $this->container['total_space'];
    }

    /**
     * Sets total_space
     *
     * @param int $total_space total_space
     *
     * @return $this
     */
    public function setTotalSpace($total_space)
    {
        $this->container['total_space'] = $total_space;

        return $this;
    }

    /**
     * Gets usable_space
     *
     * @return int
     */
    public function getUsableSpace()
    {
        return $this->container['usable_space'];
    }

    /**
     * Sets usable_space
     *
     * @param int $usable_space usable_space
     *
     * @return $this
     */
    public function setUsableSpace($usable_space)
    {
        $this->container['usable_space'] = $usable_space;

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


