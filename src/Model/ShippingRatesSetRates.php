<?php
/**
 * ShippingRatesSetRates
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl
 *
 * OpenAPI spec version: 1.0
 * Contact: api@allegro.pl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * ShippingRatesSetRates Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingRatesSetRates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingRatesSet_rates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_method' => '\AllegroApi\Model\ShippingRatesSetRatesDeliveryMethod',
        'max_quantity_per_package' => 'int',
        'first_item_rate' => '\AllegroApi\Model\ShippingRatesSetRatesFirstItemRate',
        'next_item_rate' => '\AllegroApi\Model\ShippingRatesSetRatesNextItemRate',
        'shipping_time' => '\AllegroApi\Model\ShippingRatesSetRatesShippingTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'delivery_method' => null,
        'max_quantity_per_package' => 'int32',
        'first_item_rate' => null,
        'next_item_rate' => null,
        'shipping_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_method' => 'deliveryMethod',
        'max_quantity_per_package' => 'maxQuantityPerPackage',
        'first_item_rate' => 'firstItemRate',
        'next_item_rate' => 'nextItemRate',
        'shipping_time' => 'shippingTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_method' => 'setDeliveryMethod',
        'max_quantity_per_package' => 'setMaxQuantityPerPackage',
        'first_item_rate' => 'setFirstItemRate',
        'next_item_rate' => 'setNextItemRate',
        'shipping_time' => 'setShippingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_method' => 'getDeliveryMethod',
        'max_quantity_per_package' => 'getMaxQuantityPerPackage',
        'first_item_rate' => 'getFirstItemRate',
        'next_item_rate' => 'getNextItemRate',
        'shipping_time' => 'getShippingTime'
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
        return self::$openAPIModelName;
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
        $this->container['delivery_method'] = isset($data['delivery_method']) ? $data['delivery_method'] : null;
        $this->container['max_quantity_per_package'] = isset($data['max_quantity_per_package']) ? $data['max_quantity_per_package'] : null;
        $this->container['first_item_rate'] = isset($data['first_item_rate']) ? $data['first_item_rate'] : null;
        $this->container['next_item_rate'] = isset($data['next_item_rate']) ? $data['next_item_rate'] : null;
        $this->container['shipping_time'] = isset($data['shipping_time']) ? $data['shipping_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_method'] === null) {
            $invalidProperties[] = "'delivery_method' can't be null";
        }
        if ($this->container['max_quantity_per_package'] === null) {
            $invalidProperties[] = "'max_quantity_per_package' can't be null";
        }
        if (($this->container['max_quantity_per_package'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_quantity_per_package', must be bigger than or equal to 1.";
        }

        if ($this->container['first_item_rate'] === null) {
            $invalidProperties[] = "'first_item_rate' can't be null";
        }
        if ($this->container['next_item_rate'] === null) {
            $invalidProperties[] = "'next_item_rate' can't be null";
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
     * Gets delivery_method
     *
     * @return \AllegroApi\Model\ShippingRatesSetRatesDeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->container['delivery_method'];
    }

    /**
     * Sets delivery_method
     *
     * @param \AllegroApi\Model\ShippingRatesSetRatesDeliveryMethod $delivery_method delivery_method
     *
     * @return $this
     */
    public function setDeliveryMethod($delivery_method)
    {
        $this->container['delivery_method'] = $delivery_method;

        return $this;
    }

    /**
     * Gets max_quantity_per_package
     *
     * @return int
     */
    public function getMaxQuantityPerPackage()
    {
        return $this->container['max_quantity_per_package'];
    }

    /**
     * Sets max_quantity_per_package
     *
     * @param int $max_quantity_per_package Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @return $this
     */
    public function setMaxQuantityPerPackage($max_quantity_per_package)
    {

        if (($max_quantity_per_package < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_quantity_per_package when calling ShippingRatesSetRates., must be bigger than or equal to 1.');
        }

        $this->container['max_quantity_per_package'] = $max_quantity_per_package;

        return $this;
    }

    /**
     * Gets first_item_rate
     *
     * @return \AllegroApi\Model\ShippingRatesSetRatesFirstItemRate
     */
    public function getFirstItemRate()
    {
        return $this->container['first_item_rate'];
    }

    /**
     * Sets first_item_rate
     *
     * @param \AllegroApi\Model\ShippingRatesSetRatesFirstItemRate $first_item_rate first_item_rate
     *
     * @return $this
     */
    public function setFirstItemRate($first_item_rate)
    {
        $this->container['first_item_rate'] = $first_item_rate;

        return $this;
    }

    /**
     * Gets next_item_rate
     *
     * @return \AllegroApi\Model\ShippingRatesSetRatesNextItemRate
     */
    public function getNextItemRate()
    {
        return $this->container['next_item_rate'];
    }

    /**
     * Sets next_item_rate
     *
     * @param \AllegroApi\Model\ShippingRatesSetRatesNextItemRate $next_item_rate next_item_rate
     *
     * @return $this
     */
    public function setNextItemRate($next_item_rate)
    {
        $this->container['next_item_rate'] = $next_item_rate;

        return $this;
    }

    /**
     * Gets shipping_time
     *
     * @return \AllegroApi\Model\ShippingRatesSetRatesShippingTime|null
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time
     *
     * @param \AllegroApi\Model\ShippingRatesSetRatesShippingTime|null $shipping_time shipping_time
     *
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->container['shipping_time'] = $shipping_time;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


