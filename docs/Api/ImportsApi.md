# OpenAPI\Client\ImportsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEImportsImportId()**](ImportsApi.md#dELETEImportsImportId) | **DELETE** /imports/{importId} | Delete an import
[**gETImports()**](ImportsApi.md#gETImports) | **GET** /imports | List all imports
[**gETImportsImportId()**](ImportsApi.md#gETImportsImportId) | **GET** /imports/{importId} | Retrieve an import
[**pATCHImportsImportId()**](ImportsApi.md#pATCHImportsImportId) | **PATCH** /imports/{importId} | Update an import
[**pOSTImports()**](ImportsApi.md#pOSTImports) | **POST** /imports | Create an import


## `dELETEImportsImportId()`

```php
dELETEImportsImportId($import_id)
```

Delete an import

Delete an import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_id = 'import_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEImportsImportId($import_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->dELETEImportsImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_id** | **string**| The resource&#39;s id |

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

## `gETImports()`

```php
gETImports()
```

List all imports

List all imports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETImports();
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->gETImports: ', $e->getMessage(), PHP_EOL;
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

## `gETImportsImportId()`

```php
gETImportsImportId($import_id): \OpenAPI\Client\Model\Import
```

Retrieve an import

Retrieve an import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_id = 'import_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETImportsImportId($import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->gETImportsImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Import**](../Model/Import.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHImportsImportId()`

```php
pATCHImportsImportId($import_id, $import_update)
```

Update an import

Update an import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_id = 'import_id_example'; // string | The resource's id
$import_update = new \OpenAPI\Client\Model\ImportUpdate(); // \OpenAPI\Client\Model\ImportUpdate

try {
    $apiInstance->pATCHImportsImportId($import_id, $import_update);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->pATCHImportsImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_id** | **string**| The resource&#39;s id |
 **import_update** | [**\OpenAPI\Client\Model\ImportUpdate**](../Model/ImportUpdate.md)|  |

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

## `pOSTImports()`

```php
pOSTImports($import_create)
```

Create an import

Create an import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_create = new \OpenAPI\Client\Model\ImportCreate(); // \OpenAPI\Client\Model\ImportCreate

try {
    $apiInstance->pOSTImports($import_create);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->pOSTImports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_create** | [**\OpenAPI\Client\Model\ImportCreate**](../Model/ImportCreate.md)|  |

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
