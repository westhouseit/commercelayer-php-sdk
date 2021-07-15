# OpenAPI\Client\SkuListPromotionRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESkuListPromotionRulesSkuListPromotionRuleId()**](SkuListPromotionRulesApi.md#dELETESkuListPromotionRulesSkuListPromotionRuleId) | **DELETE** /sku_list_promotion_rules/{skuListPromotionRuleId} | Delete a SKU list promotion rule
[**gETSkuListPromotionRules()**](SkuListPromotionRulesApi.md#gETSkuListPromotionRules) | **GET** /sku_list_promotion_rules | List all SKU list promotion rules
[**gETSkuListPromotionRulesSkuListPromotionRuleId()**](SkuListPromotionRulesApi.md#gETSkuListPromotionRulesSkuListPromotionRuleId) | **GET** /sku_list_promotion_rules/{skuListPromotionRuleId} | Retrieve a SKU list promotion rule
[**pATCHSkuListPromotionRulesSkuListPromotionRuleId()**](SkuListPromotionRulesApi.md#pATCHSkuListPromotionRulesSkuListPromotionRuleId) | **PATCH** /sku_list_promotion_rules/{skuListPromotionRuleId} | Update a SKU list promotion rule
[**pOSTSkuListPromotionRules()**](SkuListPromotionRulesApi.md#pOSTSkuListPromotionRules) | **POST** /sku_list_promotion_rules | Create a SKU list promotion rule


## `dELETESkuListPromotionRulesSkuListPromotionRuleId()`

```php
dELETESkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id)
```

Delete a SKU list promotion rule

Delete a SKU list promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_promotion_rule_id = 'sku_list_promotion_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETESkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling SkuListPromotionRulesApi->dELETESkuListPromotionRulesSkuListPromotionRuleId: ', $e->getMessage(), PHP_EOL;
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

## `gETSkuListPromotionRules()`

```php
gETSkuListPromotionRules()
```

List all SKU list promotion rules

List all SKU list promotion rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETSkuListPromotionRules();
} catch (Exception $e) {
    echo 'Exception when calling SkuListPromotionRulesApi->gETSkuListPromotionRules: ', $e->getMessage(), PHP_EOL;
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

## `gETSkuListPromotionRulesSkuListPromotionRuleId()`

```php
gETSkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id): \OpenAPI\Client\Model\SkuListPromotionRule
```

Retrieve a SKU list promotion rule

Retrieve a SKU list promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_promotion_rule_id = 'sku_list_promotion_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETSkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuListPromotionRulesApi->gETSkuListPromotionRulesSkuListPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_promotion_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\SkuListPromotionRule**](../Model/SkuListPromotionRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHSkuListPromotionRulesSkuListPromotionRuleId()`

```php
pATCHSkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id, $sku_list_promotion_rule_update)
```

Update a SKU list promotion rule

Update a SKU list promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_promotion_rule_id = 'sku_list_promotion_rule_id_example'; // string | The resource's id
$sku_list_promotion_rule_update = new \OpenAPI\Client\Model\SkuListPromotionRuleUpdate(); // \OpenAPI\Client\Model\SkuListPromotionRuleUpdate

try {
    $apiInstance->pATCHSkuListPromotionRulesSkuListPromotionRuleId($sku_list_promotion_rule_id, $sku_list_promotion_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling SkuListPromotionRulesApi->pATCHSkuListPromotionRulesSkuListPromotionRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_promotion_rule_id** | **string**| The resource&#39;s id |
 **sku_list_promotion_rule_update** | [**\OpenAPI\Client\Model\SkuListPromotionRuleUpdate**](../Model/SkuListPromotionRuleUpdate.md)|  |

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

## `pOSTSkuListPromotionRules()`

```php
pOSTSkuListPromotionRules($sku_list_promotion_rule_create)
```

Create a SKU list promotion rule

Create a SKU list promotion rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListPromotionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_promotion_rule_create = new \OpenAPI\Client\Model\SkuListPromotionRuleCreate(); // \OpenAPI\Client\Model\SkuListPromotionRuleCreate

try {
    $apiInstance->pOSTSkuListPromotionRules($sku_list_promotion_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling SkuListPromotionRulesApi->pOSTSkuListPromotionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_promotion_rule_create** | [**\OpenAPI\Client\Model\SkuListPromotionRuleCreate**](../Model/SkuListPromotionRuleCreate.md)|  |

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
