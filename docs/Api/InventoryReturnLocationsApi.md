# OpenAPI\Client\InventoryReturnLocationsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEInventoryReturnLocationsInventoryReturnLocationId()**](InventoryReturnLocationsApi.md#dELETEInventoryReturnLocationsInventoryReturnLocationId) | **DELETE** /inventory_return_locations/{inventoryReturnLocationId} | Delete an inventory return location
[**gETInventoryReturnLocations()**](InventoryReturnLocationsApi.md#gETInventoryReturnLocations) | **GET** /inventory_return_locations | List all inventory return locations
[**gETInventoryReturnLocationsInventoryReturnLocationId()**](InventoryReturnLocationsApi.md#gETInventoryReturnLocationsInventoryReturnLocationId) | **GET** /inventory_return_locations/{inventoryReturnLocationId} | Retrieve an inventory return location
[**pATCHInventoryReturnLocationsInventoryReturnLocationId()**](InventoryReturnLocationsApi.md#pATCHInventoryReturnLocationsInventoryReturnLocationId) | **PATCH** /inventory_return_locations/{inventoryReturnLocationId} | Update an inventory return location
[**pOSTInventoryReturnLocations()**](InventoryReturnLocationsApi.md#pOSTInventoryReturnLocations) | **POST** /inventory_return_locations | Create an inventory return location


## `dELETEInventoryReturnLocationsInventoryReturnLocationId()`

```php
dELETEInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id)
```

Delete an inventory return location

Delete an inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryReturnLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_id = 'inventory_return_location_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReturnLocationsApi->dELETEInventoryReturnLocationsInventoryReturnLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_id** | **string**| The resource&#39;s id |

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

## `gETInventoryReturnLocations()`

```php
gETInventoryReturnLocations()
```

List all inventory return locations

List all inventory return locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryReturnLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETInventoryReturnLocations();
} catch (Exception $e) {
    echo 'Exception when calling InventoryReturnLocationsApi->gETInventoryReturnLocations: ', $e->getMessage(), PHP_EOL;
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

## `gETInventoryReturnLocationsInventoryReturnLocationId()`

```php
gETInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id): \OpenAPI\Client\Model\InventoryReturnLocation
```

Retrieve an inventory return location

Retrieve an inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryReturnLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_id = 'inventory_return_location_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReturnLocationsApi->gETInventoryReturnLocationsInventoryReturnLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\InventoryReturnLocation**](../Model/InventoryReturnLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHInventoryReturnLocationsInventoryReturnLocationId()`

```php
pATCHInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id, $inventory_return_location_update)
```

Update an inventory return location

Update an inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryReturnLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_id = 'inventory_return_location_id_example'; // string | The resource's id
$inventory_return_location_update = new \OpenAPI\Client\Model\InventoryReturnLocationUpdate(); // \OpenAPI\Client\Model\InventoryReturnLocationUpdate

try {
    $apiInstance->pATCHInventoryReturnLocationsInventoryReturnLocationId($inventory_return_location_id, $inventory_return_location_update);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReturnLocationsApi->pATCHInventoryReturnLocationsInventoryReturnLocationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_id** | **string**| The resource&#39;s id |
 **inventory_return_location_update** | [**\OpenAPI\Client\Model\InventoryReturnLocationUpdate**](../Model/InventoryReturnLocationUpdate.md)|  |

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

## `pOSTInventoryReturnLocations()`

```php
pOSTInventoryReturnLocations($inventory_return_location_create)
```

Create an inventory return location

Create an inventory return location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryReturnLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_return_location_create = new \OpenAPI\Client\Model\InventoryReturnLocationCreate(); // \OpenAPI\Client\Model\InventoryReturnLocationCreate

try {
    $apiInstance->pOSTInventoryReturnLocations($inventory_return_location_create);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReturnLocationsApi->pOSTInventoryReturnLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_return_location_create** | [**\OpenAPI\Client\Model\InventoryReturnLocationCreate**](../Model/InventoryReturnLocationCreate.md)|  |

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
