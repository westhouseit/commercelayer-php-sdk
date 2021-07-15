# # WebhookUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | The identifier of the resource/event that will trigger the webhook. | [optional]
**callback_url** | **string** | URI where the webhook subscription should send the POST request when the event occurs. | [optional]
**include_resources** | **string[]** | List of related resources that should be included in the webhook body. | [optional]
**_reset_circuit** | **bool** | Send this attribute if you want to reset the circuit breaker associated to this webhook to &#39;closed&#39; state and zero failures count. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
