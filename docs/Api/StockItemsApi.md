# OpenAPI\Client\StockItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStockItemsStockItemId()**](StockItemsApi.md#dELETEStockItemsStockItemId) | **DELETE** /stock_items/{stockItemId} | Delete a stock item
[**gETStockItems()**](StockItemsApi.md#gETStockItems) | **GET** /stock_items | List all stock items
[**gETStockItemsStockItemId()**](StockItemsApi.md#gETStockItemsStockItemId) | **GET** /stock_items/{stockItemId} | Retrieve a stock item
[**pATCHStockItemsStockItemId()**](StockItemsApi.md#pATCHStockItemsStockItemId) | **PATCH** /stock_items/{stockItemId} | Update a stock item
[**pOSTStockItems()**](StockItemsApi.md#pOSTStockItems) | **POST** /stock_items | Create a stock item


## `dELETEStockItemsStockItemId()`

```php
dELETEStockItemsStockItemId($stock_item_id)
```

Delete a stock item

Delete a stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_id = 'stock_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStockItemsStockItemId($stock_item_id);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->dELETEStockItemsStockItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **string**| The resource&#39;s id |

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

## `gETStockItems()`

```php
gETStockItems()
```

List all stock items

List all stock items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStockItems();
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->gETStockItems: ', $e->getMessage(), PHP_EOL;
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

## `gETStockItemsStockItemId()`

```php
gETStockItemsStockItemId($stock_item_id): \OpenAPI\Client\Model\StockItem
```

Retrieve a stock item

Retrieve a stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_id = 'stock_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStockItemsStockItemId($stock_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->gETStockItemsStockItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StockItem**](../Model/StockItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStockItemsStockItemId()`

```php
pATCHStockItemsStockItemId($stock_item_id, $stock_item_update)
```

Update a stock item

Update a stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_id = 'stock_item_id_example'; // string | The resource's id
$stock_item_update = new \OpenAPI\Client\Model\StockItemUpdate(); // \OpenAPI\Client\Model\StockItemUpdate

try {
    $apiInstance->pATCHStockItemsStockItemId($stock_item_id, $stock_item_update);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->pATCHStockItemsStockItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **string**| The resource&#39;s id |
 **stock_item_update** | [**\OpenAPI\Client\Model\StockItemUpdate**](../Model/StockItemUpdate.md)|  |

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

## `pOSTStockItems()`

```php
pOSTStockItems($stock_item_create)
```

Create a stock item

Create a stock item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_item_create = new \OpenAPI\Client\Model\StockItemCreate(); // \OpenAPI\Client\Model\StockItemCreate

try {
    $apiInstance->pOSTStockItems($stock_item_create);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->pOSTStockItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_create** | [**\OpenAPI\Client\Model\StockItemCreate**](../Model/StockItemCreate.md)|  |

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
