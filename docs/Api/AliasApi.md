# Bluerain\ID4iClient\AliasApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](AliasApi.md#addGuidAlias) | **POST** /api/v1/id4ns/{id4n}/alias/{aliasType} | Add alias for GUID or Collection
[**getGuidAliasTypes**](AliasApi.md#getGuidAliasTypes) | **GET** /api/v1/search/guids/aliases/types | List all supported alias types
[**getGuidAliases**](AliasApi.md#getGuidAliases) | **GET** /api/v1/id4ns/{id4n}/alias | Get all aliases for the given GUID or Collection.
[**removeGuidAlias**](AliasApi.md#removeGuidAlias) | **DELETE** /api/v1/id4ns/{id4n}/alias/{aliasType} | Remove aliases from GUID or Collection
[**searchByAlias**](AliasApi.md#searchByAlias) | **GET** /api/v1/search/guids | Search for GUIDs by alias


# **addGuidAlias**
> addGuidAlias($id4n, $alias_type, $alias)

Add alias for GUID or Collection

Adds or replaces aliases for single ID4ns (alias type item and mapp) or groups of ID4ns (alias types gtin, ean and article)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID or Collection to operate on
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$alias = new \Bluerain\ID4iClient\Model\GuidAlias(); // \Bluerain\ID4iClient\Model\GuidAlias | The alias to add or update

try {
    $apiInstance->addGuidAlias($id4n, $alias_type, $alias);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->addGuidAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID or Collection to operate on |
 **alias_type** | **string**| Alias type, see the corresponding API model |
 **alias** | [**\Bluerain\ID4iClient\Model\GuidAlias**](../Model/GuidAlias.md)| The alias to add or update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidAliasTypes**
> string[] getGuidAliasTypes()

List all supported alias types

Retrieve this list to find out all alias types to use with alias search and change operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGuidAliasTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->getGuidAliasTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidAliases**
> map[string,string] getGuidAliases($id4n)

Get all aliases for the given GUID or Collection.

Looks up the alias for each alias type (group and single) and returns a map of all aliases found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID or Collection to operate on

try {
    $result = $apiInstance->getGuidAliases($id4n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->getGuidAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID or Collection to operate on |

### Return type

**map[string,string]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGuidAlias**
> removeGuidAlias($id4n, $alias_type)

Remove aliases from GUID or Collection

Remove the alias of the given type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID or Collection to operate on
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model

try {
    $apiInstance->removeGuidAlias($id4n, $alias_type);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->removeGuidAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID or Collection to operate on |
 **alias_type** | **string**| Alias type, see the corresponding API model |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByAlias**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfGuid searchByAlias($alias, $alias_type, $offset, $limit)

Search for GUIDs by alias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias = "alias_example"; // string | The alias to search for
$alias_type = "alias_type_example"; // string | Alias type type to search for
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->searchByAlias($alias, $alias_type, $offset, $limit);
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
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\PaginatedResponseOfGuid**](../Model/PaginatedResponseOfGuid.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

