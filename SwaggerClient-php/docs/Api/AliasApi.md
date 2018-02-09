# Swagger\Client\AliasApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](AliasApi.md#addGuidAlias) | **POST** /api/v1/guids/{id4n}/alias/{aliasType} | Add alias for GUIDs
[**addGuidAlias1**](AliasApi.md#addGuidAlias1) | **DELETE** /api/v1/guids/{id4n}/alias/{aliasType} | Remove aliases from GUIDs
[**getGuidAliasTypes**](AliasApi.md#getGuidAliasTypes) | **GET** /api/v1/search/guids/aliases/types | List all supported alias types
[**getGuidAliases**](AliasApi.md#getGuidAliases) | **GET** /api/v1/guids/{id4n}/alias | Get all aliases for the given GUID
[**searchByAlias**](AliasApi.md#searchByAlias) | **GET** /api/v1/search/guids | Search for GUIDs by alias


# **addGuidAlias**
> \Swagger\Client\Model\ApiError addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language)

Add alias for GUIDs

Adds or replaces aliases for single GUIDs (alias type item and mapp) or groups of GUIDs (alias types gtin, ean and article)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | The GUID to operate on
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$alias = new \Swagger\Client\Model\GuidAlias(); // \Swagger\Client\Model\GuidAlias | The alias to add or update
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->addGuidAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID to operate on |
 **alias_type** | **string**| Alias type, see the corresponding API model |
 **alias** | [**\Swagger\Client\Model\GuidAlias**](../Model/GuidAlias.md)| The alias to add or update |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiError**](../Model/ApiError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGuidAlias1**
> \Swagger\Client\Model\ApiError addGuidAlias1($id4n, $alias_type, $authorization, $accept_language)

Remove aliases from GUIDs

Remove the alias of the given type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | The GUID to operate on
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->addGuidAlias1($id4n, $alias_type, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->addGuidAlias1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID to operate on |
 **alias_type** | **string**| Alias type, see the corresponding API model |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiError**](../Model/ApiError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidAliasTypes**
> string[] getGuidAliasTypes($authorization, $accept_language)

List all supported alias types

Retrieve this list to find out all alias types to use with alias search and change operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getGuidAliasTypes($authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->getGuidAliasTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidAliases**
> map[string,string] getGuidAliases($id4n, $authorization, $accept_language)

Get all aliases for the given GUID

Looks up the alias for each alias type (group and single GUID) and returns all found ones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | The GUID to operate on
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getGuidAliases($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->getGuidAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID to operate on |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByAlias**
> \Swagger\Client\Model\PaginatedGuidResponse searchByAlias($alias, $alias_type, $authorization, $accept_language, $offset, $limit)

Search for GUIDs by alias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alias = "alias_example"; // string | The alias to search for
$alias_type = "alias_type_example"; // string | Alias type type to search for
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->searchByAlias($alias, $alias_type, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->searchByAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| The alias to search for |
 **alias_type** | **string**| Alias type type to search for |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

