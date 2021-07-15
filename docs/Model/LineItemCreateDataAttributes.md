# # LineItemCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku. | [optional]
**quantity** | **int** | The line item quantity. |
**_external_price** | **bool** | When creating a new line item, set this attribute to &#39;1&#39; if you want to inject the unit_amount_cents price from an external source. | [optional]
**_update_quantity** | **bool** | When creating a new line item, set this attribute to &#39;1&#39; if you want to update the line item quantity (if present) instead of creating a new line item for the same sku. | [optional]
**unit_amount_cents** | **int** | The unit amount of the line item, in cents. Can be specified without an item, otherwise is automatically populated from the price list associated to the order&#39;s market. | [optional]
**name** | **string** | The name of the line item. When blank, it gets populated with the name of the associated item (if present). | [optional]
**image_url** | **string** | The image_url of the line item. When blank, it gets populated with the image_url of the associated item (if present, sku only). | [optional]
**item_type** | **string** | The type of the associate item. Can be one of &#39;sku&#39;, &#39;shipment&#39;, &#39;payment_method&#39;, &#39;adjustment&#39;, &#39;gift_card&#39;, or a valid promotion type. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
