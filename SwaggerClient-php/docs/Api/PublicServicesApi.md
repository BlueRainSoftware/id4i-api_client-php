# Swagger\Client\PublicServicesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forwardUsingGET**](PublicServicesApi.md#forwardUsingGET) | **GET** /go/{guid} | forward
[**resolveHTMLUsingGET**](PublicServicesApi.md#resolveHTMLUsingGET) | **GET** /whois/{id4n} | resolveHTML
[**resolveImageUsingGET**](PublicServicesApi.md#resolveImageUsingGET) | **GET** /api/v1/public/image/{imageID} | resolveImage


# **forwardUsingGET**
> \Swagger\Client\Model\ResponseEntity forwardUsingGET($guid, $authorization, $accept_language)

forward

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->forwardUsingGET($guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->forwardUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveHTMLUsingGET**
> string resolveHTMLUsingGET($id4n, $authorization, $accept_language)

resolveHTML

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->resolveHTMLUsingGET($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->resolveHTMLUsingGET: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, text/html, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveImageUsingGET**
> string resolveImageUsingGET($image_id, $authorization, $accept_language)

resolveImage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PublicServicesApi();
$image_id = "image_id_example"; // string | imageID
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
 **image_id** | **string**| imageID |
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

