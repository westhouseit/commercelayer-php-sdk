# OpenAPI\Client\ReturnsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEReturnsReturnId()**](ReturnsApi.md#dELETEReturnsReturnId) | **DELETE** /returns/{returnId} | Delete a return
[**gETReturns()**](ReturnsApi.md#gETReturns) | **GET** /returns | List all returns
[**gETReturnsReturnId()**](ReturnsApi.md#gETReturnsReturnId) | **GET** /returns/{returnId} | Retrieve a return
[**pATCHReturnsReturnId()**](ReturnsApi.md#pATCHReturnsReturnId) | **PATCH** /returns/{returnId} | Update a return
[**pOSTReturns()**](ReturnsApi.md#pOSTReturns) | **POST** /returns | Create a return


## `dELETEReturnsReturnId()`

```php
dELETEReturnsReturnId($return_id)
```

Delete a return

Delete a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEReturnsReturnId($return_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->dELETEReturnsReturnId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

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

## `gETReturns()`

```php
gETReturns()
```

List all returns

List all returns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETReturns();
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->gETReturns: ', $e->getMessage(), PHP_EOL;
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

## `gETReturnsReturnId()`

```php
gETReturnsReturnId($return_id): \OpenAPI\Client\Model\ModelReturn
```

Retrieve a return

Retrieve a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETReturnsReturnId($return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->gETReturnsReturnId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ModelReturn**](../Model/ModelReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHReturnsReturnId()`

```php
pATCHReturnsReturnId($return_id, $return_update)
```

Update a return

Update a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | The resource's id
$return_update = new \OpenAPI\Client\Model\ReturnUpdate(); // \OpenAPI\Client\Model\ReturnUpdate

try {
    $apiInstance->pATCHReturnsReturnId($return_id, $return_update);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->pATCHReturnsReturnId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| The resource&#39;s id |
 **return_update** | [**\OpenAPI\Client\Model\ReturnUpdate**](../Model/ReturnUpdate.md)|  |

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

## `pOSTReturns()`

```php
pOSTReturns($return_create)
```

Create a return

Create a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_create = new \OpenAPI\Client\Model\ReturnCreate(); // \OpenAPI\Client\Model\ReturnCreate

try {
    $apiInstance->pOSTReturns($return_create);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->pOSTReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_create** | [**\OpenAPI\Client\Model\ReturnCreate**](../Model/ReturnCreate.md)|  |

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
