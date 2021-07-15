# OpenAPI\Client\CapturesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECapturesCaptureId()**](CapturesApi.md#dELETECapturesCaptureId) | **DELETE** /captures/{captureId} | Delete a capture
[**gETCaptures()**](CapturesApi.md#gETCaptures) | **GET** /captures | List all captures
[**gETCapturesCaptureId()**](CapturesApi.md#gETCapturesCaptureId) | **GET** /captures/{captureId} | Retrieve a capture
[**pATCHCapturesCaptureId()**](CapturesApi.md#pATCHCapturesCaptureId) | **PATCH** /captures/{captureId} | Update a capture
[**pOSTCaptures()**](CapturesApi.md#pOSTCaptures) | **POST** /captures | Create a capture


## `dELETECapturesCaptureId()`

```php
dELETECapturesCaptureId($capture_id)
```

Delete a capture

Delete a capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_id = 'capture_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECapturesCaptureId($capture_id);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->dELETECapturesCaptureId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| The resource&#39;s id |

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

## `gETCaptures()`

```php
gETCaptures()
```

List all captures

List all captures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCaptures();
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->gETCaptures: ', $e->getMessage(), PHP_EOL;
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

## `gETCapturesCaptureId()`

```php
gETCapturesCaptureId($capture_id): \OpenAPI\Client\Model\Capture
```

Retrieve a capture

Retrieve a capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_id = 'capture_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCapturesCaptureId($capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->gETCapturesCaptureId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Capture**](../Model/Capture.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCapturesCaptureId()`

```php
pATCHCapturesCaptureId($capture_id, $capture_update)
```

Update a capture

Update a capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_id = 'capture_id_example'; // string | The resource's id
$capture_update = new \OpenAPI\Client\Model\CaptureUpdate(); // \OpenAPI\Client\Model\CaptureUpdate

try {
    $apiInstance->pATCHCapturesCaptureId($capture_id, $capture_update);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->pATCHCapturesCaptureId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| The resource&#39;s id |
 **capture_update** | [**\OpenAPI\Client\Model\CaptureUpdate**](../Model/CaptureUpdate.md)|  |

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

## `pOSTCaptures()`

```php
pOSTCaptures($capture_create)
```

Create a capture

Create a capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$capture_create = new \OpenAPI\Client\Model\CaptureCreate(); // \OpenAPI\Client\Model\CaptureCreate

try {
    $apiInstance->pOSTCaptures($capture_create);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->pOSTCaptures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_create** | [**\OpenAPI\Client\Model\CaptureCreate**](../Model/CaptureCreate.md)|  |

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
