# Swagger\Client\StorageApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](StorageApi.md#createDocument) | **PUT** /api/v1/collections/{id4n}/documents/{organizationId} | Create an empty document for an id4n
[**createDocument1**](StorageApi.md#createDocument1) | **PUT** /api/v1/guids/{id4n}/documents/{organizationId} | Create an empty document for an id4n
[**deleteDocument**](StorageApi.md#deleteDocument) | **DELETE** /api/v1/collections/{id4n}/documents/{organizationId}/{fileName} | Delete a document
[**deleteDocument1**](StorageApi.md#deleteDocument1) | **DELETE** /api/v1/guids/{id4n}/documents/{organizationId}/{fileName} | Delete a document
[**getDocument**](StorageApi.md#getDocument) | **GET** /api/v1/collections/{id4n}/documents/{organizationId}/{fileName} | Retrieve a document (meta-data only, no content)
[**getDocument1**](StorageApi.md#getDocument1) | **GET** /api/v1/guids/{id4n}/documents/{organizationId}/{fileName} | Retrieve a document (meta-data only, no content)
[**getPublicDocument**](StorageApi.md#getPublicDocument) | **GET** /api/v1/public/collections/{id4n}/documents/{organizationId}/{fileName} | Retrieve a document (meta-data only, no content)
[**getPublicDocument1**](StorageApi.md#getPublicDocument1) | **GET** /api/v1/public/guids/{id4n}/documents/{organizationId}/{fileName} | Retrieve a document (meta-data only, no content)
[**listAllDocuments**](StorageApi.md#listAllDocuments) | **GET** /api/v1/collections/{id4n}/documents | List documents
[**listAllDocuments1**](StorageApi.md#listAllDocuments1) | **GET** /api/v1/guids/{id4n}/documents | List documents
[**listAllPublicDocuments**](StorageApi.md#listAllPublicDocuments) | **GET** /api/v1/public/collections/{id4n}/documents | List organization specific documents
[**listAllPublicDocuments1**](StorageApi.md#listAllPublicDocuments1) | **GET** /api/v1/public/guids/{id4n}/documents | List organization specific documents
[**listDocuments**](StorageApi.md#listDocuments) | **GET** /api/v1/collections/{id4n}/documents/{organizationId} | List organization specific documents
[**listDocuments1**](StorageApi.md#listDocuments1) | **GET** /api/v1/guids/{id4n}/documents/{organizationId} | List organization specific documents
[**listPublicDocuments**](StorageApi.md#listPublicDocuments) | **GET** /api/v1/public/collections/{id4n}/documents/{organizationId} | List organization specific documents
[**listPublicDocuments1**](StorageApi.md#listPublicDocuments1) | **GET** /api/v1/public/guids/{id4n}/documents/{organizationId} | List organization specific documents
[**read**](StorageApi.md#read) | **GET** /api/v1/collections/{id4n}/micro/{organization} | Read data from microstorage
[**read1**](StorageApi.md#read1) | **GET** /api/v1/guids/{id4n}/micro/{organization} | Read data from microstorage
[**readDocument**](StorageApi.md#readDocument) | **GET** /api/v1/collections/{id4n}/documents/{organizationId}/{fileName}/content | Read document contents
[**readDocument1**](StorageApi.md#readDocument1) | **GET** /api/v1/guids/{id4n}/documents/{organizationId}/{fileName}/content | Read document contents
[**readPublicDocument**](StorageApi.md#readPublicDocument) | **GET** /api/v1/public/collections/{id4n}/documents/{organizationId}/{fileName}/content | Read document contents
[**readPublicDocument1**](StorageApi.md#readPublicDocument1) | **GET** /api/v1/public/guids/{id4n}/documents/{organizationId}/{fileName}/content | Read document contents
[**updateDocument**](StorageApi.md#updateDocument) | **PATCH** /api/v1/collections/{id4n}/documents/{organizationId}/{fileName} | Update a document
[**updateDocument1**](StorageApi.md#updateDocument1) | **PATCH** /api/v1/guids/{id4n}/documents/{organizationId}/{fileName} | Update a document
[**write**](StorageApi.md#write) | **PUT** /api/v1/collections/{id4n}/micro/{organization} | Write data to microstorage
[**write1**](StorageApi.md#write1) | **PUT** /api/v1/guids/{id4n}/micro/{organization} | Write data to microstorage
[**writeDocument**](StorageApi.md#writeDocument) | **PUT** /api/v1/collections/{id4n}/documents/{organizationId}/{fileName}/content | Write document contents
[**writeDocument1**](StorageApi.md#writeDocument1) | **PUT** /api/v1/guids/{id4n}/documents/{organizationId}/{fileName}/content | Write document contents


# **createDocument**
> object createDocument($id4n, $organization_id, $document, $authorization, $accept_language, $mime_type)

Create an empty document for an id4n

The document is created empty, mime-type defaults to text/plain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$organization_id = 789; // int | organizationId
$document = new \Swagger\Client\Model\Document(); // \Swagger\Client\Model\Document | document
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$mime_type = "mime_type_example"; // string | mimeType

try {
    $result = $apiInstance->createDocument($id4n, $organization_id, $document, $authorization, $accept_language, $mime_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization_id** | **int**| organizationId |
 **document** | [**\Swagger\Client\Model\Document**](../Model/Document.md)| document |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **mime_type** | **string**| mimeType | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocument1**
> object createDocument1($id4n, $organization_id, $document, $authorization, $accept_language, $mime_type)

Create an empty document for an id4n

The document is created empty, mime-type defaults to text/plain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$organization_id = 789; // int | organizationId
$document = new \Swagger\Client\Model\Document(); // \Swagger\Client\Model\Document | document
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$mime_type = "mime_type_example"; // string | mimeType

try {
    $result = $apiInstance->createDocument1($id4n, $organization_id, $document, $authorization, $accept_language, $mime_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization_id** | **int**| organizationId |
 **document** | [**\Swagger\Client\Model\Document**](../Model/Document.md)| document |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **mime_type** | **string**| mimeType | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> object deleteDocument($organization_id, $id4n, $file_name, $authorization, $accept_language)

Delete a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->deleteDocument($organization_id, $id4n, $file_name, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument1**
> object deleteDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language)

Delete a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->deleteDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Swagger\Client\Model\Document getDocument($organization_id, $id4n, $file_name, $authorization, $accept_language)

Retrieve a document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getDocument($organization_id, $id4n, $file_name, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument1**
> \Swagger\Client\Model\Document getDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language)

Retrieve a document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicDocument**
> \Swagger\Client\Model\Document getPublicDocument($organization_id, $id4n, $file_name, $authorization, $accept_language)

Retrieve a document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getPublicDocument($organization_id, $id4n, $file_name, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicDocument1**
> \Swagger\Client\Model\Document getPublicDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language)

Retrieve a document (meta-data only, no content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getPublicDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getPublicDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllDocuments**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllDocuments($id4n, $authorization, $accept_language, $offset, $limit)

List documents

Listing all documents of an id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllDocuments($id4n, $authorization, $accept_language, $offset, $limit);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllDocuments1**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllDocuments1($id4n, $authorization, $accept_language, $offset, $limit)

List documents

Listing all documents of an id4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllDocuments1($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listAllDocuments1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllPublicDocuments**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllPublicDocuments($id4n, $authorization, $accept_language, $organization_id, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$organization_id = 789; // int | organizationId
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllPublicDocuments($id4n, $authorization, $accept_language, $organization_id, $offset, $limit);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **organization_id** | **int**| organizationId | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllPublicDocuments1**
> \Swagger\Client\Model\PaginatedOwnedDocumentResponse listAllPublicDocuments1($id4n, $authorization, $accept_language, $organization_id, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$organization_id = 789; // int | organizationId
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listAllPublicDocuments1($id4n, $authorization, $accept_language, $organization_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listAllPublicDocuments1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **organization_id** | **int**| organizationId | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOwnedDocumentResponse**](../Model/PaginatedOwnedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listDocuments($organization_id, $id4n, $authorization, $accept_language, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listDocuments($organization_id, $id4n, $authorization, $accept_language, $offset, $limit);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDocuments1**
> \Swagger\Client\Model\PaginatedDocumentResponse listDocuments1($organization_id, $id4n, $authorization, $accept_language, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listDocuments1($organization_id, $id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listDocuments1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPublicDocuments**
> \Swagger\Client\Model\PaginatedDocumentResponse listPublicDocuments($organization_id, $id4n, $authorization, $accept_language, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listPublicDocuments($organization_id, $id4n, $authorization, $accept_language, $offset, $limit);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPublicDocuments1**
> \Swagger\Client\Model\PaginatedDocumentResponse listPublicDocuments1($organization_id, $id4n, $authorization, $accept_language, $offset, $limit)

List organization specific documents

Listing documents of an id4n owned by a specified organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listPublicDocuments1($organization_id, $id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listPublicDocuments1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDocumentResponse**](../Model/PaginatedDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read**
> \Swagger\Client\Model\InputStreamResource read($organization, $id4n, $authorization, $accept_language)

Read data from microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->read($organization, $id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->read: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read1**
> \Swagger\Client\Model\InputStreamResource read1($organization, $id4n, $authorization, $accept_language)

Read data from microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->read1($organization, $id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->read1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDocument**
> \Swagger\Client\Model\InputStreamResource readDocument($organization_id, $id4n, $file_name, $authorization, $accept_language)

Read document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->readDocument($organization_id, $id4n, $file_name, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDocument1**
> \Swagger\Client\Model\InputStreamResource readDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language)

Read document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->readDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPublicDocument**
> \Swagger\Client\Model\InputStreamResource readPublicDocument($organization_id, $id4n, $file_name, $authorization, $accept_language)

Read document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->readPublicDocument($organization_id, $id4n, $file_name, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPublicDocument1**
> \Swagger\Client\Model\InputStreamResource readPublicDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language)

Read document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->readPublicDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->readPublicDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\InputStreamResource**](../Model/InputStreamResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocument**
> \Swagger\Client\Model\Document updateDocument($organization_id, $id4n, $file_name, $document, $authorization, $accept_language)

Update a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$document = new \Swagger\Client\Model\DocumentUpdate(); // \Swagger\Client\Model\DocumentUpdate | document
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->updateDocument($organization_id, $id4n, $file_name, $document, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateDocument: ', $e->getMessage(), PHP_EOL;
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocument1**
> \Swagger\Client\Model\Document updateDocument1($organization_id, $id4n, $file_name, $document, $authorization, $accept_language)

Update a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$document = new \Swagger\Client\Model\DocumentUpdate(); // \Swagger\Client\Model\DocumentUpdate | document
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->updateDocument1($organization_id, $id4n, $file_name, $document, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateDocument1: ', $e->getMessage(), PHP_EOL;
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
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **write**
> object write($organization, $id4n, $authorization, $accept_language, $content_type, $content_length)

Write data to microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$content_type = "content_type_example"; // string | Content-Type
$content_length = 789; // int | Content-Length

try {
    $result = $apiInstance->write($organization, $id4n, $authorization, $accept_language, $content_type, $content_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->write: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **content_type** | **string**| Content-Type | [optional]
 **content_length** | **int**| Content-Length | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **write1**
> object write1($organization, $id4n, $authorization, $accept_language, $content_type, $content_length)

Write data to microstorage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = 789; // int | organization
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$content_type = "content_type_example"; // string | Content-Type
$content_length = 789; // int | Content-Length

try {
    $result = $apiInstance->write1($organization, $id4n, $authorization, $accept_language, $content_type, $content_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->write1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **int**| organization |
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **content_type** | **string**| Content-Type | [optional]
 **content_length** | **int**| Content-Length | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeDocument**
> object writeDocument($organization_id, $id4n, $file_name, $authorization, $accept_language, $content_type, $content_length)

Write document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$content_type = "content_type_example"; // string | Content-Type
$content_length = 789; // int | Content-Length

try {
    $result = $apiInstance->writeDocument($organization_id, $id4n, $file_name, $authorization, $accept_language, $content_type, $content_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->writeDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **content_type** | **string**| Content-Type | [optional]
 **content_length** | **int**| Content-Length | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeDocument1**
> object writeDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language, $content_type, $content_length)

Write document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | organizationId
$id4n = "id4n_example"; // string | id4n
$file_name = "file_name_example"; // string | fileName
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language
$content_type = "content_type_example"; // string | Content-Type
$content_length = 789; // int | Content-Length

try {
    $result = $apiInstance->writeDocument1($organization_id, $id4n, $file_name, $authorization, $accept_language, $content_type, $content_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->writeDocument1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **id4n** | **string**| id4n |
 **file_name** | **string**| fileName |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **content_type** | **string**| Content-Type | [optional]
 **content_length** | **int**| Content-Length | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

