# OpenAPI\Client\StripeGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStripeGatewaysStripeGatewayId()**](StripeGatewaysApi.md#dELETEStripeGatewaysStripeGatewayId) | **DELETE** /stripe_gateways/{stripeGatewayId} | Delete a stripe gateway
[**gETStripeGateways()**](StripeGatewaysApi.md#gETStripeGateways) | **GET** /stripe_gateways | List all stripe gateways
[**gETStripeGatewaysStripeGatewayId()**](StripeGatewaysApi.md#gETStripeGatewaysStripeGatewayId) | **GET** /stripe_gateways/{stripeGatewayId} | Retrieve a stripe gateway
[**pATCHStripeGatewaysStripeGatewayId()**](StripeGatewaysApi.md#pATCHStripeGatewaysStripeGatewayId) | **PATCH** /stripe_gateways/{stripeGatewayId} | Update a stripe gateway
[**pOSTStripeGateways()**](StripeGatewaysApi.md#pOSTStripeGateways) | **POST** /stripe_gateways | Create a stripe gateway


## `dELETEStripeGatewaysStripeGatewayId()`

```php
dELETEStripeGatewaysStripeGatewayId($stripe_gateway_id)
```

Delete a stripe gateway

Delete a stripe gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_gateway_id = 'stripe_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStripeGatewaysStripeGatewayId($stripe_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling StripeGatewaysApi->dELETEStripeGatewaysStripeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_gateway_id** | **string**| The resource&#39;s id |

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

## `gETStripeGateways()`

```php
gETStripeGateways()
```

List all stripe gateways

List all stripe gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStripeGateways();
} catch (Exception $e) {
    echo 'Exception when calling StripeGatewaysApi->gETStripeGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETStripeGatewaysStripeGatewayId()`

```php
gETStripeGatewaysStripeGatewayId($stripe_gateway_id): \OpenAPI\Client\Model\StripeGateway
```

Retrieve a stripe gateway

Retrieve a stripe gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_gateway_id = 'stripe_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStripeGatewaysStripeGatewayId($stripe_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeGatewaysApi->gETStripeGatewaysStripeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StripeGateway**](../Model/StripeGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStripeGatewaysStripeGatewayId()`

```php
pATCHStripeGatewaysStripeGatewayId($stripe_gateway_id, $stripe_gateway_update)
```

Update a stripe gateway

Update a stripe gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_gateway_id = 'stripe_gateway_id_example'; // string | The resource's id
$stripe_gateway_update = new \OpenAPI\Client\Model\StripeGatewayUpdate(); // \OpenAPI\Client\Model\StripeGatewayUpdate

try {
    $apiInstance->pATCHStripeGatewaysStripeGatewayId($stripe_gateway_id, $stripe_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling StripeGatewaysApi->pATCHStripeGatewaysStripeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_gateway_id** | **string**| The resource&#39;s id |
 **stripe_gateway_update** | [**\OpenAPI\Client\Model\StripeGatewayUpdate**](../Model/StripeGatewayUpdate.md)|  |

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

## `pOSTStripeGateways()`

```php
pOSTStripeGateways($stripe_gateway_create)
```

Create a stripe gateway

Create a stripe gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_gateway_create = new \OpenAPI\Client\Model\StripeGatewayCreate(); // \OpenAPI\Client\Model\StripeGatewayCreate

try {
    $apiInstance->pOSTStripeGateways($stripe_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling StripeGatewaysApi->pOSTStripeGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_gateway_create** | [**\OpenAPI\Client\Model\StripeGatewayCreate**](../Model/StripeGatewayCreate.md)|  |

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
