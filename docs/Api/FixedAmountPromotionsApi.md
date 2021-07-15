# OpenAPI\Client\FixedAmountPromotionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEFixedAmountPromotionsFixedAmountPromotionId()**](FixedAmountPromotionsApi.md#dELETEFixedAmountPromotionsFixedAmountPromotionId) | **DELETE** /fixed_amount_promotions/{fixedAmountPromotionId} | Delete a fixed amount promotion
[**gETFixedAmountPromotions()**](FixedAmountPromotionsApi.md#gETFixedAmountPromotions) | **GET** /fixed_amount_promotions | List all fixed amount promotions
[**gETFixedAmountPromotionsFixedAmountPromotionId()**](FixedAmountPromotionsApi.md#gETFixedAmountPromotionsFixedAmountPromotionId) | **GET** /fixed_amount_promotions/{fixedAmountPromotionId} | Retrieve a fixed amount promotion
[**pATCHFixedAmountPromotionsFixedAmountPromotionId()**](FixedAmountPromotionsApi.md#pATCHFixedAmountPromotionsFixedAmountPromotionId) | **PATCH** /fixed_amount_promotions/{fixedAmountPromotionId} | Update a fixed amount promotion
[**pOSTFixedAmountPromotions()**](FixedAmountPromotionsApi.md#pOSTFixedAmountPromotions) | **POST** /fixed_amount_promotions | Create a fixed amount promotion


## `dELETEFixedAmountPromotionsFixedAmountPromotionId()`

```php
dELETEFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id)
```

Delete a fixed amount promotion

Delete a fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FixedAmountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling FixedAmountPromotionsApi->dELETEFixedAmountPromotionsFixedAmountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

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

## `gETFixedAmountPromotions()`

```php
gETFixedAmountPromotions()
```

List all fixed amount promotions

List all fixed amount promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FixedAmountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETFixedAmountPromotions();
} catch (Exception $e) {
    echo 'Exception when calling FixedAmountPromotionsApi->gETFixedAmountPromotions: ', $e->getMessage(), PHP_EOL;
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

## `gETFixedAmountPromotionsFixedAmountPromotionId()`

```php
gETFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id): \OpenAPI\Client\Model\FixedAmountPromotion
```

Retrieve a fixed amount promotion

Retrieve a fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FixedAmountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedAmountPromotionsApi->gETFixedAmountPromotionsFixedAmountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\FixedAmountPromotion**](../Model/FixedAmountPromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHFixedAmountPromotionsFixedAmountPromotionId()`

```php
pATCHFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id, $fixed_amount_promotion_update)
```

Update a fixed amount promotion

Update a fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FixedAmountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_id = 'fixed_amount_promotion_id_example'; // string | The resource's id
$fixed_amount_promotion_update = new \OpenAPI\Client\Model\FixedAmountPromotionUpdate(); // \OpenAPI\Client\Model\FixedAmountPromotionUpdate

try {
    $apiInstance->pATCHFixedAmountPromotionsFixedAmountPromotionId($fixed_amount_promotion_id, $fixed_amount_promotion_update);
} catch (Exception $e) {
    echo 'Exception when calling FixedAmountPromotionsApi->pATCHFixedAmountPromotionsFixedAmountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_id** | **string**| The resource&#39;s id |
 **fixed_amount_promotion_update** | [**\OpenAPI\Client\Model\FixedAmountPromotionUpdate**](../Model/FixedAmountPromotionUpdate.md)|  |

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

## `pOSTFixedAmountPromotions()`

```php
pOSTFixedAmountPromotions($fixed_amount_promotion_create)
```

Create a fixed amount promotion

Create a fixed amount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FixedAmountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fixed_amount_promotion_create = new \OpenAPI\Client\Model\FixedAmountPromotionCreate(); // \OpenAPI\Client\Model\FixedAmountPromotionCreate

try {
    $apiInstance->pOSTFixedAmountPromotions($fixed_amount_promotion_create);
} catch (Exception $e) {
    echo 'Exception when calling FixedAmountPromotionsApi->pOSTFixedAmountPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fixed_amount_promotion_create** | [**\OpenAPI\Client\Model\FixedAmountPromotionCreate**](../Model/FixedAmountPromotionCreate.md)|  |

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
