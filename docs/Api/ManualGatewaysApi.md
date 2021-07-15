# OpenAPI\Client\ManualGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEManualGatewaysManualGatewayId()**](ManualGatewaysApi.md#dELETEManualGatewaysManualGatewayId) | **DELETE** /manual_gateways/{manualGatewayId} | Delete a manual gateway
[**gETManualGateways()**](ManualGatewaysApi.md#gETManualGateways) | **GET** /manual_gateways | List all manual gateways
[**gETManualGatewaysManualGatewayId()**](ManualGatewaysApi.md#gETManualGatewaysManualGatewayId) | **GET** /manual_gateways/{manualGatewayId} | Retrieve a manual gateway
[**pATCHManualGatewaysManualGatewayId()**](ManualGatewaysApi.md#pATCHManualGatewaysManualGatewayId) | **PATCH** /manual_gateways/{manualGatewayId} | Update a manual gateway
[**pOSTManualGateways()**](ManualGatewaysApi.md#pOSTManualGateways) | **POST** /manual_gateways | Create a manual gateway


## `dELETEManualGatewaysManualGatewayId()`

```php
dELETEManualGatewaysManualGatewayId($manual_gateway_id)
```

Delete a manual gateway

Delete a manual gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_gateway_id = 'manual_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEManualGatewaysManualGatewayId($manual_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling ManualGatewaysApi->dELETEManualGatewaysManualGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_gateway_id** | **string**| The resource&#39;s id |

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

## `gETManualGateways()`

```php
gETManualGateways()
```

List all manual gateways

List all manual gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETManualGateways();
} catch (Exception $e) {
    echo 'Exception when calling ManualGatewaysApi->gETManualGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETManualGatewaysManualGatewayId()`

```php
gETManualGatewaysManualGatewayId($manual_gateway_id): \OpenAPI\Client\Model\ManualGateway
```

Retrieve a manual gateway

Retrieve a manual gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_gateway_id = 'manual_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETManualGatewaysManualGatewayId($manual_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualGatewaysApi->gETManualGatewaysManualGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ManualGateway**](../Model/ManualGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHManualGatewaysManualGatewayId()`

```php
pATCHManualGatewaysManualGatewayId($manual_gateway_id, $manual_gateway_update)
```

Update a manual gateway

Update a manual gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_gateway_id = 'manual_gateway_id_example'; // string | The resource's id
$manual_gateway_update = new \OpenAPI\Client\Model\ManualGatewayUpdate(); // \OpenAPI\Client\Model\ManualGatewayUpdate

try {
    $apiInstance->pATCHManualGatewaysManualGatewayId($manual_gateway_id, $manual_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling ManualGatewaysApi->pATCHManualGatewaysManualGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_gateway_id** | **string**| The resource&#39;s id |
 **manual_gateway_update** | [**\OpenAPI\Client\Model\ManualGatewayUpdate**](../Model/ManualGatewayUpdate.md)|  |

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

## `pOSTManualGateways()`

```php
pOSTManualGateways($manual_gateway_create)
```

Create a manual gateway

Create a manual gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ManualGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manual_gateway_create = new \OpenAPI\Client\Model\ManualGatewayCreate(); // \OpenAPI\Client\Model\ManualGatewayCreate

try {
    $apiInstance->pOSTManualGateways($manual_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling ManualGatewaysApi->pOSTManualGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_gateway_create** | [**\OpenAPI\Client\Model\ManualGatewayCreate**](../Model/ManualGatewayCreate.md)|  |

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
