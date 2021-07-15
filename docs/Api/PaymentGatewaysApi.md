# OpenAPI\Client\PaymentGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPaymentGatewaysPaymentGatewayId()**](PaymentGatewaysApi.md#dELETEPaymentGatewaysPaymentGatewayId) | **DELETE** /payment_gateways/{paymentGatewayId} | Delete a payment gateway
[**gETPaymentGateways()**](PaymentGatewaysApi.md#gETPaymentGateways) | **GET** /payment_gateways | List all payment gateways
[**gETPaymentGatewaysPaymentGatewayId()**](PaymentGatewaysApi.md#gETPaymentGatewaysPaymentGatewayId) | **GET** /payment_gateways/{paymentGatewayId} | Retrieve a payment gateway
[**pATCHPaymentGatewaysPaymentGatewayId()**](PaymentGatewaysApi.md#pATCHPaymentGatewaysPaymentGatewayId) | **PATCH** /payment_gateways/{paymentGatewayId} | Update a payment gateway
[**pOSTPaymentGateways()**](PaymentGatewaysApi.md#pOSTPaymentGateways) | **POST** /payment_gateways | Create a payment gateway


## `dELETEPaymentGatewaysPaymentGatewayId()`

```php
dELETEPaymentGatewaysPaymentGatewayId($payment_gateway_id)
```

Delete a payment gateway

Delete a payment gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_gateway_id = 'payment_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPaymentGatewaysPaymentGatewayId($payment_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewaysApi->dELETEPaymentGatewaysPaymentGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_gateway_id** | **string**| The resource&#39;s id |

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

## `gETPaymentGateways()`

```php
gETPaymentGateways()
```

List all payment gateways

List all payment gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPaymentGateways();
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewaysApi->gETPaymentGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETPaymentGatewaysPaymentGatewayId()`

```php
gETPaymentGatewaysPaymentGatewayId($payment_gateway_id): \OpenAPI\Client\Model\PaymentGateway
```

Retrieve a payment gateway

Retrieve a payment gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_gateway_id = 'payment_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPaymentGatewaysPaymentGatewayId($payment_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewaysApi->gETPaymentGatewaysPaymentGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PaymentGateway**](../Model/PaymentGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPaymentGatewaysPaymentGatewayId()`

```php
pATCHPaymentGatewaysPaymentGatewayId($payment_gateway_id, $payment_gateway_update)
```

Update a payment gateway

Update a payment gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_gateway_id = 'payment_gateway_id_example'; // string | The resource's id
$payment_gateway_update = new \OpenAPI\Client\Model\PaymentGatewayUpdate(); // \OpenAPI\Client\Model\PaymentGatewayUpdate

try {
    $apiInstance->pATCHPaymentGatewaysPaymentGatewayId($payment_gateway_id, $payment_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewaysApi->pATCHPaymentGatewaysPaymentGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_gateway_id** | **string**| The resource&#39;s id |
 **payment_gateway_update** | [**\OpenAPI\Client\Model\PaymentGatewayUpdate**](../Model/PaymentGatewayUpdate.md)|  |

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

## `pOSTPaymentGateways()`

```php
pOSTPaymentGateways($payment_gateway_create)
```

Create a payment gateway

Create a payment gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_gateway_create = new \OpenAPI\Client\Model\PaymentGatewayCreate(); // \OpenAPI\Client\Model\PaymentGatewayCreate

try {
    $apiInstance->pOSTPaymentGateways($payment_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewaysApi->pOSTPaymentGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_gateway_create** | [**\OpenAPI\Client\Model\PaymentGatewayCreate**](../Model/PaymentGatewayCreate.md)|  |

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
