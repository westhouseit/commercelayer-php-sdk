# OpenAPI\Client\AvalaraAccountsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAvalaraAccountsAvalaraAccountId()**](AvalaraAccountsApi.md#dELETEAvalaraAccountsAvalaraAccountId) | **DELETE** /avalara_accounts/{avalaraAccountId} | Delete an avalara account
[**gETAvalaraAccounts()**](AvalaraAccountsApi.md#gETAvalaraAccounts) | **GET** /avalara_accounts | List all avalara accounts
[**gETAvalaraAccountsAvalaraAccountId()**](AvalaraAccountsApi.md#gETAvalaraAccountsAvalaraAccountId) | **GET** /avalara_accounts/{avalaraAccountId} | Retrieve an avalara account
[**pATCHAvalaraAccountsAvalaraAccountId()**](AvalaraAccountsApi.md#pATCHAvalaraAccountsAvalaraAccountId) | **PATCH** /avalara_accounts/{avalaraAccountId} | Update an avalara account
[**pOSTAvalaraAccounts()**](AvalaraAccountsApi.md#pOSTAvalaraAccounts) | **POST** /avalara_accounts | Create an avalara account


## `dELETEAvalaraAccountsAvalaraAccountId()`

```php
dELETEAvalaraAccountsAvalaraAccountId($avalara_account_id)
```

Delete an avalara account

Delete an avalara account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AvalaraAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$avalara_account_id = 'avalara_account_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAvalaraAccountsAvalaraAccountId($avalara_account_id);
} catch (Exception $e) {
    echo 'Exception when calling AvalaraAccountsApi->dELETEAvalaraAccountsAvalaraAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **avalara_account_id** | **string**| The resource&#39;s id |

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

## `gETAvalaraAccounts()`

```php
gETAvalaraAccounts()
```

List all avalara accounts

List all avalara accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AvalaraAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAvalaraAccounts();
} catch (Exception $e) {
    echo 'Exception when calling AvalaraAccountsApi->gETAvalaraAccounts: ', $e->getMessage(), PHP_EOL;
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

## `gETAvalaraAccountsAvalaraAccountId()`

```php
gETAvalaraAccountsAvalaraAccountId($avalara_account_id): \OpenAPI\Client\Model\AvalaraAccount
```

Retrieve an avalara account

Retrieve an avalara account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AvalaraAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$avalara_account_id = 'avalara_account_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAvalaraAccountsAvalaraAccountId($avalara_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvalaraAccountsApi->gETAvalaraAccountsAvalaraAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **avalara_account_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\AvalaraAccount**](../Model/AvalaraAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAvalaraAccountsAvalaraAccountId()`

```php
pATCHAvalaraAccountsAvalaraAccountId($avalara_account_id, $avalara_account_update)
```

Update an avalara account

Update an avalara account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AvalaraAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$avalara_account_id = 'avalara_account_id_example'; // string | The resource's id
$avalara_account_update = new \OpenAPI\Client\Model\AvalaraAccountUpdate(); // \OpenAPI\Client\Model\AvalaraAccountUpdate

try {
    $apiInstance->pATCHAvalaraAccountsAvalaraAccountId($avalara_account_id, $avalara_account_update);
} catch (Exception $e) {
    echo 'Exception when calling AvalaraAccountsApi->pATCHAvalaraAccountsAvalaraAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **avalara_account_id** | **string**| The resource&#39;s id |
 **avalara_account_update** | [**\OpenAPI\Client\Model\AvalaraAccountUpdate**](../Model/AvalaraAccountUpdate.md)|  |

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

## `pOSTAvalaraAccounts()`

```php
pOSTAvalaraAccounts($avalara_account_create)
```

Create an avalara account

Create an avalara account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AvalaraAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$avalara_account_create = new \OpenAPI\Client\Model\AvalaraAccountCreate(); // \OpenAPI\Client\Model\AvalaraAccountCreate

try {
    $apiInstance->pOSTAvalaraAccounts($avalara_account_create);
} catch (Exception $e) {
    echo 'Exception when calling AvalaraAccountsApi->pOSTAvalaraAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **avalara_account_create** | [**\OpenAPI\Client\Model\AvalaraAccountCreate**](../Model/AvalaraAccountCreate.md)|  |

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
