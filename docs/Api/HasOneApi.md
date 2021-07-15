# OpenAPI\Client\HasOneApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETAddressIdGeocoder()**](HasOneApi.md#gETAddressIdGeocoder) | **GET** /addresses/{addressId}/geocoder | Retrieve the geocoder associated to the address
[**gETAdyenPaymentIdOrder()**](HasOneApi.md#gETAdyenPaymentIdOrder) | **GET** /adyen_payments/{adyenPaymentId}/order | Retrieve the order associated to the adyen payment
[**gETAdyenPaymentIdPaymentGateway()**](HasOneApi.md#gETAdyenPaymentIdPaymentGateway) | **GET** /adyen_payments/{adyenPaymentId}/payment_gateway | Retrieve the payment gateway associated to the adyen payment
[**gETAuthorizationIdOrder()**](HasOneApi.md#gETAuthorizationIdOrder) | **GET** /authorizations/{authorizationId}/order | Retrieve the order associated to the authorization
[**gETBillingInfoValidationRuleIdMarket()**](HasOneApi.md#gETBillingInfoValidationRuleIdMarket) | **GET** /billing_info_validation_rules/{billingInfoValidationRuleId}/market | Retrieve the market associated to the billing info validation rule
[**gETBraintreePaymentIdOrder()**](HasOneApi.md#gETBraintreePaymentIdOrder) | **GET** /braintree_payments/{braintreePaymentId}/order | Retrieve the order associated to the braintree payment
[**gETBraintreePaymentIdPaymentGateway()**](HasOneApi.md#gETBraintreePaymentIdPaymentGateway) | **GET** /braintree_payments/{braintreePaymentId}/payment_gateway | Retrieve the payment gateway associated to the braintree payment
[**gETCaptureIdOrder()**](HasOneApi.md#gETCaptureIdOrder) | **GET** /captures/{captureId}/order | Retrieve the order associated to the capture
[**gETCaptureIdReferenceAuthorization()**](HasOneApi.md#gETCaptureIdReferenceAuthorization) | **GET** /captures/{captureId}/reference_authorization | Retrieve the reference authorization associated to the capture
[**gETCarrierAccountIdMarket()**](HasOneApi.md#gETCarrierAccountIdMarket) | **GET** /carrier_accounts/{carrierAccountId}/market | Retrieve the market associated to the carrier account
[**gETCheckoutComPaymentIdOrder()**](HasOneApi.md#gETCheckoutComPaymentIdOrder) | **GET** /checkout_com_payments/{checkoutComPaymentId}/order | Retrieve the order associated to the checkout com payment
[**gETCheckoutComPaymentIdPaymentGateway()**](HasOneApi.md#gETCheckoutComPaymentIdPaymentGateway) | **GET** /checkout_com_payments/{checkoutComPaymentId}/payment_gateway | Retrieve the payment gateway associated to the checkout com payment
[**gETCouponIdPromotionRule()**](HasOneApi.md#gETCouponIdPromotionRule) | **GET** /coupons/{couponId}/promotion_rule | Retrieve the promotion rule associated to the coupon
[**gETCustomerAddressIdAddress()**](HasOneApi.md#gETCustomerAddressIdAddress) | **GET** /customer_addresses/{customerAddressId}/address | Retrieve the address associated to the customer address
[**gETCustomerAddressIdCustomer()**](HasOneApi.md#gETCustomerAddressIdCustomer) | **GET** /customer_addresses/{customerAddressId}/customer | Retrieve the customer associated to the customer address
[**gETCustomerIdCustomerGroup()**](HasOneApi.md#gETCustomerIdCustomerGroup) | **GET** /customers/{customerId}/customer_group | Retrieve the customer group associated to the customer
[**gETCustomerPasswordResetIdCustomer()**](HasOneApi.md#gETCustomerPasswordResetIdCustomer) | **GET** /customer_password_resets/{customerPasswordResetId}/customer | Retrieve the customer associated to the customer password reset
[**gETCustomerPaymentSourceIdCustomer()**](HasOneApi.md#gETCustomerPaymentSourceIdCustomer) | **GET** /customer_payment_sources/{customerPaymentSourceId}/customer | Retrieve the customer associated to the customer payment source
[**gETCustomerSubscriptionIdCustomer()**](HasOneApi.md#gETCustomerSubscriptionIdCustomer) | **GET** /customer_subscriptions/{customerSubscriptionId}/customer | Retrieve the customer associated to the customer subscription
[**gETDeliveryLeadTimeIdShippingMethod()**](HasOneApi.md#gETDeliveryLeadTimeIdShippingMethod) | **GET** /delivery_lead_times/{deliveryLeadTimeId}/shipping_method | Retrieve the shipping method associated to the delivery lead time
[**gETDeliveryLeadTimeIdStockLocation()**](HasOneApi.md#gETDeliveryLeadTimeIdStockLocation) | **GET** /delivery_lead_times/{deliveryLeadTimeId}/stock_location | Retrieve the stock location associated to the delivery lead time
[**gETExternalPaymentIdOrder()**](HasOneApi.md#gETExternalPaymentIdOrder) | **GET** /external_payments/{externalPaymentId}/order | Retrieve the order associated to the external payment
[**gETExternalPaymentIdPaymentGateway()**](HasOneApi.md#gETExternalPaymentIdPaymentGateway) | **GET** /external_payments/{externalPaymentId}/payment_gateway | Retrieve the payment gateway associated to the external payment
[**gETExternalPromotionIdCouponCodesPromotionRule()**](HasOneApi.md#gETExternalPromotionIdCouponCodesPromotionRule) | **GET** /external_promotions/{externalPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the external promotion
[**gETExternalPromotionIdMarket()**](HasOneApi.md#gETExternalPromotionIdMarket) | **GET** /external_promotions/{externalPromotionId}/market | Retrieve the market associated to the external promotion
[**gETExternalPromotionIdOrderAmountPromotionRule()**](HasOneApi.md#gETExternalPromotionIdOrderAmountPromotionRule) | **GET** /external_promotions/{externalPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the external promotion
[**gETExternalPromotionIdSkuListPromotionRule()**](HasOneApi.md#gETExternalPromotionIdSkuListPromotionRule) | **GET** /external_promotions/{externalPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the external promotion
[**gETFixedAmountPromotionIdCouponCodesPromotionRule()**](HasOneApi.md#gETFixedAmountPromotionIdCouponCodesPromotionRule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the fixed amount promotion
[**gETFixedAmountPromotionIdMarket()**](HasOneApi.md#gETFixedAmountPromotionIdMarket) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/market | Retrieve the market associated to the fixed amount promotion
[**gETFixedAmountPromotionIdOrderAmountPromotionRule()**](HasOneApi.md#gETFixedAmountPromotionIdOrderAmountPromotionRule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the fixed amount promotion
[**gETFixedAmountPromotionIdSkuListPromotionRule()**](HasOneApi.md#gETFixedAmountPromotionIdSkuListPromotionRule) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the fixed amount promotion
[**gETFreeShippingPromotionIdCouponCodesPromotionRule()**](HasOneApi.md#gETFreeShippingPromotionIdCouponCodesPromotionRule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the free shipping promotion
[**gETFreeShippingPromotionIdMarket()**](HasOneApi.md#gETFreeShippingPromotionIdMarket) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/market | Retrieve the market associated to the free shipping promotion
[**gETFreeShippingPromotionIdOrderAmountPromotionRule()**](HasOneApi.md#gETFreeShippingPromotionIdOrderAmountPromotionRule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the free shipping promotion
[**gETFreeShippingPromotionIdSkuListPromotionRule()**](HasOneApi.md#gETFreeShippingPromotionIdSkuListPromotionRule) | **GET** /free_shipping_promotions/{freeShippingPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the free shipping promotion
[**gETGiftCardIdGiftCardRecipient()**](HasOneApi.md#gETGiftCardIdGiftCardRecipient) | **GET** /gift_cards/{giftCardId}/gift_card_recipient | Retrieve the gift card recipient associated to the gift card
[**gETGiftCardIdMarket()**](HasOneApi.md#gETGiftCardIdMarket) | **GET** /gift_cards/{giftCardId}/market | Retrieve the market associated to the gift card
[**gETGiftCardRecipientIdCustomer()**](HasOneApi.md#gETGiftCardRecipientIdCustomer) | **GET** /gift_card_recipients/{giftCardRecipientId}/customer | Retrieve the customer associated to the gift card recipient
[**gETInStockSubscriptionIdCustomer()**](HasOneApi.md#gETInStockSubscriptionIdCustomer) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/customer | Retrieve the customer associated to the in stock subscription
[**gETInStockSubscriptionIdMarket()**](HasOneApi.md#gETInStockSubscriptionIdMarket) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/market | Retrieve the market associated to the in stock subscription
[**gETInStockSubscriptionIdSku()**](HasOneApi.md#gETInStockSubscriptionIdSku) | **GET** /in_stock_subscriptions/{inStockSubscriptionId}/sku | Retrieve the sku associated to the in stock subscription
[**gETInventoryReturnLocationIdInventoryModel()**](HasOneApi.md#gETInventoryReturnLocationIdInventoryModel) | **GET** /inventory_return_locations/{inventoryReturnLocationId}/inventory_model | Retrieve the inventory model associated to the inventory return location
[**gETInventoryReturnLocationIdStockLocation()**](HasOneApi.md#gETInventoryReturnLocationIdStockLocation) | **GET** /inventory_return_locations/{inventoryReturnLocationId}/stock_location | Retrieve the stock location associated to the inventory return location
[**gETInventoryStockLocationIdInventoryModel()**](HasOneApi.md#gETInventoryStockLocationIdInventoryModel) | **GET** /inventory_stock_locations/{inventoryStockLocationId}/inventory_model | Retrieve the inventory model associated to the inventory stock location
[**gETInventoryStockLocationIdStockLocation()**](HasOneApi.md#gETInventoryStockLocationIdStockLocation) | **GET** /inventory_stock_locations/{inventoryStockLocationId}/stock_location | Retrieve the stock location associated to the inventory stock location
[**gETLineItemIdOrder()**](HasOneApi.md#gETLineItemIdOrder) | **GET** /line_items/{lineItemId}/order | Retrieve the order associated to the line item
[**gETLineItemOptionIdLineItem()**](HasOneApi.md#gETLineItemOptionIdLineItem) | **GET** /line_item_options/{lineItemOptionId}/line_item | Retrieve the line item associated to the line item option
[**gETLineItemOptionIdSkuOption()**](HasOneApi.md#gETLineItemOptionIdSkuOption) | **GET** /line_item_options/{lineItemOptionId}/sku_option | Retrieve the sku option associated to the line item option
[**gETMarketIdCustomerGroup()**](HasOneApi.md#gETMarketIdCustomerGroup) | **GET** /markets/{marketId}/customer_group | Retrieve the customer group associated to the market
[**gETMarketIdInventoryModel()**](HasOneApi.md#gETMarketIdInventoryModel) | **GET** /markets/{marketId}/inventory_model | Retrieve the inventory model associated to the market
[**gETMarketIdMerchant()**](HasOneApi.md#gETMarketIdMerchant) | **GET** /markets/{marketId}/merchant | Retrieve the merchant associated to the market
[**gETMarketIdPriceList()**](HasOneApi.md#gETMarketIdPriceList) | **GET** /markets/{marketId}/price_list | Retrieve the price list associated to the market
[**gETMerchantIdAddress()**](HasOneApi.md#gETMerchantIdAddress) | **GET** /merchants/{merchantId}/address | Retrieve the address associated to the merchant
[**gETOrderIdBillingAddress()**](HasOneApi.md#gETOrderIdBillingAddress) | **GET** /orders/{orderId}/billing_address | Retrieve the billing address associated to the order
[**gETOrderIdCustomer()**](HasOneApi.md#gETOrderIdCustomer) | **GET** /orders/{orderId}/customer | Retrieve the customer associated to the order
[**gETOrderIdMarket()**](HasOneApi.md#gETOrderIdMarket) | **GET** /orders/{orderId}/market | Retrieve the market associated to the order
[**gETOrderIdPaymentMethod()**](HasOneApi.md#gETOrderIdPaymentMethod) | **GET** /orders/{orderId}/payment_method | Retrieve the payment method associated to the order
[**gETOrderIdShippingAddress()**](HasOneApi.md#gETOrderIdShippingAddress) | **GET** /orders/{orderId}/shipping_address | Retrieve the shipping address associated to the order
[**gETPackageIdStockLocation()**](HasOneApi.md#gETPackageIdStockLocation) | **GET** /packages/{packageId}/stock_location | Retrieve the stock location associated to the package
[**gETParcelIdPackage()**](HasOneApi.md#gETParcelIdPackage) | **GET** /parcels/{parcelId}/package | Retrieve the package associated to the parcel
[**gETParcelIdShipment()**](HasOneApi.md#gETParcelIdShipment) | **GET** /parcels/{parcelId}/shipment | Retrieve the shipment associated to the parcel
[**gETParcelLineItemIdParcel()**](HasOneApi.md#gETParcelLineItemIdParcel) | **GET** /parcel_line_items/{parcelLineItemId}/parcel | Retrieve the parcel associated to the parcel line item
[**gETParcelLineItemIdShipmentLineItem()**](HasOneApi.md#gETParcelLineItemIdShipmentLineItem) | **GET** /parcel_line_items/{parcelLineItemId}/shipment_line_item | Retrieve the shipment line item associated to the parcel line item
[**gETParcelLineItemIdStockLineItem()**](HasOneApi.md#gETParcelLineItemIdStockLineItem) | **GET** /parcel_line_items/{parcelLineItemId}/stock_line_item | Retrieve the stock line item associated to the parcel line item
[**gETPaymentMethodIdMarket()**](HasOneApi.md#gETPaymentMethodIdMarket) | **GET** /payment_methods/{paymentMethodId}/market | Retrieve the market associated to the payment method
[**gETPaymentMethodIdPaymentGateway()**](HasOneApi.md#gETPaymentMethodIdPaymentGateway) | **GET** /payment_methods/{paymentMethodId}/payment_gateway | Retrieve the payment gateway associated to the payment method
[**gETPaypalPaymentIdOrder()**](HasOneApi.md#gETPaypalPaymentIdOrder) | **GET** /paypal_payments/{paypalPaymentId}/order | Retrieve the order associated to the paypal payment
[**gETPaypalPaymentIdPaymentGateway()**](HasOneApi.md#gETPaypalPaymentIdPaymentGateway) | **GET** /paypal_payments/{paypalPaymentId}/payment_gateway | Retrieve the payment gateway associated to the paypal payment
[**gETPercentageDiscountPromotionIdCouponCodesPromotionRule()**](HasOneApi.md#gETPercentageDiscountPromotionIdCouponCodesPromotionRule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the percentage discount promotion
[**gETPercentageDiscountPromotionIdMarket()**](HasOneApi.md#gETPercentageDiscountPromotionIdMarket) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/market | Retrieve the market associated to the percentage discount promotion
[**gETPercentageDiscountPromotionIdOrderAmountPromotionRule()**](HasOneApi.md#gETPercentageDiscountPromotionIdOrderAmountPromotionRule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the percentage discount promotion
[**gETPercentageDiscountPromotionIdSkuList()**](HasOneApi.md#gETPercentageDiscountPromotionIdSkuList) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/sku_list | Retrieve the sku list associated to the percentage discount promotion
[**gETPercentageDiscountPromotionIdSkuListPromotionRule()**](HasOneApi.md#gETPercentageDiscountPromotionIdSkuListPromotionRule) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the percentage discount promotion
[**gETPriceIdPriceList()**](HasOneApi.md#gETPriceIdPriceList) | **GET** /prices/{priceId}/price_list | Retrieve the price list associated to the price
[**gETPriceIdSku()**](HasOneApi.md#gETPriceIdSku) | **GET** /prices/{priceId}/sku | Retrieve the sku associated to the price
[**gETPromotionIdCouponCodesPromotionRule()**](HasOneApi.md#gETPromotionIdCouponCodesPromotionRule) | **GET** /promotions/{promotionId}/coupon_codes_promotion_rule | Retrieve the coupon codes promotion rule associated to the promotion
[**gETPromotionIdMarket()**](HasOneApi.md#gETPromotionIdMarket) | **GET** /promotions/{promotionId}/market | Retrieve the market associated to the promotion
[**gETPromotionIdOrderAmountPromotionRule()**](HasOneApi.md#gETPromotionIdOrderAmountPromotionRule) | **GET** /promotions/{promotionId}/order_amount_promotion_rule | Retrieve the order amount promotion rule associated to the promotion
[**gETPromotionIdSkuListPromotionRule()**](HasOneApi.md#gETPromotionIdSkuListPromotionRule) | **GET** /promotions/{promotionId}/sku_list_promotion_rule | Retrieve the sku list promotion rule associated to the promotion
[**gETRefundIdOrder()**](HasOneApi.md#gETRefundIdOrder) | **GET** /refunds/{refundId}/order | Retrieve the order associated to the refund
[**gETRefundIdReferenceCapture()**](HasOneApi.md#gETRefundIdReferenceCapture) | **GET** /refunds/{refundId}/reference_capture | Retrieve the reference capture associated to the refund
[**gETReturnIdCustomer()**](HasOneApi.md#gETReturnIdCustomer) | **GET** /returns/{returnId}/customer | Retrieve the customer associated to the return
[**gETReturnIdDestinationAddress()**](HasOneApi.md#gETReturnIdDestinationAddress) | **GET** /returns/{returnId}/destination_address | Retrieve the destination address associated to the return
[**gETReturnIdOrder()**](HasOneApi.md#gETReturnIdOrder) | **GET** /returns/{returnId}/order | Retrieve the order associated to the return
[**gETReturnIdOriginAddress()**](HasOneApi.md#gETReturnIdOriginAddress) | **GET** /returns/{returnId}/origin_address | Retrieve the origin address associated to the return
[**gETReturnIdStockLocation()**](HasOneApi.md#gETReturnIdStockLocation) | **GET** /returns/{returnId}/stock_location | Retrieve the stock location associated to the return
[**gETReturnLineItemIdLineItem()**](HasOneApi.md#gETReturnLineItemIdLineItem) | **GET** /return_line_items/{returnLineItemId}/line_item | Retrieve the line item associated to the return line item
[**gETReturnLineItemIdReturn()**](HasOneApi.md#gETReturnLineItemIdReturn) | **GET** /return_line_items/{returnLineItemId}/return | Retrieve the return associated to the return line item
[**gETShipmentIdDeliveryLeadTime()**](HasOneApi.md#gETShipmentIdDeliveryLeadTime) | **GET** /shipments/{shipmentId}/delivery_lead_time | Retrieve the delivery lead time associated to the shipment
[**gETShipmentIdOrder()**](HasOneApi.md#gETShipmentIdOrder) | **GET** /shipments/{shipmentId}/order | Retrieve the order associated to the shipment
[**gETShipmentIdOriginAddress()**](HasOneApi.md#gETShipmentIdOriginAddress) | **GET** /shipments/{shipmentId}/origin_address | Retrieve the origin address associated to the shipment
[**gETShipmentIdShippingAddress()**](HasOneApi.md#gETShipmentIdShippingAddress) | **GET** /shipments/{shipmentId}/shipping_address | Retrieve the shipping address associated to the shipment
[**gETShipmentIdShippingCategory()**](HasOneApi.md#gETShipmentIdShippingCategory) | **GET** /shipments/{shipmentId}/shipping_category | Retrieve the shipping category associated to the shipment
[**gETShipmentIdShippingMethod()**](HasOneApi.md#gETShipmentIdShippingMethod) | **GET** /shipments/{shipmentId}/shipping_method | Retrieve the shipping method associated to the shipment
[**gETShipmentIdStockLocation()**](HasOneApi.md#gETShipmentIdStockLocation) | **GET** /shipments/{shipmentId}/stock_location | Retrieve the stock location associated to the shipment
[**gETShippingMethodIdDeliveryLeadTimeForShipment()**](HasOneApi.md#gETShippingMethodIdDeliveryLeadTimeForShipment) | **GET** /shipping_methods/{shippingMethodId}/delivery_lead_time_for_shipment | Retrieve the delivery lead time for shipment associated to the shipping method
[**gETShippingMethodIdMarket()**](HasOneApi.md#gETShippingMethodIdMarket) | **GET** /shipping_methods/{shippingMethodId}/market | Retrieve the market associated to the shipping method
[**gETShippingMethodIdShippingCategory()**](HasOneApi.md#gETShippingMethodIdShippingCategory) | **GET** /shipping_methods/{shippingMethodId}/shipping_category | Retrieve the shipping category associated to the shipping method
[**gETShippingMethodIdShippingZone()**](HasOneApi.md#gETShippingMethodIdShippingZone) | **GET** /shipping_methods/{shippingMethodId}/shipping_zone | Retrieve the shipping zone associated to the shipping method
[**gETSkuIdShippingCategory()**](HasOneApi.md#gETSkuIdShippingCategory) | **GET** /skus/{skuId}/shipping_category | Retrieve the shipping category associated to the SKU
[**gETSkuListItemIdSku()**](HasOneApi.md#gETSkuListItemIdSku) | **GET** /sku_list_items/{skuListItemId}/sku | Retrieve the sku associated to the SKU list item
[**gETSkuListItemIdSkuList()**](HasOneApi.md#gETSkuListItemIdSkuList) | **GET** /sku_list_items/{skuListItemId}/sku_list | Retrieve the sku list associated to the SKU list item
[**gETSkuListPromotionRuleIdSkuList()**](HasOneApi.md#gETSkuListPromotionRuleIdSkuList) | **GET** /sku_list_promotion_rules/{skuListPromotionRuleId}/sku_list | Retrieve the sku list associated to the SKU list promotion rule
[**gETSkuOptionIdMarket()**](HasOneApi.md#gETSkuOptionIdMarket) | **GET** /sku_options/{skuOptionId}/market | Retrieve the market associated to the SKU option
[**gETStockItemIdSku()**](HasOneApi.md#gETStockItemIdSku) | **GET** /stock_items/{stockItemId}/sku | Retrieve the sku associated to the stock item
[**gETStockItemIdStockLocation()**](HasOneApi.md#gETStockItemIdStockLocation) | **GET** /stock_items/{stockItemId}/stock_location | Retrieve the stock location associated to the stock item
[**gETStockLineItemIdLineItem()**](HasOneApi.md#gETStockLineItemIdLineItem) | **GET** /stock_line_items/{stockLineItemId}/line_item | Retrieve the line item associated to the stock line item
[**gETStockLineItemIdShipment()**](HasOneApi.md#gETStockLineItemIdShipment) | **GET** /stock_line_items/{stockLineItemId}/shipment | Retrieve the shipment associated to the stock line item
[**gETStockLineItemIdStockItem()**](HasOneApi.md#gETStockLineItemIdStockItem) | **GET** /stock_line_items/{stockLineItemId}/stock_item | Retrieve the stock item associated to the stock line item
[**gETStockLocationIdAddress()**](HasOneApi.md#gETStockLocationIdAddress) | **GET** /stock_locations/{stockLocationId}/address | Retrieve the address associated to the stock location
[**gETStockTransferIdDestinationStockLocation()**](HasOneApi.md#gETStockTransferIdDestinationStockLocation) | **GET** /stock_transfers/{stockTransferId}/destination_stock_location | Retrieve the destination stock location associated to the stock transfer
[**gETStockTransferIdLineItem()**](HasOneApi.md#gETStockTransferIdLineItem) | **GET** /stock_transfers/{stockTransferId}/line_item | Retrieve the line item associated to the stock transfer
[**gETStockTransferIdOriginStockLocation()**](HasOneApi.md#gETStockTransferIdOriginStockLocation) | **GET** /stock_transfers/{stockTransferId}/origin_stock_location | Retrieve the origin stock location associated to the stock transfer
[**gETStockTransferIdShipment()**](HasOneApi.md#gETStockTransferIdShipment) | **GET** /stock_transfers/{stockTransferId}/shipment | Retrieve the shipment associated to the stock transfer
[**gETStockTransferIdSku()**](HasOneApi.md#gETStockTransferIdSku) | **GET** /stock_transfers/{stockTransferId}/sku | Retrieve the sku associated to the stock transfer
[**gETStripePaymentIdOrder()**](HasOneApi.md#gETStripePaymentIdOrder) | **GET** /stripe_payments/{stripePaymentId}/order | Retrieve the order associated to the stripe payment
[**gETStripePaymentIdPaymentGateway()**](HasOneApi.md#gETStripePaymentIdPaymentGateway) | **GET** /stripe_payments/{stripePaymentId}/payment_gateway | Retrieve the payment gateway associated to the stripe payment
[**gETTaxCategoryIdSku()**](HasOneApi.md#gETTaxCategoryIdSku) | **GET** /tax_categories/{taxCategoryId}/sku | Retrieve the sku associated to the tax category
[**gETTransactionIdOrder()**](HasOneApi.md#gETTransactionIdOrder) | **GET** /transactions/{transactionId}/order | Retrieve the order associated to the transaction
[**gETVoidIdOrder()**](HasOneApi.md#gETVoidIdOrder) | **GET** /voids/{voidId}/order | Retrieve the order associated to the void
[**gETVoidIdReferenceAuthorization()**](HasOneApi.md#gETVoidIdReferenceAuthorization) | **GET** /voids/{voidId}/reference_authorization | Retrieve the reference authorization associated to the void
[**gETWireTransferIdOrder()**](HasOneApi.md#gETWireTransferIdOrder) | **GET** /wire_transfers/{wireTransferId}/order | Retrieve the order associated to the wire transfer


## `gETAddressIdGeocoder()`

```php
gETAddressIdGeocoder($address_id)
```

Retrieve the geocoder associated to the address

Retrieve the geocoder associated to the address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_id = 'address_id_example'; // string | The resource's id

try {
    $apiInstance->gETAddressIdGeocoder($address_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETAddressIdGeocoder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETAdyenPaymentIdOrder()`

```php
gETAdyenPaymentIdOrder($adyen_payment_id)
```

Retrieve the order associated to the adyen payment

Retrieve the order associated to the adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_id = 'adyen_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETAdyenPaymentIdOrder($adyen_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETAdyenPaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETAdyenPaymentIdPaymentGateway()`

```php
gETAdyenPaymentIdPaymentGateway($adyen_payment_id)
```

Retrieve the payment gateway associated to the adyen payment

Retrieve the payment gateway associated to the adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_id = 'adyen_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETAdyenPaymentIdPaymentGateway($adyen_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETAdyenPaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETAuthorizationIdOrder()`

```php
gETAuthorizationIdOrder($authorization_id)
```

Retrieve the order associated to the authorization

Retrieve the order associated to the authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_id = 'authorization_id_example'; // string | The resource's id

try {
    $apiInstance->gETAuthorizationIdOrder($authorization_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETAuthorizationIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETBillingInfoValidationRuleIdMarket()`

```php
gETBillingInfoValidationRuleIdMarket($billing_info_validation_rule_id)
```

Retrieve the market associated to the billing info validation rule

Retrieve the market associated to the billing info validation rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_info_validation_rule_id = 'billing_info_validation_rule_id_example'; // string | The resource's id

try {
    $apiInstance->gETBillingInfoValidationRuleIdMarket($billing_info_validation_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETBillingInfoValidationRuleIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_info_validation_rule_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETBraintreePaymentIdOrder()`

```php
gETBraintreePaymentIdOrder($braintree_payment_id)
```

Retrieve the order associated to the braintree payment

Retrieve the order associated to the braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_id = 'braintree_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETBraintreePaymentIdOrder($braintree_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETBraintreePaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETBraintreePaymentIdPaymentGateway()`

```php
gETBraintreePaymentIdPaymentGateway($braintree_payment_id)
```

Retrieve the payment gateway associated to the braintree payment

Retrieve the payment gateway associated to the braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_id = 'braintree_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETBraintreePaymentIdPaymentGateway($braintree_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETBraintreePaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCaptureIdOrder()`

```php
gETCaptureIdOrder($capture_id)
```

Retrieve the order associated to the capture

Retrieve the order associated to the capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_id = 'capture_id_example'; // string | The resource's id

try {
    $apiInstance->gETCaptureIdOrder($capture_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCaptureIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCaptureIdReferenceAuthorization()`

```php
gETCaptureIdReferenceAuthorization($capture_id)
```

Retrieve the reference authorization associated to the capture

Retrieve the reference authorization associated to the capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_id = 'capture_id_example'; // string | The resource's id

try {
    $apiInstance->gETCaptureIdReferenceAuthorization($capture_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCaptureIdReferenceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCarrierAccountIdMarket()`

```php
gETCarrierAccountIdMarket($carrier_account_id)
```

Retrieve the market associated to the carrier account

Retrieve the market associated to the carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = 'carrier_account_id_example'; // string | The resource's id

try {
    $apiInstance->gETCarrierAccountIdMarket($carrier_account_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCarrierAccountIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_account_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCheckoutComPaymentIdOrder()`

```php
gETCheckoutComPaymentIdOrder($checkout_com_payment_id)
```

Retrieve the order associated to the checkout com payment

Retrieve the order associated to the checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_id = 'checkout_com_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETCheckoutComPaymentIdOrder($checkout_com_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCheckoutComPaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCheckoutComPaymentIdPaymentGateway()`

```php
gETCheckoutComPaymentIdPaymentGateway($checkout_com_payment_id)
```

Retrieve the payment gateway associated to the checkout com payment

Retrieve the payment gateway associated to the checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_id = 'checkout_com_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETCheckoutComPaymentIdPaymentGateway($checkout_com_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCheckoutComPaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCouponIdPromotionRule()`

```php
gETCouponIdPromotionRule($coupon_id)
```

Retrieve the promotion rule associated to the coupon

Retrieve the promotion rule associated to the coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_id = 'coupon_id_example'; // string | The resource's id

try {
    $apiInstance->gETCouponIdPromotionRule($coupon_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCouponIdPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerAddressIdAddress()`

```php
gETCustomerAddressIdAddress($customer_address_id)
```

Retrieve the address associated to the customer address

Retrieve the address associated to the customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_id = 'customer_address_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerAddressIdAddress($customer_address_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerAddressIdAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerAddressIdCustomer()`

```php
gETCustomerAddressIdCustomer($customer_address_id)
```

Retrieve the customer associated to the customer address

Retrieve the customer associated to the customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_id = 'customer_address_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerAddressIdCustomer($customer_address_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerAddressIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerIdCustomerGroup()`

```php
gETCustomerIdCustomerGroup($customer_id)
```

Retrieve the customer group associated to the customer

Retrieve the customer group associated to the customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerIdCustomerGroup($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerIdCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerPasswordResetIdCustomer()`

```php
gETCustomerPasswordResetIdCustomer($customer_password_reset_id)
```

Retrieve the customer associated to the customer password reset

Retrieve the customer associated to the customer password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_password_reset_id = 'customer_password_reset_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerPasswordResetIdCustomer($customer_password_reset_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerPasswordResetIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_password_reset_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerPaymentSourceIdCustomer()`

```php
gETCustomerPaymentSourceIdCustomer($customer_payment_source_id)
```

Retrieve the customer associated to the customer payment source

Retrieve the customer associated to the customer payment source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_payment_source_id = 'customer_payment_source_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerPaymentSourceIdCustomer($customer_payment_source_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerPaymentSourceIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_payment_source_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETCustomerSubscriptionIdCustomer()`

```php
gETCustomerSubscriptionIdCustomer($customer_subscription_id)
```

Retrieve the customer associated to the customer subscription

Retrieve the customer associated to the customer subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_subscription_id = 'customer_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->gETCustomerSubscriptionIdCustomer($customer_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETCustomerSubscriptionIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_subscription_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETDeliveryLeadTimeIdShippingMethod()`

```php
gETDeliveryLeadTimeIdShippingMethod($delivery_lead_time_id)
```

Retrieve the shipping method associated to the delivery lead time

Retrieve the shipping method associated to the delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_id = 'delivery_lead_time_id_example'; // string | The resource's id

try {
    $apiInstance->gETDeliveryLeadTimeIdShippingMethod($delivery_lead_time_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETDeliveryLeadTimeIdShippingMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETDeliveryLeadTimeIdStockLocation()`

```php
gETDeliveryLeadTimeIdStockLocation($delivery_lead_time_id)
```

Retrieve the stock location associated to the delivery lead time

Retrieve the stock location associated to the delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_id = 'delivery_lead_time_id_example'; // string | The resource's id

try {
    $apiInstance->gETDeliveryLeadTimeIdStockLocation($delivery_lead_time_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETDeliveryLeadTimeIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPaymentIdOrder()`

```php
gETExternalPaymentIdOrder($external_payment_id)
```

Retrieve the order associated to the external payment

Retrieve the order associated to the external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_id = 'external_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPaymentIdOrder($external_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPaymentIdPaymentGateway()`

```php
gETExternalPaymentIdPaymentGateway($external_payment_id)
```

Retrieve the payment gateway associated to the external payment

Retrieve the payment gateway associated to the external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_id = 'external_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPaymentIdPaymentGateway($external_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPromotionIdCouponCodesPromotionRule()`

```php
gETExternalPromotionIdCouponCodesPromotionRule($external_promotion_id)
```

Retrieve the coupon codes promotion rule associated to the external promotion

Retrieve the coupon codes promotion rule associated to the external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPromotionIdCouponCodesPromotionRule($external_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPromotionIdCouponCodesPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPromotionIdMarket()`

```php
gETExternalPromotionIdMarket($external_promotion_id)
```

Retrieve the market associated to the external promotion

Retrieve the market associated to the external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPromotionIdMarket($external_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPromotionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPromotionIdOrderAmountPromotionRule()`

```php
gETExternalPromotionIdOrderAmountPromotionRule($external_promotion_id)
```

Retrieve the order amount promotion rule associated to the external promotion

Retrieve the order amount promotion rule associated to the external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPromotionIdOrderAmountPromotionRule($external_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPromotionIdOrderAmountPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETExternalPromotionIdSkuListPromotionRule()`

```php
gETExternalPromotionIdSkuListPromotionRule($external_promotion_id)
```

Retrieve the sku list promotion rule associated to the external promotion

Retrieve the sku list promotion rule associated to the external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETExternalPromotionIdSkuListPromotionRule($external_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETExternalPromotionIdSkuListPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFixedAmountPromotionIdCouponCodesPromotionRule()`

```php
gETFixedAmountPromotionIdCouponCodesPromotionRule($fixed_amount_promotion_id)
```

Retrieve the coupon codes promotion rule associated to the fixed amount promotion

Retrieve the coupon codes promotion rule associated to the fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFixedAmountPromotionIdCouponCodesPromotionRule($fixed_amount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFixedAmountPromotionIdCouponCodesPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFixedAmountPromotionIdMarket()`

```php
gETFixedAmountPromotionIdMarket($fixed_amount_promotion_id)
```

Retrieve the market associated to the fixed amount promotion

Retrieve the market associated to the fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFixedAmountPromotionIdMarket($fixed_amount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFixedAmountPromotionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFixedAmountPromotionIdOrderAmountPromotionRule()`

```php
gETFixedAmountPromotionIdOrderAmountPromotionRule($fixed_amount_promotion_id)
```

Retrieve the order amount promotion rule associated to the fixed amount promotion

Retrieve the order amount promotion rule associated to the fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFixedAmountPromotionIdOrderAmountPromotionRule($fixed_amount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFixedAmountPromotionIdOrderAmountPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFixedAmountPromotionIdSkuListPromotionRule()`

```php
gETFixedAmountPromotionIdSkuListPromotionRule($fixed_amount_promotion_id)
```

Retrieve the sku list promotion rule associated to the fixed amount promotion

Retrieve the sku list promotion rule associated to the fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFixedAmountPromotionIdSkuListPromotionRule($fixed_amount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFixedAmountPromotionIdSkuListPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFreeShippingPromotionIdCouponCodesPromotionRule()`

```php
gETFreeShippingPromotionIdCouponCodesPromotionRule($free_shipping_promotion_id)
```

Retrieve the coupon codes promotion rule associated to the free shipping promotion

Retrieve the coupon codes promotion rule associated to the free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFreeShippingPromotionIdCouponCodesPromotionRule($free_shipping_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFreeShippingPromotionIdCouponCodesPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFreeShippingPromotionIdMarket()`

```php
gETFreeShippingPromotionIdMarket($free_shipping_promotion_id)
```

Retrieve the market associated to the free shipping promotion

Retrieve the market associated to the free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFreeShippingPromotionIdMarket($free_shipping_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFreeShippingPromotionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFreeShippingPromotionIdOrderAmountPromotionRule()`

```php
gETFreeShippingPromotionIdOrderAmountPromotionRule($free_shipping_promotion_id)
```

Retrieve the order amount promotion rule associated to the free shipping promotion

Retrieve the order amount promotion rule associated to the free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFreeShippingPromotionIdOrderAmountPromotionRule($free_shipping_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFreeShippingPromotionIdOrderAmountPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETFreeShippingPromotionIdSkuListPromotionRule()`

```php
gETFreeShippingPromotionIdSkuListPromotionRule($free_shipping_promotion_id)
```

Retrieve the sku list promotion rule associated to the free shipping promotion

Retrieve the sku list promotion rule associated to the free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETFreeShippingPromotionIdSkuListPromotionRule($free_shipping_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETFreeShippingPromotionIdSkuListPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETGiftCardIdGiftCardRecipient()`

```php
gETGiftCardIdGiftCardRecipient($gift_card_id)
```

Retrieve the gift card recipient associated to the gift card

Retrieve the gift card recipient associated to the gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_id = 'gift_card_id_example'; // string | The resource's id

try {
    $apiInstance->gETGiftCardIdGiftCardRecipient($gift_card_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETGiftCardIdGiftCardRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETGiftCardIdMarket()`

```php
gETGiftCardIdMarket($gift_card_id)
```

Retrieve the market associated to the gift card

Retrieve the market associated to the gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_id = 'gift_card_id_example'; // string | The resource's id

try {
    $apiInstance->gETGiftCardIdMarket($gift_card_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETGiftCardIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETGiftCardRecipientIdCustomer()`

```php
gETGiftCardRecipientIdCustomer($gift_card_recipient_id)
```

Retrieve the customer associated to the gift card recipient

Retrieve the customer associated to the gift card recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_recipient_id = 'gift_card_recipient_id_example'; // string | The resource's id

try {
    $apiInstance->gETGiftCardRecipientIdCustomer($gift_card_recipient_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETGiftCardRecipientIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_recipient_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInStockSubscriptionIdCustomer()`

```php
gETInStockSubscriptionIdCustomer($in_stock_subscription_id)
```

Retrieve the customer associated to the in stock subscription

Retrieve the customer associated to the in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->gETInStockSubscriptionIdCustomer($in_stock_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInStockSubscriptionIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInStockSubscriptionIdMarket()`

```php
gETInStockSubscriptionIdMarket($in_stock_subscription_id)
```

Retrieve the market associated to the in stock subscription

Retrieve the market associated to the in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->gETInStockSubscriptionIdMarket($in_stock_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInStockSubscriptionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInStockSubscriptionIdSku()`

```php
gETInStockSubscriptionIdSku($in_stock_subscription_id)
```

Retrieve the sku associated to the in stock subscription

Retrieve the sku associated to the in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->gETInStockSubscriptionIdSku($in_stock_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInStockSubscriptionIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInventoryReturnLocationIdInventoryModel()`

```php
gETInventoryReturnLocationIdInventoryModel($inventory_return_location_id)
```

Retrieve the inventory model associated to the inventory return location

Retrieve the inventory model associated to the inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_id = 'inventory_return_location_id_example'; // string | The resource's id

try {
    $apiInstance->gETInventoryReturnLocationIdInventoryModel($inventory_return_location_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInventoryReturnLocationIdInventoryModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInventoryReturnLocationIdStockLocation()`

```php
gETInventoryReturnLocationIdStockLocation($inventory_return_location_id)
```

Retrieve the stock location associated to the inventory return location

Retrieve the stock location associated to the inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_id = 'inventory_return_location_id_example'; // string | The resource's id

try {
    $apiInstance->gETInventoryReturnLocationIdStockLocation($inventory_return_location_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInventoryReturnLocationIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInventoryStockLocationIdInventoryModel()`

```php
gETInventoryStockLocationIdInventoryModel($inventory_stock_location_id)
```

Retrieve the inventory model associated to the inventory stock location

Retrieve the inventory model associated to the inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_id = 'inventory_stock_location_id_example'; // string | The resource's id

try {
    $apiInstance->gETInventoryStockLocationIdInventoryModel($inventory_stock_location_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInventoryStockLocationIdInventoryModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETInventoryStockLocationIdStockLocation()`

```php
gETInventoryStockLocationIdStockLocation($inventory_stock_location_id)
```

Retrieve the stock location associated to the inventory stock location

Retrieve the stock location associated to the inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_id = 'inventory_stock_location_id_example'; // string | The resource's id

try {
    $apiInstance->gETInventoryStockLocationIdStockLocation($inventory_stock_location_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETInventoryStockLocationIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETLineItemIdOrder()`

```php
gETLineItemIdOrder($line_item_id)
```

Retrieve the order associated to the line item

Retrieve the order associated to the line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_id = 'line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETLineItemIdOrder($line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETLineItemIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETLineItemOptionIdLineItem()`

```php
gETLineItemOptionIdLineItem($line_item_option_id)
```

Retrieve the line item associated to the line item option

Retrieve the line item associated to the line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_id = 'line_item_option_id_example'; // string | The resource's id

try {
    $apiInstance->gETLineItemOptionIdLineItem($line_item_option_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETLineItemOptionIdLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETLineItemOptionIdSkuOption()`

```php
gETLineItemOptionIdSkuOption($line_item_option_id)
```

Retrieve the sku option associated to the line item option

Retrieve the sku option associated to the line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_id = 'line_item_option_id_example'; // string | The resource's id

try {
    $apiInstance->gETLineItemOptionIdSkuOption($line_item_option_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETLineItemOptionIdSkuOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETMarketIdCustomerGroup()`

```php
gETMarketIdCustomerGroup($market_id)
```

Retrieve the customer group associated to the market

Retrieve the customer group associated to the market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $apiInstance->gETMarketIdCustomerGroup($market_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETMarketIdCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETMarketIdInventoryModel()`

```php
gETMarketIdInventoryModel($market_id)
```

Retrieve the inventory model associated to the market

Retrieve the inventory model associated to the market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $apiInstance->gETMarketIdInventoryModel($market_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETMarketIdInventoryModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETMarketIdMerchant()`

```php
gETMarketIdMerchant($market_id)
```

Retrieve the merchant associated to the market

Retrieve the merchant associated to the market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $apiInstance->gETMarketIdMerchant($market_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETMarketIdMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETMarketIdPriceList()`

```php
gETMarketIdPriceList($market_id)
```

Retrieve the price list associated to the market

Retrieve the price list associated to the market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $apiInstance->gETMarketIdPriceList($market_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETMarketIdPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETMerchantIdAddress()`

```php
gETMerchantIdAddress($merchant_id)
```

Retrieve the address associated to the merchant

Retrieve the address associated to the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The resource's id

try {
    $apiInstance->gETMerchantIdAddress($merchant_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETMerchantIdAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETOrderIdBillingAddress()`

```php
gETOrderIdBillingAddress($order_id)
```

Retrieve the billing address associated to the order

Retrieve the billing address associated to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->gETOrderIdBillingAddress($order_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETOrderIdBillingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETOrderIdCustomer()`

```php
gETOrderIdCustomer($order_id)
```

Retrieve the customer associated to the order

Retrieve the customer associated to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->gETOrderIdCustomer($order_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETOrderIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETOrderIdMarket()`

```php
gETOrderIdMarket($order_id)
```

Retrieve the market associated to the order

Retrieve the market associated to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->gETOrderIdMarket($order_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETOrderIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETOrderIdPaymentMethod()`

```php
gETOrderIdPaymentMethod($order_id)
```

Retrieve the payment method associated to the order

Retrieve the payment method associated to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->gETOrderIdPaymentMethod($order_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETOrderIdPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETOrderIdShippingAddress()`

```php
gETOrderIdShippingAddress($order_id)
```

Retrieve the shipping address associated to the order

Retrieve the shipping address associated to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->gETOrderIdShippingAddress($order_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETOrderIdShippingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPackageIdStockLocation()`

```php
gETPackageIdStockLocation($package_id)
```

Retrieve the stock location associated to the package

Retrieve the stock location associated to the package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = 'package_id_example'; // string | The resource's id

try {
    $apiInstance->gETPackageIdStockLocation($package_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPackageIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETParcelIdPackage()`

```php
gETParcelIdPackage($parcel_id)
```

Retrieve the package associated to the parcel

Retrieve the package associated to the parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_id = 'parcel_id_example'; // string | The resource's id

try {
    $apiInstance->gETParcelIdPackage($parcel_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETParcelIdPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETParcelIdShipment()`

```php
gETParcelIdShipment($parcel_id)
```

Retrieve the shipment associated to the parcel

Retrieve the shipment associated to the parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_id = 'parcel_id_example'; // string | The resource's id

try {
    $apiInstance->gETParcelIdShipment($parcel_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETParcelIdShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETParcelLineItemIdParcel()`

```php
gETParcelLineItemIdParcel($parcel_line_item_id)
```

Retrieve the parcel associated to the parcel line item

Retrieve the parcel associated to the parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETParcelLineItemIdParcel($parcel_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETParcelLineItemIdParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETParcelLineItemIdShipmentLineItem()`

```php
gETParcelLineItemIdShipmentLineItem($parcel_line_item_id)
```

Retrieve the shipment line item associated to the parcel line item

Retrieve the shipment line item associated to the parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETParcelLineItemIdShipmentLineItem($parcel_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETParcelLineItemIdShipmentLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETParcelLineItemIdStockLineItem()`

```php
gETParcelLineItemIdStockLineItem($parcel_line_item_id)
```

Retrieve the stock line item associated to the parcel line item

Retrieve the stock line item associated to the parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETParcelLineItemIdStockLineItem($parcel_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETParcelLineItemIdStockLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPaymentMethodIdMarket()`

```php
gETPaymentMethodIdMarket($payment_method_id)
```

Retrieve the market associated to the payment method

Retrieve the market associated to the payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 'payment_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETPaymentMethodIdMarket($payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPaymentMethodIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPaymentMethodIdPaymentGateway()`

```php
gETPaymentMethodIdPaymentGateway($payment_method_id)
```

Retrieve the payment gateway associated to the payment method

Retrieve the payment gateway associated to the payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 'payment_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETPaymentMethodIdPaymentGateway($payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPaymentMethodIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPaypalPaymentIdOrder()`

```php
gETPaypalPaymentIdOrder($paypal_payment_id)
```

Retrieve the order associated to the paypal payment

Retrieve the order associated to the paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_id = 'paypal_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETPaypalPaymentIdOrder($paypal_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPaypalPaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPaypalPaymentIdPaymentGateway()`

```php
gETPaypalPaymentIdPaymentGateway($paypal_payment_id)
```

Retrieve the payment gateway associated to the paypal payment

Retrieve the payment gateway associated to the paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_id = 'paypal_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETPaypalPaymentIdPaymentGateway($paypal_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPaypalPaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPercentageDiscountPromotionIdCouponCodesPromotionRule()`

```php
gETPercentageDiscountPromotionIdCouponCodesPromotionRule($percentage_discount_promotion_id)
```

Retrieve the coupon codes promotion rule associated to the percentage discount promotion

Retrieve the coupon codes promotion rule associated to the percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPercentageDiscountPromotionIdCouponCodesPromotionRule($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPercentageDiscountPromotionIdCouponCodesPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPercentageDiscountPromotionIdMarket()`

```php
gETPercentageDiscountPromotionIdMarket($percentage_discount_promotion_id)
```

Retrieve the market associated to the percentage discount promotion

Retrieve the market associated to the percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPercentageDiscountPromotionIdMarket($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPercentageDiscountPromotionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPercentageDiscountPromotionIdOrderAmountPromotionRule()`

```php
gETPercentageDiscountPromotionIdOrderAmountPromotionRule($percentage_discount_promotion_id)
```

Retrieve the order amount promotion rule associated to the percentage discount promotion

Retrieve the order amount promotion rule associated to the percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPercentageDiscountPromotionIdOrderAmountPromotionRule($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPercentageDiscountPromotionIdOrderAmountPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPercentageDiscountPromotionIdSkuList()`

```php
gETPercentageDiscountPromotionIdSkuList($percentage_discount_promotion_id)
```

Retrieve the sku list associated to the percentage discount promotion

Retrieve the sku list associated to the percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPercentageDiscountPromotionIdSkuList($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPercentageDiscountPromotionIdSkuList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPercentageDiscountPromotionIdSkuListPromotionRule()`

```php
gETPercentageDiscountPromotionIdSkuListPromotionRule($percentage_discount_promotion_id)
```

Retrieve the sku list promotion rule associated to the percentage discount promotion

Retrieve the sku list promotion rule associated to the percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPercentageDiscountPromotionIdSkuListPromotionRule($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPercentageDiscountPromotionIdSkuListPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPriceIdPriceList()`

```php
gETPriceIdPriceList($price_id)
```

Retrieve the price list associated to the price

Retrieve the price list associated to the price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_id = 'price_id_example'; // string | The resource's id

try {
    $apiInstance->gETPriceIdPriceList($price_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPriceIdPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPriceIdSku()`

```php
gETPriceIdSku($price_id)
```

Retrieve the sku associated to the price

Retrieve the sku associated to the price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_id = 'price_id_example'; // string | The resource's id

try {
    $apiInstance->gETPriceIdSku($price_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPriceIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPromotionIdCouponCodesPromotionRule()`

```php
gETPromotionIdCouponCodesPromotionRule($promotion_id)
```

Retrieve the coupon codes promotion rule associated to the promotion

Retrieve the coupon codes promotion rule associated to the promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPromotionIdCouponCodesPromotionRule($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPromotionIdCouponCodesPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPromotionIdMarket()`

```php
gETPromotionIdMarket($promotion_id)
```

Retrieve the market associated to the promotion

Retrieve the market associated to the promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPromotionIdMarket($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPromotionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPromotionIdOrderAmountPromotionRule()`

```php
gETPromotionIdOrderAmountPromotionRule($promotion_id)
```

Retrieve the order amount promotion rule associated to the promotion

Retrieve the order amount promotion rule associated to the promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPromotionIdOrderAmountPromotionRule($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPromotionIdOrderAmountPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETPromotionIdSkuListPromotionRule()`

```php
gETPromotionIdSkuListPromotionRule($promotion_id)
```

Retrieve the sku list promotion rule associated to the promotion

Retrieve the sku list promotion rule associated to the promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $apiInstance->gETPromotionIdSkuListPromotionRule($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETPromotionIdSkuListPromotionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETRefundIdOrder()`

```php
gETRefundIdOrder($refund_id)
```

Retrieve the order associated to the refund

Retrieve the order associated to the refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | The resource's id

try {
    $apiInstance->gETRefundIdOrder($refund_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETRefundIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETRefundIdReferenceCapture()`

```php
gETRefundIdReferenceCapture($refund_id)
```

Retrieve the reference capture associated to the refund

Retrieve the reference capture associated to the refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | The resource's id

try {
    $apiInstance->gETRefundIdReferenceCapture($refund_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETRefundIdReferenceCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnIdCustomer()`

```php
gETReturnIdCustomer($return_id)
```

Retrieve the customer associated to the return

Retrieve the customer associated to the return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnIdCustomer($return_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnIdCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnIdDestinationAddress()`

```php
gETReturnIdDestinationAddress($return_id)
```

Retrieve the destination address associated to the return

Retrieve the destination address associated to the return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnIdDestinationAddress($return_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnIdDestinationAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnIdOrder()`

```php
gETReturnIdOrder($return_id)
```

Retrieve the order associated to the return

Retrieve the order associated to the return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnIdOrder($return_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnIdOriginAddress()`

```php
gETReturnIdOriginAddress($return_id)
```

Retrieve the origin address associated to the return

Retrieve the origin address associated to the return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnIdOriginAddress($return_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnIdOriginAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnIdStockLocation()`

```php
gETReturnIdStockLocation($return_id)
```

Retrieve the stock location associated to the return

Retrieve the stock location associated to the return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnIdStockLocation($return_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnLineItemIdLineItem()`

```php
gETReturnLineItemIdLineItem($return_line_item_id)
```

Retrieve the line item associated to the return line item

Retrieve the line item associated to the return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_id = 'return_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnLineItemIdLineItem($return_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnLineItemIdLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETReturnLineItemIdReturn()`

```php
gETReturnLineItemIdReturn($return_line_item_id)
```

Retrieve the return associated to the return line item

Retrieve the return associated to the return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_id = 'return_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETReturnLineItemIdReturn($return_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETReturnLineItemIdReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdDeliveryLeadTime()`

```php
gETShipmentIdDeliveryLeadTime($shipment_id)
```

Retrieve the delivery lead time associated to the shipment

Retrieve the delivery lead time associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdDeliveryLeadTime($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdDeliveryLeadTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdOrder()`

```php
gETShipmentIdOrder($shipment_id)
```

Retrieve the order associated to the shipment

Retrieve the order associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdOrder($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdOriginAddress()`

```php
gETShipmentIdOriginAddress($shipment_id)
```

Retrieve the origin address associated to the shipment

Retrieve the origin address associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdOriginAddress($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdOriginAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdShippingAddress()`

```php
gETShipmentIdShippingAddress($shipment_id)
```

Retrieve the shipping address associated to the shipment

Retrieve the shipping address associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdShippingAddress($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdShippingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdShippingCategory()`

```php
gETShipmentIdShippingCategory($shipment_id)
```

Retrieve the shipping category associated to the shipment

Retrieve the shipping category associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdShippingCategory($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdShippingCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdShippingMethod()`

```php
gETShipmentIdShippingMethod($shipment_id)
```

Retrieve the shipping method associated to the shipment

Retrieve the shipping method associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdShippingMethod($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdShippingMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShipmentIdStockLocation()`

```php
gETShipmentIdStockLocation($shipment_id)
```

Retrieve the stock location associated to the shipment

Retrieve the stock location associated to the shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->gETShipmentIdStockLocation($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShipmentIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShippingMethodIdDeliveryLeadTimeForShipment()`

```php
gETShippingMethodIdDeliveryLeadTimeForShipment($shipping_method_id)
```

Retrieve the delivery lead time for shipment associated to the shipping method

Retrieve the delivery lead time for shipment associated to the shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETShippingMethodIdDeliveryLeadTimeForShipment($shipping_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShippingMethodIdDeliveryLeadTimeForShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShippingMethodIdMarket()`

```php
gETShippingMethodIdMarket($shipping_method_id)
```

Retrieve the market associated to the shipping method

Retrieve the market associated to the shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETShippingMethodIdMarket($shipping_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShippingMethodIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShippingMethodIdShippingCategory()`

```php
gETShippingMethodIdShippingCategory($shipping_method_id)
```

Retrieve the shipping category associated to the shipping method

Retrieve the shipping category associated to the shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETShippingMethodIdShippingCategory($shipping_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShippingMethodIdShippingCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETShippingMethodIdShippingZone()`

```php
gETShippingMethodIdShippingZone($shipping_method_id)
```

Retrieve the shipping zone associated to the shipping method

Retrieve the shipping zone associated to the shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $apiInstance->gETShippingMethodIdShippingZone($shipping_method_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETShippingMethodIdShippingZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETSkuIdShippingCategory()`

```php
gETSkuIdShippingCategory($sku_id)
```

Retrieve the shipping category associated to the SKU

Retrieve the shipping category associated to the SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_id = 'sku_id_example'; // string | The resource's id

try {
    $apiInstance->gETSkuIdShippingCategory($sku_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETSkuIdShippingCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETSkuListItemIdSku()`

```php
gETSkuListItemIdSku($sku_list_item_id)
```

Retrieve the sku associated to the SKU list item

Retrieve the sku associated to the SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_id = 'sku_list_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETSkuListItemIdSku($sku_list_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETSkuListItemIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETSkuListItemIdSkuList()`

```php
gETSkuListItemIdSkuList($sku_list_item_id)
```

Retrieve the sku list associated to the SKU list item

Retrieve the sku list associated to the SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_id = 'sku_list_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETSkuListItemIdSkuList($sku_list_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETSkuListItemIdSkuList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETSkuListPromotionRuleIdSkuList()`

```php
gETSkuListPromotionRuleIdSkuList($sku_list_promotion_rule_id)
```

Retrieve the sku list associated to the SKU list promotion rule

Retrieve the sku list associated to the SKU list promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_promotion_rule_id = 'sku_list_promotion_rule_id_example'; // string | The resource's id

try {
    $apiInstance->gETSkuListPromotionRuleIdSkuList($sku_list_promotion_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETSkuListPromotionRuleIdSkuList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_promotion_rule_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETSkuOptionIdMarket()`

```php
gETSkuOptionIdMarket($sku_option_id)
```

Retrieve the market associated to the SKU option

Retrieve the market associated to the SKU option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_option_id = 'sku_option_id_example'; // string | The resource's id

try {
    $apiInstance->gETSkuOptionIdMarket($sku_option_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETSkuOptionIdMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_option_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockItemIdSku()`

```php
gETStockItemIdSku($stock_item_id)
```

Retrieve the sku associated to the stock item

Retrieve the sku associated to the stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_id = 'stock_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockItemIdSku($stock_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockItemIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockItemIdStockLocation()`

```php
gETStockItemIdStockLocation($stock_item_id)
```

Retrieve the stock location associated to the stock item

Retrieve the stock location associated to the stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_id = 'stock_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockItemIdStockLocation($stock_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockItemIdStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockLineItemIdLineItem()`

```php
gETStockLineItemIdLineItem($stock_line_item_id)
```

Retrieve the line item associated to the stock line item

Retrieve the line item associated to the stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockLineItemIdLineItem($stock_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockLineItemIdLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockLineItemIdShipment()`

```php
gETStockLineItemIdShipment($stock_line_item_id)
```

Retrieve the shipment associated to the stock line item

Retrieve the shipment associated to the stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockLineItemIdShipment($stock_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockLineItemIdShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockLineItemIdStockItem()`

```php
gETStockLineItemIdStockItem($stock_line_item_id)
```

Retrieve the stock item associated to the stock line item

Retrieve the stock item associated to the stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockLineItemIdStockItem($stock_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockLineItemIdStockItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockLocationIdAddress()`

```php
gETStockLocationIdAddress($stock_location_id)
```

Retrieve the address associated to the stock location

Retrieve the address associated to the stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_location_id = 'stock_location_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockLocationIdAddress($stock_location_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockLocationIdAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_location_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockTransferIdDestinationStockLocation()`

```php
gETStockTransferIdDestinationStockLocation($stock_transfer_id)
```

Retrieve the destination stock location associated to the stock transfer

Retrieve the destination stock location associated to the stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockTransferIdDestinationStockLocation($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockTransferIdDestinationStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockTransferIdLineItem()`

```php
gETStockTransferIdLineItem($stock_transfer_id)
```

Retrieve the line item associated to the stock transfer

Retrieve the line item associated to the stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockTransferIdLineItem($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockTransferIdLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockTransferIdOriginStockLocation()`

```php
gETStockTransferIdOriginStockLocation($stock_transfer_id)
```

Retrieve the origin stock location associated to the stock transfer

Retrieve the origin stock location associated to the stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockTransferIdOriginStockLocation($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockTransferIdOriginStockLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockTransferIdShipment()`

```php
gETStockTransferIdShipment($stock_transfer_id)
```

Retrieve the shipment associated to the stock transfer

Retrieve the shipment associated to the stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockTransferIdShipment($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockTransferIdShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStockTransferIdSku()`

```php
gETStockTransferIdSku($stock_transfer_id)
```

Retrieve the sku associated to the stock transfer

Retrieve the sku associated to the stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETStockTransferIdSku($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStockTransferIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStripePaymentIdOrder()`

```php
gETStripePaymentIdOrder($stripe_payment_id)
```

Retrieve the order associated to the stripe payment

Retrieve the order associated to the stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_id = 'stripe_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETStripePaymentIdOrder($stripe_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStripePaymentIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETStripePaymentIdPaymentGateway()`

```php
gETStripePaymentIdPaymentGateway($stripe_payment_id)
```

Retrieve the payment gateway associated to the stripe payment

Retrieve the payment gateway associated to the stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_id = 'stripe_payment_id_example'; // string | The resource's id

try {
    $apiInstance->gETStripePaymentIdPaymentGateway($stripe_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETStripePaymentIdPaymentGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETTaxCategoryIdSku()`

```php
gETTaxCategoryIdSku($tax_category_id)
```

Retrieve the sku associated to the tax category

Retrieve the sku associated to the tax category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_category_id = 'tax_category_id_example'; // string | The resource's id

try {
    $apiInstance->gETTaxCategoryIdSku($tax_category_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETTaxCategoryIdSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_category_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETTransactionIdOrder()`

```php
gETTransactionIdOrder($transaction_id)
```

Retrieve the order associated to the transaction

Retrieve the order associated to the transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | The resource's id

try {
    $apiInstance->gETTransactionIdOrder($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETTransactionIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETVoidIdOrder()`

```php
gETVoidIdOrder($void_id)
```

Retrieve the order associated to the void

Retrieve the order associated to the void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_id = 'void_id_example'; // string | The resource's id

try {
    $apiInstance->gETVoidIdOrder($void_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETVoidIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETVoidIdReferenceAuthorization()`

```php
gETVoidIdReferenceAuthorization($void_id)
```

Retrieve the reference authorization associated to the void

Retrieve the reference authorization associated to the void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_id = 'void_id_example'; // string | The resource's id

try {
    $apiInstance->gETVoidIdReferenceAuthorization($void_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETVoidIdReferenceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETWireTransferIdOrder()`

```php
gETWireTransferIdOrder($wire_transfer_id)
```

Retrieve the order associated to the wire transfer

Retrieve the order associated to the wire transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HasOneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wire_transfer_id = 'wire_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->gETWireTransferIdOrder($wire_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling HasOneApi->gETWireTransferIdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wire_transfer_id** | **string**| The resource&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
