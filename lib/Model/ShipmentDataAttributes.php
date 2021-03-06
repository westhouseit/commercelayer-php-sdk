<?php
/**
 * ShipmentDataAttributes
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
 * ShipmentDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'status' => 'string',
        'currency_code' => 'string',
        'cost_amount_cents' => 'int',
        'cost_amount_float' => 'float',
        'formatted_cost_amount' => 'string',
        'skus_count' => 'int',
        'selected_rate_id' => 'string',
        'rates' => 'object[]',
        'purchase_error_code' => 'string',
        'purchase_error_message' => 'string',
        'get_rates_started_at' => 'string',
        'get_rates_completed_at' => 'string',
        'purchase_started_at' => 'string',
        'purchase_completed_at' => 'string',
        'purchase_failed_at' => 'string',
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
        'status' => null,
        'currency_code' => null,
        'cost_amount_cents' => null,
        'cost_amount_float' => null,
        'formatted_cost_amount' => null,
        'skus_count' => null,
        'selected_rate_id' => null,
        'rates' => null,
        'purchase_error_code' => null,
        'purchase_error_message' => null,
        'get_rates_started_at' => null,
        'get_rates_completed_at' => null,
        'purchase_started_at' => null,
        'purchase_completed_at' => null,
        'purchase_failed_at' => null,
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
        'status' => 'status',
        'currency_code' => 'currency_code',
        'cost_amount_cents' => 'cost_amount_cents',
        'cost_amount_float' => 'cost_amount_float',
        'formatted_cost_amount' => 'formatted_cost_amount',
        'skus_count' => 'skus_count',
        'selected_rate_id' => 'selected_rate_id',
        'rates' => 'rates',
        'purchase_error_code' => 'purchase_error_code',
        'purchase_error_message' => 'purchase_error_message',
        'get_rates_started_at' => 'get_rates_started_at',
        'get_rates_completed_at' => 'get_rates_completed_at',
        'purchase_started_at' => 'purchase_started_at',
        'purchase_completed_at' => 'purchase_completed_at',
        'purchase_failed_at' => 'purchase_failed_at',
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
        'status' => 'setStatus',
        'currency_code' => 'setCurrencyCode',
        'cost_amount_cents' => 'setCostAmountCents',
        'cost_amount_float' => 'setCostAmountFloat',
        'formatted_cost_amount' => 'setFormattedCostAmount',
        'skus_count' => 'setSkusCount',
        'selected_rate_id' => 'setSelectedRateId',
        'rates' => 'setRates',
        'purchase_error_code' => 'setPurchaseErrorCode',
        'purchase_error_message' => 'setPurchaseErrorMessage',
        'get_rates_started_at' => 'setGetRatesStartedAt',
        'get_rates_completed_at' => 'setGetRatesCompletedAt',
        'purchase_started_at' => 'setPurchaseStartedAt',
        'purchase_completed_at' => 'setPurchaseCompletedAt',
        'purchase_failed_at' => 'setPurchaseFailedAt',
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
        'status' => 'getStatus',
        'currency_code' => 'getCurrencyCode',
        'cost_amount_cents' => 'getCostAmountCents',
        'cost_amount_float' => 'getCostAmountFloat',
        'formatted_cost_amount' => 'getFormattedCostAmount',
        'skus_count' => 'getSkusCount',
        'selected_rate_id' => 'getSelectedRateId',
        'rates' => 'getRates',
        'purchase_error_code' => 'getPurchaseErrorCode',
        'purchase_error_message' => 'getPurchaseErrorMessage',
        'get_rates_started_at' => 'getGetRatesStartedAt',
        'get_rates_completed_at' => 'getGetRatesCompletedAt',
        'purchase_started_at' => 'getPurchaseStartedAt',
        'purchase_completed_at' => 'getPurchaseCompletedAt',
        'purchase_failed_at' => 'getPurchaseFailedAt',
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['cost_amount_cents'] = $data['cost_amount_cents'] ?? null;
        $this->container['cost_amount_float'] = $data['cost_amount_float'] ?? null;
        $this->container['formatted_cost_amount'] = $data['formatted_cost_amount'] ?? null;
        $this->container['skus_count'] = $data['skus_count'] ?? null;
        $this->container['selected_rate_id'] = $data['selected_rate_id'] ?? null;
        $this->container['rates'] = $data['rates'] ?? null;
        $this->container['purchase_error_code'] = $data['purchase_error_code'] ?? null;
        $this->container['purchase_error_message'] = $data['purchase_error_message'] ?? null;
        $this->container['get_rates_started_at'] = $data['get_rates_started_at'] ?? null;
        $this->container['get_rates_completed_at'] = $data['get_rates_completed_at'] ?? null;
        $this->container['purchase_started_at'] = $data['purchase_started_at'] ?? null;
        $this->container['purchase_completed_at'] = $data['purchase_completed_at'] ?? null;
        $this->container['purchase_failed_at'] = $data['purchase_failed_at'] ?? null;
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
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Unique identifier for the shipment
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The shipment status, one of 'draft', 'upcoming', 'cancelled', 'on_hold', 'picking', 'packing', 'ready_to_ship', or 'shipped'
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code The international 3-letter currency code as defined by the ISO 4217 standard, automatically inherited from the associated order.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets cost_amount_cents
     *
     * @return int|null
     */
    public function getCostAmountCents()
    {
        return $this->container['cost_amount_cents'];
    }

    /**
     * Sets cost_amount_cents
     *
     * @param int|null $cost_amount_cents The cost of this shipment from the selected carrier account, in cents.
     *
     * @return self
     */
    public function setCostAmountCents($cost_amount_cents)
    {
        $this->container['cost_amount_cents'] = $cost_amount_cents;

        return $this;
    }

    /**
     * Gets cost_amount_float
     *
     * @return float|null
     */
    public function getCostAmountFloat()
    {
        return $this->container['cost_amount_float'];
    }

    /**
     * Sets cost_amount_float
     *
     * @param float|null $cost_amount_float The cost of this shipment from the selected carrier account, float.
     *
     * @return self
     */
    public function setCostAmountFloat($cost_amount_float)
    {
        $this->container['cost_amount_float'] = $cost_amount_float;

        return $this;
    }

    /**
     * Gets formatted_cost_amount
     *
     * @return string|null
     */
    public function getFormattedCostAmount()
    {
        return $this->container['formatted_cost_amount'];
    }

    /**
     * Sets formatted_cost_amount
     *
     * @param string|null $formatted_cost_amount The cost of this shipment from the selected carrier account, formatted.
     *
     * @return self
     */
    public function setFormattedCostAmount($formatted_cost_amount)
    {
        $this->container['formatted_cost_amount'] = $formatted_cost_amount;

        return $this;
    }

    /**
     * Gets skus_count
     *
     * @return int|null
     */
    public function getSkusCount()
    {
        return $this->container['skus_count'];
    }

    /**
     * Sets skus_count
     *
     * @param int|null $skus_count The total number of skus in the shipment's line items. This can be useful to display a preview of the shipment content.
     *
     * @return self
     */
    public function setSkusCount($skus_count)
    {
        $this->container['skus_count'] = $skus_count;

        return $this;
    }

    /**
     * Gets selected_rate_id
     *
     * @return string|null
     */
    public function getSelectedRateId()
    {
        return $this->container['selected_rate_id'];
    }

    /**
     * Sets selected_rate_id
     *
     * @param string|null $selected_rate_id The selected purchase rate from the available shipping rates.
     *
     * @return self
     */
    public function setSelectedRateId($selected_rate_id)
    {
        $this->container['selected_rate_id'] = $selected_rate_id;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return object[]|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param object[]|null $rates The available shipping rates.
     *
     * @return self
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets purchase_error_code
     *
     * @return string|null
     */
    public function getPurchaseErrorCode()
    {
        return $this->container['purchase_error_code'];
    }

    /**
     * Sets purchase_error_code
     *
     * @param string|null $purchase_error_code The shipping rate purchase error code, if any.
     *
     * @return self
     */
    public function setPurchaseErrorCode($purchase_error_code)
    {
        $this->container['purchase_error_code'] = $purchase_error_code;

        return $this;
    }

    /**
     * Gets purchase_error_message
     *
     * @return string|null
     */
    public function getPurchaseErrorMessage()
    {
        return $this->container['purchase_error_message'];
    }

    /**
     * Sets purchase_error_message
     *
     * @param string|null $purchase_error_message The shipping rate purchase error message, if any.
     *
     * @return self
     */
    public function setPurchaseErrorMessage($purchase_error_message)
    {
        $this->container['purchase_error_message'] = $purchase_error_message;

        return $this;
    }

    /**
     * Gets get_rates_started_at
     *
     * @return string|null
     */
    public function getGetRatesStartedAt()
    {
        return $this->container['get_rates_started_at'];
    }

    /**
     * Sets get_rates_started_at
     *
     * @param string|null $get_rates_started_at Time at which the getting of the shipping rates started.
     *
     * @return self
     */
    public function setGetRatesStartedAt($get_rates_started_at)
    {
        $this->container['get_rates_started_at'] = $get_rates_started_at;

        return $this;
    }

    /**
     * Gets get_rates_completed_at
     *
     * @return string|null
     */
    public function getGetRatesCompletedAt()
    {
        return $this->container['get_rates_completed_at'];
    }

    /**
     * Sets get_rates_completed_at
     *
     * @param string|null $get_rates_completed_at Time at which the getting of the shipping rates completed.
     *
     * @return self
     */
    public function setGetRatesCompletedAt($get_rates_completed_at)
    {
        $this->container['get_rates_completed_at'] = $get_rates_completed_at;

        return $this;
    }

    /**
     * Gets purchase_started_at
     *
     * @return string|null
     */
    public function getPurchaseStartedAt()
    {
        return $this->container['purchase_started_at'];
    }

    /**
     * Sets purchase_started_at
     *
     * @param string|null $purchase_started_at Time at which the purchasing of the shipping rate started.
     *
     * @return self
     */
    public function setPurchaseStartedAt($purchase_started_at)
    {
        $this->container['purchase_started_at'] = $purchase_started_at;

        return $this;
    }

    /**
     * Gets purchase_completed_at
     *
     * @return string|null
     */
    public function getPurchaseCompletedAt()
    {
        return $this->container['purchase_completed_at'];
    }

    /**
     * Sets purchase_completed_at
     *
     * @param string|null $purchase_completed_at Time at which the purchasing of the shipping rate completed.
     *
     * @return self
     */
    public function setPurchaseCompletedAt($purchase_completed_at)
    {
        $this->container['purchase_completed_at'] = $purchase_completed_at;

        return $this;
    }

    /**
     * Gets purchase_failed_at
     *
     * @return string|null
     */
    public function getPurchaseFailedAt()
    {
        return $this->container['purchase_failed_at'];
    }

    /**
     * Sets purchase_failed_at
     *
     * @param string|null $purchase_failed_at Time at which the purchasing of the shipping rate failed.
     *
     * @return self
     */
    public function setPurchaseFailedAt($purchase_failed_at)
    {
        $this->container['purchase_failed_at'] = $purchase_failed_at;

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


