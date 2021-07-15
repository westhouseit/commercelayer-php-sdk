# # ShippingMethodDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The shipping method&#39;s name | [optional]
**disabled_at** | **string** | Time at which the shipping method was disabled. | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, automatically inherited from the associated market. | [optional]
**price_amount_cents** | **int** | The price of this shipping method, in cents. | [optional]
**price_amount_float** | **float** | The price of this shipping method, float. | [optional]
**formatted_price_amount** | **string** | The price of this shipping method, formatted. | [optional]
**free_over_amount_cents** | **int** | Apply free shipping if the order amount is over this value, in cents. | [optional]
**free_over_amount_float** | **float** | Apply free shipping if the order amount is over this value, float. | [optional]
**formatted_free_over_amount** | **string** | Apply free shipping if the order amount is over this value, formatted. | [optional]
**price_amount_for_shipment_cents** | **int** | The calculated price (zero or price amount) when associated to a shipment, in cents. | [optional]
**price_amount_for_shipment_float** | **float** | The calculated price (zero or price amount) when associated to a shipment, float. | [optional]
**formatted_price_amount_for_shipment** | **string** | The calculated price (zero or price amount) when associated to a shipment, formatted. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
