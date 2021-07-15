# OpenAPI\Client\ExternalGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEExternalGatewaysExternalGatewayId()**](ExternalGatewaysApi.md#dELETEExternalGatewaysExternalGatewayId) | **DELETE** /external_gateways/{externalGatewayId} | Delete an external gateway
[**gETExternalGateways()**](ExternalGatewaysApi.md#gETExternalGateways) | **GET** /external_gateways | List all external gateways
[**gETExternalGatewaysExternalGatewayId()**](ExternalGatewaysApi.md#gETExternalGatewaysExternalGatewayId) | **GET** /external_gateways/{externalGatewayId} | Retrieve an external gateway
[**pATCHExternalGatewaysExternalGatewayId()**](ExternalGatewaysApi.md#pATCHExternalGatewaysExternalGatewayId) | **PATCH** /external_gateways/{externalGatewayId} | Update an external gateway
[**pOSTExternalGateways()**](ExternalGatewaysApi.md#pOSTExternalGateways) | **POST** /external_gateways | Create an external gateway


## `dELETEExternalGatewaysExternalGatewayId()`

```php
dELETEExternalGatewaysExternalGatewayId($external_gateway_id)
```

Delete an external gateway

Delete an external gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_gateway_id = 'external_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEExternalGatewaysExternalGatewayId($external_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalGatewaysApi->dELETEExternalGatewaysExternalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_gateway_id** | **string**| The resource&#39;s id |

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

## `gETExternalGateways()`

```php
gETExternalGateways()
```

List all external gateways

List all external gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETExternalGateways();
} catch (Exception $e) {
    echo 'Exception when calling ExternalGatewaysApi->gETExternalGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETExternalGatewaysExternalGatewayId()`

```php
gETExternalGatewaysExternalGatewayId($external_gateway_id): \OpenAPI\Client\Model\ExternalGateway
```

Retrieve an external gateway

Retrieve an external gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_gateway_id = 'external_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETExternalGatewaysExternalGatewayId($external_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalGatewaysApi->gETExternalGatewaysExternalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ExternalGateway**](../Model/ExternalGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHExternalGatewaysExternalGatewayId()`

```php
pATCHExternalGatewaysExternalGatewayId($external_gateway_id, $external_gateway_update)
```

Update an external gateway

Update an external gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_gateway_id = 'external_gateway_id_example'; // string | The resource's id
$external_gateway_update = new \OpenAPI\Client\Model\ExternalGatewayUpdate(); // \OpenAPI\Client\Model\ExternalGatewayUpdate

try {
    $apiInstance->pATCHExternalGatewaysExternalGatewayId($external_gateway_id, $external_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling ExternalGatewaysApi->pATCHExternalGatewaysExternalGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_gateway_id** | **string**| The resource&#39;s id |
 **external_gateway_update** | [**\OpenAPI\Client\Model\ExternalGatewayUpdate**](../Model/ExternalGatewayUpdate.md)|  |

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

## `pOSTExternalGateways()`

```php
pOSTExternalGateways($external_gateway_create)
```

Create an external gateway

Create an external gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_gateway_create = new \OpenAPI\Client\Model\ExternalGatewayCreate(); // \OpenAPI\Client\Model\ExternalGatewayCreate

try {
    $apiInstance->pOSTExternalGateways($external_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling ExternalGatewaysApi->pOSTExternalGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_gateway_create** | [**\OpenAPI\Client\Model\ExternalGatewayCreate**](../Model/ExternalGatewayCreate.md)|  |

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
