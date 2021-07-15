# OpenAPI\Client\StockLineItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStockLineItemsStockLineItemId()**](StockLineItemsApi.md#dELETEStockLineItemsStockLineItemId) | **DELETE** /stock_line_items/{stockLineItemId} | Delete a stock line item
[**gETStockLineItems()**](StockLineItemsApi.md#gETStockLineItems) | **GET** /stock_line_items | List all stock line items
[**gETStockLineItemsStockLineItemId()**](StockLineItemsApi.md#gETStockLineItemsStockLineItemId) | **GET** /stock_line_items/{stockLineItemId} | Retrieve a stock line item
[**pATCHStockLineItemsStockLineItemId()**](StockLineItemsApi.md#pATCHStockLineItemsStockLineItemId) | **PATCH** /stock_line_items/{stockLineItemId} | Update a stock line item
[**pOSTStockLineItems()**](StockLineItemsApi.md#pOSTStockLineItems) | **POST** /stock_line_items | Create a stock line item


## `dELETEStockLineItemsStockLineItemId()`

```php
dELETEStockLineItemsStockLineItemId($stock_line_item_id)
```

Delete a stock line item

Delete a stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStockLineItemsStockLineItemId($stock_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling StockLineItemsApi->dELETEStockLineItemsStockLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |

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

## `gETStockLineItems()`

```php
gETStockLineItems()
```

List all stock line items

List all stock line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStockLineItems();
} catch (Exception $e) {
    echo 'Exception when calling StockLineItemsApi->gETStockLineItems: ', $e->getMessage(), PHP_EOL;
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

## `gETStockLineItemsStockLineItemId()`

```php
gETStockLineItemsStockLineItemId($stock_line_item_id): \OpenAPI\Client\Model\StockLineItem
```

Retrieve a stock line item

Retrieve a stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStockLineItemsStockLineItemId($stock_line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLineItemsApi->gETStockLineItemsStockLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StockLineItem**](../Model/StockLineItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStockLineItemsStockLineItemId()`

```php
pATCHStockLineItemsStockLineItemId($stock_line_item_id, $stock_line_item_update)
```

Update a stock line item

Update a stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_id = 'stock_line_item_id_example'; // string | The resource's id
$stock_line_item_update = new \OpenAPI\Client\Model\StockLineItemUpdate(); // \OpenAPI\Client\Model\StockLineItemUpdate

try {
    $apiInstance->pATCHStockLineItemsStockLineItemId($stock_line_item_id, $stock_line_item_update);
} catch (Exception $e) {
    echo 'Exception when calling StockLineItemsApi->pATCHStockLineItemsStockLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_id** | **string**| The resource&#39;s id |
 **stock_line_item_update** | [**\OpenAPI\Client\Model\StockLineItemUpdate**](../Model/StockLineItemUpdate.md)|  |

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

## `pOSTStockLineItems()`

```php
pOSTStockLineItems($stock_line_item_create)
```

Create a stock line item

Create a stock line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_line_item_create = new \OpenAPI\Client\Model\StockLineItemCreate(); // \OpenAPI\Client\Model\StockLineItemCreate

try {
    $apiInstance->pOSTStockLineItems($stock_line_item_create);
} catch (Exception $e) {
    echo 'Exception when calling StockLineItemsApi->pOSTStockLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_line_item_create** | [**\OpenAPI\Client\Model\StockLineItemCreate**](../Model/StockLineItemCreate.md)|  |

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
