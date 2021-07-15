# OpenAPI\Client\PaypalPaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPaypalPaymentsPaypalPaymentId()**](PaypalPaymentsApi.md#dELETEPaypalPaymentsPaypalPaymentId) | **DELETE** /paypal_payments/{paypalPaymentId} | Delete a paypal payment
[**gETPaypalPayments()**](PaypalPaymentsApi.md#gETPaypalPayments) | **GET** /paypal_payments | List all paypal payments
[**gETPaypalPaymentsPaypalPaymentId()**](PaypalPaymentsApi.md#gETPaypalPaymentsPaypalPaymentId) | **GET** /paypal_payments/{paypalPaymentId} | Retrieve a paypal payment
[**pATCHPaypalPaymentsPaypalPaymentId()**](PaypalPaymentsApi.md#pATCHPaypalPaymentsPaypalPaymentId) | **PATCH** /paypal_payments/{paypalPaymentId} | Update a paypal payment
[**pOSTPaypalPayments()**](PaypalPaymentsApi.md#pOSTPaypalPayments) | **POST** /paypal_payments | Create a paypal payment


## `dELETEPaypalPaymentsPaypalPaymentId()`

```php
dELETEPaypalPaymentsPaypalPaymentId($paypal_payment_id)
```

Delete a paypal payment

Delete a paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_id = 'paypal_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPaypalPaymentsPaypalPaymentId($paypal_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PaypalPaymentsApi->dELETEPaypalPaymentsPaypalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_id** | **string**| The resource&#39;s id |

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

## `gETPaypalPayments()`

```php
gETPaypalPayments()
```

List all paypal payments

List all paypal payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPaypalPayments();
} catch (Exception $e) {
    echo 'Exception when calling PaypalPaymentsApi->gETPaypalPayments: ', $e->getMessage(), PHP_EOL;
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

## `gETPaypalPaymentsPaypalPaymentId()`

```php
gETPaypalPaymentsPaypalPaymentId($paypal_payment_id): \OpenAPI\Client\Model\PaypalPayment
```

Retrieve a paypal payment

Retrieve a paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_id = 'paypal_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPaypalPaymentsPaypalPaymentId($paypal_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaypalPaymentsApi->gETPaypalPaymentsPaypalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PaypalPayment**](../Model/PaypalPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPaypalPaymentsPaypalPaymentId()`

```php
pATCHPaypalPaymentsPaypalPaymentId($paypal_payment_id, $paypal_payment_update)
```

Update a paypal payment

Update a paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_id = 'paypal_payment_id_example'; // string | The resource's id
$paypal_payment_update = new \OpenAPI\Client\Model\PaypalPaymentUpdate(); // \OpenAPI\Client\Model\PaypalPaymentUpdate

try {
    $apiInstance->pATCHPaypalPaymentsPaypalPaymentId($paypal_payment_id, $paypal_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling PaypalPaymentsApi->pATCHPaypalPaymentsPaypalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_id** | **string**| The resource&#39;s id |
 **paypal_payment_update** | [**\OpenAPI\Client\Model\PaypalPaymentUpdate**](../Model/PaypalPaymentUpdate.md)|  |

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

## `pOSTPaypalPayments()`

```php
pOSTPaypalPayments($paypal_payment_create)
```

Create a paypal payment

Create a paypal payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaypalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paypal_payment_create = new \OpenAPI\Client\Model\PaypalPaymentCreate(); // \OpenAPI\Client\Model\PaypalPaymentCreate

try {
    $apiInstance->pOSTPaypalPayments($paypal_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling PaypalPaymentsApi->pOSTPaypalPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paypal_payment_create** | [**\OpenAPI\Client\Model\PaypalPaymentCreate**](../Model/PaypalPaymentCreate.md)|  |

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
