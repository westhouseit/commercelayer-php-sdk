# # CaptureDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | The transaction number, auto generated | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard, inherited from the associated order. | [optional]
**amount_cents** | **int** | The transaction amount, in cents. | [optional]
**amount_float** | **float** | The transaction amount, float. | [optional]
**formatted_amount** | **string** | The transaction amount, formatted. | [optional]
**succeeded** | **bool** | Indicates if the transaction is successful | [optional]
**message** | **string** | The message returned by the payment gateway | [optional]
**error_code** | **string** | The error code, if any, returned by the payment gateway | [optional]
**error_detail** | **string** | The error detail, if any, returned by the payment gateway | [optional]
**token** | **string** | The token identifying the transaction, returned by the payment gateway | [optional]
**gateway_transaction_id** | **string** | The ID identifying the transaction, returned by the payment gateway | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]
**refund_amount_cents** | **int** | The amount to be refunded, in cents. | [optional]
**refund_amount_float** | **float** | The amount to be refunded, float. | [optional]
**formatted_refund_amount** | **string** | The amount to be refunded, formatted. | [optional]
**refund_balance_cents** | **int** | The balance to be refunded, in cents. | [optional]
**refund_balance_float** | **float** | The balance to be refunded, float. | [optional]
**formatted_refund_balance** | **string** | The balance to be refunded, formatted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
