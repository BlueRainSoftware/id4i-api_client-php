# Swagger\Client\AccountsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMultipleUserRolesUsingPOST**](AccountsApi.md#addMultipleUserRolesUsingPOST) | **POST** /api/v1/organization/{organizationId}/users/role | addMultipleUserRoles
[**addUserRolesUsingPOST**](AccountsApi.md#addUserRolesUsingPOST) | **POST** /api/v1/organization/{organizationId}/user/{username}/roles | addUserRoles
[**findUserByUsernameUsingGET**](AccountsApi.md#findUserByUsernameUsingGET) | **GET** /api/v1/users/{username} | findUserByUsername
[**getMultipleUserRolesUsingGET**](AccountsApi.md#getMultipleUserRolesUsingGET) | **GET** /api/v1/organization/{organizationId}/users/role | getMultipleUserRoles
[**getOrganizationsUsingGET**](AccountsApi.md#getOrganizationsUsingGET) | **GET** /api/v1/user/organizations | getOrganizations
[**getUserRolesByUsernameUsingGET**](AccountsApi.md#getUserRolesByUsernameUsingGET) | **GET** /api/v1/organization/{organizationId}/user/{username}/roles | getUserRolesByUsername
[**getUsersUsingGET**](AccountsApi.md#getUsersUsingGET) | **GET** /api/v1/organization/{organizationId}/users | getUsers
[**listUsingGET2**](AccountsApi.md#listUsingGET2) | **GET** /api/v1/roles | list
[**login**](AccountsApi.md#login) | **POST** /login | 
[**registerUserUsingPOST**](AccountsApi.md#registerUserUsingPOST) | **POST** /account/registration | registerUser
[**removeMultipleUserRolesUsingDELETE**](AccountsApi.md#removeMultipleUserRolesUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/users/role | removeMultipleUserRoles
[**removeUserRolesUsingDELETE**](AccountsApi.md#removeUserRolesUsingDELETE) | **DELETE** /api/v1/organization/{organizationId}/user/{username}/roles | removeUserRoles
[**requestPasswordResetUsingPOST**](AccountsApi.md#requestPasswordResetUsingPOST) | **POST** /account/password | requestPasswordReset
[**verifyPasswordResetUsingPUT**](AccountsApi.md#verifyPasswordResetUsingPUT) | **PUT** /account/password | verifyPasswordReset
[**verifyRegistrationUsingPOST**](AccountsApi.md#verifyRegistrationUsingPOST) | **POST** /account/verification | verifyRegistration


# **addMultipleUserRolesUsingPOST**
> \Swagger\Client\Model\ResponseEntity addMultipleUserRolesUsingPOST($organization_id, $change_user_role_request, $authorization, $accept_language)

addMultipleUserRoles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$organization_id = 789; // int | organizationId
$change_user_role_request = new \Swagger\Client\Model\ChangeUserRoleRequest(); // \Swagger\Client\Model\ChangeUserRoleRequest | changeUserRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addMultipleUserRolesUsingPOST($organization_id, $change_user_role_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addMultipleUserRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\AccountsApi();
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
    echo 'Exception when calling AccountsApi->addUserRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **findUserByUsernameUsingGET**
> \Swagger\Client\Model\UserPresentation findUserByUsernameUsingGET($username, $authorization, $accept_language)

findUserByUsername

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$username = "username_example"; // string | username
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findUserByUsernameUsingGET($username, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->findUserByUsernameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\UserPresentation**](../Model/UserPresentation.md)

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

$api_instance = new Swagger\Client\Api\AccountsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getMultipleUserRolesUsingGET($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getMultipleUserRolesUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getOrganizationsUsingGET**
> \Swagger\Client\Model\PaginatedResponseOrganization_ getOrganizationsUsingGET($authorization, $accept_language, $role, $offset, $limit)

getOrganizations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$role = "role_example"; // string | role
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getOrganizationsUsingGET($authorization, $accept_language, $role, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getOrganizationsUsingGET: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\AccountsApi();
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
    echo 'Exception when calling AccountsApi->getUserRolesByUsernameUsingGET: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\AccountsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->getUsersUsingGET($organization_id, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getUsersUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **listUsingGET2**
> \Swagger\Client\Model\RoleResponse listUsingGET2($authorization, $accept_language, $privilege, $offset, $limit)

list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$privilege = "privilege_example"; // string | privilege
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->listUsingGET2($authorization, $accept_language, $privilege, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **privilege** | **string**| privilege | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\RoleResponse**](../Model/RoleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> login($account_credentials)



ID4i API Login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$account_credentials = new \Swagger\Client\Model\AccountCredentials(); // \Swagger\Client\Model\AccountCredentials | 

try {
    $api_instance->login($account_credentials);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_credentials** | [**\Swagger\Client\Model\AccountCredentials**](../Model/AccountCredentials.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerUserUsingPOST**
> \Swagger\Client\Model\UserRegistrationResponse registerUserUsingPOST($user_registration, $authorization, $accept_language)

registerUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$user_registration = new \Swagger\Client\Model\UserRegistrationRequest(); // \Swagger\Client\Model\UserRegistrationRequest | userRegistration
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->registerUserUsingPOST($user_registration, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->registerUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_registration** | [**\Swagger\Client\Model\UserRegistrationRequest**](../Model/UserRegistrationRequest.md)| userRegistration |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\UserRegistrationResponse**](../Model/UserRegistrationResponse.md)

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

$api_instance = new Swagger\Client\Api\AccountsApi();
$organization_id = 789; // int | organizationId
$change_user_role_request = new \Swagger\Client\Model\ChangeUserRoleRequest(); // \Swagger\Client\Model\ChangeUserRoleRequest | changeUserRoleRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeMultipleUserRolesUsingDELETE($organization_id, $change_user_role_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->removeMultipleUserRolesUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\AccountsApi();
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
    echo 'Exception when calling AccountsApi->removeUserRolesUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **requestPasswordResetUsingPOST**
> \Swagger\Client\Model\SimpleMessageResponse requestPasswordResetUsingPOST($reset_request, $authorization, $accept_language)

requestPasswordReset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$reset_request = new \Swagger\Client\Model\PasswordResetRequest(); // \Swagger\Client\Model\PasswordResetRequest | resetRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->requestPasswordResetUsingPOST($reset_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->requestPasswordResetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_request** | [**\Swagger\Client\Model\PasswordResetRequest**](../Model/PasswordResetRequest.md)| resetRequest |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\SimpleMessageResponse**](../Model/SimpleMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyPasswordResetUsingPUT**
> \Swagger\Client\Model\SimpleMessageResponse verifyPasswordResetUsingPUT($verification_request, $authorization, $accept_language)

verifyPasswordReset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$verification_request = new \Swagger\Client\Model\PasswordResetVerificationRequest(); // \Swagger\Client\Model\PasswordResetVerificationRequest | verificationRequest
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->verifyPasswordResetUsingPUT($verification_request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->verifyPasswordResetUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verification_request** | [**\Swagger\Client\Model\PasswordResetVerificationRequest**](../Model/PasswordResetVerificationRequest.md)| verificationRequest |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\SimpleMessageResponse**](../Model/SimpleMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyRegistrationUsingPOST**
> \Swagger\Client\Model\ResponseEntity verifyRegistrationUsingPOST($token, $authorization, $accept_language)

verifyRegistration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$token = new \Swagger\Client\Model\RegistrationVerificationTokenPresentation(); // \Swagger\Client\Model\RegistrationVerificationTokenPresentation | token
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->verifyRegistrationUsingPOST($token, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->verifyRegistrationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**\Swagger\Client\Model\RegistrationVerificationTokenPresentation**](../Model/RegistrationVerificationTokenPresentation.md)| token |
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

