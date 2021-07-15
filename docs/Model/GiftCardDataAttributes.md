# # GiftCardDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The gift card status, one of &#39;draft&#39;, &#39;inactive&#39;, &#39;active&#39;, or &#39;redeemed&#39;. | [optional]
**code** | **string** | The gift card code UUID. If not set, it&#39;s automatically generated. | [optional]
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard. | [optional]
**initial_balance_cents** | **int** | The gift card initial balance, in cents. | [optional]
**initial_balance_float** | **float** | The gift card initial balance, float. | [optional]
**formatted_initial_balance** | **string** | The gift card initial balance, formatted. | [optional]
**balance_cents** | **int** | The gift card balance, in cents. | [optional]
**balance_float** | **float** | The gift card balance, float. | [optional]
**formatted_balance** | **string** | The gift card balance, formatted. | [optional]
**balance_max_cents** | **string** | The gift card balance max, in cents. | [optional]
**balance_max_float** | **float** | The gift card balance max, float. | [optional]
**formatted_balance_max** | **string** | The gift card balance max, formatted. | [optional]
**balance_log** | **object[]** | The gift card balance log. Tracks all the gift card transactions. | [optional]
**single_use** | **bool** | Indicates if the gift card can be used only one. | [optional]
**rechargeable** | **bool** | Indicates if the gift card can be recharged. | [optional]
**image_url** | **string** | The URL of an image that represents the gift card. | [optional]
**expires_at** | **string** | Time at which the gift card will expire. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**recipient_email** | **string** | The email address of the associated recipient. When creating or updating a gift card, this is a shortcut to find or create the associated recipient by email. | [optional]
**_balance_change_cents** | **int** | The balance change, in cents. Send a negative value to reduces the card balance by the specified amount. Send a positive value to recharge the gift card (if rechargeable). | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
