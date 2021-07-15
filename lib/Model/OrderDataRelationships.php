<?php
/**
 * OrderDataRelationships
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
 * OrderDataRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderDataRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_data_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'market' => '\OpenAPI\Client\Model\BillingInfoValidationRuleDataRelationshipsMarket',
        'customer' => '\OpenAPI\Client\Model\CustomerAddressDataRelationshipsCustomer',
        'shipping_address' => '\OpenAPI\Client\Model\OrderDataRelationshipsShippingAddress',
        'billing_address' => '\OpenAPI\Client\Model\OrderDataRelationshipsBillingAddress',
        'available_payment_methods' => '\OpenAPI\Client\Model\OrderDataRelationshipsAvailablePaymentMethods',
        'available_customer_payment_sources' => '\OpenAPI\Client\Model\OrderDataRelationshipsAvailableCustomerPaymentSources',
        'payment_method' => '\OpenAPI\Client\Model\AdyenGatewayDataRelationshipsPaymentMethods',
        'payment_source' => '\OpenAPI\Client\Model\CustomerPaymentSourceDataRelationshipsPaymentSource',
        'line_items' => '\OpenAPI\Client\Model\LineItemOptionDataRelationshipsLineItem',
        'shipments' => '\OpenAPI\Client\Model\OrderDataRelationshipsShipments',
        'transactions' => '\OpenAPI\Client\Model\OrderDataRelationshipsTransactions',
        'authorizations' => '\OpenAPI\Client\Model\OrderDataRelationshipsAuthorizations',
        'captures' => '\OpenAPI\Client\Model\AuthorizationDataRelationshipsCaptures',
        'voids' => '\OpenAPI\Client\Model\AuthorizationDataRelationshipsVoids',
        'refunds' => '\OpenAPI\Client\Model\CaptureDataRelationshipsRefunds',
        'attachments' => '\OpenAPI\Client\Model\AvalaraAccountDataRelationshipsAttachments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'market' => null,
        'customer' => null,
        'shipping_address' => null,
        'billing_address' => null,
        'available_payment_methods' => null,
        'available_customer_payment_sources' => null,
        'payment_method' => null,
        'payment_source' => null,
        'line_items' => null,
        'shipments' => null,
        'transactions' => null,
        'authorizations' => null,
        'captures' => null,
        'voids' => null,
        'refunds' => null,
        'attachments' => null
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
        'market' => 'market',
        'customer' => 'customer',
        'shipping_address' => 'shipping_address',
        'billing_address' => 'billing_address',
        'available_payment_methods' => 'available_payment_methods',
        'available_customer_payment_sources' => 'available_customer_payment_sources',
        'payment_method' => 'payment_method',
        'payment_source' => 'payment_source',
        'line_items' => 'line_items',
        'shipments' => 'shipments',
        'transactions' => 'transactions',
        'authorizations' => 'authorizations',
        'captures' => 'captures',
        'voids' => 'voids',
        'refunds' => 'refunds',
        'attachments' => 'attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market' => 'setMarket',
        'customer' => 'setCustomer',
        'shipping_address' => 'setShippingAddress',
        'billing_address' => 'setBillingAddress',
        'available_payment_methods' => 'setAvailablePaymentMethods',
        'available_customer_payment_sources' => 'setAvailableCustomerPaymentSources',
        'payment_method' => 'setPaymentMethod',
        'payment_source' => 'setPaymentSource',
        'line_items' => 'setLineItems',
        'shipments' => 'setShipments',
        'transactions' => 'setTransactions',
        'authorizations' => 'setAuthorizations',
        'captures' => 'setCaptures',
        'voids' => 'setVoids',
        'refunds' => 'setRefunds',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market' => 'getMarket',
        'customer' => 'getCustomer',
        'shipping_address' => 'getShippingAddress',
        'billing_address' => 'getBillingAddress',
        'available_payment_methods' => 'getAvailablePaymentMethods',
        'available_customer_payment_sources' => 'getAvailableCustomerPaymentSources',
        'payment_method' => 'getPaymentMethod',
        'payment_source' => 'getPaymentSource',
        'line_items' => 'getLineItems',
        'shipments' => 'getShipments',
        'transactions' => 'getTransactions',
        'authorizations' => 'getAuthorizations',
        'captures' => 'getCaptures',
        'voids' => 'getVoids',
        'refunds' => 'getRefunds',
        'attachments' => 'getAttachments'
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
        $this->container['market'] = $data['market'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['available_payment_methods'] = $data['available_payment_methods'] ?? null;
        $this->container['available_customer_payment_sources'] = $data['available_customer_payment_sources'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_source'] = $data['payment_source'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['shipments'] = $data['shipments'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['authorizations'] = $data['authorizations'] ?? null;
        $this->container['captures'] = $data['captures'] ?? null;
        $this->container['voids'] = $data['voids'] ?? null;
        $this->container['refunds'] = $data['refunds'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
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
     * Gets market
     *
     * @return \OpenAPI\Client\Model\BillingInfoValidationRuleDataRelationshipsMarket|null
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param \OpenAPI\Client\Model\BillingInfoValidationRuleDataRelationshipsMarket|null $market market
     *
     * @return self
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\CustomerAddressDataRelationshipsCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\CustomerAddressDataRelationshipsCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsShippingAddress|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsShippingAddress|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsBillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsBillingAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets available_payment_methods
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsAvailablePaymentMethods|null
     */
    public function getAvailablePaymentMethods()
    {
        return $this->container['available_payment_methods'];
    }

    /**
     * Sets available_payment_methods
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsAvailablePaymentMethods|null $available_payment_methods available_payment_methods
     *
     * @return self
     */
    public function setAvailablePaymentMethods($available_payment_methods)
    {
        $this->container['available_payment_methods'] = $available_payment_methods;

        return $this;
    }

    /**
     * Gets available_customer_payment_sources
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsAvailableCustomerPaymentSources|null
     */
    public function getAvailableCustomerPaymentSources()
    {
        return $this->container['available_customer_payment_sources'];
    }

    /**
     * Sets available_customer_payment_sources
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsAvailableCustomerPaymentSources|null $available_customer_payment_sources available_customer_payment_sources
     *
     * @return self
     */
    public function setAvailableCustomerPaymentSources($available_customer_payment_sources)
    {
        $this->container['available_customer_payment_sources'] = $available_customer_payment_sources;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\AdyenGatewayDataRelationshipsPaymentMethods|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\AdyenGatewayDataRelationshipsPaymentMethods|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_source
     *
     * @return \OpenAPI\Client\Model\CustomerPaymentSourceDataRelationshipsPaymentSource|null
     */
    public function getPaymentSource()
    {
        return $this->container['payment_source'];
    }

    /**
     * Sets payment_source
     *
     * @param \OpenAPI\Client\Model\CustomerPaymentSourceDataRelationshipsPaymentSource|null $payment_source payment_source
     *
     * @return self
     */
    public function setPaymentSource($payment_source)
    {
        $this->container['payment_source'] = $payment_source;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\LineItemOptionDataRelationshipsLineItem|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\LineItemOptionDataRelationshipsLineItem|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsShipments|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsShipments|null $shipments shipments
     *
     * @return self
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsTransactions|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsTransactions|null $transactions transactions
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets authorizations
     *
     * @return \OpenAPI\Client\Model\OrderDataRelationshipsAuthorizations|null
     */
    public function getAuthorizations()
    {
        return $this->container['authorizations'];
    }

    /**
     * Sets authorizations
     *
     * @param \OpenAPI\Client\Model\OrderDataRelationshipsAuthorizations|null $authorizations authorizations
     *
     * @return self
     */
    public function setAuthorizations($authorizations)
    {
        $this->container['authorizations'] = $authorizations;

        return $this;
    }

    /**
     * Gets captures
     *
     * @return \OpenAPI\Client\Model\AuthorizationDataRelationshipsCaptures|null
     */
    public function getCaptures()
    {
        return $this->container['captures'];
    }

    /**
     * Sets captures
     *
     * @param \OpenAPI\Client\Model\AuthorizationDataRelationshipsCaptures|null $captures captures
     *
     * @return self
     */
    public function setCaptures($captures)
    {
        $this->container['captures'] = $captures;

        return $this;
    }

    /**
     * Gets voids
     *
     * @return \OpenAPI\Client\Model\AuthorizationDataRelationshipsVoids|null
     */
    public function getVoids()
    {
        return $this->container['voids'];
    }

    /**
     * Sets voids
     *
     * @param \OpenAPI\Client\Model\AuthorizationDataRelationshipsVoids|null $voids voids
     *
     * @return self
     */
    public function setVoids($voids)
    {
        $this->container['voids'] = $voids;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \OpenAPI\Client\Model\CaptureDataRelationshipsRefunds|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \OpenAPI\Client\Model\CaptureDataRelationshipsRefunds|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\AvalaraAccountDataRelationshipsAttachments|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\AvalaraAccountDataRelationshipsAttachments|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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

