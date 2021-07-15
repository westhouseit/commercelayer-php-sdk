# OpenAPI\Client\CustomerPaymentSourcesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomerPaymentSourcesCustomerPaymentSourceId()**](CustomerPaymentSourcesApi.md#dELETECustomerPaymentSourcesCustomerPaymentSourceId) | **DELETE** /customer_payment_sources/{customerPaymentSourceId} | Delete a customer payment source
[**gETCustomerPaymentSources()**](CustomerPaymentSourcesApi.md#gETCustomerPaymentSources) | **GET** /customer_payment_sources | List all customer payment sources
[**gETCustomerPaymentSourcesCustomerPaymentSourceId()**](CustomerPaymentSourcesApi.md#gETCustomerPaymentSourcesCustomerPaymentSourceId) | **GET** /customer_payment_sources/{customerPaymentSourceId} | Retrieve a customer payment source
[**pATCHCustomerPaymentSourcesCustomerPaymentSourceId()**](CustomerPaymentSourcesApi.md#pATCHCustomerPaymentSourcesCustomerPaymentSourceId) | **PATCH** /customer_payment_sources/{customerPaymentSourceId} | Update a customer payment source
[**pOSTCustomerPaymentSources()**](CustomerPaymentSourcesApi.md#pOSTCustomerPaymentSources) | **POST** /customer_payment_sources | Create a customer payment source


## `dELETECustomerPaymentSourcesCustomerPaymentSourceId()`

```php
dELETECustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id)
```

Delete a customer payment source

Delete a customer payment source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_payment_source_id = 'customer_payment_source_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentSourcesApi->dELETECustomerPaymentSourcesCustomerPaymentSourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_payment_source_id** | **string**| The resource&#39;s id |

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

## `gETCustomerPaymentSources()`

```php
gETCustomerPaymentSources()
```

List all customer payment sources

List all customer payment sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomerPaymentSources();
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentSourcesApi->gETCustomerPaymentSources: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomerPaymentSourcesCustomerPaymentSourceId()`

```php
gETCustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id): \OpenAPI\Client\Model\CustomerPaymentSource
```

Retrieve a customer payment source

Retrieve a customer payment source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_payment_source_id = 'customer_payment_source_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentSourcesApi->gETCustomerPaymentSourcesCustomerPaymentSourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_payment_source_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CustomerPaymentSource**](../Model/CustomerPaymentSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomerPaymentSourcesCustomerPaymentSourceId()`

```php
pATCHCustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id, $customer_payment_source_update)
```

Update a customer payment source

Update a customer payment source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_payment_source_id = 'customer_payment_source_id_example'; // string | The resource's id
$customer_payment_source_update = new \OpenAPI\Client\Model\CustomerPaymentSourceUpdate(); // \OpenAPI\Client\Model\CustomerPaymentSourceUpdate

try {
    $apiInstance->pATCHCustomerPaymentSourcesCustomerPaymentSourceId($customer_payment_source_id, $customer_payment_source_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentSourcesApi->pATCHCustomerPaymentSourcesCustomerPaymentSourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_payment_source_id** | **string**| The resource&#39;s id |
 **customer_payment_source_update** | [**\OpenAPI\Client\Model\CustomerPaymentSourceUpdate**](../Model/CustomerPaymentSourceUpdate.md)|  |

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

## `pOSTCustomerPaymentSources()`

```php
pOSTCustomerPaymentSources($customer_payment_source_create)
```

Create a customer payment source

Create a customer payment source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_payment_source_create = new \OpenAPI\Client\Model\CustomerPaymentSourceCreate(); // \OpenAPI\Client\Model\CustomerPaymentSourceCreate

try {
    $apiInstance->pOSTCustomerPaymentSources($customer_payment_source_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentSourcesApi->pOSTCustomerPaymentSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_payment_source_create** | [**\OpenAPI\Client\Model\CustomerPaymentSourceCreate**](../Model/CustomerPaymentSourceCreate.md)|  |

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
