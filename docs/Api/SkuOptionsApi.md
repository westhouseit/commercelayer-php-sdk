# OpenAPI\Client\SkuOptionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESkuOptionsSkuOptionId()**](SkuOptionsApi.md#dELETESkuOptionsSkuOptionId) | **DELETE** /sku_options/{skuOptionId} | Delete a SKU option
[**gETSkuOptions()**](SkuOptionsApi.md#gETSkuOptions) | **GET** /sku_options | List all SKU options
[**gETSkuOptionsSkuOptionId()**](SkuOptionsApi.md#gETSkuOptionsSkuOptionId) | **GET** /sku_options/{skuOptionId} | Retrieve a SKU option
[**pATCHSkuOptionsSkuOptionId()**](SkuOptionsApi.md#pATCHSkuOptionsSkuOptionId) | **PATCH** /sku_options/{skuOptionId} | Update a SKU option
[**pOSTSkuOptions()**](SkuOptionsApi.md#pOSTSkuOptions) | **POST** /sku_options | Create a SKU option


## `dELETESkuOptionsSkuOptionId()`

```php
dELETESkuOptionsSkuOptionId($sku_option_id)
```

Delete a SKU option

Delete a SKU option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_option_id = 'sku_option_id_example'; // string | The resource's id

try {
    $apiInstance->dELETESkuOptionsSkuOptionId($sku_option_id);
} catch (Exception $e) {
    echo 'Exception when calling SkuOptionsApi->dELETESkuOptionsSkuOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_option_id** | **string**| The resource&#39;s id |

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

## `gETSkuOptions()`

```php
gETSkuOptions()
```

List all SKU options

List all SKU options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETSkuOptions();
} catch (Exception $e) {
    echo 'Exception when calling SkuOptionsApi->gETSkuOptions: ', $e->getMessage(), PHP_EOL;
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

## `gETSkuOptionsSkuOptionId()`

```php
gETSkuOptionsSkuOptionId($sku_option_id): \OpenAPI\Client\Model\SkuOption
```

Retrieve a SKU option

Retrieve a SKU option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_option_id = 'sku_option_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETSkuOptionsSkuOptionId($sku_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuOptionsApi->gETSkuOptionsSkuOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_option_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\SkuOption**](../Model/SkuOption.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHSkuOptionsSkuOptionId()`

```php
pATCHSkuOptionsSkuOptionId($sku_option_id, $sku_option_update)
```

Update a SKU option

Update a SKU option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_option_id = 'sku_option_id_example'; // string | The resource's id
$sku_option_update = new \OpenAPI\Client\Model\SkuOptionUpdate(); // \OpenAPI\Client\Model\SkuOptionUpdate

try {
    $apiInstance->pATCHSkuOptionsSkuOptionId($sku_option_id, $sku_option_update);
} catch (Exception $e) {
    echo 'Exception when calling SkuOptionsApi->pATCHSkuOptionsSkuOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_option_id** | **string**| The resource&#39;s id |
 **sku_option_update** | [**\OpenAPI\Client\Model\SkuOptionUpdate**](../Model/SkuOptionUpdate.md)|  |

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

## `pOSTSkuOptions()`

```php
pOSTSkuOptions($sku_option_create)
```

Create a SKU option

Create a SKU option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SkuOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku_option_create = new \OpenAPI\Client\Model\SkuOptionCreate(); // \OpenAPI\Client\Model\SkuOptionCreate

try {
    $apiInstance->pOSTSkuOptions($sku_option_create);
} catch (Exception $e) {
    echo 'Exception when calling SkuOptionsApi->pOSTSkuOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_option_create** | [**\OpenAPI\Client\Model\SkuOptionCreate**](../Model/SkuOptionCreate.md)|  |

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
