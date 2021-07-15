# OpenAPI\Client\ExternalPromotionsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEExternalPromotionsExternalPromotionId()**](ExternalPromotionsApi.md#dELETEExternalPromotionsExternalPromotionId) | **DELETE** /external_promotions/{externalPromotionId} | Delete an external promotion
[**gETExternalPromotions()**](ExternalPromotionsApi.md#gETExternalPromotions) | **GET** /external_promotions | List all external promotions
[**gETExternalPromotionsExternalPromotionId()**](ExternalPromotionsApi.md#gETExternalPromotionsExternalPromotionId) | **GET** /external_promotions/{externalPromotionId} | Retrieve an external promotion
[**pATCHExternalPromotionsExternalPromotionId()**](ExternalPromotionsApi.md#pATCHExternalPromotionsExternalPromotionId) | **PATCH** /external_promotions/{externalPromotionId} | Update an external promotion
[**pOSTExternalPromotions()**](ExternalPromotionsApi.md#pOSTExternalPromotions) | **POST** /external_promotions | Create an external promotion


## `dELETEExternalPromotionsExternalPromotionId()`

```php
dELETEExternalPromotionsExternalPromotionId($external_promotion_id)
```

Delete an external promotion

Delete an external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEExternalPromotionsExternalPromotionId($external_promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPromotionsApi->dELETEExternalPromotionsExternalPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

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

## `gETExternalPromotions()`

```php
gETExternalPromotions()
```

List all external promotions

List all external promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETExternalPromotions();
} catch (Exception $e) {
    echo 'Exception when calling ExternalPromotionsApi->gETExternalPromotions: ', $e->getMessage(), PHP_EOL;
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

## `gETExternalPromotionsExternalPromotionId()`

```php
gETExternalPromotionsExternalPromotionId($external_promotion_id): \OpenAPI\Client\Model\ExternalPromotion
```

Retrieve an external promotion

Retrieve an external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETExternalPromotionsExternalPromotionId($external_promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPromotionsApi->gETExternalPromotionsExternalPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\ExternalPromotion**](../Model/ExternalPromotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHExternalPromotionsExternalPromotionId()`

```php
pATCHExternalPromotionsExternalPromotionId($external_promotion_id, $external_promotion_update)
```

Update an external promotion

Update an external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_id = 'external_promotion_id_example'; // string | The resource's id
$external_promotion_update = new \OpenAPI\Client\Model\ExternalPromotionUpdate(); // \OpenAPI\Client\Model\ExternalPromotionUpdate

try {
    $apiInstance->pATCHExternalPromotionsExternalPromotionId($external_promotion_id, $external_promotion_update);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPromotionsApi->pATCHExternalPromotionsExternalPromotionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_id** | **string**| The resource&#39;s id |
 **external_promotion_update** | [**\OpenAPI\Client\Model\ExternalPromotionUpdate**](../Model/ExternalPromotionUpdate.md)|  |

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

## `pOSTExternalPromotions()`

```php
pOSTExternalPromotions($external_promotion_create)
```

Create an external promotion

Create an external promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalPromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_promotion_create = new \OpenAPI\Client\Model\ExternalPromotionCreate(); // \OpenAPI\Client\Model\ExternalPromotionCreate

try {
    $apiInstance->pOSTExternalPromotions($external_promotion_create);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPromotionsApi->pOSTExternalPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_promotion_create** | [**\OpenAPI\Client\Model\ExternalPromotionCreate**](../Model/ExternalPromotionCreate.md)|  |

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
