# # SkuOptionCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The sku option&#39;s internal name |
**description** | **string** | An internal description of the sku option. | [optional]
**price_amount_cents** | **int** | The price of this shipping method, in cents. | [optional]
**delay_hours** | **int** | The delay time (in hours) that should be added to the delivery lead time when this option is purchased. | [optional]
**sku_code_regex** | **string** | The regex that will be evaluated to match the sku codes. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
