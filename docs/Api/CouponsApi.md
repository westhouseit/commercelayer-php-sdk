# OpenAPI\Client\CouponsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETECouponsCouponId()**](CouponsApi.md#dELETECouponsCouponId) | **DELETE** /coupons/{couponId} | Delete a coupon
[**gETCoupons()**](CouponsApi.md#gETCoupons) | **GET** /coupons | List all coupons
[**gETCouponsCouponId()**](CouponsApi.md#gETCouponsCouponId) | **GET** /coupons/{couponId} | Retrieve a coupon
[**pATCHCouponsCouponId()**](CouponsApi.md#pATCHCouponsCouponId) | **PATCH** /coupons/{couponId} | Update a coupon
[**pOSTCoupons()**](CouponsApi.md#pOSTCoupons) | **POST** /coupons | Create a coupon


## `dELETECouponsCouponId()`

```php
dELETECouponsCouponId($coupon_id)
```

Delete a coupon

Delete a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_id = 'coupon_id_example'; // string | The resource's id

try {
    $apiInstance->dELETECouponsCouponId($coupon_id);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->dELETECouponsCouponId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_id** | **string**| The resource&#39;s id |

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

## `gETCoupons()`

```php
gETCoupons()
```

List all coupons

List all coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETCoupons();
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->gETCoupons: ', $e->getMessage(), PHP_EOL;
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

## `gETCouponsCouponId()`

```php
gETCouponsCouponId($coupon_id): \OpenAPI\Client\Model\Coupon
```

Retrieve a coupon

Retrieve a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_id = 'coupon_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETCouponsCouponId($coupon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->gETCouponsCouponId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHCouponsCouponId()`

```php
pATCHCouponsCouponId($coupon_id, $coupon_update)
```

Update a coupon

Update a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_id = 'coupon_id_example'; // string | The resource's id
$coupon_update = new \OpenAPI\Client\Model\CouponUpdate(); // \OpenAPI\Client\Model\CouponUpdate

try {
    $apiInstance->pATCHCouponsCouponId($coupon_id, $coupon_update);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->pATCHCouponsCouponId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_id** | **string**| The resource&#39;s id |
 **coupon_update** | [**\OpenAPI\Client\Model\CouponUpdate**](../Model/CouponUpdate.md)|  |

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

## `pOSTCoupons()`

```php
pOSTCoupons($coupon_create)
```

Create a coupon

Create a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coupon_create = new \OpenAPI\Client\Model\CouponCreate(); // \OpenAPI\Client\Model\CouponCreate

try {
    $apiInstance->pOSTCoupons($coupon_create);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->pOSTCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_create** | [**\OpenAPI\Client\Model\CouponCreate**](../Model/CouponCreate.md)|  |

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
