# OpenAPI\Client\BraintreeGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEBraintreeGatewaysBraintreeGatewayId()**](BraintreeGatewaysApi.md#dELETEBraintreeGatewaysBraintreeGatewayId) | **DELETE** /braintree_gateways/{braintreeGatewayId} | Delete a braintree gateway
[**gETBraintreeGateways()**](BraintreeGatewaysApi.md#gETBraintreeGateways) | **GET** /braintree_gateways | List all braintree gateways
[**gETBraintreeGatewaysBraintreeGatewayId()**](BraintreeGatewaysApi.md#gETBraintreeGatewaysBraintreeGatewayId) | **GET** /braintree_gateways/{braintreeGatewayId} | Retrieve a braintree gateway
[**pATCHBraintreeGatewaysBraintreeGatewayId()**](BraintreeGatewaysApi.md#pATCHBraintreeGatewaysBraintreeGatewayId) | **PATCH** /braintree_gateways/{braintreeGatewayId} | Update a braintree gateway
[**pOSTBraintreeGateways()**](BraintreeGatewaysApi.md#pOSTBraintreeGateways) | **POST** /braintree_gateways | Create a braintree gateway


## `dELETEBraintreeGatewaysBraintreeGatewayId()`

```php
dELETEBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id)
```

Delete a braintree gateway

Delete a braintree gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_gateway_id = 'braintree_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling BraintreeGatewaysApi->dELETEBraintreeGatewaysBraintreeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_gateway_id** | **string**| The resource&#39;s id |

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

## `gETBraintreeGateways()`

```php
gETBraintreeGateways()
```

List all braintree gateways

List all braintree gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETBraintreeGateways();
} catch (Exception $e) {
    echo 'Exception when calling BraintreeGatewaysApi->gETBraintreeGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETBraintreeGatewaysBraintreeGatewayId()`

```php
gETBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id): \OpenAPI\Client\Model\BraintreeGateway
```

Retrieve a braintree gateway

Retrieve a braintree gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_gateway_id = 'braintree_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BraintreeGatewaysApi->gETBraintreeGatewaysBraintreeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\BraintreeGateway**](../Model/BraintreeGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHBraintreeGatewaysBraintreeGatewayId()`

```php
pATCHBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id, $braintree_gateway_update)
```

Update a braintree gateway

Update a braintree gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_gateway_id = 'braintree_gateway_id_example'; // string | The resource's id
$braintree_gateway_update = new \OpenAPI\Client\Model\BraintreeGatewayUpdate(); // \OpenAPI\Client\Model\BraintreeGatewayUpdate

try {
    $apiInstance->pATCHBraintreeGatewaysBraintreeGatewayId($braintree_gateway_id, $braintree_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling BraintreeGatewaysApi->pATCHBraintreeGatewaysBraintreeGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_gateway_id** | **string**| The resource&#39;s id |
 **braintree_gateway_update** | [**\OpenAPI\Client\Model\BraintreeGatewayUpdate**](../Model/BraintreeGatewayUpdate.md)|  |

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

## `pOSTBraintreeGateways()`

```php
pOSTBraintreeGateways($braintree_gateway_create)
```

Create a braintree gateway

Create a braintree gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreeGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_gateway_create = new \OpenAPI\Client\Model\BraintreeGatewayCreate(); // \OpenAPI\Client\Model\BraintreeGatewayCreate

try {
    $apiInstance->pOSTBraintreeGateways($braintree_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling BraintreeGatewaysApi->pOSTBraintreeGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_gateway_create** | [**\OpenAPI\Client\Model\BraintreeGatewayCreate**](../Model/BraintreeGatewayCreate.md)|  |

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
