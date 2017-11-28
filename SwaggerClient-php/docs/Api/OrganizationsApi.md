# Swagger\Client\OrganizationsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMultipleUserRolesUsingPOST**](OrganizationsApi.md#addMultipleUserRolesUsingPOST) | **POST** /api/v1/organization/{organizationId}/users/role | addMultipleUserRoles
[**addUserRolesUsingPOST**](OrganizationsApi.md#addUserRolesUsingPOST) | **POST** /api/v1/organization/{organizationId}/user/{username}/roles | addUserRoles
[**createOrganzationUsingPOST**](OrganizationsApi.md#createOrganzationUsingPOST) | **POST** /api/v1/organization | createOrganzation
[**deleteOrganizationLogoUsingDELETE**](OrganizationsApi.md#deleteOrganizationLogoUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/logo | deleteOrganizationLogo
[**deleteOrganizationUsingDELETE**](OrganizationsApi.md#deleteOrganizationUsingDELETE) | **DELETE** /api/v1/organization/{organizationId} | deleteOrganization
[**getAddressUsingGET**](OrganizationsApi.md#getAddressUsingGET) | **GET** /api/v1/organization/{organizationId}/addresses/default | getAddress
[**getAllUsingGET**](OrganizationsApi.md#getAllUsingGET) | **GET** /api/v1/organization/{organizationId}/collections | getAll
[**getBillingAddressUsingGET**](OrganizationsApi.md#getBillingAddressUsingGET) | **GET** /api/v1/organization/{organizationId}/addresses/billing | getBillingAddress
[**getMultipleUserRolesUsingGET**](OrganizationsApi.md#getMultipleUserRolesUsingGET) | **GET** /api/v1/organization/{organizationId}/users/role | getMultipleUserRoles
[**getOrganizationUsingGET**](OrganizationsApi.md#getOrganizationUsingGET) | **GET** /api/v1/organization/{organizationId} | getOrganization
[**getOrganizationsUsingGET**](OrganizationsApi.md#getOrganizationsUsingGET) | **GET** /api/v1/user/organizations | getOrganizations
[**getUserRolesByUsernameUsingGET**](OrganizationsApi.md#getUserRolesByUsernameUsingGET) | **GET** /api/v1/organization/{organizationId}/user/{username}/roles | getUserRolesByUsername
[**getUsersUsingGET**](OrganizationsApi.md#getUsersUsingGET) | **GET** /api/v1/organization/{organizationId}/users | getUsers
[**removeBillingAddressUsingDELETE**](OrganizationsApi.md#removeBillingAddressUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/addresses/billing | removeBillingAddress
[**removeMultipleUserRolesUsingDELETE**](OrganizationsApi.md#removeMultipleUserRolesUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/users/role | removeMultipleUserRoles
[**removeUserRolesUsingDELETE**](OrganizationsApi.md#removeUserRolesUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/user/{username}/roles | removeUserRoles
[**setOrganizationLogoUsingPOST**](OrganizationsApi.md#setOrganizationLogoUsingPOST) | **POST** /api/v1/organization/{organizationId}/logo | setOrganizationLogo
[**storeAddressUsingPOST**](OrganizationsApi.md#storeAddressUsingPOST) | **POST** /api/v1/organization/{organizationId}/addresses/default | storeAddress
[**storeBillingAddressUsingPOST**](OrganizationsApi.md#storeBillingAddressUsingPOST) | **POST** /api/v1/organization/{organizationId}/addresses/billing | storeBillingAddress
[**updateOrganizationUsingPUT**](OrganizationsApi.md#updateOrganizationUsingPUT) | **PUT** /api/v1/organization/{organizationId} | updateOrganization


# **addMultipleUserRolesUsingPOST**
> \Swagger\Client\Model\ResponseEntity addMultipleUserRolesUsingPOST($organization_id, $change_user_role_request, $authorization, $accept_language)

addMultipleUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$change_user_role_request = new \Swagger\Client\Model\ChangeUserRoleRequest(); // \Swagger\Client\Model\ChangeUserRoleRequest | changeUserRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addMultipleUserRolesUsingPOST($organization_id, $change_user_role_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->addMultipleUserRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **change_user_role_request** | [**\Swagger\Client\Model\ChangeUserRoleRequest**](../Model/ChangeUserRoleRequest.md)| changeUserRoleRequest |
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

# **addUserRolesUsingPOST**
> \Swagger\Client\Model\ResponseEntity addUserRolesUsingPOST($organization_id, $username, $change_role_request, $authorization, $accept_language, $offset, $limit)

addUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$username = "username_example"; // string | username
$change_role_request = new \Swagger\Client\Model\ChangeRoleRequest(); // \Swagger\Client\Model\ChangeRoleRequest | changeRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->addUserRolesUsingPOST($organization_id, $username, $change_role_request, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->addUserRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **username** | **string**| username |
 **change_role_request** | [**\Swagger\Client\Model\ChangeRoleRequest**](../Model/ChangeRoleRequest.md)| changeRoleRequest |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrganzationUsingPOST**
> \Swagger\Client\Model\ResponseEntity createOrganzationUsingPOST($organization, $authorization, $accept_language)

createOrganzation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | organization
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createOrganzationUsingPOST($organization, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganzationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)| organization |
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

# **deleteOrganizationLogoUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteOrganizationLogoUsingDELETE($organization_id, $authorization, $accept_language)

deleteOrganizationLogo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteOrganizationLogoUsingDELETE($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationLogoUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
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

# **deleteOrganizationUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteOrganizationUsingDELETE($organization_id, $authorization, $accept_language)

deleteOrganization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteOrganizationUsingDELETE($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
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

# **getAddressUsingGET**
> \Swagger\Client\Model\OrganizationAddress getAddressUsingGET($organization_id, $authorization, $accept_language)

getAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getAddressUsingGET($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getAddressUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllUsingGET**
> \Swagger\Client\Model\PaginatedResponseGuidCollection_ getAllUsingGET($organization_id, $authorization, $accept_language, $offset, $limit, $type)

getAll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 
$type = "type_example"; // string | type

try {
    $result = $api_instance->getAllUsingGET($organization_id, $authorization, $accept_language, $offset, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getAllUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **type** | **string**| type | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseGuidCollection_**](../Model/PaginatedResponseGuidCollection_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAddressUsingGET**
> \Swagger\Client\Model\OrganizationAddress getBillingAddressUsingGET($organization_id, $authorization, $accept_language)

getBillingAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getBillingAddressUsingGET($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getBillingAddressUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultipleUserRolesUsingGET**
> \Swagger\Client\Model\PaginatedUserRolesResponse getMultipleUserRolesUsingGET($organization_id, $authorization, $accept_language, $offset, $limit)

getMultipleUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getMultipleUserRolesUsingGET($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getMultipleUserRolesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedUserRolesResponse**](../Model/PaginatedUserRolesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationUsingGET**
> \Swagger\Client\Model\Organization getOrganizationUsingGET($organization_id, $authorization, $accept_language)

getOrganization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->getOrganizationUsingGET($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsUsingGET**
> \Swagger\Client\Model\PaginatedResponseOrganization_ getOrganizationsUsingGET($authorization, $accept_language, $role, $offset, $limit)

getOrganizations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$role = "role_example"; // string | role
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getOrganizationsUsingGET($authorization, $accept_language, $role, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **role** | **string**| role | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseOrganization_**](../Model/PaginatedResponseOrganization_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRolesByUsernameUsingGET**
> \Swagger\Client\Model\UserRoles getUserRolesByUsernameUsingGET($organization_id, $username, $authorization, $accept_language, $offset, $limit)

getUserRolesByUsername

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$username = "username_example"; // string | username
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getUserRolesByUsernameUsingGET($organization_id, $username, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getUserRolesByUsernameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **username** | **string**| username |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\UserRoles**](../Model/UserRoles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersUsingGET**
> \Swagger\Client\Model\PaginatedUserPresentationResponse getUsersUsingGET($organization_id, $authorization, $accept_language, $offset, $limit)

getUsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getUsersUsingGET($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedUserPresentationResponse**](../Model/PaginatedUserPresentationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeBillingAddressUsingDELETE**
> \Swagger\Client\Model\ResponseEntity removeBillingAddressUsingDELETE($organization_id, $authorization, $accept_language)

removeBillingAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeBillingAddressUsingDELETE($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->removeBillingAddressUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
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

# **removeMultipleUserRolesUsingDELETE**
> \Swagger\Client\Model\ResponseEntity removeMultipleUserRolesUsingDELETE($organization_id, $change_user_role_request, $authorization, $accept_language)

removeMultipleUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$change_user_role_request = new \Swagger\Client\Model\ChangeUserRoleRequest(); // \Swagger\Client\Model\ChangeUserRoleRequest | changeUserRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeMultipleUserRolesUsingDELETE($organization_id, $change_user_role_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->removeMultipleUserRolesUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **change_user_role_request** | [**\Swagger\Client\Model\ChangeUserRoleRequest**](../Model/ChangeUserRoleRequest.md)| changeUserRoleRequest |
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

# **removeUserRolesUsingDELETE**
> \Swagger\Client\Model\ResponseEntity removeUserRolesUsingDELETE($organization_id, $username, $change_role_request, $authorization, $accept_language, $offset, $limit)

removeUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$username = "username_example"; // string | username
$change_role_request = new \Swagger\Client\Model\ChangeRoleRequest(); // \Swagger\Client\Model\ChangeRoleRequest | changeRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->removeUserRolesUsingDELETE($organization_id, $username, $change_role_request, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->removeUserRolesUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **username** | **string**| username |
 **change_role_request** | [**\Swagger\Client\Model\ChangeRoleRequest**](../Model/ChangeRoleRequest.md)| changeRoleRequest |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setOrganizationLogoUsingPOST**
> \Swagger\Client\Model\ResponseEntity setOrganizationLogoUsingPOST($organization_id, $file, $authorization, $accept_language)

setOrganizationLogo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$file = "/path/to/file.txt"; // \SplFileObject | file
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->setOrganizationLogoUsingPOST($organization_id, $file, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->setOrganizationLogoUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **file** | **\SplFileObject**| file |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeAddressUsingPOST**
> \Swagger\Client\Model\ResponseEntity storeAddressUsingPOST($organization_id, $address_resource, $authorization, $accept_language)

storeAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$address_resource = new \Swagger\Client\Model\OrganizationAddress(); // \Swagger\Client\Model\OrganizationAddress | addressResource
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->storeAddressUsingPOST($organization_id, $address_resource, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->storeAddressUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **address_resource** | [**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)| addressResource |
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

# **storeBillingAddressUsingPOST**
> \Swagger\Client\Model\ResponseEntity storeBillingAddressUsingPOST($organization_id, $address_resource, $authorization, $accept_language)

storeBillingAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$address_resource = new \Swagger\Client\Model\OrganizationAddress(); // \Swagger\Client\Model\OrganizationAddress | addressResource
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->storeBillingAddressUsingPOST($organization_id, $address_resource, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->storeBillingAddressUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **address_resource** | [**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)| addressResource |
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

# **updateOrganizationUsingPUT**
> \Swagger\Client\Model\Organization updateOrganizationUsingPUT($organization_id, $organization, $authorization, $accept_language)

updateOrganization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 789; // int | organizationId
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | organization
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateOrganizationUsingPUT($organization_id, $organization, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)| organization |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

