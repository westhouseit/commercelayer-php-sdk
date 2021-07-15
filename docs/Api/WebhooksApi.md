# OpenAPI\Client\WebhooksApi

All URIs are relative to https://core.commercelayer.io/users/sign_in.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEWebhooksWebhookId()**](WebhooksApi.md#dELETEWebhooksWebhookId) | **DELETE** /webhooks/{webhookId} | Delete a webhook
[**gETWebhooks()**](WebhooksApi.md#gETWebhooks) | **GET** /webhooks | List all webhooks
[**gETWebhooksWebhookId()**](WebhooksApi.md#gETWebhooksWebhookId) | **GET** /webhooks/{webhookId} | Retrieve a webhook
[**pATCHWebhooksWebhookId()**](WebhooksApi.md#pATCHWebhooksWebhookId) | **PATCH** /webhooks/{webhookId} | Update a webhook
[**pOSTWebhooks()**](WebhooksApi.md#pOSTWebhooks) | **POST** /webhooks | Create a webhook


## `dELETEWebhooksWebhookId()`

```php
dELETEWebhooksWebhookId($webhook_id)
```

Delete a webhook

Delete a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_id = 'webhook_id_example'; // string | The resource's id

try {
    $apiInstance->dELETEWebhooksWebhookId($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->dELETEWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| The resource&#39;s id |

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

## `gETWebhooks()`

```php
gETWebhooks()
```

List all webhooks

List all webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->gETWebhooks();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->gETWebhooks: ', $e->getMessage(), PHP_EOL;
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

## `gETWebhooksWebhookId()`

```php
gETWebhooksWebhookId($webhook_id): \OpenAPI\Client\Model\Webhook
```

Retrieve a webhook

Retrieve a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_id = 'webhook_id_example'; // string | The resource's id

try {
    $result = $apiInstance->gETWebhooksWebhookId($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->gETWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| The resource&#39;s id |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pATCHWebhooksWebhookId()`

```php
pATCHWebhooksWebhookId($webhook_id, $webhook_update)
```

Update a webhook

Update a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_id = 'webhook_id_example'; // string | The resource's id
$webhook_update = new \OpenAPI\Client\Model\WebhookUpdate(); // \OpenAPI\Client\Model\WebhookUpdate

try {
    $apiInstance->pATCHWebhooksWebhookId($webhook_id, $webhook_update);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->pATCHWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| The resource&#39;s id |
 **webhook_update** | [**\OpenAPI\Client\Model\WebhookUpdate**](../Model/WebhookUpdate.md)|  |

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

## `pOSTWebhooks()`

```php
pOSTWebhooks($webhook_create)
```

Create a webhook

Create a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_create = new \OpenAPI\Client\Model\WebhookCreate(); // \OpenAPI\Client\Model\WebhookCreate

try {
    $apiInstance->pOSTWebhooks($webhook_create);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->pOSTWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_create** | [**\OpenAPI\Client\Model\WebhookCreate**](../Model/WebhookCreate.md)|  |

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
