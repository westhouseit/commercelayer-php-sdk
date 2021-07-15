# OpenAPI\Client\CustomersApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomersCustomerId()**](CustomersApi.md#dELETECustomersCustomerId) | **DELETE** /customers/{customerId} | Delete a customer
[**gETCustomers()**](CustomersApi.md#gETCustomers) | **GET** /customers | List all customers
[**gETCustomersCustomerId()**](CustomersApi.md#gETCustomersCustomerId) | **GET** /customers/{customerId} | Retrieve a customer
[**pATCHCustomersCustomerId()**](CustomersApi.md#pATCHCustomersCustomerId) | **PATCH** /customers/{customerId} | Update a customer
[**pOSTCustomers()**](CustomersApi.md#pOSTCustomers) | **POST** /customers | Create a customer


## `dELETECustomersCustomerId()`

```php
dELETECustomersCustomerId($customer_id)
```

Delete a customer

Delete a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomersCustomerId($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->dELETECustomersCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The resource&#39;s id |

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

## `gETCustomers()`

```php
gETCustomers()
```

List all customers

List all customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomers();
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->gETCustomers: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomersCustomerId()`

```php
gETCustomersCustomerId($customer_id): \OpenAPI\Client\Model\Customer
```

Retrieve a customer

Retrieve a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomersCustomerId($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->gETCustomersCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomersCustomerId()`

```php
pATCHCustomersCustomerId($customer_id, $customer_update)
```

Update a customer

Update a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string | The resource's id
$customer_update = new \OpenAPI\Client\Model\CustomerUpdate(); // \OpenAPI\Client\Model\CustomerUpdate

try {
    $apiInstance->pATCHCustomersCustomerId($customer_id, $customer_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->pATCHCustomersCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The resource&#39;s id |
 **customer_update** | [**\OpenAPI\Client\Model\CustomerUpdate**](../Model/CustomerUpdate.md)|  |

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

## `pOSTCustomers()`

```php
pOSTCustomers($customer_create)
```

Create a customer

Create a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_create = new \OpenAPI\Client\Model\CustomerCreate(); // \OpenAPI\Client\Model\CustomerCreate

try {
    $apiInstance->pOSTCustomers($customer_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->pOSTCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_create** | [**\OpenAPI\Client\Model\CustomerCreate**](../Model/CustomerCreate.md)|  |

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
