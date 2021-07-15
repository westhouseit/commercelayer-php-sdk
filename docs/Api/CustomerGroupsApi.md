# OpenAPI\Client\CustomerGroupsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECustomerGroupsCustomerGroupId()**](CustomerGroupsApi.md#dELETECustomerGroupsCustomerGroupId) | **DELETE** /customer_groups/{customerGroupId} | Delete a customer group
[**gETCustomerGroups()**](CustomerGroupsApi.md#gETCustomerGroups) | **GET** /customer_groups | List all customer groups
[**gETCustomerGroupsCustomerGroupId()**](CustomerGroupsApi.md#gETCustomerGroupsCustomerGroupId) | **GET** /customer_groups/{customerGroupId} | Retrieve a customer group
[**pATCHCustomerGroupsCustomerGroupId()**](CustomerGroupsApi.md#pATCHCustomerGroupsCustomerGroupId) | **PATCH** /customer_groups/{customerGroupId} | Update a customer group
[**pOSTCustomerGroups()**](CustomerGroupsApi.md#pOSTCustomerGroups) | **POST** /customer_groups | Create a customer group


## `dELETECustomerGroupsCustomerGroupId()`

```php
dELETECustomerGroupsCustomerGroupId($customer_group_id)
```

Delete a customer group

Delete a customer group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_group_id = 'customer_group_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECustomerGroupsCustomerGroupId($customer_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->dELETECustomerGroupsCustomerGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_id** | **string**| The resource&#39;s id |

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

## `gETCustomerGroups()`

```php
gETCustomerGroups()
```

List all customer groups

List all customer groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCustomerGroups();
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->gETCustomerGroups: ', $e->getMessage(), PHP_EOL;
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

## `gETCustomerGroupsCustomerGroupId()`

```php
gETCustomerGroupsCustomerGroupId($customer_group_id): \OpenAPI\Client\Model\CustomerGroup
```

Retrieve a customer group

Retrieve a customer group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_group_id = 'customer_group_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCustomerGroupsCustomerGroupId($customer_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->gETCustomerGroupsCustomerGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCustomerGroupsCustomerGroupId()`

```php
pATCHCustomerGroupsCustomerGroupId($customer_group_id, $customer_group_update)
```

Update a customer group

Update a customer group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_group_id = 'customer_group_id_example'; // string | The resource's id
$customer_group_update = new \OpenAPI\Client\Model\CustomerGroupUpdate(); // \OpenAPI\Client\Model\CustomerGroupUpdate

try {
    $apiInstance->pATCHCustomerGroupsCustomerGroupId($customer_group_id, $customer_group_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->pATCHCustomerGroupsCustomerGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_id** | **string**| The resource&#39;s id |
 **customer_group_update** | [**\OpenAPI\Client\Model\CustomerGroupUpdate**](../Model/CustomerGroupUpdate.md)|  |

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

## `pOSTCustomerGroups()`

```php
pOSTCustomerGroups($customer_group_create)
```

Create a customer group

Create a customer group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_group_create = new \OpenAPI\Client\Model\CustomerGroupCreate(); // \OpenAPI\Client\Model\CustomerGroupCreate

try {
    $apiInstance->pOSTCustomerGroups($customer_group_create);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->pOSTCustomerGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_group_create** | [**\OpenAPI\Client\Model\CustomerGroupCreate**](../Model/CustomerGroupCreate.md)|  |

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
