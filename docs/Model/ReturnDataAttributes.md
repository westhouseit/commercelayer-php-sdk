# # ReturnDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Unique identifier for the return | [optional]
**status** | **string** | The return status, one of &#39;draft&#39;, &#39;requested&#39;, &#39;approved&#39;, &#39;rejected&#39;, &#39;shipped&#39; or &#39;received&#39; | [optional]
**customer_email** | **string** | The email address of the associated customer. | [optional]
**skus_count** | **int** | The total number of skus in the return&#39;s line items. This can be useful to display a preview of the return content. | [optional]
**approved_at** | **string** | Time at which the return was approved. | [optional]
**cancelled_at** | **string** | Time at which the return was cancelled. | [optional]
**shipped_at** | **string** | Time at which the return was shipped. | [optional]
**rejected_at** | **string** | Time at which the return was rejected. | [optional]
**received_at** | **string** | Time at which the return was received. | [optional]
**archived_at** | **string** | Time at which the resource has been archived. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
