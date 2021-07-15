# OpenAPI\Client\OrganizationApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEOrganizationOrganizationId()**](OrganizationApi.md#dELETEOrganizationOrganizationId) | **DELETE** /organization/{organizationId} | Delete the organization
[**gETOrganization()**](OrganizationApi.md#gETOrganization) | **GET** /organization | List all organizations
[**gETOrganizationOrganizationId()**](OrganizationApi.md#gETOrganizationOrganizationId) | **GET** /organization/{organizationId} | Retrieve the organization
[**pATCHOrganizationOrganizationId()**](OrganizationApi.md#pATCHOrganizationOrganizationId) | **PATCH** /organization/{organizationId} | Update the organization
[**pOSTOrganization()**](OrganizationApi.md#pOSTOrganization) | **POST** /organization | Create the organization


## `dELETEOrganizationOrganizationId()`

```php
dELETEOrganizationOrganizationId($organization_id)
```

Delete the organization

Delete the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 'organization_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEOrganizationOrganizationId($organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->dELETEOrganizationOrganizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The resource&#39;s id |

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

## `gETOrganization()`

```php
gETOrganization()
```

List all organizations

List all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETOrganization();
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->gETOrganization: ', $e->getMessage(), PHP_EOL;
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

## `gETOrganizationOrganizationId()`

```php
gETOrganizationOrganizationId($organization_id): \OpenAPI\Client\Model\Organization
```

Retrieve the organization

Retrieve the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 'organization_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETOrganizationOrganizationId($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->gETOrganizationOrganizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHOrganizationOrganizationId()`

```php
pATCHOrganizationOrganizationId($organization_id, $organization_update)
```

Update the organization

Update the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 'organization_id_example'; // string | The resource's id
$organization_update = new \OpenAPI\Client\Model\OrganizationUpdate(); // \OpenAPI\Client\Model\OrganizationUpdate

try {
    $apiInstance->pATCHOrganizationOrganizationId($organization_id, $organization_update);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->pATCHOrganizationOrganizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The resource&#39;s id |
 **organization_update** | [**\OpenAPI\Client\Model\OrganizationUpdate**](../Model/OrganizationUpdate.md)|  |

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

## `pOSTOrganization()`

```php
pOSTOrganization($organization_create)
```

Create the organization

Create the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_create = new \OpenAPI\Client\Model\OrganizationCreate(); // \OpenAPI\Client\Model\OrganizationCreate

try {
    $apiInstance->pOSTOrganization($organization_create);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->pOSTOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_create** | [**\OpenAPI\Client\Model\OrganizationCreate**](../Model/OrganizationCreate.md)|  |

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
