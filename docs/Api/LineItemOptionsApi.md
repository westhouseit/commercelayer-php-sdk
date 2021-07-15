# OpenAPI\Client\LineItemOptionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETELineItemOptionsLineItemOptionId()**](LineItemOptionsApi.md#dELETELineItemOptionsLineItemOptionId) | **DELETE** /line_item_options/{lineItemOptionId} | Delete a line item option
[**gETLineItemOptions()**](LineItemOptionsApi.md#gETLineItemOptions) | **GET** /line_item_options | List all line item options
[**gETLineItemOptionsLineItemOptionId()**](LineItemOptionsApi.md#gETLineItemOptionsLineItemOptionId) | **GET** /line_item_options/{lineItemOptionId} | Retrieve a line item option
[**pATCHLineItemOptionsLineItemOptionId()**](LineItemOptionsApi.md#pATCHLineItemOptionsLineItemOptionId) | **PATCH** /line_item_options/{lineItemOptionId} | Update a line item option
[**pOSTLineItemOptions()**](LineItemOptionsApi.md#pOSTLineItemOptions) | **POST** /line_item_options | Create a line item option


## `dELETELineItemOptionsLineItemOptionId()`

```php
dELETELineItemOptionsLineItemOptionId($line_item_option_id)
```

Delete a line item option

Delete a line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_id = 'line_item_option_id_example'; // string | The resource's id

try {
    $apiInstance->dELETELineItemOptionsLineItemOptionId($line_item_option_id);
} catch (Exception $e) {
    echo 'Exception when calling LineItemOptionsApi->dELETELineItemOptionsLineItemOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_id** | **string**| The resource&#39;s id |

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

## `gETLineItemOptions()`

```php
gETLineItemOptions()
```

List all line item options

List all line item options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETLineItemOptions();
} catch (Exception $e) {
    echo 'Exception when calling LineItemOptionsApi->gETLineItemOptions: ', $e->getMessage(), PHP_EOL;
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

## `gETLineItemOptionsLineItemOptionId()`

```php
gETLineItemOptionsLineItemOptionId($line_item_option_id): \OpenAPI\Client\Model\LineItemOption
```

Retrieve a line item option

Retrieve a line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_id = 'line_item_option_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETLineItemOptionsLineItemOptionId($line_item_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemOptionsApi->gETLineItemOptionsLineItemOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\LineItemOption**](../Model/LineItemOption.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHLineItemOptionsLineItemOptionId()`

```php
pATCHLineItemOptionsLineItemOptionId($line_item_option_id, $line_item_option_update)
```

Update a line item option

Update a line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_id = 'line_item_option_id_example'; // string | The resource's id
$line_item_option_update = new \OpenAPI\Client\Model\LineItemOptionUpdate(); // \OpenAPI\Client\Model\LineItemOptionUpdate

try {
    $apiInstance->pATCHLineItemOptionsLineItemOptionId($line_item_option_id, $line_item_option_update);
} catch (Exception $e) {
    echo 'Exception when calling LineItemOptionsApi->pATCHLineItemOptionsLineItemOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_id** | **string**| The resource&#39;s id |
 **line_item_option_update** | [**\OpenAPI\Client\Model\LineItemOptionUpdate**](../Model/LineItemOptionUpdate.md)|  |

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

## `pOSTLineItemOptions()`

```php
pOSTLineItemOptions($line_item_option_create)
```

Create a line item option

Create a line item option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LineItemOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_option_create = new \OpenAPI\Client\Model\LineItemOptionCreate(); // \OpenAPI\Client\Model\LineItemOptionCreate

try {
    $apiInstance->pOSTLineItemOptions($line_item_option_create);
} catch (Exception $e) {
    echo 'Exception when calling LineItemOptionsApi->pOSTLineItemOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_option_create** | [**\OpenAPI\Client\Model\LineItemOptionCreate**](../Model/LineItemOptionCreate.md)|  |

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
