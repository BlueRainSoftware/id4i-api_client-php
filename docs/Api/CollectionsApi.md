# Bluerain\ID4iClient\CollectionsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addElementsToCollection**](CollectionsApi.md#addElementsToCollection) | **POST** /api/v1/collections/{id4n}/elements | Add elements to collection
[**createCollection**](CollectionsApi.md#createCollection) | **POST** /api/v1/collections | Create collection
[**deleteCollection**](CollectionsApi.md#deleteCollection) | **DELETE** /api/v1/collections/{id4n} | Delete collection
[**deleteProperties**](CollectionsApi.md#deleteProperties) | **DELETE** /api/v1/id4ns/{id4n}/properties | Delete ID4n properties
[**findCollection**](CollectionsApi.md#findCollection) | **GET** /api/v1/collections/{id4n} | Find collection
[**getAllCollectionsOfOrganization**](CollectionsApi.md#getAllCollectionsOfOrganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
[**getProperties**](CollectionsApi.md#getProperties) | **GET** /api/v1/id4ns/{id4n}/properties | Retrieve ID4n properties
[**listElementsOfCollection**](CollectionsApi.md#listElementsOfCollection) | **GET** /api/v1/collections/{id4n}/elements | List contents of the collection
[**patchProperties**](CollectionsApi.md#patchProperties) | **PATCH** /api/v1/id4ns/{id4n}/properties | Patch ID4n properties
[**removeElementsFromCollection**](CollectionsApi.md#removeElementsFromCollection) | **DELETE** /api/v1/collections/{id4n}/elements | Remove elements from collection
[**updateCollection**](CollectionsApi.md#updateCollection) | **PATCH** /api/v1/collections/{id4n} | Update collection


# **addElementsToCollection**
> addElementsToCollection($id4n, $list_of_guids)

Add elements to collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Bluerain\ID4iClient\Model\ListOfId4ns(); // \Bluerain\ID4iClient\Model\ListOfId4ns | listOfGuids

try {
    $apiInstance->addElementsToCollection($id4n, $list_of_guids);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **list_of_guids** | [**\Bluerain\ID4iClient\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollection**
> \Bluerain\ID4iClient\Model\Id4n createCollection($create_info)

Create collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_info = new \Bluerain\ID4iClient\Model\CreateCollectionRequest(); // \Bluerain\ID4iClient\Model\CreateCollectionRequest | createInfo

try {
    $result = $apiInstance->createCollection($create_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_info** | [**\Bluerain\ID4iClient\Model\CreateCollectionRequest**](../Model/CreateCollectionRequest.md)| createInfo |

### Return type

[**\Bluerain\ID4iClient\Model\Id4n**](../Model/Id4n.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollection**
> deleteCollection($id4n)

Delete collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n

try {
    $apiInstance->deleteCollection($id4n);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |

### Return type

void (empty response body)

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

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
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
    echo 'Exception when calling CollectionsApi->deleteProperties: ', $e->getMessage(), PHP_EOL;
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

# **findCollection**
> \Bluerain\ID4iClient\Model\GuidCollection findCollection($id4n)

Find collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n

try {
    $result = $apiInstance->findCollection($id4n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |

### Return type

[**\Bluerain\ID4iClient\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCollectionsOfOrganization**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfGuidCollection getAllCollectionsOfOrganization($organization_id, $offset, $limit, $type, $label, $label_prefix)

Get collections of organization

Retrieving all collections of an organization in a paginated manner. You may filter the results by specifying id4n properties with filter operations (eq, in, ne) in the query parameters. e.g. `com.yourcompany.orderId.eq=1234`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements
$type = "type_example"; // string | Filter by this type
$label = "label_example"; // string | Filter by this label
$label_prefix = "label_prefix_example"; // string | Filter by this label prefix

try {
    $result = $apiInstance->getAllCollectionsOfOrganization($organization_id, $offset, $limit, $type, $label, $label_prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getAllCollectionsOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]
 **type** | **string**| Filter by this type | [optional]
 **label** | **string**| Filter by this label | [optional]
 **label_prefix** | **string**| Filter by this label prefix | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\PaginatedResponseOfGuidCollection**](../Model/PaginatedResponseOfGuidCollection.md)

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

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
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
    echo 'Exception when calling CollectionsApi->getProperties: ', $e->getMessage(), PHP_EOL;
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

# **listElementsOfCollection**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfGuid listElementsOfCollection($id4n, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listElementsOfCollection($id4n, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listElementsOfCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
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

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
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
    echo 'Exception when calling CollectionsApi->patchProperties: ', $e->getMessage(), PHP_EOL;
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

# **removeElementsFromCollection**
> removeElementsFromCollection($id4n, $list_of_guids)

Remove elements from collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Bluerain\ID4iClient\Model\ListOfId4ns(); // \Bluerain\ID4iClient\Model\ListOfId4ns | listOfGuids

try {
    $apiInstance->removeElementsFromCollection($id4n, $list_of_guids);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **list_of_guids** | [**\Bluerain\ID4iClient\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollection**
> object updateCollection($id4n, $request)

Update collection

Update collection changing only the given values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$request = new \Bluerain\ID4iClient\Model\GuidCollection(); // \Bluerain\ID4iClient\Model\GuidCollection | request

try {
    $result = $apiInstance->updateCollection($id4n, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **request** | [**\Bluerain\ID4iClient\Model\GuidCollection**](../Model/GuidCollection.md)| request |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

