<?php
/**
 * GetCharactersCharacterIdWalletJournalExtraInfo
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
 * GetCharactersCharacterIdWalletJournalExtraInfo Class Doc Comment
 *
 * @category    Class
 * @description Extra information for different type of transaction
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdWalletJournalExtraInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_wallet_journal_extra_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alliance_id' => 'int',
        'character_id' => 'int',
        'contract_id' => 'int',
        'corporation_id' => 'int',
        'destroyed_ship_type_id' => 'int',
        'job_id' => 'int',
        'location_id' => 'int',
        'npc_id' => 'int',
        'npc_name' => 'string',
        'planet_id' => 'int',
        'system_id' => 'int',
        'transaction_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alliance_id' => 'int32',
        'character_id' => 'int32',
        'contract_id' => 'int32',
        'corporation_id' => 'int32',
        'destroyed_ship_type_id' => 'int32',
        'job_id' => 'int32',
        'location_id' => 'int64',
        'npc_id' => 'int32',
        'npc_name' => null,
        'planet_id' => 'int32',
        'system_id' => 'int32',
        'transaction_id' => 'int64'
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
        'alliance_id' => 'alliance_id',
        'character_id' => 'character_id',
        'contract_id' => 'contract_id',
        'corporation_id' => 'corporation_id',
        'destroyed_ship_type_id' => 'destroyed_ship_type_id',
        'job_id' => 'job_id',
        'location_id' => 'location_id',
        'npc_id' => 'npc_id',
        'npc_name' => 'npc_name',
        'planet_id' => 'planet_id',
        'system_id' => 'system_id',
        'transaction_id' => 'transaction_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'character_id' => 'setCharacterId',
        'contract_id' => 'setContractId',
        'corporation_id' => 'setCorporationId',
        'destroyed_ship_type_id' => 'setDestroyedShipTypeId',
        'job_id' => 'setJobId',
        'location_id' => 'setLocationId',
        'npc_id' => 'setNpcId',
        'npc_name' => 'setNpcName',
        'planet_id' => 'setPlanetId',
        'system_id' => 'setSystemId',
        'transaction_id' => 'setTransactionId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'character_id' => 'getCharacterId',
        'contract_id' => 'getContractId',
        'corporation_id' => 'getCorporationId',
        'destroyed_ship_type_id' => 'getDestroyedShipTypeId',
        'job_id' => 'getJobId',
        'location_id' => 'getLocationId',
        'npc_id' => 'getNpcId',
        'npc_name' => 'getNpcName',
        'planet_id' => 'getPlanetId',
        'system_id' => 'getSystemId',
        'transaction_id' => 'getTransactionId'
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
        $this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['corporation_id'] = isset($data['corporation_id']) ? $data['corporation_id'] : null;
        $this->container['destroyed_ship_type_id'] = isset($data['destroyed_ship_type_id']) ? $data['destroyed_ship_type_id'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['npc_id'] = isset($data['npc_id']) ? $data['npc_id'] : null;
        $this->container['npc_name'] = isset($data['npc_name']) ? $data['npc_name'] : null;
        $this->container['planet_id'] = isset($data['planet_id']) ? $data['planet_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets alliance_id
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     * @param int $alliance_id alliance_id integer
     * @return $this
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets character_id
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     * @param int $character_id character_id integer
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param int $contract_id contract_id integer
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets corporation_id
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     * @param int $corporation_id corporation_id integer
     * @return $this
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets destroyed_ship_type_id
     * @return int
     */
    public function getDestroyedShipTypeId()
    {
        return $this->container['destroyed_ship_type_id'];
    }

    /**
     * Sets destroyed_ship_type_id
     * @param int $destroyed_ship_type_id destroyed_ship_type_id integer
     * @return $this
     */
    public function setDestroyedShipTypeId($destroyed_ship_type_id)
    {
        $this->container['destroyed_ship_type_id'] = $destroyed_ship_type_id;

        return $this;
    }

    /**
     * Gets job_id
     * @return int
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     * @param int $job_id job_id integer
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id location_id integer
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets npc_id
     * @return int
     */
    public function getNpcId()
    {
        return $this->container['npc_id'];
    }

    /**
     * Sets npc_id
     * @param int $npc_id npc_id integer
     * @return $this
     */
    public function setNpcId($npc_id)
    {
        $this->container['npc_id'] = $npc_id;

        return $this;
    }

    /**
     * Gets npc_name
     * @return string
     */
    public function getNpcName()
    {
        return $this->container['npc_name'];
    }

    /**
     * Sets npc_name
     * @param string $npc_name npc_name string
     * @return $this
     */
    public function setNpcName($npc_name)
    {
        $this->container['npc_name'] = $npc_name;

        return $this;
    }

    /**
     * Gets planet_id
     * @return int
     */
    public function getPlanetId()
    {
        return $this->container['planet_id'];
    }

    /**
     * Sets planet_id
     * @param int $planet_id planet_id integer
     * @return $this
     */
    public function setPlanetId($planet_id)
    {
        $this->container['planet_id'] = $planet_id;

        return $this;
    }

    /**
     * Gets system_id
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     * @param int $system_id system_id integer
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param int $transaction_id transaction_id integer
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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

