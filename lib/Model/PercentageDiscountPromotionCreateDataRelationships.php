<?php
/**
 * PercentageDiscountPromotionCreateDataRelationships
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
 * PercentageDiscountPromotionCreateDataRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PercentageDiscountPromotionCreateDataRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'percentageDiscountPromotionCreate_data_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'market' => '\OpenAPI\Client\Model\BillingInfoValidationRuleDataRelationshipsMarket',
        'promotion_rules' => '\OpenAPI\Client\Model\CouponDataRelationshipsPromotionRule',
        'order_amount_promotion_rule' => '\OpenAPI\Client\Model\ExternalPromotionDataRelationshipsOrderAmountPromotionRule',
        'sku_list_promotion_rule' => '\OpenAPI\Client\Model\ExternalPromotionDataRelationshipsSkuListPromotionRule',
        'coupon_codes_promotion_rule' => '\OpenAPI\Client\Model\ExternalPromotionDataRelationshipsCouponCodesPromotionRule',
        'sku_list' => '\OpenAPI\Client\Model\PercentageDiscountPromotionDataRelationshipsSkuList'
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
        'promotion_rules' => null,
        'order_amount_promotion_rule' => null,
        'sku_list_promotion_rule' => null,
        'coupon_codes_promotion_rule' => null,
        'sku_list' => null
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
        'promotion_rules' => 'promotion_rules',
        'order_amount_promotion_rule' => 'order_amount_promotion_rule',
        'sku_list_promotion_rule' => 'sku_list_promotion_rule',
        'coupon_codes_promotion_rule' => 'coupon_codes_promotion_rule',
        'sku_list' => 'sku_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market' => 'setMarket',
        'promotion_rules' => 'setPromotionRules',
        'order_amount_promotion_rule' => 'setOrderAmountPromotionRule',
        'sku_list_promotion_rule' => 'setSkuListPromotionRule',
        'coupon_codes_promotion_rule' => 'setCouponCodesPromotionRule',
        'sku_list' => 'setSkuList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market' => 'getMarket',
        'promotion_rules' => 'getPromotionRules',
        'order_amount_promotion_rule' => 'getOrderAmountPromotionRule',
        'sku_list_promotion_rule' => 'getSkuListPromotionRule',
        'coupon_codes_promotion_rule' => 'getCouponCodesPromotionRule',
        'sku_list' => 'getSkuList'
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
        $this->container['promotion_rules'] = $data['promotion_rules'] ?? null;
        $this->container['order_amount_promotion_rule'] = $data['order_amount_promotion_rule'] ?? null;
        $this->container['sku_list_promotion_rule'] = $data['sku_list_promotion_rule'] ?? null;
        $this->container['coupon_codes_promotion_rule'] = $data['coupon_codes_promotion_rule'] ?? null;
        $this->container['sku_list'] = $data['sku_list'] ?? null;
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
     * Gets promotion_rules
     *
     * @return \OpenAPI\Client\Model\CouponDataRelationshipsPromotionRule|null
     */
    public function getPromotionRules()
    {
        return $this->container['promotion_rules'];
    }

    /**
     * Sets promotion_rules
     *
     * @param \OpenAPI\Client\Model\CouponDataRelationshipsPromotionRule|null $promotion_rules promotion_rules
     *
     * @return self
     */
    public function setPromotionRules($promotion_rules)
    {
        $this->container['promotion_rules'] = $promotion_rules;

        return $this;
    }

    /**
     * Gets order_amount_promotion_rule
     *
     * @return \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsOrderAmountPromotionRule|null
     */
    public function getOrderAmountPromotionRule()
    {
        return $this->container['order_amount_promotion_rule'];
    }

    /**
     * Sets order_amount_promotion_rule
     *
     * @param \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsOrderAmountPromotionRule|null $order_amount_promotion_rule order_amount_promotion_rule
     *
     * @return self
     */
    public function setOrderAmountPromotionRule($order_amount_promotion_rule)
    {
        $this->container['order_amount_promotion_rule'] = $order_amount_promotion_rule;

        return $this;
    }

    /**
     * Gets sku_list_promotion_rule
     *
     * @return \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsSkuListPromotionRule|null
     */
    public function getSkuListPromotionRule()
    {
        return $this->container['sku_list_promotion_rule'];
    }

    /**
     * Sets sku_list_promotion_rule
     *
     * @param \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsSkuListPromotionRule|null $sku_list_promotion_rule sku_list_promotion_rule
     *
     * @return self
     */
    public function setSkuListPromotionRule($sku_list_promotion_rule)
    {
        $this->container['sku_list_promotion_rule'] = $sku_list_promotion_rule;

        return $this;
    }

    /**
     * Gets coupon_codes_promotion_rule
     *
     * @return \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsCouponCodesPromotionRule|null
     */
    public function getCouponCodesPromotionRule()
    {
        return $this->container['coupon_codes_promotion_rule'];
    }

    /**
     * Sets coupon_codes_promotion_rule
     *
     * @param \OpenAPI\Client\Model\ExternalPromotionDataRelationshipsCouponCodesPromotionRule|null $coupon_codes_promotion_rule coupon_codes_promotion_rule
     *
     * @return self
     */
    public function setCouponCodesPromotionRule($coupon_codes_promotion_rule)
    {
        $this->container['coupon_codes_promotion_rule'] = $coupon_codes_promotion_rule;

        return $this;
    }

    /**
     * Gets sku_list
     *
     * @return \OpenAPI\Client\Model\PercentageDiscountPromotionDataRelationshipsSkuList|null
     */
    public function getSkuList()
    {
        return $this->container['sku_list'];
    }

    /**
     * Sets sku_list
     *
     * @param \OpenAPI\Client\Model\PercentageDiscountPromotionDataRelationshipsSkuList|null $sku_list sku_list
     *
     * @return self
     */
    public function setSkuList($sku_list)
    {
        $this->container['sku_list'] = $sku_list;

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


