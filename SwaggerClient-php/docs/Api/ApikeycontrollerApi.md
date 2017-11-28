# Swagger\Client\ApikeycontrollerApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUsingPOST**](ApikeycontrollerApi.md#createUsingPOST) | **POST** /api/v1/apikeys | create
[**listUsingGET**](ApikeycontrollerApi.md#listUsingGET) | **GET** /api/v1/apikeys | list
[**removeKeyUsingDELETE**](ApikeycontrollerApi.md#removeKeyUsingDELETE) | **DELETE** /api/v1/apikeys/{key} | removeKey
[**setKeyActivationStatusUsingPUT**](ApikeycontrollerApi.md#setKeyActivationStatusUsingPUT) | **PUT** /api/v1/apikeys/{key} | setKeyActivationStatus
[**showKeyUsingGET**](ApikeycontrollerApi.md#showKeyUsingGET) | **GET** /api/v1/apikeys/{key} | showKey


# **createUsingPOST**
> \Swagger\Client\Model\ApiKeyPresentation createUsingPOST($creation_request, $authorization, $accept_language)

create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeycontrollerApi();
$creation_request = new \Swagger\Client\Model\ApiKeyCreationRequest(); // \Swagger\Client\Model\ApiKeyCreationRequest | creationRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createUsingPOST($creation_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeycontrollerApi->createUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creation_request** | [**\Swagger\Client\Model\ApiKeyCreationRequest**](../Model/ApiKeyCreationRequest.md)| creationRequest |
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

# **listUsingGET**
> \Swagger\Client\Model\PaginatedApiKeyResponse listUsingGET($authorization, $accept_language, $organization_id, $offset, $limit)

list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeycontrollerApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$organization_id = 789; // int | organizationId
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->listUsingGET($authorization, $accept_language, $organization_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeycontrollerApi->listUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **organization_id** | **int**| organizationId | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedApiKeyResponse**](../Model/PaginatedApiKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeKeyUsingDELETE**
> \Swagger\Client\Model\ResponseEntity removeKeyUsingDELETE($key, $authorization, $accept_language)

removeKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeycontrollerApi();
$key = "key_example"; // string | key
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeKeyUsingDELETE($key, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeycontrollerApi->removeKeyUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setKeyActivationStatusUsingPUT**
> \Swagger\Client\Model\ResponseEntity setKeyActivationStatusUsingPUT($key, $api_key_status, $authorization, $accept_language)

setKeyActivationStatus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeycontrollerApi();
$key = "key_example"; // string | key
$api_key_status = new \Swagger\Client\Model\ApiKeyStatus(); // \Swagger\Client\Model\ApiKeyStatus | apiKeyStatus
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->setKeyActivationStatusUsingPUT($key, $api_key_status, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeycontrollerApi->setKeyActivationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **api_key_status** | [**\Swagger\Client\Model\ApiKeyStatus**](../Model/ApiKeyStatus.md)| apiKeyStatus |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showKeyUsingGET**
> \Swagger\Client\Model\ApiKeyPresentation showKeyUsingGET($key, $authorization, $accept_language)

showKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApikeycontrollerApi();
$key = "key_example"; // string | key
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->showKeyUsingGET($key, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeycontrollerApi->showKeyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
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

