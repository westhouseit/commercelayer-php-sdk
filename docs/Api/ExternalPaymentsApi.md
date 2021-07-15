# OpenAPI\Client\ExternalPaymentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEExternalPaymentsExternalPaymentId()**](ExternalPaymentsApi.md#dELETEExternalPaymentsExternalPaymentId) | **DELETE** /external_payments/{externalPaymentId} | Delete an external payment
[**gETExternalPayments()**](ExternalPaymentsApi.md#gETExternalPayments) | **GET** /external_payments | List all external payments
[**gETExternalPaymentsExternalPaymentId()**](ExternalPaymentsApi.md#gETExternalPaymentsExternalPaymentId) | **GET** /external_payments/{externalPaymentId} | Retrieve an external payment
[**pATCHExternalPaymentsExternalPaymentId()**](ExternalPaymentsApi.md#pATCHExternalPaymentsExternalPaymentId) | **PATCH** /external_payments/{externalPaymentId} | Update an external payment
[**pOSTExternalPayments()**](ExternalPaymentsApi.md#pOSTExternalPayments) | **POST** /external_payments | Create an external payment


## `dELETEExternalPaymentsExternalPaymentId()`

```php
dELETEExternalPaymentsExternalPaymentId($external_payment_id)
```

Delete an external payment

Delete an external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_id = 'external_payment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEExternalPaymentsExternalPaymentId($external_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPaymentsApi->dELETEExternalPaymentsExternalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_id** | **string**| The resource&#39;s id |

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

## `gETExternalPayments()`

```php
gETExternalPayments()
```

List all external payments

List all external payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETExternalPayments();
} catch (Exception $e) {
    echo 'Exception when calling ExternalPaymentsApi->gETExternalPayments: ', $e->getMessage(), PHP_EOL;
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

## `gETExternalPaymentsExternalPaymentId()`

```php
gETExternalPaymentsExternalPaymentId($external_payment_id): \OpenAPI\Client\Model\ExternalPayment
```

Retrieve an external payment

Retrieve an external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_id = 'external_payment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETExternalPaymentsExternalPaymentId($external_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPaymentsApi->gETExternalPaymentsExternalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ExternalPayment**](../Model/ExternalPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHExternalPaymentsExternalPaymentId()`

```php
pATCHExternalPaymentsExternalPaymentId($external_payment_id, $external_payment_update)
```

Update an external payment

Update an external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_id = 'external_payment_id_example'; // string | The resource's id
$external_payment_update = new \OpenAPI\Client\Model\ExternalPaymentUpdate(); // \OpenAPI\Client\Model\ExternalPaymentUpdate

try {
    $apiInstance->pATCHExternalPaymentsExternalPaymentId($external_payment_id, $external_payment_update);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPaymentsApi->pATCHExternalPaymentsExternalPaymentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_id** | **string**| The resource&#39;s id |
 **external_payment_update** | [**\OpenAPI\Client\Model\ExternalPaymentUpdate**](../Model/ExternalPaymentUpdate.md)|  |

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

## `pOSTExternalPayments()`

```php
pOSTExternalPayments($external_payment_create)
```

Create an external payment

Create an external payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_payment_create = new \OpenAPI\Client\Model\ExternalPaymentCreate(); // \OpenAPI\Client\Model\ExternalPaymentCreate

try {
    $apiInstance->pOSTExternalPayments($external_payment_create);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPaymentsApi->pOSTExternalPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_payment_create** | [**\OpenAPI\Client\Model\ExternalPaymentCreate**](../Model/ExternalPaymentCreate.md)|  |

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
