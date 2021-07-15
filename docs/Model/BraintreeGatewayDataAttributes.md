# # BraintreeGatewayDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The payment gateway&#39;s internal name. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]
**descriptor_name** | **string** | The dynamic descriptor name. Must be composed by business name (3, 7 or 12 chars), an asterisk (*) and the product name (18, 14 or 9 chars), for a total length of 22 chars. | [optional]
**descriptor_phone** | **string** | The dynamic descriptor phone number. | [optional]
**descriptor_url** | **string** | The dynamic descriptor URL. | [optional]
**webhook_endpoint_url** | **string** | The gateway webhook URL, generated automatically. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
