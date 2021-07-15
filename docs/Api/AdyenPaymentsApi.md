# OpenAPI\Client\AdyenPaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAdyenPaymentsAdyenPaymentId()**](AdyenPaymentsApi.md#dELETEAdyenPaymentsAdyenPaymentId) | **DELETE** /adyen_payments/{adyenPaymentId} | Delete an adyen payment
[**gETAdyenPayments()**](AdyenPaymentsApi.md#gETAdyenPayments) | **GET** /adyen_payments | List all adyen payments
[**gETAdyenPaymentsAdyenPaymentId()**](AdyenPaymentsApi.md#gETAdyenPaymentsAdyenPaymentId) | **GET** /adyen_payments/{adyenPaymentId} | Retrieve an adyen payment
[**pATCHAdyenPaymentsAdyenPaymentId()**](AdyenPaymentsApi.md#pATCHAdyenPaymentsAdyenPaymentId) | **PATCH** /adyen_payments/{adyenPaymentId} | Update an adyen payment
[**pOSTAdyenPayments()**](AdyenPaymentsApi.md#pOSTAdyenPayments) | **POST** /adyen_payments | Create an adyen payment


## `dELETEAdyenPaymentsAdyenPaymentId()`

```php
dELETEAdyenPaymentsAdyenPaymentId($adyen_payment_id)
```

Delete an adyen payment

Delete an adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_id = 'adyen_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAdyenPaymentsAdyenPaymentId($adyen_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling AdyenPaymentsApi->dELETEAdyenPaymentsAdyenPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_id** | **string**| The resource&#39;s id |

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

## `gETAdyenPayments()`

```php
gETAdyenPayments()
```

List all adyen payments

List all adyen payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAdyenPayments();
} catch (Exception $e) {
    echo 'Exception when calling AdyenPaymentsApi->gETAdyenPayments: ', $e->getMessage(), PHP_EOL;
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

## `gETAdyenPaymentsAdyenPaymentId()`

```php
gETAdyenPaymentsAdyenPaymentId($adyen_payment_id): \OpenAPI\Client\Model\AdyenPayment
```

Retrieve an adyen payment

Retrieve an adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_id = 'adyen_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAdyenPaymentsAdyenPaymentId($adyen_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdyenPaymentsApi->gETAdyenPaymentsAdyenPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\AdyenPayment**](../Model/AdyenPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAdyenPaymentsAdyenPaymentId()`

```php
pATCHAdyenPaymentsAdyenPaymentId($adyen_payment_id, $adyen_payment_update)
```

Update an adyen payment

Update an adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_id = 'adyen_payment_id_example'; // string | The resource's id
$adyen_payment_update = new \OpenAPI\Client\Model\AdyenPaymentUpdate(); // \OpenAPI\Client\Model\AdyenPaymentUpdate

try {
    $apiInstance->pATCHAdyenPaymentsAdyenPaymentId($adyen_payment_id, $adyen_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling AdyenPaymentsApi->pATCHAdyenPaymentsAdyenPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_id** | **string**| The resource&#39;s id |
 **adyen_payment_update** | [**\OpenAPI\Client\Model\AdyenPaymentUpdate**](../Model/AdyenPaymentUpdate.md)|  |

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

## `pOSTAdyenPayments()`

```php
pOSTAdyenPayments($adyen_payment_create)
```

Create an adyen payment

Create an adyen payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdyenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$adyen_payment_create = new \OpenAPI\Client\Model\AdyenPaymentCreate(); // \OpenAPI\Client\Model\AdyenPaymentCreate

try {
    $apiInstance->pOSTAdyenPayments($adyen_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling AdyenPaymentsApi->pOSTAdyenPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adyen_payment_create** | [**\OpenAPI\Client\Model\AdyenPaymentCreate**](../Model/AdyenPaymentCreate.md)|  |

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
