<?php
/**
 * MarketDataAttributes
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Commerce Layer API
 *
 * Headless Commerce for Global Brands.
 *
 * The version of the OpenAPI document: 2.3.0
 * Contact: support@commercelayer.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MarketDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MarketDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'market_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'int',
        'name' => 'string',
        'facebook_pixel_id' => 'string',
        'checkout_url' => 'string',
        'external_prices_url' => 'string',
        'private' => 'bool',
        'id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'reference' => 'string',
        'reference_origin' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number' => null,
        'name' => null,
        'facebook_pixel_id' => null,
        'checkout_url' => null,
        'external_prices_url' => null,
        'private' => null,
        'id' => null,
        'created_at' => null,
        'updated_at' => null,
        'reference' => null,
        'reference_origin' => null,
        'metadata' => null
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
        'number' => 'number',
        'name' => 'name',
        'facebook_pixel_id' => 'facebook_pixel_id',
        'checkout_url' => 'checkout_url',
        'external_prices_url' => 'external_prices_url',
        'private' => 'private',
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'reference' => 'reference',
        'reference_origin' => 'reference_origin',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'name' => 'setName',
        'facebook_pixel_id' => 'setFacebookPixelId',
        'checkout_url' => 'setCheckoutUrl',
        'external_prices_url' => 'setExternalPricesUrl',
        'private' => 'setPrivate',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'reference' => 'setReference',
        'reference_origin' => 'setReferenceOrigin',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'name' => 'getName',
        'facebook_pixel_id' => 'getFacebookPixelId',
        'checkout_url' => 'getCheckoutUrl',
        'external_prices_url' => 'getExternalPricesUrl',
        'private' => 'getPrivate',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'reference' => 'getReference',
        'reference_origin' => 'getReferenceOrigin',
        'metadata' => 'getMetadata'
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['facebook_pixel_id'] = $data['facebook_pixel_id'] ?? null;
        $this->container['checkout_url'] = $data['checkout_url'] ?? null;
        $this->container['external_prices_url'] = $data['external_prices_url'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['reference_origin'] = $data['reference_origin'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number Unique identifier for the market (numeric)
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The market's internal name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets facebook_pixel_id
     *
     * @return string|null
     */
    public function getFacebookPixelId()
    {
        return $this->container['facebook_pixel_id'];
    }

    /**
     * Sets facebook_pixel_id
     *
     * @param string|null $facebook_pixel_id The Facebook Pixed ID
     *
     * @return self
     */
    public function setFacebookPixelId($facebook_pixel_id)
    {
        $this->container['facebook_pixel_id'] = $facebook_pixel_id;

        return $this;
    }

    /**
     * Gets checkout_url
     *
     * @return string|null
     */
    public function getCheckoutUrl()
    {
        return $this->container['checkout_url'];
    }

    /**
     * Sets checkout_url
     *
     * @param string|null $checkout_url The checkout URL for this market
     *
     * @return self
     */
    public function setCheckoutUrl($checkout_url)
    {
        $this->container['checkout_url'] = $checkout_url;

        return $this;
    }

    /**
     * Gets external_prices_url
     *
     * @return string|null
     */
    public function getExternalPricesUrl()
    {
        return $this->container['external_prices_url'];
    }

    /**
     * Sets external_prices_url
     *
     * @param string|null $external_prices_url The URL used to fetch prices from an external source
     *
     * @return self
     */
    public function setExternalPricesUrl($external_prices_url)
    {
        $this->container['external_prices_url'] = $external_prices_url;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private Indicates if market belongs to a customer_group.
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the resource (hash).
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Time at which the resource was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Time at which the resource was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets reference_origin
     *
     * @return string|null
     */
    public function getReferenceOrigin()
    {
        return $this->container['reference_origin'];
    }

    /**
     * Sets reference_origin
     *
     * @param string|null $reference_origin Any identifier of the third party system that defines the reference code
     *
     * @return self
     */
    public function setReferenceOrigin($reference_origin)
    {
        $this->container['reference_origin'] = $reference_origin;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

