# Swagger\Client\GUIDsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST1**](GUIDsApi.md#createUsingPOST1) | **POST** /api/v1/guids | create


# **createUsingPOST1**
> \Swagger\Client\Model\ListOfId4ns createUsingPOST1($create_guid_info, $authorization, $accept_language)

create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$create_guid_info = new \Swagger\Client\Model\CreateGuidRequest(); // \Swagger\Client\Model\CreateGuidRequest | createGUIDInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createUsingPOST1($create_guid_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->createUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_guid_info** | [**\Swagger\Client\Model\CreateGuidRequest**](../Model/CreateGuidRequest.md)| createGUIDInfo |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

