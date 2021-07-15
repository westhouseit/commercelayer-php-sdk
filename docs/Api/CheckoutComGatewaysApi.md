# OpenAPI\Client\CheckoutComGatewaysApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECheckoutComGatewaysCheckoutComGatewayId()**](CheckoutComGatewaysApi.md#dELETECheckoutComGatewaysCheckoutComGatewayId) | **DELETE** /checkout_com_gateways/{checkoutComGatewayId} | Delete a checkout com gateway
[**gETCheckoutComGateways()**](CheckoutComGatewaysApi.md#gETCheckoutComGateways) | **GET** /checkout_com_gateways | List all checkout com gateways
[**gETCheckoutComGatewaysCheckoutComGatewayId()**](CheckoutComGatewaysApi.md#gETCheckoutComGatewaysCheckoutComGatewayId) | **GET** /checkout_com_gateways/{checkoutComGatewayId} | Retrieve a checkout com gateway
[**pATCHCheckoutComGatewaysCheckoutComGatewayId()**](CheckoutComGatewaysApi.md#pATCHCheckoutComGatewaysCheckoutComGatewayId) | **PATCH** /checkout_com_gateways/{checkoutComGatewayId} | Update a checkout com gateway
[**pOSTCheckoutComGateways()**](CheckoutComGatewaysApi.md#pOSTCheckoutComGateways) | **POST** /checkout_com_gateways | Create a checkout com gateway


## `dELETECheckoutComGatewaysCheckoutComGatewayId()`

```php
dELETECheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id)
```

Delete a checkout com gateway

Delete a checkout com gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_gateway_id = 'checkout_com_gateway_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComGatewaysApi->dELETECheckoutComGatewaysCheckoutComGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_gateway_id** | **string**| The resource&#39;s id |

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

## `gETCheckoutComGateways()`

```php
gETCheckoutComGateways()
```

List all checkout com gateways

List all checkout com gateways

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCheckoutComGateways();
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComGatewaysApi->gETCheckoutComGateways: ', $e->getMessage(), PHP_EOL;
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

## `gETCheckoutComGatewaysCheckoutComGatewayId()`

```php
gETCheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id): \OpenAPI\Client\Model\CheckoutComGateway
```

Retrieve a checkout com gateway

Retrieve a checkout com gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_gateway_id = 'checkout_com_gateway_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComGatewaysApi->gETCheckoutComGatewaysCheckoutComGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_gateway_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CheckoutComGateway**](../Model/CheckoutComGateway.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCheckoutComGatewaysCheckoutComGatewayId()`

```php
pATCHCheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id, $checkout_com_gateway_update)
```

Update a checkout com gateway

Update a checkout com gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_gateway_id = 'checkout_com_gateway_id_example'; // string | The resource's id
$checkout_com_gateway_update = new \OpenAPI\Client\Model\CheckoutComGatewayUpdate(); // \OpenAPI\Client\Model\CheckoutComGatewayUpdate

try {
    $apiInstance->pATCHCheckoutComGatewaysCheckoutComGatewayId($checkout_com_gateway_id, $checkout_com_gateway_update);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComGatewaysApi->pATCHCheckoutComGatewaysCheckoutComGatewayId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_gateway_id** | **string**| The resource&#39;s id |
 **checkout_com_gateway_update** | [**\OpenAPI\Client\Model\CheckoutComGatewayUpdate**](../Model/CheckoutComGatewayUpdate.md)|  |

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

## `pOSTCheckoutComGateways()`

```php
pOSTCheckoutComGateways($checkout_com_gateway_create)
```

Create a checkout com gateway

Create a checkout com gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_gateway_create = new \OpenAPI\Client\Model\CheckoutComGatewayCreate(); // \OpenAPI\Client\Model\CheckoutComGatewayCreate

try {
    $apiInstance->pOSTCheckoutComGateways($checkout_com_gateway_create);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComGatewaysApi->pOSTCheckoutComGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_gateway_create** | [**\OpenAPI\Client\Model\CheckoutComGatewayCreate**](../Model/CheckoutComGatewayCreate.md)|  |

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
