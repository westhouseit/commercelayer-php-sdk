# OpenAPI\Client\ShippingMethodsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEShippingMethodsShippingMethodId()**](ShippingMethodsApi.md#dELETEShippingMethodsShippingMethodId) | **DELETE** /shipping_methods/{shippingMethodId} | Delete a shipping method
[**gETShippingMethods()**](ShippingMethodsApi.md#gETShippingMethods) | **GET** /shipping_methods | List all shipping methods
[**gETShippingMethodsShippingMethodId()**](ShippingMethodsApi.md#gETShippingMethodsShippingMethodId) | **GET** /shipping_methods/{shippingMethodId} | Retrieve a shipping method
[**pATCHShippingMethodsShippingMethodId()**](ShippingMethodsApi.md#pATCHShippingMethodsShippingMethodId) | **PATCH** /shipping_methods/{shippingMethodId} | Update a shipping method
[**pOSTShippingMethods()**](ShippingMethodsApi.md#pOSTShippingMethods) | **POST** /shipping_methods | Create a shipping method


## `dELETEShippingMethodsShippingMethodId()`

```php
dELETEShippingMethodsShippingMethodId($shipping_method_id)
```

Delete a shipping method

Delete a shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEShippingMethodsShippingMethodId($shipping_method_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->dELETEShippingMethodsShippingMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

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

## `gETShippingMethods()`

```php
gETShippingMethods()
```

List all shipping methods

List all shipping methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETShippingMethods();
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->gETShippingMethods: ', $e->getMessage(), PHP_EOL;
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

## `gETShippingMethodsShippingMethodId()`

```php
gETShippingMethodsShippingMethodId($shipping_method_id): \OpenAPI\Client\Model\ShippingMethod
```

Retrieve a shipping method

Retrieve a shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETShippingMethodsShippingMethodId($shipping_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->gETShippingMethodsShippingMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ShippingMethod**](../Model/ShippingMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHShippingMethodsShippingMethodId()`

```php
pATCHShippingMethodsShippingMethodId($shipping_method_id, $shipping_method_update)
```

Update a shipping method

Update a shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_id = 'shipping_method_id_example'; // string | The resource's id
$shipping_method_update = new \OpenAPI\Client\Model\ShippingMethodUpdate(); // \OpenAPI\Client\Model\ShippingMethodUpdate

try {
    $apiInstance->pATCHShippingMethodsShippingMethodId($shipping_method_id, $shipping_method_update);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->pATCHShippingMethodsShippingMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **string**| The resource&#39;s id |
 **shipping_method_update** | [**\OpenAPI\Client\Model\ShippingMethodUpdate**](../Model/ShippingMethodUpdate.md)|  |

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

## `pOSTShippingMethods()`

```php
pOSTShippingMethods($shipping_method_create)
```

Create a shipping method

Create a shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_create = new \OpenAPI\Client\Model\ShippingMethodCreate(); // \OpenAPI\Client\Model\ShippingMethodCreate

try {
    $apiInstance->pOSTShippingMethods($shipping_method_create);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->pOSTShippingMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_create** | [**\OpenAPI\Client\Model\ShippingMethodCreate**](../Model/ShippingMethodCreate.md)|  |

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
