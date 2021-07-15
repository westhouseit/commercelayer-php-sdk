# # PercentageDiscountPromotionCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The promotion&#39;s internal name. |
**starts_at** | **string** | The activation date/time of this promotion. |
**expires_at** | **string** | The expiration date/time of this promotion (must be after starts_at). |
**total_usage_limit** | **int** | The total number of times this promotion can be applied. |
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]
**percentage** | **int** | The discount percentage to be applied. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
