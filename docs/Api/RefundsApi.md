# OpenAPI\Client\RefundsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETERefundsRefundId()**](RefundsApi.md#dELETERefundsRefundId) | **DELETE** /refunds/{refundId} | Delete a refund
[**gETRefunds()**](RefundsApi.md#gETRefunds) | **GET** /refunds | List all refunds
[**gETRefundsRefundId()**](RefundsApi.md#gETRefundsRefundId) | **GET** /refunds/{refundId} | Retrieve a refund
[**pATCHRefundsRefundId()**](RefundsApi.md#pATCHRefundsRefundId) | **PATCH** /refunds/{refundId} | Update a refund
[**pOSTRefunds()**](RefundsApi.md#pOSTRefunds) | **POST** /refunds | Create a refund


## `dELETERefundsRefundId()`

```php
dELETERefundsRefundId($refund_id)
```

Delete a refund

Delete a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | The resource's id

try {
    $apiInstance->dELETERefundsRefundId($refund_id);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->dELETERefundsRefundId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The resource&#39;s id |

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

## `gETRefunds()`

```php
gETRefunds()
```

List all refunds

List all refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETRefunds();
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->gETRefunds: ', $e->getMessage(), PHP_EOL;
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

## `gETRefundsRefundId()`

```php
gETRefundsRefundId($refund_id): \OpenAPI\Client\Model\Refund
```

Retrieve a refund

Retrieve a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETRefundsRefundId($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->gETRefundsRefundId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHRefundsRefundId()`

```php
pATCHRefundsRefundId($refund_id, $refund_update)
```

Update a refund

Update a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | The resource's id
$refund_update = new \OpenAPI\Client\Model\RefundUpdate(); // \OpenAPI\Client\Model\RefundUpdate

try {
    $apiInstance->pATCHRefundsRefundId($refund_id, $refund_update);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->pATCHRefundsRefundId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The resource&#39;s id |
 **refund_update** | [**\OpenAPI\Client\Model\RefundUpdate**](../Model/RefundUpdate.md)|  |

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

## `pOSTRefunds()`

```php
pOSTRefunds($refund_create)
```

Create a refund

Create a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_create = new \OpenAPI\Client\Model\RefundCreate(); // \OpenAPI\Client\Model\RefundCreate

try {
    $apiInstance->pOSTRefunds($refund_create);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->pOSTRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_create** | [**\OpenAPI\Client\Model\RefundCreate**](../Model/RefundCreate.md)|  |

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
