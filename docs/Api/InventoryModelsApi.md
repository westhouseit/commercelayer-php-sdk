# OpenAPI\Client\InventoryModelsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEInventoryModelsInventoryModelId()**](InventoryModelsApi.md#dELETEInventoryModelsInventoryModelId) | **DELETE** /inventory_models/{inventoryModelId} | Delete an inventory model
[**gETInventoryModels()**](InventoryModelsApi.md#gETInventoryModels) | **GET** /inventory_models | List all inventory models
[**gETInventoryModelsInventoryModelId()**](InventoryModelsApi.md#gETInventoryModelsInventoryModelId) | **GET** /inventory_models/{inventoryModelId} | Retrieve an inventory model
[**pATCHInventoryModelsInventoryModelId()**](InventoryModelsApi.md#pATCHInventoryModelsInventoryModelId) | **PATCH** /inventory_models/{inventoryModelId} | Update an inventory model
[**pOSTInventoryModels()**](InventoryModelsApi.md#pOSTInventoryModels) | **POST** /inventory_models | Create an inventory model


## `dELETEInventoryModelsInventoryModelId()`

```php
dELETEInventoryModelsInventoryModelId($inventory_model_id)
```

Delete an inventory model

Delete an inventory model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_model_id = 'inventory_model_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEInventoryModelsInventoryModelId($inventory_model_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryModelsApi->dELETEInventoryModelsInventoryModelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_model_id** | **string**| The resource&#39;s id |

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

## `gETInventoryModels()`

```php
gETInventoryModels()
```

List all inventory models

List all inventory models

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETInventoryModels();
} catch (Exception $e) {
    echo 'Exception when calling InventoryModelsApi->gETInventoryModels: ', $e->getMessage(), PHP_EOL;
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

## `gETInventoryModelsInventoryModelId()`

```php
gETInventoryModelsInventoryModelId($inventory_model_id): \OpenAPI\Client\Model\InventoryModel
```

Retrieve an inventory model

Retrieve an inventory model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_model_id = 'inventory_model_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETInventoryModelsInventoryModelId($inventory_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryModelsApi->gETInventoryModelsInventoryModelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_model_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\InventoryModel**](../Model/InventoryModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHInventoryModelsInventoryModelId()`

```php
pATCHInventoryModelsInventoryModelId($inventory_model_id, $inventory_model_update)
```

Update an inventory model

Update an inventory model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_model_id = 'inventory_model_id_example'; // string | The resource's id
$inventory_model_update = new \OpenAPI\Client\Model\InventoryModelUpdate(); // \OpenAPI\Client\Model\InventoryModelUpdate

try {
    $apiInstance->pATCHInventoryModelsInventoryModelId($inventory_model_id, $inventory_model_update);
} catch (Exception $e) {
    echo 'Exception when calling InventoryModelsApi->pATCHInventoryModelsInventoryModelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_model_id** | **string**| The resource&#39;s id |
 **inventory_model_update** | [**\OpenAPI\Client\Model\InventoryModelUpdate**](../Model/InventoryModelUpdate.md)|  |

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

## `pOSTInventoryModels()`

```php
pOSTInventoryModels($inventory_model_create)
```

Create an inventory model

Create an inventory model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InventoryModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_model_create = new \OpenAPI\Client\Model\InventoryModelCreate(); // \OpenAPI\Client\Model\InventoryModelCreate

try {
    $apiInstance->pOSTInventoryModels($inventory_model_create);
} catch (Exception $e) {
    echo 'Exception when calling InventoryModelsApi->pOSTInventoryModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_model_create** | [**\OpenAPI\Client\Model\InventoryModelCreate**](../Model/InventoryModelCreate.md)|  |

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
