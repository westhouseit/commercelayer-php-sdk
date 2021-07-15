# # ShipmentDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Unique identifier for the shipment | [optional]
**status** | **string** | The shipment status, one of &#39;draft&#39;, &#39;upcoming&#39;, &#39;cancelled&#39;, &#39;on_hold&#39;, &#39;picking&#39;, &#39;packing&#39;, &#39;ready_to_ship&#39;, or &#39;shipped&#39; | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, automatically inherited from the associated order. | [optional]
**cost_amount_cents** | **int** | The cost of this shipment from the selected carrier account, in cents. | [optional]
**cost_amount_float** | **float** | The cost of this shipment from the selected carrier account, float. | [optional]
**formatted_cost_amount** | **string** | The cost of this shipment from the selected carrier account, formatted. | [optional]
**skus_count** | **int** | The total number of skus in the shipment&#39;s line items. This can be useful to display a preview of the shipment content. | [optional]
**selected_rate_id** | **string** | The selected purchase rate from the available shipping rates. | [optional]
**rates** | **object[]** | The available shipping rates. | [optional]
**purchase_error_code** | **string** | The shipping rate purchase error code, if any. | [optional]
**purchase_error_message** | **string** | The shipping rate purchase error message, if any. | [optional]
**get_rates_started_at** | **string** | Time at which the getting of the shipping rates started. | [optional]
**get_rates_completed_at** | **string** | Time at which the getting of the shipping rates completed. | [optional]
**purchase_started_at** | **string** | Time at which the purchasing of the shipping rate started. | [optional]
**purchase_completed_at** | **string** | Time at which the purchasing of the shipping rate completed. | [optional]
**purchase_failed_at** | **string** | Time at which the purchasing of the shipping rate failed. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
