<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdLink
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
 * GetCharactersCharacterIdPlanetsPlanetIdLink Class Doc Comment
 *
 * @category    Class
 * @description link object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdLink implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_link';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_pin_id' => 'int',
        'link_level' => 'int',
        'source_pin_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_pin_id' => 'int64',
        'link_level' => 'int32',
        'source_pin_id' => 'int64'
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
        'destination_pin_id' => 'destination_pin_id',
        'link_level' => 'link_level',
        'source_pin_id' => 'source_pin_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'destination_pin_id' => 'setDestinationPinId',
        'link_level' => 'setLinkLevel',
        'source_pin_id' => 'setSourcePinId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'destination_pin_id' => 'getDestinationPinId',
        'link_level' => 'getLinkLevel',
        'source_pin_id' => 'getSourcePinId'
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
        $this->container['destination_pin_id'] = isset($data['destination_pin_id']) ? $data['destination_pin_id'] : null;
        $this->container['link_level'] = isset($data['link_level']) ? $data['link_level'] : null;
        $this->container['source_pin_id'] = isset($data['source_pin_id']) ? $data['source_pin_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['destination_pin_id'] === null) {
            $invalid_properties[] = "'destination_pin_id' can't be null";
        }
        if ($this->container['link_level'] === null) {
            $invalid_properties[] = "'link_level' can't be null";
        }
        if (($this->container['link_level'] > 10)) {
            $invalid_properties[] = "invalid value for 'link_level', must be smaller than or equal to 10.";
        }

        if (($this->container['link_level'] < 0)) {
            $invalid_properties[] = "invalid value for 'link_level', must be bigger than or equal to 0.";
        }

        if ($this->container['source_pin_id'] === null) {
            $invalid_properties[] = "'source_pin_id' can't be null";
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

        if ($this->container['destination_pin_id'] === null) {
            return false;
        }
        if ($this->container['link_level'] === null) {
            return false;
        }
        if ($this->container['link_level'] > 10) {
            return false;
        }
        if ($this->container['link_level'] < 0) {
            return false;
        }
        if ($this->container['source_pin_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets destination_pin_id
     * @return int
     */
    public function getDestinationPinId()
    {
        return $this->container['destination_pin_id'];
    }

    /**
     * Sets destination_pin_id
     * @param int $destination_pin_id destination_pin_id integer
     * @return $this
     */
    public function setDestinationPinId($destination_pin_id)
    {
        $this->container['destination_pin_id'] = $destination_pin_id;

        return $this;
    }

    /**
     * Gets link_level
     * @return int
     */
    public function getLinkLevel()
    {
        return $this->container['link_level'];
    }

    /**
     * Sets link_level
     * @param int $link_level link_level integer
     * @return $this
     */
    public function setLinkLevel($link_level)
    {

        if (($link_level > 10)) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdLink., must be smaller than or equal to 10.');
        }
        if (($link_level < 0)) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdLink., must be bigger than or equal to 0.');
        }

        $this->container['link_level'] = $link_level;

        return $this;
    }

    /**
     * Gets source_pin_id
     * @return int
     */
    public function getSourcePinId()
    {
        return $this->container['source_pin_id'];
    }

    /**
     * Sets source_pin_id
     * @param int $source_pin_id source_pin_id integer
     * @return $this
     */
    public function setSourcePinId($source_pin_id)
    {
        $this->container['source_pin_id'] = $source_pin_id;

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


