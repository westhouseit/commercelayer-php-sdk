# OpenAPI\Client\TaxjarAccountsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETETaxjarAccountsTaxjarAccountId()**](TaxjarAccountsApi.md#dELETETaxjarAccountsTaxjarAccountId) | **DELETE** /taxjar_accounts/{taxjarAccountId} | Delete a taxjar account
[**gETTaxjarAccounts()**](TaxjarAccountsApi.md#gETTaxjarAccounts) | **GET** /taxjar_accounts | List all taxjar accounts
[**gETTaxjarAccountsTaxjarAccountId()**](TaxjarAccountsApi.md#gETTaxjarAccountsTaxjarAccountId) | **GET** /taxjar_accounts/{taxjarAccountId} | Retrieve a taxjar account
[**pATCHTaxjarAccountsTaxjarAccountId()**](TaxjarAccountsApi.md#pATCHTaxjarAccountsTaxjarAccountId) | **PATCH** /taxjar_accounts/{taxjarAccountId} | Update a taxjar account
[**pOSTTaxjarAccounts()**](TaxjarAccountsApi.md#pOSTTaxjarAccounts) | **POST** /taxjar_accounts | Create a taxjar account


## `dELETETaxjarAccountsTaxjarAccountId()`

```php
dELETETaxjarAccountsTaxjarAccountId($taxjar_account_id)
```

Delete a taxjar account

Delete a taxjar account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxjarAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxjar_account_id = 'taxjar_account_id_example'; // string | The resource's id

try {
    $apiInstance->dELETETaxjarAccountsTaxjarAccountId($taxjar_account_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxjarAccountsApi->dELETETaxjarAccountsTaxjarAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxjar_account_id** | **string**| The resource&#39;s id |

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

## `gETTaxjarAccounts()`

```php
gETTaxjarAccounts()
```

List all taxjar accounts

List all taxjar accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxjarAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETTaxjarAccounts();
} catch (Exception $e) {
    echo 'Exception when calling TaxjarAccountsApi->gETTaxjarAccounts: ', $e->getMessage(), PHP_EOL;
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

## `gETTaxjarAccountsTaxjarAccountId()`

```php
gETTaxjarAccountsTaxjarAccountId($taxjar_account_id): \OpenAPI\Client\Model\TaxjarAccount
```

Retrieve a taxjar account

Retrieve a taxjar account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxjarAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxjar_account_id = 'taxjar_account_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETTaxjarAccountsTaxjarAccountId($taxjar_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxjarAccountsApi->gETTaxjarAccountsTaxjarAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxjar_account_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\TaxjarAccount**](../Model/TaxjarAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHTaxjarAccountsTaxjarAccountId()`

```php
pATCHTaxjarAccountsTaxjarAccountId($taxjar_account_id, $taxjar_account_update)
```

Update a taxjar account

Update a taxjar account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxjarAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxjar_account_id = 'taxjar_account_id_example'; // string | The resource's id
$taxjar_account_update = new \OpenAPI\Client\Model\TaxjarAccountUpdate(); // \OpenAPI\Client\Model\TaxjarAccountUpdate

try {
    $apiInstance->pATCHTaxjarAccountsTaxjarAccountId($taxjar_account_id, $taxjar_account_update);
} catch (Exception $e) {
    echo 'Exception when calling TaxjarAccountsApi->pATCHTaxjarAccountsTaxjarAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxjar_account_id** | **string**| The resource&#39;s id |
 **taxjar_account_update** | [**\OpenAPI\Client\Model\TaxjarAccountUpdate**](../Model/TaxjarAccountUpdate.md)|  |

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

## `pOSTTaxjarAccounts()`

```php
pOSTTaxjarAccounts($taxjar_account_create)
```

Create a taxjar account

Create a taxjar account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxjarAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxjar_account_create = new \OpenAPI\Client\Model\TaxjarAccountCreate(); // \OpenAPI\Client\Model\TaxjarAccountCreate

try {
    $apiInstance->pOSTTaxjarAccounts($taxjar_account_create);
} catch (Exception $e) {
    echo 'Exception when calling TaxjarAccountsApi->pOSTTaxjarAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxjar_account_create** | [**\OpenAPI\Client\Model\TaxjarAccountCreate**](../Model/TaxjarAccountCreate.md)|  |

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
