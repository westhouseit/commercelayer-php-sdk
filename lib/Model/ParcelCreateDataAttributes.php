<?php
/**
 * ParcelCreateDataAttributes
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
 * ParcelCreateDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ParcelCreateDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'parcelCreate_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'weight' => 'float',
        'unit_of_weight' => 'string',
        'eel_pfc' => 'string',
        'contents_type' => 'string',
        'contents_explanation' => 'string',
        'customs_certify' => 'bool',
        'customs_signer' => 'string',
        'non_delivery_option' => 'string',
        'restriction_type' => 'string',
        'restriction_comments' => 'string',
        'customs_info_required' => 'bool',
        'tracking_number' => 'string',
        'tracking_status' => 'string',
        'tracking_status_detail' => 'string',
        'tracking_status_updated_at' => 'string',
        'tracking_details' => 'string',
        'carrier_weight_oz' => 'string',
        'signed_by' => 'string',
        'incoterm' => 'string',
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
        'weight' => null,
        'unit_of_weight' => null,
        'eel_pfc' => null,
        'contents_type' => null,
        'contents_explanation' => null,
        'customs_certify' => null,
        'customs_signer' => null,
        'non_delivery_option' => null,
        'restriction_type' => null,
        'restriction_comments' => null,
        'customs_info_required' => null,
        'tracking_number' => null,
        'tracking_status' => null,
        'tracking_status_detail' => null,
        'tracking_status_updated_at' => null,
        'tracking_details' => null,
        'carrier_weight_oz' => null,
        'signed_by' => null,
        'incoterm' => null,
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
        'weight' => 'weight',
        'unit_of_weight' => 'unit_of_weight',
        'eel_pfc' => 'eel_pfc',
        'contents_type' => 'contents_type',
        'contents_explanation' => 'contents_explanation',
        'customs_certify' => 'customs_certify',
        'customs_signer' => 'customs_signer',
        'non_delivery_option' => 'non_delivery_option',
        'restriction_type' => 'restriction_type',
        'restriction_comments' => 'restriction_comments',
        'customs_info_required' => 'customs_info_required',
        'tracking_number' => 'tracking_number',
        'tracking_status' => 'tracking_status',
        'tracking_status_detail' => 'tracking_status_detail',
        'tracking_status_updated_at' => 'tracking_status_updated_at',
        'tracking_details' => 'tracking_details',
        'carrier_weight_oz' => 'carrier_weight_oz',
        'signed_by' => 'signed_by',
        'incoterm' => 'incoterm',
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
        'weight' => 'setWeight',
        'unit_of_weight' => 'setUnitOfWeight',
        'eel_pfc' => 'setEelPfc',
        'contents_type' => 'setContentsType',
        'contents_explanation' => 'setContentsExplanation',
        'customs_certify' => 'setCustomsCertify',
        'customs_signer' => 'setCustomsSigner',
        'non_delivery_option' => 'setNonDeliveryOption',
        'restriction_type' => 'setRestrictionType',
        'restriction_comments' => 'setRestrictionComments',
        'customs_info_required' => 'setCustomsInfoRequired',
        'tracking_number' => 'setTrackingNumber',
        'tracking_status' => 'setTrackingStatus',
        'tracking_status_detail' => 'setTrackingStatusDetail',
        'tracking_status_updated_at' => 'setTrackingStatusUpdatedAt',
        'tracking_details' => 'setTrackingDetails',
        'carrier_weight_oz' => 'setCarrierWeightOz',
        'signed_by' => 'setSignedBy',
        'incoterm' => 'setIncoterm',
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
        'weight' => 'getWeight',
        'unit_of_weight' => 'getUnitOfWeight',
        'eel_pfc' => 'getEelPfc',
        'contents_type' => 'getContentsType',
        'contents_explanation' => 'getContentsExplanation',
        'customs_certify' => 'getCustomsCertify',
        'customs_signer' => 'getCustomsSigner',
        'non_delivery_option' => 'getNonDeliveryOption',
        'restriction_type' => 'getRestrictionType',
        'restriction_comments' => 'getRestrictionComments',
        'customs_info_required' => 'getCustomsInfoRequired',
        'tracking_number' => 'getTrackingNumber',
        'tracking_status' => 'getTrackingStatus',
        'tracking_status_detail' => 'getTrackingStatusDetail',
        'tracking_status_updated_at' => 'getTrackingStatusUpdatedAt',
        'tracking_details' => 'getTrackingDetails',
        'carrier_weight_oz' => 'getCarrierWeightOz',
        'signed_by' => 'getSignedBy',
        'incoterm' => 'getIncoterm',
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
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['unit_of_weight'] = $data['unit_of_weight'] ?? null;
        $this->container['eel_pfc'] = $data['eel_pfc'] ?? null;
        $this->container['contents_type'] = $data['contents_type'] ?? null;
        $this->container['contents_explanation'] = $data['contents_explanation'] ?? null;
        $this->container['customs_certify'] = $data['customs_certify'] ?? null;
        $this->container['customs_signer'] = $data['customs_signer'] ?? null;
        $this->container['non_delivery_option'] = $data['non_delivery_option'] ?? null;
        $this->container['restriction_type'] = $data['restriction_type'] ?? null;
        $this->container['restriction_comments'] = $data['restriction_comments'] ?? null;
        $this->container['customs_info_required'] = $data['customs_info_required'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['tracking_status'] = $data['tracking_status'] ?? null;
        $this->container['tracking_status_detail'] = $data['tracking_status_detail'] ?? null;
        $this->container['tracking_status_updated_at'] = $data['tracking_status_updated_at'] ?? null;
        $this->container['tracking_details'] = $data['tracking_details'] ?? null;
        $this->container['carrier_weight_oz'] = $data['carrier_weight_oz'] ?? null;
        $this->container['signed_by'] = $data['signed_by'] ?? null;
        $this->container['incoterm'] = $data['incoterm'] ?? null;
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
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight The parcel weight, used to automatically calculate the tax rates from the available carrier accounts.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets unit_of_weight
     *
     * @return string|null
     */
    public function getUnitOfWeight()
    {
        return $this->container['unit_of_weight'];
    }

    /**
     * Sets unit_of_weight
     *
     * @param string|null $unit_of_weight The unit of weight. Can be one of 'gr', or 'oz'.
     *
     * @return self
     */
    public function setUnitOfWeight($unit_of_weight)
    {
        $this->container['unit_of_weight'] = $unit_of_weight;

        return $this;
    }

    /**
     * Gets eel_pfc
     *
     * @return string|null
     */
    public function getEelPfc()
    {
        return $this->container['eel_pfc'];
    }

    /**
     * Sets eel_pfc
     *
     * @param string|null $eel_pfc When shipping outside the US, you need to provide either an Exemption and Exclusion Legend (EEL) code or a Proof of Filing Citation (PFC). Which you need is based on the value of the goods being shipped. Value can be one of \"EEL\" o \"PFC\".
     *
     * @return self
     */
    public function setEelPfc($eel_pfc)
    {
        $this->container['eel_pfc'] = $eel_pfc;

        return $this;
    }

    /**
     * Gets contents_type
     *
     * @return string|null
     */
    public function getContentsType()
    {
        return $this->container['contents_type'];
    }

    /**
     * Sets contents_type
     *
     * @param string|null $contents_type The type of item you are sending. Can be one of 'merchandise', 'gift', 'documents', 'returned_goods', 'sample', or 'other'.
     *
     * @return self
     */
    public function setContentsType($contents_type)
    {
        $this->container['contents_type'] = $contents_type;

        return $this;
    }

    /**
     * Gets contents_explanation
     *
     * @return string|null
     */
    public function getContentsExplanation()
    {
        return $this->container['contents_explanation'];
    }

    /**
     * Sets contents_explanation
     *
     * @param string|null $contents_explanation If you specify 'other' in the 'contents_type' attribute, you must supply a brief description in this attribute.
     *
     * @return self
     */
    public function setContentsExplanation($contents_explanation)
    {
        $this->container['contents_explanation'] = $contents_explanation;

        return $this;
    }

    /**
     * Gets customs_certify
     *
     * @return bool|null
     */
    public function getCustomsCertify()
    {
        return $this->container['customs_certify'];
    }

    /**
     * Sets customs_certify
     *
     * @param bool|null $customs_certify Indicates if the provided information is accurate
     *
     * @return self
     */
    public function setCustomsCertify($customs_certify)
    {
        $this->container['customs_certify'] = $customs_certify;

        return $this;
    }

    /**
     * Gets customs_signer
     *
     * @return string|null
     */
    public function getCustomsSigner()
    {
        return $this->container['customs_signer'];
    }

    /**
     * Sets customs_signer
     *
     * @param string|null $customs_signer This is the name of the person who is certifying that the information provided on the customs form is accurate. Use a name of the person in your organization who is responsible for this.
     *
     * @return self
     */
    public function setCustomsSigner($customs_signer)
    {
        $this->container['customs_signer'] = $customs_signer;

        return $this;
    }

    /**
     * Gets non_delivery_option
     *
     * @return string|null
     */
    public function getNonDeliveryOption()
    {
        return $this->container['non_delivery_option'];
    }

    /**
     * Sets non_delivery_option
     *
     * @param string|null $non_delivery_option In case the shipment cannot be delivered, this option tells the carrier what you want to happen to the parcel. You can pass either 'return', or 'abandon'. The value defaults to 'return'. If you pass 'abandon', you will not receive the parcel back if it cannot be delivered.
     *
     * @return self
     */
    public function setNonDeliveryOption($non_delivery_option)
    {
        $this->container['non_delivery_option'] = $non_delivery_option;

        return $this;
    }

    /**
     * Gets restriction_type
     *
     * @return string|null
     */
    public function getRestrictionType()
    {
        return $this->container['restriction_type'];
    }

    /**
     * Sets restriction_type
     *
     * @param string|null $restriction_type Describes if your parcel requires any special treatment or quarantine when entering the country. Can be one of 'none', 'other', 'quarantine', or 'sanitary_phytosanitary_inspection'.
     *
     * @return self
     */
    public function setRestrictionType($restriction_type)
    {
        $this->container['restriction_type'] = $restriction_type;

        return $this;
    }

    /**
     * Gets restriction_comments
     *
     * @return string|null
     */
    public function getRestrictionComments()
    {
        return $this->container['restriction_comments'];
    }

    /**
     * Sets restriction_comments
     *
     * @param string|null $restriction_comments If you specify 'other' in the restriction type, you must supply a brief description of what is required.
     *
     * @return self
     */
    public function setRestrictionComments($restriction_comments)
    {
        $this->container['restriction_comments'] = $restriction_comments;

        return $this;
    }

    /**
     * Gets customs_info_required
     *
     * @return bool|null
     */
    public function getCustomsInfoRequired()
    {
        return $this->container['customs_info_required'];
    }

    /**
     * Sets customs_info_required
     *
     * @param bool|null $customs_info_required Indicates if the parcel requires customs info to get the shipping rates.
     *
     * @return self
     */
    public function setCustomsInfoRequired($customs_info_required)
    {
        $this->container['customs_info_required'] = $customs_info_required;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number associated to this parcel.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_status
     *
     * @return string|null
     */
    public function getTrackingStatus()
    {
        return $this->container['tracking_status'];
    }

    /**
     * Sets tracking_status
     *
     * @param string|null $tracking_status The tracking status for this parcel, automatically updated in real time by the shipping carrier.
     *
     * @return self
     */
    public function setTrackingStatus($tracking_status)
    {
        $this->container['tracking_status'] = $tracking_status;

        return $this;
    }

    /**
     * Gets tracking_status_detail
     *
     * @return string|null
     */
    public function getTrackingStatusDetail()
    {
        return $this->container['tracking_status_detail'];
    }

    /**
     * Sets tracking_status_detail
     *
     * @param string|null $tracking_status_detail Additional information about the tracking status, automatically updated in real time by the shipping carrier.
     *
     * @return self
     */
    public function setTrackingStatusDetail($tracking_status_detail)
    {
        $this->container['tracking_status_detail'] = $tracking_status_detail;

        return $this;
    }

    /**
     * Gets tracking_status_updated_at
     *
     * @return string|null
     */
    public function getTrackingStatusUpdatedAt()
    {
        return $this->container['tracking_status_updated_at'];
    }

    /**
     * Sets tracking_status_updated_at
     *
     * @param string|null $tracking_status_updated_at Time at which the parcel's tracking status was last updated.
     *
     * @return self
     */
    public function setTrackingStatusUpdatedAt($tracking_status_updated_at)
    {
        $this->container['tracking_status_updated_at'] = $tracking_status_updated_at;

        return $this;
    }

    /**
     * Gets tracking_details
     *
     * @return string|null
     */
    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details
     *
     * @param string|null $tracking_details The parcel's full tracking history, automatically updated in real time by the shipping carrier.
     *
     * @return self
     */
    public function setTrackingDetails($tracking_details)
    {
        $this->container['tracking_details'] = $tracking_details;

        return $this;
    }

    /**
     * Gets carrier_weight_oz
     *
     * @return string|null
     */
    public function getCarrierWeightOz()
    {
        return $this->container['carrier_weight_oz'];
    }

    /**
     * Sets carrier_weight_oz
     *
     * @param string|null $carrier_weight_oz The weight of the parcel as measured by the carrier in ounces (if available)
     *
     * @return self
     */
    public function setCarrierWeightOz($carrier_weight_oz)
    {
        $this->container['carrier_weight_oz'] = $carrier_weight_oz;

        return $this;
    }

    /**
     * Gets signed_by
     *
     * @return string|null
     */
    public function getSignedBy()
    {
        return $this->container['signed_by'];
    }

    /**
     * Sets signed_by
     *
     * @param string|null $signed_by The name of the person who signed for the parcel (if available)
     *
     * @return self
     */
    public function setSignedBy($signed_by)
    {
        $this->container['signed_by'] = $signed_by;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string|null $incoterm The type of Incoterm (if available).
     *
     * @return self
     */
    public function setIncoterm($incoterm)
    {
        $this->container['incoterm'] = $incoterm;

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

