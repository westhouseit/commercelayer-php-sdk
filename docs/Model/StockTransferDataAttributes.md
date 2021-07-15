# # StockTransferDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku. | [optional]
**status** | **string** | The stock transfer status, one of &#39;draft&#39;, &#39;upcoming&#39;, &#39;picking&#39;, &#39;in_transit&#39;, &#39;completed&#39;, or &#39;cancelled&#39; | [optional]
**quantity** | **int** | The stock quantity to be transferred from the origin stock location to destination one | [optional]
**completed_at** | **string** | Time at which the stock transfer was completed. | [optional]
**cancelled_at** | **string** | Time at which the stock transfer was cancelled. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
