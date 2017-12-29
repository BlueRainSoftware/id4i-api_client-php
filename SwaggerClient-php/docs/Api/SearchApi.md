# Swagger\Client\SearchApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchByAlias**](SearchApi.md#searchByAlias) | **GET** /api/v1/search/guids | Search for GUIDs by alias


# **searchByAlias**
> \Swagger\Client\Model\PaginatedResponseGuid_ searchByAlias($alias, $alias_type, $authorization, $accept_language, $offset, $limit)

Search for GUIDs by alias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$alias = "alias_example"; // string | The alias to search for
$alias_type = "alias_type_example"; // string | Alias type type to search for
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->searchByAlias($alias, $alias_type, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| The alias to search for |
 **alias_type** | **string**| Alias type type to search for |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseGuid_**](../Model/PaginatedResponseGuid_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

