# OpenAPI\Client\TaxCalculatorsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETETaxCalculatorsTaxCalculatorId()**](TaxCalculatorsApi.md#dELETETaxCalculatorsTaxCalculatorId) | **DELETE** /tax_calculators/{taxCalculatorId} | Delete a tax calculator
[**gETTaxCalculators()**](TaxCalculatorsApi.md#gETTaxCalculators) | **GET** /tax_calculators | List all tax calculators
[**gETTaxCalculatorsTaxCalculatorId()**](TaxCalculatorsApi.md#gETTaxCalculatorsTaxCalculatorId) | **GET** /tax_calculators/{taxCalculatorId} | Retrieve a tax calculator
[**pATCHTaxCalculatorsTaxCalculatorId()**](TaxCalculatorsApi.md#pATCHTaxCalculatorsTaxCalculatorId) | **PATCH** /tax_calculators/{taxCalculatorId} | Update a tax calculator
[**pOSTTaxCalculators()**](TaxCalculatorsApi.md#pOSTTaxCalculators) | **POST** /tax_calculators | Create a tax calculator


## `dELETETaxCalculatorsTaxCalculatorId()`

```php
dELETETaxCalculatorsTaxCalculatorId($tax_calculator_id)
```

Delete a tax calculator

Delete a tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_calculator_id = 'tax_calculator_id_example'; // string | The resource's id

try {
    $apiInstance->dELETETaxCalculatorsTaxCalculatorId($tax_calculator_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxCalculatorsApi->dELETETaxCalculatorsTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_calculator_id** | **string**| The resource&#39;s id |

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

## `gETTaxCalculators()`

```php
gETTaxCalculators()
```

List all tax calculators

List all tax calculators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETTaxCalculators();
} catch (Exception $e) {
    echo 'Exception when calling TaxCalculatorsApi->gETTaxCalculators: ', $e->getMessage(), PHP_EOL;
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

## `gETTaxCalculatorsTaxCalculatorId()`

```php
gETTaxCalculatorsTaxCalculatorId($tax_calculator_id): \OpenAPI\Client\Model\TaxCalculator
```

Retrieve a tax calculator

Retrieve a tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_calculator_id = 'tax_calculator_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETTaxCalculatorsTaxCalculatorId($tax_calculator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxCalculatorsApi->gETTaxCalculatorsTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_calculator_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\TaxCalculator**](../Model/TaxCalculator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHTaxCalculatorsTaxCalculatorId()`

```php
pATCHTaxCalculatorsTaxCalculatorId($tax_calculator_id, $tax_calculator_update)
```

Update a tax calculator

Update a tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_calculator_id = 'tax_calculator_id_example'; // string | The resource's id
$tax_calculator_update = new \OpenAPI\Client\Model\TaxCalculatorUpdate(); // \OpenAPI\Client\Model\TaxCalculatorUpdate

try {
    $apiInstance->pATCHTaxCalculatorsTaxCalculatorId($tax_calculator_id, $tax_calculator_update);
} catch (Exception $e) {
    echo 'Exception when calling TaxCalculatorsApi->pATCHTaxCalculatorsTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_calculator_id** | **string**| The resource&#39;s id |
 **tax_calculator_update** | [**\OpenAPI\Client\Model\TaxCalculatorUpdate**](../Model/TaxCalculatorUpdate.md)|  |

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

## `pOSTTaxCalculators()`

```php
pOSTTaxCalculators($tax_calculator_create)
```

Create a tax calculator

Create a tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_calculator_create = new \OpenAPI\Client\Model\TaxCalculatorCreate(); // \OpenAPI\Client\Model\TaxCalculatorCreate

try {
    $apiInstance->pOSTTaxCalculators($tax_calculator_create);
} catch (Exception $e) {
    echo 'Exception when calling TaxCalculatorsApi->pOSTTaxCalculators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_calculator_create** | [**\OpenAPI\Client\Model\TaxCalculatorCreate**](../Model/TaxCalculatorCreate.md)|  |

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
