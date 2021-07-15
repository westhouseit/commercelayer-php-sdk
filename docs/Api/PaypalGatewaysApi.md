# OpenAPI\Client\PaypalGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPaypalGatewaysPaypalGatewayId()**](PaypalGatewaysApi.md#dELETEPaypalGatewaysPaypalGatewayId) | **DELETE** /paypal_gateways/{paypalGatewayId} | Delete a paypal gateway
[**gETPaypalGateways()**](PaypalGatewaysApi.md#gETPaypalGateways) | **GET** /paypal_gateways | List all paypal gateways
[**gETPaypalGatewaysPaypalGatewayId()**](PaypalGatewaysApi.md#gETPaypalGatewaysPaypalGatewayId) | **GET** /paypal_gateways/{paypalGatewayId} | Retrieve a paypal gateway
[**pATCHPaypalGatewaysPaypalGatewayId()**](PaypalGatewaysApi.md#pATCHPaypalGatewaysPaypalGatewayId) | **PATCH** /paypal_gateways/{paypalGatewayId} | Update a paypal gateway
[**pOSTPaypalGateways()**](PaypalGatewaysApi.md#pOSTPaypalGateways) | **POST** /paypal_gateways | Create a paypal gateway


## `dELETEPaypalGatewaysPaypalGatewayId()`

```php
dELETEPaypalGatewaysPaypalGatewayId($paypal_gateway_id)
```

Delete a paypal gateway

Delete a paypal gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_gateway_id = 'paypal_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPaypalGatewaysPaypalGatewayId($paypal_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling PaypalGatewaysApi->dELETEPaypalGatewaysPaypalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_gateway_id** | **string**| The resource&#39;s id |

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

## `gETPaypalGateways()`

```php
gETPaypalGateways()
```

List all paypal gateways

List all paypal gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPaypalGateways();
} catch (Exception $e) {
    echo 'Exception when calling PaypalGatewaysApi->gETPaypalGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETPaypalGatewaysPaypalGatewayId()`

```php
gETPaypalGatewaysPaypalGatewayId($paypal_gateway_id): \OpenAPI\Client\Model\PaypalGateway
```

Retrieve a paypal gateway

Retrieve a paypal gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_gateway_id = 'paypal_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPaypalGatewaysPaypalGatewayId($paypal_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaypalGatewaysApi->gETPaypalGatewaysPaypalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PaypalGateway**](../Model/PaypalGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPaypalGatewaysPaypalGatewayId()`

```php
pATCHPaypalGatewaysPaypalGatewayId($paypal_gateway_id, $paypal_gateway_update)
```

Update a paypal gateway

Update a paypal gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_gateway_id = 'paypal_gateway_id_example'; // string | The resource's id
$paypal_gateway_update = new \OpenAPI\Client\Model\PaypalGatewayUpdate(); // \OpenAPI\Client\Model\PaypalGatewayUpdate

try {
    $apiInstance->pATCHPaypalGatewaysPaypalGatewayId($paypal_gateway_id, $paypal_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling PaypalGatewaysApi->pATCHPaypalGatewaysPaypalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_gateway_id** | **string**| The resource&#39;s id |
 **paypal_gateway_update** | [**\OpenAPI\Client\Model\PaypalGatewayUpdate**](../Model/PaypalGatewayUpdate.md)|  |

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

## `pOSTPaypalGateways()`

```php
pOSTPaypalGateways($paypal_gateway_create)
```

Create a paypal gateway

Create a paypal gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_gateway_create = new \OpenAPI\Client\Model\PaypalGatewayCreate(); // \OpenAPI\Client\Model\PaypalGatewayCreate

try {
    $apiInstance->pOSTPaypalGateways($paypal_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling PaypalGatewaysApi->pOSTPaypalGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_gateway_create** | [**\OpenAPI\Client\Model\PaypalGatewayCreate**](../Model/PaypalGatewayCreate.md)|  |

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
