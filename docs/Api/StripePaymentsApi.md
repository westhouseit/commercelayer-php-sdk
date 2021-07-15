# OpenAPI\Client\StripePaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEStripePaymentsStripePaymentId()**](StripePaymentsApi.md#dELETEStripePaymentsStripePaymentId) | **DELETE** /stripe_payments/{stripePaymentId} | Delete a stripe payment
[**gETStripePayments()**](StripePaymentsApi.md#gETStripePayments) | **GET** /stripe_payments | List all stripe payments
[**gETStripePaymentsStripePaymentId()**](StripePaymentsApi.md#gETStripePaymentsStripePaymentId) | **GET** /stripe_payments/{stripePaymentId} | Retrieve a stripe payment
[**pATCHStripePaymentsStripePaymentId()**](StripePaymentsApi.md#pATCHStripePaymentsStripePaymentId) | **PATCH** /stripe_payments/{stripePaymentId} | Update a stripe payment
[**pOSTStripePayments()**](StripePaymentsApi.md#pOSTStripePayments) | **POST** /stripe_payments | Create a stripe payment


## `dELETEStripePaymentsStripePaymentId()`

```php
dELETEStripePaymentsStripePaymentId($stripe_payment_id)
```

Delete a stripe payment

Delete a stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_id = 'stripe_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEStripePaymentsStripePaymentId($stripe_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling StripePaymentsApi->dELETEStripePaymentsStripePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_id** | **string**| The resource&#39;s id |

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

## `gETStripePayments()`

```php
gETStripePayments()
```

List all stripe payments

List all stripe payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETStripePayments();
} catch (Exception $e) {
    echo 'Exception when calling StripePaymentsApi->gETStripePayments: ', $e->getMessage(), PHP_EOL;
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

## `gETStripePaymentsStripePaymentId()`

```php
gETStripePaymentsStripePaymentId($stripe_payment_id): \OpenAPI\Client\Model\StripePayment
```

Retrieve a stripe payment

Retrieve a stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_id = 'stripe_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETStripePaymentsStripePaymentId($stripe_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripePaymentsApi->gETStripePaymentsStripePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\StripePayment**](../Model/StripePayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHStripePaymentsStripePaymentId()`

```php
pATCHStripePaymentsStripePaymentId($stripe_payment_id, $stripe_payment_update)
```

Update a stripe payment

Update a stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_id = 'stripe_payment_id_example'; // string | The resource's id
$stripe_payment_update = new \OpenAPI\Client\Model\StripePaymentUpdate(); // \OpenAPI\Client\Model\StripePaymentUpdate

try {
    $apiInstance->pATCHStripePaymentsStripePaymentId($stripe_payment_id, $stripe_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling StripePaymentsApi->pATCHStripePaymentsStripePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_id** | **string**| The resource&#39;s id |
 **stripe_payment_update** | [**\OpenAPI\Client\Model\StripePaymentUpdate**](../Model/StripePaymentUpdate.md)|  |

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

## `pOSTStripePayments()`

```php
pOSTStripePayments($stripe_payment_create)
```

Create a stripe payment

Create a stripe payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StripePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stripe_payment_create = new \OpenAPI\Client\Model\StripePaymentCreate(); // \OpenAPI\Client\Model\StripePaymentCreate

try {
    $apiInstance->pOSTStripePayments($stripe_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling StripePaymentsApi->pOSTStripePayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stripe_payment_create** | [**\OpenAPI\Client\Model\StripePaymentCreate**](../Model/StripePaymentCreate.md)|  |

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
