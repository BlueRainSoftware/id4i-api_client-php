# Swagger\Client\ApiKeysApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApiKeyPrivilege**](ApiKeysApi.md#addApiKeyPrivilege) | **POST** /api/v1/apikeys/{key}/privileges | Add privilege
[**addApiKeyPrivilegeForId4ns**](ApiKeysApi.md#addApiKeyPrivilegeForId4ns) | **POST** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | Add ID4ns of a privilege
[**createNewApiKey**](ApiKeysApi.md#createNewApiKey) | **POST** /api/v1/apikeys | Create API key
[**deleteApiKey**](ApiKeysApi.md#deleteApiKey) | **DELETE** /api/v1/apikeys/{key} | Delete API key
[**getApiKey**](ApiKeysApi.md#getApiKey) | **GET** /api/v1/apikeys/{key} | Show API key
[**listAllApiKeyPrivileges**](ApiKeysApi.md#listAllApiKeyPrivileges) | **GET** /api/v1/apikeys/privileges | List all privileges
[**listAllApiKeysOfOrganization**](ApiKeysApi.md#listAllApiKeysOfOrganization) | **GET** /api/v1/apikeys | Find API key by organization
[**listApiKeyPrivileges**](ApiKeysApi.md#listApiKeyPrivileges) | **GET** /api/v1/apikeys/{key}/privileges | List privileges
[**listId4ns**](ApiKeysApi.md#listId4ns) | **GET** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | ID4ns of a privilege
[**removeApiKeyPrivilege**](ApiKeysApi.md#removeApiKeyPrivilege) | **DELETE** /api/v1/apikeys/{key}/privileges | Remove privilege
[**removeApiKeyPrivilegeForId4ns**](ApiKeysApi.md#removeApiKeyPrivilegeForId4ns) | **DELETE** /api/v1/apikeys/{key}/privileges/{privilege}/id4ns | Remove id4ns of a privilege
[**updateApiKey**](ApiKeysApi.md#updateApiKey) | **PUT** /api/v1/apikeys/{key} | Update API keys


# **addApiKeyPrivilege**
> addApiKeyPrivilege($add_api_key_privilege_request, $key)

Add privilege

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_api_key_privilege_request = new \Swagger\Client\Model\AddApiKeyPrivilegeRequest(); // \Swagger\Client\Model\AddApiKeyPrivilegeRequest | addApiKeyPrivilegeRequest
$key = "key_example"; // string | key

try {
    $apiInstance->addApiKeyPrivilege($add_api_key_privilege_request, $key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->addApiKeyPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_api_key_privilege_request** | [**\Swagger\Client\Model\AddApiKeyPrivilegeRequest**](../Model/AddApiKeyPrivilegeRequest.md)| addApiKeyPrivilegeRequest |
 **key** | **string**| key |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addApiKeyPrivilegeForId4ns**
> addApiKeyPrivilegeForId4ns($id4ns, $key, $privilege)

Add ID4ns of a privilege

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4ns = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | id4ns
$key = "key_example"; // string | key
$privilege = "privilege_example"; // string | privilege

try {
    $apiInstance->addApiKeyPrivilegeForId4ns($id4ns, $key, $privilege);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->addApiKeyPrivilegeForId4ns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4ns** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| id4ns |
 **key** | **string**| key |
 **privilege** | **string**| privilege |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewApiKey**
> \Swagger\Client\Model\ApiKeyPresentation createNewApiKey($creation_request)

Create API key

Creation of a new API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creation_request = new \Swagger\Client\Model\ApiKeyCreationRequest(); // \Swagger\Client\Model\ApiKeyCreationRequest | API key to be created.

try {
    $result = $apiInstance->createNewApiKey($creation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createNewApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creation_request** | [**\Swagger\Client\Model\ApiKeyCreationRequest**](../Model/ApiKeyCreationRequest.md)| API key to be created. |

### Return type

[**\Swagger\Client\Model\ApiKeyPresentation**](../Model/ApiKeyPresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApiKey**
> deleteApiKey($key)

Delete API key

Deletion of an API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The API key to delete.

try {
    $apiInstance->deleteApiKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key to delete. |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiKey**
> \Swagger\Client\Model\ApiKeyPresentation getApiKey($key)

Show API key

Showing the details of an API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The API key to show.

try {
    $result = $apiInstance->getApiKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key to show. |

### Return type

[**\Swagger\Client\Model\ApiKeyPresentation**](../Model/ApiKeyPresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllApiKeyPrivileges**
> \Swagger\Client\Model\ApiKeyPrivilegeInfoResponse listAllApiKeyPrivileges($id4n_concerning, $limit, $offset)

List all privileges

Listing all possible API key privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n_concerning = true; // bool | id4nConcerning
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->listAllApiKeyPrivileges($id4n_concerning, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listAllApiKeyPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n_concerning** | **bool**| id4nConcerning | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPrivilegeInfoResponse**](../Model/ApiKeyPrivilegeInfoResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllApiKeysOfOrganization**
> \Swagger\Client\Model\PaginatedApiKeyResponse listAllApiKeysOfOrganization($limit, $offset, $organization_id)

Find API key by organization

Finding all API key assigned to the specified organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$organization_id = "organization_id_example"; // string | The namespace of the organization to search in.

try {
    $result = $apiInstance->listAllApiKeysOfOrganization($limit, $offset, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listAllApiKeysOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **organization_id** | **string**| The namespace of the organization to search in. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedApiKeyResponse**](../Model/PaginatedApiKeyResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApiKeyPrivileges**
> \Swagger\Client\Model\ApiKeyPrivilegePaginatedResponse listApiKeyPrivileges($key, $limit, $offset)

List privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | key
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->listApiKeyPrivileges($key, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listApiKeyPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPrivilegePaginatedResponse**](../Model/ApiKeyPrivilegePaginatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listId4ns**
> \Swagger\Client\Model\Id4nPresentationPaginatedResponse listId4ns($key, $privilege, $limit, $offset)

ID4ns of a privilege

Listing ID4ns of a id4n concerning privilege

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | key
$privilege = "privilege_example"; // string | privilege
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->listId4ns($key, $privilege, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listId4ns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **privilege** | **string**| privilege |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\Id4nPresentationPaginatedResponse**](../Model/Id4nPresentationPaginatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeApiKeyPrivilege**
> removeApiKeyPrivilege($key, $remove_api_key_privilege_request)

Remove privilege

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | key
$remove_api_key_privilege_request = new \Swagger\Client\Model\RemoveApiKeyPrivilegeRequest(); // \Swagger\Client\Model\RemoveApiKeyPrivilegeRequest | removeApiKeyPrivilegeRequest

try {
    $apiInstance->removeApiKeyPrivilege($key, $remove_api_key_privilege_request);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->removeApiKeyPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **remove_api_key_privilege_request** | [**\Swagger\Client\Model\RemoveApiKeyPrivilegeRequest**](../Model/RemoveApiKeyPrivilegeRequest.md)| removeApiKeyPrivilegeRequest |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeApiKeyPrivilegeForId4ns**
> removeApiKeyPrivilegeForId4ns($id4ns, $key, $privilege)

Remove id4ns of a privilege

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4ns = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | id4ns
$key = "key_example"; // string | key
$privilege = "privilege_example"; // string | privilege

try {
    $apiInstance->removeApiKeyPrivilegeForId4ns($id4ns, $key, $privilege);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->removeApiKeyPrivilegeForId4ns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4ns** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| id4ns |
 **key** | **string**| key |
 **privilege** | **string**| privilege |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApiKey**
> updateApiKey($api_key_change, $key)

Update API keys

API keys can be updated with new labels, and be activated and deactivated. The secret or UUID cannot be changed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_change = new \Swagger\Client\Model\ApiKeyChangeRequest(); // \Swagger\Client\Model\ApiKeyChangeRequest | The new values to apply.
$key = "key_example"; // string | The API key to be updated.

try {
    $apiInstance->updateApiKey($api_key_change, $key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_change** | [**\Swagger\Client\Model\ApiKeyChangeRequest**](../Model/ApiKeyChangeRequest.md)| The new values to apply. |
 **key** | **string**| The API key to be updated. |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

