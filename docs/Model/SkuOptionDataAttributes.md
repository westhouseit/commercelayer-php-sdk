# # SkuOptionDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The sku option&#39;s internal name | [optional]
**description** | **string** | An internal description of the sku option. | [optional]
**price_amount_cents** | **int** | The price of this shipping method, in cents. | [optional]
**price_amount_float** | **float** | The price of this shipping method, float. | [optional]
**formatted_price_amount** | **string** | The price of this shipping method, formatted. | [optional]
**delay_hours** | **int** | The delay time (in hours) that should be added to the delivery lead time when this option is purchased. | [optional]
**delay_days** | **int** | The delay time, in days (rounded) | [optional]
**sku_code_regex** | **string** | The regex that will be evaluated to match the sku codes. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
