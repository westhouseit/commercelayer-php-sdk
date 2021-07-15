# OpenAPI\Client\TaxCategoriesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETETaxCategoriesTaxCategoryId()**](TaxCategoriesApi.md#dELETETaxCategoriesTaxCategoryId) | **DELETE** /tax_categories/{taxCategoryId} | Delete a tax category
[**gETTaxCategories()**](TaxCategoriesApi.md#gETTaxCategories) | **GET** /tax_categories | List all tax categories
[**gETTaxCategoriesTaxCategoryId()**](TaxCategoriesApi.md#gETTaxCategoriesTaxCategoryId) | **GET** /tax_categories/{taxCategoryId} | Retrieve a tax category
[**pATCHTaxCategoriesTaxCategoryId()**](TaxCategoriesApi.md#pATCHTaxCategoriesTaxCategoryId) | **PATCH** /tax_categories/{taxCategoryId} | Update a tax category
[**pOSTTaxCategories()**](TaxCategoriesApi.md#pOSTTaxCategories) | **POST** /tax_categories | Create a tax category


## `dELETETaxCategoriesTaxCategoryId()`

```php
dELETETaxCategoriesTaxCategoryId($tax_category_id)
```

Delete a tax category

Delete a tax category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_category_id = 'tax_category_id_example'; // string | The resource's id

try {
    $apiInstance->dELETETaxCategoriesTaxCategoryId($tax_category_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxCategoriesApi->dELETETaxCategoriesTaxCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_category_id** | **string**| The resource&#39;s id |

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

## `gETTaxCategories()`

```php
gETTaxCategories()
```

List all tax categories

List all tax categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETTaxCategories();
} catch (Exception $e) {
    echo 'Exception when calling TaxCategoriesApi->gETTaxCategories: ', $e->getMessage(), PHP_EOL;
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

## `gETTaxCategoriesTaxCategoryId()`

```php
gETTaxCategoriesTaxCategoryId($tax_category_id): \OpenAPI\Client\Model\TaxCategory
```

Retrieve a tax category

Retrieve a tax category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_category_id = 'tax_category_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETTaxCategoriesTaxCategoryId($tax_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxCategoriesApi->gETTaxCategoriesTaxCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_category_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\TaxCategory**](../Model/TaxCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHTaxCategoriesTaxCategoryId()`

```php
pATCHTaxCategoriesTaxCategoryId($tax_category_id, $tax_category_update)
```

Update a tax category

Update a tax category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_category_id = 'tax_category_id_example'; // string | The resource's id
$tax_category_update = new \OpenAPI\Client\Model\TaxCategoryUpdate(); // \OpenAPI\Client\Model\TaxCategoryUpdate

try {
    $apiInstance->pATCHTaxCategoriesTaxCategoryId($tax_category_id, $tax_category_update);
} catch (Exception $e) {
    echo 'Exception when calling TaxCategoriesApi->pATCHTaxCategoriesTaxCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_category_id** | **string**| The resource&#39;s id |
 **tax_category_update** | [**\OpenAPI\Client\Model\TaxCategoryUpdate**](../Model/TaxCategoryUpdate.md)|  |

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

## `pOSTTaxCategories()`

```php
pOSTTaxCategories($tax_category_create)
```

Create a tax category

Create a tax category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_category_create = new \OpenAPI\Client\Model\TaxCategoryCreate(); // \OpenAPI\Client\Model\TaxCategoryCreate

try {
    $apiInstance->pOSTTaxCategories($tax_category_create);
} catch (Exception $e) {
    echo 'Exception when calling TaxCategoriesApi->pOSTTaxCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_category_create** | [**\OpenAPI\Client\Model\TaxCategoryCreate**](../Model/TaxCategoryCreate.md)|  |

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
