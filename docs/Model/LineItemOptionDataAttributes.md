# # LineItemOptionDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the line item option. When blank, it gets populated with the name of the associated sku option. | [optional]
**quantity** | **int** | The line item option&#39;s quantity | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, automatically inherited from the order&#39;s market. | [optional]
**unit_amount_cents** | **int** | The unit amount of the line item option, in cents. When you add a line item option to an order, this is automatically populated from associated sku option&#39;s price. | [optional]
**unit_amount_float** | **float** | The unit amount of the line item option, float. This can be useful to track the purchase on thrid party systems, e.g Google Analyitcs Enhanced Ecommerce. | [optional]
**formatted_unit_amount** | **string** | The unit amount of the line item option, formatted. This can be useful to display the amount with currency in you views. | [optional]
**total_amount_cents** | **int** | The unit amount x quantity, in cents. | [optional]
**total_amount_float** | **float** | The unit amount x quantity, float. This can be useful to track the purchase on thrid party systems, e.g Google Analyitcs Enhanced Ecommerce. | [optional]
**formatted_total_amount** | **string** | The unit amount x quantity, formatted. This can be useful to display the amount with currency in you views. | [optional]
**delay_hours** | **int** | The shipping delay that the customer can expect when adding this option (hours). Inherited from the associated sku option. | [optional]
**delay_days** | **int** | The shipping delay that the customer can expect when adding this option (days, rounded). | [optional]
**options** | **object** | Set of key-value pairs that represent the selected options. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
