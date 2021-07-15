# OpenAPI\Client\SkuListItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESkuListItemsSkuListItemId()**](SkuListItemsApi.md#dELETESkuListItemsSkuListItemId) | **DELETE** /sku_list_items/{skuListItemId} | Delete a SKU list item
[**gETSkuListItems()**](SkuListItemsApi.md#gETSkuListItems) | **GET** /sku_list_items | List all SKU list items
[**gETSkuListItemsSkuListItemId()**](SkuListItemsApi.md#gETSkuListItemsSkuListItemId) | **GET** /sku_list_items/{skuListItemId} | Retrieve a SKU list item
[**pATCHSkuListItemsSkuListItemId()**](SkuListItemsApi.md#pATCHSkuListItemsSkuListItemId) | **PATCH** /sku_list_items/{skuListItemId} | Update a SKU list item
[**pOSTSkuListItems()**](SkuListItemsApi.md#pOSTSkuListItems) | **POST** /sku_list_items | Create a SKU list item


## `dELETESkuListItemsSkuListItemId()`

```php
dELETESkuListItemsSkuListItemId($sku_list_item_id)
```

Delete a SKU list item

Delete a SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_id = 'sku_list_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETESkuListItemsSkuListItemId($sku_list_item_id);
} catch (Exception $e) {
    echo 'Exception when calling SkuListItemsApi->dELETESkuListItemsSkuListItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_id** | **string**| The resource&#39;s id |

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

## `gETSkuListItems()`

```php
gETSkuListItems()
```

List all SKU list items

List all SKU list items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETSkuListItems();
} catch (Exception $e) {
    echo 'Exception when calling SkuListItemsApi->gETSkuListItems: ', $e->getMessage(), PHP_EOL;
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

## `gETSkuListItemsSkuListItemId()`

```php
gETSkuListItemsSkuListItemId($sku_list_item_id): \OpenAPI\Client\Model\SkuListItem
```

Retrieve a SKU list item

Retrieve a SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_id = 'sku_list_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETSkuListItemsSkuListItemId($sku_list_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuListItemsApi->gETSkuListItemsSkuListItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\SkuListItem**](../Model/SkuListItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHSkuListItemsSkuListItemId()`

```php
pATCHSkuListItemsSkuListItemId($sku_list_item_id, $sku_list_item_update)
```

Update a SKU list item

Update a SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_id = 'sku_list_item_id_example'; // string | The resource's id
$sku_list_item_update = new \OpenAPI\Client\Model\SkuListItemUpdate(); // \OpenAPI\Client\Model\SkuListItemUpdate

try {
    $apiInstance->pATCHSkuListItemsSkuListItemId($sku_list_item_id, $sku_list_item_update);
} catch (Exception $e) {
    echo 'Exception when calling SkuListItemsApi->pATCHSkuListItemsSkuListItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_id** | **string**| The resource&#39;s id |
 **sku_list_item_update** | [**\OpenAPI\Client\Model\SkuListItemUpdate**](../Model/SkuListItemUpdate.md)|  |

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

## `pOSTSkuListItems()`

```php
pOSTSkuListItems($sku_list_item_create)
```

Create a SKU list item

Create a SKU list item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_item_create = new \OpenAPI\Client\Model\SkuListItemCreate(); // \OpenAPI\Client\Model\SkuListItemCreate

try {
    $apiInstance->pOSTSkuListItems($sku_list_item_create);
} catch (Exception $e) {
    echo 'Exception when calling SkuListItemsApi->pOSTSkuListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_item_create** | [**\OpenAPI\Client\Model\SkuListItemCreate**](../Model/SkuListItemCreate.md)|  |

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
