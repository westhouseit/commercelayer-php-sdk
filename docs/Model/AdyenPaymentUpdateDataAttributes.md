# # AdyenPaymentUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_request_data** | **object** | The Adyen payment request data, collected by client. | [optional]
**payment_request_details** | **object** | The Adyen additional details request data, collected by client. | [optional]
**payment_response** | **object** | The Adyen payment response, used by client (includes &#39;resultCode&#39; and &#39;action&#39;). | [optional]
**_authorize** | **bool** | Send this attribute if you want to authorize the payment. | [optional]
**_details** | **bool** | Send this attribute if you want to send additional details the payment request. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
