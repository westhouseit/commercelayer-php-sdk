# OpenAPI\Client\CustomerSubscriptionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomerSubscriptionsCustomerSubscriptionId()**](CustomerSubscriptionsApi.md#dELETECustomerSubscriptionsCustomerSubscriptionId) | **DELETE** /customer_subscriptions/{customerSubscriptionId} | Delete a customer subscription
[**gETCustomerSubscriptions()**](CustomerSubscriptionsApi.md#gETCustomerSubscriptions) | **GET** /customer_subscriptions | List all customer subscriptions
[**gETCustomerSubscriptionsCustomerSubscriptionId()**](CustomerSubscriptionsApi.md#gETCustomerSubscriptionsCustomerSubscriptionId) | **GET** /customer_subscriptions/{customerSubscriptionId} | Retrieve a customer subscription
[**pATCHCustomerSubscriptionsCustomerSubscriptionId()**](CustomerSubscriptionsApi.md#pATCHCustomerSubscriptionsCustomerSubscriptionId) | **PATCH** /customer_subscriptions/{customerSubscriptionId} | Update a customer subscription
[**pOSTCustomerSubscriptions()**](CustomerSubscriptionsApi.md#pOSTCustomerSubscriptions) | **POST** /customer_subscriptions | Create a customer subscription


## `dELETECustomerSubscriptionsCustomerSubscriptionId()`

```php
dELETECustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id)
```

Delete a customer subscription

Delete a customer subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_subscription_id = 'customer_subscription_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSubscriptionsApi->dELETECustomerSubscriptionsCustomerSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_subscription_id** | **string**| The resource&#39;s id |

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

## `gETCustomerSubscriptions()`

```php
gETCustomerSubscriptions()
```

List all customer subscriptions

List all customer subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomerSubscriptions();
} catch (Exception $e) {
    echo 'Exception when calling CustomerSubscriptionsApi->gETCustomerSubscriptions: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomerSubscriptionsCustomerSubscriptionId()`

```php
gETCustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id): \OpenAPI\Client\Model\CustomerSubscription
```

Retrieve a customer subscription

Retrieve a customer subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_subscription_id = 'customer_subscription_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSubscriptionsApi->gETCustomerSubscriptionsCustomerSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_subscription_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CustomerSubscription**](../Model/CustomerSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomerSubscriptionsCustomerSubscriptionId()`

```php
pATCHCustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id, $customer_subscription_update)
```

Update a customer subscription

Update a customer subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_subscription_id = 'customer_subscription_id_example'; // string | The resource's id
$customer_subscription_update = new \OpenAPI\Client\Model\CustomerSubscriptionUpdate(); // \OpenAPI\Client\Model\CustomerSubscriptionUpdate

try {
    $apiInstance->pATCHCustomerSubscriptionsCustomerSubscriptionId($customer_subscription_id, $customer_subscription_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSubscriptionsApi->pATCHCustomerSubscriptionsCustomerSubscriptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_subscription_id** | **string**| The resource&#39;s id |
 **customer_subscription_update** | [**\OpenAPI\Client\Model\CustomerSubscriptionUpdate**](../Model/CustomerSubscriptionUpdate.md)|  |

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

## `pOSTCustomerSubscriptions()`

```php
pOSTCustomerSubscriptions($customer_subscription_create)
```

Create a customer subscription

Create a customer subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_subscription_create = new \OpenAPI\Client\Model\CustomerSubscriptionCreate(); // \OpenAPI\Client\Model\CustomerSubscriptionCreate

try {
    $apiInstance->pOSTCustomerSubscriptions($customer_subscription_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSubscriptionsApi->pOSTCustomerSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_subscription_create** | [**\OpenAPI\Client\Model\CustomerSubscriptionCreate**](../Model/CustomerSubscriptionCreate.md)|  |

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
