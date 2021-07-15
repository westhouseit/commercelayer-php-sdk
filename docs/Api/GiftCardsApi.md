# OpenAPI\Client\GiftCardsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEGiftCardsGiftCardId()**](GiftCardsApi.md#dELETEGiftCardsGiftCardId) | **DELETE** /gift_cards/{giftCardId} | Delete a gift card
[**gETGiftCards()**](GiftCardsApi.md#gETGiftCards) | **GET** /gift_cards | List all gift cards
[**gETGiftCardsGiftCardId()**](GiftCardsApi.md#gETGiftCardsGiftCardId) | **GET** /gift_cards/{giftCardId} | Retrieve a gift card
[**pATCHGiftCardsGiftCardId()**](GiftCardsApi.md#pATCHGiftCardsGiftCardId) | **PATCH** /gift_cards/{giftCardId} | Update a gift card
[**pOSTGiftCards()**](GiftCardsApi.md#pOSTGiftCards) | **POST** /gift_cards | Create a gift card


## `dELETEGiftCardsGiftCardId()`

```php
dELETEGiftCardsGiftCardId($gift_card_id)
```

Delete a gift card

Delete a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_id = 'gift_card_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEGiftCardsGiftCardId($gift_card_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->dELETEGiftCardsGiftCardId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The resource&#39;s id |

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

## `gETGiftCards()`

```php
gETGiftCards()
```

List all gift cards

List all gift cards

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETGiftCards();
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->gETGiftCards: ', $e->getMessage(), PHP_EOL;
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

## `gETGiftCardsGiftCardId()`

```php
gETGiftCardsGiftCardId($gift_card_id): \OpenAPI\Client\Model\GiftCard
```

Retrieve a gift card

Retrieve a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_id = 'gift_card_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETGiftCardsGiftCardId($gift_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->gETGiftCardsGiftCardId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\GiftCard**](../Model/GiftCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHGiftCardsGiftCardId()`

```php
pATCHGiftCardsGiftCardId($gift_card_id, $gift_card_update)
```

Update a gift card

Update a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_id = 'gift_card_id_example'; // string | The resource's id
$gift_card_update = new \OpenAPI\Client\Model\GiftCardUpdate(); // \OpenAPI\Client\Model\GiftCardUpdate

try {
    $apiInstance->pATCHGiftCardsGiftCardId($gift_card_id, $gift_card_update);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->pATCHGiftCardsGiftCardId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The resource&#39;s id |
 **gift_card_update** | [**\OpenAPI\Client\Model\GiftCardUpdate**](../Model/GiftCardUpdate.md)|  |

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

## `pOSTGiftCards()`

```php
pOSTGiftCards($gift_card_create)
```

Create a gift card

Create a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_create = new \OpenAPI\Client\Model\GiftCardCreate(); // \OpenAPI\Client\Model\GiftCardCreate

try {
    $apiInstance->pOSTGiftCards($gift_card_create);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->pOSTGiftCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_create** | [**\OpenAPI\Client\Model\GiftCardCreate**](../Model/GiftCardCreate.md)|  |

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
