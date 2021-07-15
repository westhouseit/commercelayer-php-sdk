# OpenAPI\Client\PriceListsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPriceListsPriceListId()**](PriceListsApi.md#dELETEPriceListsPriceListId) | **DELETE** /price_lists/{priceListId} | Delete a price list
[**gETPriceLists()**](PriceListsApi.md#gETPriceLists) | **GET** /price_lists | List all price lists
[**gETPriceListsPriceListId()**](PriceListsApi.md#gETPriceListsPriceListId) | **GET** /price_lists/{priceListId} | Retrieve a price list
[**pATCHPriceListsPriceListId()**](PriceListsApi.md#pATCHPriceListsPriceListId) | **PATCH** /price_lists/{priceListId} | Update a price list
[**pOSTPriceLists()**](PriceListsApi.md#pOSTPriceLists) | **POST** /price_lists | Create a price list


## `dELETEPriceListsPriceListId()`

```php
dELETEPriceListsPriceListId($price_list_id)
```

Delete a price list

Delete a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list_id = 'price_list_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPriceListsPriceListId($price_list_id);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->dELETEPriceListsPriceListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **string**| The resource&#39;s id |

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

## `gETPriceLists()`

```php
gETPriceLists()
```

List all price lists

List all price lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPriceLists();
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->gETPriceLists: ', $e->getMessage(), PHP_EOL;
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

## `gETPriceListsPriceListId()`

```php
gETPriceListsPriceListId($price_list_id): \OpenAPI\Client\Model\PriceList
```

Retrieve a price list

Retrieve a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list_id = 'price_list_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPriceListsPriceListId($price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->gETPriceListsPriceListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PriceList**](../Model/PriceList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPriceListsPriceListId()`

```php
pATCHPriceListsPriceListId($price_list_id, $price_list_update)
```

Update a price list

Update a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list_id = 'price_list_id_example'; // string | The resource's id
$price_list_update = new \OpenAPI\Client\Model\PriceListUpdate(); // \OpenAPI\Client\Model\PriceListUpdate

try {
    $apiInstance->pATCHPriceListsPriceListId($price_list_id, $price_list_update);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->pATCHPriceListsPriceListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **string**| The resource&#39;s id |
 **price_list_update** | [**\OpenAPI\Client\Model\PriceListUpdate**](../Model/PriceListUpdate.md)|  |

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

## `pOSTPriceLists()`

```php
pOSTPriceLists($price_list_create)
```

Create a price list

Create a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list_create = new \OpenAPI\Client\Model\PriceListCreate(); // \OpenAPI\Client\Model\PriceListCreate

try {
    $apiInstance->pOSTPriceLists($price_list_create);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->pOSTPriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_create** | [**\OpenAPI\Client\Model\PriceListCreate**](../Model/PriceListCreate.md)|  |

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
