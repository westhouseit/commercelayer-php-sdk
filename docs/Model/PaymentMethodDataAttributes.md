# # PaymentMethodDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_source_type** | **string** | The payment source type, can be one of: &#39;AdyenPayment&#39;, &#39;BraintreePayment&#39;, &#39;CheckoutComPayment&#39;, &#39;CreditCard&#39;, &#39;ExternalPayment&#39;, &#39;PaypalPayment&#39;, &#39;StripePayment&#39;, or &#39;WireTransfer&#39;. | [optional]
**name** | **string** | Payment source type, titleized | [optional]
**disabled_at** | **string** | Time at which the payment method was disabled. | [optional]
**price_amount_cents** | **int** | The payment method&#39;s price, in cents | [optional]
**price_amount_float** | **float** | The payment method&#39;s price, float | [optional]
**formatted_price_amount** | **string** | The payment method&#39;s price, formatted | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
