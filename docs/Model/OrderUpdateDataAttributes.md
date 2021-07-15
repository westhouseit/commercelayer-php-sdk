# # OrderUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guest** | **bool** | Indicates if the order has been placed as guest. | [optional]
**customer_email** | **string** | The email address of the associated customer. When creating or updating an order, this is a shortcut to find or create the associated customer by email. | [optional]
**customer_password** | **string** | The password of the associated customer. When creating or updating an order, this is a shortcut to sign up the associated customer. | [optional]
**language_code** | **string** | The preferred language code (ISO 639-1) to be used when communicating with the customer. This can be useful when sending the order to 3rd party marketing tools and CRMs. If the language is supported, the hosted checkout will be localized accordingly. | [optional]
**shipping_country_code_lock** | **string** | The country code that you want the shipping address to be locked to. This can be useful to make sure the shipping address belongs to a given shipping country, e.g. the one selected in a country selector page. | [optional]
**coupon_code** | **string** | The coupon code to be used for the order. If valid, it triggers a promotion adding a discount line item to the order. | [optional]
**gift_card_code** | **string** | The gift card code (at least the first 8 characters) to be used for the order. If valid, it uses the gift card balance to pay for the order. | [optional]
**gift_card_or_coupon_code** | **string** | The gift card or coupon code (at least the first 8 characters) to be used for the order. If a gift card mathes, it uses the gift card balance to pay for the order. Otherwise it tries to find a valid coupon code and applies the associated discount. | [optional]
**cart_url** | **string** | The cart url on your site. If present, it will be used on our hosted checkout application. | [optional]
**return_url** | **string** | The return url on your site. If present, it will be used on our hosted checkout application. | [optional]
**terms_url** | **string** | The terms and conditions url on your site. If present, it will be used on our hosted checkout application. | [optional]
**privacy_url** | **string** | The privacy policy url on your site. If present, it will be used on our hosted checkout application. | [optional]
**_archive** | **bool** | Send this attribute if you want to archive the order. | [optional]
**_unarchive** | **bool** | Send this attribute if you want to unarchive the order. | [optional]
**_place** | **bool** | Send this attribute if you want to place the order. | [optional]
**_cancel** | **bool** | Send this attribute if you want to cancel a placed order. The order&#39;s authorization will be automatically voided. | [optional]
**_approve** | **bool** | Send this attribute if you want to approve a placed order. | [optional]
**_approve_and_capture** | **bool** | Send this attribute if you want to approve and capture a placed order. | [optional]
**_authorize** | **bool** | Send this attribute if you want to authorize the order&#39;s payment source. | [optional]
**_authorization_amount_cents** | **int** | The authorization amount, in cents. | [optional]
**_capture** | **bool** | Send this attribute if you want to capture an approved order. | [optional]
**_refund** | **bool** | Send this attribute if you want to refund a captured order. | [optional]
**_update_taxes** | **bool** | Send this attribute if you want to force tax calculation for this order (a tax calculator must be associated to the order&#39;s market). | [optional]
**_billing_address_clone_id** | **string** | The id of the address that you want to clone to create the order&#39;s billing address. | [optional]
**_shipping_address_clone_id** | **string** | The id of the address that you want to clone to create the order&#39;s shipping address. | [optional]
**_customer_payment_source_id** | **string** | The id of the customer payment source (i.e. credit card) that you want to use as the order&#39;s payment source. | [optional]
**_shipping_address_same_as_billing** | **bool** | Send this attribute if you want the shipping address to be cloned from the order&#39;s billing address. | [optional]
**_billing_address_same_as_shipping** | **bool** | Send this attribute if you want the billing address to be cloned from the order&#39;s shipping address. | [optional]
**_save_payment_source_to_customer_wallet** | **bool** | Send this attribute if you want the order&#39;s payment source to be saved in the customer&#39;s wallet as a customer payment source. | [optional]
**_save_shipping_address_to_customer_address_book** | **bool** | Send this attribute if you want the order&#39;s shipping address to be saved in the customer&#39;s address book as a customer address. | [optional]
**_save_billing_address_to_customer_address_book** | **bool** | Send this attribute if you want the order&#39;s billing address to be saved in the customer&#39;s address book as a customer address. | [optional]
**_refresh** | **bool** | Send this attribute if you want to refresh an order. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
