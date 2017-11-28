# Swagger\Client\CollectionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addElementsToCollectionUsingPUT**](CollectionsApi.md#addElementsToCollectionUsingPUT) | **PUT** /api/v1/collections/{collectionGuid}/elements | addElementsToCollection
[**addElementsToLabelledCollectionUsingPUT**](CollectionsApi.md#addElementsToLabelledCollectionUsingPUT) | **PUT** /api/v1/collections/labelled/{collectionGuid}/elements | addElementsToLabelledCollection
[**addElementsToLogisticCollectionUsingPUT**](CollectionsApi.md#addElementsToLogisticCollectionUsingPUT) | **PUT** /api/v1/collections/logistic/{collectionGuid}/elements | addElementsToLogisticCollection
[**addElementsToRoutingCollectionUsingPUT**](CollectionsApi.md#addElementsToRoutingCollectionUsingPUT) | **PUT** /api/v1/collections/routing/{collectionGuid}/elements | addElementsToRoutingCollection
[**addSingleElementToCollectionUsingPUT**](CollectionsApi.md#addSingleElementToCollectionUsingPUT) | **PUT** /api/v1/collections/{collectionGuid}/elements/{elementGuid} | addSingleElementToCollection
[**addSingleElementToLabelledCollectionUsingPUT**](CollectionsApi.md#addSingleElementToLabelledCollectionUsingPUT) | **PUT** /api/v1/collections/labelled/{collectionGuid}/elements/{elementGuid} | addSingleElementToLabelledCollection
[**addSingleElementToLogisticCollectionUsingPUT**](CollectionsApi.md#addSingleElementToLogisticCollectionUsingPUT) | **PUT** /api/v1/collections/logistic/{collectionGuid}/elements/{elementId4n} | addSingleElementToLogisticCollection
[**addSingleElementToRoutingCollectionUsingPUT**](CollectionsApi.md#addSingleElementToRoutingCollectionUsingPUT) | **PUT** /api/v1/collections/routing/{collectionGuid}/elements/{elementGuid} | addSingleElementToRoutingCollection
[**createLabelledCollectionUsingPOST**](CollectionsApi.md#createLabelledCollectionUsingPOST) | **POST** /api/v1/collections/labelled | createLabelledCollection
[**createLogisticCollectionUsingPOST**](CollectionsApi.md#createLogisticCollectionUsingPOST) | **POST** /api/v1/collections/logistic | createLogisticCollection
[**createRoutingCollectionUsingPOST**](CollectionsApi.md#createRoutingCollectionUsingPOST) | **POST** /api/v1/collections/routing | createRoutingCollection
[**deleteCollectionUsingDELETE**](CollectionsApi.md#deleteCollectionUsingDELETE) | **DELETE** /api/v1/collections/{id4n} | deleteCollection
[**deleteLabelledCollectionUsingDELETE**](CollectionsApi.md#deleteLabelledCollectionUsingDELETE) | **DELETE** /api/v1/collections/labelled/{id4n} | deleteLabelledCollection
[**deleteLogisticCollectionUsingDELETE**](CollectionsApi.md#deleteLogisticCollectionUsingDELETE) | **DELETE** /api/v1/collections/logistic/{id4n} | deleteLogisticCollection
[**deleteRoutingCollectionUsingDELETE**](CollectionsApi.md#deleteRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{id4n} | deleteRoutingCollection
[**findById4nUsingGET**](CollectionsApi.md#findById4nUsingGET) | **GET** /api/v1/collections/{id4n} | findById4n
[**findById4nUsingGET1**](CollectionsApi.md#findById4nUsingGET1) | **GET** /api/v1/collections/labelled/{id4n} | findById4n
[**findById4nUsingGET2**](CollectionsApi.md#findById4nUsingGET2) | **GET** /api/v1/collections/logistic/{id4n} | findById4n
[**findById4nUsingGET3**](CollectionsApi.md#findById4nUsingGET3) | **GET** /api/v1/collections/routing/{id4n} | findById4n
[**findByLabelUsingGET**](CollectionsApi.md#findByLabelUsingGET) | **GET** /api/v1/collections/labelled/{organizationId}/{label} | findByLabel
[**getAllUsingGET**](CollectionsApi.md#getAllUsingGET) | **GET** /api/v1/organization/{organizationId}/collections | getAll
[**listContentsUsingGET**](CollectionsApi.md#listContentsUsingGET) | **GET** /api/v1/collections/{id4n}/elements | listContents
[**removeElementsFromCollectionUsingDELETE**](CollectionsApi.md#removeElementsFromCollectionUsingDELETE) | **DELETE** /api/v1/collections/{collectionGuid}/elements | removeElementsFromCollection
[**removeElementsFromLabelledCollectionUsingDELETE**](CollectionsApi.md#removeElementsFromLabelledCollectionUsingDELETE) | **DELETE** /api/v1/collections/labelled/{collectionGuid}/elements | removeElementsFromLabelledCollection
[**removeElementsFromLogisticCollectionUsingDELETE**](CollectionsApi.md#removeElementsFromLogisticCollectionUsingDELETE) | **DELETE** /api/v1/collections/logistic/{collectionGuid}/elements | removeElementsFromLogisticCollection
[**removeElementsFromRoutingCollectionUsingDELETE**](CollectionsApi.md#removeElementsFromRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{collectionGuid}/elements | removeElementsFromRoutingCollection
[**removeSingleElementFromCollectionUsingDELETE**](CollectionsApi.md#removeSingleElementFromCollectionUsingDELETE) | **DELETE** /api/v1/collections/{collectionGuid}/elements/{elementGuid} | removeSingleElementFromCollection
[**removeSingleElementFromLabelledCollectionUsingDELETE**](CollectionsApi.md#removeSingleElementFromLabelledCollectionUsingDELETE) | **DELETE** /api/v1/collections/labelled/{collectionGuid}/elements/{elementGuid} | removeSingleElementFromLabelledCollection
[**removeSingleElementFromLogisticCollectionUsingDELETE**](CollectionsApi.md#removeSingleElementFromLogisticCollectionUsingDELETE) | **DELETE** /api/v1/collections/logistic/{collectionGuid}/elements/{elementId4n} | removeSingleElementFromLogisticCollection
[**removeSingleElementFromRoutingCollectionUsingDELETE**](CollectionsApi.md#removeSingleElementFromRoutingCollectionUsingDELETE) | **DELETE** /api/v1/collections/routing/{collectionGuid}/elements/{elementGuid} | removeSingleElementFromRoutingCollection
[**renameUsingPUT**](CollectionsApi.md#renameUsingPUT) | **PUT** /api/v1/collections/labelled/{id4n} | rename


# **addElementsToCollectionUsingPUT**
> int addElementsToCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language)

addElementsToCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
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

# **addElementsToLabelledCollectionUsingPUT**
> int addElementsToLabelledCollectionUsingPUT($collection_guid, $list_of_id4ns, $authorization, $accept_language)

addElementsToLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_id4ns = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfId4ns
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToLabelledCollectionUsingPUT($collection_guid, $list_of_id4ns, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToLabelledCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **list_of_id4ns** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| listOfId4ns |
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

# **addElementsToLogisticCollectionUsingPUT**
> int addElementsToLogisticCollectionUsingPUT($collection_guid, $id4n_list, $authorization, $accept_language)

addElementsToLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$id4n_list = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | id4nList
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToLogisticCollectionUsingPUT($collection_guid, $id4n_list, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToLogisticCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **id4n_list** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| id4nList |
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

# **addElementsToRoutingCollectionUsingPUT**
> int addElementsToRoutingCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language)

addElementsToRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addElementsToRoutingCollectionUsingPUT($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addElementsToRoutingCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
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

# **addSingleElementToCollectionUsingPUT**
> int addSingleElementToCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language)

addSingleElementToCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addSingleElementToCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addSingleElementToCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
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

# **addSingleElementToLabelledCollectionUsingPUT**
> int addSingleElementToLabelledCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language)

addSingleElementToLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addSingleElementToLabelledCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addSingleElementToLabelledCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
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

# **addSingleElementToLogisticCollectionUsingPUT**
> int addSingleElementToLogisticCollectionUsingPUT($collection_guid, $element_id4n, $authorization, $accept_language)

addSingleElementToLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_id4n = "element_id4n_example"; // string | elementId4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addSingleElementToLogisticCollectionUsingPUT($collection_guid, $element_id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addSingleElementToLogisticCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **element_id4n** | **string**| elementId4n |
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->addSingleElementToRoutingCollectionUsingPUT($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->addSingleElementToRoutingCollectionUsingPUT: ', $e->getMessage(), PHP_EOL;
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

# **createLabelledCollectionUsingPOST**
> \Swagger\Client\Model\Id4n createLabelledCollectionUsingPOST($create_info, $authorization, $accept_language)

createLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateLabelledCollectionRequest(); // \Swagger\Client\Model\CreateLabelledCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createLabelledCollectionUsingPOST($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createLabelledCollectionUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **createLogisticCollectionUsingPOST**
> \Swagger\Client\Model\Id4n createLogisticCollectionUsingPOST($create_info, $authorization, $accept_language)

createLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateLogisticCollectionRequest(); // \Swagger\Client\Model\CreateLogisticCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createLogisticCollectionUsingPOST($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createLogisticCollectionUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **createRoutingCollectionUsingPOST**
> \Swagger\Client\Model\Id4n createRoutingCollectionUsingPOST($create_info, $authorization, $accept_language)

createRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$create_info = new \Swagger\Client\Model\CreateRoutingCollectionRequest(); // \Swagger\Client\Model\CreateRoutingCollectionRequest | createInfo
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->createRoutingCollectionUsingPOST($create_info, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createRoutingCollectionUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **deleteCollectionUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteCollectionUsingDELETE($id4n, $authorization, $accept_language)

deleteCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteCollectionUsingDELETE($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **deleteLabelledCollectionUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteLabelledCollectionUsingDELETE($id4n, $authorization, $accept_language)

deleteLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteLabelledCollectionUsingDELETE($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteLabelledCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **deleteLogisticCollectionUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteLogisticCollectionUsingDELETE($id4n, $authorization, $accept_language)

deleteLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteLogisticCollectionUsingDELETE($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteLogisticCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **deleteRoutingCollectionUsingDELETE**
> \Swagger\Client\Model\ResponseEntity deleteRoutingCollectionUsingDELETE($id4n, $authorization, $accept_language)

deleteRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->deleteRoutingCollectionUsingDELETE($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **findById4nUsingGET**
> \Swagger\Client\Model\GuidCollection findById4nUsingGET($id4n, $authorization, $accept_language)

findById4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findById4nUsingGET($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findById4nUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **findById4nUsingGET1**
> \Swagger\Client\Model\GuidCollection findById4nUsingGET1($id4n, $authorization, $accept_language)

findById4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findById4nUsingGET1($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findById4nUsingGET1: ', $e->getMessage(), PHP_EOL;
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

# **findById4nUsingGET2**
> \Swagger\Client\Model\GuidCollection findById4nUsingGET2($id4n, $authorization, $accept_language)

findById4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findById4nUsingGET2($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findById4nUsingGET2: ', $e->getMessage(), PHP_EOL;
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

# **findById4nUsingGET3**
> \Swagger\Client\Model\GuidCollection findById4nUsingGET3($id4n, $authorization, $accept_language)

findById4n

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findById4nUsingGET3($id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findById4nUsingGET3: ', $e->getMessage(), PHP_EOL;
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

# **findByLabelUsingGET**
> \Swagger\Client\Model\GuidCollection findByLabelUsingGET($organization_id, $label, $authorization, $accept_language)

findByLabel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$organization_id = 56; // int | organizationId
$label = "label_example"; // string | label
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->findByLabelUsingGET($organization_id, $label, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->findByLabelUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| organizationId |
 **label** | **string**| label |
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

# **getAllUsingGET**
> \Swagger\Client\Model\PaginatedResponseGuidCollection_ getAllUsingGET($organization_id, $authorization, $accept_language, $offset, $limit, $type)

getAll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
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
    echo 'Exception when calling CollectionsApi->getAllUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **listContentsUsingGET**
> \Swagger\Client\Model\PaginatedResponseString_ listContentsUsingGET($id4n, $authorization, $accept_language, $offset, $limit)

listContents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$id4n = "id4n_example"; // string | id4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language
$offset = 56; // int | 
$limit = 56; // int | 

try {
    $result = $api_instance->listContentsUsingGET($id4n, $authorization, $accept_language, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->listContentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **authorization** | **string**| Authorization JWT Bearer Token as returned from /login | [optional]
 **accept_language** | **string**| Requested language | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseString_**](../Model/PaginatedResponseString_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeElementsFromCollectionUsingDELETE**
> int removeElementsFromCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language)

removeElementsFromCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **removeElementsFromLabelledCollectionUsingDELETE**
> int removeElementsFromLabelledCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language)

removeElementsFromLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromLabelledCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromLabelledCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **removeElementsFromLogisticCollectionUsingDELETE**
> int removeElementsFromLogisticCollectionUsingDELETE($collection_guid, $id4nlist, $authorization, $accept_language)

removeElementsFromLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$id4nlist = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | id4nlist
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromLogisticCollectionUsingDELETE($collection_guid, $id4nlist, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromLogisticCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **id4nlist** | [**\Swagger\Client\Model\ListOfId4ns**](../Model/ListOfId4ns.md)| id4nlist |
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

# **removeElementsFromRoutingCollectionUsingDELETE**
> int removeElementsFromRoutingCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language)

removeElementsFromRoutingCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$list_of_guids = new \Swagger\Client\Model\ListOfId4ns(); // \Swagger\Client\Model\ListOfId4ns | listOfGuids
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeElementsFromRoutingCollectionUsingDELETE($collection_guid, $list_of_guids, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeElementsFromRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **removeSingleElementFromCollectionUsingDELETE**
> int removeSingleElementFromCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language)

removeSingleElementFromCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeSingleElementFromCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeSingleElementFromCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **removeSingleElementFromLabelledCollectionUsingDELETE**
> int removeSingleElementFromLabelledCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language)

removeSingleElementFromLabelledCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeSingleElementFromLabelledCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeSingleElementFromLabelledCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **removeSingleElementFromLogisticCollectionUsingDELETE**
> int removeSingleElementFromLogisticCollectionUsingDELETE($collection_guid, $element_id4n, $authorization, $accept_language)

removeSingleElementFromLogisticCollection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_id4n = "element_id4n_example"; // string | elementId4n
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeSingleElementFromLogisticCollectionUsingDELETE($collection_guid, $element_id4n, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeSingleElementFromLogisticCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection_guid** | **string**| collectionGuid |
 **element_id4n** | **string**| elementId4n |
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

$api_instance = new Swagger\Client\Api\CollectionsApi();
$collection_guid = "collection_guid_example"; // string | collectionGuid
$element_guid = "element_guid_example"; // string | elementGuid
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token as returned from /login
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $api_instance->removeSingleElementFromRoutingCollectionUsingDELETE($collection_guid, $element_guid, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->removeSingleElementFromRoutingCollectionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **renameUsingPUT**
> \Swagger\Client\Model\ResponseEntity renameUsingPUT($id4n, $request, $authorization, $accept_language)

rename

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
    $result = $api_instance->renameUsingPUT($id4n, $request, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->renameUsingPUT: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

