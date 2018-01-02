# Swagger\Client\CollectionsApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addElementToCollection**](CollectionsApi.md#addElementToCollection) | **PUT** /api/v1/collections/{id4n}/elements/{elementGuid} | Add element to collection
[**addElementToLabelledCollection**](CollectionsApi.md#addElementToLabelledCollection) | **PUT** /api/v1/collections/labelled/{collectionId4n}/elements/{elementGuid} | Add element to labelled collection
[**addElementToLogisticCollection**](CollectionsApi.md#addElementToLogisticCollection) | **PUT** /api/v1/collections/logistic/{collectionId4n}/elements/{guid} | Add element to logistic collection
[**addElementToRoutingCollection**](CollectionsApi.md#addElementToRoutingCollection) | **PUT** /api/v1/collections/routing/{collectionId4n}/elements/{guid} | Add element to routing collection
[**addElementsToCollection**](CollectionsApi.md#addElementsToCollection) | **PUT** /api/v1/collections/{id4n}/elements | Add elements to collection
[**addElementsToLabelledCollection**](CollectionsApi.md#addElementsToLabelledCollection) | **PUT** /api/v1/collections/labelled/{collectionId4n}/elements | Add elements to labelled collection
[**addElementsToLogisticCollection**](CollectionsApi.md#addElementsToLogisticCollection) | **PUT** /api/v1/collections/logistic/{collectionId4n}/elements | Add elements to logistic collection
[**addElementsToRoutingCollection**](CollectionsApi.md#addElementsToRoutingCollection) | **PUT** /api/v1/collections/routing/{collectionId4n}/elements | Add element to routing collection
[**createLabelledCollection**](CollectionsApi.md#createLabelledCollection) | **POST** /api/v1/collections/labelled | Create labelled collection
[**createLogisticCollection**](CollectionsApi.md#createLogisticCollection) | **POST** /api/v1/collections/logistic | Create logistic collection
[**createRoutingCollection**](CollectionsApi.md#createRoutingCollection) | **POST** /api/v1/collections/routing | Create routing collecton
[**deleteCollection**](CollectionsApi.md#deleteCollection) | **DELETE** /api/v1/collections/{id4n} | Delete collection
[**deleteLabelledCollection**](CollectionsApi.md#deleteLabelledCollection) | **DELETE** /api/v1/collections/labelled/{id4n} | Delete labelled collection
[**deleteLogisticCollection**](CollectionsApi.md#deleteLogisticCollection) | **DELETE** /api/v1/collections/logistic/{id4n} | Delete logistic collection
[**deleteRoutingCollection**](CollectionsApi.md#deleteRoutingCollection) | **DELETE** /api/v1/collections/routing/{id4n} | Delete routing collection
[**findCollection**](CollectionsApi.md#findCollection) | **GET** /api/v1/collections/{id4n} | Find collection
[**findLabelledCollection**](CollectionsApi.md#findLabelledCollection) | **GET** /api/v1/collections/labelled/{id4n} | Find labelled collection
[**findLogisticCollection**](CollectionsApi.md#findLogisticCollection) | **GET** /api/v1/collections/logistic/{id4n} | Find logistic collection
[**findRoutingCollection**](CollectionsApi.md#findRoutingCollection) | **GET** /api/v1/collections/routing/{id4n} | Find routing collection
[**getAllCollectionsOfOrganization**](CollectionsApi.md#getAllCollectionsOfOrganization) | **GET** /api/v1/organizations/{organizationId}/collections | Get collections of organization
[**listElementsOfCollection**](CollectionsApi.md#listElementsOfCollection) | **GET** /api/v1/collections/{id4n}/elements | List contents of the collection
[**listElementsOfLabelledCollection**](CollectionsApi.md#listElementsOfLabelledCollection) | **GET** /api/v1/collections/labelled/{id4n}/elements | List contents of the collection
[**listElementsOfLogisticCollection**](CollectionsApi.md#listElementsOfLogisticCollection) | **GET** /api/v1/collections/logistic/{id4n}/elements | List contents of the collection
[**listElementsOfRoutingCollection**](CollectionsApi.md#listElementsOfRoutingCollection) | **GET** /api/v1/collections/routing/{id4n}/elements | List contents of the collection
[**removeElementFromCollection**](CollectionsApi.md#removeElementFromCollection) | **DELETE** /api/v1/collections/{id4n}/elements/{elementGuid} | Remove element from collection
[**removeElementFromLabelledCollection**](CollectionsApi.md#removeElementFromLabelledCollection) | **DELETE** /api/v1/collections/labelled/{collectionId4n}/elements/{elementGuid} | Remove element from labelled collection
[**removeElementFromLogisticCollection**](CollectionsApi.md#removeElementFromLogisticCollection) | **DELETE** /api/v1/collections/logistic/{collectionId4n}/elements/{elementId4n} | Remove element from logistic collection
[**removeElementFromRoutingCollection**](CollectionsApi.md#removeElementFromRoutingCollection) | **DELETE** /api/v1/collections/routing/{collectionId4n}/elements/{guid} | Remove element from routing collection
[**removeElementsFromCollection**](CollectionsApi.md#removeElementsFromCollection) | **DELETE** /api/v1/collections/{id4n}/elements | Remove elements from collection
[**removeElementsFromLabelledCollection**](CollectionsApi.md#removeElementsFromLabelledCollection) | **DELETE** /api/v1/collections/labelled/{collectionId4n}/elements | Remove elements from labelled collection
[**removeElementsFromLogisticCollection**](CollectionsApi.md#removeElementsFromLogisticCollection) | **DELETE** /api/v1/collections/logistic/{collectionId4n}/elements | Remove elements from logistic collection
[**removeElementsFromRoutingCollection**](CollectionsApi.md#removeElementsFromRoutingCollection) | **DELETE** /api/v1/collections/routing/{collectionId4n}/elements | Remove elements from routing collection
[**updateCollection**](CollectionsApi.md#updateCollection) | **PUT** /api/v1/collections/{id4n} | Alter collection
[**updateLabelledCollection**](CollectionsApi.md#updateLabelledCollection) | **PUT** /api/v1/collections/labelled/{id4n} | Rename labelled collection
[**updateLogisticCollection**](CollectionsApi.md#updateLogisticCollection) | **PUT** /api/v1/collections/logistic/{id4n} | Update logistic collection
[**updateRoutingCollection**](CollectionsApi.md#updateRoutingCollection) | **PUT** /api/v1/collections/routing/{id4n} | Update routing collection


# **addElementToCollection**
> \Swagger\Client\Model\ApiError addElementToCollection($id4n, $element_guid, $authorization, $accept_language)

Add element to collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementToCollection($id4n, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementToCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **element_guid** | **string**| elementGuid |
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

# **addElementToLabelledCollection**
> \Swagger\Client\Model\ApiError addElementToLabelledCollection($collection_id4n, $element_guid, $authorization, $accept_language)

Add element to labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementToLabelledCollection($collection_id4n, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementToLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **element_guid** | **string**| elementGuid |
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

# **addElementToLogisticCollection**
> \Swagger\Client\Model\ApiError addElementToLogisticCollection($collection_id4n, $guid, $authorization, $accept_language)

Add element to logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementToLogisticCollection($collection_id4n, $guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementToLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **guid** | **string**| guid |
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

# **addElementToRoutingCollection**
> \Swagger\Client\Model\ApiError addElementToRoutingCollection($collection_id4n, $guid, $authorization, $accept_language)

Add element to routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementToRoutingCollection($collection_id4n, $guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementToRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **guid** | **string**| guid |
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

# **addElementsToCollection**
> \Swagger\Client\Model\ApiError addElementsToCollection($id4n, $list_of_guids, $authorization, $accept_language)

Add elements to collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToCollection($id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **addElementsToLabelledCollection**
> \Swagger\Client\Model\ApiError addElementsToLabelledCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Add elements to labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToLabelledCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **addElementsToLogisticCollection**
> \Swagger\Client\Model\ApiError addElementsToLogisticCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Add elements to logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToLogisticCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **addElementsToRoutingCollection**
> \Swagger\Client\Model\ApiError addElementsToRoutingCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Add element to routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToRoutingCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **createLabelledCollection**
> \Swagger\Client\Model\Id4n createLabelledCollection($create_info, $authorization, $accept_language)

Create labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateLabelledCollectionRequest(); // \Swagger\Client\Model\CreateLabelledCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createLabelledCollection($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_info** | [**\Swagger\Client\Model\CreateLabelledCollectionRequest**](../Model/CreateLabelledCollectionRequest.md)| createInfo |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Id4n**](../Model/Id4n.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLogisticCollection**
> \Swagger\Client\Model\Id4n createLogisticCollection($create_info, $authorization, $accept_language)

Create logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateLogisticCollectionRequest(); // \Swagger\Client\Model\CreateLogisticCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createLogisticCollection($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_info** | [**\Swagger\Client\Model\CreateLogisticCollectionRequest**](../Model/CreateLogisticCollectionRequest.md)| createInfo |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Id4n**](../Model/Id4n.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoutingCollection**
> \Swagger\Client\Model\Id4n createRoutingCollection($create_info, $authorization, $accept_language)

Create routing collecton

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateRoutingCollectionRequest(); // \Swagger\Client\Model\CreateRoutingCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createRoutingCollection($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_info** | [**\Swagger\Client\Model\CreateRoutingCollectionRequest**](../Model/CreateRoutingCollectionRequest.md)| createInfo |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\Id4n**](../Model/Id4n.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollection**
> \Swagger\Client\Model\ApiError deleteCollection($id4n, $authorization, $accept_language)

Delete collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
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

# **deleteLabelledCollection**
> \Swagger\Client\Model\ApiError deleteLabelledCollection($id4n, $authorization, $accept_language)

Delete labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteLabelledCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
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

# **deleteLogisticCollection**
> object deleteLogisticCollection($id4n, $authorization, $accept_language)

Delete logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteLogisticCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingCollection**
> \Swagger\Client\Model\ApiError deleteRoutingCollection($id4n, $authorization, $accept_language)

Delete routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteRoutingCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
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

# **findCollection**
> \Swagger\Client\Model\GuidCollection findCollection($id4n, $authorization, $accept_language)

Find collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLabelledCollection**
> \Swagger\Client\Model\GuidCollection findLabelledCollection($id4n, $authorization, $accept_language)

Find labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findLabelledCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLogisticCollection**
> \Swagger\Client\Model\GuidCollection findLogisticCollection($id4n, $authorization, $accept_language)

Find logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findLogisticCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findRoutingCollection**
> \Swagger\Client\Model\GuidCollection findRoutingCollection($id4n, $authorization, $accept_language)

Find routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findRoutingCollection($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCollectionsOfOrganization**
> \Swagger\Client\Model\PaginatedGuidCollection getAllCollectionsOfOrganization($organization_id, $authorization, $accept_language, $offset, $limit, $type, $label)

Get collections of organization

Retrieving all collections of an organization in a paginated manner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$organization_id = 789; // int | organizationId
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.
$type = "type_example"; // string | Filter by this type
$label = "label_example"; // string | Filter by this label

try {
    $result = $api_instance->getAllCollectionsOfOrganization($organization_id, $authorization, $accept_language, $offset, $limit, $type, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getAllCollectionsOfOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]
 **type** | **string**| Filter by this type | [optional]
 **label** | **string**| Filter by this label | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidCollection**](../Model/PaginatedGuidCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElementsOfCollection**
> \Swagger\Client\Model\PaginatedGuidResponse listElementsOfCollection($id4n, $authorization, $accept_language, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listElementsOfCollection($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listElementsOfCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElementsOfLabelledCollection**
> \Swagger\Client\Model\PaginatedGuidResponse listElementsOfLabelledCollection($id4n, $authorization, $accept_language, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listElementsOfLabelledCollection($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listElementsOfLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElementsOfLogisticCollection**
> \Swagger\Client\Model\PaginatedGuidResponse listElementsOfLogisticCollection($id4n, $authorization, $accept_language, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listElementsOfLogisticCollection($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listElementsOfLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElementsOfRoutingCollection**
> \Swagger\Client\Model\PaginatedGuidResponse listElementsOfRoutingCollection($id4n, $authorization, $accept_language, $offset, $limit)

List contents of the collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | Start with the n-th element.
$limit = 56; // int | The maximum count of returned elements.

try {
    $result = $api_instance->listElementsOfRoutingCollection($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listElementsOfRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**| Start with the n-th element. | [optional]
 **limit** | **int**| The maximum count of returned elements. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedGuidResponse**](../Model/PaginatedGuidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeElementFromCollection**
> \Swagger\Client\Model\ApiError removeElementFromCollection($id4n, $element_guid, $authorization, $accept_language)

Remove element from collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementFromCollection($id4n, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementFromCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **element_guid** | **string**| elementGuid |
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

# **removeElementFromLabelledCollection**
> \Swagger\Client\Model\ApiError removeElementFromLabelledCollection($collection_id4n, $element_guid, $authorization, $accept_language)

Remove element from labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementFromLabelledCollection($collection_id4n, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementFromLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **element_guid** | **string**| elementGuid |
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

# **removeElementFromLogisticCollection**
> \Swagger\Client\Model\ApiError removeElementFromLogisticCollection($collection_id4n, $guid, $authorization, $accept_language)

Remove element from logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementFromLogisticCollection($collection_id4n, $guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementFromLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **guid** | **string**| guid |
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

# **removeElementFromRoutingCollection**
> \Swagger\Client\Model\ApiError removeElementFromRoutingCollection($collection_id4n, $guid, $authorization, $accept_language)

Remove element from routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementFromRoutingCollection($collection_id4n, $guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementFromRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **guid** | **string**| guid |
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

# **removeElementsFromCollection**
> \Swagger\Client\Model\ApiError removeElementsFromCollection($id4n, $list_of_guids, $authorization, $accept_language)

Remove elements from collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromCollection($id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **removeElementsFromLabelledCollection**
> \Swagger\Client\Model\ApiError removeElementsFromLabelledCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Remove elements from labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromLabelledCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **removeElementsFromLogisticCollection**
> \Swagger\Client\Model\ApiError removeElementsFromLogisticCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Remove elements from logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromLogisticCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **removeElementsFromRoutingCollection**
> \Swagger\Client\Model\ApiError removeElementsFromRoutingCollection($collection_id4n, $list_of_guids, $authorization, $accept_language)

Remove elements from routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_id4n = "collection_id4n_example"; // string | collectionId4n
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromRoutingCollection($collection_id4n, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_id4n** | **string**| collectionId4n |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
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

# **updateCollection**
> object updateCollection($id4n, $request, $authorization, $accept_language)

Alter collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$request = new \Swagger\Client\Model\GuidCollection(); // \Swagger\Client\Model\GuidCollection | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateCollection($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **request** | [**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)| request |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLabelledCollection**
> object updateLabelledCollection($id4n, $request, $authorization, $accept_language)

Rename labelled collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$request = new \Swagger\Client\Model\GuidCollection(); // \Swagger\Client\Model\GuidCollection | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateLabelledCollection($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateLabelledCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **request** | [**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)| request |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLogisticCollection**
> object updateLogisticCollection($id4n, $request, $authorization, $accept_language)

Update logistic collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$request = new \Swagger\Client\Model\GuidCollection(); // \Swagger\Client\Model\GuidCollection | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateLogisticCollection($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateLogisticCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **request** | [**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)| request |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoutingCollection**
> object updateRoutingCollection($id4n, $request, $authorization, $accept_language)

Update routing collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$request = new \Swagger\Client\Model\GuidCollection(); // \Swagger\Client\Model\GuidCollection | request
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->updateRoutingCollection($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateRoutingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **request** | [**\Swagger\Client\Model\GuidCollection**](../Model/GuidCollection.md)| request |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

