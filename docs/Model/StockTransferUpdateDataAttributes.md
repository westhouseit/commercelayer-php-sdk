# # StockTransferUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku. | [optional]
**_upcoming** | **bool** | Send this attribute if you want to mark this stock transfer as upcoming. | [optional]
**_picking** | **bool** | Send this attribute if you want to start picking this stock transfer. | [optional]
**_in_transit** | **bool** | Send this attribute if you want to mark this stock transfer as in transit. | [optional]
**_complete** | **bool** | Send this attribute if you want to complete this stock transfer. | [optional]
**_cancel** | **bool** | Send this attribute if you want to cancel this stock transfer. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
