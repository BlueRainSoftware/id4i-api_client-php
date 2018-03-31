# Swagger\Client\StorageApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](StorageApi.md#createDocument) | **PUT** /api/v1/documents/{id4n}/{organizationId} | Create an empty document for an id4n
[**deleteDocument**](StorageApi.md#deleteDocument) | **DELETE** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Delete a document
[**getDocument**](StorageApi.md#getDocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a document (meta-data only, no content)
[**getPublicDocument**](StorageApi.md#getPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName}/metadata | Retrieve a document (meta-data only, no content)
[**listAllDocuments**](StorageApi.md#listAllDocuments) | **GET** /api/v1/documents/{id4n} | List documents
[**listAllPublicDocuments**](StorageApi.md#listAllPublicDocuments) | **GET** /api/v1/public/documents/{id4n} | List organization specific documents
[**listDocuments**](StorageApi.md#listDocuments) | **GET** /api/v1/documents/{id4n}/{organizationId} | List organization specific documents
[**listPublicDocuments**](StorageApi.md#listPublicDocuments) | **GET** /api/v1/public/documents/{id4n}/{organizationId} | List organization specific documents
[**readDocument**](StorageApi.md#readDocument) | **GET** /api/v1/documents/{id4n}/{organizationId}/{fileName} | Read document contents
[**readFromMicrostorage**](StorageApi.md#readFromMicrostorage) | **GET** /api/v1/microstorage/{id4n}/{organization} | Read data from microstorage
[**readPublicDocument**](StorageApi.md#readPublicDocument) | **GET** /api/v1/public/documents/{id4n}/{organizationId}/{fileName} | Read document contents
[**updateDocumentMetadata**](StorageApi.md#updateDocumentMetadata) | **PATCH** /api/v1/documents/{id4n}/{organizationId}/{fileName}/metadata | Update a document
[**writeToMicrostorage**](StorageApi.md#writeToMicrostorage) | **PUT** /api/v1/microstorage/{id4n}/{organization} | Write data to microstorage


# **createDocument**
> \Swagger\Client\Model\Document createDocument($organization_id, $id4n, $content)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$content = "/path/to/file.txt"; // \SplFileObject | content

try {
    $result = $apiInstance->createDocument($organization_id, $id4n, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **content** | **\SplFileObject**| content |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> \Swagger\Client\Model\ResponseEntity deleteDocument($organization_id, $id4n, $file_name)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName

try {
    $result = $apiInstance->deleteDocument($organization_id, $id4n, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Swagger\Client\Model\Document getDocument($organization_id, $id4n, $file_name)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName

try {
    $result = $apiInstance->getDocument($organization_id, $id4n, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicDocument**
> \Swagger\Client\Model\Document getPublicDocument($organization_id, $id4n, $file_name)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName

try {
    $result = $apiInstance->getPublicDocument($organization_id, $id4n, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getPublicDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllDocuments**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllDocuments($id4n, $offset, $limit)

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
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllDocuments($id4n, $offset, $limit);
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
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllPublicDocuments**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllPublicDocuments($id4n, $organization_id, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

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
$organization_id = 789; // int | organizationId
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllPublicDocuments($id4n, $organization_id, $offset, $limit);
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
 **organization_id** | **int**| organizationId | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listDocuments($organization_id, $id4n, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listDocuments($organization_id, $id4n, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPublicDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listPublicDocuments($organization_id, $id4n, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listPublicDocuments($organization_id, $id4n, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listPublicDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDocument**
> string readDocument($organization_id, $id4n, $file_name)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName

try {
    $result = $apiInstance->readDocument($organization_id, $id4n, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readFromMicrostorage**
> string readFromMicrostorage($organization, $id4n)

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
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n

try {
    $result = $apiInstance->readFromMicrostorage($organization, $id4n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readFromMicrostorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPublicDocument**
> string readPublicDocument($organization_id, $id4n, $file_name)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName

try {
    $result = $apiInstance->readPublicDocument($organization_id, $id4n, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readPublicDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentMetadata**
> \Swagger\Client\Model\Document updateDocumentMetadata($organization_id, $id4n, $file_name, $document)

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
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$document = new \Swagger\Client\Model\DocumentUpdate(); // \Swagger\Client\Model\DocumentUpdate | document

try {
    $result = $apiInstance->updateDocumentMetadata($organization_id, $id4n, $file_name, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateDocumentMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **document** | [**\Swagger\Client\Model\DocumentUpdate**](../Model/DocumentUpdate.md)| document |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeToMicrostorage**
> object writeToMicrostorage($organization, $id4n, $content_type, $content_length, $body)

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
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n
$content_type = "content_type_example"; // string | Content-Type
$content_length = 789; // int | Content-Length
$body = "B"; // string | body

try {
    $result = $apiInstance->writeToMicrostorage($organization, $id4n, $content_type, $content_length, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->writeToMicrostorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |
 **content_type** | **string**| Content-Type | [optional]
 **content_length** | **int**| Content-Length | [optional]
 **body** | **string**| body | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

