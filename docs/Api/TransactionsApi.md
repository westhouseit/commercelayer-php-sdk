# OpenAPI\Client\TransactionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETETransactionsTransactionId()**](TransactionsApi.md#dELETETransactionsTransactionId) | **DELETE** /transactions/{transactionId} | Delete a transaction
[**gETTransactions()**](TransactionsApi.md#gETTransactions) | **GET** /transactions | List all transactions
[**gETTransactionsTransactionId()**](TransactionsApi.md#gETTransactionsTransactionId) | **GET** /transactions/{transactionId} | Retrieve a transaction
[**pATCHTransactionsTransactionId()**](TransactionsApi.md#pATCHTransactionsTransactionId) | **PATCH** /transactions/{transactionId} | Update a transaction
[**pOSTTransactions()**](TransactionsApi.md#pOSTTransactions) | **POST** /transactions | Create a transaction


## `dELETETransactionsTransactionId()`

```php
dELETETransactionsTransactionId($transaction_id)
```

Delete a transaction

Delete a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | The resource's id

try {
    $apiInstance->dELETETransactionsTransactionId($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->dELETETransactionsTransactionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The resource&#39;s id |

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

## `gETTransactions()`

```php
gETTransactions()
```

List all transactions

List all transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETTransactions();
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->gETTransactions: ', $e->getMessage(), PHP_EOL;
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

## `gETTransactionsTransactionId()`

```php
gETTransactionsTransactionId($transaction_id): \OpenAPI\Client\Model\Transaction
```

Retrieve a transaction

Retrieve a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETTransactionsTransactionId($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->gETTransactionsTransactionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHTransactionsTransactionId()`

```php
pATCHTransactionsTransactionId($transaction_id, $transaction_update)
```

Update a transaction

Update a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string | The resource's id
$transaction_update = new \OpenAPI\Client\Model\TransactionUpdate(); // \OpenAPI\Client\Model\TransactionUpdate

try {
    $apiInstance->pATCHTransactionsTransactionId($transaction_id, $transaction_update);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->pATCHTransactionsTransactionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The resource&#39;s id |
 **transaction_update** | [**\OpenAPI\Client\Model\TransactionUpdate**](../Model/TransactionUpdate.md)|  |

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

## `pOSTTransactions()`

```php
pOSTTransactions($transaction_create)
```

Create a transaction

Create a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_create = new \OpenAPI\Client\Model\TransactionCreate(); // \OpenAPI\Client\Model\TransactionCreate

try {
    $apiInstance->pOSTTransactions($transaction_create);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->pOSTTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_create** | [**\OpenAPI\Client\Model\TransactionCreate**](../Model/TransactionCreate.md)|  |

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
