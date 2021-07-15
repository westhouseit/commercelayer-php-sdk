# OpenAPI\Client\FreeShippingPromotionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEFreeShippingPromotionsFreeShippingPromotionId()**](FreeShippingPromotionsApi.md#dELETEFreeShippingPromotionsFreeShippingPromotionId) | **DELETE** /free_shipping_promotions/{freeShippingPromotionId} | Delete a free shipping promotion
[**gETFreeShippingPromotions()**](FreeShippingPromotionsApi.md#gETFreeShippingPromotions) | **GET** /free_shipping_promotions | List all free shipping promotions
[**gETFreeShippingPromotionsFreeShippingPromotionId()**](FreeShippingPromotionsApi.md#gETFreeShippingPromotionsFreeShippingPromotionId) | **GET** /free_shipping_promotions/{freeShippingPromotionId} | Retrieve a free shipping promotion
[**pATCHFreeShippingPromotionsFreeShippingPromotionId()**](FreeShippingPromotionsApi.md#pATCHFreeShippingPromotionsFreeShippingPromotionId) | **PATCH** /free_shipping_promotions/{freeShippingPromotionId} | Update a free shipping promotion
[**pOSTFreeShippingPromotions()**](FreeShippingPromotionsApi.md#pOSTFreeShippingPromotions) | **POST** /free_shipping_promotions | Create a free shipping promotion


## `dELETEFreeShippingPromotionsFreeShippingPromotionId()`

```php
dELETEFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id)
```

Delete a free shipping promotion

Delete a free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FreeShippingPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling FreeShippingPromotionsApi->dELETEFreeShippingPromotionsFreeShippingPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

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

## `gETFreeShippingPromotions()`

```php
gETFreeShippingPromotions()
```

List all free shipping promotions

List all free shipping promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FreeShippingPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETFreeShippingPromotions();
} catch (Exception $e) {
    echo 'Exception when calling FreeShippingPromotionsApi->gETFreeShippingPromotions: ', $e->getMessage(), PHP_EOL;
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

## `gETFreeShippingPromotionsFreeShippingPromotionId()`

```php
gETFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id): \OpenAPI\Client\Model\FreeShippingPromotion
```

Retrieve a free shipping promotion

Retrieve a free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FreeShippingPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeShippingPromotionsApi->gETFreeShippingPromotionsFreeShippingPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\FreeShippingPromotion**](../Model/FreeShippingPromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHFreeShippingPromotionsFreeShippingPromotionId()`

```php
pATCHFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id, $free_shipping_promotion_update)
```

Update a free shipping promotion

Update a free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FreeShippingPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_id = 'free_shipping_promotion_id_example'; // string | The resource's id
$free_shipping_promotion_update = new \OpenAPI\Client\Model\FreeShippingPromotionUpdate(); // \OpenAPI\Client\Model\FreeShippingPromotionUpdate

try {
    $apiInstance->pATCHFreeShippingPromotionsFreeShippingPromotionId($free_shipping_promotion_id, $free_shipping_promotion_update);
} catch (Exception $e) {
    echo 'Exception when calling FreeShippingPromotionsApi->pATCHFreeShippingPromotionsFreeShippingPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_id** | **string**| The resource&#39;s id |
 **free_shipping_promotion_update** | [**\OpenAPI\Client\Model\FreeShippingPromotionUpdate**](../Model/FreeShippingPromotionUpdate.md)|  |

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

## `pOSTFreeShippingPromotions()`

```php
pOSTFreeShippingPromotions($free_shipping_promotion_create)
```

Create a free shipping promotion

Create a free shipping promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FreeShippingPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_shipping_promotion_create = new \OpenAPI\Client\Model\FreeShippingPromotionCreate(); // \OpenAPI\Client\Model\FreeShippingPromotionCreate

try {
    $apiInstance->pOSTFreeShippingPromotions($free_shipping_promotion_create);
} catch (Exception $e) {
    echo 'Exception when calling FreeShippingPromotionsApi->pOSTFreeShippingPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_shipping_promotion_create** | [**\OpenAPI\Client\Model\FreeShippingPromotionCreate**](../Model/FreeShippingPromotionCreate.md)|  |

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
