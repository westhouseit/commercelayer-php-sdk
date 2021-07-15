# OpenAPI\Client\CustomerPasswordResetsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomerPasswordResetsCustomerPasswordResetId()**](CustomerPasswordResetsApi.md#dELETECustomerPasswordResetsCustomerPasswordResetId) | **DELETE** /customer_password_resets/{customerPasswordResetId} | Delete a customer password reset
[**gETCustomerPasswordResets()**](CustomerPasswordResetsApi.md#gETCustomerPasswordResets) | **GET** /customer_password_resets | List all customer password resets
[**gETCustomerPasswordResetsCustomerPasswordResetId()**](CustomerPasswordResetsApi.md#gETCustomerPasswordResetsCustomerPasswordResetId) | **GET** /customer_password_resets/{customerPasswordResetId} | Retrieve a customer password reset
[**pATCHCustomerPasswordResetsCustomerPasswordResetId()**](CustomerPasswordResetsApi.md#pATCHCustomerPasswordResetsCustomerPasswordResetId) | **PATCH** /customer_password_resets/{customerPasswordResetId} | Update a customer password reset
[**pOSTCustomerPasswordResets()**](CustomerPasswordResetsApi.md#pOSTCustomerPasswordResets) | **POST** /customer_password_resets | Create a customer password reset


## `dELETECustomerPasswordResetsCustomerPasswordResetId()`

```php
dELETECustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id)
```

Delete a customer password reset

Delete a customer password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPasswordResetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_password_reset_id = 'customer_password_reset_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPasswordResetsApi->dELETECustomerPasswordResetsCustomerPasswordResetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_password_reset_id** | **string**| The resource&#39;s id |

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

## `gETCustomerPasswordResets()`

```php
gETCustomerPasswordResets()
```

List all customer password resets

List all customer password resets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPasswordResetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomerPasswordResets();
} catch (Exception $e) {
    echo 'Exception when calling CustomerPasswordResetsApi->gETCustomerPasswordResets: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomerPasswordResetsCustomerPasswordResetId()`

```php
gETCustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id): \OpenAPI\Client\Model\CustomerPasswordReset
```

Retrieve a customer password reset

Retrieve a customer password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPasswordResetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_password_reset_id = 'customer_password_reset_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPasswordResetsApi->gETCustomerPasswordResetsCustomerPasswordResetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_password_reset_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CustomerPasswordReset**](../Model/CustomerPasswordReset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomerPasswordResetsCustomerPasswordResetId()`

```php
pATCHCustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id, $customer_password_reset_update)
```

Update a customer password reset

Update a customer password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPasswordResetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_password_reset_id = 'customer_password_reset_id_example'; // string | The resource's id
$customer_password_reset_update = new \OpenAPI\Client\Model\CustomerPasswordResetUpdate(); // \OpenAPI\Client\Model\CustomerPasswordResetUpdate

try {
    $apiInstance->pATCHCustomerPasswordResetsCustomerPasswordResetId($customer_password_reset_id, $customer_password_reset_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPasswordResetsApi->pATCHCustomerPasswordResetsCustomerPasswordResetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_password_reset_id** | **string**| The resource&#39;s id |
 **customer_password_reset_update** | [**\OpenAPI\Client\Model\CustomerPasswordResetUpdate**](../Model/CustomerPasswordResetUpdate.md)|  |

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

## `pOSTCustomerPasswordResets()`

```php
pOSTCustomerPasswordResets($customer_password_reset_create)
```

Create a customer password reset

Create a customer password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerPasswordResetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_password_reset_create = new \OpenAPI\Client\Model\CustomerPasswordResetCreate(); // \OpenAPI\Client\Model\CustomerPasswordResetCreate

try {
    $apiInstance->pOSTCustomerPasswordResets($customer_password_reset_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPasswordResetsApi->pOSTCustomerPasswordResets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_password_reset_create** | [**\OpenAPI\Client\Model\CustomerPasswordResetCreate**](../Model/CustomerPasswordResetCreate.md)|  |

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
