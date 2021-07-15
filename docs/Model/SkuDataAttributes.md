# # SkuDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The SKU code, that uniquely identifies the SKU within the organization. | [optional]
**name** | **string** | The internal name of the SKU. | [optional]
**description** | **string** | An internal description of the SKU. | [optional]
**image_url** | **string** | The URL of an image that represents the SKU. | [optional]
**pieces_per_pack** | **int** | The number of pieces that compose the SKU. This is useful to describe sets and bundles. | [optional]
**weight** | **float** | The weight of the SKU. If present, it will be used to calculate the shipping rates. | [optional]
**unit_of_weight** | **string** | Can be one of &#39;gr&#39;, or &#39;oz&#39; | [optional]
**hs_tariff_number** | **string** | The Harmonized System Code used by customs to identify the products shipped across international borders. | [optional]
**do_not_ship** | **bool** | Indicates if the SKU doesn&#39;t generate shipments. | [optional]
**do_not_track** | **bool** | Indicates if the SKU doesn&#39;t track the stock inventory. | [optional]
**inventory** | **object** | Aggregated information about the SKU&#39;s inventory. Returned only when retrieving a single SKU. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
