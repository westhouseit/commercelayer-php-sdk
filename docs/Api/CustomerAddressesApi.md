# OpenAPI\Client\CustomerAddressesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomerAddressesCustomerAddressId()**](CustomerAddressesApi.md#dELETECustomerAddressesCustomerAddressId) | **DELETE** /customer_addresses/{customerAddressId} | Delete a customer address
[**gETCustomerAddresses()**](CustomerAddressesApi.md#gETCustomerAddresses) | **GET** /customer_addresses | List all customer addresses
[**gETCustomerAddressesCustomerAddressId()**](CustomerAddressesApi.md#gETCustomerAddressesCustomerAddressId) | **GET** /customer_addresses/{customerAddressId} | Retrieve a customer address
[**pATCHCustomerAddressesCustomerAddressId()**](CustomerAddressesApi.md#pATCHCustomerAddressesCustomerAddressId) | **PATCH** /customer_addresses/{customerAddressId} | Update a customer address
[**pOSTCustomerAddresses()**](CustomerAddressesApi.md#pOSTCustomerAddresses) | **POST** /customer_addresses | Create a customer address


## `dELETECustomerAddressesCustomerAddressId()`

```php
dELETECustomerAddressesCustomerAddressId($customer_address_id)
```

Delete a customer address

Delete a customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_id = 'customer_address_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomerAddressesCustomerAddressId($customer_address_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->dELETECustomerAddressesCustomerAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_id** | **string**| The resource&#39;s id |

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

## `gETCustomerAddresses()`

```php
gETCustomerAddresses()
```

List all customer addresses

List all customer addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomerAddresses();
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->gETCustomerAddresses: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomerAddressesCustomerAddressId()`

```php
gETCustomerAddressesCustomerAddressId($customer_address_id): \OpenAPI\Client\Model\CustomerAddress
```

Retrieve a customer address

Retrieve a customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_id = 'customer_address_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomerAddressesCustomerAddressId($customer_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->gETCustomerAddressesCustomerAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomerAddressesCustomerAddressId()`

```php
pATCHCustomerAddressesCustomerAddressId($customer_address_id, $customer_address_update)
```

Update a customer address

Update a customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_id = 'customer_address_id_example'; // string | The resource's id
$customer_address_update = new \OpenAPI\Client\Model\CustomerAddressUpdate(); // \OpenAPI\Client\Model\CustomerAddressUpdate

try {
    $apiInstance->pATCHCustomerAddressesCustomerAddressId($customer_address_id, $customer_address_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->pATCHCustomerAddressesCustomerAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_id** | **string**| The resource&#39;s id |
 **customer_address_update** | [**\OpenAPI\Client\Model\CustomerAddressUpdate**](../Model/CustomerAddressUpdate.md)|  |

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

## `pOSTCustomerAddresses()`

```php
pOSTCustomerAddresses($customer_address_create)
```

Create a customer address

Create a customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_address_create = new \OpenAPI\Client\Model\CustomerAddressCreate(); // \OpenAPI\Client\Model\CustomerAddressCreate

try {
    $apiInstance->pOSTCustomerAddresses($customer_address_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->pOSTCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_address_create** | [**\OpenAPI\Client\Model\CustomerAddressCreate**](../Model/CustomerAddressCreate.md)|  |

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
