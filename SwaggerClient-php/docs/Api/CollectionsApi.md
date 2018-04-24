# Swagger\Client\CollectionsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addElementsToCollection**](CollectionsApi.md#addElementsToCollection) | **POST** /api/v1/collections/{id4n}/elements | Add elements to collection
[**createCollection**](CollectionsApi.md#createCollection) | **POST** /api/v1/collections | Create collection
[**deleteCollection**](CollectionsApi.md#deleteCollection) | **DELETE** /api/v1/collections/{id4n} | Delete collection
[**findCollection**](CollectionsApi.md#findCollection) | **GET** /api/v1/collections/{id4n} | Find collection
[**getAllCollectionsOfOrganization**](CollectionsApi.md#getAllCollectionsOfOrganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
[**listElementsOfCollection**](CollectionsApi.md#listElementsOfCollection) | **GET** /api/v1/collections/{id4n}/elements | List contents of the collection
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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids

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
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollection**
> \Swagger\Client\Model\Id4n createCollection($create_info)

Create collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_info = new \Swagger\Client\Model\CreateCollectionRequest(); // \Swagger\Client\Model\CreateCollectionRequest | createInfo

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
 **create_info** | [**\Swagger\Client\Model\CreateCollectionRequest**](../Model/CreateCollectionRequest.md)| createInfo |

### Return type

[**\Swagger\Client\Model\Id4n**](../Model/Id4n.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
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

# **findCollection**
> \Swagger\Client\Model\GuidCollection findCollection($id4n)

Find collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
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

[**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCollectionsOfOrganization**
> \Swagger\Client\Model\PaginatedGuidCollection getAllCollectionsOfOrganization($organization_id, $offset, $limit, $type, $label, $label_prefix)

Get collections of organization

Retrieving all collections of an organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 789; // int | organizationId
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
 **organization_id** | **int**| organizationId |
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]
 **type** | **string**| Filter by this type | [optional]
 **label** | **string**| Filter by this label | [optional]
 **label_prefix** | **string**| Filter by this label prefix | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidCollection**](../Model/PaginatedGuidCollection.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElementsOfCollection**
> \Swagger\Client\Model\PaginatedGuidResponse listElementsOfCollection($id4n, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
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

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids

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
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$request = new \Swagger\Client\Model\GuidCollection(); // \Swagger\Client\Model\GuidCollection | request

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
 **request** | [**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)| request |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

