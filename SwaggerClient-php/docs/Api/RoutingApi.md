# Swagger\Client\RoutingApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addElementsToRoutingCollectionUsingPUT**](RoutingApi.md#addElementsToRoutingCollectionUsingPUT) | **PUT** /api/v1/collections/routing/{collectionGuid}/elements | addElementsToRoutingCollection
[**addSingleElementToRoutingCollectionUsingPUT**](RoutingApi.md#addSingleElementToRoutingCollectionUsingPUT) | **PUT** /api/v1/collections/routing/{collectionGuid}/elements/{elementGuid} | addSingleElementToRoutingCollection
[**createRoutingCollectionUsingPOST**](RoutingApi.md#createRoutingCollectionUsingPOST) | **POST** /api/v1/collections/routing | createRoutingCollection
[**deleteRoutingCollectionUsingDELETE**](RoutingApi.md#deleteRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{id4n} | deleteRoutingCollection
[**findById4nUsingGET3**](RoutingApi.md#findById4nUsingGET3) | **GET** /api/v1/collections/routing/{id4n} | findById4n
[**forwardUsingGET**](RoutingApi.md#forwardUsingGET) | **GET** /go/{guid} | forward
[**removeElementsFromRoutingCollectionUsingDELETE**](RoutingApi.md#removeElementsFromRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{collectionGuid}/elements | removeElementsFromRoutingCollection
[**removeSingleElementFromRoutingCollectionUsingDELETE**](RoutingApi.md#removeSingleElementFromRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{collectionGuid}/elements/{elementGuid} | removeSingleElementFromRoutingCollection
[**retrieveCurrentParamsByTypeUsingGET**](RoutingApi.md#retrieveCurrentParamsByTypeUsingGET) | **GET** /api/v1/routingfiles/{id4n}/route/{type} | retrieveCurrentParamsByType
[**retrieveRoutingFileUsingGET**](RoutingApi.md#retrieveRoutingFileUsingGET) | **GET** /api/v1/routingfiles/{id4n} | retrieveRoutingFile
[**storeRoutingFileUsingPUT**](RoutingApi.md#storeRoutingFileUsingPUT) | **PUT** /api/v1/routingfiles/{id4n} | storeRoutingFile


# **addElementsToRoutingCollectionUsingPUT**
> int addElementsToRoutingCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language)

addElementsToRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToRoutingCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->addElementsToRoutingCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSingleElementToRoutingCollectionUsingPUT**
> int addSingleElementToRoutingCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language)

addSingleElementToRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addSingleElementToRoutingCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->addSingleElementToRoutingCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **element_guid** | **string**| elementGuid |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoutingCollectionUsingPOST**
> \Swagger\Client\Model\Id4n createRoutingCollectionUsingPOST($create_info, $authorization, $accept_language)

createRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$create_info = new \Swagger\Client\Model\CreateRoutingCollectionRequest(); // \Swagger\Client\Model\CreateRoutingCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createRoutingCollectionUsingPOST($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createRoutingCollectionUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **deleteRoutingCollectionUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteRoutingCollectionUsingDELETE($id4n, $authorization, $accept_language)

deleteRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteRoutingCollectionUsingDELETE($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findById4nUsingGET3**
> \Swagger\Client\Model\GuidCollection findById4nUsingGET3($id4n, $authorization, $accept_language)

findById4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findById4nUsingGET3($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->findById4nUsingGET3: ', $e->getMessage(), PHP_EOL;
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

# **forwardUsingGET**
> \Swagger\Client\Model\ResponseEntity forwardUsingGET($guid, $authorization, $accept_language)

forward

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$guid = "guid_example"; // string | guid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->forwardUsingGET($guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->forwardUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| guid |
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

# **removeElementsFromRoutingCollectionUsingDELETE**
> int removeElementsFromRoutingCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language)

removeElementsFromRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromRoutingCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->removeElementsFromRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **list_of_guids** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfGuids |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSingleElementFromRoutingCollectionUsingDELETE**
> int removeSingleElementFromRoutingCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language)

removeSingleElementFromRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeSingleElementFromRoutingCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->removeSingleElementFromRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **element_guid** | **string**| elementGuid |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCurrentParamsByTypeUsingGET**
> map[string,string] retrieveCurrentParamsByTypeUsingGET($id4n, $type, $authorization, $accept_language)

retrieveCurrentParamsByType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$id4n = "id4n_example"; // string | id4n
$type = "type_example"; // string | type
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->retrieveCurrentParamsByTypeUsingGET($id4n, $type, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->retrieveCurrentParamsByTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **type** | **string**| type |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRoutingFileUsingGET**
> \Swagger\Client\Model\RoutingFile retrieveRoutingFileUsingGET($id4n, $authorization, $accept_language, $organization_id)

retrieveRoutingFile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$organization_id = 789; // int | organizationId

try {
    $result = $api_instance->retrieveRoutingFileUsingGET($id4n, $authorization, $accept_language, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->retrieveRoutingFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **organization_id** | **int**| organizationId | [optional]

### Return type

[**\Swagger\Client\Model\RoutingFile**](../Model/RoutingFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeRoutingFileUsingPUT**
> \Swagger\Client\Model\ResponseEntity storeRoutingFileUsingPUT($rfr, $id4n, $authorization, $accept_language)

storeRoutingFile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RoutingApi();
$rfr = new \Swagger\Client\Model\RoutingFileRequest(); // \Swagger\Client\Model\RoutingFileRequest | rfr
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->storeRoutingFileUsingPUT($rfr, $id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->storeRoutingFileUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rfr** | [**\Swagger\Client\Model\RoutingFileRequest**](../Model/RoutingFileRequest.md)| rfr |
 **id4n** | **string**| id4n |
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

