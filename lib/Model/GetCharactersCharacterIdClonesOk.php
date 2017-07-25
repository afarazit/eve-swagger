<?php
/**
 * GetCharactersCharacterIdClonesOk
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
 * GetCharactersCharacterIdClonesOk Class Doc Comment
 *
 * @category    Class
 * @description 200 ok object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdClonesOk implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_clones_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'home_location' => '\Swagger\Client\Model\GetCharactersCharacterIdClonesHomeLocation',
        'jump_clones' => '\Swagger\Client\Model\GetCharactersCharacterIdClonesJumpClone[]',
        'last_jump_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'home_location' => null,
        'jump_clones' => null,
        'last_jump_date' => 'date-time'
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
        'home_location' => 'home_location',
        'jump_clones' => 'jump_clones',
        'last_jump_date' => 'last_jump_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'home_location' => 'setHomeLocation',
        'jump_clones' => 'setJumpClones',
        'last_jump_date' => 'setLastJumpDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'home_location' => 'getHomeLocation',
        'jump_clones' => 'getJumpClones',
        'last_jump_date' => 'getLastJumpDate'
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
        $this->container['home_location'] = isset($data['home_location']) ? $data['home_location'] : null;
        $this->container['jump_clones'] = isset($data['jump_clones']) ? $data['jump_clones'] : null;
        $this->container['last_jump_date'] = isset($data['last_jump_date']) ? $data['last_jump_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['jump_clones'] === null) {
            $invalid_properties[] = "'jump_clones' can't be null";
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

        if ($this->container['jump_clones'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets home_location
     * @return \Swagger\Client\Model\GetCharactersCharacterIdClonesHomeLocation
     */
    public function getHomeLocation()
    {
        return $this->container['home_location'];
    }

    /**
     * Sets home_location
     * @param \Swagger\Client\Model\GetCharactersCharacterIdClonesHomeLocation $home_location
     * @return $this
     */
    public function setHomeLocation($home_location)
    {
        $this->container['home_location'] = $home_location;

        return $this;
    }

    /**
     * Gets jump_clones
     * @return \Swagger\Client\Model\GetCharactersCharacterIdClonesJumpClone[]
     */
    public function getJumpClones()
    {
        return $this->container['jump_clones'];
    }

    /**
     * Sets jump_clones
     * @param \Swagger\Client\Model\GetCharactersCharacterIdClonesJumpClone[] $jump_clones jump_clones array
     * @return $this
     */
    public function setJumpClones($jump_clones)
    {
        $this->container['jump_clones'] = $jump_clones;

        return $this;
    }

    /**
     * Gets last_jump_date
     * @return \DateTime
     */
    public function getLastJumpDate()
    {
        return $this->container['last_jump_date'];
    }

    /**
     * Sets last_jump_date
     * @param \DateTime $last_jump_date last_jump_date string
     * @return $this
     */
    public function setLastJumpDate($last_jump_date)
    {
        $this->container['last_jump_date'] = $last_jump_date;

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


