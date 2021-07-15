# OpenAPIClient-php

Headless Commerce for Global Brands.

For more information, please visit [https://commercelayer.io](https://commercelayer.io).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/westhouseit/commercelayer-php-sdk.git"
    }
  ],
  "require": {
    "westhouseit/commercelayer-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_id = 'address_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAddressesAddressId($address_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->dELETEAddressesAddressId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://core.commercelayer.io/users/sign_in*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**dELETEAddressesAddressId**](docs/Api/AddressesApi.md#deleteaddressesaddressid) | **DELETE** /addresses/{addressId} | Delete an address
*AddressesApi* | [**gETAddresses**](docs/Api/AddressesApi.md#getaddresses) | **GET** /addresses | List all addresses
*AddressesApi* | [**gETAddressesAddressId**](docs/Api/AddressesApi.md#getaddressesaddressid) | **GET** /addresses/{addressId} | Retrieve an address
*AddressesApi* | [**pATCHAddressesAddressId**](docs/Api/AddressesApi.md#patchaddressesaddressid) | **PATCH** /addresses/{addressId} | Update an address
*AddressesApi* | [**pOSTAddresses**](docs/Api/AddressesApi.md#postaddresses) | **POST** /addresses | Create an address
*AdjustmentsApi* | [**dELETEAdjustmentsAdjustmentId**](docs/Api/AdjustmentsApi.md#deleteadjustmentsadjustmentid) | **DELETE** /adjustments/{adjustmentId} | Delete an adjustment
*AdjustmentsApi* | [**gETAdjustments**](docs/Api/AdjustmentsApi.md#getadjustments) | **GET** /adjustments | List all adjustments
*AdjustmentsApi* | [**gETAdjustmentsAdjustmentId**](docs/Api/AdjustmentsApi.md#getadjustmentsadjustmentid) | **GET** /adjustments/{adjustmentId} | Retrieve an adjustment
*AdjustmentsApi* | [**pATCHAdjustmentsAdjustmentId**](docs/Api/AdjustmentsApi.md#patchadjustmentsadjustmentid) | **PATCH** /adjustments/{adjustmentId} | Update an adjustment
*AdjustmentsApi* | [**pOSTAdjustments**](docs/Api/AdjustmentsApi.md#postadjustments) | **POST** /adjustments | Create an adjustment
*AdyenGatewaysApi* | [**dELETEAdyenGatewaysAdyenGatewayId**](docs/Api/AdyenGatewaysApi.md#deleteadyengatewaysadyengatewayid) | **DELETE** /adyen_gateways/{adyenGatewayId} | Delete an adyen gateway
*AdyenGatewaysApi* | [**gETAdyenGateways**](docs/Api/AdyenGatewaysApi.md#getadyengateways) | **GET** /adyen_gateways | List all adyen gateways
*AdyenGatewaysApi* | [**gETAdyenGatewaysAdyenGatewayId**](docs/Api/AdyenGatewaysApi.md#getadyengatewaysadyengatewayid) | **GET** /adyen_gateways/{adyenGatewayId} | Retrieve an adyen gateway
*AdyenGatewaysApi* | [**pATCHAdyenGatewaysAdyenGatewayId**](docs/Api/AdyenGatewaysApi.md#patchadyengatewaysadyengatewayid) | **PATCH** /adyen_gateways/{adyenGatewayId} | Update an adyen gateway
*AdyenGatewaysApi* | [**pOSTAdyenGateways**](docs/Api/AdyenGatewaysApi.md#postadyengateways) | **POST** /adyen_gateways | Create an adyen gateway
*AdyenPaymentsApi* | [**dELETEAdyenPaymentsAdyenPaymentId**](docs/Api/AdyenPaymentsApi.md#deleteadyenpaymentsadyenpaymentid) | **DELETE** /adyen_payments/{adyenPaymentId} | Delete an adyen payment
*AdyenPaymentsApi* | [**gETAdyenPayments**](docs/Api/AdyenPaymentsApi.md#getadyenpayments) | **GET** /adyen_payments | List all adyen payments
*AdyenPaymentsApi* | [**gETAdyenPaymentsAdyenPaymentId**](docs/Api/AdyenPaymentsApi.md#getadyenpaymentsadyenpaymentid) | **GET** /adyen_payments/{adyenPaymentId} | Retrieve an adyen payment
*AdyenPaymentsApi* | [**pATCHAdyenPaymentsAdyenPaymentId**](docs/Api/AdyenPaymentsApi.md#patchadyenpaymentsadyenpaymentid) | **PATCH** /adyen_payments/{adyenPaymentId} | Update an adyen payment
*AdyenPaymentsApi* | [**pOSTAdyenPayments**](docs/Api/AdyenPaymentsApi.md#postadyenpayments) | **POST** /adyen_payments | Create an adyen payment
*ApplicationApi* | [**dELETEApplicationApplicationId**](docs/Api/ApplicationApi.md#deleteapplicationapplicationid) | **DELETE** /application/{applicationId} | Delete the application
*ApplicationApi* | [**gETApplication**](docs/Api/ApplicationApi.md#getapplication) | **GET** /application | List all applications
*ApplicationApi* | [**gETApplicationApplicationId**](docs/Api/ApplicationApi.md#getapplicationapplicationid) | **GET** /application/{applicationId} | Retrieve the application
*ApplicationApi* | [**pATCHApplicationApplicationId**](docs/Api/ApplicationApi.md#patchapplicationapplicationid) | **PATCH** /application/{applicationId} | Update the application
*ApplicationApi* | [**pOSTApplication**](docs/Api/ApplicationApi.md#postapplication) | **POST** /application | Create the application
*AttachmentsApi* | [**dELETEAttachmentsAttachmentId**](docs/Api/AttachmentsApi.md#deleteattachmentsattachmentid) | **DELETE** /attachments/{attachmentId} | Delete an attachment
*AttachmentsApi* | [**gETAttachments**](docs/Api/AttachmentsApi.md#getattachments) | **GET** /attachments | List all attachments
*AttachmentsApi* | [**gETAttachmentsAttachmentId**](docs/Api/AttachmentsApi.md#getattachmentsattachmentid) | **GET** /attachments/{attachmentId} | Retrieve an attachment
*AttachmentsApi* | [**pATCHAttachmentsAttachmentId**](docs/Api/AttachmentsApi.md#patchattachmentsattachmentid) | **PATCH** /attachments/{attachmentId} | Update an attachment
*AttachmentsApi* | [**pOSTAttachments**](docs/Api/AttachmentsApi.md#postattachments) | **POST** /attachments | Create an attachment
*AuthorizationsApi* | [**dELETEAuthorizationsAuthorizationId**](docs/Api/AuthorizationsApi.md#deleteauthorizationsauthorizationid) | **DELETE** /authorizations/{authorizationId} | Delete an authorization
*AuthorizationsApi* | [**gETAuthorizations**](docs/Api/AuthorizationsApi.md#getauthorizations) | **GET** /authorizations | List all authorizations
*AuthorizationsApi* | [**gETAuthorizationsAuthorizationId**](docs/Api/AuthorizationsApi.md#getauthorizationsauthorizationid) | **GET** /authorizations/{authorizationId} | Retrieve an authorization
*AuthorizationsApi* | [**pATCHAuthorizationsAuthorizationId**](docs/Api/AuthorizationsApi.md#patchauthorizationsauthorizationid) | **PATCH** /authorizations/{authorizationId} | Update an authorization
*AuthorizationsApi* | [**pOSTAuthorizations**](docs/Api/AuthorizationsApi.md#postauthorizations) | **POST** /authorizations | Create an authorization
*AvalaraAccountsApi* | [**dELETEAvalaraAccountsAvalaraAccountId**](docs/Api/AvalaraAccountsApi.md#deleteavalaraaccountsavalaraaccountid) | **DELETE** /avalara_accounts/{avalaraAccountId} | Delete an avalara account
*AvalaraAccountsApi* | [**gETAvalaraAccounts**](docs/Api/AvalaraAccountsApi.md#getavalaraaccounts) | **GET** /avalara_accounts | List all avalara accounts
*AvalaraAccountsApi* | [**gETAvalaraAccountsAvalaraAccountId**](docs/Api/AvalaraAccountsApi.md#getavalaraaccountsavalaraaccountid) | **GET** /avalara_accounts/{avalaraAccountId} | Retrieve an avalara account
*AvalaraAccountsApi* | [**pATCHAvalaraAccountsAvalaraAccountId**](docs/Api/AvalaraAccountsApi.md#patchavalaraaccountsavalaraaccountid) | **PATCH** /avalara_accounts/{avalaraAccountId} | Update an avalara account
*AvalaraAccountsApi* | [**pOSTAvalaraAccounts**](docs/Api/AvalaraAccountsApi.md#postavalaraaccounts) | **POST** /avalara_accounts | Create an avalara account
*BillingInfoValidationRulesApi* | [**dELETEBillingInfoValidationRulesBillingInfoValidationRuleId**](docs/Api/BillingInfoValidationRulesApi.md#deletebillinginfovalidationrulesbillinginfovalidationruleid) | **DELETE** /billing_info_validation_rules/{billingInfoValidationRuleId} | Delete a billing info validation rule
*BillingInfoValidationRulesApi* | [**gETBillingInfoValidationRules**](docs/Api/BillingInfoValidationRulesApi.md#getbillinginfovalidationrules) | **GET** /billing_info_validation_rules | List all billing info validation rules
*BillingInfoValidationRulesApi* | [**gETBillingInfoValidationRulesBillingInfoValidationRuleId**](docs/Api/BillingInfoValidationRulesApi.md#getbillinginfovalidationrulesbillinginfovalidationruleid) | **GET** /billing_info_validation_rules/{billingInfoValidationRuleId} | Retrieve a billing info validation rule
*BillingInfoValidationRulesApi* | [**pATCHBillingInfoValidationRulesBillingInfoValidationRuleId**](docs/Api/BillingInfoValidationRulesApi.md#patchbillinginfovalidationrulesbillinginfovalidationruleid) | **PATCH** /billing_info_validation_rules/{billingInfoValidationRuleId} | Update a billing info validation rule
*BillingInfoValidationRulesApi* | [**pOSTBillingInfoValidationRules**](docs/Api/BillingInfoValidationRulesApi.md#postbillinginfovalidationrules) | **POST** /billing_info_validation_rules | Create a billing info validation rule
*BraintreeGatewaysApi* | [**dELETEBraintreeGatewaysBraintreeGatewayId**](docs/Api/BraintreeGatewaysApi.md#deletebraintreegatewaysbraintreegatewayid) | **DELETE** /braintree_gateways/{braintreeGatewayId} | Delete a braintree gateway
*BraintreeGatewaysApi* | [**gETBraintreeGateways**](docs/Api/BraintreeGatewaysApi.md#getbraintreegateways) | **GET** /braintree_gateways | List all braintree gateways
*BraintreeGatewaysApi* | [**gETBraintreeGatewaysBraintreeGatewayId**](docs/Api/BraintreeGatewaysApi.md#getbraintreegatewaysbraintreegatewayid) | **GET** /braintree_gateways/{braintreeGatewayId} | Retrieve a braintree gateway
*BraintreeGatewaysApi* | [**pATCHBraintreeGatewaysBraintreeGatewayId**](docs/Api/BraintreeGatewaysApi.md#patchbraintreegatewaysbraintreegatewayid) | **PATCH** /braintree_gateways/{braintreeGatewayId} | Update a braintree gateway
*BraintreeGatewaysApi* | [**pOSTBraintreeGateways**](docs/Api/BraintreeGatewaysApi.md#postbraintreegateways) | **POST** /braintree_gateways | Create a braintree gateway
*BraintreePaymentsApi* | [**dELETEBraintreePaymentsBraintreePaymentId**](docs/Api/BraintreePaymentsApi.md#deletebraintreepaymentsbraintreepaymentid) | **DELETE** /braintree_payments/{braintreePaymentId} | Delete a braintree payment
*BraintreePaymentsApi* | [**gETBraintreePayments**](docs/Api/BraintreePaymentsApi.md#getbraintreepayments) | **GET** /braintree_payments | List all braintree payments
*BraintreePaymentsApi* | [**gETBraintreePaymentsBraintreePaymentId**](docs/Api/BraintreePaymentsApi.md#getbraintreepaymentsbraintreepaymentid) | **GET** /braintree_payments/{braintreePaymentId} | Retrieve a braintree payment
*BraintreePaymentsApi* | [**pATCHBraintreePaymentsBraintreePaymentId**](docs/Api/BraintreePaymentsApi.md#patchbraintreepaymentsbraintreepaymentid) | **PATCH** /braintree_payments/{braintreePaymentId} | Update a braintree payment
*BraintreePaymentsApi* | [**pOSTBraintreePayments**](docs/Api/BraintreePaymentsApi.md#postbraintreepayments) | **POST** /braintree_payments | Create a braintree payment
*CapturesApi* | [**dELETECapturesCaptureId**](docs/Api/CapturesApi.md#deletecapturescaptureid) | **DELETE** /captures/{captureId} | Delete a capture
*CapturesApi* | [**gETCaptures**](docs/Api/CapturesApi.md#getcaptures) | **GET** /captures | List all captures
*CapturesApi* | [**gETCapturesCaptureId**](docs/Api/CapturesApi.md#getcapturescaptureid) | **GET** /captures/{captureId} | Retrieve a capture
*CapturesApi* | [**pATCHCapturesCaptureId**](docs/Api/CapturesApi.md#patchcapturescaptureid) | **PATCH** /captures/{captureId} | Update a capture
*CapturesApi* | [**pOSTCaptures**](docs/Api/CapturesApi.md#postcaptures) | **POST** /captures | Create a capture
*CarrierAccountsApi* | [**dELETECarrierAccountsCarrierAccountId**](docs/Api/CarrierAccountsApi.md#deletecarrieraccountscarrieraccountid) | **DELETE** /carrier_accounts/{carrierAccountId} | Delete a carrier account
*CarrierAccountsApi* | [**gETCarrierAccounts**](docs/Api/CarrierAccountsApi.md#getcarrieraccounts) | **GET** /carrier_accounts | List all carrier accounts
*CarrierAccountsApi* | [**gETCarrierAccountsCarrierAccountId**](docs/Api/CarrierAccountsApi.md#getcarrieraccountscarrieraccountid) | **GET** /carrier_accounts/{carrierAccountId} | Retrieve a carrier account
*CarrierAccountsApi* | [**pATCHCarrierAccountsCarrierAccountId**](docs/Api/CarrierAccountsApi.md#patchcarrieraccountscarrieraccountid) | **PATCH** /carrier_accounts/{carrierAccountId} | Update a carrier account
*CarrierAccountsApi* | [**pOSTCarrierAccounts**](docs/Api/CarrierAccountsApi.md#postcarrieraccounts) | **POST** /carrier_accounts | Create a carrier account
*CheckoutComGatewaysApi* | [**dELETECheckoutComGatewaysCheckoutComGatewayId**](docs/Api/CheckoutComGatewaysApi.md#deletecheckoutcomgatewayscheckoutcomgatewayid) | **DELETE** /checkout_com_gateways/{checkoutComGatewayId} | Delete a checkout com gateway
*CheckoutComGatewaysApi* | [**gETCheckoutComGateways**](docs/Api/CheckoutComGatewaysApi.md#getcheckoutcomgateways) | **GET** /checkout_com_gateways | List all checkout com gateways
*CheckoutComGatewaysApi* | [**gETCheckoutComGatewaysCheckoutComGatewayId**](docs/Api/CheckoutComGatewaysApi.md#getcheckoutcomgatewayscheckoutcomgatewayid) | **GET** /checkout_com_gateways/{checkoutComGatewayId} | Retrieve a checkout com gateway
*CheckoutComGatewaysApi* | [**pATCHCheckoutComGatewaysCheckoutComGatewayId**](docs/Api/CheckoutComGatewaysApi.md#patchcheckoutcomgatewayscheckoutcomgatewayid) | **PATCH** /checkout_com_gateways/{checkoutComGatewayId} | Update a checkout com gateway
*CheckoutComGatewaysApi* | [**pOSTCheckoutComGateways**](docs/Api/CheckoutComGatewaysApi.md#postcheckoutcomgateways) | **POST** /checkout_com_gateways | Create a checkout com gateway
*CheckoutComPaymentsApi* | [**dELETECheckoutComPaymentsCheckoutComPaymentId**](docs/Api/CheckoutComPaymentsApi.md#deletecheckoutcompaymentscheckoutcompaymentid) | **DELETE** /checkout_com_payments/{checkoutComPaymentId} | Delete a checkout com payment
*CheckoutComPaymentsApi* | [**gETCheckoutComPayments**](docs/Api/CheckoutComPaymentsApi.md#getcheckoutcompayments) | **GET** /checkout_com_payments | List all checkout com payments
*CheckoutComPaymentsApi* | [**gETCheckoutComPaymentsCheckoutComPaymentId**](docs/Api/CheckoutComPaymentsApi.md#getcheckoutcompaymentscheckoutcompaymentid) | **GET** /checkout_com_payments/{checkoutComPaymentId} | Retrieve a checkout com payment
*CheckoutComPaymentsApi* | [**pATCHCheckoutComPaymentsCheckoutComPaymentId**](docs/Api/CheckoutComPaymentsApi.md#patchcheckoutcompaymentscheckoutcompaymentid) | **PATCH** /checkout_com_payments/{checkoutComPaymentId} | Update a checkout com payment
*CheckoutComPaymentsApi* | [**pOSTCheckoutComPayments**](docs/Api/CheckoutComPaymentsApi.md#postcheckoutcompayments) | **POST** /checkout_com_payments | Create a checkout com payment
*CouponCodesPromotionRulesApi* | [**dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId**](docs/Api/CouponCodesPromotionRulesApi.md#deletecouponcodespromotionrulescouponcodespromotionruleid) | **DELETE** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Delete a coupon codes promotion rule
*CouponCodesPromotionRulesApi* | [**gETCouponCodesPromotionRules**](docs/Api/CouponCodesPromotionRulesApi.md#getcouponcodespromotionrules) | **GET** /coupon_codes_promotion_rules | List all coupon codes promotion rules
*CouponCodesPromotionRulesApi* | [**gETCouponCodesPromotionRulesCouponCodesPromotionRuleId**](docs/Api/CouponCodesPromotionRulesApi.md#getcouponcodespromotionrulescouponcodespromotionruleid) | **GET** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Retrieve a coupon codes promotion rule
*CouponCodesPromotionRulesApi* | [**pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId**](docs/Api/CouponCodesPromotionRulesApi.md#patchcouponcodespromotionrulescouponcodespromotionruleid) | **PATCH** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Update a coupon codes promotion rule
*CouponCodesPromotionRulesApi* | [**pOSTCouponCodesPromotionRules**](docs/Api/CouponCodesPromotionRulesApi.md#postcouponcodespromotionrules) | **POST** /coupon_codes_promotion_rules | Create a coupon codes promotion rule
*CouponsApi* | [**dELETECouponsCouponId**](docs/Api/CouponsApi.md#deletecouponscouponid) | **DELETE** /coupons/{couponId} | Delete a coupon
*CouponsApi* | [**gETCoupons**](docs/Api/CouponsApi.md#getcoupons) | **GET** /coupons | List all coupons
*CouponsApi* | [**gETCouponsCouponId**](docs/Api/CouponsApi.md#getcouponscouponid) | **GET** /coupons/{couponId} | Retrieve a coupon
*CouponsApi* | [**pATCHCouponsCouponId**](docs/Api/CouponsApi.md#patchcouponscouponid) | **PATCH** /coupons/{couponId} | Update a coupon
*CouponsApi* | [**pOSTCoupons**](docs/Api/CouponsApi.md#postcoupons) | **POST** /coupons | Create a coupon
*CustomerAddressesApi* | [**dELETECustomerAddressesCustomerAddressId**](docs/Api/CustomerAddressesApi.md#deletecustomeraddressescustomeraddressid) | **DELETE** /customer_addresses/{customerAddressId} | Delete a customer address
*CustomerAddressesApi* | [**gETCustomerAddresses**](docs/Api/CustomerAddressesApi.md#getcustomeraddresses) | **GET** /customer_addresses | List all customer addresses
*CustomerAddressesApi* | [**gETCustomerAddressesCustomerAddressId**](docs/Api/CustomerAddressesApi.md#getcustomeraddressescustomeraddressid) | **GET** /customer_addresses/{customerAddressId} | Retrieve a customer address
*CustomerAddressesApi* | [**pATCHCustomerAddressesCustomerAddressId**](docs/Api/CustomerAddressesApi.md#patchcustomeraddressescustomeraddressid) | **PATCH** /customer_addresses/{customerAddressId} | Update a customer address
*CustomerAddressesApi* | [**pOSTCustomerAddresses**](docs/Api/CustomerAddressesApi.md#postcustomeraddresses) | **POST** /customer_addresses | Create a customer address
*CustomerGroupsApi* | [**dELETECustomerGroupsCustomerGroupId**](docs/Api/CustomerGroupsApi.md#deletecustomergroupscustomergroupid) | **DELETE** /customer_groups/{customerGroupId} | Delete a customer group
*CustomerGroupsApi* | [**gETCustomerGroups**](docs/Api/CustomerGroupsApi.md#getcustomergroups) | **GET** /customer_groups | List all customer groups
*CustomerGroupsApi* | [**gETCustomerGroupsCustomerGroupId**](docs/Api/CustomerGroupsApi.md#getcustomergroupscustomergroupid) | **GET** /customer_groups/{customerGroupId} | Retrieve a customer group
*CustomerGroupsApi* | [**pATCHCustomerGroupsCustomerGroupId**](docs/Api/CustomerGroupsApi.md#patchcustomergroupscustomergroupid) | **PATCH** /customer_groups/{customerGroupId} | Update a customer group
*CustomerGroupsApi* | [**pOSTCustomerGroups**](docs/Api/CustomerGroupsApi.md#postcustomergroups) | **POST** /customer_groups | Create a customer group
*CustomerPasswordResetsApi* | [**dELETECustomerPasswordResetsCustomerPasswordResetId**](docs/Api/CustomerPasswordResetsApi.md#deletecustomerpasswordresetscustomerpasswordresetid) | **DELETE** /customer_password_resets/{customerPasswordResetId} | Delete a customer password reset
*CustomerPasswordResetsApi* | [**gETCustomerPasswordResets**](docs/Api/CustomerPasswordResetsApi.md#getcustomerpasswordresets) | **GET** /customer_password_resets | List all customer password resets
*CustomerPasswordResetsApi* | [**gETCustomerPasswordResetsCustomerPasswordResetId**](docs/Api/CustomerPasswordResetsApi.md#getcustomerpasswordresetscustomerpasswordresetid) | **GET** /customer_password_resets/{customerPasswordResetId} | Retrieve a customer password reset
*CustomerPasswordResetsApi* | [**pATCHCustomerPasswordResetsCustomerPasswordResetId**](docs/Api/CustomerPasswordResetsApi.md#patchcustomerpasswordresetscustomerpasswordresetid) | **PATCH** /customer_password_resets/{customerPasswordResetId} | Update a customer password reset
*CustomerPasswordResetsApi* | [**pOSTCustomerPasswordResets**](docs/Api/CustomerPasswordResetsApi.md#postcustomerpasswordresets) | **POST** /customer_password_resets | Create a customer password reset
*CustomerPaymentSourcesApi* | [**dELETECustomerPaymentSourcesCustomerPaymentSourceId**](docs/Api/CustomerPaymentSourcesApi.md#deletecustomerpaymentsourcescustomerpaymentsourceid) | **DELETE** /customer_payment_sources/{customerPaymentSourceId} | Delete a customer payment source
*CustomerPaymentSourcesApi* | [**gETCustomerPaymentSources**](docs/Api/CustomerPaymentSourcesApi.md#getcustomerpaymentsources) | **GET** /customer_payment_sources | List all customer payment sources
*CustomerPaymentSourcesApi* | [**gETCustomerPaymentSourcesCustomerPaymentSourceId**](docs/Api/CustomerPaymentSourcesApi.md#getcustomerpaymentsourcescustomerpaymentsourceid) | **GET** /customer_payment_sources/{customerPaymentSourceId} | Retrieve a customer payment source
*CustomerPaymentSourcesApi* | [**pATCHCustomerPaymentSourcesCustomerPaymentSourceId**](docs/Api/CustomerPaymentSourcesApi.md#patchcustomerpaymentsourcescustomerpaymentsourceid) | **PATCH** /customer_payment_sources/{customerPaymentSourceId} | Update a customer payment source
*CustomerPaymentSourcesApi* | [**pOSTCustomerPaymentSources**](docs/Api/CustomerPaymentSourcesApi.md#postcustomerpaymentsources) | **POST** /customer_payment_sources | Create a customer payment source
*CustomerSubscriptionsApi* | [**dELETECustomerSubscriptionsCustomerSubscriptionId**](docs/Api/CustomerSubscriptionsApi.md#deletecustomersubscriptionscustomersubscriptionid) | **DELETE** /customer_subscriptions/{customerSubscriptionId} | Delete a customer subscription
*CustomerSubscriptionsApi* | [**gETCustomerSubscriptions**](docs/Api/CustomerSubscriptionsApi.md#getcustomersubscriptions) | **GET** /customer_subscriptions | List all customer subscriptions
*CustomerSubscriptionsApi* | [**gETCustomerSubscriptionsCustomerSubscriptionId**](docs/Api/CustomerSubscriptionsApi.md#getcustomersubscriptionscustomersubscriptionid) | **GET** /customer_subscriptions/{customerSubscriptionId} | Retrieve a customer subscription
*CustomerSubscriptionsApi* | [**pATCHCustomerSubscriptionsCustomerSubscriptionId**](docs/Api/CustomerSubscriptionsApi.md#patchcustomersubscriptionscustomersubscriptionid) | **PATCH** /customer_subscriptions/{customerSubscriptionId} | Update a customer subscription
*CustomerSubscriptionsApi* | [**pOSTCustomerSubscriptions**](docs/Api/CustomerSubscriptionsApi.md#postcustomersubscriptions) | **POST** /customer_subscriptions | Create a customer subscription
*CustomersApi* | [**dELETECustomersCustomerId**](docs/Api/CustomersApi.md#deletecustomerscustomerid) | **DELETE** /customers/{customerId} | Delete a customer
*CustomersApi* | [**gETCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | List all customers
*CustomersApi* | [**gETCustomersCustomerId**](docs/Api/CustomersApi.md#getcustomerscustomerid) | **GET** /customers/{customerId} | Retrieve a customer
*CustomersApi* | [**pATCHCustomersCustomerId**](docs/Api/CustomersApi.md#patchcustomerscustomerid) | **PATCH** /customers/{customerId} | Update a customer
*CustomersApi* | [**pOSTCustomers**](docs/Api/CustomersApi.md#postcustomers) | **POST** /customers | Create a customer
*DeliveryLeadTimesApi* | [**dELETEDeliveryLeadTimesDeliveryLeadTimeId**](docs/Api/DeliveryLeadTimesApi.md#deletedeliveryleadtimesdeliveryleadtimeid) | **DELETE** /delivery_lead_times/{deliveryLeadTimeId} | Delete a delivery lead time
*DeliveryLeadTimesApi* | [**gETDeliveryLeadTimes**](docs/Api/DeliveryLeadTimesApi.md#getdeliveryleadtimes) | **GET** /delivery_lead_times | List all delivery lead times
*DeliveryLeadTimesApi* | [**gETDeliveryLeadTimesDeliveryLeadTimeId**](docs/Api/DeliveryLeadTimesApi.md#getdeliveryleadtimesdeliveryleadtimeid) | **GET** /delivery_lead_times/{deliveryLeadTimeId} | Retrieve a delivery lead time
*DeliveryLeadTimesApi* | [**pATCHDeliveryLeadTimesDeliveryLeadTimeId**](docs/Api/DeliveryLeadTimesApi.md#patchdeliveryleadtimesdeliveryleadtimeid) | **PATCH** /delivery_lead_times/{deliveryLeadTimeId} | Update a delivery lead time
*DeliveryLeadTimesApi* | [**pOSTDeliveryLeadTimes**](docs/Api/DeliveryLeadTimesApi.md#postdeliveryleadtimes) | **POST** /delivery_lead_times | Create a delivery lead time
*ExternalGatewaysApi* | [**dELETEExternalGatewaysExternalGatewayId**](docs/Api/ExternalGatewaysApi.md#deleteexternalgatewaysexternalgatewayid) | **DELETE** /external_gateways/{externalGatewayId} | Delete an external gateway
*ExternalGatewaysApi* | [**gETExternalGateways**](docs/Api/ExternalGatewaysApi.md#getexternalgateways) | **GET** /external_gateways | List all external gateways
*ExternalGatewaysApi* | [**gETExternalGatewaysExternalGatewayId**](docs/Api/ExternalGatewaysApi.md#getexternalgatewaysexternalgatewayid) | **GET** /external_gateways/{externalGatewayId} | Retrieve an external gateway
*ExternalGatewaysApi* | [**pATCHExternalGatewaysExternalGatewayId**](docs/Api/ExternalGatewaysApi.md#patchexternalgatewaysexternalgatewayid) | **PATCH** /external_gateways/{externalGatewayId} | Update an external gateway
*ExternalGatewaysApi* | [**pOSTExternalGateways**](docs/Api/ExternalGatewaysApi.md#postexternalgateways) | **POST** /external_gateways | Create an external gateway
*ExternalPaymentsApi* | [**dELETEExternalPaymentsExternalPaymentId**](docs/Api/ExternalPaymentsApi.md#deleteexternalpaymentsexternalpaymentid) | **DELETE** /external_payments/{externalPaymentId} | Delete an external payment
*ExternalPaymentsApi* | [**gETExternalPayments**](docs/Api/ExternalPaymentsApi.md#getexternalpayments) | **GET** /external_payments | List all external payments
*ExternalPaymentsApi* | [**gETExternalPaymentsExternalPaymentId**](docs/Api/ExternalPaymentsApi.md#getexternalpaymentsexternalpaymentid) | **GET** /external_payments/{externalPaymentId} | Retrieve an external payment
*ExternalPaymentsApi* | [**pATCHExternalPaymentsExternalPaymentId**](docs/Api/ExternalPaymentsApi.md#patchexternalpaymentsexternalpaymentid) | **PATCH** /external_payments/{externalPaymentId} | Update an external payment
*ExternalPaymentsApi* | [**pOSTExternalPayments**](docs/Api/ExternalPaymentsApi.md#postexternalpayments) | **POST** /external_payments | Create an external payment
*ExternalPromotionsApi* | [**dELETEExternalPromotionsExternalPromotionId**](docs/Api/ExternalPromotionsApi.md#deleteexternalpromotionsexternalpromotionid) | **DELETE** /external_promotions/{externalPromotionId} | Delete an external promotion
*ExternalPromotionsApi* | [**gETExternalPromotions**](docs/Api/ExternalPromotionsApi.md#getexternalpromotions) | **GET** /external_promotions | List all external promotions
*ExternalPromotionsApi* | [**gETExternalPromotionsExternalPromotionId**](docs/Api/ExternalPromotionsApi.md#getexternalpromotionsexternalpromotionid) | **GET** /external_promotions/{externalPromotionId} | Retrieve an external promotion
*ExternalPromotionsApi* | [**pATCHExternalPromotionsExternalPromotionId**](docs/Api/ExternalPromotionsApi.md#patchexternalpromotionsexternalpromotionid) | **PATCH** /external_promotions/{externalPromotionId} | Update an external promotion
*ExternalPromotionsApi* | [**pOSTExternalPromotions**](docs/Api/ExternalPromotionsApi.md#postexternalpromotions) | **POST** /external_promotions | Create an external promotion
*ExternalTaxCalculatorsApi* | [**dELETEExternalTaxCalculatorsExternalTaxCalculatorId**](docs/Api/ExternalTaxCalculatorsApi.md#deleteexternaltaxcalculatorsexternaltaxcalculatorid) | **DELETE** /external_tax_calculators/{externalTaxCalculatorId} | Delete an external tax calculator
*ExternalTaxCalculatorsApi* | [**gETExternalTaxCalculators**](docs/Api/ExternalTaxCalculatorsApi.md#getexternaltaxcalculators) | **GET** /external_tax_calculators | List all external tax calculators
*ExternalTaxCalculatorsApi* | [**gETExternalTaxCalculatorsExternalTaxCalculatorId**](docs/Api/ExternalTaxCalculatorsApi.md#getexternaltaxcalculatorsexternaltaxcalculatorid) | **GET** /external_tax_calculators/{externalTaxCalculatorId} | Retrieve an external tax calculator
*ExternalTaxCalculatorsApi* | [**pATCHExternalTaxCalculatorsExternalTaxCalculatorId**](docs/Api/ExternalTaxCalculatorsApi.md#patchexternaltaxcalculatorsexternaltaxcalculatorid) | **PATCH** /external_tax_calculators/{externalTaxCalculatorId} | Update an external tax calculator
*ExternalTaxCalculatorsApi* | [**pOSTExternalTaxCalculators**](docs/Api/ExternalTaxCalculatorsApi.md#postexternaltaxcalculators) | **POST** /external_tax_calculators | Create an external tax calculator
*FixedAmountPromotionsApi* | [**dELETEFixedAmountPromotionsFixedAmountPromotionId**](docs/Api/FixedAmountPromotionsApi.md#deletefixedamountpromotionsfixedamountpromotionid) | **DELETE** /fixed_amount_promotions/{fixedAmountPromotionId} | Delete a fixed amount promotion
*FixedAmountPromotionsApi* | [**gETFixedAmountPromotions**](docs/Api/FixedAmountPromotionsApi.md#getfixedamountpromotions) | **GET** /fixed_amount_promotions | List all fixed amount promotions
*FixedAmountPromotionsApi* | [**gETFixedAmountPromotionsFixedAmountPromotionId**](docs/Api/FixedAmountPromotionsApi.md#getfixedamountpromotionsfixedamountpromotionid) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId} | Retrieve a fixed amount promotion
*FixedAmountPromotionsApi* | [**pATCHFixedAmountPromotionsFixedAmountPromotionId**](docs/Api/FixedAmountPromotionsApi.md#patchfixedamountpromotionsfixedamountpromotionid) | **PATCH** /fixed_amount_promotions/{fixedAmountPromotionId} | Update a fixed amount promotion
*FixedAmountPromotionsApi* | [**pOSTFixedAmountPromotions**](docs/Api/FixedAmountPromotionsApi.md#postfixedamountpromotions) | **POST** /fixed_amount_promotions | Create a fixed amount promotion
*FreeShippingPromotionsApi* | [**dELETEFreeShippingPromotionsFreeShippingPromotionId**](docs/Api/FreeShippingPromotionsApi.md#deletefreeshippingpromotionsfreeshippingpromotionid) | **DELETE** /free_shipping_promotions/{freeShippingPromotionId} | Delete a free shipping promotion
*FreeShippingPromotionsApi* | [**gETFreeShippingPromotions**](docs/Api/FreeShippingPromotionsApi.md#getfreeshippingpromotions) | **GET** /free_shipping_promotions | List all free shipping promotions
*FreeShippingPromotionsApi* | [**gETFreeShippingPromotionsFreeShippingPromotionId**](docs/Api/FreeShippingPromotionsApi.md#getfreeshippingpromotionsfreeshippingpromotionid) | **GET** /free_shipping_promotions/{freeShippingPromotionId} | Retrieve a free shipping promotion
*FreeShippingPromotionsApi* | [**pATCHFreeShippingPromotionsFreeShippingPromotionId**](docs/Api/FreeShippingPromotionsApi.md#patchfreeshippingpromotionsfreeshippingpromotionid) | **PATCH** /free_shipping_promotions/{freeShippingPromotionId} | Update a free shipping promotion
*FreeShippingPromotionsApi* | [**pOSTFreeShippingPromotions**](docs/Api/FreeShippingPromotionsApi.md#postfreeshippingpromotions) | **POST** /free_shipping_promotions | Create a free shipping promotion
*GiftCardRecipientsApi* | [**dELETEGiftCardRecipientsGiftCardRecipientId**](docs/Api/GiftCardRecipientsApi.md#deletegiftcardrecipientsgiftcardrecipientid) | **DELETE** /gift_card_recipients/{giftCardRecipientId} | Delete a gift card recipient
*GiftCardRecipientsApi* | [**gETGiftCardRecipients**](docs/Api/GiftCardRecipientsApi.md#getgiftcardrecipients) | **GET** /gift_card_recipients | List all gift card recipients
*GiftCardRecipientsApi* | [**gETGiftCardRecipientsGiftCardRecipientId**](docs/Api/GiftCardRecipientsApi.md#getgiftcardrecipientsgiftcardrecipientid) | **GET** /gift_card_recipients/{giftCardRecipientId} | Retrieve a gift card recipient
*GiftCardRecipientsApi* | [**pATCHGiftCardRecipientsGiftCardRecipientId**](docs/Api/GiftCardRecipientsApi.md#patchgiftcardrecipientsgiftcardrecipientid) | **PATCH** /gift_card_recipients/{giftCardRecipientId} | Update a gift card recipient
*GiftCardRecipientsApi* | [**pOSTGiftCardRecipients**](docs/Api/GiftCardRecipientsApi.md#postgiftcardrecipients) | **POST** /gift_card_recipients | Create a gift card recipient
*GiftCardsApi* | [**dELETEGiftCardsGiftCardId**](docs/Api/GiftCardsApi.md#deletegiftcardsgiftcardid) | **DELETE** /gift_cards/{giftCardId} | Delete a gift card
*GiftCardsApi* | [**gETGiftCards**](docs/Api/GiftCardsApi.md#getgiftcards) | **GET** /gift_cards | List all gift cards
*GiftCardsApi* | [**gETGiftCardsGiftCardId**](docs/Api/GiftCardsApi.md#getgiftcardsgiftcardid) | **GET** /gift_cards/{giftCardId} | Retrieve a gift card
*GiftCardsApi* | [**pATCHGiftCardsGiftCardId**](docs/Api/GiftCardsApi.md#patchgiftcardsgiftcardid) | **PATCH** /gift_cards/{giftCardId} | Update a gift card
*GiftCardsApi* | [**pOSTGiftCards**](docs/Api/GiftCardsApi.md#postgiftcards) | **POST** /gift_cards | Create a gift card
*HasManyApi* | [**gETAdyenGatewayIdAdyenPayments**](docs/Api/HasManyApi.md#getadyengatewayidadyenpayments) | **GET** /adyen_gateways/{adyenGatewayId}/adyen_payments | Retrieve the adyen payments associated to the adyen gateway
*HasManyApi* | [**gETAdyenGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getadyengatewayidpaymentmethods) | **GET** /adyen_gateways/{adyenGatewayId}/payment_methods | Retrieve the payment methods associated to the adyen gateway
*HasManyApi* | [**gETAuthorizationIdCaptures**](docs/Api/HasManyApi.md#getauthorizationidcaptures) | **GET** /authorizations/{authorizationId}/captures | Retrieve the captures associated to the authorization
*HasManyApi* | [**gETAuthorizationIdVoids**](docs/Api/HasManyApi.md#getauthorizationidvoids) | **GET** /authorizations/{authorizationId}/voids | Retrieve the voids associated to the authorization
*HasManyApi* | [**gETAvalaraAccountIdAttachments**](docs/Api/HasManyApi.md#getavalaraaccountidattachments) | **GET** /avalara_accounts/{avalaraAccountId}/attachments | Retrieve the attachments associated to the avalara account
*HasManyApi* | [**gETAvalaraAccountIdTaxCategories**](docs/Api/HasManyApi.md#getavalaraaccountidtaxcategories) | **GET** /avalara_accounts/{avalaraAccountId}/tax_categories | Retrieve the tax categories associated to the avalara account
*HasManyApi* | [**gETBraintreeGatewayIdBraintreePayments**](docs/Api/HasManyApi.md#getbraintreegatewayidbraintreepayments) | **GET** /braintree_gateways/{braintreeGatewayId}/braintree_payments | Retrieve the braintree payments associated to the braintree gateway
*HasManyApi* | [**gETBraintreeGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getbraintreegatewayidpaymentmethods) | **GET** /braintree_gateways/{braintreeGatewayId}/payment_methods | Retrieve the payment methods associated to the braintree gateway
*HasManyApi* | [**gETCaptureIdRefunds**](docs/Api/HasManyApi.md#getcaptureidrefunds) | **GET** /captures/{captureId}/refunds | Retrieve the refunds associated to the capture
*HasManyApi* | [**gETCarrierAccountIdAttachments**](docs/Api/HasManyApi.md#getcarrieraccountidattachments) | **GET** /carrier_accounts/{carrierAccountId}/attachments | Retrieve the attachments associated to the carrier account
*HasManyApi* | [**gETCheckoutComGatewayIdCheckoutComPayments**](docs/Api/HasManyApi.md#getcheckoutcomgatewayidcheckoutcompayments) | **GET** /checkout_com_gateways/{checkoutComGatewayId}/checkout_com_payments | Retrieve the checkout com payments associated to the checkout com gateway
*HasManyApi* | [**gETCheckoutComGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getcheckoutcomgatewayidpaymentmethods) | **GET** /checkout_com_gateways/{checkoutComGatewayId}/payment_methods | Retrieve the payment methods associated to the checkout com gateway
*HasManyApi* | [**gETCouponCodesPromotionRuleIdCoupons**](docs/Api/HasManyApi.md#getcouponcodespromotionruleidcoupons) | **GET** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId}/coupons | Retrieve the coupons associated to the coupon codes promotion rule
*HasManyApi* | [**gETCustomerGroupIdAttachments**](docs/Api/HasManyApi.md#getcustomergroupidattachments) | **GET** /customer_groups/{customerGroupId}/attachments | Retrieve the attachments associated to the customer group
*HasManyApi* | [**gETCustomerGroupIdCustomers**](docs/Api/HasManyApi.md#getcustomergroupidcustomers) | **GET** /customer_groups/{customerGroupId}/customers | Retrieve the customers associated to the customer group
*HasManyApi* | [**gETCustomerGroupIdMarkets**](docs/Api/HasManyApi.md#getcustomergroupidmarkets) | **GET** /customer_groups/{customerGroupId}/markets | Retrieve the markets associated to the customer group
*HasManyApi* | [**gETCustomerIdAttachments**](docs/Api/HasManyApi.md#getcustomeridattachments) | **GET** /customers/{customerId}/attachments | Retrieve the attachments associated to the customer
*HasManyApi* | [**gETCustomerIdCustomerAddresses**](docs/Api/HasManyApi.md#getcustomeridcustomeraddresses) | **GET** /customers/{customerId}/customer_addresses | Retrieve the customer addresses associated to the customer
*HasManyApi* | [**gETCustomerIdCustomerPaymentSources**](docs/Api/HasManyApi.md#getcustomeridcustomerpaymentsources) | **GET** /customers/{customerId}/customer_payment_sources | Retrieve the customer payment sources associated to the customer
*HasManyApi* | [**gETCustomerIdCustomerSubscriptions**](docs/Api/HasManyApi.md#getcustomeridcustomersubscriptions) | **GET** /customers/{customerId}/customer_subscriptions | Retrieve the customer subscriptions associated to the customer
*HasManyApi* | [**gETCustomerIdOrders**](docs/Api/HasManyApi.md#getcustomeridorders) | **GET** /customers/{customerId}/orders | Retrieve the orders associated to the customer
*HasManyApi* | [**gETCustomerIdReturns**](docs/Api/HasManyApi.md#getcustomeridreturns) | **GET** /customers/{customerId}/returns | Retrieve the returns associated to the customer
*HasManyApi* | [**gETDeliveryLeadTimeIdAttachments**](docs/Api/HasManyApi.md#getdeliveryleadtimeidattachments) | **GET** /delivery_lead_times/{deliveryLeadTimeId}/attachments | Retrieve the attachments associated to the delivery lead time
*HasManyApi* | [**gETExternalGatewayIdExternalPayments**](docs/Api/HasManyApi.md#getexternalgatewayidexternalpayments) | **GET** /external_gateways/{externalGatewayId}/external_payments | Retrieve the external payments associated to the external gateway
*HasManyApi* | [**gETExternalGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getexternalgatewayidpaymentmethods) | **GET** /external_gateways/{externalGatewayId}/payment_methods | Retrieve the payment methods associated to the external gateway
*HasManyApi* | [**gETExternalPromotionIdAttachments**](docs/Api/HasManyApi.md#getexternalpromotionidattachments) | **GET** /external_promotions/{externalPromotionId}/attachments | Retrieve the attachments associated to the external promotion
*HasManyApi* | [**gETExternalTaxCalculatorIdAttachments**](docs/Api/HasManyApi.md#getexternaltaxcalculatoridattachments) | **GET** /external_tax_calculators/{externalTaxCalculatorId}/attachments | Retrieve the attachments associated to the external tax calculator
*HasManyApi* | [**gETExternalTaxCalculatorIdTaxCategories**](docs/Api/HasManyApi.md#getexternaltaxcalculatoridtaxcategories) | **GET** /external_tax_calculators/{externalTaxCalculatorId}/tax_categories | Retrieve the tax categories associated to the external tax calculator
*HasManyApi* | [**gETFixedAmountPromotionIdAttachments**](docs/Api/HasManyApi.md#getfixedamountpromotionidattachments) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/attachments | Retrieve the attachments associated to the fixed amount promotion
*HasManyApi* | [**gETFreeShippingPromotionIdAttachments**](docs/Api/HasManyApi.md#getfreeshippingpromotionidattachments) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/attachments | Retrieve the attachments associated to the free shipping promotion
*HasManyApi* | [**gETGiftCardIdAttachments**](docs/Api/HasManyApi.md#getgiftcardidattachments) | **GET** /gift_cards/{giftCardId}/attachments | Retrieve the attachments associated to the gift card
*HasManyApi* | [**gETGiftCardRecipientIdAttachments**](docs/Api/HasManyApi.md#getgiftcardrecipientidattachments) | **GET** /gift_card_recipients/{giftCardRecipientId}/attachments | Retrieve the attachments associated to the gift card recipient
*HasManyApi* | [**gETInventoryModelIdAttachments**](docs/Api/HasManyApi.md#getinventorymodelidattachments) | **GET** /inventory_models/{inventoryModelId}/attachments | Retrieve the attachments associated to the inventory model
*HasManyApi* | [**gETInventoryModelIdInventoryReturnLocations**](docs/Api/HasManyApi.md#getinventorymodelidinventoryreturnlocations) | **GET** /inventory_models/{inventoryModelId}/inventory_return_locations | Retrieve the inventory return locations associated to the inventory model
*HasManyApi* | [**gETInventoryModelIdInventoryStockLocations**](docs/Api/HasManyApi.md#getinventorymodelidinventorystocklocations) | **GET** /inventory_models/{inventoryModelId}/inventory_stock_locations | Retrieve the inventory stock locations associated to the inventory model
*HasManyApi* | [**gETLineItemIdLineItemOptions**](docs/Api/HasManyApi.md#getlineitemidlineitemoptions) | **GET** /line_items/{lineItemId}/line_item_options | Retrieve the line item options associated to the line item
*HasManyApi* | [**gETLineItemIdShipmentLineItems**](docs/Api/HasManyApi.md#getlineitemidshipmentlineitems) | **GET** /line_items/{lineItemId}/shipment_line_items | Retrieve the shipment line items associated to the line item
*HasManyApi* | [**gETLineItemIdStockLineItems**](docs/Api/HasManyApi.md#getlineitemidstocklineitems) | **GET** /line_items/{lineItemId}/stock_line_items | Retrieve the stock line items associated to the line item
*HasManyApi* | [**gETLineItemIdStockTransfers**](docs/Api/HasManyApi.md#getlineitemidstocktransfers) | **GET** /line_items/{lineItemId}/stock_transfers | Retrieve the stock transfers associated to the line item
*HasManyApi* | [**gETManualGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getmanualgatewayidpaymentmethods) | **GET** /manual_gateways/{manualGatewayId}/payment_methods | Retrieve the payment methods associated to the manual gateway
*HasManyApi* | [**gETManualTaxCalculatorIdAttachments**](docs/Api/HasManyApi.md#getmanualtaxcalculatoridattachments) | **GET** /manual_tax_calculators/{manualTaxCalculatorId}/attachments | Retrieve the attachments associated to the manual tax calculator
*HasManyApi* | [**gETManualTaxCalculatorIdTaxCategories**](docs/Api/HasManyApi.md#getmanualtaxcalculatoridtaxcategories) | **GET** /manual_tax_calculators/{manualTaxCalculatorId}/tax_categories | Retrieve the tax categories associated to the manual tax calculator
*HasManyApi* | [**gETManualTaxCalculatorIdTaxRules**](docs/Api/HasManyApi.md#getmanualtaxcalculatoridtaxrules) | **GET** /manual_tax_calculators/{manualTaxCalculatorId}/tax_rules | Retrieve the tax rules associated to the manual tax calculator
*HasManyApi* | [**gETMarketIdAttachments**](docs/Api/HasManyApi.md#getmarketidattachments) | **GET** /markets/{marketId}/attachments | Retrieve the attachments associated to the market
*HasManyApi* | [**gETMerchantIdAttachments**](docs/Api/HasManyApi.md#getmerchantidattachments) | **GET** /merchants/{merchantId}/attachments | Retrieve the attachments associated to the merchant
*HasManyApi* | [**gETOrderIdAttachments**](docs/Api/HasManyApi.md#getorderidattachments) | **GET** /orders/{orderId}/attachments | Retrieve the attachments associated to the order
*HasManyApi* | [**gETOrderIdAuthorizations**](docs/Api/HasManyApi.md#getorderidauthorizations) | **GET** /orders/{orderId}/authorizations | Retrieve the authorizations associated to the order
*HasManyApi* | [**gETOrderIdAvailableCustomerPaymentSources**](docs/Api/HasManyApi.md#getorderidavailablecustomerpaymentsources) | **GET** /orders/{orderId}/available_customer_payment_sources | Retrieve the available customer payment sources associated to the order
*HasManyApi* | [**gETOrderIdAvailablePaymentMethods**](docs/Api/HasManyApi.md#getorderidavailablepaymentmethods) | **GET** /orders/{orderId}/available_payment_methods | Retrieve the available payment methods associated to the order
*HasManyApi* | [**gETOrderIdCaptures**](docs/Api/HasManyApi.md#getorderidcaptures) | **GET** /orders/{orderId}/captures | Retrieve the captures associated to the order
*HasManyApi* | [**gETOrderIdLineItems**](docs/Api/HasManyApi.md#getorderidlineitems) | **GET** /orders/{orderId}/line_items | Retrieve the line items associated to the order
*HasManyApi* | [**gETOrderIdRefunds**](docs/Api/HasManyApi.md#getorderidrefunds) | **GET** /orders/{orderId}/refunds | Retrieve the refunds associated to the order
*HasManyApi* | [**gETOrderIdShipments**](docs/Api/HasManyApi.md#getorderidshipments) | **GET** /orders/{orderId}/shipments | Retrieve the shipments associated to the order
*HasManyApi* | [**gETOrderIdVoids**](docs/Api/HasManyApi.md#getorderidvoids) | **GET** /orders/{orderId}/voids | Retrieve the voids associated to the order
*HasManyApi* | [**gETPackageIdAttachments**](docs/Api/HasManyApi.md#getpackageidattachments) | **GET** /packages/{packageId}/attachments | Retrieve the attachments associated to the package
*HasManyApi* | [**gETPackageIdParcels**](docs/Api/HasManyApi.md#getpackageidparcels) | **GET** /packages/{packageId}/parcels | Retrieve the parcels associated to the package
*HasManyApi* | [**gETParcelIdAttachments**](docs/Api/HasManyApi.md#getparcelidattachments) | **GET** /parcels/{parcelId}/attachments | Retrieve the attachments associated to the parcel
*HasManyApi* | [**gETParcelIdParcelLineItems**](docs/Api/HasManyApi.md#getparcelidparcellineitems) | **GET** /parcels/{parcelId}/parcel_line_items | Retrieve the parcel line items associated to the parcel
*HasManyApi* | [**gETPaymentGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getpaymentgatewayidpaymentmethods) | **GET** /payment_gateways/{paymentGatewayId}/payment_methods | Retrieve the payment methods associated to the payment gateway
*HasManyApi* | [**gETPaymentMethodIdAttachments**](docs/Api/HasManyApi.md#getpaymentmethodidattachments) | **GET** /payment_methods/{paymentMethodId}/attachments | Retrieve the attachments associated to the payment method
*HasManyApi* | [**gETPaypalGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getpaypalgatewayidpaymentmethods) | **GET** /paypal_gateways/{paypalGatewayId}/payment_methods | Retrieve the payment methods associated to the paypal gateway
*HasManyApi* | [**gETPaypalGatewayIdPaypalPayments**](docs/Api/HasManyApi.md#getpaypalgatewayidpaypalpayments) | **GET** /paypal_gateways/{paypalGatewayId}/paypal_payments | Retrieve the paypal payments associated to the paypal gateway
*HasManyApi* | [**gETPercentageDiscountPromotionIdAttachments**](docs/Api/HasManyApi.md#getpercentagediscountpromotionidattachments) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/attachments | Retrieve the attachments associated to the percentage discount promotion
*HasManyApi* | [**gETPercentageDiscountPromotionIdSkus**](docs/Api/HasManyApi.md#getpercentagediscountpromotionidskus) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/skus | Retrieve the skus associated to the percentage discount promotion
*HasManyApi* | [**gETPriceIdAttachments**](docs/Api/HasManyApi.md#getpriceidattachments) | **GET** /prices/{priceId}/attachments | Retrieve the attachments associated to the price
*HasManyApi* | [**gETPriceListIdAttachments**](docs/Api/HasManyApi.md#getpricelistidattachments) | **GET** /price_lists/{priceListId}/attachments | Retrieve the attachments associated to the price list
*HasManyApi* | [**gETPriceListIdPrices**](docs/Api/HasManyApi.md#getpricelistidprices) | **GET** /price_lists/{priceListId}/prices | Retrieve the prices associated to the price list
*HasManyApi* | [**gETPromotionIdAttachments**](docs/Api/HasManyApi.md#getpromotionidattachments) | **GET** /promotions/{promotionId}/attachments | Retrieve the attachments associated to the promotion
*HasManyApi* | [**gETReturnIdAttachments**](docs/Api/HasManyApi.md#getreturnidattachments) | **GET** /returns/{returnId}/attachments | Retrieve the attachments associated to the return
*HasManyApi* | [**gETReturnIdReturnLineItems**](docs/Api/HasManyApi.md#getreturnidreturnlineitems) | **GET** /returns/{returnId}/return_line_items | Retrieve the return line items associated to the return
*HasManyApi* | [**gETShipmentIdAttachments**](docs/Api/HasManyApi.md#getshipmentidattachments) | **GET** /shipments/{shipmentId}/attachments | Retrieve the attachments associated to the shipment
*HasManyApi* | [**gETShipmentIdAvailableShippingMethods**](docs/Api/HasManyApi.md#getshipmentidavailableshippingmethods) | **GET** /shipments/{shipmentId}/available_shipping_methods | Retrieve the available shipping methods associated to the shipment
*HasManyApi* | [**gETShipmentIdCarrierAccounts**](docs/Api/HasManyApi.md#getshipmentidcarrieraccounts) | **GET** /shipments/{shipmentId}/carrier_accounts | Retrieve the carrier accounts associated to the shipment
*HasManyApi* | [**gETShipmentIdParcels**](docs/Api/HasManyApi.md#getshipmentidparcels) | **GET** /shipments/{shipmentId}/parcels | Retrieve the parcels associated to the shipment
*HasManyApi* | [**gETShipmentIdShipmentLineItems**](docs/Api/HasManyApi.md#getshipmentidshipmentlineitems) | **GET** /shipments/{shipmentId}/shipment_line_items | Retrieve the shipment line items associated to the shipment
*HasManyApi* | [**gETShipmentIdStockLineItems**](docs/Api/HasManyApi.md#getshipmentidstocklineitems) | **GET** /shipments/{shipmentId}/stock_line_items | Retrieve the stock line items associated to the shipment
*HasManyApi* | [**gETShipmentIdStockTransfers**](docs/Api/HasManyApi.md#getshipmentidstocktransfers) | **GET** /shipments/{shipmentId}/stock_transfers | Retrieve the stock transfers associated to the shipment
*HasManyApi* | [**gETShippingCategoryIdAttachments**](docs/Api/HasManyApi.md#getshippingcategoryidattachments) | **GET** /shipping_categories/{shippingCategoryId}/attachments | Retrieve the attachments associated to the shipping category
*HasManyApi* | [**gETShippingCategoryIdSkus**](docs/Api/HasManyApi.md#getshippingcategoryidskus) | **GET** /shipping_categories/{shippingCategoryId}/skus | Retrieve the skus associated to the shipping category
*HasManyApi* | [**gETShippingMethodIdAttachments**](docs/Api/HasManyApi.md#getshippingmethodidattachments) | **GET** /shipping_methods/{shippingMethodId}/attachments | Retrieve the attachments associated to the shipping method
*HasManyApi* | [**gETShippingZoneIdAttachments**](docs/Api/HasManyApi.md#getshippingzoneidattachments) | **GET** /shipping_zones/{shippingZoneId}/attachments | Retrieve the attachments associated to the shipping zone
*HasManyApi* | [**gETSkuIdAttachments**](docs/Api/HasManyApi.md#getskuidattachments) | **GET** /skus/{skuId}/attachments | Retrieve the attachments associated to the SKU
*HasManyApi* | [**gETSkuIdDeliveryLeadTimes**](docs/Api/HasManyApi.md#getskuiddeliveryleadtimes) | **GET** /skus/{skuId}/delivery_lead_times | Retrieve the delivery lead times associated to the SKU
*HasManyApi* | [**gETSkuIdPrices**](docs/Api/HasManyApi.md#getskuidprices) | **GET** /skus/{skuId}/prices | Retrieve the prices associated to the SKU
*HasManyApi* | [**gETSkuIdSkuOptions**](docs/Api/HasManyApi.md#getskuidskuoptions) | **GET** /skus/{skuId}/sku_options | Retrieve the sku options associated to the SKU
*HasManyApi* | [**gETSkuIdStockItems**](docs/Api/HasManyApi.md#getskuidstockitems) | **GET** /skus/{skuId}/stock_items | Retrieve the stock items associated to the SKU
*HasManyApi* | [**gETSkuListIdSkuListItems**](docs/Api/HasManyApi.md#getskulistidskulistitems) | **GET** /sku_lists/{skuListId}/sku_list_items | Retrieve the sku list items associated to the SKU list
*HasManyApi* | [**gETSkuListIdSkus**](docs/Api/HasManyApi.md#getskulistidskus) | **GET** /sku_lists/{skuListId}/skus | Retrieve the skus associated to the SKU list
*HasManyApi* | [**gETSkuListPromotionRuleIdSkus**](docs/Api/HasManyApi.md#getskulistpromotionruleidskus) | **GET** /sku_list_promotion_rules/{skuListPromotionRuleId}/skus | Retrieve the skus associated to the SKU list promotion rule
*HasManyApi* | [**gETSkuOptionIdAttachments**](docs/Api/HasManyApi.md#getskuoptionidattachments) | **GET** /sku_options/{skuOptionId}/attachments | Retrieve the attachments associated to the SKU option
*HasManyApi* | [**gETStockItemIdAttachments**](docs/Api/HasManyApi.md#getstockitemidattachments) | **GET** /stock_items/{stockItemId}/attachments | Retrieve the attachments associated to the stock item
*HasManyApi* | [**gETStockLocationIdAttachments**](docs/Api/HasManyApi.md#getstocklocationidattachments) | **GET** /stock_locations/{stockLocationId}/attachments | Retrieve the attachments associated to the stock location
*HasManyApi* | [**gETStockLocationIdInventoryReturnLocations**](docs/Api/HasManyApi.md#getstocklocationidinventoryreturnlocations) | **GET** /stock_locations/{stockLocationId}/inventory_return_locations | Retrieve the inventory return locations associated to the stock location
*HasManyApi* | [**gETStockLocationIdInventoryStockLocations**](docs/Api/HasManyApi.md#getstocklocationidinventorystocklocations) | **GET** /stock_locations/{stockLocationId}/inventory_stock_locations | Retrieve the inventory stock locations associated to the stock location
*HasManyApi* | [**gETStockLocationIdStockItems**](docs/Api/HasManyApi.md#getstocklocationidstockitems) | **GET** /stock_locations/{stockLocationId}/stock_items | Retrieve the stock items associated to the stock location
*HasManyApi* | [**gETStockLocationIdStockTransfers**](docs/Api/HasManyApi.md#getstocklocationidstocktransfers) | **GET** /stock_locations/{stockLocationId}/stock_transfers | Retrieve the stock transfers associated to the stock location
*HasManyApi* | [**gETStripeGatewayIdPaymentMethods**](docs/Api/HasManyApi.md#getstripegatewayidpaymentmethods) | **GET** /stripe_gateways/{stripeGatewayId}/payment_methods | Retrieve the payment methods associated to the stripe gateway
*HasManyApi* | [**gETStripeGatewayIdStripePayments**](docs/Api/HasManyApi.md#getstripegatewayidstripepayments) | **GET** /stripe_gateways/{stripeGatewayId}/stripe_payments | Retrieve the stripe payments associated to the stripe gateway
*HasManyApi* | [**gETTaxCalculatorIdAttachments**](docs/Api/HasManyApi.md#gettaxcalculatoridattachments) | **GET** /tax_calculators/{taxCalculatorId}/attachments | Retrieve the attachments associated to the tax calculator
*HasManyApi* | [**gETTaxCalculatorIdTaxCategories**](docs/Api/HasManyApi.md#gettaxcalculatoridtaxcategories) | **GET** /tax_calculators/{taxCalculatorId}/tax_categories | Retrieve the tax categories associated to the tax calculator
*HasManyApi* | [**gETTaxCategoryIdAttachments**](docs/Api/HasManyApi.md#gettaxcategoryidattachments) | **GET** /tax_categories/{taxCategoryId}/attachments | Retrieve the attachments associated to the tax category
*HasManyApi* | [**gETTaxjarAccountIdAttachments**](docs/Api/HasManyApi.md#gettaxjaraccountidattachments) | **GET** /taxjar_accounts/{taxjarAccountId}/attachments | Retrieve the attachments associated to the taxjar account
*HasManyApi* | [**gETTaxjarAccountIdTaxCategories**](docs/Api/HasManyApi.md#gettaxjaraccountidtaxcategories) | **GET** /taxjar_accounts/{taxjarAccountId}/tax_categories | Retrieve the tax categories associated to the taxjar account
*HasOneApi* | [**gETAddressIdGeocoder**](docs/Api/HasOneApi.md#getaddressidgeocoder) | **GET** /addresses/{addressId}/geocoder | Retrieve the geocoder associated to the address
*HasOneApi* | [**gETAdyenPaymentIdOrder**](docs/Api/HasOneApi.md#getadyenpaymentidorder) | **GET** /adyen_payments/{adyenPaymentId}/order | Retrieve the order associated to the adyen payment
*HasOneApi* | [**gETAdyenPaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getadyenpaymentidpaymentgateway) | **GET** /adyen_payments/{adyenPaymentId}/payment_gateway | Retrieve the payment gateway associated to the adyen payment
*HasOneApi* | [**gETAuthorizationIdOrder**](docs/Api/HasOneApi.md#getauthorizationidorder) | **GET** /authorizations/{authorizationId}/order | Retrieve the order associated to the authorization
*HasOneApi* | [**gETBillingInfoValidationRuleIdMarket**](docs/Api/HasOneApi.md#getbillinginfovalidationruleidmarket) | **GET** /billing_info_validation_rules/{billingInfoValidationRuleId}/market | Retrieve the market associated to the billing info validation rule
*HasOneApi* | [**gETBraintreePaymentIdOrder**](docs/Api/HasOneApi.md#getbraintreepaymentidorder) | **GET** /braintree_payments/{braintreePaymentId}/order | Retrieve the order associated to the braintree payment
*HasOneApi* | [**gETBraintreePaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getbraintreepaymentidpaymentgateway) | **GET** /braintree_payments/{braintreePaymentId}/payment_gateway | Retrieve the payment gateway associated to the braintree payment
*HasOneApi* | [**gETCaptureIdOrder**](docs/Api/HasOneApi.md#getcaptureidorder) | **GET** /captures/{captureId}/order | Retrieve the order associated to the capture
*HasOneApi* | [**gETCaptureIdReferenceAuthorization**](docs/Api/HasOneApi.md#getcaptureidreferenceauthorization) | **GET** /captures/{captureId}/reference_authorization | Retrieve the reference authorization associated to the capture
*HasOneApi* | [**gETCarrierAccountIdMarket**](docs/Api/HasOneApi.md#getcarrieraccountidmarket) | **GET** /carrier_accounts/{carrierAccountId}/market | Retrieve the market associated to the carrier account
*HasOneApi* | [**gETCheckoutComPaymentIdOrder**](docs/Api/HasOneApi.md#getcheckoutcompaymentidorder) | **GET** /checkout_com_payments/{checkoutComPaymentId}/order | Retrieve the order associated to the checkout com payment
*HasOneApi* | [**gETCheckoutComPaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getcheckoutcompaymentidpaymentgateway) | **GET** /checkout_com_payments/{checkoutComPaymentId}/payment_gateway | Retrieve the payment gateway associated to the checkout com payment
*HasOneApi* | [**gETCouponIdPromotionRule**](docs/Api/HasOneApi.md#getcouponidpromotionrule) | **GET** /coupons/{couponId}/promotion_rule | Retrieve the promotion rule associated to the coupon
*HasOneApi* | [**gETCustomerAddressIdAddress**](docs/Api/HasOneApi.md#getcustomeraddressidaddress) | **GET** /customer_addresses/{customerAddressId}/address | Retrieve the address associated to the customer address
*HasOneApi* | [**gETCustomerAddressIdCustomer**](docs/Api/HasOneApi.md#getcustomeraddressidcustomer) | **GET** /customer_addresses/{customerAddressId}/customer | Retrieve the customer associated to the customer address
*HasOneApi* | [**gETCustomerIdCustomerGroup**](docs/Api/HasOneApi.md#getcustomeridcustomergroup) | **GET** /customers/{customerId}/customer_group | Retrieve the customer group associated to the customer
*HasOneApi* | [**gETCustomerPasswordResetIdCustomer**](docs/Api/HasOneApi.md#getcustomerpasswordresetidcustomer) | **GET** /customer_password_resets/{customerPasswordResetId}/customer | Retrieve the customer associated to the customer password reset
*HasOneApi* | [**gETCustomerPaymentSourceIdCustomer**](docs/Api/HasOneApi.md#getcustomerpaymentsourceidcustomer) | **GET** /customer_payment_sources/{customerPaymentSourceId}/customer | Retrieve the customer associated to the customer payment source
*HasOneApi* | [**gETCustomerSubscriptionIdCustomer**](docs/Api/HasOneApi.md#getcustomersubscriptionidcustomer) | **GET** /customer_subscriptions/{customerSubscriptionId}/customer | Retrieve the customer associated to the customer subscription
*HasOneApi* | [**gETDeliveryLeadTimeIdShippingMethod**](docs/Api/HasOneApi.md#getdeliveryleadtimeidshippingmethod) | **GET** /delivery_lead_times/{deliveryLeadTimeId}/shipping_method | Retrieve the shipping method associated to the delivery lead time
*HasOneApi* | [**gETDeliveryLeadTimeIdStockLocation**](docs/Api/HasOneApi.md#getdeliveryleadtimeidstocklocation) | **GET** /delivery_lead_times/{deliveryLeadTimeId}/stock_location | Retrieve the stock location associated to the delivery lead time
*HasOneApi* | [**gETExternalPaymentIdOrder**](docs/Api/HasOneApi.md#getexternalpaymentidorder) | **GET** /external_payments/{externalPaymentId}/order | Retrieve the order associated to the external payment
*HasOneApi* | [**gETExternalPaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getexternalpaymentidpaymentgateway) | **GET** /external_payments/{externalPaymentId}/payment_gateway | Retrieve the payment gateway associated to the external payment
*HasOneApi* | [**gETExternalPromotionIdCouponCodesPromotionRule**](docs/Api/HasOneApi.md#getexternalpromotionidcouponcodespromotionrule) | **GET** /external_promotions/{externalPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the external promotion
*HasOneApi* | [**gETExternalPromotionIdMarket**](docs/Api/HasOneApi.md#getexternalpromotionidmarket) | **GET** /external_promotions/{externalPromotionId}/market | Retrieve the market associated to the external promotion
*HasOneApi* | [**gETExternalPromotionIdOrderAmountPromotionRule**](docs/Api/HasOneApi.md#getexternalpromotionidorderamountpromotionrule) | **GET** /external_promotions/{externalPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the external promotion
*HasOneApi* | [**gETExternalPromotionIdSkuListPromotionRule**](docs/Api/HasOneApi.md#getexternalpromotionidskulistpromotionrule) | **GET** /external_promotions/{externalPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the external promotion
*HasOneApi* | [**gETFixedAmountPromotionIdCouponCodesPromotionRule**](docs/Api/HasOneApi.md#getfixedamountpromotionidcouponcodespromotionrule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the fixed amount promotion
*HasOneApi* | [**gETFixedAmountPromotionIdMarket**](docs/Api/HasOneApi.md#getfixedamountpromotionidmarket) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/market | Retrieve the market associated to the fixed amount promotion
*HasOneApi* | [**gETFixedAmountPromotionIdOrderAmountPromotionRule**](docs/Api/HasOneApi.md#getfixedamountpromotionidorderamountpromotionrule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the fixed amount promotion
*HasOneApi* | [**gETFixedAmountPromotionIdSkuListPromotionRule**](docs/Api/HasOneApi.md#getfixedamountpromotionidskulistpromotionrule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the fixed amount promotion
*HasOneApi* | [**gETFreeShippingPromotionIdCouponCodesPromotionRule**](docs/Api/HasOneApi.md#getfreeshippingpromotionidcouponcodespromotionrule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the free shipping promotion
*HasOneApi* | [**gETFreeShippingPromotionIdMarket**](docs/Api/HasOneApi.md#getfreeshippingpromotionidmarket) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/market | Retrieve the market associated to the free shipping promotion
*HasOneApi* | [**gETFreeShippingPromotionIdOrderAmountPromotionRule**](docs/Api/HasOneApi.md#getfreeshippingpromotionidorderamountpromotionrule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the free shipping promotion
*HasOneApi* | [**gETFreeShippingPromotionIdSkuListPromotionRule**](docs/Api/HasOneApi.md#getfreeshippingpromotionidskulistpromotionrule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the free shipping promotion
*HasOneApi* | [**gETGiftCardIdGiftCardRecipient**](docs/Api/HasOneApi.md#getgiftcardidgiftcardrecipient) | **GET** /gift_cards/{giftCardId}/gift_card_recipient | Retrieve the gift card recipient associated to the gift card
*HasOneApi* | [**gETGiftCardIdMarket**](docs/Api/HasOneApi.md#getgiftcardidmarket) | **GET** /gift_cards/{giftCardId}/market | Retrieve the market associated to the gift card
*HasOneApi* | [**gETGiftCardRecipientIdCustomer**](docs/Api/HasOneApi.md#getgiftcardrecipientidcustomer) | **GET** /gift_card_recipients/{giftCardRecipientId}/customer | Retrieve the customer associated to the gift card recipient
*HasOneApi* | [**gETInStockSubscriptionIdCustomer**](docs/Api/HasOneApi.md#getinstocksubscriptionidcustomer) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/customer | Retrieve the customer associated to the in stock subscription
*HasOneApi* | [**gETInStockSubscriptionIdMarket**](docs/Api/HasOneApi.md#getinstocksubscriptionidmarket) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/market | Retrieve the market associated to the in stock subscription
*HasOneApi* | [**gETInStockSubscriptionIdSku**](docs/Api/HasOneApi.md#getinstocksubscriptionidsku) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/sku | Retrieve the sku associated to the in stock subscription
*HasOneApi* | [**gETInventoryReturnLocationIdInventoryModel**](docs/Api/HasOneApi.md#getinventoryreturnlocationidinventorymodel) | **GET** /inventory_return_locations/{inventoryReturnLocationId}/inventory_model | Retrieve the inventory model associated to the inventory return location
*HasOneApi* | [**gETInventoryReturnLocationIdStockLocation**](docs/Api/HasOneApi.md#getinventoryreturnlocationidstocklocation) | **GET** /inventory_return_locations/{inventoryReturnLocationId}/stock_location | Retrieve the stock location associated to the inventory return location
*HasOneApi* | [**gETInventoryStockLocationIdInventoryModel**](docs/Api/HasOneApi.md#getinventorystocklocationidinventorymodel) | **GET** /inventory_stock_locations/{inventoryStockLocationId}/inventory_model | Retrieve the inventory model associated to the inventory stock location
*HasOneApi* | [**gETInventoryStockLocationIdStockLocation**](docs/Api/HasOneApi.md#getinventorystocklocationidstocklocation) | **GET** /inventory_stock_locations/{inventoryStockLocationId}/stock_location | Retrieve the stock location associated to the inventory stock location
*HasOneApi* | [**gETLineItemIdOrder**](docs/Api/HasOneApi.md#getlineitemidorder) | **GET** /line_items/{lineItemId}/order | Retrieve the order associated to the line item
*HasOneApi* | [**gETLineItemOptionIdLineItem**](docs/Api/HasOneApi.md#getlineitemoptionidlineitem) | **GET** /line_item_options/{lineItemOptionId}/line_item | Retrieve the line item associated to the line item option
*HasOneApi* | [**gETLineItemOptionIdSkuOption**](docs/Api/HasOneApi.md#getlineitemoptionidskuoption) | **GET** /line_item_options/{lineItemOptionId}/sku_option | Retrieve the sku option associated to the line item option
*HasOneApi* | [**gETMarketIdCustomerGroup**](docs/Api/HasOneApi.md#getmarketidcustomergroup) | **GET** /markets/{marketId}/customer_group | Retrieve the customer group associated to the market
*HasOneApi* | [**gETMarketIdInventoryModel**](docs/Api/HasOneApi.md#getmarketidinventorymodel) | **GET** /markets/{marketId}/inventory_model | Retrieve the inventory model associated to the market
*HasOneApi* | [**gETMarketIdMerchant**](docs/Api/HasOneApi.md#getmarketidmerchant) | **GET** /markets/{marketId}/merchant | Retrieve the merchant associated to the market
*HasOneApi* | [**gETMarketIdPriceList**](docs/Api/HasOneApi.md#getmarketidpricelist) | **GET** /markets/{marketId}/price_list | Retrieve the price list associated to the market
*HasOneApi* | [**gETMerchantIdAddress**](docs/Api/HasOneApi.md#getmerchantidaddress) | **GET** /merchants/{merchantId}/address | Retrieve the address associated to the merchant
*HasOneApi* | [**gETOrderIdBillingAddress**](docs/Api/HasOneApi.md#getorderidbillingaddress) | **GET** /orders/{orderId}/billing_address | Retrieve the billing address associated to the order
*HasOneApi* | [**gETOrderIdCustomer**](docs/Api/HasOneApi.md#getorderidcustomer) | **GET** /orders/{orderId}/customer | Retrieve the customer associated to the order
*HasOneApi* | [**gETOrderIdMarket**](docs/Api/HasOneApi.md#getorderidmarket) | **GET** /orders/{orderId}/market | Retrieve the market associated to the order
*HasOneApi* | [**gETOrderIdPaymentMethod**](docs/Api/HasOneApi.md#getorderidpaymentmethod) | **GET** /orders/{orderId}/payment_method | Retrieve the payment method associated to the order
*HasOneApi* | [**gETOrderIdShippingAddress**](docs/Api/HasOneApi.md#getorderidshippingaddress) | **GET** /orders/{orderId}/shipping_address | Retrieve the shipping address associated to the order
*HasOneApi* | [**gETPackageIdStockLocation**](docs/Api/HasOneApi.md#getpackageidstocklocation) | **GET** /packages/{packageId}/stock_location | Retrieve the stock location associated to the package
*HasOneApi* | [**gETParcelIdPackage**](docs/Api/HasOneApi.md#getparcelidpackage) | **GET** /parcels/{parcelId}/package | Retrieve the package associated to the parcel
*HasOneApi* | [**gETParcelIdShipment**](docs/Api/HasOneApi.md#getparcelidshipment) | **GET** /parcels/{parcelId}/shipment | Retrieve the shipment associated to the parcel
*HasOneApi* | [**gETParcelLineItemIdParcel**](docs/Api/HasOneApi.md#getparcellineitemidparcel) | **GET** /parcel_line_items/{parcelLineItemId}/parcel | Retrieve the parcel associated to the parcel line item
*HasOneApi* | [**gETParcelLineItemIdShipmentLineItem**](docs/Api/HasOneApi.md#getparcellineitemidshipmentlineitem) | **GET** /parcel_line_items/{parcelLineItemId}/shipment_line_item | Retrieve the shipment line item associated to the parcel line item
*HasOneApi* | [**gETParcelLineItemIdStockLineItem**](docs/Api/HasOneApi.md#getparcellineitemidstocklineitem) | **GET** /parcel_line_items/{parcelLineItemId}/stock_line_item | Retrieve the stock line item associated to the parcel line item
*HasOneApi* | [**gETPaymentMethodIdMarket**](docs/Api/HasOneApi.md#getpaymentmethodidmarket) | **GET** /payment_methods/{paymentMethodId}/market | Retrieve the market associated to the payment method
*HasOneApi* | [**gETPaymentMethodIdPaymentGateway**](docs/Api/HasOneApi.md#getpaymentmethodidpaymentgateway) | **GET** /payment_methods/{paymentMethodId}/payment_gateway | Retrieve the payment gateway associated to the payment method
*HasOneApi* | [**gETPaypalPaymentIdOrder**](docs/Api/HasOneApi.md#getpaypalpaymentidorder) | **GET** /paypal_payments/{paypalPaymentId}/order | Retrieve the order associated to the paypal payment
*HasOneApi* | [**gETPaypalPaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getpaypalpaymentidpaymentgateway) | **GET** /paypal_payments/{paypalPaymentId}/payment_gateway | Retrieve the payment gateway associated to the paypal payment
*HasOneApi* | [**gETPercentageDiscountPromotionIdCouponCodesPromotionRule**](docs/Api/HasOneApi.md#getpercentagediscountpromotionidcouponcodespromotionrule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the percentage discount promotion
*HasOneApi* | [**gETPercentageDiscountPromotionIdMarket**](docs/Api/HasOneApi.md#getpercentagediscountpromotionidmarket) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/market | Retrieve the market associated to the percentage discount promotion
*HasOneApi* | [**gETPercentageDiscountPromotionIdOrderAmountPromotionRule**](docs/Api/HasOneApi.md#getpercentagediscountpromotionidorderamountpromotionrule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the percentage discount promotion
*HasOneApi* | [**gETPercentageDiscountPromotionIdSkuList**](docs/Api/HasOneApi.md#getpercentagediscountpromotionidskulist) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/sku_list | Retrieve the sku list associated to the percentage discount promotion
*HasOneApi* | [**gETPercentageDiscountPromotionIdSkuListPromotionRule**](docs/Api/HasOneApi.md#getpercentagediscountpromotionidskulistpromotionrule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the percentage discount promotion
*HasOneApi* | [**gETPriceIdPriceList**](docs/Api/HasOneApi.md#getpriceidpricelist) | **GET** /prices/{priceId}/price_list | Retrieve the price list associated to the price
*HasOneApi* | [**gETPriceIdSku**](docs/Api/HasOneApi.md#getpriceidsku) | **GET** /prices/{priceId}/sku | Retrieve the sku associated to the price
*HasOneApi* | [**gETPromotionIdCouponCodesPromotionRule**](docs/Api/HasOneApi.md#getpromotionidcouponcodespromotionrule) | **GET** /promotions/{promotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the promotion
*HasOneApi* | [**gETPromotionIdMarket**](docs/Api/HasOneApi.md#getpromotionidmarket) | **GET** /promotions/{promotionId}/market | Retrieve the market associated to the promotion
*HasOneApi* | [**gETPromotionIdOrderAmountPromotionRule**](docs/Api/HasOneApi.md#getpromotionidorderamountpromotionrule) | **GET** /promotions/{promotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the promotion
*HasOneApi* | [**gETPromotionIdSkuListPromotionRule**](docs/Api/HasOneApi.md#getpromotionidskulistpromotionrule) | **GET** /promotions/{promotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the promotion
*HasOneApi* | [**gETRefundIdOrder**](docs/Api/HasOneApi.md#getrefundidorder) | **GET** /refunds/{refundId}/order | Retrieve the order associated to the refund
*HasOneApi* | [**gETRefundIdReferenceCapture**](docs/Api/HasOneApi.md#getrefundidreferencecapture) | **GET** /refunds/{refundId}/reference_capture | Retrieve the reference capture associated to the refund
*HasOneApi* | [**gETReturnIdCustomer**](docs/Api/HasOneApi.md#getreturnidcustomer) | **GET** /returns/{returnId}/customer | Retrieve the customer associated to the return
*HasOneApi* | [**gETReturnIdDestinationAddress**](docs/Api/HasOneApi.md#getreturniddestinationaddress) | **GET** /returns/{returnId}/destination_address | Retrieve the destination address associated to the return
*HasOneApi* | [**gETReturnIdOrder**](docs/Api/HasOneApi.md#getreturnidorder) | **GET** /returns/{returnId}/order | Retrieve the order associated to the return
*HasOneApi* | [**gETReturnIdOriginAddress**](docs/Api/HasOneApi.md#getreturnidoriginaddress) | **GET** /returns/{returnId}/origin_address | Retrieve the origin address associated to the return
*HasOneApi* | [**gETReturnIdStockLocation**](docs/Api/HasOneApi.md#getreturnidstocklocation) | **GET** /returns/{returnId}/stock_location | Retrieve the stock location associated to the return
*HasOneApi* | [**gETReturnLineItemIdLineItem**](docs/Api/HasOneApi.md#getreturnlineitemidlineitem) | **GET** /return_line_items/{returnLineItemId}/line_item | Retrieve the line item associated to the return line item
*HasOneApi* | [**gETReturnLineItemIdReturn**](docs/Api/HasOneApi.md#getreturnlineitemidreturn) | **GET** /return_line_items/{returnLineItemId}/return | Retrieve the return associated to the return line item
*HasOneApi* | [**gETShipmentIdDeliveryLeadTime**](docs/Api/HasOneApi.md#getshipmentiddeliveryleadtime) | **GET** /shipments/{shipmentId}/delivery_lead_time | Retrieve the delivery lead time associated to the shipment
*HasOneApi* | [**gETShipmentIdOrder**](docs/Api/HasOneApi.md#getshipmentidorder) | **GET** /shipments/{shipmentId}/order | Retrieve the order associated to the shipment
*HasOneApi* | [**gETShipmentIdOriginAddress**](docs/Api/HasOneApi.md#getshipmentidoriginaddress) | **GET** /shipments/{shipmentId}/origin_address | Retrieve the origin address associated to the shipment
*HasOneApi* | [**gETShipmentIdShippingAddress**](docs/Api/HasOneApi.md#getshipmentidshippingaddress) | **GET** /shipments/{shipmentId}/shipping_address | Retrieve the shipping address associated to the shipment
*HasOneApi* | [**gETShipmentIdShippingCategory**](docs/Api/HasOneApi.md#getshipmentidshippingcategory) | **GET** /shipments/{shipmentId}/shipping_category | Retrieve the shipping category associated to the shipment
*HasOneApi* | [**gETShipmentIdShippingMethod**](docs/Api/HasOneApi.md#getshipmentidshippingmethod) | **GET** /shipments/{shipmentId}/shipping_method | Retrieve the shipping method associated to the shipment
*HasOneApi* | [**gETShipmentIdStockLocation**](docs/Api/HasOneApi.md#getshipmentidstocklocation) | **GET** /shipments/{shipmentId}/stock_location | Retrieve the stock location associated to the shipment
*HasOneApi* | [**gETShippingMethodIdDeliveryLeadTimeForShipment**](docs/Api/HasOneApi.md#getshippingmethodiddeliveryleadtimeforshipment) | **GET** /shipping_methods/{shippingMethodId}/delivery_lead_time_for_shipment | Retrieve the delivery lead time for shipment associated to the shipping method
*HasOneApi* | [**gETShippingMethodIdMarket**](docs/Api/HasOneApi.md#getshippingmethodidmarket) | **GET** /shipping_methods/{shippingMethodId}/market | Retrieve the market associated to the shipping method
*HasOneApi* | [**gETShippingMethodIdShippingCategory**](docs/Api/HasOneApi.md#getshippingmethodidshippingcategory) | **GET** /shipping_methods/{shippingMethodId}/shipping_category | Retrieve the shipping category associated to the shipping method
*HasOneApi* | [**gETShippingMethodIdShippingZone**](docs/Api/HasOneApi.md#getshippingmethodidshippingzone) | **GET** /shipping_methods/{shippingMethodId}/shipping_zone | Retrieve the shipping zone associated to the shipping method
*HasOneApi* | [**gETSkuIdShippingCategory**](docs/Api/HasOneApi.md#getskuidshippingcategory) | **GET** /skus/{skuId}/shipping_category | Retrieve the shipping category associated to the SKU
*HasOneApi* | [**gETSkuListItemIdSku**](docs/Api/HasOneApi.md#getskulistitemidsku) | **GET** /sku_list_items/{skuListItemId}/sku | Retrieve the sku associated to the SKU list item
*HasOneApi* | [**gETSkuListItemIdSkuList**](docs/Api/HasOneApi.md#getskulistitemidskulist) | **GET** /sku_list_items/{skuListItemId}/sku_list | Retrieve the sku list associated to the SKU list item
*HasOneApi* | [**gETSkuListPromotionRuleIdSkuList**](docs/Api/HasOneApi.md#getskulistpromotionruleidskulist) | **GET** /sku_list_promotion_rules/{skuListPromotionRuleId}/sku_list | Retrieve the sku list associated to the SKU list promotion rule
*HasOneApi* | [**gETSkuOptionIdMarket**](docs/Api/HasOneApi.md#getskuoptionidmarket) | **GET** /sku_options/{skuOptionId}/market | Retrieve the market associated to the SKU option
*HasOneApi* | [**gETStockItemIdSku**](docs/Api/HasOneApi.md#getstockitemidsku) | **GET** /stock_items/{stockItemId}/sku | Retrieve the sku associated to the stock item
*HasOneApi* | [**gETStockItemIdStockLocation**](docs/Api/HasOneApi.md#getstockitemidstocklocation) | **GET** /stock_items/{stockItemId}/stock_location | Retrieve the stock location associated to the stock item
*HasOneApi* | [**gETStockLineItemIdLineItem**](docs/Api/HasOneApi.md#getstocklineitemidlineitem) | **GET** /stock_line_items/{stockLineItemId}/line_item | Retrieve the line item associated to the stock line item
*HasOneApi* | [**gETStockLineItemIdShipment**](docs/Api/HasOneApi.md#getstocklineitemidshipment) | **GET** /stock_line_items/{stockLineItemId}/shipment | Retrieve the shipment associated to the stock line item
*HasOneApi* | [**gETStockLineItemIdStockItem**](docs/Api/HasOneApi.md#getstocklineitemidstockitem) | **GET** /stock_line_items/{stockLineItemId}/stock_item | Retrieve the stock item associated to the stock line item
*HasOneApi* | [**gETStockLocationIdAddress**](docs/Api/HasOneApi.md#getstocklocationidaddress) | **GET** /stock_locations/{stockLocationId}/address | Retrieve the address associated to the stock location
*HasOneApi* | [**gETStockTransferIdDestinationStockLocation**](docs/Api/HasOneApi.md#getstocktransferiddestinationstocklocation) | **GET** /stock_transfers/{stockTransferId}/destination_stock_location | Retrieve the destination stock location associated to the stock transfer
*HasOneApi* | [**gETStockTransferIdLineItem**](docs/Api/HasOneApi.md#getstocktransferidlineitem) | **GET** /stock_transfers/{stockTransferId}/line_item | Retrieve the line item associated to the stock transfer
*HasOneApi* | [**gETStockTransferIdOriginStockLocation**](docs/Api/HasOneApi.md#getstocktransferidoriginstocklocation) | **GET** /stock_transfers/{stockTransferId}/origin_stock_location | Retrieve the origin stock location associated to the stock transfer
*HasOneApi* | [**gETStockTransferIdShipment**](docs/Api/HasOneApi.md#getstocktransferidshipment) | **GET** /stock_transfers/{stockTransferId}/shipment | Retrieve the shipment associated to the stock transfer
*HasOneApi* | [**gETStockTransferIdSku**](docs/Api/HasOneApi.md#getstocktransferidsku) | **GET** /stock_transfers/{stockTransferId}/sku | Retrieve the sku associated to the stock transfer
*HasOneApi* | [**gETStripePaymentIdOrder**](docs/Api/HasOneApi.md#getstripepaymentidorder) | **GET** /stripe_payments/{stripePaymentId}/order | Retrieve the order associated to the stripe payment
*HasOneApi* | [**gETStripePaymentIdPaymentGateway**](docs/Api/HasOneApi.md#getstripepaymentidpaymentgateway) | **GET** /stripe_payments/{stripePaymentId}/payment_gateway | Retrieve the payment gateway associated to the stripe payment
*HasOneApi* | [**gETTaxCategoryIdSku**](docs/Api/HasOneApi.md#gettaxcategoryidsku) | **GET** /tax_categories/{taxCategoryId}/sku | Retrieve the sku associated to the tax category
*HasOneApi* | [**gETTransactionIdOrder**](docs/Api/HasOneApi.md#gettransactionidorder) | **GET** /transactions/{transactionId}/order | Retrieve the order associated to the transaction
*HasOneApi* | [**gETVoidIdOrder**](docs/Api/HasOneApi.md#getvoididorder) | **GET** /voids/{voidId}/order | Retrieve the order associated to the void
*HasOneApi* | [**gETVoidIdReferenceAuthorization**](docs/Api/HasOneApi.md#getvoididreferenceauthorization) | **GET** /voids/{voidId}/reference_authorization | Retrieve the reference authorization associated to the void
*HasOneApi* | [**gETWireTransferIdOrder**](docs/Api/HasOneApi.md#getwiretransferidorder) | **GET** /wire_transfers/{wireTransferId}/order | Retrieve the order associated to the wire transfer
*ImportsApi* | [**dELETEImportsImportId**](docs/Api/ImportsApi.md#deleteimportsimportid) | **DELETE** /imports/{importId} | Delete an import
*ImportsApi* | [**gETImports**](docs/Api/ImportsApi.md#getimports) | **GET** /imports | List all imports
*ImportsApi* | [**gETImportsImportId**](docs/Api/ImportsApi.md#getimportsimportid) | **GET** /imports/{importId} | Retrieve an import
*ImportsApi* | [**pATCHImportsImportId**](docs/Api/ImportsApi.md#patchimportsimportid) | **PATCH** /imports/{importId} | Update an import
*ImportsApi* | [**pOSTImports**](docs/Api/ImportsApi.md#postimports) | **POST** /imports | Create an import
*InStockSubscriptionsApi* | [**dELETEInStockSubscriptionsInStockSubscriptionId**](docs/Api/InStockSubscriptionsApi.md#deleteinstocksubscriptionsinstocksubscriptionid) | **DELETE** /in_stock_subscriptions/{inStockSubscriptionId} | Delete an in stock subscription
*InStockSubscriptionsApi* | [**gETInStockSubscriptions**](docs/Api/InStockSubscriptionsApi.md#getinstocksubscriptions) | **GET** /in_stock_subscriptions | List all in stock subscriptions
*InStockSubscriptionsApi* | [**gETInStockSubscriptionsInStockSubscriptionId**](docs/Api/InStockSubscriptionsApi.md#getinstocksubscriptionsinstocksubscriptionid) | **GET** /in_stock_subscriptions/{inStockSubscriptionId} | Retrieve an in stock subscription
*InStockSubscriptionsApi* | [**pATCHInStockSubscriptionsInStockSubscriptionId**](docs/Api/InStockSubscriptionsApi.md#patchinstocksubscriptionsinstocksubscriptionid) | **PATCH** /in_stock_subscriptions/{inStockSubscriptionId} | Update an in stock subscription
*InStockSubscriptionsApi* | [**pOSTInStockSubscriptions**](docs/Api/InStockSubscriptionsApi.md#postinstocksubscriptions) | **POST** /in_stock_subscriptions | Create an in stock subscription
*InventoryModelsApi* | [**dELETEInventoryModelsInventoryModelId**](docs/Api/InventoryModelsApi.md#deleteinventorymodelsinventorymodelid) | **DELETE** /inventory_models/{inventoryModelId} | Delete an inventory model
*InventoryModelsApi* | [**gETInventoryModels**](docs/Api/InventoryModelsApi.md#getinventorymodels) | **GET** /inventory_models | List all inventory models
*InventoryModelsApi* | [**gETInventoryModelsInventoryModelId**](docs/Api/InventoryModelsApi.md#getinventorymodelsinventorymodelid) | **GET** /inventory_models/{inventoryModelId} | Retrieve an inventory model
*InventoryModelsApi* | [**pATCHInventoryModelsInventoryModelId**](docs/Api/InventoryModelsApi.md#patchinventorymodelsinventorymodelid) | **PATCH** /inventory_models/{inventoryModelId} | Update an inventory model
*InventoryModelsApi* | [**pOSTInventoryModels**](docs/Api/InventoryModelsApi.md#postinventorymodels) | **POST** /inventory_models | Create an inventory model
*InventoryReturnLocationsApi* | [**dELETEInventoryReturnLocationsInventoryReturnLocationId**](docs/Api/InventoryReturnLocationsApi.md#deleteinventoryreturnlocationsinventoryreturnlocationid) | **DELETE** /inventory_return_locations/{inventoryReturnLocationId} | Delete an inventory return location
*InventoryReturnLocationsApi* | [**gETInventoryReturnLocations**](docs/Api/InventoryReturnLocationsApi.md#getinventoryreturnlocations) | **GET** /inventory_return_locations | List all inventory return locations
*InventoryReturnLocationsApi* | [**gETInventoryReturnLocationsInventoryReturnLocationId**](docs/Api/InventoryReturnLocationsApi.md#getinventoryreturnlocationsinventoryreturnlocationid) | **GET** /inventory_return_locations/{inventoryReturnLocationId} | Retrieve an inventory return location
*InventoryReturnLocationsApi* | [**pATCHInventoryReturnLocationsInventoryReturnLocationId**](docs/Api/InventoryReturnLocationsApi.md#patchinventoryreturnlocationsinventoryreturnlocationid) | **PATCH** /inventory_return_locations/{inventoryReturnLocationId} | Update an inventory return location
*InventoryReturnLocationsApi* | [**pOSTInventoryReturnLocations**](docs/Api/InventoryReturnLocationsApi.md#postinventoryreturnlocations) | **POST** /inventory_return_locations | Create an inventory return location
*InventoryStockLocationsApi* | [**dELETEInventoryStockLocationsInventoryStockLocationId**](docs/Api/InventoryStockLocationsApi.md#deleteinventorystocklocationsinventorystocklocationid) | **DELETE** /inventory_stock_locations/{inventoryStockLocationId} | Delete an inventory stock location
*InventoryStockLocationsApi* | [**gETInventoryStockLocations**](docs/Api/InventoryStockLocationsApi.md#getinventorystocklocations) | **GET** /inventory_stock_locations | List all inventory stock locations
*InventoryStockLocationsApi* | [**gETInventoryStockLocationsInventoryStockLocationId**](docs/Api/InventoryStockLocationsApi.md#getinventorystocklocationsinventorystocklocationid) | **GET** /inventory_stock_locations/{inventoryStockLocationId} | Retrieve an inventory stock location
*InventoryStockLocationsApi* | [**pATCHInventoryStockLocationsInventoryStockLocationId**](docs/Api/InventoryStockLocationsApi.md#patchinventorystocklocationsinventorystocklocationid) | **PATCH** /inventory_stock_locations/{inventoryStockLocationId} | Update an inventory stock location
*InventoryStockLocationsApi* | [**pOSTInventoryStockLocations**](docs/Api/InventoryStockLocationsApi.md#postinventorystocklocations) | **POST** /inventory_stock_locations | Create an inventory stock location
*LineItemOptionsApi* | [**dELETELineItemOptionsLineItemOptionId**](docs/Api/LineItemOptionsApi.md#deletelineitemoptionslineitemoptionid) | **DELETE** /line_item_options/{lineItemOptionId} | Delete a line item option
*LineItemOptionsApi* | [**gETLineItemOptions**](docs/Api/LineItemOptionsApi.md#getlineitemoptions) | **GET** /line_item_options | List all line item options
*LineItemOptionsApi* | [**gETLineItemOptionsLineItemOptionId**](docs/Api/LineItemOptionsApi.md#getlineitemoptionslineitemoptionid) | **GET** /line_item_options/{lineItemOptionId} | Retrieve a line item option
*LineItemOptionsApi* | [**pATCHLineItemOptionsLineItemOptionId**](docs/Api/LineItemOptionsApi.md#patchlineitemoptionslineitemoptionid) | **PATCH** /line_item_options/{lineItemOptionId} | Update a line item option
*LineItemOptionsApi* | [**pOSTLineItemOptions**](docs/Api/LineItemOptionsApi.md#postlineitemoptions) | **POST** /line_item_options | Create a line item option
*LineItemsApi* | [**dELETELineItemsLineItemId**](docs/Api/LineItemsApi.md#deletelineitemslineitemid) | **DELETE** /line_items/{lineItemId} | Delete a line item
*LineItemsApi* | [**gETLineItems**](docs/Api/LineItemsApi.md#getlineitems) | **GET** /line_items | List all line items
*LineItemsApi* | [**gETLineItemsLineItemId**](docs/Api/LineItemsApi.md#getlineitemslineitemid) | **GET** /line_items/{lineItemId} | Retrieve a line item
*LineItemsApi* | [**pATCHLineItemsLineItemId**](docs/Api/LineItemsApi.md#patchlineitemslineitemid) | **PATCH** /line_items/{lineItemId} | Update a line item
*LineItemsApi* | [**pOSTLineItems**](docs/Api/LineItemsApi.md#postlineitems) | **POST** /line_items | Create a line item
*ManualGatewaysApi* | [**dELETEManualGatewaysManualGatewayId**](docs/Api/ManualGatewaysApi.md#deletemanualgatewaysmanualgatewayid) | **DELETE** /manual_gateways/{manualGatewayId} | Delete a manual gateway
*ManualGatewaysApi* | [**gETManualGateways**](docs/Api/ManualGatewaysApi.md#getmanualgateways) | **GET** /manual_gateways | List all manual gateways
*ManualGatewaysApi* | [**gETManualGatewaysManualGatewayId**](docs/Api/ManualGatewaysApi.md#getmanualgatewaysmanualgatewayid) | **GET** /manual_gateways/{manualGatewayId} | Retrieve a manual gateway
*ManualGatewaysApi* | [**pATCHManualGatewaysManualGatewayId**](docs/Api/ManualGatewaysApi.md#patchmanualgatewaysmanualgatewayid) | **PATCH** /manual_gateways/{manualGatewayId} | Update a manual gateway
*ManualGatewaysApi* | [**pOSTManualGateways**](docs/Api/ManualGatewaysApi.md#postmanualgateways) | **POST** /manual_gateways | Create a manual gateway
*ManualTaxCalculatorsApi* | [**dELETEManualTaxCalculatorsManualTaxCalculatorId**](docs/Api/ManualTaxCalculatorsApi.md#deletemanualtaxcalculatorsmanualtaxcalculatorid) | **DELETE** /manual_tax_calculators/{manualTaxCalculatorId} | Delete a manual tax calculator
*ManualTaxCalculatorsApi* | [**gETManualTaxCalculators**](docs/Api/ManualTaxCalculatorsApi.md#getmanualtaxcalculators) | **GET** /manual_tax_calculators | List all manual tax calculators
*ManualTaxCalculatorsApi* | [**gETManualTaxCalculatorsManualTaxCalculatorId**](docs/Api/ManualTaxCalculatorsApi.md#getmanualtaxcalculatorsmanualtaxcalculatorid) | **GET** /manual_tax_calculators/{manualTaxCalculatorId} | Retrieve a manual tax calculator
*ManualTaxCalculatorsApi* | [**pATCHManualTaxCalculatorsManualTaxCalculatorId**](docs/Api/ManualTaxCalculatorsApi.md#patchmanualtaxcalculatorsmanualtaxcalculatorid) | **PATCH** /manual_tax_calculators/{manualTaxCalculatorId} | Update a manual tax calculator
*ManualTaxCalculatorsApi* | [**pOSTManualTaxCalculators**](docs/Api/ManualTaxCalculatorsApi.md#postmanualtaxcalculators) | **POST** /manual_tax_calculators | Create a manual tax calculator
*MarketsApi* | [**dELETEMarketsMarketId**](docs/Api/MarketsApi.md#deletemarketsmarketid) | **DELETE** /markets/{marketId} | Delete a market
*MarketsApi* | [**gETMarkets**](docs/Api/MarketsApi.md#getmarkets) | **GET** /markets | List all markets
*MarketsApi* | [**gETMarketsMarketId**](docs/Api/MarketsApi.md#getmarketsmarketid) | **GET** /markets/{marketId} | Retrieve a market
*MarketsApi* | [**pATCHMarketsMarketId**](docs/Api/MarketsApi.md#patchmarketsmarketid) | **PATCH** /markets/{marketId} | Update a market
*MarketsApi* | [**pOSTMarkets**](docs/Api/MarketsApi.md#postmarkets) | **POST** /markets | Create a market
*MerchantsApi* | [**dELETEMerchantsMerchantId**](docs/Api/MerchantsApi.md#deletemerchantsmerchantid) | **DELETE** /merchants/{merchantId} | Delete a merchant
*MerchantsApi* | [**gETMerchants**](docs/Api/MerchantsApi.md#getmerchants) | **GET** /merchants | List all merchants
*MerchantsApi* | [**gETMerchantsMerchantId**](docs/Api/MerchantsApi.md#getmerchantsmerchantid) | **GET** /merchants/{merchantId} | Retrieve a merchant
*MerchantsApi* | [**pATCHMerchantsMerchantId**](docs/Api/MerchantsApi.md#patchmerchantsmerchantid) | **PATCH** /merchants/{merchantId} | Update a merchant
*MerchantsApi* | [**pOSTMerchants**](docs/Api/MerchantsApi.md#postmerchants) | **POST** /merchants | Create a merchant
*OrderAmountPromotionRulesApi* | [**dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId**](docs/Api/OrderAmountPromotionRulesApi.md#deleteorderamountpromotionrulesorderamountpromotionruleid) | **DELETE** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Delete an order amount promotion rule
*OrderAmountPromotionRulesApi* | [**gETOrderAmountPromotionRules**](docs/Api/OrderAmountPromotionRulesApi.md#getorderamountpromotionrules) | **GET** /order_amount_promotion_rules | List all order amount promotion rules
*OrderAmountPromotionRulesApi* | [**gETOrderAmountPromotionRulesOrderAmountPromotionRuleId**](docs/Api/OrderAmountPromotionRulesApi.md#getorderamountpromotionrulesorderamountpromotionruleid) | **GET** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Retrieve an order amount promotion rule
*OrderAmountPromotionRulesApi* | [**pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId**](docs/Api/OrderAmountPromotionRulesApi.md#patchorderamountpromotionrulesorderamountpromotionruleid) | **PATCH** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Update an order amount promotion rule
*OrderAmountPromotionRulesApi* | [**pOSTOrderAmountPromotionRules**](docs/Api/OrderAmountPromotionRulesApi.md#postorderamountpromotionrules) | **POST** /order_amount_promotion_rules | Create an order amount promotion rule
*OrdersApi* | [**dELETEOrdersOrderId**](docs/Api/OrdersApi.md#deleteordersorderid) | **DELETE** /orders/{orderId} | Delete an order
*OrdersApi* | [**gETOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | List all orders
*OrdersApi* | [**gETOrdersOrderId**](docs/Api/OrdersApi.md#getordersorderid) | **GET** /orders/{orderId} | Retrieve an order
*OrdersApi* | [**pATCHOrdersOrderId**](docs/Api/OrdersApi.md#patchordersorderid) | **PATCH** /orders/{orderId} | Update an order
*OrdersApi* | [**pOSTOrders**](docs/Api/OrdersApi.md#postorders) | **POST** /orders | Create an order
*OrganizationApi* | [**dELETEOrganizationOrganizationId**](docs/Api/OrganizationApi.md#deleteorganizationorganizationid) | **DELETE** /organization/{organizationId} | Delete the organization
*OrganizationApi* | [**gETOrganization**](docs/Api/OrganizationApi.md#getorganization) | **GET** /organization | List all organizations
*OrganizationApi* | [**gETOrganizationOrganizationId**](docs/Api/OrganizationApi.md#getorganizationorganizationid) | **GET** /organization/{organizationId} | Retrieve the organization
*OrganizationApi* | [**pATCHOrganizationOrganizationId**](docs/Api/OrganizationApi.md#patchorganizationorganizationid) | **PATCH** /organization/{organizationId} | Update the organization
*OrganizationApi* | [**pOSTOrganization**](docs/Api/OrganizationApi.md#postorganization) | **POST** /organization | Create the organization
*PackagesApi* | [**dELETEPackagesPackageId**](docs/Api/PackagesApi.md#deletepackagespackageid) | **DELETE** /packages/{packageId} | Delete a package
*PackagesApi* | [**gETPackages**](docs/Api/PackagesApi.md#getpackages) | **GET** /packages | List all packages
*PackagesApi* | [**gETPackagesPackageId**](docs/Api/PackagesApi.md#getpackagespackageid) | **GET** /packages/{packageId} | Retrieve a package
*PackagesApi* | [**pATCHPackagesPackageId**](docs/Api/PackagesApi.md#patchpackagespackageid) | **PATCH** /packages/{packageId} | Update a package
*PackagesApi* | [**pOSTPackages**](docs/Api/PackagesApi.md#postpackages) | **POST** /packages | Create a package
*ParcelLineItemsApi* | [**dELETEParcelLineItemsParcelLineItemId**](docs/Api/ParcelLineItemsApi.md#deleteparcellineitemsparcellineitemid) | **DELETE** /parcel_line_items/{parcelLineItemId} | Delete a parcel line item
*ParcelLineItemsApi* | [**gETParcelLineItems**](docs/Api/ParcelLineItemsApi.md#getparcellineitems) | **GET** /parcel_line_items | List all parcel line items
*ParcelLineItemsApi* | [**gETParcelLineItemsParcelLineItemId**](docs/Api/ParcelLineItemsApi.md#getparcellineitemsparcellineitemid) | **GET** /parcel_line_items/{parcelLineItemId} | Retrieve a parcel line item
*ParcelLineItemsApi* | [**pATCHParcelLineItemsParcelLineItemId**](docs/Api/ParcelLineItemsApi.md#patchparcellineitemsparcellineitemid) | **PATCH** /parcel_line_items/{parcelLineItemId} | Update a parcel line item
*ParcelLineItemsApi* | [**pOSTParcelLineItems**](docs/Api/ParcelLineItemsApi.md#postparcellineitems) | **POST** /parcel_line_items | Create a parcel line item
*ParcelsApi* | [**dELETEParcelsParcelId**](docs/Api/ParcelsApi.md#deleteparcelsparcelid) | **DELETE** /parcels/{parcelId} | Delete a parcel
*ParcelsApi* | [**gETParcels**](docs/Api/ParcelsApi.md#getparcels) | **GET** /parcels | List all parcels
*ParcelsApi* | [**gETParcelsParcelId**](docs/Api/ParcelsApi.md#getparcelsparcelid) | **GET** /parcels/{parcelId} | Retrieve a parcel
*ParcelsApi* | [**pATCHParcelsParcelId**](docs/Api/ParcelsApi.md#patchparcelsparcelid) | **PATCH** /parcels/{parcelId} | Update a parcel
*ParcelsApi* | [**pOSTParcels**](docs/Api/ParcelsApi.md#postparcels) | **POST** /parcels | Create a parcel
*PaymentGatewaysApi* | [**dELETEPaymentGatewaysPaymentGatewayId**](docs/Api/PaymentGatewaysApi.md#deletepaymentgatewayspaymentgatewayid) | **DELETE** /payment_gateways/{paymentGatewayId} | Delete a payment gateway
*PaymentGatewaysApi* | [**gETPaymentGateways**](docs/Api/PaymentGatewaysApi.md#getpaymentgateways) | **GET** /payment_gateways | List all payment gateways
*PaymentGatewaysApi* | [**gETPaymentGatewaysPaymentGatewayId**](docs/Api/PaymentGatewaysApi.md#getpaymentgatewayspaymentgatewayid) | **GET** /payment_gateways/{paymentGatewayId} | Retrieve a payment gateway
*PaymentGatewaysApi* | [**pATCHPaymentGatewaysPaymentGatewayId**](docs/Api/PaymentGatewaysApi.md#patchpaymentgatewayspaymentgatewayid) | **PATCH** /payment_gateways/{paymentGatewayId} | Update a payment gateway
*PaymentGatewaysApi* | [**pOSTPaymentGateways**](docs/Api/PaymentGatewaysApi.md#postpaymentgateways) | **POST** /payment_gateways | Create a payment gateway
*PaymentMethodsApi* | [**dELETEPaymentMethodsPaymentMethodId**](docs/Api/PaymentMethodsApi.md#deletepaymentmethodspaymentmethodid) | **DELETE** /payment_methods/{paymentMethodId} | Delete a payment method
*PaymentMethodsApi* | [**gETPaymentMethods**](docs/Api/PaymentMethodsApi.md#getpaymentmethods) | **GET** /payment_methods | List all payment methods
*PaymentMethodsApi* | [**gETPaymentMethodsPaymentMethodId**](docs/Api/PaymentMethodsApi.md#getpaymentmethodspaymentmethodid) | **GET** /payment_methods/{paymentMethodId} | Retrieve a payment method
*PaymentMethodsApi* | [**pATCHPaymentMethodsPaymentMethodId**](docs/Api/PaymentMethodsApi.md#patchpaymentmethodspaymentmethodid) | **PATCH** /payment_methods/{paymentMethodId} | Update a payment method
*PaymentMethodsApi* | [**pOSTPaymentMethods**](docs/Api/PaymentMethodsApi.md#postpaymentmethods) | **POST** /payment_methods | Create a payment method
*PaypalGatewaysApi* | [**dELETEPaypalGatewaysPaypalGatewayId**](docs/Api/PaypalGatewaysApi.md#deletepaypalgatewayspaypalgatewayid) | **DELETE** /paypal_gateways/{paypalGatewayId} | Delete a paypal gateway
*PaypalGatewaysApi* | [**gETPaypalGateways**](docs/Api/PaypalGatewaysApi.md#getpaypalgateways) | **GET** /paypal_gateways | List all paypal gateways
*PaypalGatewaysApi* | [**gETPaypalGatewaysPaypalGatewayId**](docs/Api/PaypalGatewaysApi.md#getpaypalgatewayspaypalgatewayid) | **GET** /paypal_gateways/{paypalGatewayId} | Retrieve a paypal gateway
*PaypalGatewaysApi* | [**pATCHPaypalGatewaysPaypalGatewayId**](docs/Api/PaypalGatewaysApi.md#patchpaypalgatewayspaypalgatewayid) | **PATCH** /paypal_gateways/{paypalGatewayId} | Update a paypal gateway
*PaypalGatewaysApi* | [**pOSTPaypalGateways**](docs/Api/PaypalGatewaysApi.md#postpaypalgateways) | **POST** /paypal_gateways | Create a paypal gateway
*PaypalPaymentsApi* | [**dELETEPaypalPaymentsPaypalPaymentId**](docs/Api/PaypalPaymentsApi.md#deletepaypalpaymentspaypalpaymentid) | **DELETE** /paypal_payments/{paypalPaymentId} | Delete a paypal payment
*PaypalPaymentsApi* | [**gETPaypalPayments**](docs/Api/PaypalPaymentsApi.md#getpaypalpayments) | **GET** /paypal_payments | List all paypal payments
*PaypalPaymentsApi* | [**gETPaypalPaymentsPaypalPaymentId**](docs/Api/PaypalPaymentsApi.md#getpaypalpaymentspaypalpaymentid) | **GET** /paypal_payments/{paypalPaymentId} | Retrieve a paypal payment
*PaypalPaymentsApi* | [**pATCHPaypalPaymentsPaypalPaymentId**](docs/Api/PaypalPaymentsApi.md#patchpaypalpaymentspaypalpaymentid) | **PATCH** /paypal_payments/{paypalPaymentId} | Update a paypal payment
*PaypalPaymentsApi* | [**pOSTPaypalPayments**](docs/Api/PaypalPaymentsApi.md#postpaypalpayments) | **POST** /paypal_payments | Create a paypal payment
*PercentageDiscountPromotionsApi* | [**dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId**](docs/Api/PercentageDiscountPromotionsApi.md#deletepercentagediscountpromotionspercentagediscountpromotionid) | **DELETE** /percentage_discount_promotions/{percentageDiscountPromotionId} | Delete a percentage discount promotion
*PercentageDiscountPromotionsApi* | [**gETPercentageDiscountPromotions**](docs/Api/PercentageDiscountPromotionsApi.md#getpercentagediscountpromotions) | **GET** /percentage_discount_promotions | List all percentage discount promotions
*PercentageDiscountPromotionsApi* | [**gETPercentageDiscountPromotionsPercentageDiscountPromotionId**](docs/Api/PercentageDiscountPromotionsApi.md#getpercentagediscountpromotionspercentagediscountpromotionid) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId} | Retrieve a percentage discount promotion
*PercentageDiscountPromotionsApi* | [**pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId**](docs/Api/PercentageDiscountPromotionsApi.md#patchpercentagediscountpromotionspercentagediscountpromotionid) | **PATCH** /percentage_discount_promotions/{percentageDiscountPromotionId} | Update a percentage discount promotion
*PercentageDiscountPromotionsApi* | [**pOSTPercentageDiscountPromotions**](docs/Api/PercentageDiscountPromotionsApi.md#postpercentagediscountpromotions) | **POST** /percentage_discount_promotions | Create a percentage discount promotion
*PriceListsApi* | [**dELETEPriceListsPriceListId**](docs/Api/PriceListsApi.md#deletepricelistspricelistid) | **DELETE** /price_lists/{priceListId} | Delete a price list
*PriceListsApi* | [**gETPriceLists**](docs/Api/PriceListsApi.md#getpricelists) | **GET** /price_lists | List all price lists
*PriceListsApi* | [**gETPriceListsPriceListId**](docs/Api/PriceListsApi.md#getpricelistspricelistid) | **GET** /price_lists/{priceListId} | Retrieve a price list
*PriceListsApi* | [**pATCHPriceListsPriceListId**](docs/Api/PriceListsApi.md#patchpricelistspricelistid) | **PATCH** /price_lists/{priceListId} | Update a price list
*PriceListsApi* | [**pOSTPriceLists**](docs/Api/PriceListsApi.md#postpricelists) | **POST** /price_lists | Create a price list
*PricesApi* | [**dELETEPricesPriceId**](docs/Api/PricesApi.md#deletepricespriceid) | **DELETE** /prices/{priceId} | Delete a price
*PricesApi* | [**gETPrices**](docs/Api/PricesApi.md#getprices) | **GET** /prices | List all prices
*PricesApi* | [**gETPricesPriceId**](docs/Api/PricesApi.md#getpricespriceid) | **GET** /prices/{priceId} | Retrieve a price
*PricesApi* | [**pATCHPricesPriceId**](docs/Api/PricesApi.md#patchpricespriceid) | **PATCH** /prices/{priceId} | Update a price
*PricesApi* | [**pOSTPrices**](docs/Api/PricesApi.md#postprices) | **POST** /prices | Create a price
*PromotionRulesApi* | [**dELETEPromotionRulesPromotionRuleId**](docs/Api/PromotionRulesApi.md#deletepromotionrulespromotionruleid) | **DELETE** /promotion_rules/{promotionRuleId} | Delete a promotion rule
*PromotionRulesApi* | [**gETPromotionRules**](docs/Api/PromotionRulesApi.md#getpromotionrules) | **GET** /promotion_rules | List all promotion rules
*PromotionRulesApi* | [**gETPromotionRulesPromotionRuleId**](docs/Api/PromotionRulesApi.md#getpromotionrulespromotionruleid) | **GET** /promotion_rules/{promotionRuleId} | Retrieve a promotion rule
*PromotionRulesApi* | [**pATCHPromotionRulesPromotionRuleId**](docs/Api/PromotionRulesApi.md#patchpromotionrulespromotionruleid) | **PATCH** /promotion_rules/{promotionRuleId} | Update a promotion rule
*PromotionRulesApi* | [**pOSTPromotionRules**](docs/Api/PromotionRulesApi.md#postpromotionrules) | **POST** /promotion_rules | Create a promotion rule
*PromotionsApi* | [**dELETEPromotionsPromotionId**](docs/Api/PromotionsApi.md#deletepromotionspromotionid) | **DELETE** /promotions/{promotionId} | Delete a promotion
*PromotionsApi* | [**gETPromotions**](docs/Api/PromotionsApi.md#getpromotions) | **GET** /promotions | List all promotions
*PromotionsApi* | [**gETPromotionsPromotionId**](docs/Api/PromotionsApi.md#getpromotionspromotionid) | **GET** /promotions/{promotionId} | Retrieve a promotion
*PromotionsApi* | [**pATCHPromotionsPromotionId**](docs/Api/PromotionsApi.md#patchpromotionspromotionid) | **PATCH** /promotions/{promotionId} | Update a promotion
*PromotionsApi* | [**pOSTPromotions**](docs/Api/PromotionsApi.md#postpromotions) | **POST** /promotions | Create a promotion
*RefundsApi* | [**dELETERefundsRefundId**](docs/Api/RefundsApi.md#deleterefundsrefundid) | **DELETE** /refunds/{refundId} | Delete a refund
*RefundsApi* | [**gETRefunds**](docs/Api/RefundsApi.md#getrefunds) | **GET** /refunds | List all refunds
*RefundsApi* | [**gETRefundsRefundId**](docs/Api/RefundsApi.md#getrefundsrefundid) | **GET** /refunds/{refundId} | Retrieve a refund
*RefundsApi* | [**pATCHRefundsRefundId**](docs/Api/RefundsApi.md#patchrefundsrefundid) | **PATCH** /refunds/{refundId} | Update a refund
*RefundsApi* | [**pOSTRefunds**](docs/Api/RefundsApi.md#postrefunds) | **POST** /refunds | Create a refund
*ReturnLineItemsApi* | [**dELETEReturnLineItemsReturnLineItemId**](docs/Api/ReturnLineItemsApi.md#deletereturnlineitemsreturnlineitemid) | **DELETE** /return_line_items/{returnLineItemId} | Delete a return line item
*ReturnLineItemsApi* | [**gETReturnLineItems**](docs/Api/ReturnLineItemsApi.md#getreturnlineitems) | **GET** /return_line_items | List all return line items
*ReturnLineItemsApi* | [**gETReturnLineItemsReturnLineItemId**](docs/Api/ReturnLineItemsApi.md#getreturnlineitemsreturnlineitemid) | **GET** /return_line_items/{returnLineItemId} | Retrieve a return line item
*ReturnLineItemsApi* | [**pATCHReturnLineItemsReturnLineItemId**](docs/Api/ReturnLineItemsApi.md#patchreturnlineitemsreturnlineitemid) | **PATCH** /return_line_items/{returnLineItemId} | Update a return line item
*ReturnLineItemsApi* | [**pOSTReturnLineItems**](docs/Api/ReturnLineItemsApi.md#postreturnlineitems) | **POST** /return_line_items | Create a return line item
*ReturnsApi* | [**dELETEReturnsReturnId**](docs/Api/ReturnsApi.md#deletereturnsreturnid) | **DELETE** /returns/{returnId} | Delete a return
*ReturnsApi* | [**gETReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /returns | List all returns
*ReturnsApi* | [**gETReturnsReturnId**](docs/Api/ReturnsApi.md#getreturnsreturnid) | **GET** /returns/{returnId} | Retrieve a return
*ReturnsApi* | [**pATCHReturnsReturnId**](docs/Api/ReturnsApi.md#patchreturnsreturnid) | **PATCH** /returns/{returnId} | Update a return
*ReturnsApi* | [**pOSTReturns**](docs/Api/ReturnsApi.md#postreturns) | **POST** /returns | Create a return
*ShipmentsApi* | [**dELETEShipmentsShipmentId**](docs/Api/ShipmentsApi.md#deleteshipmentsshipmentid) | **DELETE** /shipments/{shipmentId} | Delete a shipment
*ShipmentsApi* | [**gETShipments**](docs/Api/ShipmentsApi.md#getshipments) | **GET** /shipments | List all shipments
*ShipmentsApi* | [**gETShipmentsShipmentId**](docs/Api/ShipmentsApi.md#getshipmentsshipmentid) | **GET** /shipments/{shipmentId} | Retrieve a shipment
*ShipmentsApi* | [**pATCHShipmentsShipmentId**](docs/Api/ShipmentsApi.md#patchshipmentsshipmentid) | **PATCH** /shipments/{shipmentId} | Update a shipment
*ShipmentsApi* | [**pOSTShipments**](docs/Api/ShipmentsApi.md#postshipments) | **POST** /shipments | Create a shipment
*ShippingCategoriesApi* | [**dELETEShippingCategoriesShippingCategoryId**](docs/Api/ShippingCategoriesApi.md#deleteshippingcategoriesshippingcategoryid) | **DELETE** /shipping_categories/{shippingCategoryId} | Delete a shipping category
*ShippingCategoriesApi* | [**gETShippingCategories**](docs/Api/ShippingCategoriesApi.md#getshippingcategories) | **GET** /shipping_categories | List all shipping categories
*ShippingCategoriesApi* | [**gETShippingCategoriesShippingCategoryId**](docs/Api/ShippingCategoriesApi.md#getshippingcategoriesshippingcategoryid) | **GET** /shipping_categories/{shippingCategoryId} | Retrieve a shipping category
*ShippingCategoriesApi* | [**pATCHShippingCategoriesShippingCategoryId**](docs/Api/ShippingCategoriesApi.md#patchshippingcategoriesshippingcategoryid) | **PATCH** /shipping_categories/{shippingCategoryId} | Update a shipping category
*ShippingCategoriesApi* | [**pOSTShippingCategories**](docs/Api/ShippingCategoriesApi.md#postshippingcategories) | **POST** /shipping_categories | Create a shipping category
*ShippingMethodsApi* | [**dELETEShippingMethodsShippingMethodId**](docs/Api/ShippingMethodsApi.md#deleteshippingmethodsshippingmethodid) | **DELETE** /shipping_methods/{shippingMethodId} | Delete a shipping method
*ShippingMethodsApi* | [**gETShippingMethods**](docs/Api/ShippingMethodsApi.md#getshippingmethods) | **GET** /shipping_methods | List all shipping methods
*ShippingMethodsApi* | [**gETShippingMethodsShippingMethodId**](docs/Api/ShippingMethodsApi.md#getshippingmethodsshippingmethodid) | **GET** /shipping_methods/{shippingMethodId} | Retrieve a shipping method
*ShippingMethodsApi* | [**pATCHShippingMethodsShippingMethodId**](docs/Api/ShippingMethodsApi.md#patchshippingmethodsshippingmethodid) | **PATCH** /shipping_methods/{shippingMethodId} | Update a shipping method
*ShippingMethodsApi* | [**pOSTShippingMethods**](docs/Api/ShippingMethodsApi.md#postshippingmethods) | **POST** /shipping_methods | Create a shipping method
*ShippingZonesApi* | [**dELETEShippingZonesShippingZoneId**](docs/Api/ShippingZonesApi.md#deleteshippingzonesshippingzoneid) | **DELETE** /shipping_zones/{shippingZoneId} | Delete a shipping zone
*ShippingZonesApi* | [**gETShippingZones**](docs/Api/ShippingZonesApi.md#getshippingzones) | **GET** /shipping_zones | List all shipping zones
*ShippingZonesApi* | [**gETShippingZonesShippingZoneId**](docs/Api/ShippingZonesApi.md#getshippingzonesshippingzoneid) | **GET** /shipping_zones/{shippingZoneId} | Retrieve a shipping zone
*ShippingZonesApi* | [**pATCHShippingZonesShippingZoneId**](docs/Api/ShippingZonesApi.md#patchshippingzonesshippingzoneid) | **PATCH** /shipping_zones/{shippingZoneId} | Update a shipping zone
*ShippingZonesApi* | [**pOSTShippingZones**](docs/Api/ShippingZonesApi.md#postshippingzones) | **POST** /shipping_zones | Create a shipping zone
*SkuListItemsApi* | [**dELETESkuListItemsSkuListItemId**](docs/Api/SkuListItemsApi.md#deleteskulistitemsskulistitemid) | **DELETE** /sku_list_items/{skuListItemId} | Delete a SKU list item
*SkuListItemsApi* | [**gETSkuListItems**](docs/Api/SkuListItemsApi.md#getskulistitems) | **GET** /sku_list_items | List all SKU list items
*SkuListItemsApi* | [**gETSkuListItemsSkuListItemId**](docs/Api/SkuListItemsApi.md#getskulistitemsskulistitemid) | **GET** /sku_list_items/{skuListItemId} | Retrieve a SKU list item
*SkuListItemsApi* | [**pATCHSkuListItemsSkuListItemId**](docs/Api/SkuListItemsApi.md#patchskulistitemsskulistitemid) | **PATCH** /sku_list_items/{skuListItemId} | Update a SKU list item
*SkuListItemsApi* | [**pOSTSkuListItems**](docs/Api/SkuListItemsApi.md#postskulistitems) | **POST** /sku_list_items | Create a SKU list item
*SkuListPromotionRulesApi* | [**dELETESkuListPromotionRulesSkuListPromotionRuleId**](docs/Api/SkuListPromotionRulesApi.md#deleteskulistpromotionrulesskulistpromotionruleid) | **DELETE** /sku_list_promotion_rules/{skuListPromotionRuleId} | Delete a SKU list promotion rule
*SkuListPromotionRulesApi* | [**gETSkuListPromotionRules**](docs/Api/SkuListPromotionRulesApi.md#getskulistpromotionrules) | **GET** /sku_list_promotion_rules | List all SKU list promotion rules
*SkuListPromotionRulesApi* | [**gETSkuListPromotionRulesSkuListPromotionRuleId**](docs/Api/SkuListPromotionRulesApi.md#getskulistpromotionrulesskulistpromotionruleid) | **GET** /sku_list_promotion_rules/{skuListPromotionRuleId} | Retrieve a SKU list promotion rule
*SkuListPromotionRulesApi* | [**pATCHSkuListPromotionRulesSkuListPromotionRuleId**](docs/Api/SkuListPromotionRulesApi.md#patchskulistpromotionrulesskulistpromotionruleid) | **PATCH** /sku_list_promotion_rules/{skuListPromotionRuleId} | Update a SKU list promotion rule
*SkuListPromotionRulesApi* | [**pOSTSkuListPromotionRules**](docs/Api/SkuListPromotionRulesApi.md#postskulistpromotionrules) | **POST** /sku_list_promotion_rules | Create a SKU list promotion rule
*SkuListsApi* | [**dELETESkuListsSkuListId**](docs/Api/SkuListsApi.md#deleteskulistsskulistid) | **DELETE** /sku_lists/{skuListId} | Delete a SKU list
*SkuListsApi* | [**gETSkuLists**](docs/Api/SkuListsApi.md#getskulists) | **GET** /sku_lists | List all SKU lists
*SkuListsApi* | [**gETSkuListsSkuListId**](docs/Api/SkuListsApi.md#getskulistsskulistid) | **GET** /sku_lists/{skuListId} | Retrieve a SKU list
*SkuListsApi* | [**pATCHSkuListsSkuListId**](docs/Api/SkuListsApi.md#patchskulistsskulistid) | **PATCH** /sku_lists/{skuListId} | Update a SKU list
*SkuListsApi* | [**pOSTSkuLists**](docs/Api/SkuListsApi.md#postskulists) | **POST** /sku_lists | Create a SKU list
*SkuOptionsApi* | [**dELETESkuOptionsSkuOptionId**](docs/Api/SkuOptionsApi.md#deleteskuoptionsskuoptionid) | **DELETE** /sku_options/{skuOptionId} | Delete a SKU option
*SkuOptionsApi* | [**gETSkuOptions**](docs/Api/SkuOptionsApi.md#getskuoptions) | **GET** /sku_options | List all SKU options
*SkuOptionsApi* | [**gETSkuOptionsSkuOptionId**](docs/Api/SkuOptionsApi.md#getskuoptionsskuoptionid) | **GET** /sku_options/{skuOptionId} | Retrieve a SKU option
*SkuOptionsApi* | [**pATCHSkuOptionsSkuOptionId**](docs/Api/SkuOptionsApi.md#patchskuoptionsskuoptionid) | **PATCH** /sku_options/{skuOptionId} | Update a SKU option
*SkuOptionsApi* | [**pOSTSkuOptions**](docs/Api/SkuOptionsApi.md#postskuoptions) | **POST** /sku_options | Create a SKU option
*SkusApi* | [**dELETESkusSkuId**](docs/Api/SkusApi.md#deleteskusskuid) | **DELETE** /skus/{skuId} | Delete a SKU
*SkusApi* | [**gETSkus**](docs/Api/SkusApi.md#getskus) | **GET** /skus | List all SKUs
*SkusApi* | [**gETSkusSkuId**](docs/Api/SkusApi.md#getskusskuid) | **GET** /skus/{skuId} | Retrieve a SKU
*SkusApi* | [**pATCHSkusSkuId**](docs/Api/SkusApi.md#patchskusskuid) | **PATCH** /skus/{skuId} | Update a SKU
*SkusApi* | [**pOSTSkus**](docs/Api/SkusApi.md#postskus) | **POST** /skus | Create a SKU
*StockItemsApi* | [**dELETEStockItemsStockItemId**](docs/Api/StockItemsApi.md#deletestockitemsstockitemid) | **DELETE** /stock_items/{stockItemId} | Delete a stock item
*StockItemsApi* | [**gETStockItems**](docs/Api/StockItemsApi.md#getstockitems) | **GET** /stock_items | List all stock items
*StockItemsApi* | [**gETStockItemsStockItemId**](docs/Api/StockItemsApi.md#getstockitemsstockitemid) | **GET** /stock_items/{stockItemId} | Retrieve a stock item
*StockItemsApi* | [**pATCHStockItemsStockItemId**](docs/Api/StockItemsApi.md#patchstockitemsstockitemid) | **PATCH** /stock_items/{stockItemId} | Update a stock item
*StockItemsApi* | [**pOSTStockItems**](docs/Api/StockItemsApi.md#poststockitems) | **POST** /stock_items | Create a stock item
*StockLineItemsApi* | [**dELETEStockLineItemsStockLineItemId**](docs/Api/StockLineItemsApi.md#deletestocklineitemsstocklineitemid) | **DELETE** /stock_line_items/{stockLineItemId} | Delete a stock line item
*StockLineItemsApi* | [**gETStockLineItems**](docs/Api/StockLineItemsApi.md#getstocklineitems) | **GET** /stock_line_items | List all stock line items
*StockLineItemsApi* | [**gETStockLineItemsStockLineItemId**](docs/Api/StockLineItemsApi.md#getstocklineitemsstocklineitemid) | **GET** /stock_line_items/{stockLineItemId} | Retrieve a stock line item
*StockLineItemsApi* | [**pATCHStockLineItemsStockLineItemId**](docs/Api/StockLineItemsApi.md#patchstocklineitemsstocklineitemid) | **PATCH** /stock_line_items/{stockLineItemId} | Update a stock line item
*StockLineItemsApi* | [**pOSTStockLineItems**](docs/Api/StockLineItemsApi.md#poststocklineitems) | **POST** /stock_line_items | Create a stock line item
*StockLocationsApi* | [**dELETEStockLocationsStockLocationId**](docs/Api/StockLocationsApi.md#deletestocklocationsstocklocationid) | **DELETE** /stock_locations/{stockLocationId} | Delete a stock location
*StockLocationsApi* | [**gETStockLocations**](docs/Api/StockLocationsApi.md#getstocklocations) | **GET** /stock_locations | List all stock locations
*StockLocationsApi* | [**gETStockLocationsStockLocationId**](docs/Api/StockLocationsApi.md#getstocklocationsstocklocationid) | **GET** /stock_locations/{stockLocationId} | Retrieve a stock location
*StockLocationsApi* | [**pATCHStockLocationsStockLocationId**](docs/Api/StockLocationsApi.md#patchstocklocationsstocklocationid) | **PATCH** /stock_locations/{stockLocationId} | Update a stock location
*StockLocationsApi* | [**pOSTStockLocations**](docs/Api/StockLocationsApi.md#poststocklocations) | **POST** /stock_locations | Create a stock location
*StockTransfersApi* | [**dELETEStockTransfersStockTransferId**](docs/Api/StockTransfersApi.md#deletestocktransfersstocktransferid) | **DELETE** /stock_transfers/{stockTransferId} | Delete a stock transfer
*StockTransfersApi* | [**gETStockTransfers**](docs/Api/StockTransfersApi.md#getstocktransfers) | **GET** /stock_transfers | List all stock transfers
*StockTransfersApi* | [**gETStockTransfersStockTransferId**](docs/Api/StockTransfersApi.md#getstocktransfersstocktransferid) | **GET** /stock_transfers/{stockTransferId} | Retrieve a stock transfer
*StockTransfersApi* | [**pATCHStockTransfersStockTransferId**](docs/Api/StockTransfersApi.md#patchstocktransfersstocktransferid) | **PATCH** /stock_transfers/{stockTransferId} | Update a stock transfer
*StockTransfersApi* | [**pOSTStockTransfers**](docs/Api/StockTransfersApi.md#poststocktransfers) | **POST** /stock_transfers | Create a stock transfer
*StripeGatewaysApi* | [**dELETEStripeGatewaysStripeGatewayId**](docs/Api/StripeGatewaysApi.md#deletestripegatewaysstripegatewayid) | **DELETE** /stripe_gateways/{stripeGatewayId} | Delete a stripe gateway
*StripeGatewaysApi* | [**gETStripeGateways**](docs/Api/StripeGatewaysApi.md#getstripegateways) | **GET** /stripe_gateways | List all stripe gateways
*StripeGatewaysApi* | [**gETStripeGatewaysStripeGatewayId**](docs/Api/StripeGatewaysApi.md#getstripegatewaysstripegatewayid) | **GET** /stripe_gateways/{stripeGatewayId} | Retrieve a stripe gateway
*StripeGatewaysApi* | [**pATCHStripeGatewaysStripeGatewayId**](docs/Api/StripeGatewaysApi.md#patchstripegatewaysstripegatewayid) | **PATCH** /stripe_gateways/{stripeGatewayId} | Update a stripe gateway
*StripeGatewaysApi* | [**pOSTStripeGateways**](docs/Api/StripeGatewaysApi.md#poststripegateways) | **POST** /stripe_gateways | Create a stripe gateway
*StripePaymentsApi* | [**dELETEStripePaymentsStripePaymentId**](docs/Api/StripePaymentsApi.md#deletestripepaymentsstripepaymentid) | **DELETE** /stripe_payments/{stripePaymentId} | Delete a stripe payment
*StripePaymentsApi* | [**gETStripePayments**](docs/Api/StripePaymentsApi.md#getstripepayments) | **GET** /stripe_payments | List all stripe payments
*StripePaymentsApi* | [**gETStripePaymentsStripePaymentId**](docs/Api/StripePaymentsApi.md#getstripepaymentsstripepaymentid) | **GET** /stripe_payments/{stripePaymentId} | Retrieve a stripe payment
*StripePaymentsApi* | [**pATCHStripePaymentsStripePaymentId**](docs/Api/StripePaymentsApi.md#patchstripepaymentsstripepaymentid) | **PATCH** /stripe_payments/{stripePaymentId} | Update a stripe payment
*StripePaymentsApi* | [**pOSTStripePayments**](docs/Api/StripePaymentsApi.md#poststripepayments) | **POST** /stripe_payments | Create a stripe payment
*TaxCalculatorsApi* | [**dELETETaxCalculatorsTaxCalculatorId**](docs/Api/TaxCalculatorsApi.md#deletetaxcalculatorstaxcalculatorid) | **DELETE** /tax_calculators/{taxCalculatorId} | Delete a tax calculator
*TaxCalculatorsApi* | [**gETTaxCalculators**](docs/Api/TaxCalculatorsApi.md#gettaxcalculators) | **GET** /tax_calculators | List all tax calculators
*TaxCalculatorsApi* | [**gETTaxCalculatorsTaxCalculatorId**](docs/Api/TaxCalculatorsApi.md#gettaxcalculatorstaxcalculatorid) | **GET** /tax_calculators/{taxCalculatorId} | Retrieve a tax calculator
*TaxCalculatorsApi* | [**pATCHTaxCalculatorsTaxCalculatorId**](docs/Api/TaxCalculatorsApi.md#patchtaxcalculatorstaxcalculatorid) | **PATCH** /tax_calculators/{taxCalculatorId} | Update a tax calculator
*TaxCalculatorsApi* | [**pOSTTaxCalculators**](docs/Api/TaxCalculatorsApi.md#posttaxcalculators) | **POST** /tax_calculators | Create a tax calculator
*TaxCategoriesApi* | [**dELETETaxCategoriesTaxCategoryId**](docs/Api/TaxCategoriesApi.md#deletetaxcategoriestaxcategoryid) | **DELETE** /tax_categories/{taxCategoryId} | Delete a tax category
*TaxCategoriesApi* | [**gETTaxCategories**](docs/Api/TaxCategoriesApi.md#gettaxcategories) | **GET** /tax_categories | List all tax categories
*TaxCategoriesApi* | [**gETTaxCategoriesTaxCategoryId**](docs/Api/TaxCategoriesApi.md#gettaxcategoriestaxcategoryid) | **GET** /tax_categories/{taxCategoryId} | Retrieve a tax category
*TaxCategoriesApi* | [**pATCHTaxCategoriesTaxCategoryId**](docs/Api/TaxCategoriesApi.md#patchtaxcategoriestaxcategoryid) | **PATCH** /tax_categories/{taxCategoryId} | Update a tax category
*TaxCategoriesApi* | [**pOSTTaxCategories**](docs/Api/TaxCategoriesApi.md#posttaxcategories) | **POST** /tax_categories | Create a tax category
*TaxRulesApi* | [**dELETETaxRulesTaxRuleId**](docs/Api/TaxRulesApi.md#deletetaxrulestaxruleid) | **DELETE** /tax_rules/{taxRuleId} | Delete a tax rule
*TaxRulesApi* | [**gETTaxRules**](docs/Api/TaxRulesApi.md#gettaxrules) | **GET** /tax_rules | List all tax rules
*TaxRulesApi* | [**gETTaxRulesTaxRuleId**](docs/Api/TaxRulesApi.md#gettaxrulestaxruleid) | **GET** /tax_rules/{taxRuleId} | Retrieve a tax rule
*TaxRulesApi* | [**pATCHTaxRulesTaxRuleId**](docs/Api/TaxRulesApi.md#patchtaxrulestaxruleid) | **PATCH** /tax_rules/{taxRuleId} | Update a tax rule
*TaxRulesApi* | [**pOSTTaxRules**](docs/Api/TaxRulesApi.md#posttaxrules) | **POST** /tax_rules | Create a tax rule
*TaxjarAccountsApi* | [**dELETETaxjarAccountsTaxjarAccountId**](docs/Api/TaxjarAccountsApi.md#deletetaxjaraccountstaxjaraccountid) | **DELETE** /taxjar_accounts/{taxjarAccountId} | Delete a taxjar account
*TaxjarAccountsApi* | [**gETTaxjarAccounts**](docs/Api/TaxjarAccountsApi.md#gettaxjaraccounts) | **GET** /taxjar_accounts | List all taxjar accounts
*TaxjarAccountsApi* | [**gETTaxjarAccountsTaxjarAccountId**](docs/Api/TaxjarAccountsApi.md#gettaxjaraccountstaxjaraccountid) | **GET** /taxjar_accounts/{taxjarAccountId} | Retrieve a taxjar account
*TaxjarAccountsApi* | [**pATCHTaxjarAccountsTaxjarAccountId**](docs/Api/TaxjarAccountsApi.md#patchtaxjaraccountstaxjaraccountid) | **PATCH** /taxjar_accounts/{taxjarAccountId} | Update a taxjar account
*TaxjarAccountsApi* | [**pOSTTaxjarAccounts**](docs/Api/TaxjarAccountsApi.md#posttaxjaraccounts) | **POST** /taxjar_accounts | Create a taxjar account
*TransactionsApi* | [**dELETETransactionsTransactionId**](docs/Api/TransactionsApi.md#deletetransactionstransactionid) | **DELETE** /transactions/{transactionId} | Delete a transaction
*TransactionsApi* | [**gETTransactions**](docs/Api/TransactionsApi.md#gettransactions) | **GET** /transactions | List all transactions
*TransactionsApi* | [**gETTransactionsTransactionId**](docs/Api/TransactionsApi.md#gettransactionstransactionid) | **GET** /transactions/{transactionId} | Retrieve a transaction
*TransactionsApi* | [**pATCHTransactionsTransactionId**](docs/Api/TransactionsApi.md#patchtransactionstransactionid) | **PATCH** /transactions/{transactionId} | Update a transaction
*TransactionsApi* | [**pOSTTransactions**](docs/Api/TransactionsApi.md#posttransactions) | **POST** /transactions | Create a transaction
*VoidsApi* | [**dELETEVoidsVoidId**](docs/Api/VoidsApi.md#deletevoidsvoidid) | **DELETE** /voids/{voidId} | Delete a void
*VoidsApi* | [**gETVoids**](docs/Api/VoidsApi.md#getvoids) | **GET** /voids | List all voids
*VoidsApi* | [**gETVoidsVoidId**](docs/Api/VoidsApi.md#getvoidsvoidid) | **GET** /voids/{voidId} | Retrieve a void
*VoidsApi* | [**pATCHVoidsVoidId**](docs/Api/VoidsApi.md#patchvoidsvoidid) | **PATCH** /voids/{voidId} | Update a void
*VoidsApi* | [**pOSTVoids**](docs/Api/VoidsApi.md#postvoids) | **POST** /voids | Create a void
*WebhooksApi* | [**dELETEWebhooksWebhookId**](docs/Api/WebhooksApi.md#deletewebhookswebhookid) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**gETWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | List all webhooks
*WebhooksApi* | [**gETWebhooksWebhookId**](docs/Api/WebhooksApi.md#getwebhookswebhookid) | **GET** /webhooks/{webhookId} | Retrieve a webhook
*WebhooksApi* | [**pATCHWebhooksWebhookId**](docs/Api/WebhooksApi.md#patchwebhookswebhookid) | **PATCH** /webhooks/{webhookId} | Update a webhook
*WebhooksApi* | [**pOSTWebhooks**](docs/Api/WebhooksApi.md#postwebhooks) | **POST** /webhooks | Create a webhook
*WireTransfersApi* | [**dELETEWireTransfersWireTransferId**](docs/Api/WireTransfersApi.md#deletewiretransferswiretransferid) | **DELETE** /wire_transfers/{wireTransferId} | Delete a wire transfer
*WireTransfersApi* | [**gETWireTransfers**](docs/Api/WireTransfersApi.md#getwiretransfers) | **GET** /wire_transfers | List all wire transfers
*WireTransfersApi* | [**gETWireTransfersWireTransferId**](docs/Api/WireTransfersApi.md#getwiretransferswiretransferid) | **GET** /wire_transfers/{wireTransferId} | Retrieve a wire transfer
*WireTransfersApi* | [**pATCHWireTransfersWireTransferId**](docs/Api/WireTransfersApi.md#patchwiretransferswiretransferid) | **PATCH** /wire_transfers/{wireTransferId} | Update a wire transfer
*WireTransfersApi* | [**pOSTWireTransfers**](docs/Api/WireTransfersApi.md#postwiretransfers) | **POST** /wire_transfers | Create a wire transfer

## Models

- [Address](docs/Model/Address.md)
- [AddressCreate](docs/Model/AddressCreate.md)
- [AddressCreateData](docs/Model/AddressCreateData.md)
- [AddressCreateDataAttributes](docs/Model/AddressCreateDataAttributes.md)
- [AddressData](docs/Model/AddressData.md)
- [AddressDataAttributes](docs/Model/AddressDataAttributes.md)
- [AddressDataRelationships](docs/Model/AddressDataRelationships.md)
- [AddressDataRelationshipsGeocoder](docs/Model/AddressDataRelationshipsGeocoder.md)
- [AddressUpdate](docs/Model/AddressUpdate.md)
- [AddressUpdateData](docs/Model/AddressUpdateData.md)
- [AddressUpdateDataAttributes](docs/Model/AddressUpdateDataAttributes.md)
- [Adjustment](docs/Model/Adjustment.md)
- [AdjustmentCreate](docs/Model/AdjustmentCreate.md)
- [AdjustmentCreateData](docs/Model/AdjustmentCreateData.md)
- [AdjustmentCreateDataAttributes](docs/Model/AdjustmentCreateDataAttributes.md)
- [AdjustmentData](docs/Model/AdjustmentData.md)
- [AdjustmentDataAttributes](docs/Model/AdjustmentDataAttributes.md)
- [AdjustmentUpdate](docs/Model/AdjustmentUpdate.md)
- [AdjustmentUpdateData](docs/Model/AdjustmentUpdateData.md)
- [AdjustmentUpdateDataAttributes](docs/Model/AdjustmentUpdateDataAttributes.md)
- [AdyenGateway](docs/Model/AdyenGateway.md)
- [AdyenGatewayCreate](docs/Model/AdyenGatewayCreate.md)
- [AdyenGatewayCreateData](docs/Model/AdyenGatewayCreateData.md)
- [AdyenGatewayCreateDataAttributes](docs/Model/AdyenGatewayCreateDataAttributes.md)
- [AdyenGatewayCreateDataRelationships](docs/Model/AdyenGatewayCreateDataRelationships.md)
- [AdyenGatewayData](docs/Model/AdyenGatewayData.md)
- [AdyenGatewayDataAttributes](docs/Model/AdyenGatewayDataAttributes.md)
- [AdyenGatewayDataRelationships](docs/Model/AdyenGatewayDataRelationships.md)
- [AdyenGatewayDataRelationshipsAdyenPayments](docs/Model/AdyenGatewayDataRelationshipsAdyenPayments.md)
- [AdyenGatewayDataRelationshipsPaymentMethods](docs/Model/AdyenGatewayDataRelationshipsPaymentMethods.md)
- [AdyenGatewayUpdate](docs/Model/AdyenGatewayUpdate.md)
- [AdyenGatewayUpdateData](docs/Model/AdyenGatewayUpdateData.md)
- [AdyenGatewayUpdateDataAttributes](docs/Model/AdyenGatewayUpdateDataAttributes.md)
- [AdyenPayment](docs/Model/AdyenPayment.md)
- [AdyenPaymentCreate](docs/Model/AdyenPaymentCreate.md)
- [AdyenPaymentCreateData](docs/Model/AdyenPaymentCreateData.md)
- [AdyenPaymentCreateDataAttributes](docs/Model/AdyenPaymentCreateDataAttributes.md)
- [AdyenPaymentCreateDataRelationships](docs/Model/AdyenPaymentCreateDataRelationships.md)
- [AdyenPaymentData](docs/Model/AdyenPaymentData.md)
- [AdyenPaymentDataAttributes](docs/Model/AdyenPaymentDataAttributes.md)
- [AdyenPaymentDataRelationships](docs/Model/AdyenPaymentDataRelationships.md)
- [AdyenPaymentDataRelationshipsOrder](docs/Model/AdyenPaymentDataRelationshipsOrder.md)
- [AdyenPaymentDataRelationshipsPaymentGateway](docs/Model/AdyenPaymentDataRelationshipsPaymentGateway.md)
- [AdyenPaymentUpdate](docs/Model/AdyenPaymentUpdate.md)
- [AdyenPaymentUpdateData](docs/Model/AdyenPaymentUpdateData.md)
- [AdyenPaymentUpdateDataAttributes](docs/Model/AdyenPaymentUpdateDataAttributes.md)
- [AdyenPaymentUpdateDataRelationships](docs/Model/AdyenPaymentUpdateDataRelationships.md)
- [Application](docs/Model/Application.md)
- [ApplicationCreate](docs/Model/ApplicationCreate.md)
- [ApplicationCreateData](docs/Model/ApplicationCreateData.md)
- [ApplicationCreateDataAttributes](docs/Model/ApplicationCreateDataAttributes.md)
- [ApplicationData](docs/Model/ApplicationData.md)
- [ApplicationDataAttributes](docs/Model/ApplicationDataAttributes.md)
- [ApplicationUpdate](docs/Model/ApplicationUpdate.md)
- [ApplicationUpdateData](docs/Model/ApplicationUpdateData.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentCreate](docs/Model/AttachmentCreate.md)
- [AttachmentCreateData](docs/Model/AttachmentCreateData.md)
- [AttachmentCreateDataAttributes](docs/Model/AttachmentCreateDataAttributes.md)
- [AttachmentCreateDataRelationships](docs/Model/AttachmentCreateDataRelationships.md)
- [AttachmentData](docs/Model/AttachmentData.md)
- [AttachmentDataAttributes](docs/Model/AttachmentDataAttributes.md)
- [AttachmentDataRelationships](docs/Model/AttachmentDataRelationships.md)
- [AttachmentDataRelationshipsAttachable](docs/Model/AttachmentDataRelationshipsAttachable.md)
- [AttachmentUpdate](docs/Model/AttachmentUpdate.md)
- [AttachmentUpdateData](docs/Model/AttachmentUpdateData.md)
- [AttachmentUpdateDataAttributes](docs/Model/AttachmentUpdateDataAttributes.md)
- [Authorization](docs/Model/Authorization.md)
- [AuthorizationCreate](docs/Model/AuthorizationCreate.md)
- [AuthorizationCreateData](docs/Model/AuthorizationCreateData.md)
- [AuthorizationData](docs/Model/AuthorizationData.md)
- [AuthorizationDataAttributes](docs/Model/AuthorizationDataAttributes.md)
- [AuthorizationDataRelationships](docs/Model/AuthorizationDataRelationships.md)
- [AuthorizationDataRelationshipsCaptures](docs/Model/AuthorizationDataRelationshipsCaptures.md)
- [AuthorizationDataRelationshipsVoids](docs/Model/AuthorizationDataRelationshipsVoids.md)
- [AuthorizationUpdate](docs/Model/AuthorizationUpdate.md)
- [AuthorizationUpdateData](docs/Model/AuthorizationUpdateData.md)
- [AuthorizationUpdateDataAttributes](docs/Model/AuthorizationUpdateDataAttributes.md)
- [AvalaraAccount](docs/Model/AvalaraAccount.md)
- [AvalaraAccountCreate](docs/Model/AvalaraAccountCreate.md)
- [AvalaraAccountCreateData](docs/Model/AvalaraAccountCreateData.md)
- [AvalaraAccountCreateDataAttributes](docs/Model/AvalaraAccountCreateDataAttributes.md)
- [AvalaraAccountCreateDataRelationships](docs/Model/AvalaraAccountCreateDataRelationships.md)
- [AvalaraAccountData](docs/Model/AvalaraAccountData.md)
- [AvalaraAccountDataAttributes](docs/Model/AvalaraAccountDataAttributes.md)
- [AvalaraAccountDataRelationships](docs/Model/AvalaraAccountDataRelationships.md)
- [AvalaraAccountDataRelationshipsAttachments](docs/Model/AvalaraAccountDataRelationshipsAttachments.md)
- [AvalaraAccountDataRelationshipsTaxCategories](docs/Model/AvalaraAccountDataRelationshipsTaxCategories.md)
- [AvalaraAccountUpdate](docs/Model/AvalaraAccountUpdate.md)
- [AvalaraAccountUpdateData](docs/Model/AvalaraAccountUpdateData.md)
- [AvalaraAccountUpdateDataAttributes](docs/Model/AvalaraAccountUpdateDataAttributes.md)
- [BillingInfoValidationRule](docs/Model/BillingInfoValidationRule.md)
- [BillingInfoValidationRuleCreate](docs/Model/BillingInfoValidationRuleCreate.md)
- [BillingInfoValidationRuleCreateData](docs/Model/BillingInfoValidationRuleCreateData.md)
- [BillingInfoValidationRuleCreateDataRelationships](docs/Model/BillingInfoValidationRuleCreateDataRelationships.md)
- [BillingInfoValidationRuleData](docs/Model/BillingInfoValidationRuleData.md)
- [BillingInfoValidationRuleDataAttributes](docs/Model/BillingInfoValidationRuleDataAttributes.md)
- [BillingInfoValidationRuleDataRelationships](docs/Model/BillingInfoValidationRuleDataRelationships.md)
- [BillingInfoValidationRuleDataRelationshipsMarket](docs/Model/BillingInfoValidationRuleDataRelationshipsMarket.md)
- [BillingInfoValidationRuleUpdate](docs/Model/BillingInfoValidationRuleUpdate.md)
- [BillingInfoValidationRuleUpdateData](docs/Model/BillingInfoValidationRuleUpdateData.md)
- [BraintreeGateway](docs/Model/BraintreeGateway.md)
- [BraintreeGatewayCreate](docs/Model/BraintreeGatewayCreate.md)
- [BraintreeGatewayCreateData](docs/Model/BraintreeGatewayCreateData.md)
- [BraintreeGatewayCreateDataAttributes](docs/Model/BraintreeGatewayCreateDataAttributes.md)
- [BraintreeGatewayCreateDataRelationships](docs/Model/BraintreeGatewayCreateDataRelationships.md)
- [BraintreeGatewayData](docs/Model/BraintreeGatewayData.md)
- [BraintreeGatewayDataAttributes](docs/Model/BraintreeGatewayDataAttributes.md)
- [BraintreeGatewayDataRelationships](docs/Model/BraintreeGatewayDataRelationships.md)
- [BraintreeGatewayDataRelationshipsBraintreePayments](docs/Model/BraintreeGatewayDataRelationshipsBraintreePayments.md)
- [BraintreeGatewayUpdate](docs/Model/BraintreeGatewayUpdate.md)
- [BraintreeGatewayUpdateData](docs/Model/BraintreeGatewayUpdateData.md)
- [BraintreeGatewayUpdateDataAttributes](docs/Model/BraintreeGatewayUpdateDataAttributes.md)
- [BraintreePayment](docs/Model/BraintreePayment.md)
- [BraintreePaymentCreate](docs/Model/BraintreePaymentCreate.md)
- [BraintreePaymentCreateData](docs/Model/BraintreePaymentCreateData.md)
- [BraintreePaymentCreateDataAttributes](docs/Model/BraintreePaymentCreateDataAttributes.md)
- [BraintreePaymentData](docs/Model/BraintreePaymentData.md)
- [BraintreePaymentDataAttributes](docs/Model/BraintreePaymentDataAttributes.md)
- [BraintreePaymentUpdate](docs/Model/BraintreePaymentUpdate.md)
- [BraintreePaymentUpdateData](docs/Model/BraintreePaymentUpdateData.md)
- [BraintreePaymentUpdateDataAttributes](docs/Model/BraintreePaymentUpdateDataAttributes.md)
- [Capture](docs/Model/Capture.md)
- [CaptureCreate](docs/Model/CaptureCreate.md)
- [CaptureCreateData](docs/Model/CaptureCreateData.md)
- [CaptureData](docs/Model/CaptureData.md)
- [CaptureDataAttributes](docs/Model/CaptureDataAttributes.md)
- [CaptureDataRelationships](docs/Model/CaptureDataRelationships.md)
- [CaptureDataRelationshipsReferenceAuthorization](docs/Model/CaptureDataRelationshipsReferenceAuthorization.md)
- [CaptureDataRelationshipsRefunds](docs/Model/CaptureDataRelationshipsRefunds.md)
- [CaptureUpdate](docs/Model/CaptureUpdate.md)
- [CaptureUpdateData](docs/Model/CaptureUpdateData.md)
- [CaptureUpdateDataAttributes](docs/Model/CaptureUpdateDataAttributes.md)
- [CarrierAccount](docs/Model/CarrierAccount.md)
- [CarrierAccountCreate](docs/Model/CarrierAccountCreate.md)
- [CarrierAccountCreateData](docs/Model/CarrierAccountCreateData.md)
- [CarrierAccountData](docs/Model/CarrierAccountData.md)
- [CarrierAccountDataAttributes](docs/Model/CarrierAccountDataAttributes.md)
- [CarrierAccountDataRelationships](docs/Model/CarrierAccountDataRelationships.md)
- [CarrierAccountUpdate](docs/Model/CarrierAccountUpdate.md)
- [CarrierAccountUpdateData](docs/Model/CarrierAccountUpdateData.md)
- [CheckoutComGateway](docs/Model/CheckoutComGateway.md)
- [CheckoutComGatewayCreate](docs/Model/CheckoutComGatewayCreate.md)
- [CheckoutComGatewayCreateData](docs/Model/CheckoutComGatewayCreateData.md)
- [CheckoutComGatewayCreateDataAttributes](docs/Model/CheckoutComGatewayCreateDataAttributes.md)
- [CheckoutComGatewayCreateDataRelationships](docs/Model/CheckoutComGatewayCreateDataRelationships.md)
- [CheckoutComGatewayData](docs/Model/CheckoutComGatewayData.md)
- [CheckoutComGatewayDataAttributes](docs/Model/CheckoutComGatewayDataAttributes.md)
- [CheckoutComGatewayDataRelationships](docs/Model/CheckoutComGatewayDataRelationships.md)
- [CheckoutComGatewayDataRelationshipsCheckoutComPayments](docs/Model/CheckoutComGatewayDataRelationshipsCheckoutComPayments.md)
- [CheckoutComGatewayUpdate](docs/Model/CheckoutComGatewayUpdate.md)
- [CheckoutComGatewayUpdateData](docs/Model/CheckoutComGatewayUpdateData.md)
- [CheckoutComGatewayUpdateDataAttributes](docs/Model/CheckoutComGatewayUpdateDataAttributes.md)
- [CheckoutComPayment](docs/Model/CheckoutComPayment.md)
- [CheckoutComPaymentCreate](docs/Model/CheckoutComPaymentCreate.md)
- [CheckoutComPaymentCreateData](docs/Model/CheckoutComPaymentCreateData.md)
- [CheckoutComPaymentCreateDataAttributes](docs/Model/CheckoutComPaymentCreateDataAttributes.md)
- [CheckoutComPaymentData](docs/Model/CheckoutComPaymentData.md)
- [CheckoutComPaymentDataAttributes](docs/Model/CheckoutComPaymentDataAttributes.md)
- [CheckoutComPaymentUpdate](docs/Model/CheckoutComPaymentUpdate.md)
- [CheckoutComPaymentUpdateData](docs/Model/CheckoutComPaymentUpdateData.md)
- [CheckoutComPaymentUpdateDataAttributes](docs/Model/CheckoutComPaymentUpdateDataAttributes.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponCodesPromotionRule](docs/Model/CouponCodesPromotionRule.md)
- [CouponCodesPromotionRuleCreate](docs/Model/CouponCodesPromotionRuleCreate.md)
- [CouponCodesPromotionRuleCreateData](docs/Model/CouponCodesPromotionRuleCreateData.md)
- [CouponCodesPromotionRuleCreateDataRelationships](docs/Model/CouponCodesPromotionRuleCreateDataRelationships.md)
- [CouponCodesPromotionRuleData](docs/Model/CouponCodesPromotionRuleData.md)
- [CouponCodesPromotionRuleDataRelationships](docs/Model/CouponCodesPromotionRuleDataRelationships.md)
- [CouponCodesPromotionRuleDataRelationshipsCoupons](docs/Model/CouponCodesPromotionRuleDataRelationshipsCoupons.md)
- [CouponCodesPromotionRuleDataRelationshipsPromotion](docs/Model/CouponCodesPromotionRuleDataRelationshipsPromotion.md)
- [CouponCodesPromotionRuleUpdate](docs/Model/CouponCodesPromotionRuleUpdate.md)
- [CouponCodesPromotionRuleUpdateData](docs/Model/CouponCodesPromotionRuleUpdateData.md)
- [CouponCreate](docs/Model/CouponCreate.md)
- [CouponCreateData](docs/Model/CouponCreateData.md)
- [CouponCreateDataAttributes](docs/Model/CouponCreateDataAttributes.md)
- [CouponCreateDataRelationships](docs/Model/CouponCreateDataRelationships.md)
- [CouponData](docs/Model/CouponData.md)
- [CouponDataAttributes](docs/Model/CouponDataAttributes.md)
- [CouponDataRelationships](docs/Model/CouponDataRelationships.md)
- [CouponDataRelationshipsPromotionRule](docs/Model/CouponDataRelationshipsPromotionRule.md)
- [CouponUpdate](docs/Model/CouponUpdate.md)
- [CouponUpdateData](docs/Model/CouponUpdateData.md)
- [CouponUpdateDataAttributes](docs/Model/CouponUpdateDataAttributes.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerAddressCreate](docs/Model/CustomerAddressCreate.md)
- [CustomerAddressCreateData](docs/Model/CustomerAddressCreateData.md)
- [CustomerAddressCreateDataRelationships](docs/Model/CustomerAddressCreateDataRelationships.md)
- [CustomerAddressData](docs/Model/CustomerAddressData.md)
- [CustomerAddressDataAttributes](docs/Model/CustomerAddressDataAttributes.md)
- [CustomerAddressDataRelationships](docs/Model/CustomerAddressDataRelationships.md)
- [CustomerAddressDataRelationshipsAddress](docs/Model/CustomerAddressDataRelationshipsAddress.md)
- [CustomerAddressDataRelationshipsCustomer](docs/Model/CustomerAddressDataRelationshipsCustomer.md)
- [CustomerAddressUpdate](docs/Model/CustomerAddressUpdate.md)
- [CustomerAddressUpdateData](docs/Model/CustomerAddressUpdateData.md)
- [CustomerCreate](docs/Model/CustomerCreate.md)
- [CustomerCreateData](docs/Model/CustomerCreateData.md)
- [CustomerCreateDataAttributes](docs/Model/CustomerCreateDataAttributes.md)
- [CustomerCreateDataRelationships](docs/Model/CustomerCreateDataRelationships.md)
- [CustomerData](docs/Model/CustomerData.md)
- [CustomerDataAttributes](docs/Model/CustomerDataAttributes.md)
- [CustomerDataRelationships](docs/Model/CustomerDataRelationships.md)
- [CustomerDataRelationshipsCustomerAddresses](docs/Model/CustomerDataRelationshipsCustomerAddresses.md)
- [CustomerDataRelationshipsCustomerGroup](docs/Model/CustomerDataRelationshipsCustomerGroup.md)
- [CustomerDataRelationshipsCustomerPaymentSources](docs/Model/CustomerDataRelationshipsCustomerPaymentSources.md)
- [CustomerDataRelationshipsCustomerSubscriptions](docs/Model/CustomerDataRelationshipsCustomerSubscriptions.md)
- [CustomerDataRelationshipsReturns](docs/Model/CustomerDataRelationshipsReturns.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerGroupCreate](docs/Model/CustomerGroupCreate.md)
- [CustomerGroupCreateData](docs/Model/CustomerGroupCreateData.md)
- [CustomerGroupCreateDataAttributes](docs/Model/CustomerGroupCreateDataAttributes.md)
- [CustomerGroupData](docs/Model/CustomerGroupData.md)
- [CustomerGroupDataAttributes](docs/Model/CustomerGroupDataAttributes.md)
- [CustomerGroupDataRelationships](docs/Model/CustomerGroupDataRelationships.md)
- [CustomerGroupUpdate](docs/Model/CustomerGroupUpdate.md)
- [CustomerGroupUpdateData](docs/Model/CustomerGroupUpdateData.md)
- [CustomerGroupUpdateDataAttributes](docs/Model/CustomerGroupUpdateDataAttributes.md)
- [CustomerPasswordReset](docs/Model/CustomerPasswordReset.md)
- [CustomerPasswordResetCreate](docs/Model/CustomerPasswordResetCreate.md)
- [CustomerPasswordResetCreateData](docs/Model/CustomerPasswordResetCreateData.md)
- [CustomerPasswordResetCreateDataAttributes](docs/Model/CustomerPasswordResetCreateDataAttributes.md)
- [CustomerPasswordResetData](docs/Model/CustomerPasswordResetData.md)
- [CustomerPasswordResetDataAttributes](docs/Model/CustomerPasswordResetDataAttributes.md)
- [CustomerPasswordResetDataRelationships](docs/Model/CustomerPasswordResetDataRelationships.md)
- [CustomerPasswordResetUpdate](docs/Model/CustomerPasswordResetUpdate.md)
- [CustomerPasswordResetUpdateData](docs/Model/CustomerPasswordResetUpdateData.md)
- [CustomerPasswordResetUpdateDataAttributes](docs/Model/CustomerPasswordResetUpdateDataAttributes.md)
- [CustomerPaymentSource](docs/Model/CustomerPaymentSource.md)
- [CustomerPaymentSourceCreate](docs/Model/CustomerPaymentSourceCreate.md)
- [CustomerPaymentSourceCreateData](docs/Model/CustomerPaymentSourceCreateData.md)
- [CustomerPaymentSourceCreateDataRelationships](docs/Model/CustomerPaymentSourceCreateDataRelationships.md)
- [CustomerPaymentSourceData](docs/Model/CustomerPaymentSourceData.md)
- [CustomerPaymentSourceDataAttributes](docs/Model/CustomerPaymentSourceDataAttributes.md)
- [CustomerPaymentSourceDataRelationships](docs/Model/CustomerPaymentSourceDataRelationships.md)
- [CustomerPaymentSourceDataRelationshipsPaymentSource](docs/Model/CustomerPaymentSourceDataRelationshipsPaymentSource.md)
- [CustomerPaymentSourceUpdate](docs/Model/CustomerPaymentSourceUpdate.md)
- [CustomerPaymentSourceUpdateData](docs/Model/CustomerPaymentSourceUpdateData.md)
- [CustomerSubscription](docs/Model/CustomerSubscription.md)
- [CustomerSubscriptionCreate](docs/Model/CustomerSubscriptionCreate.md)
- [CustomerSubscriptionCreateData](docs/Model/CustomerSubscriptionCreateData.md)
- [CustomerSubscriptionCreateDataAttributes](docs/Model/CustomerSubscriptionCreateDataAttributes.md)
- [CustomerSubscriptionData](docs/Model/CustomerSubscriptionData.md)
- [CustomerSubscriptionDataAttributes](docs/Model/CustomerSubscriptionDataAttributes.md)
- [CustomerSubscriptionUpdate](docs/Model/CustomerSubscriptionUpdate.md)
- [CustomerSubscriptionUpdateData](docs/Model/CustomerSubscriptionUpdateData.md)
- [CustomerUpdate](docs/Model/CustomerUpdate.md)
- [CustomerUpdateData](docs/Model/CustomerUpdateData.md)
- [CustomerUpdateDataAttributes](docs/Model/CustomerUpdateDataAttributes.md)
- [DeliveryLeadTime](docs/Model/DeliveryLeadTime.md)
- [DeliveryLeadTimeCreate](docs/Model/DeliveryLeadTimeCreate.md)
- [DeliveryLeadTimeCreateData](docs/Model/DeliveryLeadTimeCreateData.md)
- [DeliveryLeadTimeCreateDataAttributes](docs/Model/DeliveryLeadTimeCreateDataAttributes.md)
- [DeliveryLeadTimeCreateDataRelationships](docs/Model/DeliveryLeadTimeCreateDataRelationships.md)
- [DeliveryLeadTimeData](docs/Model/DeliveryLeadTimeData.md)
- [DeliveryLeadTimeDataAttributes](docs/Model/DeliveryLeadTimeDataAttributes.md)
- [DeliveryLeadTimeDataRelationships](docs/Model/DeliveryLeadTimeDataRelationships.md)
- [DeliveryLeadTimeDataRelationshipsShippingMethod](docs/Model/DeliveryLeadTimeDataRelationshipsShippingMethod.md)
- [DeliveryLeadTimeDataRelationshipsStockLocation](docs/Model/DeliveryLeadTimeDataRelationshipsStockLocation.md)
- [DeliveryLeadTimeUpdate](docs/Model/DeliveryLeadTimeUpdate.md)
- [DeliveryLeadTimeUpdateData](docs/Model/DeliveryLeadTimeUpdateData.md)
- [DeliveryLeadTimeUpdateDataAttributes](docs/Model/DeliveryLeadTimeUpdateDataAttributes.md)
- [DeliveryLeadTimeUpdateDataRelationships](docs/Model/DeliveryLeadTimeUpdateDataRelationships.md)
- [ExternalGateway](docs/Model/ExternalGateway.md)
- [ExternalGatewayCreate](docs/Model/ExternalGatewayCreate.md)
- [ExternalGatewayCreateData](docs/Model/ExternalGatewayCreateData.md)
- [ExternalGatewayCreateDataAttributes](docs/Model/ExternalGatewayCreateDataAttributes.md)
- [ExternalGatewayData](docs/Model/ExternalGatewayData.md)
- [ExternalGatewayDataAttributes](docs/Model/ExternalGatewayDataAttributes.md)
- [ExternalGatewayDataRelationships](docs/Model/ExternalGatewayDataRelationships.md)
- [ExternalGatewayDataRelationshipsExternalPayments](docs/Model/ExternalGatewayDataRelationshipsExternalPayments.md)
- [ExternalGatewayUpdate](docs/Model/ExternalGatewayUpdate.md)
- [ExternalGatewayUpdateData](docs/Model/ExternalGatewayUpdateData.md)
- [ExternalGatewayUpdateDataAttributes](docs/Model/ExternalGatewayUpdateDataAttributes.md)
- [ExternalPayment](docs/Model/ExternalPayment.md)
- [ExternalPaymentCreate](docs/Model/ExternalPaymentCreate.md)
- [ExternalPaymentCreateData](docs/Model/ExternalPaymentCreateData.md)
- [ExternalPaymentCreateDataAttributes](docs/Model/ExternalPaymentCreateDataAttributes.md)
- [ExternalPaymentData](docs/Model/ExternalPaymentData.md)
- [ExternalPaymentDataAttributes](docs/Model/ExternalPaymentDataAttributes.md)
- [ExternalPaymentUpdate](docs/Model/ExternalPaymentUpdate.md)
- [ExternalPaymentUpdateData](docs/Model/ExternalPaymentUpdateData.md)
- [ExternalPaymentUpdateDataAttributes](docs/Model/ExternalPaymentUpdateDataAttributes.md)
- [ExternalPromotion](docs/Model/ExternalPromotion.md)
- [ExternalPromotionCreate](docs/Model/ExternalPromotionCreate.md)
- [ExternalPromotionCreateData](docs/Model/ExternalPromotionCreateData.md)
- [ExternalPromotionCreateDataAttributes](docs/Model/ExternalPromotionCreateDataAttributes.md)
- [ExternalPromotionCreateDataRelationships](docs/Model/ExternalPromotionCreateDataRelationships.md)
- [ExternalPromotionData](docs/Model/ExternalPromotionData.md)
- [ExternalPromotionDataAttributes](docs/Model/ExternalPromotionDataAttributes.md)
- [ExternalPromotionDataRelationships](docs/Model/ExternalPromotionDataRelationships.md)
- [ExternalPromotionDataRelationshipsCouponCodesPromotionRule](docs/Model/ExternalPromotionDataRelationshipsCouponCodesPromotionRule.md)
- [ExternalPromotionDataRelationshipsOrderAmountPromotionRule](docs/Model/ExternalPromotionDataRelationshipsOrderAmountPromotionRule.md)
- [ExternalPromotionDataRelationshipsSkuListPromotionRule](docs/Model/ExternalPromotionDataRelationshipsSkuListPromotionRule.md)
- [ExternalPromotionUpdate](docs/Model/ExternalPromotionUpdate.md)
- [ExternalPromotionUpdateData](docs/Model/ExternalPromotionUpdateData.md)
- [ExternalPromotionUpdateDataAttributes](docs/Model/ExternalPromotionUpdateDataAttributes.md)
- [ExternalTaxCalculator](docs/Model/ExternalTaxCalculator.md)
- [ExternalTaxCalculatorCreate](docs/Model/ExternalTaxCalculatorCreate.md)
- [ExternalTaxCalculatorCreateData](docs/Model/ExternalTaxCalculatorCreateData.md)
- [ExternalTaxCalculatorCreateDataAttributes](docs/Model/ExternalTaxCalculatorCreateDataAttributes.md)
- [ExternalTaxCalculatorData](docs/Model/ExternalTaxCalculatorData.md)
- [ExternalTaxCalculatorDataAttributes](docs/Model/ExternalTaxCalculatorDataAttributes.md)
- [ExternalTaxCalculatorUpdate](docs/Model/ExternalTaxCalculatorUpdate.md)
- [ExternalTaxCalculatorUpdateData](docs/Model/ExternalTaxCalculatorUpdateData.md)
- [ExternalTaxCalculatorUpdateDataAttributes](docs/Model/ExternalTaxCalculatorUpdateDataAttributes.md)
- [FixedAmountPromotion](docs/Model/FixedAmountPromotion.md)
- [FixedAmountPromotionCreate](docs/Model/FixedAmountPromotionCreate.md)
- [FixedAmountPromotionCreateData](docs/Model/FixedAmountPromotionCreateData.md)
- [FixedAmountPromotionCreateDataAttributes](docs/Model/FixedAmountPromotionCreateDataAttributes.md)
- [FixedAmountPromotionData](docs/Model/FixedAmountPromotionData.md)
- [FixedAmountPromotionDataAttributes](docs/Model/FixedAmountPromotionDataAttributes.md)
- [FixedAmountPromotionUpdate](docs/Model/FixedAmountPromotionUpdate.md)
- [FixedAmountPromotionUpdateData](docs/Model/FixedAmountPromotionUpdateData.md)
- [FixedAmountPromotionUpdateDataAttributes](docs/Model/FixedAmountPromotionUpdateDataAttributes.md)
- [FreeShippingPromotion](docs/Model/FreeShippingPromotion.md)
- [FreeShippingPromotionCreate](docs/Model/FreeShippingPromotionCreate.md)
- [FreeShippingPromotionCreateData](docs/Model/FreeShippingPromotionCreateData.md)
- [FreeShippingPromotionCreateDataAttributes](docs/Model/FreeShippingPromotionCreateDataAttributes.md)
- [FreeShippingPromotionData](docs/Model/FreeShippingPromotionData.md)
- [FreeShippingPromotionDataAttributes](docs/Model/FreeShippingPromotionDataAttributes.md)
- [FreeShippingPromotionUpdate](docs/Model/FreeShippingPromotionUpdate.md)
- [FreeShippingPromotionUpdateData](docs/Model/FreeShippingPromotionUpdateData.md)
- [FreeShippingPromotionUpdateDataAttributes](docs/Model/FreeShippingPromotionUpdateDataAttributes.md)
- [GiftCard](docs/Model/GiftCard.md)
- [GiftCardCreate](docs/Model/GiftCardCreate.md)
- [GiftCardCreateData](docs/Model/GiftCardCreateData.md)
- [GiftCardCreateDataAttributes](docs/Model/GiftCardCreateDataAttributes.md)
- [GiftCardCreateDataRelationships](docs/Model/GiftCardCreateDataRelationships.md)
- [GiftCardData](docs/Model/GiftCardData.md)
- [GiftCardDataAttributes](docs/Model/GiftCardDataAttributes.md)
- [GiftCardDataRelationships](docs/Model/GiftCardDataRelationships.md)
- [GiftCardDataRelationshipsGiftCardRecipient](docs/Model/GiftCardDataRelationshipsGiftCardRecipient.md)
- [GiftCardRecipient](docs/Model/GiftCardRecipient.md)
- [GiftCardRecipientCreate](docs/Model/GiftCardRecipientCreate.md)
- [GiftCardRecipientCreateData](docs/Model/GiftCardRecipientCreateData.md)
- [GiftCardRecipientCreateDataAttributes](docs/Model/GiftCardRecipientCreateDataAttributes.md)
- [GiftCardRecipientData](docs/Model/GiftCardRecipientData.md)
- [GiftCardRecipientDataAttributes](docs/Model/GiftCardRecipientDataAttributes.md)
- [GiftCardRecipientDataRelationships](docs/Model/GiftCardRecipientDataRelationships.md)
- [GiftCardRecipientUpdate](docs/Model/GiftCardRecipientUpdate.md)
- [GiftCardRecipientUpdateData](docs/Model/GiftCardRecipientUpdateData.md)
- [GiftCardRecipientUpdateDataAttributes](docs/Model/GiftCardRecipientUpdateDataAttributes.md)
- [GiftCardUpdate](docs/Model/GiftCardUpdate.md)
- [GiftCardUpdateData](docs/Model/GiftCardUpdateData.md)
- [GiftCardUpdateDataAttributes](docs/Model/GiftCardUpdateDataAttributes.md)
- [Import](docs/Model/Import.md)
- [ImportCreate](docs/Model/ImportCreate.md)
- [ImportCreateData](docs/Model/ImportCreateData.md)
- [ImportCreateDataAttributes](docs/Model/ImportCreateDataAttributes.md)
- [ImportData](docs/Model/ImportData.md)
- [ImportDataAttributes](docs/Model/ImportDataAttributes.md)
- [ImportUpdate](docs/Model/ImportUpdate.md)
- [ImportUpdateData](docs/Model/ImportUpdateData.md)
- [InStockSubscription](docs/Model/InStockSubscription.md)
- [InStockSubscriptionCreate](docs/Model/InStockSubscriptionCreate.md)
- [InStockSubscriptionCreateData](docs/Model/InStockSubscriptionCreateData.md)
- [InStockSubscriptionCreateDataAttributes](docs/Model/InStockSubscriptionCreateDataAttributes.md)
- [InStockSubscriptionCreateDataRelationships](docs/Model/InStockSubscriptionCreateDataRelationships.md)
- [InStockSubscriptionData](docs/Model/InStockSubscriptionData.md)
- [InStockSubscriptionDataAttributes](docs/Model/InStockSubscriptionDataAttributes.md)
- [InStockSubscriptionDataRelationships](docs/Model/InStockSubscriptionDataRelationships.md)
- [InStockSubscriptionDataRelationshipsSku](docs/Model/InStockSubscriptionDataRelationshipsSku.md)
- [InStockSubscriptionUpdate](docs/Model/InStockSubscriptionUpdate.md)
- [InStockSubscriptionUpdateData](docs/Model/InStockSubscriptionUpdateData.md)
- [InStockSubscriptionUpdateDataAttributes](docs/Model/InStockSubscriptionUpdateDataAttributes.md)
- [InventoryModel](docs/Model/InventoryModel.md)
- [InventoryModelCreate](docs/Model/InventoryModelCreate.md)
- [InventoryModelCreateData](docs/Model/InventoryModelCreateData.md)
- [InventoryModelCreateDataAttributes](docs/Model/InventoryModelCreateDataAttributes.md)
- [InventoryModelData](docs/Model/InventoryModelData.md)
- [InventoryModelDataAttributes](docs/Model/InventoryModelDataAttributes.md)
- [InventoryModelDataRelationships](docs/Model/InventoryModelDataRelationships.md)
- [InventoryModelDataRelationshipsInventoryReturnLocations](docs/Model/InventoryModelDataRelationshipsInventoryReturnLocations.md)
- [InventoryModelDataRelationshipsInventoryStockLocations](docs/Model/InventoryModelDataRelationshipsInventoryStockLocations.md)
- [InventoryModelUpdate](docs/Model/InventoryModelUpdate.md)
- [InventoryModelUpdateData](docs/Model/InventoryModelUpdateData.md)
- [InventoryModelUpdateDataAttributes](docs/Model/InventoryModelUpdateDataAttributes.md)
- [InventoryReturnLocation](docs/Model/InventoryReturnLocation.md)
- [InventoryReturnLocationCreate](docs/Model/InventoryReturnLocationCreate.md)
- [InventoryReturnLocationCreateData](docs/Model/InventoryReturnLocationCreateData.md)
- [InventoryReturnLocationCreateDataAttributes](docs/Model/InventoryReturnLocationCreateDataAttributes.md)
- [InventoryReturnLocationCreateDataRelationships](docs/Model/InventoryReturnLocationCreateDataRelationships.md)
- [InventoryReturnLocationData](docs/Model/InventoryReturnLocationData.md)
- [InventoryReturnLocationDataAttributes](docs/Model/InventoryReturnLocationDataAttributes.md)
- [InventoryReturnLocationDataRelationships](docs/Model/InventoryReturnLocationDataRelationships.md)
- [InventoryReturnLocationDataRelationshipsInventoryModel](docs/Model/InventoryReturnLocationDataRelationshipsInventoryModel.md)
- [InventoryReturnLocationUpdate](docs/Model/InventoryReturnLocationUpdate.md)
- [InventoryReturnLocationUpdateData](docs/Model/InventoryReturnLocationUpdateData.md)
- [InventoryReturnLocationUpdateDataAttributes](docs/Model/InventoryReturnLocationUpdateDataAttributes.md)
- [InventoryStockLocation](docs/Model/InventoryStockLocation.md)
- [InventoryStockLocationCreate](docs/Model/InventoryStockLocationCreate.md)
- [InventoryStockLocationCreateData](docs/Model/InventoryStockLocationCreateData.md)
- [InventoryStockLocationCreateDataAttributes](docs/Model/InventoryStockLocationCreateDataAttributes.md)
- [InventoryStockLocationData](docs/Model/InventoryStockLocationData.md)
- [InventoryStockLocationDataAttributes](docs/Model/InventoryStockLocationDataAttributes.md)
- [InventoryStockLocationUpdate](docs/Model/InventoryStockLocationUpdate.md)
- [InventoryStockLocationUpdateData](docs/Model/InventoryStockLocationUpdateData.md)
- [InventoryStockLocationUpdateDataAttributes](docs/Model/InventoryStockLocationUpdateDataAttributes.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemCreate](docs/Model/LineItemCreate.md)
- [LineItemCreateData](docs/Model/LineItemCreateData.md)
- [LineItemCreateDataAttributes](docs/Model/LineItemCreateDataAttributes.md)
- [LineItemCreateDataRelationships](docs/Model/LineItemCreateDataRelationships.md)
- [LineItemData](docs/Model/LineItemData.md)
- [LineItemDataAttributes](docs/Model/LineItemDataAttributes.md)
- [LineItemDataRelationships](docs/Model/LineItemDataRelationships.md)
- [LineItemDataRelationshipsItem](docs/Model/LineItemDataRelationshipsItem.md)
- [LineItemDataRelationshipsLineItemOptions](docs/Model/LineItemDataRelationshipsLineItemOptions.md)
- [LineItemDataRelationshipsShipmentLineItems](docs/Model/LineItemDataRelationshipsShipmentLineItems.md)
- [LineItemDataRelationshipsStockLineItems](docs/Model/LineItemDataRelationshipsStockLineItems.md)
- [LineItemDataRelationshipsStockTransfers](docs/Model/LineItemDataRelationshipsStockTransfers.md)
- [LineItemOption](docs/Model/LineItemOption.md)
- [LineItemOptionCreate](docs/Model/LineItemOptionCreate.md)
- [LineItemOptionCreateData](docs/Model/LineItemOptionCreateData.md)
- [LineItemOptionCreateDataAttributes](docs/Model/LineItemOptionCreateDataAttributes.md)
- [LineItemOptionCreateDataRelationships](docs/Model/LineItemOptionCreateDataRelationships.md)
- [LineItemOptionData](docs/Model/LineItemOptionData.md)
- [LineItemOptionDataAttributes](docs/Model/LineItemOptionDataAttributes.md)
- [LineItemOptionDataRelationships](docs/Model/LineItemOptionDataRelationships.md)
- [LineItemOptionDataRelationshipsLineItem](docs/Model/LineItemOptionDataRelationshipsLineItem.md)
- [LineItemOptionDataRelationshipsSkuOption](docs/Model/LineItemOptionDataRelationshipsSkuOption.md)
- [LineItemOptionUpdate](docs/Model/LineItemOptionUpdate.md)
- [LineItemOptionUpdateData](docs/Model/LineItemOptionUpdateData.md)
- [LineItemOptionUpdateDataAttributes](docs/Model/LineItemOptionUpdateDataAttributes.md)
- [LineItemOptionUpdateDataRelationships](docs/Model/LineItemOptionUpdateDataRelationships.md)
- [LineItemUpdate](docs/Model/LineItemUpdate.md)
- [LineItemUpdateData](docs/Model/LineItemUpdateData.md)
- [LineItemUpdateDataAttributes](docs/Model/LineItemUpdateDataAttributes.md)
- [ManualGateway](docs/Model/ManualGateway.md)
- [ManualGatewayCreate](docs/Model/ManualGatewayCreate.md)
- [ManualGatewayCreateData](docs/Model/ManualGatewayCreateData.md)
- [ManualGatewayCreateDataAttributes](docs/Model/ManualGatewayCreateDataAttributes.md)
- [ManualGatewayData](docs/Model/ManualGatewayData.md)
- [ManualGatewayDataAttributes](docs/Model/ManualGatewayDataAttributes.md)
- [ManualGatewayDataRelationships](docs/Model/ManualGatewayDataRelationships.md)
- [ManualGatewayUpdate](docs/Model/ManualGatewayUpdate.md)
- [ManualGatewayUpdateData](docs/Model/ManualGatewayUpdateData.md)
- [ManualGatewayUpdateDataAttributes](docs/Model/ManualGatewayUpdateDataAttributes.md)
- [ManualTaxCalculator](docs/Model/ManualTaxCalculator.md)
- [ManualTaxCalculatorCreate](docs/Model/ManualTaxCalculatorCreate.md)
- [ManualTaxCalculatorCreateData](docs/Model/ManualTaxCalculatorCreateData.md)
- [ManualTaxCalculatorCreateDataAttributes](docs/Model/ManualTaxCalculatorCreateDataAttributes.md)
- [ManualTaxCalculatorCreateDataRelationships](docs/Model/ManualTaxCalculatorCreateDataRelationships.md)
- [ManualTaxCalculatorData](docs/Model/ManualTaxCalculatorData.md)
- [ManualTaxCalculatorDataAttributes](docs/Model/ManualTaxCalculatorDataAttributes.md)
- [ManualTaxCalculatorDataRelationships](docs/Model/ManualTaxCalculatorDataRelationships.md)
- [ManualTaxCalculatorDataRelationshipsTaxRules](docs/Model/ManualTaxCalculatorDataRelationshipsTaxRules.md)
- [ManualTaxCalculatorUpdate](docs/Model/ManualTaxCalculatorUpdate.md)
- [ManualTaxCalculatorUpdateData](docs/Model/ManualTaxCalculatorUpdateData.md)
- [ManualTaxCalculatorUpdateDataAttributes](docs/Model/ManualTaxCalculatorUpdateDataAttributes.md)
- [Market](docs/Model/Market.md)
- [MarketCreate](docs/Model/MarketCreate.md)
- [MarketCreateData](docs/Model/MarketCreateData.md)
- [MarketCreateDataAttributes](docs/Model/MarketCreateDataAttributes.md)
- [MarketCreateDataRelationships](docs/Model/MarketCreateDataRelationships.md)
- [MarketData](docs/Model/MarketData.md)
- [MarketDataAttributes](docs/Model/MarketDataAttributes.md)
- [MarketDataRelationships](docs/Model/MarketDataRelationships.md)
- [MarketDataRelationshipsMerchant](docs/Model/MarketDataRelationshipsMerchant.md)
- [MarketDataRelationshipsPriceList](docs/Model/MarketDataRelationshipsPriceList.md)
- [MarketUpdate](docs/Model/MarketUpdate.md)
- [MarketUpdateData](docs/Model/MarketUpdateData.md)
- [MarketUpdateDataAttributes](docs/Model/MarketUpdateDataAttributes.md)
- [MarketUpdateDataRelationships](docs/Model/MarketUpdateDataRelationships.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantCreate](docs/Model/MerchantCreate.md)
- [MerchantCreateData](docs/Model/MerchantCreateData.md)
- [MerchantCreateDataAttributes](docs/Model/MerchantCreateDataAttributes.md)
- [MerchantCreateDataRelationships](docs/Model/MerchantCreateDataRelationships.md)
- [MerchantData](docs/Model/MerchantData.md)
- [MerchantDataAttributes](docs/Model/MerchantDataAttributes.md)
- [MerchantDataRelationships](docs/Model/MerchantDataRelationships.md)
- [MerchantUpdate](docs/Model/MerchantUpdate.md)
- [MerchantUpdateData](docs/Model/MerchantUpdateData.md)
- [MerchantUpdateDataAttributes](docs/Model/MerchantUpdateDataAttributes.md)
- [MerchantUpdateDataRelationships](docs/Model/MerchantUpdateDataRelationships.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Order](docs/Model/Order.md)
- [OrderAmountPromotionRule](docs/Model/OrderAmountPromotionRule.md)
- [OrderAmountPromotionRuleCreate](docs/Model/OrderAmountPromotionRuleCreate.md)
- [OrderAmountPromotionRuleCreateData](docs/Model/OrderAmountPromotionRuleCreateData.md)
- [OrderAmountPromotionRuleCreateDataAttributes](docs/Model/OrderAmountPromotionRuleCreateDataAttributes.md)
- [OrderAmountPromotionRuleCreateDataRelationships](docs/Model/OrderAmountPromotionRuleCreateDataRelationships.md)
- [OrderAmountPromotionRuleData](docs/Model/OrderAmountPromotionRuleData.md)
- [OrderAmountPromotionRuleDataAttributes](docs/Model/OrderAmountPromotionRuleDataAttributes.md)
- [OrderAmountPromotionRuleDataRelationships](docs/Model/OrderAmountPromotionRuleDataRelationships.md)
- [OrderAmountPromotionRuleUpdate](docs/Model/OrderAmountPromotionRuleUpdate.md)
- [OrderAmountPromotionRuleUpdateData](docs/Model/OrderAmountPromotionRuleUpdateData.md)
- [OrderCreate](docs/Model/OrderCreate.md)
- [OrderCreateData](docs/Model/OrderCreateData.md)
- [OrderCreateDataAttributes](docs/Model/OrderCreateDataAttributes.md)
- [OrderCreateDataRelationships](docs/Model/OrderCreateDataRelationships.md)
- [OrderData](docs/Model/OrderData.md)
- [OrderDataAttributes](docs/Model/OrderDataAttributes.md)
- [OrderDataRelationships](docs/Model/OrderDataRelationships.md)
- [OrderDataRelationshipsAuthorizations](docs/Model/OrderDataRelationshipsAuthorizations.md)
- [OrderDataRelationshipsAvailableCustomerPaymentSources](docs/Model/OrderDataRelationshipsAvailableCustomerPaymentSources.md)
- [OrderDataRelationshipsAvailablePaymentMethods](docs/Model/OrderDataRelationshipsAvailablePaymentMethods.md)
- [OrderDataRelationshipsBillingAddress](docs/Model/OrderDataRelationshipsBillingAddress.md)
- [OrderDataRelationshipsShipments](docs/Model/OrderDataRelationshipsShipments.md)
- [OrderDataRelationshipsShippingAddress](docs/Model/OrderDataRelationshipsShippingAddress.md)
- [OrderDataRelationshipsTransactions](docs/Model/OrderDataRelationshipsTransactions.md)
- [OrderUpdate](docs/Model/OrderUpdate.md)
- [OrderUpdateData](docs/Model/OrderUpdateData.md)
- [OrderUpdateDataAttributes](docs/Model/OrderUpdateDataAttributes.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationCreate](docs/Model/OrganizationCreate.md)
- [OrganizationCreateData](docs/Model/OrganizationCreateData.md)
- [OrganizationCreateDataAttributes](docs/Model/OrganizationCreateDataAttributes.md)
- [OrganizationData](docs/Model/OrganizationData.md)
- [OrganizationDataAttributes](docs/Model/OrganizationDataAttributes.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [OrganizationUpdateData](docs/Model/OrganizationUpdateData.md)
- [Package](docs/Model/Package.md)
- [PackageCreate](docs/Model/PackageCreate.md)
- [PackageCreateData](docs/Model/PackageCreateData.md)
- [PackageCreateDataAttributes](docs/Model/PackageCreateDataAttributes.md)
- [PackageCreateDataRelationships](docs/Model/PackageCreateDataRelationships.md)
- [PackageData](docs/Model/PackageData.md)
- [PackageDataAttributes](docs/Model/PackageDataAttributes.md)
- [PackageDataRelationships](docs/Model/PackageDataRelationships.md)
- [PackageDataRelationshipsParcels](docs/Model/PackageDataRelationshipsParcels.md)
- [PackageUpdate](docs/Model/PackageUpdate.md)
- [PackageUpdateData](docs/Model/PackageUpdateData.md)
- [PackageUpdateDataRelationships](docs/Model/PackageUpdateDataRelationships.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelCreate](docs/Model/ParcelCreate.md)
- [ParcelCreateData](docs/Model/ParcelCreateData.md)
- [ParcelCreateDataAttributes](docs/Model/ParcelCreateDataAttributes.md)
- [ParcelCreateDataRelationships](docs/Model/ParcelCreateDataRelationships.md)
- [ParcelData](docs/Model/ParcelData.md)
- [ParcelDataAttributes](docs/Model/ParcelDataAttributes.md)
- [ParcelDataRelationships](docs/Model/ParcelDataRelationships.md)
- [ParcelDataRelationshipsPackage](docs/Model/ParcelDataRelationshipsPackage.md)
- [ParcelDataRelationshipsParcelLineItems](docs/Model/ParcelDataRelationshipsParcelLineItems.md)
- [ParcelLineItem](docs/Model/ParcelLineItem.md)
- [ParcelLineItemCreate](docs/Model/ParcelLineItemCreate.md)
- [ParcelLineItemCreateData](docs/Model/ParcelLineItemCreateData.md)
- [ParcelLineItemCreateDataAttributes](docs/Model/ParcelLineItemCreateDataAttributes.md)
- [ParcelLineItemCreateDataRelationships](docs/Model/ParcelLineItemCreateDataRelationships.md)
- [ParcelLineItemData](docs/Model/ParcelLineItemData.md)
- [ParcelLineItemDataAttributes](docs/Model/ParcelLineItemDataAttributes.md)
- [ParcelLineItemDataRelationships](docs/Model/ParcelLineItemDataRelationships.md)
- [ParcelLineItemUpdate](docs/Model/ParcelLineItemUpdate.md)
- [ParcelLineItemUpdateData](docs/Model/ParcelLineItemUpdateData.md)
- [ParcelUpdate](docs/Model/ParcelUpdate.md)
- [ParcelUpdateData](docs/Model/ParcelUpdateData.md)
- [ParcelUpdateDataRelationships](docs/Model/ParcelUpdateDataRelationships.md)
- [PaymentGateway](docs/Model/PaymentGateway.md)
- [PaymentGatewayCreate](docs/Model/PaymentGatewayCreate.md)
- [PaymentGatewayCreateData](docs/Model/PaymentGatewayCreateData.md)
- [PaymentGatewayCreateDataAttributes](docs/Model/PaymentGatewayCreateDataAttributes.md)
- [PaymentGatewayData](docs/Model/PaymentGatewayData.md)
- [PaymentGatewayDataAttributes](docs/Model/PaymentGatewayDataAttributes.md)
- [PaymentGatewayUpdate](docs/Model/PaymentGatewayUpdate.md)
- [PaymentGatewayUpdateData](docs/Model/PaymentGatewayUpdateData.md)
- [PaymentGatewayUpdateDataAttributes](docs/Model/PaymentGatewayUpdateDataAttributes.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodCreate](docs/Model/PaymentMethodCreate.md)
- [PaymentMethodCreateData](docs/Model/PaymentMethodCreateData.md)
- [PaymentMethodCreateDataAttributes](docs/Model/PaymentMethodCreateDataAttributes.md)
- [PaymentMethodCreateDataRelationships](docs/Model/PaymentMethodCreateDataRelationships.md)
- [PaymentMethodData](docs/Model/PaymentMethodData.md)
- [PaymentMethodDataAttributes](docs/Model/PaymentMethodDataAttributes.md)
- [PaymentMethodDataRelationships](docs/Model/PaymentMethodDataRelationships.md)
- [PaymentMethodUpdate](docs/Model/PaymentMethodUpdate.md)
- [PaymentMethodUpdateData](docs/Model/PaymentMethodUpdateData.md)
- [PaymentMethodUpdateDataAttributes](docs/Model/PaymentMethodUpdateDataAttributes.md)
- [PaymentMethodUpdateDataRelationships](docs/Model/PaymentMethodUpdateDataRelationships.md)
- [PaypalGateway](docs/Model/PaypalGateway.md)
- [PaypalGatewayCreate](docs/Model/PaypalGatewayCreate.md)
- [PaypalGatewayCreateData](docs/Model/PaypalGatewayCreateData.md)
- [PaypalGatewayCreateDataAttributes](docs/Model/PaypalGatewayCreateDataAttributes.md)
- [PaypalGatewayData](docs/Model/PaypalGatewayData.md)
- [PaypalGatewayDataRelationships](docs/Model/PaypalGatewayDataRelationships.md)
- [PaypalGatewayDataRelationshipsPaypalPayments](docs/Model/PaypalGatewayDataRelationshipsPaypalPayments.md)
- [PaypalGatewayUpdate](docs/Model/PaypalGatewayUpdate.md)
- [PaypalGatewayUpdateData](docs/Model/PaypalGatewayUpdateData.md)
- [PaypalGatewayUpdateDataAttributes](docs/Model/PaypalGatewayUpdateDataAttributes.md)
- [PaypalPayment](docs/Model/PaypalPayment.md)
- [PaypalPaymentCreate](docs/Model/PaypalPaymentCreate.md)
- [PaypalPaymentCreateData](docs/Model/PaypalPaymentCreateData.md)
- [PaypalPaymentCreateDataAttributes](docs/Model/PaypalPaymentCreateDataAttributes.md)
- [PaypalPaymentData](docs/Model/PaypalPaymentData.md)
- [PaypalPaymentDataAttributes](docs/Model/PaypalPaymentDataAttributes.md)
- [PaypalPaymentUpdate](docs/Model/PaypalPaymentUpdate.md)
- [PaypalPaymentUpdateData](docs/Model/PaypalPaymentUpdateData.md)
- [PaypalPaymentUpdateDataAttributes](docs/Model/PaypalPaymentUpdateDataAttributes.md)
- [PercentageDiscountPromotion](docs/Model/PercentageDiscountPromotion.md)
- [PercentageDiscountPromotionCreate](docs/Model/PercentageDiscountPromotionCreate.md)
- [PercentageDiscountPromotionCreateData](docs/Model/PercentageDiscountPromotionCreateData.md)
- [PercentageDiscountPromotionCreateDataAttributes](docs/Model/PercentageDiscountPromotionCreateDataAttributes.md)
- [PercentageDiscountPromotionCreateDataRelationships](docs/Model/PercentageDiscountPromotionCreateDataRelationships.md)
- [PercentageDiscountPromotionData](docs/Model/PercentageDiscountPromotionData.md)
- [PercentageDiscountPromotionDataAttributes](docs/Model/PercentageDiscountPromotionDataAttributes.md)
- [PercentageDiscountPromotionDataRelationships](docs/Model/PercentageDiscountPromotionDataRelationships.md)
- [PercentageDiscountPromotionDataRelationshipsSkuList](docs/Model/PercentageDiscountPromotionDataRelationshipsSkuList.md)
- [PercentageDiscountPromotionUpdate](docs/Model/PercentageDiscountPromotionUpdate.md)
- [PercentageDiscountPromotionUpdateData](docs/Model/PercentageDiscountPromotionUpdateData.md)
- [PercentageDiscountPromotionUpdateDataAttributes](docs/Model/PercentageDiscountPromotionUpdateDataAttributes.md)
- [Price](docs/Model/Price.md)
- [PriceCreate](docs/Model/PriceCreate.md)
- [PriceCreateData](docs/Model/PriceCreateData.md)
- [PriceCreateDataAttributes](docs/Model/PriceCreateDataAttributes.md)
- [PriceCreateDataRelationships](docs/Model/PriceCreateDataRelationships.md)
- [PriceData](docs/Model/PriceData.md)
- [PriceDataAttributes](docs/Model/PriceDataAttributes.md)
- [PriceDataRelationships](docs/Model/PriceDataRelationships.md)
- [PriceList](docs/Model/PriceList.md)
- [PriceListCreate](docs/Model/PriceListCreate.md)
- [PriceListCreateData](docs/Model/PriceListCreateData.md)
- [PriceListCreateDataAttributes](docs/Model/PriceListCreateDataAttributes.md)
- [PriceListData](docs/Model/PriceListData.md)
- [PriceListDataAttributes](docs/Model/PriceListDataAttributes.md)
- [PriceListDataRelationships](docs/Model/PriceListDataRelationships.md)
- [PriceListDataRelationshipsPrices](docs/Model/PriceListDataRelationshipsPrices.md)
- [PriceListUpdate](docs/Model/PriceListUpdate.md)
- [PriceListUpdateData](docs/Model/PriceListUpdateData.md)
- [PriceListUpdateDataAttributes](docs/Model/PriceListUpdateDataAttributes.md)
- [PriceUpdate](docs/Model/PriceUpdate.md)
- [PriceUpdateData](docs/Model/PriceUpdateData.md)
- [PriceUpdateDataAttributes](docs/Model/PriceUpdateDataAttributes.md)
- [PriceUpdateDataRelationships](docs/Model/PriceUpdateDataRelationships.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionCreate](docs/Model/PromotionCreate.md)
- [PromotionCreateData](docs/Model/PromotionCreateData.md)
- [PromotionData](docs/Model/PromotionData.md)
- [PromotionRule](docs/Model/PromotionRule.md)
- [PromotionRuleCreate](docs/Model/PromotionRuleCreate.md)
- [PromotionRuleCreateData](docs/Model/PromotionRuleCreateData.md)
- [PromotionRuleData](docs/Model/PromotionRuleData.md)
- [PromotionRuleUpdate](docs/Model/PromotionRuleUpdate.md)
- [PromotionRuleUpdateData](docs/Model/PromotionRuleUpdateData.md)
- [PromotionUpdate](docs/Model/PromotionUpdate.md)
- [PromotionUpdateData](docs/Model/PromotionUpdateData.md)
- [Refund](docs/Model/Refund.md)
- [RefundCreate](docs/Model/RefundCreate.md)
- [RefundCreateData](docs/Model/RefundCreateData.md)
- [RefundData](docs/Model/RefundData.md)
- [RefundDataAttributes](docs/Model/RefundDataAttributes.md)
- [RefundDataRelationships](docs/Model/RefundDataRelationships.md)
- [RefundDataRelationshipsReferenceCapture](docs/Model/RefundDataRelationshipsReferenceCapture.md)
- [RefundUpdate](docs/Model/RefundUpdate.md)
- [RefundUpdateData](docs/Model/RefundUpdateData.md)
- [ReturnCreate](docs/Model/ReturnCreate.md)
- [ReturnCreateData](docs/Model/ReturnCreateData.md)
- [ReturnCreateDataRelationships](docs/Model/ReturnCreateDataRelationships.md)
- [ReturnData](docs/Model/ReturnData.md)
- [ReturnDataAttributes](docs/Model/ReturnDataAttributes.md)
- [ReturnDataRelationships](docs/Model/ReturnDataRelationships.md)
- [ReturnDataRelationshipsDestinationAddress](docs/Model/ReturnDataRelationshipsDestinationAddress.md)
- [ReturnDataRelationshipsOriginAddress](docs/Model/ReturnDataRelationshipsOriginAddress.md)
- [ReturnDataRelationshipsReturnLineItems](docs/Model/ReturnDataRelationshipsReturnLineItems.md)
- [ReturnLineItem](docs/Model/ReturnLineItem.md)
- [ReturnLineItemCreate](docs/Model/ReturnLineItemCreate.md)
- [ReturnLineItemCreateData](docs/Model/ReturnLineItemCreateData.md)
- [ReturnLineItemCreateDataAttributes](docs/Model/ReturnLineItemCreateDataAttributes.md)
- [ReturnLineItemCreateDataRelationships](docs/Model/ReturnLineItemCreateDataRelationships.md)
- [ReturnLineItemData](docs/Model/ReturnLineItemData.md)
- [ReturnLineItemDataAttributes](docs/Model/ReturnLineItemDataAttributes.md)
- [ReturnLineItemDataRelationships](docs/Model/ReturnLineItemDataRelationships.md)
- [ReturnLineItemUpdate](docs/Model/ReturnLineItemUpdate.md)
- [ReturnLineItemUpdateData](docs/Model/ReturnLineItemUpdateData.md)
- [ReturnLineItemUpdateDataAttributes](docs/Model/ReturnLineItemUpdateDataAttributes.md)
- [ReturnUpdate](docs/Model/ReturnUpdate.md)
- [ReturnUpdateData](docs/Model/ReturnUpdateData.md)
- [ReturnUpdateDataAttributes](docs/Model/ReturnUpdateDataAttributes.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentCreate](docs/Model/ShipmentCreate.md)
- [ShipmentCreateData](docs/Model/ShipmentCreateData.md)
- [ShipmentData](docs/Model/ShipmentData.md)
- [ShipmentDataAttributes](docs/Model/ShipmentDataAttributes.md)
- [ShipmentDataRelationships](docs/Model/ShipmentDataRelationships.md)
- [ShipmentDataRelationshipsAvailableShippingMethods](docs/Model/ShipmentDataRelationshipsAvailableShippingMethods.md)
- [ShipmentDataRelationshipsCarrierAccounts](docs/Model/ShipmentDataRelationshipsCarrierAccounts.md)
- [ShipmentDataRelationshipsDeliveryLeadTime](docs/Model/ShipmentDataRelationshipsDeliveryLeadTime.md)
- [ShipmentDataRelationshipsShippingCategory](docs/Model/ShipmentDataRelationshipsShippingCategory.md)
- [ShipmentUpdate](docs/Model/ShipmentUpdate.md)
- [ShipmentUpdateData](docs/Model/ShipmentUpdateData.md)
- [ShipmentUpdateDataAttributes](docs/Model/ShipmentUpdateDataAttributes.md)
- [ShipmentUpdateDataRelationships](docs/Model/ShipmentUpdateDataRelationships.md)
- [ShippingCategory](docs/Model/ShippingCategory.md)
- [ShippingCategoryCreate](docs/Model/ShippingCategoryCreate.md)
- [ShippingCategoryCreateData](docs/Model/ShippingCategoryCreateData.md)
- [ShippingCategoryCreateDataAttributes](docs/Model/ShippingCategoryCreateDataAttributes.md)
- [ShippingCategoryData](docs/Model/ShippingCategoryData.md)
- [ShippingCategoryDataAttributes](docs/Model/ShippingCategoryDataAttributes.md)
- [ShippingCategoryDataRelationships](docs/Model/ShippingCategoryDataRelationships.md)
- [ShippingCategoryUpdate](docs/Model/ShippingCategoryUpdate.md)
- [ShippingCategoryUpdateData](docs/Model/ShippingCategoryUpdateData.md)
- [ShippingCategoryUpdateDataAttributes](docs/Model/ShippingCategoryUpdateDataAttributes.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [ShippingMethodCreate](docs/Model/ShippingMethodCreate.md)
- [ShippingMethodCreateData](docs/Model/ShippingMethodCreateData.md)
- [ShippingMethodCreateDataAttributes](docs/Model/ShippingMethodCreateDataAttributes.md)
- [ShippingMethodCreateDataRelationships](docs/Model/ShippingMethodCreateDataRelationships.md)
- [ShippingMethodData](docs/Model/ShippingMethodData.md)
- [ShippingMethodDataAttributes](docs/Model/ShippingMethodDataAttributes.md)
- [ShippingMethodDataRelationships](docs/Model/ShippingMethodDataRelationships.md)
- [ShippingMethodDataRelationshipsDeliveryLeadTimeForShipment](docs/Model/ShippingMethodDataRelationshipsDeliveryLeadTimeForShipment.md)
- [ShippingMethodDataRelationshipsShippingZone](docs/Model/ShippingMethodDataRelationshipsShippingZone.md)
- [ShippingMethodUpdate](docs/Model/ShippingMethodUpdate.md)
- [ShippingMethodUpdateData](docs/Model/ShippingMethodUpdateData.md)
- [ShippingMethodUpdateDataAttributes](docs/Model/ShippingMethodUpdateDataAttributes.md)
- [ShippingMethodUpdateDataRelationships](docs/Model/ShippingMethodUpdateDataRelationships.md)
- [ShippingZone](docs/Model/ShippingZone.md)
- [ShippingZoneCreate](docs/Model/ShippingZoneCreate.md)
- [ShippingZoneCreateData](docs/Model/ShippingZoneCreateData.md)
- [ShippingZoneCreateDataAttributes](docs/Model/ShippingZoneCreateDataAttributes.md)
- [ShippingZoneData](docs/Model/ShippingZoneData.md)
- [ShippingZoneDataAttributes](docs/Model/ShippingZoneDataAttributes.md)
- [ShippingZoneDataRelationships](docs/Model/ShippingZoneDataRelationships.md)
- [ShippingZoneUpdate](docs/Model/ShippingZoneUpdate.md)
- [ShippingZoneUpdateData](docs/Model/ShippingZoneUpdateData.md)
- [ShippingZoneUpdateDataAttributes](docs/Model/ShippingZoneUpdateDataAttributes.md)
- [Sku](docs/Model/Sku.md)
- [SkuCreate](docs/Model/SkuCreate.md)
- [SkuCreateData](docs/Model/SkuCreateData.md)
- [SkuCreateDataAttributes](docs/Model/SkuCreateDataAttributes.md)
- [SkuCreateDataRelationships](docs/Model/SkuCreateDataRelationships.md)
- [SkuData](docs/Model/SkuData.md)
- [SkuDataAttributes](docs/Model/SkuDataAttributes.md)
- [SkuDataRelationships](docs/Model/SkuDataRelationships.md)
- [SkuDataRelationshipsStockItems](docs/Model/SkuDataRelationshipsStockItems.md)
- [SkuList](docs/Model/SkuList.md)
- [SkuListCreate](docs/Model/SkuListCreate.md)
- [SkuListCreateData](docs/Model/SkuListCreateData.md)
- [SkuListCreateDataAttributes](docs/Model/SkuListCreateDataAttributes.md)
- [SkuListData](docs/Model/SkuListData.md)
- [SkuListDataAttributes](docs/Model/SkuListDataAttributes.md)
- [SkuListDataRelationships](docs/Model/SkuListDataRelationships.md)
- [SkuListDataRelationshipsSkuListItems](docs/Model/SkuListDataRelationshipsSkuListItems.md)
- [SkuListItem](docs/Model/SkuListItem.md)
- [SkuListItemCreate](docs/Model/SkuListItemCreate.md)
- [SkuListItemCreateData](docs/Model/SkuListItemCreateData.md)
- [SkuListItemCreateDataAttributes](docs/Model/SkuListItemCreateDataAttributes.md)
- [SkuListItemCreateDataRelationships](docs/Model/SkuListItemCreateDataRelationships.md)
- [SkuListItemData](docs/Model/SkuListItemData.md)
- [SkuListItemDataAttributes](docs/Model/SkuListItemDataAttributes.md)
- [SkuListItemDataRelationships](docs/Model/SkuListItemDataRelationships.md)
- [SkuListItemUpdate](docs/Model/SkuListItemUpdate.md)
- [SkuListItemUpdateData](docs/Model/SkuListItemUpdateData.md)
- [SkuListItemUpdateDataAttributes](docs/Model/SkuListItemUpdateDataAttributes.md)
- [SkuListPromotionRule](docs/Model/SkuListPromotionRule.md)
- [SkuListPromotionRuleCreate](docs/Model/SkuListPromotionRuleCreate.md)
- [SkuListPromotionRuleCreateData](docs/Model/SkuListPromotionRuleCreateData.md)
- [SkuListPromotionRuleCreateDataAttributes](docs/Model/SkuListPromotionRuleCreateDataAttributes.md)
- [SkuListPromotionRuleCreateDataRelationships](docs/Model/SkuListPromotionRuleCreateDataRelationships.md)
- [SkuListPromotionRuleData](docs/Model/SkuListPromotionRuleData.md)
- [SkuListPromotionRuleDataAttributes](docs/Model/SkuListPromotionRuleDataAttributes.md)
- [SkuListPromotionRuleDataRelationships](docs/Model/SkuListPromotionRuleDataRelationships.md)
- [SkuListPromotionRuleUpdate](docs/Model/SkuListPromotionRuleUpdate.md)
- [SkuListPromotionRuleUpdateData](docs/Model/SkuListPromotionRuleUpdateData.md)
- [SkuListPromotionRuleUpdateDataRelationships](docs/Model/SkuListPromotionRuleUpdateDataRelationships.md)
- [SkuListUpdate](docs/Model/SkuListUpdate.md)
- [SkuListUpdateData](docs/Model/SkuListUpdateData.md)
- [SkuListUpdateDataAttributes](docs/Model/SkuListUpdateDataAttributes.md)
- [SkuOption](docs/Model/SkuOption.md)
- [SkuOptionCreate](docs/Model/SkuOptionCreate.md)
- [SkuOptionCreateData](docs/Model/SkuOptionCreateData.md)
- [SkuOptionCreateDataAttributes](docs/Model/SkuOptionCreateDataAttributes.md)
- [SkuOptionData](docs/Model/SkuOptionData.md)
- [SkuOptionDataAttributes](docs/Model/SkuOptionDataAttributes.md)
- [SkuOptionUpdate](docs/Model/SkuOptionUpdate.md)
- [SkuOptionUpdateData](docs/Model/SkuOptionUpdateData.md)
- [SkuOptionUpdateDataAttributes](docs/Model/SkuOptionUpdateDataAttributes.md)
- [SkuUpdate](docs/Model/SkuUpdate.md)
- [SkuUpdateData](docs/Model/SkuUpdateData.md)
- [SkuUpdateDataAttributes](docs/Model/SkuUpdateDataAttributes.md)
- [SkuUpdateDataRelationships](docs/Model/SkuUpdateDataRelationships.md)
- [StockItem](docs/Model/StockItem.md)
- [StockItemCreate](docs/Model/StockItemCreate.md)
- [StockItemCreateData](docs/Model/StockItemCreateData.md)
- [StockItemCreateDataAttributes](docs/Model/StockItemCreateDataAttributes.md)
- [StockItemCreateDataRelationships](docs/Model/StockItemCreateDataRelationships.md)
- [StockItemData](docs/Model/StockItemData.md)
- [StockItemDataAttributes](docs/Model/StockItemDataAttributes.md)
- [StockItemDataRelationships](docs/Model/StockItemDataRelationships.md)
- [StockItemUpdate](docs/Model/StockItemUpdate.md)
- [StockItemUpdateData](docs/Model/StockItemUpdateData.md)
- [StockItemUpdateDataAttributes](docs/Model/StockItemUpdateDataAttributes.md)
- [StockItemUpdateDataRelationships](docs/Model/StockItemUpdateDataRelationships.md)
- [StockLineItem](docs/Model/StockLineItem.md)
- [StockLineItemCreate](docs/Model/StockLineItemCreate.md)
- [StockLineItemCreateData](docs/Model/StockLineItemCreateData.md)
- [StockLineItemData](docs/Model/StockLineItemData.md)
- [StockLineItemDataAttributes](docs/Model/StockLineItemDataAttributes.md)
- [StockLineItemDataRelationships](docs/Model/StockLineItemDataRelationships.md)
- [StockLineItemUpdate](docs/Model/StockLineItemUpdate.md)
- [StockLineItemUpdateData](docs/Model/StockLineItemUpdateData.md)
- [StockLocation](docs/Model/StockLocation.md)
- [StockLocationCreate](docs/Model/StockLocationCreate.md)
- [StockLocationCreateData](docs/Model/StockLocationCreateData.md)
- [StockLocationCreateDataAttributes](docs/Model/StockLocationCreateDataAttributes.md)
- [StockLocationData](docs/Model/StockLocationData.md)
- [StockLocationDataAttributes](docs/Model/StockLocationDataAttributes.md)
- [StockLocationDataRelationships](docs/Model/StockLocationDataRelationships.md)
- [StockLocationUpdate](docs/Model/StockLocationUpdate.md)
- [StockLocationUpdateData](docs/Model/StockLocationUpdateData.md)
- [StockLocationUpdateDataAttributes](docs/Model/StockLocationUpdateDataAttributes.md)
- [StockTransfer](docs/Model/StockTransfer.md)
- [StockTransferCreate](docs/Model/StockTransferCreate.md)
- [StockTransferCreateData](docs/Model/StockTransferCreateData.md)
- [StockTransferCreateDataAttributes](docs/Model/StockTransferCreateDataAttributes.md)
- [StockTransferCreateDataRelationships](docs/Model/StockTransferCreateDataRelationships.md)
- [StockTransferData](docs/Model/StockTransferData.md)
- [StockTransferDataAttributes](docs/Model/StockTransferDataAttributes.md)
- [StockTransferDataRelationships](docs/Model/StockTransferDataRelationships.md)
- [StockTransferDataRelationshipsDestinationStockLocation](docs/Model/StockTransferDataRelationshipsDestinationStockLocation.md)
- [StockTransferDataRelationshipsOriginStockLocation](docs/Model/StockTransferDataRelationshipsOriginStockLocation.md)
- [StockTransferUpdate](docs/Model/StockTransferUpdate.md)
- [StockTransferUpdateData](docs/Model/StockTransferUpdateData.md)
- [StockTransferUpdateDataAttributes](docs/Model/StockTransferUpdateDataAttributes.md)
- [StockTransferUpdateDataRelationships](docs/Model/StockTransferUpdateDataRelationships.md)
- [StripeGateway](docs/Model/StripeGateway.md)
- [StripeGatewayCreate](docs/Model/StripeGatewayCreate.md)
- [StripeGatewayCreateData](docs/Model/StripeGatewayCreateData.md)
- [StripeGatewayCreateDataAttributes](docs/Model/StripeGatewayCreateDataAttributes.md)
- [StripeGatewayData](docs/Model/StripeGatewayData.md)
- [StripeGatewayDataAttributes](docs/Model/StripeGatewayDataAttributes.md)
- [StripeGatewayDataRelationships](docs/Model/StripeGatewayDataRelationships.md)
- [StripeGatewayDataRelationshipsStripePayments](docs/Model/StripeGatewayDataRelationshipsStripePayments.md)
- [StripeGatewayUpdate](docs/Model/StripeGatewayUpdate.md)
- [StripeGatewayUpdateData](docs/Model/StripeGatewayUpdateData.md)
- [StripePayment](docs/Model/StripePayment.md)
- [StripePaymentCreate](docs/Model/StripePaymentCreate.md)
- [StripePaymentCreateData](docs/Model/StripePaymentCreateData.md)
- [StripePaymentCreateDataAttributes](docs/Model/StripePaymentCreateDataAttributes.md)
- [StripePaymentData](docs/Model/StripePaymentData.md)
- [StripePaymentDataAttributes](docs/Model/StripePaymentDataAttributes.md)
- [StripePaymentUpdate](docs/Model/StripePaymentUpdate.md)
- [StripePaymentUpdateData](docs/Model/StripePaymentUpdateData.md)
- [TaxCalculator](docs/Model/TaxCalculator.md)
- [TaxCalculatorCreate](docs/Model/TaxCalculatorCreate.md)
- [TaxCalculatorCreateData](docs/Model/TaxCalculatorCreateData.md)
- [TaxCalculatorData](docs/Model/TaxCalculatorData.md)
- [TaxCalculatorUpdate](docs/Model/TaxCalculatorUpdate.md)
- [TaxCalculatorUpdateData](docs/Model/TaxCalculatorUpdateData.md)
- [TaxCategory](docs/Model/TaxCategory.md)
- [TaxCategoryCreate](docs/Model/TaxCategoryCreate.md)
- [TaxCategoryCreateData](docs/Model/TaxCategoryCreateData.md)
- [TaxCategoryCreateDataAttributes](docs/Model/TaxCategoryCreateDataAttributes.md)
- [TaxCategoryCreateDataRelationships](docs/Model/TaxCategoryCreateDataRelationships.md)
- [TaxCategoryData](docs/Model/TaxCategoryData.md)
- [TaxCategoryDataAttributes](docs/Model/TaxCategoryDataAttributes.md)
- [TaxCategoryDataRelationships](docs/Model/TaxCategoryDataRelationships.md)
- [TaxCategoryDataRelationshipsTaxCalculator](docs/Model/TaxCategoryDataRelationshipsTaxCalculator.md)
- [TaxCategoryUpdate](docs/Model/TaxCategoryUpdate.md)
- [TaxCategoryUpdateData](docs/Model/TaxCategoryUpdateData.md)
- [TaxCategoryUpdateDataAttributes](docs/Model/TaxCategoryUpdateDataAttributes.md)
- [TaxCategoryUpdateDataRelationships](docs/Model/TaxCategoryUpdateDataRelationships.md)
- [TaxRule](docs/Model/TaxRule.md)
- [TaxRuleCreate](docs/Model/TaxRuleCreate.md)
- [TaxRuleCreateData](docs/Model/TaxRuleCreateData.md)
- [TaxRuleCreateDataAttributes](docs/Model/TaxRuleCreateDataAttributes.md)
- [TaxRuleCreateDataRelationships](docs/Model/TaxRuleCreateDataRelationships.md)
- [TaxRuleData](docs/Model/TaxRuleData.md)
- [TaxRuleDataAttributes](docs/Model/TaxRuleDataAttributes.md)
- [TaxRuleDataRelationships](docs/Model/TaxRuleDataRelationships.md)
- [TaxRuleDataRelationshipsManualTaxCalculator](docs/Model/TaxRuleDataRelationshipsManualTaxCalculator.md)
- [TaxRuleUpdate](docs/Model/TaxRuleUpdate.md)
- [TaxRuleUpdateData](docs/Model/TaxRuleUpdateData.md)
- [TaxRuleUpdateDataAttributes](docs/Model/TaxRuleUpdateDataAttributes.md)
- [TaxjarAccount](docs/Model/TaxjarAccount.md)
- [TaxjarAccountCreate](docs/Model/TaxjarAccountCreate.md)
- [TaxjarAccountCreateData](docs/Model/TaxjarAccountCreateData.md)
- [TaxjarAccountCreateDataAttributes](docs/Model/TaxjarAccountCreateDataAttributes.md)
- [TaxjarAccountData](docs/Model/TaxjarAccountData.md)
- [TaxjarAccountUpdate](docs/Model/TaxjarAccountUpdate.md)
- [TaxjarAccountUpdateData](docs/Model/TaxjarAccountUpdateData.md)
- [TaxjarAccountUpdateDataAttributes](docs/Model/TaxjarAccountUpdateDataAttributes.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionCreate](docs/Model/TransactionCreate.md)
- [TransactionCreateData](docs/Model/TransactionCreateData.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionUpdate](docs/Model/TransactionUpdate.md)
- [TransactionUpdateData](docs/Model/TransactionUpdateData.md)
- [Void](docs/Model/Void.md)
- [VoidCreate](docs/Model/VoidCreate.md)
- [VoidCreateData](docs/Model/VoidCreateData.md)
- [VoidData](docs/Model/VoidData.md)
- [VoidDataRelationships](docs/Model/VoidDataRelationships.md)
- [VoidUpdate](docs/Model/VoidUpdate.md)
- [VoidUpdateData](docs/Model/VoidUpdateData.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookCreate](docs/Model/WebhookCreate.md)
- [WebhookCreateData](docs/Model/WebhookCreateData.md)
- [WebhookCreateDataAttributes](docs/Model/WebhookCreateDataAttributes.md)
- [WebhookData](docs/Model/WebhookData.md)
- [WebhookDataAttributes](docs/Model/WebhookDataAttributes.md)
- [WebhookUpdate](docs/Model/WebhookUpdate.md)
- [WebhookUpdateData](docs/Model/WebhookUpdateData.md)
- [WebhookUpdateDataAttributes](docs/Model/WebhookUpdateDataAttributes.md)
- [WireTransfer](docs/Model/WireTransfer.md)
- [WireTransferCreate](docs/Model/WireTransferCreate.md)
- [WireTransferCreateData](docs/Model/WireTransferCreateData.md)
- [WireTransferData](docs/Model/WireTransferData.md)
- [WireTransferUpdate](docs/Model/WireTransferUpdate.md)
- [WireTransferUpdateData](docs/Model/WireTransferUpdateData.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@commercelayer.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
