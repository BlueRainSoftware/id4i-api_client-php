# Swagger\Client\ImagesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resolveImageUsingGET**](ImagesApi.md#resolveImageUsingGET) | **GET** /api/v1/public/image/{imageID} | resolveImage


# **resolveImageUsingGET**
> string resolveImageUsingGET($image_id, $authorization, $accept_language)

resolveImage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ImagesApi();
$image_id = "image_id_example"; // string | imageID
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->resolveImageUsingGET($image_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->resolveImageUsingGET: ', $e->getMessage(), PHP_EOL;
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

