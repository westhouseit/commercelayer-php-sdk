# OpenAPI\Client\InventoryStockLocationsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEInventoryStockLocationsInventoryStockLocationId()**](InventoryStockLocationsApi.md#dELETEInventoryStockLocationsInventoryStockLocationId) | **DELETE** /inventory_stock_locations/{inventoryStockLocationId} | Delete an inventory stock location
[**gETInventoryStockLocations()**](InventoryStockLocationsApi.md#gETInventoryStockLocations) | **GET** /inventory_stock_locations | List all inventory stock locations
[**gETInventoryStockLocationsInventoryStockLocationId()**](InventoryStockLocationsApi.md#gETInventoryStockLocationsInventoryStockLocationId) | **GET** /inventory_stock_locations/{inventoryStockLocationId} | Retrieve an inventory stock location
[**pATCHInventoryStockLocationsInventoryStockLocationId()**](InventoryStockLocationsApi.md#pATCHInventoryStockLocationsInventoryStockLocationId) | **PATCH** /inventory_stock_locations/{inventoryStockLocationId} | Update an inventory stock location
[**pOSTInventoryStockLocations()**](InventoryStockLocationsApi.md#pOSTInventoryStockLocations) | **POST** /inventory_stock_locations | Create an inventory stock location


## `dELETEInventoryStockLocationsInventoryStockLocationId()`

```php
dELETEInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id)
```

Delete an inventory stock location

Delete an inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryStockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_id = 'inventory_stock_location_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStockLocationsApi->dELETEInventoryStockLocationsInventoryStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_id** | **string**| The resource&#39;s id |

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

## `gETInventoryStockLocations()`

```php
gETInventoryStockLocations()
```

List all inventory stock locations

List all inventory stock locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryStockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETInventoryStockLocations();
} catch (Exception $e) {
    echo 'Exception when calling InventoryStockLocationsApi->gETInventoryStockLocations: ', $e->getMessage(), PHP_EOL;
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

## `gETInventoryStockLocationsInventoryStockLocationId()`

```php
gETInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id): \OpenAPI\Client\Model\InventoryStockLocation
```

Retrieve an inventory stock location

Retrieve an inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryStockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_id = 'inventory_stock_location_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStockLocationsApi->gETInventoryStockLocationsInventoryStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\InventoryStockLocation**](../Model/InventoryStockLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHInventoryStockLocationsInventoryStockLocationId()`

```php
pATCHInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id, $inventory_stock_location_update)
```

Update an inventory stock location

Update an inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryStockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_id = 'inventory_stock_location_id_example'; // string | The resource's id
$inventory_stock_location_update = new \OpenAPI\Client\Model\InventoryStockLocationUpdate(); // \OpenAPI\Client\Model\InventoryStockLocationUpdate

try {
    $apiInstance->pATCHInventoryStockLocationsInventoryStockLocationId($inventory_stock_location_id, $inventory_stock_location_update);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStockLocationsApi->pATCHInventoryStockLocationsInventoryStockLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_id** | **string**| The resource&#39;s id |
 **inventory_stock_location_update** | [**\OpenAPI\Client\Model\InventoryStockLocationUpdate**](../Model/InventoryStockLocationUpdate.md)|  |

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

## `pOSTInventoryStockLocations()`

```php
pOSTInventoryStockLocations($inventory_stock_location_create)
```

Create an inventory stock location

Create an inventory stock location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryStockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_stock_location_create = new \OpenAPI\Client\Model\InventoryStockLocationCreate(); // \OpenAPI\Client\Model\InventoryStockLocationCreate

try {
    $apiInstance->pOSTInventoryStockLocations($inventory_stock_location_create);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStockLocationsApi->pOSTInventoryStockLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_stock_location_create** | [**\OpenAPI\Client\Model\InventoryStockLocationCreate**](../Model/InventoryStockLocationCreate.md)|  |

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
