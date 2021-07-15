# OpenAPI\Client\ApplicationApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEApplicationApplicationId()**](ApplicationApi.md#dELETEApplicationApplicationId) | **DELETE** /application/{applicationId} | Delete the application
[**gETApplication()**](ApplicationApi.md#gETApplication) | **GET** /application | List all applications
[**gETApplicationApplicationId()**](ApplicationApi.md#gETApplicationApplicationId) | **GET** /application/{applicationId} | Retrieve the application
[**pATCHApplicationApplicationId()**](ApplicationApi.md#pATCHApplicationApplicationId) | **PATCH** /application/{applicationId} | Update the application
[**pOSTApplication()**](ApplicationApi.md#pOSTApplication) | **POST** /application | Create the application


## `dELETEApplicationApplicationId()`

```php
dELETEApplicationApplicationId($application_id)
```

Delete the application

Delete the application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEApplicationApplicationId($application_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->dELETEApplicationApplicationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The resource&#39;s id |

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

## `gETApplication()`

```php
gETApplication()
```

List all applications

List all applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETApplication();
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->gETApplication: ', $e->getMessage(), PHP_EOL;
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

## `gETApplicationApplicationId()`

```php
gETApplicationApplicationId($application_id): \OpenAPI\Client\Model\Application
```

Retrieve the application

Retrieve the application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETApplicationApplicationId($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->gETApplicationApplicationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Application**](../Model/Application.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHApplicationApplicationId()`

```php
pATCHApplicationApplicationId($application_id, $application_update)
```

Update the application

Update the application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | The resource's id
$application_update = new \OpenAPI\Client\Model\ApplicationUpdate(); // \OpenAPI\Client\Model\ApplicationUpdate

try {
    $apiInstance->pATCHApplicationApplicationId($application_id, $application_update);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->pATCHApplicationApplicationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The resource&#39;s id |
 **application_update** | [**\OpenAPI\Client\Model\ApplicationUpdate**](../Model/ApplicationUpdate.md)|  |

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

## `pOSTApplication()`

```php
pOSTApplication($application_create)
```

Create the application

Create the application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_create = new \OpenAPI\Client\Model\ApplicationCreate(); // \OpenAPI\Client\Model\ApplicationCreate

try {
    $apiInstance->pOSTApplication($application_create);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->pOSTApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_create** | [**\OpenAPI\Client\Model\ApplicationCreate**](../Model/ApplicationCreate.md)|  |

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
