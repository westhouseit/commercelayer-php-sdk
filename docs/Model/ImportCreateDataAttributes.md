# # ImportCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resource_type** | **string** | The type of resource being imported. |
**parent_resource_id** | **string** | The ID of the parent resource to be associated with imported data. |
**inputs** | **object[]** | Array of objects representing the resources that are being imported. |
**cleanup_records** | **bool** | Indicates if the import should cleanup records that are not included in the inputs array. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
