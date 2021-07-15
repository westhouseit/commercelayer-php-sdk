# OpenAPI\Client\ShipmentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEShipmentsShipmentId()**](ShipmentsApi.md#dELETEShipmentsShipmentId) | **DELETE** /shipments/{shipmentId} | Delete a shipment
[**gETShipments()**](ShipmentsApi.md#gETShipments) | **GET** /shipments | List all shipments
[**gETShipmentsShipmentId()**](ShipmentsApi.md#gETShipmentsShipmentId) | **GET** /shipments/{shipmentId} | Retrieve a shipment
[**pATCHShipmentsShipmentId()**](ShipmentsApi.md#pATCHShipmentsShipmentId) | **PATCH** /shipments/{shipmentId} | Update a shipment
[**pOSTShipments()**](ShipmentsApi.md#pOSTShipments) | **POST** /shipments | Create a shipment


## `dELETEShipmentsShipmentId()`

```php
dELETEShipmentsShipmentId($shipment_id)
```

Delete a shipment

Delete a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEShipmentsShipmentId($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->dELETEShipmentsShipmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

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

## `gETShipments()`

```php
gETShipments()
```

List all shipments

List all shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETShipments();
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->gETShipments: ', $e->getMessage(), PHP_EOL;
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

## `gETShipmentsShipmentId()`

```php
gETShipmentsShipmentId($shipment_id): \OpenAPI\Client\Model\Shipment
```

Retrieve a shipment

Retrieve a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETShipmentsShipmentId($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->gETShipmentsShipmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHShipmentsShipmentId()`

```php
pATCHShipmentsShipmentId($shipment_id, $shipment_update)
```

Update a shipment

Update a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The resource's id
$shipment_update = new \OpenAPI\Client\Model\ShipmentUpdate(); // \OpenAPI\Client\Model\ShipmentUpdate

try {
    $apiInstance->pATCHShipmentsShipmentId($shipment_id, $shipment_update);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->pATCHShipmentsShipmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The resource&#39;s id |
 **shipment_update** | [**\OpenAPI\Client\Model\ShipmentUpdate**](../Model/ShipmentUpdate.md)|  |

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

## `pOSTShipments()`

```php
pOSTShipments($shipment_create)
```

Create a shipment

Create a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_create = new \OpenAPI\Client\Model\ShipmentCreate(); // \OpenAPI\Client\Model\ShipmentCreate

try {
    $apiInstance->pOSTShipments($shipment_create);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->pOSTShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_create** | [**\OpenAPI\Client\Model\ShipmentCreate**](../Model/ShipmentCreate.md)|  |

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
