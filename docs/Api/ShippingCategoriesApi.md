# OpenAPI\Client\ShippingCategoriesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEShippingCategoriesShippingCategoryId()**](ShippingCategoriesApi.md#dELETEShippingCategoriesShippingCategoryId) | **DELETE** /shipping_categories/{shippingCategoryId} | Delete a shipping category
[**gETShippingCategories()**](ShippingCategoriesApi.md#gETShippingCategories) | **GET** /shipping_categories | List all shipping categories
[**gETShippingCategoriesShippingCategoryId()**](ShippingCategoriesApi.md#gETShippingCategoriesShippingCategoryId) | **GET** /shipping_categories/{shippingCategoryId} | Retrieve a shipping category
[**pATCHShippingCategoriesShippingCategoryId()**](ShippingCategoriesApi.md#pATCHShippingCategoriesShippingCategoryId) | **PATCH** /shipping_categories/{shippingCategoryId} | Update a shipping category
[**pOSTShippingCategories()**](ShippingCategoriesApi.md#pOSTShippingCategories) | **POST** /shipping_categories | Create a shipping category


## `dELETEShippingCategoriesShippingCategoryId()`

```php
dELETEShippingCategoriesShippingCategoryId($shipping_category_id)
```

Delete a shipping category

Delete a shipping category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_category_id = 'shipping_category_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEShippingCategoriesShippingCategoryId($shipping_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCategoriesApi->dELETEShippingCategoriesShippingCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_category_id** | **string**| The resource&#39;s id |

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

## `gETShippingCategories()`

```php
gETShippingCategories()
```

List all shipping categories

List all shipping categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETShippingCategories();
} catch (Exception $e) {
    echo 'Exception when calling ShippingCategoriesApi->gETShippingCategories: ', $e->getMessage(), PHP_EOL;
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

## `gETShippingCategoriesShippingCategoryId()`

```php
gETShippingCategoriesShippingCategoryId($shipping_category_id): \OpenAPI\Client\Model\ShippingCategory
```

Retrieve a shipping category

Retrieve a shipping category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_category_id = 'shipping_category_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETShippingCategoriesShippingCategoryId($shipping_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCategoriesApi->gETShippingCategoriesShippingCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_category_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ShippingCategory**](../Model/ShippingCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHShippingCategoriesShippingCategoryId()`

```php
pATCHShippingCategoriesShippingCategoryId($shipping_category_id, $shipping_category_update)
```

Update a shipping category

Update a shipping category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_category_id = 'shipping_category_id_example'; // string | The resource's id
$shipping_category_update = new \OpenAPI\Client\Model\ShippingCategoryUpdate(); // \OpenAPI\Client\Model\ShippingCategoryUpdate

try {
    $apiInstance->pATCHShippingCategoriesShippingCategoryId($shipping_category_id, $shipping_category_update);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCategoriesApi->pATCHShippingCategoriesShippingCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_category_id** | **string**| The resource&#39;s id |
 **shipping_category_update** | [**\OpenAPI\Client\Model\ShippingCategoryUpdate**](../Model/ShippingCategoryUpdate.md)|  |

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

## `pOSTShippingCategories()`

```php
pOSTShippingCategories($shipping_category_create)
```

Create a shipping category

Create a shipping category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ShippingCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_category_create = new \OpenAPI\Client\Model\ShippingCategoryCreate(); // \OpenAPI\Client\Model\ShippingCategoryCreate

try {
    $apiInstance->pOSTShippingCategories($shipping_category_create);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCategoriesApi->pOSTShippingCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_category_create** | [**\OpenAPI\Client\Model\ShippingCategoryCreate**](../Model/ShippingCategoryCreate.md)|  |

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
