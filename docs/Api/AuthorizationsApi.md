# OpenAPI\Client\AuthorizationsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAuthorizationsAuthorizationId()**](AuthorizationsApi.md#dELETEAuthorizationsAuthorizationId) | **DELETE** /authorizations/{authorizationId} | Delete an authorization
[**gETAuthorizations()**](AuthorizationsApi.md#gETAuthorizations) | **GET** /authorizations | List all authorizations
[**gETAuthorizationsAuthorizationId()**](AuthorizationsApi.md#gETAuthorizationsAuthorizationId) | **GET** /authorizations/{authorizationId} | Retrieve an authorization
[**pATCHAuthorizationsAuthorizationId()**](AuthorizationsApi.md#pATCHAuthorizationsAuthorizationId) | **PATCH** /authorizations/{authorizationId} | Update an authorization
[**pOSTAuthorizations()**](AuthorizationsApi.md#pOSTAuthorizations) | **POST** /authorizations | Create an authorization


## `dELETEAuthorizationsAuthorizationId()`

```php
dELETEAuthorizationsAuthorizationId($authorization_id)
```

Delete an authorization

Delete an authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_id = 'authorization_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAuthorizationsAuthorizationId($authorization_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->dELETEAuthorizationsAuthorizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **string**| The resource&#39;s id |

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

## `gETAuthorizations()`

```php
gETAuthorizations()
```

List all authorizations

List all authorizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAuthorizations();
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->gETAuthorizations: ', $e->getMessage(), PHP_EOL;
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

## `gETAuthorizationsAuthorizationId()`

```php
gETAuthorizationsAuthorizationId($authorization_id): \OpenAPI\Client\Model\Authorization
```

Retrieve an authorization

Retrieve an authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_id = 'authorization_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAuthorizationsAuthorizationId($authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->gETAuthorizationsAuthorizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Authorization**](../Model/Authorization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAuthorizationsAuthorizationId()`

```php
pATCHAuthorizationsAuthorizationId($authorization_id, $authorization_update)
```

Update an authorization

Update an authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_id = 'authorization_id_example'; // string | The resource's id
$authorization_update = new \OpenAPI\Client\Model\AuthorizationUpdate(); // \OpenAPI\Client\Model\AuthorizationUpdate

try {
    $apiInstance->pATCHAuthorizationsAuthorizationId($authorization_id, $authorization_update);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->pATCHAuthorizationsAuthorizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **string**| The resource&#39;s id |
 **authorization_update** | [**\OpenAPI\Client\Model\AuthorizationUpdate**](../Model/AuthorizationUpdate.md)|  |

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

## `pOSTAuthorizations()`

```php
pOSTAuthorizations($authorization_create)
```

Create an authorization

Create an authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_create = new \OpenAPI\Client\Model\AuthorizationCreate(); // \OpenAPI\Client\Model\AuthorizationCreate

try {
    $apiInstance->pOSTAuthorizations($authorization_create);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->pOSTAuthorizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_create** | [**\OpenAPI\Client\Model\AuthorizationCreate**](../Model/AuthorizationCreate.md)|  |

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
