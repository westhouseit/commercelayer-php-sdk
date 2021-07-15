# OpenAPI\Client\ParcelsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEParcelsParcelId()**](ParcelsApi.md#dELETEParcelsParcelId) | **DELETE** /parcels/{parcelId} | Delete a parcel
[**gETParcels()**](ParcelsApi.md#gETParcels) | **GET** /parcels | List all parcels
[**gETParcelsParcelId()**](ParcelsApi.md#gETParcelsParcelId) | **GET** /parcels/{parcelId} | Retrieve a parcel
[**pATCHParcelsParcelId()**](ParcelsApi.md#pATCHParcelsParcelId) | **PATCH** /parcels/{parcelId} | Update a parcel
[**pOSTParcels()**](ParcelsApi.md#pOSTParcels) | **POST** /parcels | Create a parcel


## `dELETEParcelsParcelId()`

```php
dELETEParcelsParcelId($parcel_id)
```

Delete a parcel

Delete a parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_id = 'parcel_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEParcelsParcelId($parcel_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->dELETEParcelsParcelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| The resource&#39;s id |

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

## `gETParcels()`

```php
gETParcels()
```

List all parcels

List all parcels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETParcels();
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->gETParcels: ', $e->getMessage(), PHP_EOL;
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

## `gETParcelsParcelId()`

```php
gETParcelsParcelId($parcel_id): \OpenAPI\Client\Model\Parcel
```

Retrieve a parcel

Retrieve a parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_id = 'parcel_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETParcelsParcelId($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->gETParcelsParcelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Parcel**](../Model/Parcel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHParcelsParcelId()`

```php
pATCHParcelsParcelId($parcel_id, $parcel_update)
```

Update a parcel

Update a parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_id = 'parcel_id_example'; // string | The resource's id
$parcel_update = new \OpenAPI\Client\Model\ParcelUpdate(); // \OpenAPI\Client\Model\ParcelUpdate

try {
    $apiInstance->pATCHParcelsParcelId($parcel_id, $parcel_update);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->pATCHParcelsParcelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| The resource&#39;s id |
 **parcel_update** | [**\OpenAPI\Client\Model\ParcelUpdate**](../Model/ParcelUpdate.md)|  |

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

## `pOSTParcels()`

```php
pOSTParcels($parcel_create)
```

Create a parcel

Create a parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_create = new \OpenAPI\Client\Model\ParcelCreate(); // \OpenAPI\Client\Model\ParcelCreate

try {
    $apiInstance->pOSTParcels($parcel_create);
} catch (Exception $e) {
    echo 'Exception when calling ParcelsApi->pOSTParcels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_create** | [**\OpenAPI\Client\Model\ParcelCreate**](../Model/ParcelCreate.md)|  |

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
