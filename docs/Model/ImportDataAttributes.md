# # ImportDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resource_type** | **string** | The type of resource being imported. | [optional]
**parent_resource_id** | **string** | The ID of the parent resource to be associated with imported data. | [optional]
**status** | **string** | The import job status. One of &#39;pending&#39; (default), &#39;started&#39;, or &#39;completed&#39; | [optional]
**started_at** | **string** | Time at which the import was started. | [optional]
**completed_at** | **string** | Time at which the import was completed. | [optional]
**interrupted_at** | **string** | Time at which the import was interrupted. | [optional]
**inputs** | **object[]** | Array of objects representing the resources that are being imported. | [optional]
**inputs_size** | **int** | Indicates the size of the objects to be imported. | [optional]
**errors_count** | **int** | Indicates the number of import errors, if any. | [optional]
**warnings_count** | **int** | Indicates the number of import warnings, if any. | [optional]
**destroyed_count** | **int** | Indicates the number of records that have been destroyed, if any. | [optional]
**processed_count** | **int** | Indicates the number of records that have been processed (created or updated). | [optional]
**errors_log** | **object[]** | Contains the import errors, if any. | [optional]
**warnings_log** | **object[]** | Contains the import warnings, if any. | [optional]
**cleanup_records** | **bool** | Indicates if the import should cleanup records that are not included in the inputs array. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
