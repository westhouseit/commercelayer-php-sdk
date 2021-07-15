# OpenAPI\Client\PercentageDiscountPromotionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId()**](PercentageDiscountPromotionsApi.md#dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId) | **DELETE** /percentage_discount_promotions/{percentageDiscountPromotionId} | Delete a percentage discount promotion
[**gETPercentageDiscountPromotions()**](PercentageDiscountPromotionsApi.md#gETPercentageDiscountPromotions) | **GET** /percentage_discount_promotions | List all percentage discount promotions
[**gETPercentageDiscountPromotionsPercentageDiscountPromotionId()**](PercentageDiscountPromotionsApi.md#gETPercentageDiscountPromotionsPercentageDiscountPromotionId) | **GET** /percentage_discount_promotions/{percentageDiscountPromotionId} | Retrieve a percentage discount promotion
[**pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId()**](PercentageDiscountPromotionsApi.md#pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId) | **PATCH** /percentage_discount_promotions/{percentageDiscountPromotionId} | Update a percentage discount promotion
[**pOSTPercentageDiscountPromotions()**](PercentageDiscountPromotionsApi.md#pOSTPercentageDiscountPromotions) | **POST** /percentage_discount_promotions | Create a percentage discount promotion


## `dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId()`

```php
dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id)
```

Delete a percentage discount promotion

Delete a percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PercentageDiscountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PercentageDiscountPromotionsApi->dELETEPercentageDiscountPromotionsPercentageDiscountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

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

## `gETPercentageDiscountPromotions()`

```php
gETPercentageDiscountPromotions()
```

List all percentage discount promotions

List all percentage discount promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PercentageDiscountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETPercentageDiscountPromotions();
} catch (Exception $e) {
    echo 'Exception when calling PercentageDiscountPromotionsApi->gETPercentageDiscountPromotions: ', $e->getMessage(), PHP_EOL;
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

## `gETPercentageDiscountPromotionsPercentageDiscountPromotionId()`

```php
gETPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id): \OpenAPI\Client\Model\PercentageDiscountPromotion
```

Retrieve a percentage discount promotion

Retrieve a percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PercentageDiscountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PercentageDiscountPromotionsApi->gETPercentageDiscountPromotionsPercentageDiscountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\PercentageDiscountPromotion**](../Model/PercentageDiscountPromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId()`

```php
pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id, $percentage_discount_promotion_update)
```

Update a percentage discount promotion

Update a percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PercentageDiscountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_id = 'percentage_discount_promotion_id_example'; // string | The resource's id
$percentage_discount_promotion_update = new \OpenAPI\Client\Model\PercentageDiscountPromotionUpdate(); // \OpenAPI\Client\Model\PercentageDiscountPromotionUpdate

try {
    $apiInstance->pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId($percentage_discount_promotion_id, $percentage_discount_promotion_update);
} catch (Exception $e) {
    echo 'Exception when calling PercentageDiscountPromotionsApi->pATCHPercentageDiscountPromotionsPercentageDiscountPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_id** | **string**| The resource&#39;s id |
 **percentage_discount_promotion_update** | [**\OpenAPI\Client\Model\PercentageDiscountPromotionUpdate**](../Model/PercentageDiscountPromotionUpdate.md)|  |

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

## `pOSTPercentageDiscountPromotions()`

```php
pOSTPercentageDiscountPromotions($percentage_discount_promotion_create)
```

Create a percentage discount promotion

Create a percentage discount promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PercentageDiscountPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$percentage_discount_promotion_create = new \OpenAPI\Client\Model\PercentageDiscountPromotionCreate(); // \OpenAPI\Client\Model\PercentageDiscountPromotionCreate

try {
    $apiInstance->pOSTPercentageDiscountPromotions($percentage_discount_promotion_create);
} catch (Exception $e) {
    echo 'Exception when calling PercentageDiscountPromotionsApi->pOSTPercentageDiscountPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **percentage_discount_promotion_create** | [**\OpenAPI\Client\Model\PercentageDiscountPromotionCreate**](../Model/PercentageDiscountPromotionCreate.md)|  |

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
