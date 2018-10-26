<?php
/**
 * CheckoutFormLineItem
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
 * CheckoutFormLineItem Class Doc Comment
 *
 * @category Class
 * @description Order item
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormLineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutFormLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'offer' => '\AllegroApi\Model\OfferReference',
        'quantity' => 'double',
        'original_price' => '\AllegroApi\Model\Price',
        'price' => '\AllegroApi\Model\Price',
        'selected_additional_services' => '\AllegroApi\Model\CheckoutFormAdditionalService[]',
        'bought_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'offer' => null,
        'quantity' => 'integer',
        'original_price' => null,
        'price' => null,
        'selected_additional_services' => null,
        'bought_at' => 'date-time'
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
        'id' => 'id',
        'offer' => 'offer',
        'quantity' => 'quantity',
        'original_price' => 'originalPrice',
        'price' => 'price',
        'selected_additional_services' => 'selectedAdditionalServices',
        'bought_at' => 'boughtAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'offer' => 'setOffer',
        'quantity' => 'setQuantity',
        'original_price' => 'setOriginalPrice',
        'price' => 'setPrice',
        'selected_additional_services' => 'setSelectedAdditionalServices',
        'bought_at' => 'setBoughtAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'offer' => 'getOffer',
        'quantity' => 'getQuantity',
        'original_price' => 'getOriginalPrice',
        'price' => 'getPrice',
        'selected_additional_services' => 'getSelectedAdditionalServices',
        'bought_at' => 'getBoughtAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['original_price'] = isset($data['original_price']) ? $data['original_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['selected_additional_services'] = isset($data['selected_additional_services']) ? $data['selected_additional_services'] : null;
        $this->container['bought_at'] = isset($data['bought_at']) ? $data['bought_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalidProperties[] = "'offer' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['original_price'] === null) {
            $invalidProperties[] = "'original_price' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Line item identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \AllegroApi\Model\OfferReference
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \AllegroApi\Model\OfferReference $offer offer
     *
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets original_price
     *
     * @return \AllegroApi\Model\Price
     */
    public function getOriginalPrice()
    {
        return $this->container['original_price'];
    }

    /**
     * Sets original_price
     *
     * @param \AllegroApi\Model\Price $original_price original_price
     *
     * @return $this
     */
    public function setOriginalPrice($original_price)
    {
        $this->container['original_price'] = $original_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \AllegroApi\Model\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \AllegroApi\Model\Price $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets selected_additional_services
     *
     * @return \AllegroApi\Model\CheckoutFormAdditionalService[]|null
     */
    public function getSelectedAdditionalServices()
    {
        return $this->container['selected_additional_services'];
    }

    /**
     * Sets selected_additional_services
     *
     * @param \AllegroApi\Model\CheckoutFormAdditionalService[]|null $selected_additional_services selected_additional_services
     *
     * @return $this
     */
    public function setSelectedAdditionalServices($selected_additional_services)
    {
        $this->container['selected_additional_services'] = $selected_additional_services;

        return $this;
    }

    /**
     * Gets bought_at
     *
     * @return \DateTime|null
     */
    public function getBoughtAt()
    {
        return $this->container['bought_at'];
    }

    /**
     * Sets bought_at
     *
     * @param \DateTime|null $bought_at ISO date when offer was bought
     *
     * @return $this
     */
    public function setBoughtAt($bought_at)
    {
        $this->container['bought_at'] = $bought_at;

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

