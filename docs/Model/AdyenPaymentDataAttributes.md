# # AdyenPaymentDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_methods** | **object** | The merchant available payment methods for the assoiated order (i.e. country and amount). Required by the Adyen JS SDK. | [optional]
**payment_request_data** | **object** | The Adyen payment request data, collected by client. | [optional]
**payment_request_details** | **object** | The Adyen additional details request data, collected by client. | [optional]
**payment_response** | **object** | The Adyen payment response, used by client (includes &#39;resultCode&#39; and &#39;action&#39;). | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
