# OpenAPI\Client\DeliveryLeadTimesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEDeliveryLeadTimesDeliveryLeadTimeId()**](DeliveryLeadTimesApi.md#dELETEDeliveryLeadTimesDeliveryLeadTimeId) | **DELETE** /delivery_lead_times/{deliveryLeadTimeId} | Delete a delivery lead time
[**gETDeliveryLeadTimes()**](DeliveryLeadTimesApi.md#gETDeliveryLeadTimes) | **GET** /delivery_lead_times | List all delivery lead times
[**gETDeliveryLeadTimesDeliveryLeadTimeId()**](DeliveryLeadTimesApi.md#gETDeliveryLeadTimesDeliveryLeadTimeId) | **GET** /delivery_lead_times/{deliveryLeadTimeId} | Retrieve a delivery lead time
[**pATCHDeliveryLeadTimesDeliveryLeadTimeId()**](DeliveryLeadTimesApi.md#pATCHDeliveryLeadTimesDeliveryLeadTimeId) | **PATCH** /delivery_lead_times/{deliveryLeadTimeId} | Update a delivery lead time
[**pOSTDeliveryLeadTimes()**](DeliveryLeadTimesApi.md#pOSTDeliveryLeadTimes) | **POST** /delivery_lead_times | Create a delivery lead time


## `dELETEDeliveryLeadTimesDeliveryLeadTimeId()`

```php
dELETEDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id)
```

Delete a delivery lead time

Delete a delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryLeadTimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_id = 'delivery_lead_time_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryLeadTimesApi->dELETEDeliveryLeadTimesDeliveryLeadTimeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_id** | **string**| The resource&#39;s id |

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

## `gETDeliveryLeadTimes()`

```php
gETDeliveryLeadTimes()
```

List all delivery lead times

List all delivery lead times

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryLeadTimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETDeliveryLeadTimes();
} catch (Exception $e) {
    echo 'Exception when calling DeliveryLeadTimesApi->gETDeliveryLeadTimes: ', $e->getMessage(), PHP_EOL;
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

## `gETDeliveryLeadTimesDeliveryLeadTimeId()`

```php
gETDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id): \OpenAPI\Client\Model\DeliveryLeadTime
```

Retrieve a delivery lead time

Retrieve a delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryLeadTimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_id = 'delivery_lead_time_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryLeadTimesApi->gETDeliveryLeadTimesDeliveryLeadTimeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\DeliveryLeadTime**](../Model/DeliveryLeadTime.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHDeliveryLeadTimesDeliveryLeadTimeId()`

```php
pATCHDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id, $delivery_lead_time_update)
```

Update a delivery lead time

Update a delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryLeadTimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_id = 'delivery_lead_time_id_example'; // string | The resource's id
$delivery_lead_time_update = new \OpenAPI\Client\Model\DeliveryLeadTimeUpdate(); // \OpenAPI\Client\Model\DeliveryLeadTimeUpdate

try {
    $apiInstance->pATCHDeliveryLeadTimesDeliveryLeadTimeId($delivery_lead_time_id, $delivery_lead_time_update);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryLeadTimesApi->pATCHDeliveryLeadTimesDeliveryLeadTimeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_id** | **string**| The resource&#39;s id |
 **delivery_lead_time_update** | [**\OpenAPI\Client\Model\DeliveryLeadTimeUpdate**](../Model/DeliveryLeadTimeUpdate.md)|  |

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

## `pOSTDeliveryLeadTimes()`

```php
pOSTDeliveryLeadTimes($delivery_lead_time_create)
```

Create a delivery lead time

Create a delivery lead time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeliveryLeadTimesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_lead_time_create = new \OpenAPI\Client\Model\DeliveryLeadTimeCreate(); // \OpenAPI\Client\Model\DeliveryLeadTimeCreate

try {
    $apiInstance->pOSTDeliveryLeadTimes($delivery_lead_time_create);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryLeadTimesApi->pOSTDeliveryLeadTimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_lead_time_create** | [**\OpenAPI\Client\Model\DeliveryLeadTimeCreate**](../Model/DeliveryLeadTimeCreate.md)|  |

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
