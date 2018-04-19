# Swagger\Client\GuidsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGuidAlias**](GuidsApi.md#addGuidAlias) | **POST** /api/v1/guids/{id4n}/alias/{aliasType} | Add alias for GUIDs
[**addHistoryItem**](GuidsApi.md#addHistoryItem) | **POST** /api/v1/guids/{id4n}/history | Add history item
[**createGuid**](GuidsApi.md#createGuid) | **POST** /api/v1/guids | Create GUID(s)
[**getGuid**](GuidsApi.md#getGuid) | **GET** /api/v1/guids/{id4n} | Retrieve GUID information
[**getGuidAliases**](GuidsApi.md#getGuidAliases) | **GET** /api/v1/guids/{id4n}/alias | Get all aliases for the given GUID
[**getGuidsWithoutCollection**](GuidsApi.md#getGuidsWithoutCollection) | **GET** /api/v1/guids/withoutCollection | Retrieve GUIDs not in any collection
[**getId4n**](GuidsApi.md#getId4n) | **GET** /api/v1/id4ns/{id4n} | Retrieve ID4n information
[**listHistory**](GuidsApi.md#listHistory) | **GET** /api/v1/guids/{id4n}/history | List history
[**listHistoryOfOrganization**](GuidsApi.md#listHistoryOfOrganization) | **GET** /api/v1/guids/{id4n}/history/{organizationId} | List history
[**removeGuidAlias**](GuidsApi.md#removeGuidAlias) | **DELETE** /api/v1/guids/{id4n}/alias/{aliasType} | Remove aliases from GUIDs
[**updateGuid**](GuidsApi.md#updateGuid) | **PUT** /api/v1/guids/{id4n} | Change GUID information.
[**updateGuid1**](GuidsApi.md#updateGuid1) | **PATCH** /api/v1/guids/{id4n} | Change GUID information.
[**updateHistoryItemVisibility**](GuidsApi.md#updateHistoryItemVisibility) | **PUT** /api/v1/guids/{id4n}/history/{organizationId}/{sequence}/visibility | Set history item visibility


# **addGuidAlias**
> addGuidAlias($id4n, $alias_type, $alias)

Add alias for GUIDs

Adds or replaces aliases for single GUIDs (alias type item and mapp) or groups of GUIDs (alias types gtin, ean and article)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID to operate on
$alias_type = "alias_type_example"; // string | Alias type, see the corresponding API model
$alias = new \Swagger\Client\Model\GuidAlias(); // \Swagger\Client\Model\GuidAlias | The alias to add or update

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
 **id4n** | **string**| The GUID to operate on |
 **alias_type** | **string**| Alias type, see the corresponding API model |
 **alias** | [**\Swagger\Client\Model\GuidAlias**](../Model/GuidAlias.md)| The alias to add or update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addHistoryItem**
> addHistoryItem($id4n, $history_item)

Add history item

Add a new history item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$history_item = new \Swagger\Client\Model\HistoryItem(); // \Swagger\Client\Model\HistoryItem | The history item to publish

try {
    $apiInstance->addHistoryItem($id4n, $history_item);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->addHistoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **history_item** | [**\Swagger\Client\Model\HistoryItem**](../Model/HistoryItem.md)| The history item to publish |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGuid**
> \Swagger\Client\Model\ListOfId4ns createGuid($create_guid_info)

Create GUID(s)

Creating one or more GUIDs with a specified length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_guid_info = new \Swagger\Client\Model\CreateGuidRequest(); // \Swagger\Client\Model\CreateGuidRequest | createGUIDInfo

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
 **create_guid_info** | [**\Swagger\Client\Model\CreateGuidRequest**](../Model/CreateGuidRequest.md)| createGUIDInfo |

### Return type

[**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuid**
> \Swagger\Client\Model\Guid getGuid($id4n)

Retrieve GUID information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID number

try {
    $result = $apiInstance->getGuid($id4n);
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

### Return type

[**\Swagger\Client\Model\Guid**](../Model/Guid.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidAliases**
> map[string,string] getGuidAliases($id4n)

Get all aliases for the given GUID

Looks up the alias for each alias type (group and single GUID) and returns all found ones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID to operate on

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
 **id4n** | **string**| The GUID to operate on |

### Return type

**map[string,string]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuidsWithoutCollection**
> \Swagger\Client\Model\PaginatedResponseGuid_ getGuidsWithoutCollection($organization_id, $offset, $limit)

Retrieve GUIDs not in any collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 789; // int | Organization to search GUIDs for (required).
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
 **organization_id** | **int**| Organization to search GUIDs for (required). |
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseGuid_**](../Model/PaginatedResponseGuid_.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getId4n**
> \Swagger\Client\Model\Id4nPresentation getId4n($id4n)

Retrieve ID4n information

Retrieving basic information about an ID like the type and the creation time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The ID to resolve to

try {
    $result = $apiInstance->getId4n($id4n);
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

### Return type

[**\Swagger\Client\Model\Id4nPresentation**](../Model/Id4nPresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHistory**
> \Swagger\Client\Model\PaginatedHistoryItemResponse listHistory($id4n, $include_private, $offset, $limit)

List history

Lists the history of a GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$include_private = true; // bool | Also return private history entries
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listHistory($id4n, $include_private, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->listHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **include_private** | **bool**| Also return private history entries | [optional] [default to true]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedHistoryItemResponse**](../Model/PaginatedHistoryItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHistoryOfOrganization**
> \Swagger\Client\Model\PaginatedHistoryItemResponse listHistoryOfOrganization($id4n, $organization_id, $include_private, $offset, $limit)

List history

Lists the history of a GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = 789; // int | organizationId
$include_private = true; // bool | Also return private history entries
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listHistoryOfOrganization($id4n, $organization_id, $include_private, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->listHistoryOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **int**| organizationId |
 **include_private** | **bool**| Also return private history entries | [optional] [default to true]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedHistoryItemResponse**](../Model/PaginatedHistoryItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGuidAlias**
> removeGuidAlias($id4n, $alias_type)

Remove aliases from GUIDs

Remove the alias of the given type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID to operate on
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
 **id4n** | **string**| The GUID to operate on |
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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID number
$request = new \Swagger\Client\Model\Guid(); // \Swagger\Client\Model\Guid | request

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
 **request** | [**\Swagger\Client\Model\Guid**](../Model/Guid.md)| request |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGuid1**
> object updateGuid1($id4n, $request)

Change GUID information.

Allows ownership transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | The GUID number
$request = new \Swagger\Client\Model\Guid(); // \Swagger\Client\Model\Guid | request

try {
    $result = $apiInstance->updateGuid1($id4n, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->updateGuid1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **request** | [**\Swagger\Client\Model\Guid**](../Model/Guid.md)| request |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryItemVisibility**
> \Swagger\Client\Model\HistoryItem updateHistoryItemVisibility($id4n, $organization_id, $sequence, $visibility)

Set history item visibility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = 789; // int | organizationId
$sequence = 56; // int | sequence
$visibility = new \Swagger\Client\Model\Visibility(); // \Swagger\Client\Model\Visibility | History item visibility restrictions

try {
    $result = $apiInstance->updateHistoryItemVisibility($id4n, $organization_id, $sequence, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuidsApi->updateHistoryItemVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **int**| organizationId |
 **sequence** | **int**| sequence |
 **visibility** | [**\Swagger\Client\Model\Visibility**](../Model/Visibility.md)| History item visibility restrictions |

### Return type

[**\Swagger\Client\Model\HistoryItem**](../Model/HistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

