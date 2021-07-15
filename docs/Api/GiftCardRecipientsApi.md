# OpenAPI\Client\GiftCardRecipientsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEGiftCardRecipientsGiftCardRecipientId()**](GiftCardRecipientsApi.md#dELETEGiftCardRecipientsGiftCardRecipientId) | **DELETE** /gift_card_recipients/{giftCardRecipientId} | Delete a gift card recipient
[**gETGiftCardRecipients()**](GiftCardRecipientsApi.md#gETGiftCardRecipients) | **GET** /gift_card_recipients | List all gift card recipients
[**gETGiftCardRecipientsGiftCardRecipientId()**](GiftCardRecipientsApi.md#gETGiftCardRecipientsGiftCardRecipientId) | **GET** /gift_card_recipients/{giftCardRecipientId} | Retrieve a gift card recipient
[**pATCHGiftCardRecipientsGiftCardRecipientId()**](GiftCardRecipientsApi.md#pATCHGiftCardRecipientsGiftCardRecipientId) | **PATCH** /gift_card_recipients/{giftCardRecipientId} | Update a gift card recipient
[**pOSTGiftCardRecipients()**](GiftCardRecipientsApi.md#pOSTGiftCardRecipients) | **POST** /gift_card_recipients | Create a gift card recipient


## `dELETEGiftCardRecipientsGiftCardRecipientId()`

```php
dELETEGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id)
```

Delete a gift card recipient

Delete a gift card recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_recipient_id = 'gift_card_recipient_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardRecipientsApi->dELETEGiftCardRecipientsGiftCardRecipientId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_recipient_id** | **string**| The resource&#39;s id |

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

## `gETGiftCardRecipients()`

```php
gETGiftCardRecipients()
```

List all gift card recipients

List all gift card recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETGiftCardRecipients();
} catch (Exception $e) {
    echo 'Exception when calling GiftCardRecipientsApi->gETGiftCardRecipients: ', $e->getMessage(), PHP_EOL;
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

## `gETGiftCardRecipientsGiftCardRecipientId()`

```php
gETGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id): \OpenAPI\Client\Model\GiftCardRecipient
```

Retrieve a gift card recipient

Retrieve a gift card recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_recipient_id = 'gift_card_recipient_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardRecipientsApi->gETGiftCardRecipientsGiftCardRecipientId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_recipient_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\GiftCardRecipient**](../Model/GiftCardRecipient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHGiftCardRecipientsGiftCardRecipientId()`

```php
pATCHGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id, $gift_card_recipient_update)
```

Update a gift card recipient

Update a gift card recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_recipient_id = 'gift_card_recipient_id_example'; // string | The resource's id
$gift_card_recipient_update = new \OpenAPI\Client\Model\GiftCardRecipientUpdate(); // \OpenAPI\Client\Model\GiftCardRecipientUpdate

try {
    $apiInstance->pATCHGiftCardRecipientsGiftCardRecipientId($gift_card_recipient_id, $gift_card_recipient_update);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardRecipientsApi->pATCHGiftCardRecipientsGiftCardRecipientId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_recipient_id** | **string**| The resource&#39;s id |
 **gift_card_recipient_update** | [**\OpenAPI\Client\Model\GiftCardRecipientUpdate**](../Model/GiftCardRecipientUpdate.md)|  |

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

## `pOSTGiftCardRecipients()`

```php
pOSTGiftCardRecipients($gift_card_recipient_create)
```

Create a gift card recipient

Create a gift card recipient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GiftCardRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gift_card_recipient_create = new \OpenAPI\Client\Model\GiftCardRecipientCreate(); // \OpenAPI\Client\Model\GiftCardRecipientCreate

try {
    $apiInstance->pOSTGiftCardRecipients($gift_card_recipient_create);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardRecipientsApi->pOSTGiftCardRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_recipient_create** | [**\OpenAPI\Client\Model\GiftCardRecipientCreate**](../Model/GiftCardRecipientCreate.md)|  |

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
