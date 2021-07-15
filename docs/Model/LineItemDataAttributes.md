# # LineItemDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | The code of the associated sku. | [optional]
**quantity** | **int** | The line item quantity. | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, automatically inherited from the order&#39;s market. | [optional]
**unit_amount_cents** | **int** | The unit amount of the line item, in cents. Can be specified without an item, otherwise is automatically populated from the price list associated to the order&#39;s market. | [optional]
**unit_amount_float** | **float** | The unit amount of the line item, float. This can be useful to track the purchase on thrid party systems, e.g Google Analyitcs Enhanced Ecommerce. | [optional]
**formatted_unit_amount** | **string** | The unit amount of the line item, formatted. This can be useful to display the amount with currency in you views. | [optional]
**options_amount_cents** | **int** | The options amount of the line item, in cents. | [optional]
**options_amount_float** | **float** | The options amount of the line item, float. | [optional]
**formatted_options_amount** | **string** | The options amount of the line item, formatted. | [optional]
**discount_cents** | **int** | The discount applied to the line item, in cents. When you apply a discount to an order, this is automatically calculated basing on the line item total_amount_cents value. | [optional]
**discount_float** | **float** | The discount applied to the line item, float. When you apply a discount to an order, this is automatically calculated basing on the line item total_amount_cents value. | [optional]
**formatted_discount** | **string** | The discount applied to the line item, fromatted. When you apply a discount to an order, this is automatically calculated basing on the line item total_amount_cents value. | [optional]
**total_amount_cents** | **int** | Calculated as unit amount x quantity + options amount, in cents. | [optional]
**total_amount_float** | **float** | Calculated as unit amount x quantity + options amount, float. This can be useful to track the purchase on thrid party systems, e.g Google Analyitcs Enhanced Ecommerce. | [optional]
**formatted_total_amount** | **string** | Calculated as unit amount x quantity + options amount, formatted. This can be useful to display the amount with currency in you views. | [optional]
**tax_amount_cents** | **int** | Calculated as total amount cents - discount cent * tax rate, in cents. | [optional]
**tax_amount_float** | **float** | Calculated as total amount cents - discount cent * tax rate, float. | [optional]
**formatted_tax_amount** | **string** | Calculated as total amount cents - discount cent * tax rate, formatted. | [optional]
**name** | **string** | The name of the line item. When blank, it gets populated with the name of the associated item (if present). | [optional]
**image_url** | **string** | The image_url of the line item. When blank, it gets populated with the image_url of the associated item (if present, sku only). | [optional]
**discount_breakdown** | **object** | The discount breakdown for this line item (if calculated). | [optional]
**tax_rate** | **float** | The tax rate for this line item (if calculated). | [optional]
**tax_breakdown** | **object** | The tax breakdown for this line item (if calculated). | [optional]
**item_type** | **string** | The type of the associate item. Can be one of &#39;sku&#39;, &#39;shipment&#39;, &#39;payment_method&#39;, &#39;adjustment&#39;, &#39;gift_card&#39;, or a valid promotion type. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
