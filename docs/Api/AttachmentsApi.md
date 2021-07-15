# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAttachmentsAttachmentId()**](AttachmentsApi.md#dELETEAttachmentsAttachmentId) | **DELETE** /attachments/{attachmentId} | Delete an attachment
[**gETAttachments()**](AttachmentsApi.md#gETAttachments) | **GET** /attachments | List all attachments
[**gETAttachmentsAttachmentId()**](AttachmentsApi.md#gETAttachmentsAttachmentId) | **GET** /attachments/{attachmentId} | Retrieve an attachment
[**pATCHAttachmentsAttachmentId()**](AttachmentsApi.md#pATCHAttachmentsAttachmentId) | **PATCH** /attachments/{attachmentId} | Update an attachment
[**pOSTAttachments()**](AttachmentsApi.md#pOSTAttachments) | **POST** /attachments | Create an attachment


## `dELETEAttachmentsAttachmentId()`

```php
dELETEAttachmentsAttachmentId($attachment_id)
```

Delete an attachment

Delete an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEAttachmentsAttachmentId($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->dELETEAttachmentsAttachmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The resource&#39;s id |

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

## `gETAttachments()`

```php
gETAttachments()
```

List all attachments

List all attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETAttachments();
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->gETAttachments: ', $e->getMessage(), PHP_EOL;
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

## `gETAttachmentsAttachmentId()`

```php
gETAttachmentsAttachmentId($attachment_id): \OpenAPI\Client\Model\Attachment
```

Retrieve an attachment

Retrieve an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETAttachmentsAttachmentId($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->gETAttachmentsAttachmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHAttachmentsAttachmentId()`

```php
pATCHAttachmentsAttachmentId($attachment_id, $attachment_update)
```

Update an attachment

Update an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | The resource's id
$attachment_update = new \OpenAPI\Client\Model\AttachmentUpdate(); // \OpenAPI\Client\Model\AttachmentUpdate

try {
    $apiInstance->pATCHAttachmentsAttachmentId($attachment_id, $attachment_update);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->pATCHAttachmentsAttachmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The resource&#39;s id |
 **attachment_update** | [**\OpenAPI\Client\Model\AttachmentUpdate**](../Model/AttachmentUpdate.md)|  |

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

## `pOSTAttachments()`

```php
pOSTAttachments($attachment_create)
```

Create an attachment

Create an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_create = new \OpenAPI\Client\Model\AttachmentCreate(); // \OpenAPI\Client\Model\AttachmentCreate

try {
    $apiInstance->pOSTAttachments($attachment_create);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->pOSTAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_create** | [**\OpenAPI\Client\Model\AttachmentCreate**](../Model/AttachmentCreate.md)|  |

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
