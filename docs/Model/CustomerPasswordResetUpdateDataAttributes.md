# # CustomerPasswordResetUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_password** | **string** | The customer new password. This will be accepted only if a valid &#39;_reset_password_token&#39; is sent with the request. | [optional]
**_reset_password_token** | **string** | Send the &#39;reset_password_token&#39; that you got on create when updating the customer password. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
