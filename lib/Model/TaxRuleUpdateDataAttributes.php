<?php
/**
 * TaxRuleUpdateDataAttributes
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
 * TaxRuleUpdateDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxRuleUpdateDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'taxRuleUpdate_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'tax_rate' => 'float',
        'country_code_regex' => 'string',
        'not_country_code_regex' => 'string',
        'state_code_regex' => 'string',
        'not_state_code_regex' => 'string',
        'zip_code_regex' => 'string',
        'not_zip_code_regex' => 'string',
        'freight_taxable' => 'bool',
        'payment_method_taxable' => 'bool',
        'gift_card_taxable' => 'bool',
        'adjustment_taxable' => 'bool',
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
        'name' => null,
        'tax_rate' => null,
        'country_code_regex' => null,
        'not_country_code_regex' => null,
        'state_code_regex' => null,
        'not_state_code_regex' => null,
        'zip_code_regex' => null,
        'not_zip_code_regex' => null,
        'freight_taxable' => null,
        'payment_method_taxable' => null,
        'gift_card_taxable' => null,
        'adjustment_taxable' => null,
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
        'name' => 'name',
        'tax_rate' => 'tax_rate',
        'country_code_regex' => 'country_code_regex',
        'not_country_code_regex' => 'not_country_code_regex',
        'state_code_regex' => 'state_code_regex',
        'not_state_code_regex' => 'not_state_code_regex',
        'zip_code_regex' => 'zip_code_regex',
        'not_zip_code_regex' => 'not_zip_code_regex',
        'freight_taxable' => 'freight_taxable',
        'payment_method_taxable' => 'payment_method_taxable',
        'gift_card_taxable' => 'gift_card_taxable',
        'adjustment_taxable' => 'adjustment_taxable',
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
        'name' => 'setName',
        'tax_rate' => 'setTaxRate',
        'country_code_regex' => 'setCountryCodeRegex',
        'not_country_code_regex' => 'setNotCountryCodeRegex',
        'state_code_regex' => 'setStateCodeRegex',
        'not_state_code_regex' => 'setNotStateCodeRegex',
        'zip_code_regex' => 'setZipCodeRegex',
        'not_zip_code_regex' => 'setNotZipCodeRegex',
        'freight_taxable' => 'setFreightTaxable',
        'payment_method_taxable' => 'setPaymentMethodTaxable',
        'gift_card_taxable' => 'setGiftCardTaxable',
        'adjustment_taxable' => 'setAdjustmentTaxable',
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
        'name' => 'getName',
        'tax_rate' => 'getTaxRate',
        'country_code_regex' => 'getCountryCodeRegex',
        'not_country_code_regex' => 'getNotCountryCodeRegex',
        'state_code_regex' => 'getStateCodeRegex',
        'not_state_code_regex' => 'getNotStateCodeRegex',
        'zip_code_regex' => 'getZipCodeRegex',
        'not_zip_code_regex' => 'getNotZipCodeRegex',
        'freight_taxable' => 'getFreightTaxable',
        'payment_method_taxable' => 'getPaymentMethodTaxable',
        'gift_card_taxable' => 'getGiftCardTaxable',
        'adjustment_taxable' => 'getAdjustmentTaxable',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['country_code_regex'] = $data['country_code_regex'] ?? null;
        $this->container['not_country_code_regex'] = $data['not_country_code_regex'] ?? null;
        $this->container['state_code_regex'] = $data['state_code_regex'] ?? null;
        $this->container['not_state_code_regex'] = $data['not_state_code_regex'] ?? null;
        $this->container['zip_code_regex'] = $data['zip_code_regex'] ?? null;
        $this->container['not_zip_code_regex'] = $data['not_zip_code_regex'] ?? null;
        $this->container['freight_taxable'] = $data['freight_taxable'] ?? null;
        $this->container['payment_method_taxable'] = $data['payment_method_taxable'] ?? null;
        $this->container['gift_card_taxable'] = $data['gift_card_taxable'] ?? null;
        $this->container['adjustment_taxable'] = $data['adjustment_taxable'] ?? null;
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
     * @param string|null $name The tax rule internal name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float|null $tax_rate The tax rate for this ruke.
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets country_code_regex
     *
     * @return string|null
     */
    public function getCountryCodeRegex()
    {
        return $this->container['country_code_regex'];
    }

    /**
     * Sets country_code_regex
     *
     * @param string|null $country_code_regex The regex that will be evaluated to match the shipping address country code.
     *
     * @return self
     */
    public function setCountryCodeRegex($country_code_regex)
    {
        $this->container['country_code_regex'] = $country_code_regex;

        return $this;
    }

    /**
     * Gets not_country_code_regex
     *
     * @return string|null
     */
    public function getNotCountryCodeRegex()
    {
        return $this->container['not_country_code_regex'];
    }

    /**
     * Sets not_country_code_regex
     *
     * @param string|null $not_country_code_regex The regex that will be evaluated as negative match for the shipping address country code.
     *
     * @return self
     */
    public function setNotCountryCodeRegex($not_country_code_regex)
    {
        $this->container['not_country_code_regex'] = $not_country_code_regex;

        return $this;
    }

    /**
     * Gets state_code_regex
     *
     * @return string|null
     */
    public function getStateCodeRegex()
    {
        return $this->container['state_code_regex'];
    }

    /**
     * Sets state_code_regex
     *
     * @param string|null $state_code_regex The regex that will be evaluated to match the shipping address state code.
     *
     * @return self
     */
    public function setStateCodeRegex($state_code_regex)
    {
        $this->container['state_code_regex'] = $state_code_regex;

        return $this;
    }

    /**
     * Gets not_state_code_regex
     *
     * @return string|null
     */
    public function getNotStateCodeRegex()
    {
        return $this->container['not_state_code_regex'];
    }

    /**
     * Sets not_state_code_regex
     *
     * @param string|null $not_state_code_regex The regex that will be evaluated as negative match for the shipping address state code.
     *
     * @return self
     */
    public function setNotStateCodeRegex($not_state_code_regex)
    {
        $this->container['not_state_code_regex'] = $not_state_code_regex;

        return $this;
    }

    /**
     * Gets zip_code_regex
     *
     * @return string|null
     */
    public function getZipCodeRegex()
    {
        return $this->container['zip_code_regex'];
    }

    /**
     * Sets zip_code_regex
     *
     * @param string|null $zip_code_regex The regex that will be evaluated to match the shipping address zip code.
     *
     * @return self
     */
    public function setZipCodeRegex($zip_code_regex)
    {
        $this->container['zip_code_regex'] = $zip_code_regex;

        return $this;
    }

    /**
     * Gets not_zip_code_regex
     *
     * @return string|null
     */
    public function getNotZipCodeRegex()
    {
        return $this->container['not_zip_code_regex'];
    }

    /**
     * Sets not_zip_code_regex
     *
     * @param string|null $not_zip_code_regex The regex that will be evaluated as negative match for the shipping zip country code.
     *
     * @return self
     */
    public function setNotZipCodeRegex($not_zip_code_regex)
    {
        $this->container['not_zip_code_regex'] = $not_zip_code_regex;

        return $this;
    }

    /**
     * Gets freight_taxable
     *
     * @return bool|null
     */
    public function getFreightTaxable()
    {
        return $this->container['freight_taxable'];
    }

    /**
     * Sets freight_taxable
     *
     * @param bool|null $freight_taxable Indicates if the freight is taxable.
     *
     * @return self
     */
    public function setFreightTaxable($freight_taxable)
    {
        $this->container['freight_taxable'] = $freight_taxable;

        return $this;
    }

    /**
     * Gets payment_method_taxable
     *
     * @return bool|null
     */
    public function getPaymentMethodTaxable()
    {
        return $this->container['payment_method_taxable'];
    }

    /**
     * Sets payment_method_taxable
     *
     * @param bool|null $payment_method_taxable Indicates if the payment method is taxable.
     *
     * @return self
     */
    public function setPaymentMethodTaxable($payment_method_taxable)
    {
        $this->container['payment_method_taxable'] = $payment_method_taxable;

        return $this;
    }

    /**
     * Gets gift_card_taxable
     *
     * @return bool|null
     */
    public function getGiftCardTaxable()
    {
        return $this->container['gift_card_taxable'];
    }

    /**
     * Sets gift_card_taxable
     *
     * @param bool|null $gift_card_taxable Indicates if gift cards are taxable.
     *
     * @return self
     */
    public function setGiftCardTaxable($gift_card_taxable)
    {
        $this->container['gift_card_taxable'] = $gift_card_taxable;

        return $this;
    }

    /**
     * Gets adjustment_taxable
     *
     * @return bool|null
     */
    public function getAdjustmentTaxable()
    {
        return $this->container['adjustment_taxable'];
    }

    /**
     * Sets adjustment_taxable
     *
     * @param bool|null $adjustment_taxable Indicates if adjustemnts are taxable.
     *
     * @return self
     */
    public function setAdjustmentTaxable($adjustment_taxable)
    {
        $this->container['adjustment_taxable'] = $adjustment_taxable;

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

