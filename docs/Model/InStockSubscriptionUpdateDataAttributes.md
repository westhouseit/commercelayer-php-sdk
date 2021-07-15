# # InStockSubscriptionUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku, replace the relationship | [optional]
**stock_threshold** | **int** | The threshold at which to trigger the back in stock notification, default to 1. | [optional]
**_activate** | **bool** | Send this attribute if you want to activate an inactive subscription. | [optional]
**_deactivate** | **bool** | Send this attribute if you want to dactivate an active subscription. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
