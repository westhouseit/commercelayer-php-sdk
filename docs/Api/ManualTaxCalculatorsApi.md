# OpenAPI\Client\ManualTaxCalculatorsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEManualTaxCalculatorsManualTaxCalculatorId()**](ManualTaxCalculatorsApi.md#dELETEManualTaxCalculatorsManualTaxCalculatorId) | **DELETE** /manual_tax_calculators/{manualTaxCalculatorId} | Delete a manual tax calculator
[**gETManualTaxCalculators()**](ManualTaxCalculatorsApi.md#gETManualTaxCalculators) | **GET** /manual_tax_calculators | List all manual tax calculators
[**gETManualTaxCalculatorsManualTaxCalculatorId()**](ManualTaxCalculatorsApi.md#gETManualTaxCalculatorsManualTaxCalculatorId) | **GET** /manual_tax_calculators/{manualTaxCalculatorId} | Retrieve a manual tax calculator
[**pATCHManualTaxCalculatorsManualTaxCalculatorId()**](ManualTaxCalculatorsApi.md#pATCHManualTaxCalculatorsManualTaxCalculatorId) | **PATCH** /manual_tax_calculators/{manualTaxCalculatorId} | Update a manual tax calculator
[**pOSTManualTaxCalculators()**](ManualTaxCalculatorsApi.md#pOSTManualTaxCalculators) | **POST** /manual_tax_calculators | Create a manual tax calculator


## `dELETEManualTaxCalculatorsManualTaxCalculatorId()`

```php
dELETEManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id)
```

Delete a manual tax calculator

Delete a manual tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_tax_calculator_id = 'manual_tax_calculator_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id);
} catch (Exception $e) {
    echo 'Exception when calling ManualTaxCalculatorsApi->dELETEManualTaxCalculatorsManualTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_tax_calculator_id** | **string**| The resource&#39;s id |

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

## `gETManualTaxCalculators()`

```php
gETManualTaxCalculators()
```

List all manual tax calculators

List all manual tax calculators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETManualTaxCalculators();
} catch (Exception $e) {
    echo 'Exception when calling ManualTaxCalculatorsApi->gETManualTaxCalculators: ', $e->getMessage(), PHP_EOL;
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

## `gETManualTaxCalculatorsManualTaxCalculatorId()`

```php
gETManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id): \OpenAPI\Client\Model\ManualTaxCalculator
```

Retrieve a manual tax calculator

Retrieve a manual tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_tax_calculator_id = 'manual_tax_calculator_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualTaxCalculatorsApi->gETManualTaxCalculatorsManualTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_tax_calculator_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ManualTaxCalculator**](../Model/ManualTaxCalculator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHManualTaxCalculatorsManualTaxCalculatorId()`

```php
pATCHManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id, $manual_tax_calculator_update)
```

Update a manual tax calculator

Update a manual tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_tax_calculator_id = 'manual_tax_calculator_id_example'; // string | The resource's id
$manual_tax_calculator_update = new \OpenAPI\Client\Model\ManualTaxCalculatorUpdate(); // \OpenAPI\Client\Model\ManualTaxCalculatorUpdate

try {
    $apiInstance->pATCHManualTaxCalculatorsManualTaxCalculatorId($manual_tax_calculator_id, $manual_tax_calculator_update);
} catch (Exception $e) {
    echo 'Exception when calling ManualTaxCalculatorsApi->pATCHManualTaxCalculatorsManualTaxCalculatorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_tax_calculator_id** | **string**| The resource&#39;s id |
 **manual_tax_calculator_update** | [**\OpenAPI\Client\Model\ManualTaxCalculatorUpdate**](../Model/ManualTaxCalculatorUpdate.md)|  |

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

## `pOSTManualTaxCalculators()`

```php
pOSTManualTaxCalculators($manual_tax_calculator_create)
```

Create a manual tax calculator

Create a manual tax calculator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualTaxCalculatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_tax_calculator_create = new \OpenAPI\Client\Model\ManualTaxCalculatorCreate(); // \OpenAPI\Client\Model\ManualTaxCalculatorCreate

try {
    $apiInstance->pOSTManualTaxCalculators($manual_tax_calculator_create);
} catch (Exception $e) {
    echo 'Exception when calling ManualTaxCalculatorsApi->pOSTManualTaxCalculators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_tax_calculator_create** | [**\OpenAPI\Client\Model\ManualTaxCalculatorCreate**](../Model/ManualTaxCalculatorCreate.md)|  |

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
