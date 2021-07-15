# OpenAPI\Client\PromotionRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPromotionRulesPromotionRuleId()**](PromotionRulesApi.md#dELETEPromotionRulesPromotionRuleId) | **DELETE** /promotion_rules/{promotionRuleId} | Delete a promotion rule
[**gETPromotionRules()**](PromotionRulesApi.md#gETPromotionRules) | **GET** /promotion_rules | List all promotion rules
[**gETPromotionRulesPromotionRuleId()**](PromotionRulesApi.md#gETPromotionRulesPromotionRuleId) | **GET** /promotion_rules/{promotionRuleId} | Retrieve a promotion rule
[**pATCHPromotionRulesPromotionRuleId()**](PromotionRulesApi.md#pATCHPromotionRulesPromotionRuleId) | **PATCH** /promotion_rules/{promotionRuleId} | Update a promotion rule
[**pOSTPromotionRules()**](PromotionRulesApi.md#pOSTPromotionRules) | **POST** /promotion_rules | Create a promotion rule


## `dELETEPromotionRulesPromotionRuleId()`

```php
dELETEPromotionRulesPromotionRuleId($promotion_rule_id)
```

Delete a promotion rule

Delete a promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_rule_id = 'promotion_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPromotionRulesPromotionRuleId($promotion_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionRulesApi->dELETEPromotionRulesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_rule_id** | **string**| The resource&#39;s id |

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

## `gETPromotionRules()`

```php
gETPromotionRules()
```

List all promotion rules

List all promotion rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPromotionRules();
} catch (Exception $e) {
    echo 'Exception when calling PromotionRulesApi->gETPromotionRules: ', $e->getMessage(), PHP_EOL;
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

## `gETPromotionRulesPromotionRuleId()`

```php
gETPromotionRulesPromotionRuleId($promotion_rule_id): \OpenAPI\Client\Model\PromotionRule
```

Retrieve a promotion rule

Retrieve a promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_rule_id = 'promotion_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPromotionRulesPromotionRuleId($promotion_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionRulesApi->gETPromotionRulesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PromotionRule**](../Model/PromotionRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPromotionRulesPromotionRuleId()`

```php
pATCHPromotionRulesPromotionRuleId($promotion_rule_id, $promotion_rule_update)
```

Update a promotion rule

Update a promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_rule_id = 'promotion_rule_id_example'; // string | The resource's id
$promotion_rule_update = new \OpenAPI\Client\Model\PromotionRuleUpdate(); // \OpenAPI\Client\Model\PromotionRuleUpdate

try {
    $apiInstance->pATCHPromotionRulesPromotionRuleId($promotion_rule_id, $promotion_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling PromotionRulesApi->pATCHPromotionRulesPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_rule_id** | **string**| The resource&#39;s id |
 **promotion_rule_update** | [**\OpenAPI\Client\Model\PromotionRuleUpdate**](../Model/PromotionRuleUpdate.md)|  |

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

## `pOSTPromotionRules()`

```php
pOSTPromotionRules($promotion_rule_create)
```

Create a promotion rule

Create a promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_rule_create = new \OpenAPI\Client\Model\PromotionRuleCreate(); // \OpenAPI\Client\Model\PromotionRuleCreate

try {
    $apiInstance->pOSTPromotionRules($promotion_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling PromotionRulesApi->pOSTPromotionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_rule_create** | [**\OpenAPI\Client\Model\PromotionRuleCreate**](../Model/PromotionRuleCreate.md)|  |

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
