# # GiftCardUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The international 3-letter currency code as defined by the ISO 4217 standard. | [optional]
**balance_cents** | **int** | The gift card balance, in cents. | [optional]
**balance_max_cents** | **string** | The gift card balance max, in cents. | [optional]
**single_use** | **bool** | Indicates if the gift card can be used only one. | [optional]
**rechargeable** | **bool** | Indicates if the gift card can be recharged. | [optional]
**image_url** | **string** | The URL of an image that represents the gift card. | [optional]
**expires_at** | **string** | Time at which the gift card will expire. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**recipient_email** | **string** | The email address of the associated recipient. When creating or updating a gift card, this is a shortcut to find or create the associated recipient by email. | [optional]
**_purchase** | **bool** | Send this attribute if you want to confirm a draft gift card. The gift card becomes &#39;inactive&#39;, waiting to be activated. | [optional]
**_activate** | **bool** | Send this attribute if you want to activate a gift card. | [optional]
**_deactivate** | **bool** | Send this attribute if you want to deactivate a gift card. | [optional]
**_balance_change_cents** | **int** | The balance change, in cents. Send a negative value to reduces the card balance by the specified amount. Send a positive value to recharge the gift card (if rechargeable). | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
