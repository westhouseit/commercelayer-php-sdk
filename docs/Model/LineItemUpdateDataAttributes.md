# # LineItemUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku. | [optional]
**quantity** | **int** | The line item quantity. | [optional]
**name** | **string** | The name of the line item. When blank, it gets populated with the name of the associated item (if present). | [optional]
**image_url** | **string** | The image_url of the line item. When blank, it gets populated with the image_url of the associated item (if present, sku only). | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
