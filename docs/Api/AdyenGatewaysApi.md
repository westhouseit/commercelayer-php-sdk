# OpenAPI\Client\AdyenGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAdyenGatewaysAdyenGatewayId()**](AdyenGatewaysApi.md#dELETEAdyenGatewaysAdyenGatewayId) | **DELETE** /adyen_gateways/{adyenGatewayId} | Delete an adyen gateway
[**gETAdyenGateways()**](AdyenGatewaysApi.md#gETAdyenGateways) | **GET** /adyen_gateways | List all adyen gateways
[**gETAdyenGatewaysAdyenGatewayId()**](AdyenGatewaysApi.md#gETAdyenGatewaysAdyenGatewayId) | **GET** /adyen_gateways/{adyenGatewayId} | Retrieve an adyen gateway
[**pATCHAdyenGatewaysAdyenGatewayId()**](AdyenGatewaysApi.md#pATCHAdyenGatewaysAdyenGatewayId) | **PATCH** /adyen_gateways/{adyenGatewayId} | Update an adyen gateway
[**pOSTAdyenGateways()**](AdyenGatewaysApi.md#pOSTAdyenGateways) | **POST** /adyen_gateways | Create an adyen gateway


## `dELETEAdyenGatewaysAdyenGatewayId()`

```php
dELETEAdyenGatewaysAdyenGatewayId($adyen_gateway_id)
```

Delete an adyen gateway

Delete an adyen gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_gateway_id = 'adyen_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAdyenGatewaysAdyenGatewayId($adyen_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling AdyenGatewaysApi->dELETEAdyenGatewaysAdyenGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_gateway_id** | **string**| The resource&#39;s id |

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

## `gETAdyenGateways()`

```php
gETAdyenGateways()
```

List all adyen gateways

List all adyen gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAdyenGateways();
} catch (Exception $e) {
    echo 'Exception when calling AdyenGatewaysApi->gETAdyenGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETAdyenGatewaysAdyenGatewayId()`

```php
gETAdyenGatewaysAdyenGatewayId($adyen_gateway_id): \OpenAPI\Client\Model\AdyenGateway
```

Retrieve an adyen gateway

Retrieve an adyen gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_gateway_id = 'adyen_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAdyenGatewaysAdyenGatewayId($adyen_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdyenGatewaysApi->gETAdyenGatewaysAdyenGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\AdyenGateway**](../Model/AdyenGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAdyenGatewaysAdyenGatewayId()`

```php
pATCHAdyenGatewaysAdyenGatewayId($adyen_gateway_id, $adyen_gateway_update)
```

Update an adyen gateway

Update an adyen gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_gateway_id = 'adyen_gateway_id_example'; // string | The resource's id
$adyen_gateway_update = new \OpenAPI\Client\Model\AdyenGatewayUpdate(); // \OpenAPI\Client\Model\AdyenGatewayUpdate

try {
    $apiInstance->pATCHAdyenGatewaysAdyenGatewayId($adyen_gateway_id, $adyen_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling AdyenGatewaysApi->pATCHAdyenGatewaysAdyenGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_gateway_id** | **string**| The resource&#39;s id |
 **adyen_gateway_update** | [**\OpenAPI\Client\Model\AdyenGatewayUpdate**](../Model/AdyenGatewayUpdate.md)|  |

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

## `pOSTAdyenGateways()`

```php
pOSTAdyenGateways($adyen_gateway_create)
```

Create an adyen gateway

Create an adyen gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_gateway_create = new \OpenAPI\Client\Model\AdyenGatewayCreate(); // \OpenAPI\Client\Model\AdyenGatewayCreate

try {
    $apiInstance->pOSTAdyenGateways($adyen_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling AdyenGatewaysApi->pOSTAdyenGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_gateway_create** | [**\OpenAPI\Client\Model\AdyenGatewayCreate**](../Model/AdyenGatewayCreate.md)|  |

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
