# OpenAPI\Client\InStockSubscriptionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEInStockSubscriptionsInStockSubscriptionId()**](InStockSubscriptionsApi.md#dELETEInStockSubscriptionsInStockSubscriptionId) | **DELETE** /in_stock_subscriptions/{inStockSubscriptionId} | Delete an in stock subscription
[**gETInStockSubscriptions()**](InStockSubscriptionsApi.md#gETInStockSubscriptions) | **GET** /in_stock_subscriptions | List all in stock subscriptions
[**gETInStockSubscriptionsInStockSubscriptionId()**](InStockSubscriptionsApi.md#gETInStockSubscriptionsInStockSubscriptionId) | **GET** /in_stock_subscriptions/{inStockSubscriptionId} | Retrieve an in stock subscription
[**pATCHInStockSubscriptionsInStockSubscriptionId()**](InStockSubscriptionsApi.md#pATCHInStockSubscriptionsInStockSubscriptionId) | **PATCH** /in_stock_subscriptions/{inStockSubscriptionId} | Update an in stock subscription
[**pOSTInStockSubscriptions()**](InStockSubscriptionsApi.md#pOSTInStockSubscriptions) | **POST** /in_stock_subscriptions | Create an in stock subscription


## `dELETEInStockSubscriptionsInStockSubscriptionId()`

```php
dELETEInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id)
```

Delete an in stock subscription

Delete an in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InStockSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling InStockSubscriptionsApi->dELETEInStockSubscriptionsInStockSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |

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

## `gETInStockSubscriptions()`

```php
gETInStockSubscriptions()
```

List all in stock subscriptions

List all in stock subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InStockSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETInStockSubscriptions();
} catch (Exception $e) {
    echo 'Exception when calling InStockSubscriptionsApi->gETInStockSubscriptions: ', $e->getMessage(), PHP_EOL;
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

## `gETInStockSubscriptionsInStockSubscriptionId()`

```php
gETInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id): \OpenAPI\Client\Model\InStockSubscription
```

Retrieve an in stock subscription

Retrieve an in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InStockSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InStockSubscriptionsApi->gETInStockSubscriptionsInStockSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\InStockSubscription**](../Model/InStockSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHInStockSubscriptionsInStockSubscriptionId()`

```php
pATCHInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id, $in_stock_subscription_update)
```

Update an in stock subscription

Update an in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InStockSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_id = 'in_stock_subscription_id_example'; // string | The resource's id
$in_stock_subscription_update = new \OpenAPI\Client\Model\InStockSubscriptionUpdate(); // \OpenAPI\Client\Model\InStockSubscriptionUpdate

try {
    $apiInstance->pATCHInStockSubscriptionsInStockSubscriptionId($in_stock_subscription_id, $in_stock_subscription_update);
} catch (Exception $e) {
    echo 'Exception when calling InStockSubscriptionsApi->pATCHInStockSubscriptionsInStockSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_id** | **string**| The resource&#39;s id |
 **in_stock_subscription_update** | [**\OpenAPI\Client\Model\InStockSubscriptionUpdate**](../Model/InStockSubscriptionUpdate.md)|  |

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

## `pOSTInStockSubscriptions()`

```php
pOSTInStockSubscriptions($in_stock_subscription_create)
```

Create an in stock subscription

Create an in stock subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InStockSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$in_stock_subscription_create = new \OpenAPI\Client\Model\InStockSubscriptionCreate(); // \OpenAPI\Client\Model\InStockSubscriptionCreate

try {
    $apiInstance->pOSTInStockSubscriptions($in_stock_subscription_create);
} catch (Exception $e) {
    echo 'Exception when calling InStockSubscriptionsApi->pOSTInStockSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in_stock_subscription_create** | [**\OpenAPI\Client\Model\InStockSubscriptionCreate**](../Model/InStockSubscriptionCreate.md)|  |

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
