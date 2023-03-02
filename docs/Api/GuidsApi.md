# Bluerain\ID4iClient\GuidsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](GuidsApi.md#addGuidAlias) | **POST** /api/v1/id4ns/{id4n}/alias/{aliasType} | Add alias for GUID or Collection
[**createGuid**](GuidsApi.md#createGuid) | **POST** /api/v1/guids | Create GUID(s)
[**deleteProperties**](GuidsApi.md#deleteProperties) | **DELETE** /api/v1/id4ns/{id4n}/properties | Delete ID4n properties
[**getCollections**](GuidsApi.md#getCollections) | **GET** /api/v1/id4ns/{id4n}/collections | Retrieve collections of an ID
[**getGuid**](GuidsApi.md#getGuid) | **GET** /api/v1/guids/{id4n} | Retrieve GUID information
[**getGuidAliases**](GuidsApi.md#getGuidAliases) | **GET** /api/v1/id4ns/{id4n}/alias | Get all aliases for the given GUID or Collection.
[**getGuidsWithoutCollection**](GuidsApi.md#getGuidsWithoutCollection) | **GET** /api/v1/guids/withoutCollection | Retrieve GUIDs not in any collection
[**getId4n**](GuidsApi.md#getId4n) | **GET** /api/v1/id4ns/{id4n} | Retrieve ID4n information
[**getMultipleProperties**](GuidsApi.md#getMultipleProperties) | **GET** /api/v1/multiple/id4ns/properties | Get multiple ID4n properties
[**getProperties**](GuidsApi.md#getProperties) | **GET** /api/v1/id4ns/{id4n}/properties | Retrieve ID4n properties
[**importGS1Codes**](GuidsApi.md#importGS1Codes) | **POST** /api/v1/import/gs1 | Import GS1/MAPP codes
[**patchProperties**](GuidsApi.md#patchProperties) | **PATCH** /api/v1/id4ns/{id4n}/properties | Patch ID4n properties
[**removeGuidAlias**](GuidsApi.md#removeGuidAlias) | **DELETE** /api/v1/id4ns/{id4n}/alias/{aliasType} | Remove aliases from GUID or Collection
[**updateGuid**](GuidsApi.md#updateGuid) | **PATCH** /api/v1/guids/{id4n} | Change GUID information.


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

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
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
    echo 'Exception when calling GuidsApi->addGuidAlias: ', $e->getMessage(), PHP_EOL;
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

# **createGuid**
> \Bluerain\ID4iClient\Model\ListOfId4ns createGuid($create_guid_info)

Create GUID(s)

Creating one or more GUIDs with a specified length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_guid_info = new \Bluerain\ID4iClient\Model\CreateGuidRequest(); // \Bluerain\ID4iClient\Model\CreateGuidRequest | GUID creation model

try {
    $result = $apiInstance->createGuid($create_guid_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->createGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_guid_info** | [**\Bluerain\ID4iClient\Model\CreateGuidRequest**](../Model/CreateGuidRequest.md)| GUID creation model |

### Return type

[**\Bluerain\ID4iClient\Model\ListOfId4ns**](../Model/ListOfId4ns.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProperties**
> deleteProperties($id4n, $organization_id, $properties)

Delete ID4n properties

Partial deletion of id4n properties. If the property does not exist, it will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The id4n
$organization_id = "organization_id_example"; // string | The organization namespace to work on while deleting the properties.
$properties = array(new \Bluerain\ID4iClient\Model\string[]()); // string[] | A set of property keys to delete.

try {
    $apiInstance->deleteProperties($id4n, $organization_id, $properties);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->deleteProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The id4n |
 **organization_id** | **string**| The organization namespace to work on while deleting the properties. |
 **properties** | **string[]**| A set of property keys to delete. |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollections**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfGuidCollection getCollections($id4n, $organization_id, $offset, $limit)

Retrieve collections of an ID

Retrieving all owned or holding collections the specified id4n is assigned to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The ID which the collections should contain
$organization_id = "organization_id_example"; // string | The organization holding the collections.
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->getCollections($id4n, $organization_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The ID which the collections should contain |
 **organization_id** | **string**| The organization holding the collections. | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\PaginatedResponseOfGuidCollection**](../Model/PaginatedResponseOfGuidCollection.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuid**
> \Bluerain\ID4iClient\Model\Guid getGuid($id4n, $organization_id)

Retrieve GUID information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID number
$organization_id = "organization_id_example"; // string | The organization namespace to resolve.

try {
    $result = $apiInstance->getGuid($id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **organization_id** | **string**| The organization namespace to resolve. | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\Guid**](../Model/Guid.md)

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

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
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
    echo 'Exception when calling GuidsApi->getGuidAliases: ', $e->getMessage(), PHP_EOL;
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

# **getGuidsWithoutCollection**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfGuid getGuidsWithoutCollection($organization_id, $offset, $limit)

Retrieve GUIDs not in any collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization to search GUIDs for
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->getGuidsWithoutCollection($organization_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getGuidsWithoutCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization to search GUIDs for |
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

# **getId4n**
> \Bluerain\ID4iClient\Model\Id4nPresentation getId4n($id4n, $organization_id)

Retrieve ID4n information

Retrieving basic information about an ID like the type and the creation time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The ID to resolve to
$organization_id = "organization_id_example"; // string | The organization namespace to resolve.

try {
    $result = $apiInstance->getId4n($id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getId4n: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The ID to resolve to |
 **organization_id** | **string**| The organization namespace to resolve. | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\Id4nPresentation**](../Model/Id4nPresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultipleProperties**
> \Bluerain\ID4iClient\Model\ListOfId4nProperties getMultipleProperties($id4ns, $organization_id)

Get multiple ID4n properties

Get a list of ID4n properties for the specified ID4ns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4ns = array("id4ns_example"); // string[] | The list of ID4ns to resolve.
$organization_id = "organization_id_example"; // string | The organization namespace.

try {
    $result = $apiInstance->getMultipleProperties($id4ns, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getMultipleProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4ns** | [**string[]**](../Model/string.md)| The list of ID4ns to resolve. |
 **organization_id** | **string**| The organization namespace. | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\ListOfId4nProperties**](../Model/ListOfId4nProperties.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProperties**
> map[string,string] getProperties($id4n, $organization_id)

Retrieve ID4n properties

List all properties of an id4n.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The id4n
$organization_id = "organization_id_example"; // string | The organization namespace.

try {
    $result = $apiInstance->getProperties($id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->getProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The id4n |
 **organization_id** | **string**| The organization namespace. | [optional]

### Return type

**map[string,string]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importGS1Codes**
> importGS1Codes($import_gs1_codes_request)

Import GS1/MAPP codes

Importing GS1/MAPP codes that contain unique components.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_gs1_codes_request = new \Bluerain\ID4iClient\Model\ImportGS1CodesRequest(); // \Bluerain\ID4iClient\Model\ImportGS1CodesRequest | The information how the MAPP codes should be imported and the list of MAPP codes

try {
    $apiInstance->importGS1Codes($import_gs1_codes_request);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->importGS1Codes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_gs1_codes_request** | [**\Bluerain\ID4iClient\Model\ImportGS1CodesRequest**](../Model/ImportGS1CodesRequest.md)| The information how the MAPP codes should be imported and the list of MAPP codes |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProperties**
> patchProperties($id4n, $organization_id, $properties)

Patch ID4n properties

Partial updating of id4n properties. If a property contains a null value the property will be deleted other values will be saved and overwritten if they already exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The id4n
$organization_id = "organization_id_example"; // string | The organization namespace to work on while patching the properties.
$properties = new \stdClass; // object | The properties to update.

try {
    $apiInstance->patchProperties($id4n, $organization_id, $properties);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->patchProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The id4n |
 **organization_id** | **string**| The organization namespace to work on while patching the properties. |
 **properties** | **object**| The properties to update. |

### Return type

void (empty response body)

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

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
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
    echo 'Exception when calling GuidsApi->removeGuidAlias: ', $e->getMessage(), PHP_EOL;
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

# **updateGuid**
> object updateGuid($id4n, $request)

Change GUID information.

Allows ownership transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID number
$request = new \Bluerain\ID4iClient\Model\Guid(); // \Bluerain\ID4iClient\Model\Guid | request

try {
    $result = $apiInstance->updateGuid($id4n, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->updateGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **request** | [**\Bluerain\ID4iClient\Model\Guid**](../Model/Guid.md)| request |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

