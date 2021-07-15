# OpenAPI\Client\CarrierAccountsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECarrierAccountsCarrierAccountId()**](CarrierAccountsApi.md#dELETECarrierAccountsCarrierAccountId) | **DELETE** /carrier_accounts/{carrierAccountId} | Delete a carrier account
[**gETCarrierAccounts()**](CarrierAccountsApi.md#gETCarrierAccounts) | **GET** /carrier_accounts | List all carrier accounts
[**gETCarrierAccountsCarrierAccountId()**](CarrierAccountsApi.md#gETCarrierAccountsCarrierAccountId) | **GET** /carrier_accounts/{carrierAccountId} | Retrieve a carrier account
[**pATCHCarrierAccountsCarrierAccountId()**](CarrierAccountsApi.md#pATCHCarrierAccountsCarrierAccountId) | **PATCH** /carrier_accounts/{carrierAccountId} | Update a carrier account
[**pOSTCarrierAccounts()**](CarrierAccountsApi.md#pOSTCarrierAccounts) | **POST** /carrier_accounts | Create a carrier account


## `dELETECarrierAccountsCarrierAccountId()`

```php
dELETECarrierAccountsCarrierAccountId($carrier_account_id)
```

Delete a carrier account

Delete a carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = 'carrier_account_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECarrierAccountsCarrierAccountId($carrier_account_id);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->dELETECarrierAccountsCarrierAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_account_id** | **string**| The resource&#39;s id |

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

## `gETCarrierAccounts()`

```php
gETCarrierAccounts()
```

List all carrier accounts

List all carrier accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCarrierAccounts();
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->gETCarrierAccounts: ', $e->getMessage(), PHP_EOL;
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

## `gETCarrierAccountsCarrierAccountId()`

```php
gETCarrierAccountsCarrierAccountId($carrier_account_id): \OpenAPI\Client\Model\CarrierAccount
```

Retrieve a carrier account

Retrieve a carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = 'carrier_account_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCarrierAccountsCarrierAccountId($carrier_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->gETCarrierAccountsCarrierAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_account_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CarrierAccount**](../Model/CarrierAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCarrierAccountsCarrierAccountId()`

```php
pATCHCarrierAccountsCarrierAccountId($carrier_account_id, $carrier_account_update)
```

Update a carrier account

Update a carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = 'carrier_account_id_example'; // string | The resource's id
$carrier_account_update = new \OpenAPI\Client\Model\CarrierAccountUpdate(); // \OpenAPI\Client\Model\CarrierAccountUpdate

try {
    $apiInstance->pATCHCarrierAccountsCarrierAccountId($carrier_account_id, $carrier_account_update);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->pATCHCarrierAccountsCarrierAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_account_id** | **string**| The resource&#39;s id |
 **carrier_account_update** | [**\OpenAPI\Client\Model\CarrierAccountUpdate**](../Model/CarrierAccountUpdate.md)|  |

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

## `pOSTCarrierAccounts()`

```php
pOSTCarrierAccounts($carrier_account_create)
```

Create a carrier account

Create a carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_create = new \OpenAPI\Client\Model\CarrierAccountCreate(); // \OpenAPI\Client\Model\CarrierAccountCreate

try {
    $apiInstance->pOSTCarrierAccounts($carrier_account_create);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->pOSTCarrierAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_account_create** | [**\OpenAPI\Client\Model\CarrierAccountCreate**](../Model/CarrierAccountCreate.md)|  |

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
