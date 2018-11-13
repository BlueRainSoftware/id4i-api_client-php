# Swagger\Client\StorageApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](StorageApi.md#createDocument) | **PUT** /api/v1/documents/{id4n}/{organizationId} | Create an empty document for an id4n
[**deleteDocument**](StorageApi.md#deleteDocument) | **DELETE** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Delete a document
[**getDocument**](StorageApi.md#getDocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a document (meta-data only, no content)
[**getPublicDocument**](StorageApi.md#getPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a public document (meta-data only, no content)
[**listAllDocuments**](StorageApi.md#listAllDocuments) | **GET** /api/v1/documents/{id4n} | List documents
[**listAllPublicDocuments**](StorageApi.md#listAllPublicDocuments) | **GET** /api/v1/public/documents/{id4n} | List public documents
[**listDocuments**](StorageApi.md#listDocuments) | **GET** /api/v1/documents/{id4n}/{organizationId} | List organization specific documents
[**readDocument**](StorageApi.md#readDocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Read document contents
[**readFromMicrostorage**](StorageApi.md#readFromMicrostorage) | **GET** /api/v1/microstorage/{id4n}/{organization} | Read data from microstorage
[**readPublicDocument**](StorageApi.md#readPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName} | Read public document contents
[**updateDocumentMetadata**](StorageApi.md#updateDocumentMetadata) | **PATCH** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Update a document
[**writeToMicrostorage**](StorageApi.md#writeToMicrostorage) | **PUT** /api/v1/microstorage/{id4n}/{organization} | Write data to microstorage


# **createDocument**
> \Swagger\Client\Model\Document createDocument($content, $id4n, $organization_id)

Create an empty document for an id4n

The document is created empty, mime-type defaults to text/plain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content = "/path/to/file.txt"; // \SplFileObject | content
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->createDocument($content, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content** | **\SplFileObject**| content |
 **id4n** | **string**| id4n |
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> deleteDocument($file_name, $id4n, $organization_id)

Delete a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $apiInstance->deleteDocument($file_name, $id4n, $organization_id);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Swagger\Client\Model\Document getDocument($file_name, $id4n, $organization_id)

Retrieve a document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->getDocument($file_name, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getDocument: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\StorageApi(
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
    echo 'Exception when calling StorageApi->getPublicDocument: ', $e->getMessage(), PHP_EOL;
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

# **listAllDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listAllDocuments($id4n, $limit, $offset, $owner)

List documents

Listing all documents of an id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$owner = "owner_example"; // string | Filter by owner organization

try {
    $result = $apiInstance->listAllDocuments($id4n, $limit, $offset, $owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listAllDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **owner** | **string**| Filter by owner organization | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

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

$apiInstance = new Swagger\Client\Api\StorageApi(
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
    echo 'Exception when calling StorageApi->listAllPublicDocuments: ', $e->getMessage(), PHP_EOL;
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

# **listDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listDocuments($id4n, $organization_id, $limit, $offset, $owner)

List organization specific documents

Listing documents of an id4n seen by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$owner = "owner_example"; // string | Filter by owner organization

try {
    $result = $apiInstance->listDocuments($id4n, $organization_id, $limit, $offset, $owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization_id** | **string**| organizationId |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **owner** | **string**| Filter by owner organization | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDocument**
> string readDocument($file_name, $id4n, $organization_id)

Read document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->readDocument($file_name, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readDocument: ', $e->getMessage(), PHP_EOL;
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

# **readFromMicrostorage**
> string readFromMicrostorage($id4n, $organization)

Read data from microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$organization = "organization_example"; // string | organization

try {
    $result = $apiInstance->readFromMicrostorage($id4n, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readFromMicrostorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization** | **string**| organization |

### Return type

**string**

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

$apiInstance = new Swagger\Client\Api\StorageApi(
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
    echo 'Exception when calling StorageApi->readPublicDocument: ', $e->getMessage(), PHP_EOL;
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

# **updateDocumentMetadata**
> \Swagger\Client\Model\Document updateDocumentMetadata($document, $file_name, $id4n, $organization_id)

Update a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = new \Swagger\Client\Model\DocumentUpdate(); // \Swagger\Client\Model\DocumentUpdate | document
$file_name = "file_name_example"; // string | fileName
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->updateDocumentMetadata($document, $file_name, $id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateDocumentMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | [**\Swagger\Client\Model\DocumentUpdate**](../Model/DocumentUpdate.md)| document |
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

# **writeToMicrostorage**
> object writeToMicrostorage($id4n, $organization, $content_length, $content_type, $body)

Write data to microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$organization = "organization_example"; // string | organization
$content_length = 789; // int | Content-Length
$content_type = "content_type_example"; // string | Content-Type
$body = "B"; // string | body

try {
    $result = $apiInstance->writeToMicrostorage($id4n, $organization, $content_length, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->writeToMicrostorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization** | **string**| organization |
 **content_length** | **int**| Content-Length | [optional]
 **content_type** | **string**| Content-Type | [optional]
 **body** | **string**| body | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

