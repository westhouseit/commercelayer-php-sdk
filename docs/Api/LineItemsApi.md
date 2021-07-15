# OpenAPI\Client\LineItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETELineItemsLineItemId()**](LineItemsApi.md#dELETELineItemsLineItemId) | **DELETE** /line_items/{lineItemId} | Delete a line item
[**gETLineItems()**](LineItemsApi.md#gETLineItems) | **GET** /line_items | List all line items
[**gETLineItemsLineItemId()**](LineItemsApi.md#gETLineItemsLineItemId) | **GET** /line_items/{lineItemId} | Retrieve a line item
[**pATCHLineItemsLineItemId()**](LineItemsApi.md#pATCHLineItemsLineItemId) | **PATCH** /line_items/{lineItemId} | Update a line item
[**pOSTLineItems()**](LineItemsApi.md#pOSTLineItems) | **POST** /line_items | Create a line item


## `dELETELineItemsLineItemId()`

```php
dELETELineItemsLineItemId($line_item_id)
```

Delete a line item

Delete a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_id = 'line_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETELineItemsLineItemId($line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->dELETELineItemsLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The resource&#39;s id |

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

## `gETLineItems()`

```php
gETLineItems()
```

List all line items

List all line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETLineItems();
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->gETLineItems: ', $e->getMessage(), PHP_EOL;
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

## `gETLineItemsLineItemId()`

```php
gETLineItemsLineItemId($line_item_id): \OpenAPI\Client\Model\LineItem
```

Retrieve a line item

Retrieve a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_id = 'line_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETLineItemsLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->gETLineItemsLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHLineItemsLineItemId()`

```php
pATCHLineItemsLineItemId($line_item_id, $line_item_update)
```

Update a line item

Update a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_id = 'line_item_id_example'; // string | The resource's id
$line_item_update = new \OpenAPI\Client\Model\LineItemUpdate(); // \OpenAPI\Client\Model\LineItemUpdate

try {
    $apiInstance->pATCHLineItemsLineItemId($line_item_id, $line_item_update);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->pATCHLineItemsLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The resource&#39;s id |
 **line_item_update** | [**\OpenAPI\Client\Model\LineItemUpdate**](../Model/LineItemUpdate.md)|  |

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

## `pOSTLineItems()`

```php
pOSTLineItems($line_item_create)
```

Create a line item

Create a line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_create = new \OpenAPI\Client\Model\LineItemCreate(); // \OpenAPI\Client\Model\LineItemCreate

try {
    $apiInstance->pOSTLineItems($line_item_create);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->pOSTLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_create** | [**\OpenAPI\Client\Model\LineItemCreate**](../Model/LineItemCreate.md)|  |

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
