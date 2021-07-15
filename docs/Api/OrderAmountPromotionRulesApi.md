# OpenAPI\Client\OrderAmountPromotionRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId()**](OrderAmountPromotionRulesApi.md#dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId) | **DELETE** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Delete an order amount promotion rule
[**gETOrderAmountPromotionRules()**](OrderAmountPromotionRulesApi.md#gETOrderAmountPromotionRules) | **GET** /order_amount_promotion_rules | List all order amount promotion rules
[**gETOrderAmountPromotionRulesOrderAmountPromotionRuleId()**](OrderAmountPromotionRulesApi.md#gETOrderAmountPromotionRulesOrderAmountPromotionRuleId) | **GET** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Retrieve an order amount promotion rule
[**pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId()**](OrderAmountPromotionRulesApi.md#pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId) | **PATCH** /order_amount_promotion_rules/{orderAmountPromotionRuleId} | Update an order amount promotion rule
[**pOSTOrderAmountPromotionRules()**](OrderAmountPromotionRulesApi.md#pOSTOrderAmountPromotionRules) | **POST** /order_amount_promotion_rules | Create an order amount promotion rule


## `dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId()`

```php
dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id)
```

Delete an order amount promotion rule

Delete an order amount promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderAmountPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_amount_promotion_rule_id = 'order_amount_promotion_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderAmountPromotionRulesApi->dELETEOrderAmountPromotionRulesOrderAmountPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_amount_promotion_rule_id** | **string**| The resource&#39;s id |

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

## `gETOrderAmountPromotionRules()`

```php
gETOrderAmountPromotionRules()
```

List all order amount promotion rules

List all order amount promotion rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderAmountPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETOrderAmountPromotionRules();
} catch (Exception $e) {
    echo 'Exception when calling OrderAmountPromotionRulesApi->gETOrderAmountPromotionRules: ', $e->getMessage(), PHP_EOL;
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

## `gETOrderAmountPromotionRulesOrderAmountPromotionRuleId()`

```php
gETOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id): \OpenAPI\Client\Model\OrderAmountPromotionRule
```

Retrieve an order amount promotion rule

Retrieve an order amount promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderAmountPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_amount_promotion_rule_id = 'order_amount_promotion_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAmountPromotionRulesApi->gETOrderAmountPromotionRulesOrderAmountPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_amount_promotion_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\OrderAmountPromotionRule**](../Model/OrderAmountPromotionRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId()`

```php
pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id, $order_amount_promotion_rule_update)
```

Update an order amount promotion rule

Update an order amount promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderAmountPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_amount_promotion_rule_id = 'order_amount_promotion_rule_id_example'; // string | The resource's id
$order_amount_promotion_rule_update = new \OpenAPI\Client\Model\OrderAmountPromotionRuleUpdate(); // \OpenAPI\Client\Model\OrderAmountPromotionRuleUpdate

try {
    $apiInstance->pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId($order_amount_promotion_rule_id, $order_amount_promotion_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling OrderAmountPromotionRulesApi->pATCHOrderAmountPromotionRulesOrderAmountPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_amount_promotion_rule_id** | **string**| The resource&#39;s id |
 **order_amount_promotion_rule_update** | [**\OpenAPI\Client\Model\OrderAmountPromotionRuleUpdate**](../Model/OrderAmountPromotionRuleUpdate.md)|  |

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

## `pOSTOrderAmountPromotionRules()`

```php
pOSTOrderAmountPromotionRules($order_amount_promotion_rule_create)
```

Create an order amount promotion rule

Create an order amount promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderAmountPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_amount_promotion_rule_create = new \OpenAPI\Client\Model\OrderAmountPromotionRuleCreate(); // \OpenAPI\Client\Model\OrderAmountPromotionRuleCreate

try {
    $apiInstance->pOSTOrderAmountPromotionRules($order_amount_promotion_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling OrderAmountPromotionRulesApi->pOSTOrderAmountPromotionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_amount_promotion_rule_create** | [**\OpenAPI\Client\Model\OrderAmountPromotionRuleCreate**](../Model/OrderAmountPromotionRuleCreate.md)|  |

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
