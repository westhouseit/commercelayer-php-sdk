# # PaypalPaymentDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_url** | **string** | The URL where the payer is redirected after they approve the payment. | [optional]
**cancel_url** | **string** | The URL where the payer is redirected after they cancel the payment. | [optional]
**note_to_payer** | **string** | A free-form field that you can use to send a note to the payer on PayPal. | [optional]
**paypal_payer_id** | **string** | The id of the payer that PayPal passes in the return_url. | [optional]
**name** | **string** | The PayPal payer id (if present) | [optional]
**paypal_id** | **string** | The id of the PayPal payment object. | [optional]
**status** | **string** | The PayPal payment status. One of &#39;created&#39; (default) or &#39;approved&#39;. | [optional]
**approval_url** | **string** | The URL the customer should be redirected to approve the payment. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
