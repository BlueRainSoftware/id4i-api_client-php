# Bluerain\ID4iClient\MessagingApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enqueueCustomMessage**](MessagingApi.md#enqueueCustomMessage) | **POST** /api/v1/organizations/{organizationId}/messaging/enqueueCustomMessage | Enqueue a custom message
[**getDefaultQueue**](MessagingApi.md#getDefaultQueue) | **GET** /api/v1/organizations/{organizationId}/messaging | 
[**patchDefaultQueue**](MessagingApi.md#patchDefaultQueue) | **PATCH** /api/v1/organizations/{organizationId}/messaging | 


# **enqueueCustomMessage**
> enqueueCustomMessage($organization_id, $request)

Enqueue a custom message

Enqueue a custom organisation message with custom data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The organisation namespace
$request = new \Bluerain\ID4iClient\Model\SendCustomMessage(); // \Bluerain\ID4iClient\Model\SendCustomMessage | request

try {
    $apiInstance->enqueueCustomMessage($organization_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->enqueueCustomMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The organisation namespace |
 **request** | [**\Bluerain\ID4iClient\Model\SendCustomMessage**](../Model/SendCustomMessage.md)| request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultQueue**
> \Bluerain\ID4iClient\Model\QueuePresentation getDefaultQueue($organization_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->getDefaultQueue($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getDefaultQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |

### Return type

[**\Bluerain\ID4iClient\Model\QueuePresentation**](../Model/QueuePresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDefaultQueue**
> patchDefaultQueue($organization_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId
$request = new \Bluerain\ID4iClient\Model\QueueUpdateRequest(); // \Bluerain\ID4iClient\Model\QueueUpdateRequest | request

try {
    $apiInstance->patchDefaultQueue($organization_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->patchDefaultQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |
 **request** | [**\Bluerain\ID4iClient\Model\QueueUpdateRequest**](../Model/QueueUpdateRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

