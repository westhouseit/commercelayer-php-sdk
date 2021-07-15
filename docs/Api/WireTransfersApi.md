# OpenAPI\Client\WireTransfersApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEWireTransfersWireTransferId()**](WireTransfersApi.md#dELETEWireTransfersWireTransferId) | **DELETE** /wire_transfers/{wireTransferId} | Delete a wire transfer
[**gETWireTransfers()**](WireTransfersApi.md#gETWireTransfers) | **GET** /wire_transfers | List all wire transfers
[**gETWireTransfersWireTransferId()**](WireTransfersApi.md#gETWireTransfersWireTransferId) | **GET** /wire_transfers/{wireTransferId} | Retrieve a wire transfer
[**pATCHWireTransfersWireTransferId()**](WireTransfersApi.md#pATCHWireTransfersWireTransferId) | **PATCH** /wire_transfers/{wireTransferId} | Update a wire transfer
[**pOSTWireTransfers()**](WireTransfersApi.md#pOSTWireTransfers) | **POST** /wire_transfers | Create a wire transfer


## `dELETEWireTransfersWireTransferId()`

```php
dELETEWireTransfersWireTransferId($wire_transfer_id)
```

Delete a wire transfer

Delete a wire transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WireTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wire_transfer_id = 'wire_transfer_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEWireTransfersWireTransferId($wire_transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling WireTransfersApi->dELETEWireTransfersWireTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wire_transfer_id** | **string**| The resource&#39;s id |

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

## `gETWireTransfers()`

```php
gETWireTransfers()
```

List all wire transfers

List all wire transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WireTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETWireTransfers();
} catch (Exception $e) {
    echo 'Exception when calling WireTransfersApi->gETWireTransfers: ', $e->getMessage(), PHP_EOL;
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

## `gETWireTransfersWireTransferId()`

```php
gETWireTransfersWireTransferId($wire_transfer_id): \OpenAPI\Client\Model\WireTransfer
```

Retrieve a wire transfer

Retrieve a wire transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WireTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wire_transfer_id = 'wire_transfer_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETWireTransfersWireTransferId($wire_transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WireTransfersApi->gETWireTransfersWireTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wire_transfer_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\WireTransfer**](../Model/WireTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHWireTransfersWireTransferId()`

```php
pATCHWireTransfersWireTransferId($wire_transfer_id, $wire_transfer_update)
```

Update a wire transfer

Update a wire transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WireTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wire_transfer_id = 'wire_transfer_id_example'; // string | The resource's id
$wire_transfer_update = new \OpenAPI\Client\Model\WireTransferUpdate(); // \OpenAPI\Client\Model\WireTransferUpdate

try {
    $apiInstance->pATCHWireTransfersWireTransferId($wire_transfer_id, $wire_transfer_update);
} catch (Exception $e) {
    echo 'Exception when calling WireTransfersApi->pATCHWireTransfersWireTransferId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wire_transfer_id** | **string**| The resource&#39;s id |
 **wire_transfer_update** | [**\OpenAPI\Client\Model\WireTransferUpdate**](../Model/WireTransferUpdate.md)|  |

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

## `pOSTWireTransfers()`

```php
pOSTWireTransfers($wire_transfer_create)
```

Create a wire transfer

Create a wire transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WireTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wire_transfer_create = new \OpenAPI\Client\Model\WireTransferCreate(); // \OpenAPI\Client\Model\WireTransferCreate

try {
    $apiInstance->pOSTWireTransfers($wire_transfer_create);
} catch (Exception $e) {
    echo 'Exception when calling WireTransfersApi->pOSTWireTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wire_transfer_create** | [**\OpenAPI\Client\Model\WireTransferCreate**](../Model/WireTransferCreate.md)|  |

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
