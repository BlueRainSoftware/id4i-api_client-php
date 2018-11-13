# Swagger\Client\OrganizationsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPartnerOrganization**](OrganizationsApi.md#addPartnerOrganization) | **PUT** /api/v1/organizations/{organizationId}/partner | Add partner
[**addUserRoles**](OrganizationsApi.md#addUserRoles) | **POST** /api/v1/organizations/{organizationId}/users/{username}/roles | Add role(s) to user
[**createOrganization**](OrganizationsApi.md#createOrganization) | **POST** /api/v1/organizations | Create organization
[**deleteOrganization**](OrganizationsApi.md#deleteOrganization) | **DELETE** /api/v1/organizations/{organizationId} | Delete organization
[**deleteOrganizationBillingAddress**](OrganizationsApi.md#deleteOrganizationBillingAddress) | **DELETE** /api/v1/organizations/{organizationId}/addresses/billing | Remove billing address
[**deleteOrganizationLogo**](OrganizationsApi.md#deleteOrganizationLogo) | **DELETE** /api/v1/organizations/{organizationId}/logo | Delete organization logo
[**findOrganization**](OrganizationsApi.md#findOrganization) | **GET** /api/v1/organizations/{organizationId} | Find organization by id/namespace
[**findOrganizationAddress**](OrganizationsApi.md#findOrganizationAddress) | **GET** /api/v1/organizations/{organizationId}/addresses/default | Retrieve address
[**findOrganizationBillingAddress**](OrganizationsApi.md#findOrganizationBillingAddress) | **GET** /api/v1/organizations/{organizationId}/addresses/billing | Retrieve billing address
[**getAllCollectionsOfOrganization**](OrganizationsApi.md#getAllCollectionsOfOrganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
[**getAllOrganizationRoles**](OrganizationsApi.md#getAllOrganizationRoles) | **GET** /api/v1/organizations/{organizationId}/roles | List users and their roles
[**getOrganizationPrivileges**](OrganizationsApi.md#getOrganizationPrivileges) | **GET** /api/v1/organizations/{organizationId}/privileges | List my privileges
[**getOrganizationsOfUser**](OrganizationsApi.md#getOrganizationsOfUser) | **GET** /api/v1/user/organizations | Retrieve organizations of user
[**getPartnerOrganizations**](OrganizationsApi.md#getPartnerOrganizations) | **GET** /api/v1/organizations/{organizationId}/partner | Get partners of an organization
[**getUserRoles**](OrganizationsApi.md#getUserRoles) | **GET** /api/v1/organizations/{organizationId}/users/{username}/roles | Get user roles by username
[**getUsersOfOrganization**](OrganizationsApi.md#getUsersOfOrganization) | **GET** /api/v1/organizations/{organizationId}/users | Find users in organization
[**inviteUsers**](OrganizationsApi.md#inviteUsers) | **POST** /api/v1/organizations/{organizationId}/users/invite | Invite Users
[**listCountries**](OrganizationsApi.md#listCountries) | **GET** /api/v1/countries | List countries
[**removePartnerOrganization**](OrganizationsApi.md#removePartnerOrganization) | **DELETE** /api/v1/organizations/{organizationId}/partner | Remove partner
[**removeUserRoles**](OrganizationsApi.md#removeUserRoles) | **DELETE** /api/v1/organizations/{organizationId}/users/{username}/roles | Remove role(s) from user
[**setOrganizationLogo**](OrganizationsApi.md#setOrganizationLogo) | **POST** /api/v1/organizations/{organizationId}/logo | Update organization logo
[**updateOrganization**](OrganizationsApi.md#updateOrganization) | **PUT** /api/v1/organizations/{organizationId} | Update organization
[**updateOrganizationAddress**](OrganizationsApi.md#updateOrganizationAddress) | **PUT** /api/v1/organizations/{organizationId}/addresses/default | Store address
[**updateOrganizationBillingAddress**](OrganizationsApi.md#updateOrganizationBillingAddress) | **PUT** /api/v1/organizations/{organizationId}/addresses/billing | Store billing address


# **addPartnerOrganization**
> addPartnerOrganization($organization_id, $request)

Add partner

Adding a partner organization. If the given organization is already a partner the result will be state 200 too.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$request = new \Swagger\Client\Model\AddPartnerRequest(); // \Swagger\Client\Model\AddPartnerRequest | request

try {
    $apiInstance->addPartnerOrganization($organization_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->addPartnerOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |
 **request** | [**\Swagger\Client\Model\AddPartnerRequest**](../Model/AddPartnerRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUserRoles**
> addUserRoles($change_role_request, $organization_id, $username)

Add role(s) to user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_role_request = new \Swagger\Client\Model\ChangeRoleRequest(); // \Swagger\Client\Model\ChangeRoleRequest | changeRoleRequest
$organization_id = "organization_id_example"; // string | The namespace of the organization
$username = "username_example"; // string | username

try {
    $apiInstance->addUserRoles($change_role_request, $organization_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->addUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_role_request** | [**\Swagger\Client\Model\ChangeRoleRequest**](../Model/ChangeRoleRequest.md)| changeRoleRequest |
 **organization_id** | **string**| The namespace of the organization |
 **username** | **string**| username |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrganization**
> \Swagger\Client\Model\Organization createOrganization($organization)

Create organization

Creating a new organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | Organization to be created

try {
    $result = $apiInstance->createOrganization($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)| Organization to be created |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganization**
> deleteOrganization($organization_id)

Delete organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization to be deleted.

try {
    $apiInstance->deleteOrganization($organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization to be deleted. |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganizationBillingAddress**
> deleteOrganizationBillingAddress($organization_id)

Remove billing address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId

try {
    $apiInstance->deleteOrganizationBillingAddress($organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganizationLogo**
> deleteOrganizationLogo($organization_id)

Delete organization logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization where the logo should be deleted.

try {
    $apiInstance->deleteOrganizationLogo($organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization where the logo should be deleted. |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganization**
> \Swagger\Client\Model\Organization findOrganization($organization_id)

Find organization by id/namespace

Returns a single organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization to be retrieved.

try {
    $result = $apiInstance->findOrganization($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->findOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization to be retrieved. |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationAddress**
> \Swagger\Client\Model\OrganizationAddress findOrganizationAddress($organization_id)

Retrieve address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->findOrganizationAddress($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->findOrganizationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationBillingAddress**
> \Swagger\Client\Model\OrganizationAddress findOrganizationBillingAddress($organization_id)

Retrieve billing address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->findOrganizationBillingAddress($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->findOrganizationBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCollectionsOfOrganization**
> \Swagger\Client\Model\PaginatedGuidCollection getAllCollectionsOfOrganization($organization_id, $label, $label_prefix, $limit, $offset, $type)

Get collections of organization

Retrieving all collections of an organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$label = "label_example"; // string | Filter by this label
$label_prefix = "label_prefix_example"; // string | Filter by this label prefix
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$type = "type_example"; // string | Filter by this type

try {
    $result = $apiInstance->getAllCollectionsOfOrganization($organization_id, $label, $label_prefix, $limit, $offset, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getAllCollectionsOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |
 **label** | **string**| Filter by this label | [optional]
 **label_prefix** | **string**| Filter by this label prefix | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **type** | **string**| Filter by this type | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidCollection**](../Model/PaginatedGuidCollection.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOrganizationRoles**
> \Swagger\Client\Model\PaginatedUserRolesResponse getAllOrganizationRoles($organization_id, $limit, $offset)

List users and their roles

Listing users and their roles in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->getAllOrganizationRoles($organization_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getAllOrganizationRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedUserRolesResponse**](../Model/PaginatedUserRolesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationPrivileges**
> string[] getOrganizationPrivileges($organization_id)

List my privileges

Listing all privileges of the current user/APIKey of the specified organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization

try {
    $result = $apiInstance->getOrganizationPrivileges($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsOfUser**
> \Swagger\Client\Model\PaginatedOrganizationResponse getOrganizationsOfUser($limit, $offset, $role)

Retrieve organizations of user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element
$role = "role_example"; // string | role

try {
    $result = $apiInstance->getOrganizationsOfUser($limit, $offset, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationsOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **role** | **string**| role | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedOrganizationResponse**](../Model/PaginatedOrganizationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerOrganizations**
> \Swagger\Client\Model\PaginatedResponseOfPartnerOrganization getPartnerOrganizations($organization_id, $limit, $offset)

Get partners of an organization

Listing partners in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization to query partner organizations
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->getPartnerOrganizations($organization_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getPartnerOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization to query partner organizations |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseOfPartnerOrganization**](../Model/PaginatedResponseOfPartnerOrganization.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoles**
> \Swagger\Client\Model\PaginatedStringResponse getUserRoles($organization_id, $username, $limit, $offset)

Get user roles by username

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$username = "username_example"; // string | username
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->getUserRoles($organization_id, $username, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |
 **username** | **string**| username |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedStringResponse**](../Model/PaginatedStringResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersOfOrganization**
> \Swagger\Client\Model\PaginatedUserPresentationResponse getUsersOfOrganization($organization_id, $limit, $offset)

Find users in organization

Finding users in the specified organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | organizationId
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->getUsersOfOrganization($organization_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getUsersOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| organizationId |
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedUserPresentationResponse**](../Model/PaginatedUserPresentationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteUsers**
> inviteUsers($invitation_list, $organization_id)

Invite Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_list = new \Swagger\Client\Model\OrganizationUserInvitationListRequest(); // \Swagger\Client\Model\OrganizationUserInvitationListRequest | invitationList
$organization_id = "organization_id_example"; // string | The namespace of the organization where users should be invited

try {
    $apiInstance->inviteUsers($invitation_list, $organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->inviteUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_list** | [**\Swagger\Client\Model\OrganizationUserInvitationListRequest**](../Model/OrganizationUserInvitationListRequest.md)| invitationList |
 **organization_id** | **string**| The namespace of the organization where users should be invited |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCountries**
> \Swagger\Client\Model\PaginatedCountryResponse listCountries($limit, $offset)

List countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | The maximum count of returned elements
$offset = 0; // int | Start with the n-th element

try {
    $result = $apiInstance->listCountries($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum count of returned elements | [optional]
 **offset** | **int**| Start with the n-th element | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedCountryResponse**](../Model/PaginatedCountryResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePartnerOrganization**
> removePartnerOrganization($organization_id, $request)

Remove partner

Removing a partner organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization
$request = new \Swagger\Client\Model\RemovePartnerRequest(); // \Swagger\Client\Model\RemovePartnerRequest | request

try {
    $apiInstance->removePartnerOrganization($organization_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->removePartnerOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization |
 **request** | [**\Swagger\Client\Model\RemovePartnerRequest**](../Model/RemovePartnerRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserRoles**
> removeUserRoles($change_role_request, $organization_id, $username)

Remove role(s) from user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_role_request = new \Swagger\Client\Model\ChangeRoleRequest(); // \Swagger\Client\Model\ChangeRoleRequest | changeRoleRequest
$organization_id = "organization_id_example"; // string | The namespace of the organization
$username = "username_example"; // string | username

try {
    $apiInstance->removeUserRoles($change_role_request, $organization_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->removeUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_role_request** | [**\Swagger\Client\Model\ChangeRoleRequest**](../Model/ChangeRoleRequest.md)| changeRoleRequest |
 **organization_id** | **string**| The namespace of the organization |
 **username** | **string**| username |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setOrganizationLogo**
> \Swagger\Client\Model\PublicImagePresentation setOrganizationLogo($file, $organization_id)

Update organization logo

Updating an organization logo using a multipart file upload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | An image containing the new logo.
$organization_id = "organization_id_example"; // string | The namespace of the organization where the logo should be updated.

try {
    $result = $apiInstance->setOrganizationLogo($file, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->setOrganizationLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| An image containing the new logo. |
 **organization_id** | **string**| The namespace of the organization where the logo should be updated. |

### Return type

[**\Swagger\Client\Model\PublicImagePresentation**](../Model/PublicImagePresentation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganization**
> \Swagger\Client\Model\Organization updateOrganization($organization_id, $organization_update)

Update organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace of the organization to be updated.
$organization_update = new \Swagger\Client\Model\OrganizationUpdate(); // \Swagger\Client\Model\OrganizationUpdate | Updated organization object

try {
    $result = $apiInstance->updateOrganization($organization_id, $organization_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace of the organization to be updated. |
 **organization_update** | [**\Swagger\Client\Model\OrganizationUpdate**](../Model/OrganizationUpdate.md)| Updated organization object |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganizationAddress**
> \Swagger\Client\Model\OrganizationAddress updateOrganizationAddress($address_resource, $organization_id)

Store address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_resource = new \Swagger\Client\Model\OrganizationAddress(); // \Swagger\Client\Model\OrganizationAddress | addressResource
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->updateOrganizationAddress($address_resource, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_resource** | [**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)| addressResource |
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganizationBillingAddress**
> \Swagger\Client\Model\OrganizationAddress updateOrganizationBillingAddress($address_resource, $organization_id)

Store billing address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_resource = new \Swagger\Client\Model\OrganizationAddress(); // \Swagger\Client\Model\OrganizationAddress | addressResource
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->updateOrganizationBillingAddress($address_resource, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_resource** | [**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)| addressResource |
 **organization_id** | **string**| organizationId |

### Return type

[**\Swagger\Client\Model\OrganizationAddress**](../Model/OrganizationAddress.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

