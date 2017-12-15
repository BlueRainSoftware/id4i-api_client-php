# Swagger\Client\ApiKeysApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewApiKey**](ApiKeysApi.md#createNewApiKey) | **POST** /api/v1/apikeys | Create API key
[**deleteApiKey**](ApiKeysApi.md#deleteApiKey) | **DELETE** /api/v1/apikeys/{key} | Delete API key
[**getApiKey**](ApiKeysApi.md#getApiKey) | **GET** /api/v1/apikeys/{key} | Show API key
[**listAllApiKeysOfOrganization**](ApiKeysApi.md#listAllApiKeysOfOrganization) | **GET** /api/v1/apikeys | Find API key by organization
[**listApiKeyPrivileges**](ApiKeysApi.md#listApiKeyPrivileges) | **GET** /api/v1/apikeys/privileges | List API key privileges
[**updateApiKey**](ApiKeysApi.md#updateApiKey) | **PUT** /api/v1/apikeys/{key} | Update API keys


# **createNewApiKey**
> \Swagger\Client\Model\ApiKeyPresentation createNewApiKey($creation_request, $authorization, $accept_language)

Create API key

Creation of a new API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$creation_request = new \Swagger\Client\Model\ApiKeyCreationRequest(); // \Swagger\Client\Model\ApiKeyCreationRequest | API key to be created.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createNewApiKey($creation_request, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPresentation**](../Model/ApiKeyPresentation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApiKey**
> \Swagger\Client\Model\ApiError deleteApiKey($key, $authorization, $accept_language)

Delete API key

Deletion of an API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$key = "key_example"; // string | The API key to delete.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteApiKey($key, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key to delete. |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiError**](../Model/ApiError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiKey**
> \Swagger\Client\Model\ApiKeyPresentation getApiKey($key, $authorization, $accept_language)

Show API key

Showing the details of an API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$key = "key_example"; // string | The API key to show.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getApiKey($key, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPresentation**](../Model/ApiKeyPresentation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllApiKeysOfOrganization**
> \Swagger\Client\Model\PaginatedApiKeyResponse listAllApiKeysOfOrganization($organization_id, $authorization, $accept_language, $offset, $limit)

Find API key by organization

Finding all API key assigned to the specified organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$organization_id = 789; // int | The id of the organization to search in.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listAllApiKeysOfOrganization($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listAllApiKeysOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The id of the organization to search in. |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedApiKeyResponse**](../Model/PaginatedApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApiKeyPrivileges**
> \Swagger\Client\Model\ApiKeyPrivilegeResponse listApiKeyPrivileges($authorization, $accept_language, $id4n_concerning, $offset, $limit)

List API key privileges

Listing API key privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$id4n_concerning = true; // bool | id4nConcerning
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listApiKeyPrivileges($authorization, $accept_language, $id4n_concerning, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->listApiKeyPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **id4n_concerning** | **bool**| id4nConcerning | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyPrivilegeResponse**](../Model/ApiKeyPrivilegeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApiKey**
> \Swagger\Client\Model\ApiError updateApiKey($key, $api_key_change, $authorization, $accept_language)

Update API keys

API keys can be updated with new labels, and be activated and deactivated. The secret or UUID cannot be changed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApiKeysApi();
$key = "key_example"; // string | The API key to be updated.
$api_key_change = new \Swagger\Client\Model\ApiKeyChangeRequest(); // \Swagger\Client\Model\ApiKeyChangeRequest | The new values to apply.
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateApiKey($key, $api_key_change, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key to be updated. |
 **api_key_change** | [**\Swagger\Client\Model\ApiKeyChangeRequest**](../Model/ApiKeyChangeRequest.md)| The new values to apply. |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ApiError**](../Model/ApiError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

