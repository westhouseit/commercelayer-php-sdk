# OpenAPI\Client\OrdersApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEOrdersOrderId()**](OrdersApi.md#dELETEOrdersOrderId) | **DELETE** /orders/{orderId} | Delete an order
[**gETOrders()**](OrdersApi.md#gETOrders) | **GET** /orders | List all orders
[**gETOrdersOrderId()**](OrdersApi.md#gETOrdersOrderId) | **GET** /orders/{orderId} | Retrieve an order
[**pATCHOrdersOrderId()**](OrdersApi.md#pATCHOrdersOrderId) | **PATCH** /orders/{orderId} | Update an order
[**pOSTOrders()**](OrdersApi.md#pOSTOrders) | **POST** /orders | Create an order


## `dELETEOrdersOrderId()`

```php
dELETEOrdersOrderId($order_id)
```

Delete an order

Delete an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEOrdersOrderId($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->dELETEOrdersOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

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

## `gETOrders()`

```php
gETOrders()
```

List all orders

List all orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETOrders();
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->gETOrders: ', $e->getMessage(), PHP_EOL;
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

## `gETOrdersOrderId()`

```php
gETOrdersOrderId($order_id): \OpenAPI\Client\Model\Order
```

Retrieve an order

Retrieve an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETOrdersOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->gETOrdersOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHOrdersOrderId()`

```php
pATCHOrdersOrderId($order_id, $order_update)
```

Update an order

Update an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The resource's id
$order_update = new \OpenAPI\Client\Model\OrderUpdate(); // \OpenAPI\Client\Model\OrderUpdate

try {
    $apiInstance->pATCHOrdersOrderId($order_id, $order_update);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->pATCHOrdersOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The resource&#39;s id |
 **order_update** | [**\OpenAPI\Client\Model\OrderUpdate**](../Model/OrderUpdate.md)|  |

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

## `pOSTOrders()`

```php
pOSTOrders($order_create)
```

Create an order

Create an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_create = new \OpenAPI\Client\Model\OrderCreate(); // \OpenAPI\Client\Model\OrderCreate

try {
    $apiInstance->pOSTOrders($order_create);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->pOSTOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_create** | [**\OpenAPI\Client\Model\OrderCreate**](../Model/OrderCreate.md)|  |

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
