# # InventoryModelCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The inventory model&#39;s internal name. |
**strategy** | **string** | The inventory model&#39;s shipping strategy: one between &#39;split_shipments&#39; (default), &#39;ship_from_primary&#39;, &#39;ship_from_first_available_or_primary&#39; and &#39;ship_from_most_available&#39;. |
**stock_locations_cutoff** | **int** | The maximum number of stock locations used for inventory computation | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
