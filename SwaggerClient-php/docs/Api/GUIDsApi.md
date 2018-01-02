# Swagger\Client\GUIDsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](GUIDsApi.md#addGuidAlias) | **POST** /api/v1/guids/{id4n}/alias/{aliasType} | Add alias for GUIDs
[**addGuidAlias1**](GUIDsApi.md#addGuidAlias1) | **DELETE** /api/v1/guids/{id4n}/alias/{aliasType} | Remove aliases from GUIDs
[**createGuid**](GUIDsApi.md#createGuid) | **POST** /api/v1/guids | Create GUID(s)
[**getGuid**](GUIDsApi.md#getGuid) | **GET** /api/v1/guids/{id4n} | Retrieve GUID information
[**getGuidsWithoutCollection**](GUIDsApi.md#getGuidsWithoutCollection) | **GET** /api/v1/guids/withoutCollection | Retrieve GUIDs not in any collection
[**updateGuid**](GUIDsApi.md#updateGuid) | **PUT** /api/v1/guids/{id4n} | Change GUID information.


# **addGuidAlias**
> \Swagger\Client\Model\ApiError addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language)

Add alias for GUIDs

Adds or replaces aliases for single GUIDs (alias type item and mapp) or groups of GUIDs (alias types gtin, ean and article)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID for which to add the alias
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$alias = new \Swagger\Client\Model\GuidAlias(); // \Swagger\Client\Model\GuidAlias | The alias to add or update
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addGuidAlias($id4n, $alias_type, $alias, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->addGuidAlias: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID for which to add the alias
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addGuidAlias1($id4n, $alias_type, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->addGuidAlias1: ', $e->getMessage(), PHP_EOL;
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

# **createGuid**
> \Swagger\Client\Model\ListOfId4ns createGuid($create_guid_info, $authorization, $accept_language)

Create GUID(s)

Creating one or more GUIDs with a specified length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$create_guid_info = new \Swagger\Client\Model\CreateGuidRequest(); // \Swagger\Client\Model\CreateGuidRequest | createGUIDInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createGuid($create_guid_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->createGuid: ', $e->getMessage(), PHP_EOL;
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

# **getGuid**
> \Swagger\Client\Model\Guid getGuid($id4n, $authorization, $accept_language)

Retrieve GUID information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID number
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getGuid($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->getGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Guid**](../Model/Guid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidsWithoutCollection**
> \Swagger\Client\Model\PaginatedResponseGuid_ getGuidsWithoutCollection($organization_id, $authorization, $accept_language, $offset, $limit)

Retrieve GUIDs not in any collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$organization_id = 789; // int | Organization to search GUIDs for (required).
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->getGuidsWithoutCollection($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->getGuidsWithoutCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization to search GUIDs for (required). |
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

# **updateGuid**
> object updateGuid($id4n, $request, $authorization, $accept_language)

Change GUID information.

Allows ownership transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID number
$request = new \Swagger\Client\Model\Guid(); // \Swagger\Client\Model\Guid | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateGuid($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->updateGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **request** | [**\Swagger\Client\Model\Guid**](../Model/Guid.md)| request |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

