# OpenAPI\Client\StockLocationsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStockLocationsStockLocationId()**](StockLocationsApi.md#dELETEStockLocationsStockLocationId) | **DELETE** /stock_locations/{stockLocationId} | Delete a stock location
[**gETStockLocations()**](StockLocationsApi.md#gETStockLocations) | **GET** /stock_locations | List all stock locations
[**gETStockLocationsStockLocationId()**](StockLocationsApi.md#gETStockLocationsStockLocationId) | **GET** /stock_locations/{stockLocationId} | Retrieve a stock location
[**pATCHStockLocationsStockLocationId()**](StockLocationsApi.md#pATCHStockLocationsStockLocationId) | **PATCH** /stock_locations/{stockLocationId} | Update a stock location
[**pOSTStockLocations()**](StockLocationsApi.md#pOSTStockLocations) | **POST** /stock_locations | Create a stock location


## `dELETEStockLocationsStockLocationId()`

```php
dELETEStockLocationsStockLocationId($stock_location_id)
```

Delete a stock location

Delete a stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_location_id = 'stock_location_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStockLocationsStockLocationId($stock_location_id);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->dELETEStockLocationsStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_location_id** | **string**| The resource&#39;s id |

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

## `gETStockLocations()`

```php
gETStockLocations()
```

List all stock locations

List all stock locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStockLocations();
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->gETStockLocations: ', $e->getMessage(), PHP_EOL;
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

## `gETStockLocationsStockLocationId()`

```php
gETStockLocationsStockLocationId($stock_location_id): \OpenAPI\Client\Model\StockLocation
```

Retrieve a stock location

Retrieve a stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_location_id = 'stock_location_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStockLocationsStockLocationId($stock_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->gETStockLocationsStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_location_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StockLocation**](../Model/StockLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStockLocationsStockLocationId()`

```php
pATCHStockLocationsStockLocationId($stock_location_id, $stock_location_update)
```

Update a stock location

Update a stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_location_id = 'stock_location_id_example'; // string | The resource's id
$stock_location_update = new \OpenAPI\Client\Model\StockLocationUpdate(); // \OpenAPI\Client\Model\StockLocationUpdate

try {
    $apiInstance->pATCHStockLocationsStockLocationId($stock_location_id, $stock_location_update);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->pATCHStockLocationsStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_location_id** | **string**| The resource&#39;s id |
 **stock_location_update** | [**\OpenAPI\Client\Model\StockLocationUpdate**](../Model/StockLocationUpdate.md)|  |

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

## `pOSTStockLocations()`

```php
pOSTStockLocations($stock_location_create)
```

Create a stock location

Create a stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_location_create = new \OpenAPI\Client\Model\StockLocationCreate(); // \OpenAPI\Client\Model\StockLocationCreate

try {
    $apiInstance->pOSTStockLocations($stock_location_create);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->pOSTStockLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_location_create** | [**\OpenAPI\Client\Model\StockLocationCreate**](../Model/StockLocationCreate.md)|  |

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
