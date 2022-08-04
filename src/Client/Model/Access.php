<?php
/**
 * Access
 *
 * PHP version 5
 *
 * @category Class
 * @package  UScreen\Client
 * @author   UScreen Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Publisher API
 *
 * Uscreen Publisher API to controll user data and information
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@uscreen.tv
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * UScreen Codegen version: 2.4.20
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UScreen\Client\Model;

use \ArrayAccess;
use \UScreen\Client\ObjectSerializer;

/**
 * Access Class Doc Comment
 *
 * @category Class
 * @package  UScreen\Client
 * @author   UScreen Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Access implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Access';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'perform_action_at' => 'int',
        'canceled_at' => 'int',
        'created_at' => 'int',
        'product_id' => 'int',
        'product_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'perform_action_at' => null,
        'canceled_at' => null,
        'created_at' => null,
        'product_id' => null,
        'product_type' => null
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
        'id' => 'id',
        'perform_action_at' => 'perform_action_at',
        'canceled_at' => 'canceled_at',
        'created_at' => 'created_at',
        'product_id' => 'product_id',
        'product_type' => 'product_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'perform_action_at' => 'setPerformActionAt',
        'canceled_at' => 'setCanceledAt',
        'created_at' => 'setCreatedAt',
        'product_id' => 'setProductId',
        'product_type' => 'setProductType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'perform_action_at' => 'getPerformActionAt',
        'canceled_at' => 'getCanceledAt',
        'created_at' => 'getCreatedAt',
        'product_id' => 'getProductId',
        'product_type' => 'getProductType'
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

    const PRODUCT_TYPE_PROGRAM = 'program';
    const PRODUCT_TYPE_RECURRING = 'recurring';
    const PRODUCT_TYPE_RENT = 'rent';
    const PRODUCT_TYPE_FREEBIE = 'freebie';
    const PRODUCT_TYPE_FIXED_PRICE = 'fixed_price';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_PROGRAM,
            self::PRODUCT_TYPE_RECURRING,
            self::PRODUCT_TYPE_RENT,
            self::PRODUCT_TYPE_FREEBIE,
            self::PRODUCT_TYPE_FIXED_PRICE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['perform_action_at'] = isset($data['perform_action_at']) ? $data['perform_action_at'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($this->container['product_type']) && !in_array($this->container['product_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product_type', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Uscreen system ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets perform_action_at
     *
     * @return int
     */
    public function getPerformActionAt()
    {
        return $this->container['perform_action_at'];
    }

    /**
     * Sets perform_action_at
     *
     * @param int $perform_action_at Next action date. In case of subscription next due date, in case of rental it's access termination date.
     *
     * @return $this
     */
    public function setPerformActionAt($perform_action_at)
    {
        $this->container['perform_action_at'] = $perform_action_at;

        return $this;
    }

    /**
     * Gets canceled_at
     *
     * @return int
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     *
     * @param int $canceled_at Date when subscription was canceled
     *
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at Date when record was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id Uscreen system product ID
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type Uscreen system product type.
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($product_type) && !in_array($product_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_type'] = $product_type;

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

