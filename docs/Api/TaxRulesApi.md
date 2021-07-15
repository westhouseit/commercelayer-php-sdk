# OpenAPI\Client\TaxRulesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETETaxRulesTaxRuleId()**](TaxRulesApi.md#dELETETaxRulesTaxRuleId) | **DELETE** /tax_rules/{taxRuleId} | Delete a tax rule
[**gETTaxRules()**](TaxRulesApi.md#gETTaxRules) | **GET** /tax_rules | List all tax rules
[**gETTaxRulesTaxRuleId()**](TaxRulesApi.md#gETTaxRulesTaxRuleId) | **GET** /tax_rules/{taxRuleId} | Retrieve a tax rule
[**pATCHTaxRulesTaxRuleId()**](TaxRulesApi.md#pATCHTaxRulesTaxRuleId) | **PATCH** /tax_rules/{taxRuleId} | Update a tax rule
[**pOSTTaxRules()**](TaxRulesApi.md#pOSTTaxRules) | **POST** /tax_rules | Create a tax rule


## `dELETETaxRulesTaxRuleId()`

```php
dELETETaxRulesTaxRuleId($tax_rule_id)
```

Delete a tax rule

Delete a tax rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_rule_id = 'tax_rule_id_example'; // string | The resource's id

try {
    $apiInstance->dELETETaxRulesTaxRuleId($tax_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->dELETETaxRulesTaxRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rule_id** | **string**| The resource&#39;s id |

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

## `gETTaxRules()`

```php
gETTaxRules()
```

List all tax rules

List all tax rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETTaxRules();
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->gETTaxRules: ', $e->getMessage(), PHP_EOL;
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

## `gETTaxRulesTaxRuleId()`

```php
gETTaxRulesTaxRuleId($tax_rule_id): \OpenAPI\Client\Model\TaxRule
```

Retrieve a tax rule

Retrieve a tax rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_rule_id = 'tax_rule_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETTaxRulesTaxRuleId($tax_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->gETTaxRulesTaxRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rule_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\TaxRule**](../Model/TaxRule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHTaxRulesTaxRuleId()`

```php
pATCHTaxRulesTaxRuleId($tax_rule_id, $tax_rule_update)
```

Update a tax rule

Update a tax rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_rule_id = 'tax_rule_id_example'; // string | The resource's id
$tax_rule_update = new \OpenAPI\Client\Model\TaxRuleUpdate(); // \OpenAPI\Client\Model\TaxRuleUpdate

try {
    $apiInstance->pATCHTaxRulesTaxRuleId($tax_rule_id, $tax_rule_update);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->pATCHTaxRulesTaxRuleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rule_id** | **string**| The resource&#39;s id |
 **tax_rule_update** | [**\OpenAPI\Client\Model\TaxRuleUpdate**](../Model/TaxRuleUpdate.md)|  |

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

## `pOSTTaxRules()`

```php
pOSTTaxRules($tax_rule_create)
```

Create a tax rule

Create a tax rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_rule_create = new \OpenAPI\Client\Model\TaxRuleCreate(); // \OpenAPI\Client\Model\TaxRuleCreate

try {
    $apiInstance->pOSTTaxRules($tax_rule_create);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->pOSTTaxRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_rule_create** | [**\OpenAPI\Client\Model\TaxRuleCreate**](../Model/TaxRuleCreate.md)|  |

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
