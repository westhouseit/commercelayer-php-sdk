<?php
/**
 * CheckoutComPaymentDataAttributes
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
 * CheckoutComPaymentDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CheckoutComPaymentDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'checkoutComPayment_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_type' => 'string',
        'token' => 'string',
        'session_id' => 'string',
        'source_id' => 'string',
        'customer_token' => 'string',
        'redirect_uri' => 'string',
        'payment_response' => 'object',
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
        'payment_type' => null,
        'token' => null,
        'session_id' => null,
        'source_id' => null,
        'customer_token' => null,
        'redirect_uri' => null,
        'payment_response' => null,
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
        'payment_type' => 'payment_type',
        'token' => 'token',
        'session_id' => 'session_id',
        'source_id' => 'source_id',
        'customer_token' => 'customer_token',
        'redirect_uri' => 'redirect_uri',
        'payment_response' => 'payment_response',
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
        'payment_type' => 'setPaymentType',
        'token' => 'setToken',
        'session_id' => 'setSessionId',
        'source_id' => 'setSourceId',
        'customer_token' => 'setCustomerToken',
        'redirect_uri' => 'setRedirectUri',
        'payment_response' => 'setPaymentResponse',
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
        'payment_type' => 'getPaymentType',
        'token' => 'getToken',
        'session_id' => 'getSessionId',
        'source_id' => 'getSourceId',
        'customer_token' => 'getCustomerToken',
        'redirect_uri' => 'getRedirectUri',
        'payment_response' => 'getPaymentResponse',
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
        $this->container['payment_type'] = $data['payment_type'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['session_id'] = $data['session_id'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['customer_token'] = $data['customer_token'] ?? null;
        $this->container['redirect_uri'] = $data['redirect_uri'] ?? null;
        $this->container['payment_response'] = $data['payment_response'] ?? null;
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
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type The payment source type.
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token The Checkout.com card or digital wallet token.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id A payment session ID used to obtain the details.
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The payment source identifier that can be used for subsequent payments.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets customer_token
     *
     * @return string|null
     */
    public function getCustomerToken()
    {
        return $this->container['customer_token'];
    }

    /**
     * Sets customer_token
     *
     * @param string|null $customer_token The customer's unique identifier. This can be passed as a source when making a payment.
     *
     * @return self
     */
    public function setCustomerToken($customer_token)
    {
        $this->container['customer_token'] = $customer_token;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri The URI that the customer should be redirected to in order to complete the payment.
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets payment_response
     *
     * @return object|null
     */
    public function getPaymentResponse()
    {
        return $this->container['payment_response'];
    }

    /**
     * Sets payment_response
     *
     * @param object|null $payment_response The Checkout.com payment response, used to fetch internal data.
     *
     * @return self
     */
    public function setPaymentResponse($payment_response)
    {
        $this->container['payment_response'] = $payment_response;

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

