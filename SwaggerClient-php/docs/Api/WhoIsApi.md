# Swagger\Client\WhoIsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resolveHTMLUsingGET**](WhoIsApi.md#resolveHTMLUsingGET) | **GET** /whois/{id4n} | resolveHTML


# **resolveHTMLUsingGET**
> string resolveHTMLUsingGET($id4n, $authorization, $accept_language)

resolveHTML

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WhoIsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->resolveHTMLUsingGET($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhoIsApi->resolveHTMLUsingGET: ', $e->getMessage(), PHP_EOL;
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

