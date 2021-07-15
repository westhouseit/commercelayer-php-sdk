# OpenAPI\Client\ShippingZonesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEShippingZonesShippingZoneId()**](ShippingZonesApi.md#dELETEShippingZonesShippingZoneId) | **DELETE** /shipping_zones/{shippingZoneId} | Delete a shipping zone
[**gETShippingZones()**](ShippingZonesApi.md#gETShippingZones) | **GET** /shipping_zones | List all shipping zones
[**gETShippingZonesShippingZoneId()**](ShippingZonesApi.md#gETShippingZonesShippingZoneId) | **GET** /shipping_zones/{shippingZoneId} | Retrieve a shipping zone
[**pATCHShippingZonesShippingZoneId()**](ShippingZonesApi.md#pATCHShippingZonesShippingZoneId) | **PATCH** /shipping_zones/{shippingZoneId} | Update a shipping zone
[**pOSTShippingZones()**](ShippingZonesApi.md#pOSTShippingZones) | **POST** /shipping_zones | Create a shipping zone


## `dELETEShippingZonesShippingZoneId()`

```php
dELETEShippingZonesShippingZoneId($shipping_zone_id)
```

Delete a shipping zone

Delete a shipping zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_zone_id = 'shipping_zone_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEShippingZonesShippingZoneId($shipping_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->dELETEShippingZonesShippingZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_zone_id** | **string**| The resource&#39;s id |

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

## `gETShippingZones()`

```php
gETShippingZones()
```

List all shipping zones

List all shipping zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETShippingZones();
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->gETShippingZones: ', $e->getMessage(), PHP_EOL;
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

## `gETShippingZonesShippingZoneId()`

```php
gETShippingZonesShippingZoneId($shipping_zone_id): \OpenAPI\Client\Model\ShippingZone
```

Retrieve a shipping zone

Retrieve a shipping zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_zone_id = 'shipping_zone_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETShippingZonesShippingZoneId($shipping_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->gETShippingZonesShippingZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_zone_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ShippingZone**](../Model/ShippingZone.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHShippingZonesShippingZoneId()`

```php
pATCHShippingZonesShippingZoneId($shipping_zone_id, $shipping_zone_update)
```

Update a shipping zone

Update a shipping zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_zone_id = 'shipping_zone_id_example'; // string | The resource's id
$shipping_zone_update = new \OpenAPI\Client\Model\ShippingZoneUpdate(); // \OpenAPI\Client\Model\ShippingZoneUpdate

try {
    $apiInstance->pATCHShippingZonesShippingZoneId($shipping_zone_id, $shipping_zone_update);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->pATCHShippingZonesShippingZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_zone_id** | **string**| The resource&#39;s id |
 **shipping_zone_update** | [**\OpenAPI\Client\Model\ShippingZoneUpdate**](../Model/ShippingZoneUpdate.md)|  |

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

## `pOSTShippingZones()`

```php
pOSTShippingZones($shipping_zone_create)
```

Create a shipping zone

Create a shipping zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_zone_create = new \OpenAPI\Client\Model\ShippingZoneCreate(); // \OpenAPI\Client\Model\ShippingZoneCreate

try {
    $apiInstance->pOSTShippingZones($shipping_zone_create);
} catch (Exception $e) {
    echo 'Exception when calling ShippingZonesApi->pOSTShippingZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_zone_create** | [**\OpenAPI\Client\Model\ShippingZoneCreate**](../Model/ShippingZoneCreate.md)|  |

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
