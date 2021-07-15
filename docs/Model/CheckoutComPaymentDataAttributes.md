# # CheckoutComPaymentDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_type** | **string** | The payment source type. | [optional]
**token** | **string** | The Checkout.com card or digital wallet token. | [optional]
**session_id** | **string** | A payment session ID used to obtain the details. | [optional]
**source_id** | **string** | The payment source identifier that can be used for subsequent payments. | [optional]
**customer_token** | **string** | The customer&#39;s unique identifier. This can be passed as a source when making a payment. | [optional]
**redirect_uri** | **string** | The URI that the customer should be redirected to in order to complete the payment. | [optional]
**payment_response** | **object** | The Checkout.com payment response, used to fetch internal data. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
