# OpenAPI\Client\CheckoutComPaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECheckoutComPaymentsCheckoutComPaymentId()**](CheckoutComPaymentsApi.md#dELETECheckoutComPaymentsCheckoutComPaymentId) | **DELETE** /checkout_com_payments/{checkoutComPaymentId} | Delete a checkout com payment
[**gETCheckoutComPayments()**](CheckoutComPaymentsApi.md#gETCheckoutComPayments) | **GET** /checkout_com_payments | List all checkout com payments
[**gETCheckoutComPaymentsCheckoutComPaymentId()**](CheckoutComPaymentsApi.md#gETCheckoutComPaymentsCheckoutComPaymentId) | **GET** /checkout_com_payments/{checkoutComPaymentId} | Retrieve a checkout com payment
[**pATCHCheckoutComPaymentsCheckoutComPaymentId()**](CheckoutComPaymentsApi.md#pATCHCheckoutComPaymentsCheckoutComPaymentId) | **PATCH** /checkout_com_payments/{checkoutComPaymentId} | Update a checkout com payment
[**pOSTCheckoutComPayments()**](CheckoutComPaymentsApi.md#pOSTCheckoutComPayments) | **POST** /checkout_com_payments | Create a checkout com payment


## `dELETECheckoutComPaymentsCheckoutComPaymentId()`

```php
dELETECheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id)
```

Delete a checkout com payment

Delete a checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_id = 'checkout_com_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComPaymentsApi->dELETECheckoutComPaymentsCheckoutComPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_id** | **string**| The resource&#39;s id |

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

## `gETCheckoutComPayments()`

```php
gETCheckoutComPayments()
```

List all checkout com payments

List all checkout com payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCheckoutComPayments();
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComPaymentsApi->gETCheckoutComPayments: ', $e->getMessage(), PHP_EOL;
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

## `gETCheckoutComPaymentsCheckoutComPaymentId()`

```php
gETCheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id): \OpenAPI\Client\Model\CheckoutComPayment
```

Retrieve a checkout com payment

Retrieve a checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_id = 'checkout_com_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComPaymentsApi->gETCheckoutComPaymentsCheckoutComPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CheckoutComPayment**](../Model/CheckoutComPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCheckoutComPaymentsCheckoutComPaymentId()`

```php
pATCHCheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id, $checkout_com_payment_update)
```

Update a checkout com payment

Update a checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_id = 'checkout_com_payment_id_example'; // string | The resource's id
$checkout_com_payment_update = new \OpenAPI\Client\Model\CheckoutComPaymentUpdate(); // \OpenAPI\Client\Model\CheckoutComPaymentUpdate

try {
    $apiInstance->pATCHCheckoutComPaymentsCheckoutComPaymentId($checkout_com_payment_id, $checkout_com_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComPaymentsApi->pATCHCheckoutComPaymentsCheckoutComPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_id** | **string**| The resource&#39;s id |
 **checkout_com_payment_update** | [**\OpenAPI\Client\Model\CheckoutComPaymentUpdate**](../Model/CheckoutComPaymentUpdate.md)|  |

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

## `pOSTCheckoutComPayments()`

```php
pOSTCheckoutComPayments($checkout_com_payment_create)
```

Create a checkout com payment

Create a checkout com payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CheckoutComPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_com_payment_create = new \OpenAPI\Client\Model\CheckoutComPaymentCreate(); // \OpenAPI\Client\Model\CheckoutComPaymentCreate

try {
    $apiInstance->pOSTCheckoutComPayments($checkout_com_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutComPaymentsApi->pOSTCheckoutComPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_com_payment_create** | [**\OpenAPI\Client\Model\CheckoutComPaymentCreate**](../Model/CheckoutComPaymentCreate.md)|  |

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
