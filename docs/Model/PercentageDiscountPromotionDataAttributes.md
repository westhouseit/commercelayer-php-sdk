# # PercentageDiscountPromotionDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The promotion&#39;s internal name. | [optional]
**starts_at** | **string** | The activation date/time of this promotion. | [optional]
**expires_at** | **string** | The expiration date/time of this promotion (must be after starts_at). | [optional]
**total_usage_limit** | **int** | The total number of times this promotion can be applied. | [optional]
**total_usage_count** | **int** | The number of times this promotion has been applied. | [optional]
**active** | **bool** | Indicates if the promotion is active. | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]
**percentage** | **int** | The discount percentage to be applied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
