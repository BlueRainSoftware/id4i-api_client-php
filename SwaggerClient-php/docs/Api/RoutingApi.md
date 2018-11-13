# Swagger\Client\RoutingApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllRoutes**](RoutingApi.md#getAllRoutes) | **GET** /api/v1/routingfiles/{id4n}/routes/{type} | Retrieve all routes of a GUID (or ID4N)
[**getRoute**](RoutingApi.md#getRoute) | **GET** /api/v1/routingfiles/{id4n}/route/{type} | Retrieve current route of a GUID (or ID4N)
[**getRoutingFile**](RoutingApi.md#getRoutingFile) | **GET** /api/v1/routingfiles/{id4n} | Retrieve routing file
[**updateRoutingFile**](RoutingApi.md#updateRoutingFile) | **PUT** /api/v1/routingfiles/{id4n} | Store routing file


# **getAllRoutes**
> \Swagger\Client\Model\Route[] getAllRoutes($id4n, $type, $interpolate, $organization_id)

Retrieve all routes of a GUID (or ID4N)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$type = "type_example"; // string | The type of route you want to have
$interpolate = true; // bool | interpolate
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->getAllRoutes($id4n, $type, $interpolate, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getAllRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **type** | **string**| The type of route you want to have |
 **interpolate** | **bool**| interpolate | [optional] [default to true]
 **organization_id** | **string**| organizationId | [optional]

### Return type

[**\Swagger\Client\Model\Route[]**](../Model/Route.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoute**
> \Swagger\Client\Model\Route getRoute($id4n, $type, $interpolate, $private_routes, $public_routes)

Retrieve current route of a GUID (or ID4N)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$type = "type_example"; // string | The type of route you want to have
$interpolate = true; // bool | interpolate
$private_routes = true; // bool | privateRoutes
$public_routes = true; // bool | publicRoutes

try {
    $result = $apiInstance->getRoute($id4n, $type, $interpolate, $private_routes, $public_routes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **type** | **string**| The type of route you want to have |
 **interpolate** | **bool**| interpolate | [optional] [default to true]
 **private_routes** | **bool**| privateRoutes | [optional] [default to true]
 **public_routes** | **bool**| publicRoutes | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\Route**](../Model/Route.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingFile**
> \Swagger\Client\Model\RoutingFile getRoutingFile($id4n, $organization_id)

Retrieve routing file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$organization_id = "organization_id_example"; // string | organizationId

try {
    $result = $apiInstance->getRoutingFile($id4n, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **organization_id** | **string**| organizationId | [optional]

### Return type

[**\Swagger\Client\Model\RoutingFile**](../Model/RoutingFile.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoutingFile**
> updateRoutingFile($id4n, $rfr)

Store routing file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | id4n
$rfr = new \Swagger\Client\Model\RoutingFileRequest(); // \Swagger\Client\Model\RoutingFileRequest | rfr

try {
    $apiInstance->updateRoutingFile($id4n, $rfr);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateRoutingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| id4n |
 **rfr** | [**\Swagger\Client\Model\RoutingFileRequest**](../Model/RoutingFileRequest.md)| rfr |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

