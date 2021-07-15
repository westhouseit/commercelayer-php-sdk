# OpenAPI\Client\MerchantsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEMerchantsMerchantId()**](MerchantsApi.md#dELETEMerchantsMerchantId) | **DELETE** /merchants/{merchantId} | Delete a merchant
[**gETMerchants()**](MerchantsApi.md#gETMerchants) | **GET** /merchants | List all merchants
[**gETMerchantsMerchantId()**](MerchantsApi.md#gETMerchantsMerchantId) | **GET** /merchants/{merchantId} | Retrieve a merchant
[**pATCHMerchantsMerchantId()**](MerchantsApi.md#pATCHMerchantsMerchantId) | **PATCH** /merchants/{merchantId} | Update a merchant
[**pOSTMerchants()**](MerchantsApi.md#pOSTMerchants) | **POST** /merchants | Create a merchant


## `dELETEMerchantsMerchantId()`

```php
dELETEMerchantsMerchantId($merchant_id)
```

Delete a merchant

Delete a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEMerchantsMerchantId($merchant_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->dELETEMerchantsMerchantId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The resource&#39;s id |

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

## `gETMerchants()`

```php
gETMerchants()
```

List all merchants

List all merchants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETMerchants();
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->gETMerchants: ', $e->getMessage(), PHP_EOL;
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

## `gETMerchantsMerchantId()`

```php
gETMerchantsMerchantId($merchant_id): \OpenAPI\Client\Model\Merchant
```

Retrieve a merchant

Retrieve a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETMerchantsMerchantId($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->gETMerchantsMerchantId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHMerchantsMerchantId()`

```php
pATCHMerchantsMerchantId($merchant_id, $merchant_update)
```

Update a merchant

Update a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The resource's id
$merchant_update = new \OpenAPI\Client\Model\MerchantUpdate(); // \OpenAPI\Client\Model\MerchantUpdate

try {
    $apiInstance->pATCHMerchantsMerchantId($merchant_id, $merchant_update);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->pATCHMerchantsMerchantId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The resource&#39;s id |
 **merchant_update** | [**\OpenAPI\Client\Model\MerchantUpdate**](../Model/MerchantUpdate.md)|  |

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

## `pOSTMerchants()`

```php
pOSTMerchants($merchant_create)
```

Create a merchant

Create a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_create = new \OpenAPI\Client\Model\MerchantCreate(); // \OpenAPI\Client\Model\MerchantCreate

try {
    $apiInstance->pOSTMerchants($merchant_create);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->pOSTMerchants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_create** | [**\OpenAPI\Client\Model\MerchantCreate**](../Model/MerchantCreate.md)|  |

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
