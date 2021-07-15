# OpenAPI\Client\BraintreePaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEBraintreePaymentsBraintreePaymentId()**](BraintreePaymentsApi.md#dELETEBraintreePaymentsBraintreePaymentId) | **DELETE** /braintree_payments/{braintreePaymentId} | Delete a braintree payment
[**gETBraintreePayments()**](BraintreePaymentsApi.md#gETBraintreePayments) | **GET** /braintree_payments | List all braintree payments
[**gETBraintreePaymentsBraintreePaymentId()**](BraintreePaymentsApi.md#gETBraintreePaymentsBraintreePaymentId) | **GET** /braintree_payments/{braintreePaymentId} | Retrieve a braintree payment
[**pATCHBraintreePaymentsBraintreePaymentId()**](BraintreePaymentsApi.md#pATCHBraintreePaymentsBraintreePaymentId) | **PATCH** /braintree_payments/{braintreePaymentId} | Update a braintree payment
[**pOSTBraintreePayments()**](BraintreePaymentsApi.md#pOSTBraintreePayments) | **POST** /braintree_payments | Create a braintree payment


## `dELETEBraintreePaymentsBraintreePaymentId()`

```php
dELETEBraintreePaymentsBraintreePaymentId($braintree_payment_id)
```

Delete a braintree payment

Delete a braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_id = 'braintree_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEBraintreePaymentsBraintreePaymentId($braintree_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling BraintreePaymentsApi->dELETEBraintreePaymentsBraintreePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_id** | **string**| The resource&#39;s id |

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

## `gETBraintreePayments()`

```php
gETBraintreePayments()
```

List all braintree payments

List all braintree payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETBraintreePayments();
} catch (Exception $e) {
    echo 'Exception when calling BraintreePaymentsApi->gETBraintreePayments: ', $e->getMessage(), PHP_EOL;
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

## `gETBraintreePaymentsBraintreePaymentId()`

```php
gETBraintreePaymentsBraintreePaymentId($braintree_payment_id): \OpenAPI\Client\Model\BraintreePayment
```

Retrieve a braintree payment

Retrieve a braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_id = 'braintree_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETBraintreePaymentsBraintreePaymentId($braintree_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BraintreePaymentsApi->gETBraintreePaymentsBraintreePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\BraintreePayment**](../Model/BraintreePayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHBraintreePaymentsBraintreePaymentId()`

```php
pATCHBraintreePaymentsBraintreePaymentId($braintree_payment_id, $braintree_payment_update)
```

Update a braintree payment

Update a braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_id = 'braintree_payment_id_example'; // string | The resource's id
$braintree_payment_update = new \OpenAPI\Client\Model\BraintreePaymentUpdate(); // \OpenAPI\Client\Model\BraintreePaymentUpdate

try {
    $apiInstance->pATCHBraintreePaymentsBraintreePaymentId($braintree_payment_id, $braintree_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling BraintreePaymentsApi->pATCHBraintreePaymentsBraintreePaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_id** | **string**| The resource&#39;s id |
 **braintree_payment_update** | [**\OpenAPI\Client\Model\BraintreePaymentUpdate**](../Model/BraintreePaymentUpdate.md)|  |

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

## `pOSTBraintreePayments()`

```php
pOSTBraintreePayments($braintree_payment_create)
```

Create a braintree payment

Create a braintree payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BraintreePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$braintree_payment_create = new \OpenAPI\Client\Model\BraintreePaymentCreate(); // \OpenAPI\Client\Model\BraintreePaymentCreate

try {
    $apiInstance->pOSTBraintreePayments($braintree_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling BraintreePaymentsApi->pOSTBraintreePayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **braintree_payment_create** | [**\OpenAPI\Client\Model\BraintreePaymentCreate**](../Model/BraintreePaymentCreate.md)|  |

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
