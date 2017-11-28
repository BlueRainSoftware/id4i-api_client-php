# Swagger\Client\ApikeyprivilegecontrollerApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUsingGET1**](ApikeyprivilegecontrollerApi.md#listUsingGET1) | **GET** /api/v1/apikeys/privileges | list


# **listUsingGET1**
> \Swagger\Client\Model\ApiKeyPrivilegeResponse listUsingGET1($authorization, $accept_language, $id4n_concerning, $offset, $limit)

list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeyprivilegecontrollerApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$id4n_concerning = true; // bool | id4nConcerning
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->listUsingGET1($authorization, $accept_language, $id4n_concerning, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeyprivilegecontrollerApi->listUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **id4n_concerning** | **bool**| id4nConcerning | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPrivilegeResponse**](../Model/ApiKeyPrivilegeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

