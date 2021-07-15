# # StripePaymentDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_secret** | **string** | The Stripe payment intent client secret. Required to create a charge through Stripe.js. | [optional]
**publishable_key** | **string** | The Stripe publishable API key. | [optional]
**options** | **object** | Stripe payment options: &#39;setup_future_usage&#39;, &#39;customer&#39;, and &#39;payment_method&#39; | [optional]
**payment_method** | **object** | Stripe &#39;payment_method&#39;, set by webhook. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
