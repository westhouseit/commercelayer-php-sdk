# # PriceDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, inherited from the associated price list. | [optional]
**sku_code** | **string** | The code of the associated sku. When creating a price, either a valid sku_code or a sku relationship must be present. | [optional]
**amount_cents** | **int** | The sku price amount for the associated price list, in cents. | [optional]
**amount_float** | **float** | The sku price amount for the associated price list, float. | [optional]
**formatted_amount** | **string** | The sku price amount for the associated price list, formatted. | [optional]
**compare_at_amount_cents** | **int** | The compared price amount, in cents. Useful to display a percentage discount. | [optional]
**compare_at_amount_float** | **float** | The compared price amount, float. | [optional]
**formatted_compare_at_amount** | **string** | The compared price amount, formatted. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
