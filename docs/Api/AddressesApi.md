# OpenAPI\Client\AddressesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAddressesAddressId()**](AddressesApi.md#dELETEAddressesAddressId) | **DELETE** /addresses/{addressId} | Delete an address
[**gETAddresses()**](AddressesApi.md#gETAddresses) | **GET** /addresses | List all addresses
[**gETAddressesAddressId()**](AddressesApi.md#gETAddressesAddressId) | **GET** /addresses/{addressId} | Retrieve an address
[**pATCHAddressesAddressId()**](AddressesApi.md#pATCHAddressesAddressId) | **PATCH** /addresses/{addressId} | Update an address
[**pOSTAddresses()**](AddressesApi.md#pOSTAddresses) | **POST** /addresses | Create an address


## `dELETEAddressesAddressId()`

```php
dELETEAddressesAddressId($address_id)
```

Delete an address

Delete an address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_id = 'address_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAddressesAddressId($address_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->dELETEAddressesAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| The resource&#39;s id |

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

## `gETAddresses()`

```php
gETAddresses()
```

List all addresses

List all addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAddresses();
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->gETAddresses: ', $e->getMessage(), PHP_EOL;
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

## `gETAddressesAddressId()`

```php
gETAddressesAddressId($address_id): \OpenAPI\Client\Model\Address
```

Retrieve an address

Retrieve an address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_id = 'address_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAddressesAddressId($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->gETAddressesAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAddressesAddressId()`

```php
pATCHAddressesAddressId($address_id, $address_update)
```

Update an address

Update an address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_id = 'address_id_example'; // string | The resource's id
$address_update = new \OpenAPI\Client\Model\AddressUpdate(); // \OpenAPI\Client\Model\AddressUpdate

try {
    $apiInstance->pATCHAddressesAddressId($address_id, $address_update);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->pATCHAddressesAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| The resource&#39;s id |
 **address_update** | [**\OpenAPI\Client\Model\AddressUpdate**](../Model/AddressUpdate.md)|  |

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

## `pOSTAddresses()`

```php
pOSTAddresses($address_create)
```

Create an address

Create an address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_create = new \OpenAPI\Client\Model\AddressCreate(); // \OpenAPI\Client\Model\AddressCreate

try {
    $apiInstance->pOSTAddresses($address_create);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->pOSTAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_create** | [**\OpenAPI\Client\Model\AddressCreate**](../Model/AddressCreate.md)|  |

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
