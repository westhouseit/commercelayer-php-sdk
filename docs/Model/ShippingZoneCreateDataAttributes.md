# # ShippingZoneCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The shipping zone&#39;s internal name. |
**country_code_regex** | **string** | The regex that will be evaluated to match the shipping address country code. | [optional]
**not_country_code_regex** | **string** | The regex that will be evaluated as negative match for the shipping address country code. | [optional]
**state_code_regex** | **string** | The regex that will be evaluated to match the shipping address state code. | [optional]
**not_state_code_regex** | **string** | The regex that will be evaluated as negative match for the shipping address state code. | [optional]
**zip_code_regex** | **string** | The regex that will be evaluated to match the shipping address zip code. | [optional]
**not_zip_code_regex** | **string** | The regex that will be evaluated as negative match for the shipping zip country code. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
