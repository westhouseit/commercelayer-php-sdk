# # CustomerPasswordResetDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_email** | **string** | The email of the customer that requires a password reset | [optional]
**reset_password_token** | **string** | Automatically generated on create. Send its value as the &#39;_reset_password_token&#39; argument when updating the customer password. | [optional]
**reset_password_at** | **string** | Time at which the password was reset. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
