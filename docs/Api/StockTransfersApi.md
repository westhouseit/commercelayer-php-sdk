# OpenAPI\Client\StockTransfersApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStockTransfersStockTransferId()**](StockTransfersApi.md#dELETEStockTransfersStockTransferId) | **DELETE** /stock_transfers/{stockTransferId} | Delete a stock transfer
[**gETStockTransfers()**](StockTransfersApi.md#gETStockTransfers) | **GET** /stock_transfers | List all stock transfers
[**gETStockTransfersStockTransferId()**](StockTransfersApi.md#gETStockTransfersStockTransferId) | **GET** /stock_transfers/{stockTransferId} | Retrieve a stock transfer
[**pATCHStockTransfersStockTransferId()**](StockTransfersApi.md#pATCHStockTransfersStockTransferId) | **PATCH** /stock_transfers/{stockTransferId} | Update a stock transfer
[**pOSTStockTransfers()**](StockTransfersApi.md#pOSTStockTransfers) | **POST** /stock_transfers | Create a stock transfer


## `dELETEStockTransfersStockTransferId()`

```php
dELETEStockTransfersStockTransferId($stock_transfer_id)
```

Delete a stock transfer

Delete a stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStockTransfersStockTransferId($stock_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->dELETEStockTransfersStockTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

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

## `gETStockTransfers()`

```php
gETStockTransfers()
```

List all stock transfers

List all stock transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStockTransfers();
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->gETStockTransfers: ', $e->getMessage(), PHP_EOL;
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

## `gETStockTransfersStockTransferId()`

```php
gETStockTransfersStockTransferId($stock_transfer_id): \OpenAPI\Client\Model\StockTransfer
```

Retrieve a stock transfer

Retrieve a stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStockTransfersStockTransferId($stock_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->gETStockTransfersStockTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StockTransfer**](../Model/StockTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStockTransfersStockTransferId()`

```php
pATCHStockTransfersStockTransferId($stock_transfer_id, $stock_transfer_update)
```

Update a stock transfer

Update a stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_id = 'stock_transfer_id_example'; // string | The resource's id
$stock_transfer_update = new \OpenAPI\Client\Model\StockTransferUpdate(); // \OpenAPI\Client\Model\StockTransferUpdate

try {
    $apiInstance->pATCHStockTransfersStockTransferId($stock_transfer_id, $stock_transfer_update);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->pATCHStockTransfersStockTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_id** | **string**| The resource&#39;s id |
 **stock_transfer_update** | [**\OpenAPI\Client\Model\StockTransferUpdate**](../Model/StockTransferUpdate.md)|  |

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

## `pOSTStockTransfers()`

```php
pOSTStockTransfers($stock_transfer_create)
```

Create a stock transfer

Create a stock transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_transfer_create = new \OpenAPI\Client\Model\StockTransferCreate(); // \OpenAPI\Client\Model\StockTransferCreate

try {
    $apiInstance->pOSTStockTransfers($stock_transfer_create);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->pOSTStockTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_transfer_create** | [**\OpenAPI\Client\Model\StockTransferCreate**](../Model/StockTransferCreate.md)|  |

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
