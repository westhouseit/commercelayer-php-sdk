# OpenAPI\Client\VoidsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEVoidsVoidId()**](VoidsApi.md#dELETEVoidsVoidId) | **DELETE** /voids/{voidId} | Delete a void
[**gETVoids()**](VoidsApi.md#gETVoids) | **GET** /voids | List all voids
[**gETVoidsVoidId()**](VoidsApi.md#gETVoidsVoidId) | **GET** /voids/{voidId} | Retrieve a void
[**pATCHVoidsVoidId()**](VoidsApi.md#pATCHVoidsVoidId) | **PATCH** /voids/{voidId} | Update a void
[**pOSTVoids()**](VoidsApi.md#pOSTVoids) | **POST** /voids | Create a void


## `dELETEVoidsVoidId()`

```php
dELETEVoidsVoidId($void_id)
```

Delete a void

Delete a void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_id = 'void_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEVoidsVoidId($void_id);
} catch (Exception $e) {
    echo 'Exception when calling VoidsApi->dELETEVoidsVoidId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_id** | **string**| The resource&#39;s id |

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

## `gETVoids()`

```php
gETVoids()
```

List all voids

List all voids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETVoids();
} catch (Exception $e) {
    echo 'Exception when calling VoidsApi->gETVoids: ', $e->getMessage(), PHP_EOL;
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

## `gETVoidsVoidId()`

```php
gETVoidsVoidId($void_id): \OpenAPI\Client\Model\Void
```

Retrieve a void

Retrieve a void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_id = 'void_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETVoidsVoidId($void_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoidsApi->gETVoidsVoidId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Void**](../Model/Void.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHVoidsVoidId()`

```php
pATCHVoidsVoidId($void_id, $void_update)
```

Update a void

Update a void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_id = 'void_id_example'; // string | The resource's id
$void_update = new \OpenAPI\Client\Model\VoidUpdate(); // \OpenAPI\Client\Model\VoidUpdate

try {
    $apiInstance->pATCHVoidsVoidId($void_id, $void_update);
} catch (Exception $e) {
    echo 'Exception when calling VoidsApi->pATCHVoidsVoidId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_id** | **string**| The resource&#39;s id |
 **void_update** | [**\OpenAPI\Client\Model\VoidUpdate**](../Model/VoidUpdate.md)|  |

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

## `pOSTVoids()`

```php
pOSTVoids($void_create)
```

Create a void

Create a void

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$void_create = new \OpenAPI\Client\Model\VoidCreate(); // \OpenAPI\Client\Model\VoidCreate

try {
    $apiInstance->pOSTVoids($void_create);
} catch (Exception $e) {
    echo 'Exception when calling VoidsApi->pOSTVoids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **void_create** | [**\OpenAPI\Client\Model\VoidCreate**](../Model/VoidCreate.md)|  |

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
