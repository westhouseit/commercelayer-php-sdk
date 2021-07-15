# OpenAPI\Client\CouponCodesPromotionRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId()**](CouponCodesPromotionRulesApi.md#dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId) | **DELETE** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Delete a coupon codes promotion rule
[**gETCouponCodesPromotionRules()**](CouponCodesPromotionRulesApi.md#gETCouponCodesPromotionRules) | **GET** /coupon_codes_promotion_rules | List all coupon codes promotion rules
[**gETCouponCodesPromotionRulesCouponCodesPromotionRuleId()**](CouponCodesPromotionRulesApi.md#gETCouponCodesPromotionRulesCouponCodesPromotionRuleId) | **GET** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Retrieve a coupon codes promotion rule
[**pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId()**](CouponCodesPromotionRulesApi.md#pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId) | **PATCH** /coupon_codes_promotion_rules/{couponCodesPromotionRuleId} | Update a coupon codes promotion rule
[**pOSTCouponCodesPromotionRules()**](CouponCodesPromotionRulesApi.md#pOSTCouponCodesPromotionRules) | **POST** /coupon_codes_promotion_rules | Create a coupon codes promotion rule


## `dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId()`

```php
dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id)
```

Delete a coupon codes promotion rule

Delete a coupon codes promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponCodesPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_codes_promotion_rule_id = 'coupon_codes_promotion_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling CouponCodesPromotionRulesApi->dELETECouponCodesPromotionRulesCouponCodesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_codes_promotion_rule_id** | **string**| The resource&#39;s id |

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

## `gETCouponCodesPromotionRules()`

```php
gETCouponCodesPromotionRules()
```

List all coupon codes promotion rules

List all coupon codes promotion rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponCodesPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCouponCodesPromotionRules();
} catch (Exception $e) {
    echo 'Exception when calling CouponCodesPromotionRulesApi->gETCouponCodesPromotionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `gETCouponCodesPromotionRulesCouponCodesPromotionRuleId()`

```php
gETCouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id): \OpenAPI\Client\Model\CouponCodesPromotionRule
```

Retrieve a coupon codes promotion rule

Retrieve a coupon codes promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponCodesPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_codes_promotion_rule_id = 'coupon_codes_promotion_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCodesPromotionRulesApi->gETCouponCodesPromotionRulesCouponCodesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_codes_promotion_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CouponCodesPromotionRule**](../Model/CouponCodesPromotionRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId()`

```php
pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id, $coupon_codes_promotion_rule_update)
```

Update a coupon codes promotion rule

Update a coupon codes promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponCodesPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_codes_promotion_rule_id = 'coupon_codes_promotion_rule_id_example'; // string | The resource's id
$coupon_codes_promotion_rule_update = new \OpenAPI\Client\Model\CouponCodesPromotionRuleUpdate(); // \OpenAPI\Client\Model\CouponCodesPromotionRuleUpdate

try {
    $apiInstance->pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId($coupon_codes_promotion_rule_id, $coupon_codes_promotion_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling CouponCodesPromotionRulesApi->pATCHCouponCodesPromotionRulesCouponCodesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_codes_promotion_rule_id** | **string**| The resource&#39;s id |
 **coupon_codes_promotion_rule_update** | [**\OpenAPI\Client\Model\CouponCodesPromotionRuleUpdate**](../Model/CouponCodesPromotionRuleUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSTCouponCodesPromotionRules()`

```php
pOSTCouponCodesPromotionRules($coupon_codes_promotion_rule_create)
```

Create a coupon codes promotion rule

Create a coupon codes promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponCodesPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_codes_promotion_rule_create = new \OpenAPI\Client\Model\CouponCodesPromotionRuleCreate(); // \OpenAPI\Client\Model\CouponCodesPromotionRuleCreate

try {
    $apiInstance->pOSTCouponCodesPromotionRules($coupon_codes_promotion_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling CouponCodesPromotionRulesApi->pOSTCouponCodesPromotionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_codes_promotion_rule_create** | [**\OpenAPI\Client\Model\CouponCodesPromotionRuleCreate**](../Model/CouponCodesPromotionRuleCreate.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
