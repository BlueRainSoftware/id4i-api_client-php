# Swagger\Client\MetaInformationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationInfo**](MetaInformationApi.md#applicationInfo) | **GET** /api/v1/info | Retrieve version information about Id4i.


# **applicationInfo**
> \Swagger\Client\Model\AppInfoPresentation applicationInfo($authorization, $accept_language)

Retrieve version information about Id4i.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetaInformationApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->applicationInfo($authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaInformationApi->applicationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\AppInfoPresentation**](../Model/AppInfoPresentation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

