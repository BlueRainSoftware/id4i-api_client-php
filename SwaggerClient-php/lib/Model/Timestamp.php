<?php
/**
 * Timestamp
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
 * OpenAPI spec version: 0.9.3-SNAPSHOT
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
 * Timestamp Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Timestamp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Timestamp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => 'int',
        'day' => 'int',
        'hours' => 'int',
        'minutes' => 'int',
        'month' => 'int',
        'nanos' => 'int',
        'seconds' => 'int',
        'time' => 'int',
        'timezone_offset' => 'int',
        'year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'int32',
        'day' => 'int32',
        'hours' => 'int32',
        'minutes' => 'int32',
        'month' => 'int32',
        'nanos' => 'int32',
        'seconds' => 'int32',
        'time' => 'int64',
        'timezone_offset' => 'int32',
        'year' => 'int32'
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
        'date' => 'date',
        'day' => 'day',
        'hours' => 'hours',
        'minutes' => 'minutes',
        'month' => 'month',
        'nanos' => 'nanos',
        'seconds' => 'seconds',
        'time' => 'time',
        'timezone_offset' => 'timezoneOffset',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'day' => 'setDay',
        'hours' => 'setHours',
        'minutes' => 'setMinutes',
        'month' => 'setMonth',
        'nanos' => 'setNanos',
        'seconds' => 'setSeconds',
        'time' => 'setTime',
        'timezone_offset' => 'setTimezoneOffset',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'day' => 'getDay',
        'hours' => 'getHours',
        'minutes' => 'getMinutes',
        'month' => 'getMonth',
        'nanos' => 'getNanos',
        'seconds' => 'getSeconds',
        'time' => 'getTime',
        'timezone_offset' => 'getTimezoneOffset',
        'year' => 'getYear'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['minutes'] = isset($data['minutes']) ? $data['minutes'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['nanos'] = isset($data['nanos']) ? $data['nanos'] : null;
        $this->container['seconds'] = isset($data['seconds']) ? $data['seconds'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['timezone_offset'] = isset($data['timezone_offset']) ? $data['timezone_offset'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
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
     * Gets date
     *
     * @return int
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param int $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int $day day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param int $hours hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->container['minutes'];
    }

    /**
     * Sets minutes
     *
     * @param int $minutes minutes
     *
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->container['minutes'] = $minutes;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets nanos
     *
     * @return int
     */
    public function getNanos()
    {
        return $this->container['nanos'];
    }

    /**
     * Sets nanos
     *
     * @param int $nanos nanos
     *
     * @return $this
     */
    public function setNanos($nanos)
    {
        $this->container['nanos'] = $nanos;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int $seconds seconds
     *
     * @return $this
     */
    public function setSeconds($seconds)
    {
        $this->container['seconds'] = $seconds;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets timezone_offset
     *
     * @return int
     */
    public function getTimezoneOffset()
    {
        return $this->container['timezone_offset'];
    }

    /**
     * Sets timezone_offset
     *
     * @param int $timezone_offset timezone_offset
     *
     * @return $this
     */
    public function setTimezoneOffset($timezone_offset)
    {
        $this->container['timezone_offset'] = $timezone_offset;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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


