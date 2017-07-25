<?php
/**
 * PutCorporationsCorporationIdStructuresStructureIdNewSchedule
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
 * PutCorporationsCorporationIdStructuresStructureIdNewSchedule Class Doc Comment
 *
 * @category    Class
 * @description new_schedule object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PutCorporationsCorporationIdStructuresStructureIdNewSchedule implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'put_corporations_corporation_id_structures_structure_id_new_schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'day' => 'int',
        'hour' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'day' => 'int32',
        'hour' => 'int32'
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
        'day' => 'day',
        'hour' => 'hour'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'day' => 'setDay',
        'hour' => 'setHour'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'day' => 'getDay',
        'hour' => 'getHour'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['day'] === null) {
            $invalid_properties[] = "'day' can't be null";
        }
        if (($this->container['day'] > 6)) {
            $invalid_properties[] = "invalid value for 'day', must be smaller than or equal to 6.";
        }

        if (($this->container['day'] < 0)) {
            $invalid_properties[] = "invalid value for 'day', must be bigger than or equal to 0.";
        }

        if ($this->container['hour'] === null) {
            $invalid_properties[] = "'hour' can't be null";
        }
        if (($this->container['hour'] > 23)) {
            $invalid_properties[] = "invalid value for 'hour', must be smaller than or equal to 23.";
        }

        if (($this->container['hour'] < 0)) {
            $invalid_properties[] = "invalid value for 'hour', must be bigger than or equal to 0.";
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

        if ($this->container['day'] === null) {
            return false;
        }
        if ($this->container['day'] > 6) {
            return false;
        }
        if ($this->container['day'] < 0) {
            return false;
        }
        if ($this->container['hour'] === null) {
            return false;
        }
        if ($this->container['hour'] > 23) {
            return false;
        }
        if ($this->container['hour'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets day
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     * @param int $day Day of the week, zero-indexed to Monday
     * @return $this
     */
    public function setDay($day)
    {

        if (($day > 6)) {
            throw new \InvalidArgumentException('invalid value for $day when calling PutCorporationsCorporationIdStructuresStructureIdNewSchedule., must be smaller than or equal to 6.');
        }
        if (($day < 0)) {
            throw new \InvalidArgumentException('invalid value for $day when calling PutCorporationsCorporationIdStructuresStructureIdNewSchedule., must be bigger than or equal to 0.');
        }

        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets hour
     * @return int
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     * @param int $hour Hour of the day evetime, zero-indexed to midnight
     * @return $this
     */
    public function setHour($hour)
    {

        if (($hour > 23)) {
            throw new \InvalidArgumentException('invalid value for $hour when calling PutCorporationsCorporationIdStructuresStructureIdNewSchedule., must be smaller than or equal to 23.');
        }
        if (($hour < 0)) {
            throw new \InvalidArgumentException('invalid value for $hour when calling PutCorporationsCorporationIdStructuresStructureIdNewSchedule., must be bigger than or equal to 0.');
        }

        $this->container['hour'] = $hour;

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


