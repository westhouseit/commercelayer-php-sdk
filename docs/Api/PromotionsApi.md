# OpenAPI\Client\PromotionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPromotionsPromotionId()**](PromotionsApi.md#dELETEPromotionsPromotionId) | **DELETE** /promotions/{promotionId} | Delete a promotion
[**gETPromotions()**](PromotionsApi.md#gETPromotions) | **GET** /promotions | List all promotions
[**gETPromotionsPromotionId()**](PromotionsApi.md#gETPromotionsPromotionId) | **GET** /promotions/{promotionId} | Retrieve a promotion
[**pATCHPromotionsPromotionId()**](PromotionsApi.md#pATCHPromotionsPromotionId) | **PATCH** /promotions/{promotionId} | Update a promotion
[**pOSTPromotions()**](PromotionsApi.md#pOSTPromotions) | **POST** /promotions | Create a promotion


## `dELETEPromotionsPromotionId()`

```php
dELETEPromotionsPromotionId($promotion_id)
```

Delete a promotion

Delete a promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPromotionsPromotionId($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->dELETEPromotionsPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

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

## `gETPromotions()`

```php
gETPromotions()
```

List all promotions

List all promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPromotions();
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->gETPromotions: ', $e->getMessage(), PHP_EOL;
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

## `gETPromotionsPromotionId()`

```php
gETPromotionsPromotionId($promotion_id): \OpenAPI\Client\Model\Promotion
```

Retrieve a promotion

Retrieve a promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPromotionsPromotionId($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->gETPromotionsPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Promotion**](../Model/Promotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPromotionsPromotionId()`

```php
pATCHPromotionsPromotionId($promotion_id, $promotion_update)
```

Update a promotion

Update a promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The resource's id
$promotion_update = new \OpenAPI\Client\Model\PromotionUpdate(); // \OpenAPI\Client\Model\PromotionUpdate

try {
    $apiInstance->pATCHPromotionsPromotionId($promotion_id, $promotion_update);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->pATCHPromotionsPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The resource&#39;s id |
 **promotion_update** | [**\OpenAPI\Client\Model\PromotionUpdate**](../Model/PromotionUpdate.md)|  |

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

## `pOSTPromotions()`

```php
pOSTPromotions($promotion_create)
```

Create a promotion

Create a promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_create = new \OpenAPI\Client\Model\PromotionCreate(); // \OpenAPI\Client\Model\PromotionCreate

try {
    $apiInstance->pOSTPromotions($promotion_create);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->pOSTPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_create** | [**\OpenAPI\Client\Model\PromotionCreate**](../Model/PromotionCreate.md)|  |

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
