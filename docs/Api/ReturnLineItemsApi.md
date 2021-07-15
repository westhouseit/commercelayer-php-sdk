# OpenAPI\Client\ReturnLineItemsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEReturnLineItemsReturnLineItemId()**](ReturnLineItemsApi.md#dELETEReturnLineItemsReturnLineItemId) | **DELETE** /return_line_items/{returnLineItemId} | Delete a return line item
[**gETReturnLineItems()**](ReturnLineItemsApi.md#gETReturnLineItems) | **GET** /return_line_items | List all return line items
[**gETReturnLineItemsReturnLineItemId()**](ReturnLineItemsApi.md#gETReturnLineItemsReturnLineItemId) | **GET** /return_line_items/{returnLineItemId} | Retrieve a return line item
[**pATCHReturnLineItemsReturnLineItemId()**](ReturnLineItemsApi.md#pATCHReturnLineItemsReturnLineItemId) | **PATCH** /return_line_items/{returnLineItemId} | Update a return line item
[**pOSTReturnLineItems()**](ReturnLineItemsApi.md#pOSTReturnLineItems) | **POST** /return_line_items | Create a return line item


## `dELETEReturnLineItemsReturnLineItemId()`

```php
dELETEReturnLineItemsReturnLineItemId($return_line_item_id)
```

Delete a return line item

Delete a return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_id = 'return_line_item_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEReturnLineItemsReturnLineItemId($return_line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->dELETEReturnLineItemsReturnLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_id** | **string**| The resource&#39;s id |

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

## `gETReturnLineItems()`

```php
gETReturnLineItems()
```

List all return line items

List all return line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETReturnLineItems();
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->gETReturnLineItems: ', $e->getMessage(), PHP_EOL;
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

## `gETReturnLineItemsReturnLineItemId()`

```php
gETReturnLineItemsReturnLineItemId($return_line_item_id): \OpenAPI\Client\Model\ReturnLineItem
```

Retrieve a return line item

Retrieve a return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_id = 'return_line_item_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETReturnLineItemsReturnLineItemId($return_line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->gETReturnLineItemsReturnLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ReturnLineItem**](../Model/ReturnLineItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHReturnLineItemsReturnLineItemId()`

```php
pATCHReturnLineItemsReturnLineItemId($return_line_item_id, $return_line_item_update)
```

Update a return line item

Update a return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_id = 'return_line_item_id_example'; // string | The resource's id
$return_line_item_update = new \OpenAPI\Client\Model\ReturnLineItemUpdate(); // \OpenAPI\Client\Model\ReturnLineItemUpdate

try {
    $apiInstance->pATCHReturnLineItemsReturnLineItemId($return_line_item_id, $return_line_item_update);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->pATCHReturnLineItemsReturnLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_id** | **string**| The resource&#39;s id |
 **return_line_item_update** | [**\OpenAPI\Client\Model\ReturnLineItemUpdate**](../Model/ReturnLineItemUpdate.md)|  |

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

## `pOSTReturnLineItems()`

```php
pOSTReturnLineItems($return_line_item_create)
```

Create a return line item

Create a return line item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_line_item_create = new \OpenAPI\Client\Model\ReturnLineItemCreate(); // \OpenAPI\Client\Model\ReturnLineItemCreate

try {
    $apiInstance->pOSTReturnLineItems($return_line_item_create);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->pOSTReturnLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_line_item_create** | [**\OpenAPI\Client\Model\ReturnLineItemCreate**](../Model/ReturnLineItemCreate.md)|  |

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
