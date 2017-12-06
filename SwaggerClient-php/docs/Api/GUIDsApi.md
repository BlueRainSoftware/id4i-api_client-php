# Swagger\Client\GUIDsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGuid**](GUIDsApi.md#createGuid) | **POST** /api/v1/guids | Create GUID(s)
[**getGuid**](GUIDsApi.md#getGuid) | **GET** /api/v1/guids/{id4n} | Retrieve GUID information
[**updateGuid**](GUIDsApi.md#updateGuid) | **PUT** /api/v1/guids/{id4n} | Change GUID information.


# **createGuid**
> \Swagger\Client\Model\ListOfId4ns createGuid($create_guid_info, $authorization, $accept_language)

Create GUID(s)

Creating one or more GUIDs with a specified length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$create_guid_info = new \Swagger\Client\Model\CreateGuidRequest(); // \Swagger\Client\Model\CreateGuidRequest | createGUIDInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createGuid($create_guid_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->createGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_guid_info** | [**\Swagger\Client\Model\CreateGuidRequest**](../Model/CreateGuidRequest.md)| createGUIDInfo |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuid**
> \Swagger\Client\Model\Guid getGuid($id4n, $authorization, $accept_language)

Retrieve GUID information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID number
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getGuid($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->getGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Guid**](../Model/Guid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGuid**
> \Swagger\Client\Model\ResponseEntity updateGuid($id4n, $request, $authorization, $accept_language)

Change GUID information.

Allows ownership transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GUIDsApi();
$id4n = "id4n_example"; // string | The GUID number
$request = new \Swagger\Client\Model\Guid(); // \Swagger\Client\Model\Guid | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateGuid($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GUIDsApi->updateGuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| The GUID number |
 **request** | [**\Swagger\Client\Model\Guid**](../Model/Guid.md)| request |
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

