# OpenAPI\Client\BillingInfoValidationRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEBillingInfoValidationRulesBillingInfoValidationRuleId()**](BillingInfoValidationRulesApi.md#dELETEBillingInfoValidationRulesBillingInfoValidationRuleId) | **DELETE** /billing_info_validation_rules/{billingInfoValidationRuleId} | Delete a billing info validation rule
[**gETBillingInfoValidationRules()**](BillingInfoValidationRulesApi.md#gETBillingInfoValidationRules) | **GET** /billing_info_validation_rules | List all billing info validation rules
[**gETBillingInfoValidationRulesBillingInfoValidationRuleId()**](BillingInfoValidationRulesApi.md#gETBillingInfoValidationRulesBillingInfoValidationRuleId) | **GET** /billing_info_validation_rules/{billingInfoValidationRuleId} | Retrieve a billing info validation rule
[**pATCHBillingInfoValidationRulesBillingInfoValidationRuleId()**](BillingInfoValidationRulesApi.md#pATCHBillingInfoValidationRulesBillingInfoValidationRuleId) | **PATCH** /billing_info_validation_rules/{billingInfoValidationRuleId} | Update a billing info validation rule
[**pOSTBillingInfoValidationRules()**](BillingInfoValidationRulesApi.md#pOSTBillingInfoValidationRules) | **POST** /billing_info_validation_rules | Create a billing info validation rule


## `dELETEBillingInfoValidationRulesBillingInfoValidationRuleId()`

```php
dELETEBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id)
```

Delete a billing info validation rule

Delete a billing info validation rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingInfoValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_info_validation_rule_id = 'billing_info_validation_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingInfoValidationRulesApi->dELETEBillingInfoValidationRulesBillingInfoValidationRuleId: ', $e->getMessage(), PHP_EOL;
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

## `gETBillingInfoValidationRules()`

```php
gETBillingInfoValidationRules()
```

List all billing info validation rules

List all billing info validation rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingInfoValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETBillingInfoValidationRules();
} catch (Exception $e) {
    echo 'Exception when calling BillingInfoValidationRulesApi->gETBillingInfoValidationRules: ', $e->getMessage(), PHP_EOL;
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

## `gETBillingInfoValidationRulesBillingInfoValidationRuleId()`

```php
gETBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id): \OpenAPI\Client\Model\BillingInfoValidationRule
```

Retrieve a billing info validation rule

Retrieve a billing info validation rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingInfoValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_info_validation_rule_id = 'billing_info_validation_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingInfoValidationRulesApi->gETBillingInfoValidationRulesBillingInfoValidationRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_info_validation_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\BillingInfoValidationRule**](../Model/BillingInfoValidationRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHBillingInfoValidationRulesBillingInfoValidationRuleId()`

```php
pATCHBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id, $billing_info_validation_rule_update)
```

Update a billing info validation rule

Update a billing info validation rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingInfoValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_info_validation_rule_id = 'billing_info_validation_rule_id_example'; // string | The resource's id
$billing_info_validation_rule_update = new \OpenAPI\Client\Model\BillingInfoValidationRuleUpdate(); // \OpenAPI\Client\Model\BillingInfoValidationRuleUpdate

try {
    $apiInstance->pATCHBillingInfoValidationRulesBillingInfoValidationRuleId($billing_info_validation_rule_id, $billing_info_validation_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling BillingInfoValidationRulesApi->pATCHBillingInfoValidationRulesBillingInfoValidationRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_info_validation_rule_id** | **string**| The resource&#39;s id |
 **billing_info_validation_rule_update** | [**\OpenAPI\Client\Model\BillingInfoValidationRuleUpdate**](../Model/BillingInfoValidationRuleUpdate.md)|  |

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

## `pOSTBillingInfoValidationRules()`

```php
pOSTBillingInfoValidationRules($billing_info_validation_rule_create)
```

Create a billing info validation rule

Create a billing info validation rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BillingInfoValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_info_validation_rule_create = new \OpenAPI\Client\Model\BillingInfoValidationRuleCreate(); // \OpenAPI\Client\Model\BillingInfoValidationRuleCreate

try {
    $apiInstance->pOSTBillingInfoValidationRules($billing_info_validation_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling BillingInfoValidationRulesApi->pOSTBillingInfoValidationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_info_validation_rule_create** | [**\OpenAPI\Client\Model\BillingInfoValidationRuleCreate**](../Model/BillingInfoValidationRuleCreate.md)|  |

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
