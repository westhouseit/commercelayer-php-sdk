# OpenAPI\Client\ParcelLineItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEParcelLineItemsParcelLineItemId()**](ParcelLineItemsApi.md#dELETEParcelLineItemsParcelLineItemId) | **DELETE** /parcel_line_items/{parcelLineItemId} | Delete a parcel line item
[**gETParcelLineItems()**](ParcelLineItemsApi.md#gETParcelLineItems) | **GET** /parcel_line_items | List all parcel line items
[**gETParcelLineItemsParcelLineItemId()**](ParcelLineItemsApi.md#gETParcelLineItemsParcelLineItemId) | **GET** /parcel_line_items/{parcelLineItemId} | Retrieve a parcel line item
[**pATCHParcelLineItemsParcelLineItemId()**](ParcelLineItemsApi.md#pATCHParcelLineItemsParcelLineItemId) | **PATCH** /parcel_line_items/{parcelLineItemId} | Update a parcel line item
[**pOSTParcelLineItems()**](ParcelLineItemsApi.md#pOSTParcelLineItems) | **POST** /parcel_line_items | Create a parcel line item


## `dELETEParcelLineItemsParcelLineItemId()`

```php
dELETEParcelLineItemsParcelLineItemId($parcel_line_item_id)
```

Delete a parcel line item

Delete a parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEParcelLineItemsParcelLineItemId($parcel_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelLineItemsApi->dELETEParcelLineItemsParcelLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |

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

## `gETParcelLineItems()`

```php
gETParcelLineItems()
```

List all parcel line items

List all parcel line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETParcelLineItems();
} catch (Exception $e) {
    echo 'Exception when calling ParcelLineItemsApi->gETParcelLineItems: ', $e->getMessage(), PHP_EOL;
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

## `gETParcelLineItemsParcelLineItemId()`

```php
gETParcelLineItemsParcelLineItemId($parcel_line_item_id): \OpenAPI\Client\Model\ParcelLineItem
```

Retrieve a parcel line item

Retrieve a parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETParcelLineItemsParcelLineItemId($parcel_line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelLineItemsApi->gETParcelLineItemsParcelLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ParcelLineItem**](../Model/ParcelLineItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHParcelLineItemsParcelLineItemId()`

```php
pATCHParcelLineItemsParcelLineItemId($parcel_line_item_id, $parcel_line_item_update)
```

Update a parcel line item

Update a parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_id = 'parcel_line_item_id_example'; // string | The resource's id
$parcel_line_item_update = new \OpenAPI\Client\Model\ParcelLineItemUpdate(); // \OpenAPI\Client\Model\ParcelLineItemUpdate

try {
    $apiInstance->pATCHParcelLineItemsParcelLineItemId($parcel_line_item_id, $parcel_line_item_update);
} catch (Exception $e) {
    echo 'Exception when calling ParcelLineItemsApi->pATCHParcelLineItemsParcelLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_id** | **string**| The resource&#39;s id |
 **parcel_line_item_update** | [**\OpenAPI\Client\Model\ParcelLineItemUpdate**](../Model/ParcelLineItemUpdate.md)|  |

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

## `pOSTParcelLineItems()`

```php
pOSTParcelLineItems($parcel_line_item_create)
```

Create a parcel line item

Create a parcel line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParcelLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parcel_line_item_create = new \OpenAPI\Client\Model\ParcelLineItemCreate(); // \OpenAPI\Client\Model\ParcelLineItemCreate

try {
    $apiInstance->pOSTParcelLineItems($parcel_line_item_create);
} catch (Exception $e) {
    echo 'Exception when calling ParcelLineItemsApi->pOSTParcelLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_line_item_create** | [**\OpenAPI\Client\Model\ParcelLineItemCreate**](../Model/ParcelLineItemCreate.md)|  |

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
