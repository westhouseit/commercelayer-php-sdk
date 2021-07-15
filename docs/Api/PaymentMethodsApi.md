# OpenAPI\Client\PaymentMethodsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPaymentMethodsPaymentMethodId()**](PaymentMethodsApi.md#dELETEPaymentMethodsPaymentMethodId) | **DELETE** /payment_methods/{paymentMethodId} | Delete a payment method
[**gETPaymentMethods()**](PaymentMethodsApi.md#gETPaymentMethods) | **GET** /payment_methods | List all payment methods
[**gETPaymentMethodsPaymentMethodId()**](PaymentMethodsApi.md#gETPaymentMethodsPaymentMethodId) | **GET** /payment_methods/{paymentMethodId} | Retrieve a payment method
[**pATCHPaymentMethodsPaymentMethodId()**](PaymentMethodsApi.md#pATCHPaymentMethodsPaymentMethodId) | **PATCH** /payment_methods/{paymentMethodId} | Update a payment method
[**pOSTPaymentMethods()**](PaymentMethodsApi.md#pOSTPaymentMethods) | **POST** /payment_methods | Create a payment method


## `dELETEPaymentMethodsPaymentMethodId()`

```php
dELETEPaymentMethodsPaymentMethodId($payment_method_id)
```

Delete a payment method

Delete a payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 'payment_method_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPaymentMethodsPaymentMethodId($payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->dELETEPaymentMethodsPaymentMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The resource&#39;s id |

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

## `gETPaymentMethods()`

```php
gETPaymentMethods()
```

List all payment methods

List all payment methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPaymentMethods();
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->gETPaymentMethods: ', $e->getMessage(), PHP_EOL;
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

## `gETPaymentMethodsPaymentMethodId()`

```php
gETPaymentMethodsPaymentMethodId($payment_method_id): \OpenAPI\Client\Model\PaymentMethod
```

Retrieve a payment method

Retrieve a payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 'payment_method_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPaymentMethodsPaymentMethodId($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->gETPaymentMethodsPaymentMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPaymentMethodsPaymentMethodId()`

```php
pATCHPaymentMethodsPaymentMethodId($payment_method_id, $payment_method_update)
```

Update a payment method

Update a payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 'payment_method_id_example'; // string | The resource's id
$payment_method_update = new \OpenAPI\Client\Model\PaymentMethodUpdate(); // \OpenAPI\Client\Model\PaymentMethodUpdate

try {
    $apiInstance->pATCHPaymentMethodsPaymentMethodId($payment_method_id, $payment_method_update);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->pATCHPaymentMethodsPaymentMethodId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The resource&#39;s id |
 **payment_method_update** | [**\OpenAPI\Client\Model\PaymentMethodUpdate**](../Model/PaymentMethodUpdate.md)|  |

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

## `pOSTPaymentMethods()`

```php
pOSTPaymentMethods($payment_method_create)
```

Create a payment method

Create a payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_create = new \OpenAPI\Client\Model\PaymentMethodCreate(); // \OpenAPI\Client\Model\PaymentMethodCreate

try {
    $apiInstance->pOSTPaymentMethods($payment_method_create);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->pOSTPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_create** | [**\OpenAPI\Client\Model\PaymentMethodCreate**](../Model/PaymentMethodCreate.md)|  |

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
