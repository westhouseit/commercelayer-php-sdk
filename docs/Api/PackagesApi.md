# OpenAPI\Client\PackagesApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPackagesPackageId()**](PackagesApi.md#dELETEPackagesPackageId) | **DELETE** /packages/{packageId} | Delete a package
[**gETPackages()**](PackagesApi.md#gETPackages) | **GET** /packages | List all packages
[**gETPackagesPackageId()**](PackagesApi.md#gETPackagesPackageId) | **GET** /packages/{packageId} | Retrieve a package
[**pATCHPackagesPackageId()**](PackagesApi.md#pATCHPackagesPackageId) | **PATCH** /packages/{packageId} | Update a package
[**pOSTPackages()**](PackagesApi.md#pOSTPackages) | **POST** /packages | Create a package


## `dELETEPackagesPackageId()`

```php
dELETEPackagesPackageId($package_id)
```

Delete a package

Delete a package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = 'package_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPackagesPackageId($package_id);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->dELETEPackagesPackageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The resource&#39;s id |

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

## `gETPackages()`

```php
gETPackages()
```

List all packages

List all packages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPackages();
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->gETPackages: ', $e->getMessage(), PHP_EOL;
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

## `gETPackagesPackageId()`

```php
gETPackagesPackageId($package_id): \OpenAPI\Client\Model\Package
```

Retrieve a package

Retrieve a package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = 'package_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPackagesPackageId($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->gETPackagesPackageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Package**](../Model/Package.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPackagesPackageId()`

```php
pATCHPackagesPackageId($package_id, $package_update)
```

Update a package

Update a package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = 'package_id_example'; // string | The resource's id
$package_update = new \OpenAPI\Client\Model\PackageUpdate(); // \OpenAPI\Client\Model\PackageUpdate

try {
    $apiInstance->pATCHPackagesPackageId($package_id, $package_update);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->pATCHPackagesPackageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The resource&#39;s id |
 **package_update** | [**\OpenAPI\Client\Model\PackageUpdate**](../Model/PackageUpdate.md)|  |

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

## `pOSTPackages()`

```php
pOSTPackages($package_create)
```

Create a package

Create a package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_create = new \OpenAPI\Client\Model\PackageCreate(); // \OpenAPI\Client\Model\PackageCreate

try {
    $apiInstance->pOSTPackages($package_create);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->pOSTPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_create** | [**\OpenAPI\Client\Model\PackageCreate**](../Model/PackageCreate.md)|  |

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
