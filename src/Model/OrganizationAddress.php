<?php
/**
 * OrganizationAddress
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
 * OpenAPI spec version: 1.0.0
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * OrganizationAddress Class Doc Comment
 *
 * @category Class
 * @package  Bluerain\ID4iClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganizationAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrganizationAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'street' => 'string',
        'post_code' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'country_name' => 'string',
        'telephone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_name' => null,
        'firstname' => null,
        'lastname' => null,
        'street' => null,
        'post_code' => null,
        'city' => null,
        'country_code' => null,
        'country_name' => null,
        'telephone' => null
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
        'company_name' => 'companyName',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'street' => 'street',
        'post_code' => 'postCode',
        'city' => 'city',
        'country_code' => 'countryCode',
        'country_name' => 'countryName',
        'telephone' => 'telephone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'street' => 'setStreet',
        'post_code' => 'setPostCode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'country_name' => 'setCountryName',
        'telephone' => 'setTelephone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'street' => 'getStreet',
        'post_code' => 'getPostCode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'country_name' => 'getCountryName',
        'telephone' => 'getTelephone'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['company_name']) && (strlen($this->container['company_name']) > 254)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['company_name']) && (strlen($this->container['company_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ((strlen($this->container['firstname']) > 255)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['firstname']) < 0)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ((strlen($this->container['lastname']) > 255)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['lastname']) < 0)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ((strlen($this->container['street']) > 254)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 254.";
        }

        if ((strlen($this->container['street']) < 3)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['post_code'] === null) {
            $invalidProperties[] = "'post_code' can't be null";
        }
        if ((strlen($this->container['post_code']) > 40)) {
            $invalidProperties[] = "invalid value for 'post_code', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['post_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'post_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((strlen($this->container['city']) > 99)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 99.";
        }

        if ((strlen($this->container['city']) < 2)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if ((strlen($this->container['country_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['telephone']) && (strlen($this->container['telephone']) > 99)) {
            $invalidProperties[] = "invalid value for 'telephone', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['telephone']) && (strlen($this->container['telephone']) < 0)) {
            $invalidProperties[] = "invalid value for 'telephone', the character length must be bigger than or equal to 0.";
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

        if (strlen($this->container['company_name']) > 254) {
            return false;
        }
        if (strlen($this->container['company_name']) < 0) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if (strlen($this->container['firstname']) > 255) {
            return false;
        }
        if (strlen($this->container['firstname']) < 0) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if (strlen($this->container['lastname']) > 255) {
            return false;
        }
        if (strlen($this->container['lastname']) < 0) {
            return false;
        }
        if ($this->container['street'] === null) {
            return false;
        }
        if (strlen($this->container['street']) > 254) {
            return false;
        }
        if (strlen($this->container['street']) < 3) {
            return false;
        }
        if ($this->container['post_code'] === null) {
            return false;
        }
        if (strlen($this->container['post_code']) > 40) {
            return false;
        }
        if (strlen($this->container['post_code']) < 2) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if (strlen($this->container['city']) > 99) {
            return false;
        }
        if (strlen($this->container['city']) < 2) {
            return false;
        }
        if ($this->container['country_code'] === null) {
            return false;
        }
        if (strlen($this->container['country_code']) > 2) {
            return false;
        }
        if (strlen($this->container['country_code']) < 0) {
            return false;
        }
        if (strlen($this->container['telephone']) > 99) {
            return false;
        }
        if (strlen($this->container['telephone']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        if (!is_null($company_name) && (strlen($company_name) > 254)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling OrganizationAddress., must be smaller than or equal to 254.');
        }
        if (!is_null($company_name) && (strlen($company_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling OrganizationAddress., must be bigger than or equal to 0.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        if ((strlen($firstname) > 255)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling OrganizationAddress., must be smaller than or equal to 255.');
        }
        if ((strlen($firstname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling OrganizationAddress., must be bigger than or equal to 0.');
        }

        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if ((strlen($lastname) > 255)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling OrganizationAddress., must be smaller than or equal to 255.');
        }
        if ((strlen($lastname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling OrganizationAddress., must be bigger than or equal to 0.');
        }

        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        if ((strlen($street) > 254)) {
            throw new \InvalidArgumentException('invalid length for $street when calling OrganizationAddress., must be smaller than or equal to 254.');
        }
        if ((strlen($street) < 3)) {
            throw new \InvalidArgumentException('invalid length for $street when calling OrganizationAddress., must be bigger than or equal to 3.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code post_code
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        if ((strlen($post_code) > 40)) {
            throw new \InvalidArgumentException('invalid length for $post_code when calling OrganizationAddress., must be smaller than or equal to 40.');
        }
        if ((strlen($post_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $post_code when calling OrganizationAddress., must be bigger than or equal to 2.');
        }

        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((strlen($city) > 99)) {
            throw new \InvalidArgumentException('invalid length for $city when calling OrganizationAddress., must be smaller than or equal to 99.');
        }
        if ((strlen($city) < 2)) {
            throw new \InvalidArgumentException('invalid length for $city when calling OrganizationAddress., must be bigger than or equal to 2.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The ISO 3166 two-letter country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if ((strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling OrganizationAddress., must be smaller than or equal to 2.');
        }
        if ((strlen($country_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling OrganizationAddress., must be bigger than or equal to 0.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string $country_name The country name
     *
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone The telephone number e.g.
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        if (!is_null($telephone) && (strlen($telephone) > 99)) {
            throw new \InvalidArgumentException('invalid length for $telephone when calling OrganizationAddress., must be smaller than or equal to 99.');
        }
        if (!is_null($telephone) && (strlen($telephone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $telephone when calling OrganizationAddress., must be bigger than or equal to 0.');
        }

        $this->container['telephone'] = $telephone;

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


