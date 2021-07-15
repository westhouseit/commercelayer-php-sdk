# OpenAPI\Client\SkusApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESkusSkuId()**](SkusApi.md#dELETESkusSkuId) | **DELETE** /skus/{skuId} | Delete a SKU
[**gETSkus()**](SkusApi.md#gETSkus) | **GET** /skus | List all SKUs
[**gETSkusSkuId()**](SkusApi.md#gETSkusSkuId) | **GET** /skus/{skuId} | Retrieve a SKU
[**pATCHSkusSkuId()**](SkusApi.md#pATCHSkusSkuId) | **PATCH** /skus/{skuId} | Update a SKU
[**pOSTSkus()**](SkusApi.md#pOSTSkus) | **POST** /skus | Create a SKU


## `dELETESkusSkuId()`

```php
dELETESkusSkuId($sku_id)
```

Delete a SKU

Delete a SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_id = 'sku_id_example'; // string | The resource's id

try {
    $apiInstance->dELETESkusSkuId($sku_id);
} catch (Exception $e) {
    echo 'Exception when calling SkusApi->dELETESkusSkuId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **string**| The resource&#39;s id |

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

## `gETSkus()`

```php
gETSkus()
```

List all SKUs

List all SKUs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETSkus();
} catch (Exception $e) {
    echo 'Exception when calling SkusApi->gETSkus: ', $e->getMessage(), PHP_EOL;
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

## `gETSkusSkuId()`

```php
gETSkusSkuId($sku_id): \OpenAPI\Client\Model\Sku
```

Retrieve a SKU

Retrieve a SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_id = 'sku_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETSkusSkuId($sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkusApi->gETSkusSkuId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Sku**](../Model/Sku.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHSkusSkuId()`

```php
pATCHSkusSkuId($sku_id, $sku_update)
```

Update a SKU

Update a SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_id = 'sku_id_example'; // string | The resource's id
$sku_update = new \OpenAPI\Client\Model\SkuUpdate(); // \OpenAPI\Client\Model\SkuUpdate

try {
    $apiInstance->pATCHSkusSkuId($sku_id, $sku_update);
} catch (Exception $e) {
    echo 'Exception when calling SkusApi->pATCHSkusSkuId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **string**| The resource&#39;s id |
 **sku_update** | [**\OpenAPI\Client\Model\SkuUpdate**](../Model/SkuUpdate.md)|  |

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

## `pOSTSkus()`

```php
pOSTSkus($sku_create)
```

Create a SKU

Create a SKU

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_create = new \OpenAPI\Client\Model\SkuCreate(); // \OpenAPI\Client\Model\SkuCreate

try {
    $apiInstance->pOSTSkus($sku_create);
} catch (Exception $e) {
    echo 'Exception when calling SkusApi->pOSTSkus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_create** | [**\OpenAPI\Client\Model\SkuCreate**](../Model/SkuCreate.md)|  |

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
