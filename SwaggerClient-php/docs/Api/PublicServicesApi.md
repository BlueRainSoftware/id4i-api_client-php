# Swagger\Client\PublicServicesApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublicDocument**](PublicServicesApi.md#getPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a public document (meta-data only, no content)
[**getRoutes**](PublicServicesApi.md#getRoutes) | **GET** /api/v1/public/routes/{id4n} | Retrieve all public routes for a GUID
[**go**](PublicServicesApi.md#go) | **GET** /go/{guid} | Forward
[**listAllPublicDocuments**](PublicServicesApi.md#listAllPublicDocuments) | **GET** /api/v1/public/documents/{id4n} | List public documents
[**listPublicHistory**](PublicServicesApi.md#listPublicHistory) | **GET** /api/v1/public/history/{id4n} | Shows the public history of the given GUID
[**readOrganizationInfo**](PublicServicesApi.md#readOrganizationInfo) | **GET** /api/v1/public/organizations/{organizationId} | Read public organization information
[**readPublicDocument**](PublicServicesApi.md#readPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName} | Read public document contents
[**resolveImageUsingGET**](PublicServicesApi.md#resolveImageUsingGET) | **GET** /api/v1/public/image/{imageID} | Resolve image
[**resolveWhoIsEntry**](PublicServicesApi.md#resolveWhoIsEntry) | **GET** /whois/{id4n} | Resolve owner of id4n


# **getPublicDocument**
> \Swagger\Client\Model\Document getPublicDocument($file_name, $id4n, $organization_id)

Retrieve a public document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->getPublicDocument($file_name, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->getPublicDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| fileName |
 **id4n** | **string**| id4n |
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutes**
> \Swagger\Client\Model\Route[] getRoutes($id4n, $type, $interpolate)

Retrieve all public routes for a GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$type = "web"; // string | type
$interpolate = true; // bool | interpolate

try {
    $result = $apiInstance->getRoutes($id4n, $type, $interpolate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->getRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **type** | **string**| type | [default to web]
 **interpolate** | **bool**| interpolate | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\Route[]**](../Model/Route.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **go**
> go($guid)

Forward

Forwarding to the designated route defined in the routing,

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guid = "guid_example"; // string | guid

try {
    $apiInstance->go($guid);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->go: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| guid |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllPublicDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listAllPublicDocuments($id4n, $limit, $offset, $organization_id, $owner)

List public documents

Listing all public documents of an id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$organization_id = "organization_id_example"; // string | organizationId
$owner = "owner_example"; // string | Filter by owner organization

try {
    $result = $apiInstance->listAllPublicDocuments($id4n, $limit, $offset, $organization_id, $owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->listAllPublicDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **organization_id** | **string**| organizationId | [optional]
 **owner** | **string**| Filter by owner organization | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPublicHistory**
> \Swagger\Client\Model\PaginatedHistoryItemResponse listPublicHistory($id4n, $limit, $offset)

Shows the public history of the given GUID

Only contains public history items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->listPublicHistory($id4n, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->listPublicHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedHistoryItemResponse**](../Model/PaginatedHistoryItemResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOrganizationInfo**
> \Swagger\Client\Model\Organization readOrganizationInfo($organization_id)

Read public organization information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Organization ID

try {
    $result = $apiInstance->readOrganizationInfo($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->readOrganizationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization ID |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPublicDocument**
> string readPublicDocument($file_name, $id4n, $organization_id)

Read public document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->readPublicDocument($file_name, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->readPublicDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| fileName |
 **id4n** | **string**| id4n |
 **organization_id** | **string**| organizationId |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveImageUsingGET**
> string resolveImageUsingGET($image_id)

Resolve image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = "image_id_example"; // string | The id of the image to be resolved.

try {
    $result = $apiInstance->resolveImageUsingGET($image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->resolveImageUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **string**| The id of the image to be resolved. |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveWhoIsEntry**
> \Swagger\Client\Model\WhoIsResponse resolveWhoIsEntry($id4n)

Resolve owner of id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n

try {
    $result = $apiInstance->resolveWhoIsEntry($id4n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicServicesApi->resolveWhoIsEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |

### Return type

[**\Swagger\Client\Model\WhoIsResponse**](../Model/WhoIsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

