<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdWaypoint
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.3
 * 
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
 * GetCharactersCharacterIdPlanetsPlanetIdWaypoint Class Doc Comment
 *
 * @category    Class
 * @description waypoint object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdWaypoint implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_waypoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order' => 'int',
        'pin_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order' => 'int32',
        'pin_id' => 'int64'
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
        'order' => 'order',
        'pin_id' => 'pin_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'pin_id' => 'setPinId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'pin_id' => 'getPinId'
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
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['pin_id'] = isset($data['pin_id']) ? $data['pin_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['order'] === null) {
            $invalid_properties[] = "'order' can't be null";
        }
        if (($this->container['order'] > 5)) {
            $invalid_properties[] = "invalid value for 'order', must be smaller than or equal to 5.";
        }

        if (($this->container['order'] < 1)) {
            $invalid_properties[] = "invalid value for 'order', must be bigger than or equal to 1.";
        }

        if ($this->container['pin_id'] === null) {
            $invalid_properties[] = "'pin_id' can't be null";
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

        if ($this->container['order'] === null) {
            return false;
        }
        if ($this->container['order'] > 5) {
            return false;
        }
        if ($this->container['order'] < 1) {
            return false;
        }
        if ($this->container['pin_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order order integer
     * @return $this
     */
    public function setOrder($order)
    {

        if (($order > 5)) {
            throw new \InvalidArgumentException('invalid value for $order when calling GetCharactersCharacterIdPlanetsPlanetIdWaypoint., must be smaller than or equal to 5.');
        }
        if (($order < 1)) {
            throw new \InvalidArgumentException('invalid value for $order when calling GetCharactersCharacterIdPlanetsPlanetIdWaypoint., must be bigger than or equal to 1.');
        }

        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets pin_id
     * @return int
     */
    public function getPinId()
    {
        return $this->container['pin_id'];
    }

    /**
     * Sets pin_id
     * @param int $pin_id pin_id integer
     * @return $this
     */
    public function setPinId($pin_id)
    {
        $this->container['pin_id'] = $pin_id;

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


