# OpenAPI\Client\ExternalTaxCalculatorsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEExternalTaxCalculatorsExternalTaxCalculatorId()**](ExternalTaxCalculatorsApi.md#dELETEExternalTaxCalculatorsExternalTaxCalculatorId) | **DELETE** /external_tax_calculators/{externalTaxCalculatorId} | Delete an external tax calculator
[**gETExternalTaxCalculators()**](ExternalTaxCalculatorsApi.md#gETExternalTaxCalculators) | **GET** /external_tax_calculators | List all external tax calculators
[**gETExternalTaxCalculatorsExternalTaxCalculatorId()**](ExternalTaxCalculatorsApi.md#gETExternalTaxCalculatorsExternalTaxCalculatorId) | **GET** /external_tax_calculators/{externalTaxCalculatorId} | Retrieve an external tax calculator
[**pATCHExternalTaxCalculatorsExternalTaxCalculatorId()**](ExternalTaxCalculatorsApi.md#pATCHExternalTaxCalculatorsExternalTaxCalculatorId) | **PATCH** /external_tax_calculators/{externalTaxCalculatorId} | Update an external tax calculator
[**pOSTExternalTaxCalculators()**](ExternalTaxCalculatorsApi.md#pOSTExternalTaxCalculators) | **POST** /external_tax_calculators | Create an external tax calculator


## `dELETEExternalTaxCalculatorsExternalTaxCalculatorId()`

```php
dELETEExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id)
```

Delete an external tax calculator

Delete an external tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_tax_calculator_id = 'external_tax_calculator_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaxCalculatorsApi->dELETEExternalTaxCalculatorsExternalTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_tax_calculator_id** | **string**| The resource&#39;s id |

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

## `gETExternalTaxCalculators()`

```php
gETExternalTaxCalculators()
```

List all external tax calculators

List all external tax calculators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETExternalTaxCalculators();
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaxCalculatorsApi->gETExternalTaxCalculators: ', $e->getMessage(), PHP_EOL;
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

## `gETExternalTaxCalculatorsExternalTaxCalculatorId()`

```php
gETExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id): \OpenAPI\Client\Model\ExternalTaxCalculator
```

Retrieve an external tax calculator

Retrieve an external tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_tax_calculator_id = 'external_tax_calculator_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaxCalculatorsApi->gETExternalTaxCalculatorsExternalTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_tax_calculator_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ExternalTaxCalculator**](../Model/ExternalTaxCalculator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHExternalTaxCalculatorsExternalTaxCalculatorId()`

```php
pATCHExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id, $external_tax_calculator_update)
```

Update an external tax calculator

Update an external tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_tax_calculator_id = 'external_tax_calculator_id_example'; // string | The resource's id
$external_tax_calculator_update = new \OpenAPI\Client\Model\ExternalTaxCalculatorUpdate(); // \OpenAPI\Client\Model\ExternalTaxCalculatorUpdate

try {
    $apiInstance->pATCHExternalTaxCalculatorsExternalTaxCalculatorId($external_tax_calculator_id, $external_tax_calculator_update);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaxCalculatorsApi->pATCHExternalTaxCalculatorsExternalTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_tax_calculator_id** | **string**| The resource&#39;s id |
 **external_tax_calculator_update** | [**\OpenAPI\Client\Model\ExternalTaxCalculatorUpdate**](../Model/ExternalTaxCalculatorUpdate.md)|  |

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

## `pOSTExternalTaxCalculators()`

```php
pOSTExternalTaxCalculators($external_tax_calculator_create)
```

Create an external tax calculator

Create an external tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_tax_calculator_create = new \OpenAPI\Client\Model\ExternalTaxCalculatorCreate(); // \OpenAPI\Client\Model\ExternalTaxCalculatorCreate

try {
    $apiInstance->pOSTExternalTaxCalculators($external_tax_calculator_create);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaxCalculatorsApi->pOSTExternalTaxCalculators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_tax_calculator_create** | [**\OpenAPI\Client\Model\ExternalTaxCalculatorCreate**](../Model/ExternalTaxCalculatorCreate.md)|  |

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
