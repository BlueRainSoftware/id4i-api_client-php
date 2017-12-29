# Swagger\Client\AliasApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](AliasApi.md#addGuidAlias) | **POST** /api/v1/guids/{id4n}/alias/{aliasType} | Add alias for GUIDs
[**addGuidAlias1**](AliasApi.md#addGuidAlias1) | **DELETE** /api/v1/guids/{id4n}/alias/{aliasType} | Remove aliases from GUIDs


# **addGuidAlias**
> \Swagger\Client\Model\ApiError addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language)

Add alias for GUIDs

Adds or replaces aliases for single GUIDs (alias type item and mapp) or groups of GUIDs (alias types gtin, ean and article)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AliasApi();
$id4n = "id4n_example"; // string | The GUID for which to add the alias
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$alias = new \Swagger\Client\Model\GuidAlias(); // \Swagger\Client\Model\GuidAlias | The alias to add or update
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->addGuidAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID for which to add the alias |
 **alias_type** | **string**| Alias type, see the corresponding API model |
 **alias** | [**\Swagger\Client\Model\GuidAlias**](../Model/GuidAlias.md)| The alias to add or update |
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

# **addGuidAlias1**
> \Swagger\Client\Model\ApiError addGuidAlias1($id4n, $alias_type, $authorization, $accept_language)

Remove aliases from GUIDs

Remove the alias of the given type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AliasApi();
$id4n = "id4n_example"; // string | The GUID for which to add the alias
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addGuidAlias1($id4n, $alias_type, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->addGuidAlias1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID for which to add the alias |
 **alias_type** | **string**| Alias type, see the corresponding API model |
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

