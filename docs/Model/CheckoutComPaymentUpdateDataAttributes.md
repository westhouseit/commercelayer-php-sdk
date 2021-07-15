# # CheckoutComPaymentUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_type** | **string** | The payment source type. | [optional]
**token** | **string** | The Checkout.com card or digital wallet token. | [optional]
**session_id** | **string** | A payment session ID used to obtain the details. | [optional]
**_authorize** | **bool** | Send this attribute if you want to authorize the payment. | [optional]
**_details** | **bool** | Send this attribute if you want to send additional details the payment request (i.e. upon 3DS check). | [optional]
**_refresh** | **bool** | Send this attribute if you want to refresh all the pending transactions, can be used as webhooks fallback logic. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
