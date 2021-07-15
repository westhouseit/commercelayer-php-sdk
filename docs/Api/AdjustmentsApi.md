# OpenAPI\Client\AdjustmentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAdjustmentsAdjustmentId()**](AdjustmentsApi.md#dELETEAdjustmentsAdjustmentId) | **DELETE** /adjustments/{adjustmentId} | Delete an adjustment
[**gETAdjustments()**](AdjustmentsApi.md#gETAdjustments) | **GET** /adjustments | List all adjustments
[**gETAdjustmentsAdjustmentId()**](AdjustmentsApi.md#gETAdjustmentsAdjustmentId) | **GET** /adjustments/{adjustmentId} | Retrieve an adjustment
[**pATCHAdjustmentsAdjustmentId()**](AdjustmentsApi.md#pATCHAdjustmentsAdjustmentId) | **PATCH** /adjustments/{adjustmentId} | Update an adjustment
[**pOSTAdjustments()**](AdjustmentsApi.md#pOSTAdjustments) | **POST** /adjustments | Create an adjustment


## `dELETEAdjustmentsAdjustmentId()`

```php
dELETEAdjustmentsAdjustmentId($adjustment_id)
```

Delete an adjustment

Delete an adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adjustment_id = 'adjustment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAdjustmentsAdjustmentId($adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->dELETEAdjustmentsAdjustmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adjustment_id** | **string**| The resource&#39;s id |

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

## `gETAdjustments()`

```php
gETAdjustments()
```

List all adjustments

List all adjustments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAdjustments();
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->gETAdjustments: ', $e->getMessage(), PHP_EOL;
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

## `gETAdjustmentsAdjustmentId()`

```php
gETAdjustmentsAdjustmentId($adjustment_id): \OpenAPI\Client\Model\Adjustment
```

Retrieve an adjustment

Retrieve an adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adjustment_id = 'adjustment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAdjustmentsAdjustmentId($adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->gETAdjustmentsAdjustmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adjustment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Adjustment**](../Model/Adjustment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAdjustmentsAdjustmentId()`

```php
pATCHAdjustmentsAdjustmentId($adjustment_id, $adjustment_update)
```

Update an adjustment

Update an adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adjustment_id = 'adjustment_id_example'; // string | The resource's id
$adjustment_update = new \OpenAPI\Client\Model\AdjustmentUpdate(); // \OpenAPI\Client\Model\AdjustmentUpdate

try {
    $apiInstance->pATCHAdjustmentsAdjustmentId($adjustment_id, $adjustment_update);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->pATCHAdjustmentsAdjustmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adjustment_id** | **string**| The resource&#39;s id |
 **adjustment_update** | [**\OpenAPI\Client\Model\AdjustmentUpdate**](../Model/AdjustmentUpdate.md)|  |

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

## `pOSTAdjustments()`

```php
pOSTAdjustments($adjustment_create)
```

Create an adjustment

Create an adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adjustment_create = new \OpenAPI\Client\Model\AdjustmentCreate(); // \OpenAPI\Client\Model\AdjustmentCreate

try {
    $apiInstance->pOSTAdjustments($adjustment_create);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->pOSTAdjustments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adjustment_create** | [**\OpenAPI\Client\Model\AdjustmentCreate**](../Model/AdjustmentCreate.md)|  |

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
