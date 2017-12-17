# Swagger\Client\PublicServicesApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**go**](PublicServicesApi.md#go) | **GET** /go/{guid} | Forward
[**resolveImageUsingGET**](PublicServicesApi.md#resolveImageUsingGET) | **GET** /api/v1/public/image/{imageID} | Resolve image
[**resolveWhoIsEntry**](PublicServicesApi.md#resolveWhoIsEntry) | **GET** /whois/{id4n} | Resolve owner of id4n


# **go**
> \Swagger\Client\Model\ApiError go($guid, $authorization, $accept_language)

Forward

Forwarding to the designated route defined in the routing,

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->go($guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->go: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| guid |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiError**](../Model/ApiError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveImageUsingGET**
> string resolveImageUsingGET($image_id, $authorization, $accept_language)

Resolve image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$image_id = "image_id_example"; // string | The id of the image to be resolved.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->resolveImageUsingGET($image_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->resolveImageUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **string**| The id of the image to be resolved. |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveWhoIsEntry**
> \Swagger\Client\Model\WhoIsResponse resolveWhoIsEntry($id4n, $authorization, $accept_language)

Resolve owner of id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->resolveWhoIsEntry($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->resolveWhoIsEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\WhoIsResponse**](../Model/WhoIsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

