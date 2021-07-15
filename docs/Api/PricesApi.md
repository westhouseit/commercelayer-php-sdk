# OpenAPI\Client\PricesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPricesPriceId()**](PricesApi.md#dELETEPricesPriceId) | **DELETE** /prices/{priceId} | Delete a price
[**gETPrices()**](PricesApi.md#gETPrices) | **GET** /prices | List all prices
[**gETPricesPriceId()**](PricesApi.md#gETPricesPriceId) | **GET** /prices/{priceId} | Retrieve a price
[**pATCHPricesPriceId()**](PricesApi.md#pATCHPricesPriceId) | **PATCH** /prices/{priceId} | Update a price
[**pOSTPrices()**](PricesApi.md#pOSTPrices) | **POST** /prices | Create a price


## `dELETEPricesPriceId()`

```php
dELETEPricesPriceId($price_id)
```

Delete a price

Delete a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_id = 'price_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPricesPriceId($price_id);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->dELETEPricesPriceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **string**| The resource&#39;s id |

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

## `gETPrices()`

```php
gETPrices()
```

List all prices

List all prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPrices();
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->gETPrices: ', $e->getMessage(), PHP_EOL;
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

## `gETPricesPriceId()`

```php
gETPricesPriceId($price_id): \OpenAPI\Client\Model\Price
```

Retrieve a price

Retrieve a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_id = 'price_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPricesPriceId($price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->gETPricesPriceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Price**](../Model/Price.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPricesPriceId()`

```php
pATCHPricesPriceId($price_id, $price_update)
```

Update a price

Update a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_id = 'price_id_example'; // string | The resource's id
$price_update = new \OpenAPI\Client\Model\PriceUpdate(); // \OpenAPI\Client\Model\PriceUpdate

try {
    $apiInstance->pATCHPricesPriceId($price_id, $price_update);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->pATCHPricesPriceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_id** | **string**| The resource&#39;s id |
 **price_update** | [**\OpenAPI\Client\Model\PriceUpdate**](../Model/PriceUpdate.md)|  |

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

## `pOSTPrices()`

```php
pOSTPrices($price_create)
```

Create a price

Create a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_create = new \OpenAPI\Client\Model\PriceCreate(); // \OpenAPI\Client\Model\PriceCreate

try {
    $apiInstance->pOSTPrices($price_create);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->pOSTPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_create** | [**\OpenAPI\Client\Model\PriceCreate**](../Model/PriceCreate.md)|  |

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
