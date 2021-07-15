# OpenAPI\Client\MarketsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEMarketsMarketId()**](MarketsApi.md#dELETEMarketsMarketId) | **DELETE** /markets/{marketId} | Delete a market
[**gETMarkets()**](MarketsApi.md#gETMarkets) | **GET** /markets | List all markets
[**gETMarketsMarketId()**](MarketsApi.md#gETMarketsMarketId) | **GET** /markets/{marketId} | Retrieve a market
[**pATCHMarketsMarketId()**](MarketsApi.md#pATCHMarketsMarketId) | **PATCH** /markets/{marketId} | Update a market
[**pOSTMarkets()**](MarketsApi.md#pOSTMarkets) | **POST** /markets | Create a market


## `dELETEMarketsMarketId()`

```php
dELETEMarketsMarketId($market_id)
```

Delete a market

Delete a market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEMarketsMarketId($market_id);
} catch (Exception $e) {
    echo 'Exception when calling MarketsApi->dELETEMarketsMarketId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

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

## `gETMarkets()`

```php
gETMarkets()
```

List all markets

List all markets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETMarkets();
} catch (Exception $e) {
    echo 'Exception when calling MarketsApi->gETMarkets: ', $e->getMessage(), PHP_EOL;
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

## `gETMarketsMarketId()`

```php
gETMarketsMarketId($market_id): \OpenAPI\Client\Model\Market
```

Retrieve a market

Retrieve a market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETMarketsMarketId($market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketsApi->gETMarketsMarketId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Market**](../Model/Market.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHMarketsMarketId()`

```php
pATCHMarketsMarketId($market_id, $market_update)
```

Update a market

Update a market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_id = 'market_id_example'; // string | The resource's id
$market_update = new \OpenAPI\Client\Model\MarketUpdate(); // \OpenAPI\Client\Model\MarketUpdate

try {
    $apiInstance->pATCHMarketsMarketId($market_id, $market_update);
} catch (Exception $e) {
    echo 'Exception when calling MarketsApi->pATCHMarketsMarketId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_id** | **string**| The resource&#39;s id |
 **market_update** | [**\OpenAPI\Client\Model\MarketUpdate**](../Model/MarketUpdate.md)|  |

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

## `pOSTMarkets()`

```php
pOSTMarkets($market_create)
```

Create a market

Create a market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$market_create = new \OpenAPI\Client\Model\MarketCreate(); // \OpenAPI\Client\Model\MarketCreate

try {
    $apiInstance->pOSTMarkets($market_create);
} catch (Exception $e) {
    echo 'Exception when calling MarketsApi->pOSTMarkets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_create** | [**\OpenAPI\Client\Model\MarketCreate**](../Model/MarketCreate.md)|  |

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
