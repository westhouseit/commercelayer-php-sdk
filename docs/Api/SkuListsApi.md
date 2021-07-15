# OpenAPI\Client\SkuListsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESkuListsSkuListId()**](SkuListsApi.md#dELETESkuListsSkuListId) | **DELETE** /sku_lists/{skuListId} | Delete a SKU list
[**gETSkuLists()**](SkuListsApi.md#gETSkuLists) | **GET** /sku_lists | List all SKU lists
[**gETSkuListsSkuListId()**](SkuListsApi.md#gETSkuListsSkuListId) | **GET** /sku_lists/{skuListId} | Retrieve a SKU list
[**pATCHSkuListsSkuListId()**](SkuListsApi.md#pATCHSkuListsSkuListId) | **PATCH** /sku_lists/{skuListId} | Update a SKU list
[**pOSTSkuLists()**](SkuListsApi.md#pOSTSkuLists) | **POST** /sku_lists | Create a SKU list


## `dELETESkuListsSkuListId()`

```php
dELETESkuListsSkuListId($sku_list_id)
```

Delete a SKU list

Delete a SKU list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_id = 'sku_list_id_example'; // string | The resource's id

try {
    $apiInstance->dELETESkuListsSkuListId($sku_list_id);
} catch (Exception $e) {
    echo 'Exception when calling SkuListsApi->dELETESkuListsSkuListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_id** | **string**| The resource&#39;s id |

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

## `gETSkuLists()`

```php
gETSkuLists()
```

List all SKU lists

List all SKU lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETSkuLists();
} catch (Exception $e) {
    echo 'Exception when calling SkuListsApi->gETSkuLists: ', $e->getMessage(), PHP_EOL;
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

## `gETSkuListsSkuListId()`

```php
gETSkuListsSkuListId($sku_list_id): \OpenAPI\Client\Model\SkuList
```

Retrieve a SKU list

Retrieve a SKU list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_id = 'sku_list_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETSkuListsSkuListId($sku_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuListsApi->gETSkuListsSkuListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\SkuList**](../Model/SkuList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHSkuListsSkuListId()`

```php
pATCHSkuListsSkuListId($sku_list_id, $sku_list_update)
```

Update a SKU list

Update a SKU list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_id = 'sku_list_id_example'; // string | The resource's id
$sku_list_update = new \OpenAPI\Client\Model\SkuListUpdate(); // \OpenAPI\Client\Model\SkuListUpdate

try {
    $apiInstance->pATCHSkuListsSkuListId($sku_list_id, $sku_list_update);
} catch (Exception $e) {
    echo 'Exception when calling SkuListsApi->pATCHSkuListsSkuListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_id** | **string**| The resource&#39;s id |
 **sku_list_update** | [**\OpenAPI\Client\Model\SkuListUpdate**](../Model/SkuListUpdate.md)|  |

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

## `pOSTSkuLists()`

```php
pOSTSkuLists($sku_list_create)
```

Create a SKU list

Create a SKU list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_list_create = new \OpenAPI\Client\Model\SkuListCreate(); // \OpenAPI\Client\Model\SkuListCreate

try {
    $apiInstance->pOSTSkuLists($sku_list_create);
} catch (Exception $e) {
    echo 'Exception when calling SkuListsApi->pOSTSkuLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_list_create** | [**\OpenAPI\Client\Model\SkuListCreate**](../Model/SkuListCreate.md)|  |

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
