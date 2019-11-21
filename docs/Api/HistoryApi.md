# Bluerain\ID4iClient\HistoryApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItem**](HistoryApi.md#addItem) | **POST** /api/v1/history/{id4n} | Add history item
[**callList**](HistoryApi.md#callList) | **GET** /api/v1/history/{id4n}/{organizationId} | DEPRECATED - List history
[**filteredList**](HistoryApi.md#filteredList) | **GET** /api/v1/history/{id4n} | List history
[**retrieveItem**](HistoryApi.md#retrieveItem) | **GET** /api/v1/history/{id4n}/{organizationId}/{sequenceId} | Get history item
[**updateItem**](HistoryApi.md#updateItem) | **PATCH** /api/v1/history/{id4n}/{organizationId}/{sequenceId} | Update history item
[**updateItemVisibility**](HistoryApi.md#updateItemVisibility) | **PUT** /api/v1/history/{id4n}/{organizationId}/{sequenceId}/visibility | Set history item visibility


# **addItem**
> addItem($id4n, $history_item)

Add history item

Add a new history item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$history_item = new \Bluerain\ID4iClient\Model\HistoryItem(); // \Bluerain\ID4iClient\Model\HistoryItem | The history item to publish

try {
    $apiInstance->addItem($id4n, $history_item);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->addItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **history_item** | [**\Bluerain\ID4iClient\Model\HistoryItem**](../Model/HistoryItem.md)| The history item to publish |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callList**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfHistoryItem callList($id4n, $organization_id, $include_private, $offset, $limit)

DEPRECATED - List history

DEPRECATED - please use filteredList with organization parameter to achieve the same functionality

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = "organization_id_example"; // string | organizationId
$include_private = true; // bool | Also return private history entries
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->callList($id4n, $organization_id, $include_private, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **string**| organizationId |
 **include_private** | **bool**| Also return private history entries | [optional] [default to true]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\PaginatedResponseOfHistoryItem**](../Model/PaginatedResponseOfHistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filteredList**
> \Bluerain\ID4iClient\Model\PaginatedResponseOfHistoryItem filteredList($id4n, $include_private, $organization, $type, $qualifier, $from_date, $to_date, $offset, $limit)

List history

Lists the history of a GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$include_private = true; // bool | Also return private history entries
$organization = "organization_example"; // string | Show only entries created by one of the given organizations. This parameter can be used multiple times.
$type = array("type_example"); // string[] | Show only entries matching one of the given history item types. This parameter can be used multiple times.
$qualifier = array("qualifier_example"); // string[] | Show only entries matching one of the given history item qualifiers (additional property de.id4i.history.item.qualifier). This parameter can be used multiple times.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time as UTC Date-Time format
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date time as UTC Date-Time format
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->filteredList($id4n, $include_private, $organization, $type, $qualifier, $from_date, $to_date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->filteredList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **include_private** | **bool**| Also return private history entries | [optional] [default to true]
 **organization** | **string**| Show only entries created by one of the given organizations. This parameter can be used multiple times. | [optional]
 **type** | [**string[]**](../Model/string.md)| Show only entries matching one of the given history item types. This parameter can be used multiple times. | [optional]
 **qualifier** | [**string[]**](../Model/string.md)| Show only entries matching one of the given history item qualifiers (additional property de.id4i.history.item.qualifier). This parameter can be used multiple times. | [optional]
 **from_date** | **\DateTime**| From date time as UTC Date-Time format | [optional]
 **to_date** | **\DateTime**| To date time as UTC Date-Time format | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Bluerain\ID4iClient\Model\PaginatedResponseOfHistoryItem**](../Model/PaginatedResponseOfHistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveItem**
> \Bluerain\ID4iClient\Model\HistoryItem retrieveItem($id4n, $organization_id, $sequence_id)

Get history item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = "organization_id_example"; // string | organizationId
$sequence_id = 56; // int | sequenceId

try {
    $result = $apiInstance->retrieveItem($id4n, $organization_id, $sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->retrieveItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **string**| organizationId |
 **sequence_id** | **int**| sequenceId |

### Return type

[**\Bluerain\ID4iClient\Model\HistoryItem**](../Model/HistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItem**
> \Bluerain\ID4iClient\Model\HistoryItem updateItem($id4n, $organization_id, $sequence_id, $update)

Update history item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = "organization_id_example"; // string | organizationId
$sequence_id = 56; // int | sequenceId
$update = new \Bluerain\ID4iClient\Model\HistoryItemUpdate(); // \Bluerain\ID4iClient\Model\HistoryItemUpdate | update

try {
    $result = $apiInstance->updateItem($id4n, $organization_id, $sequence_id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **string**| organizationId |
 **sequence_id** | **int**| sequenceId |
 **update** | [**\Bluerain\ID4iClient\Model\HistoryItemUpdate**](../Model/HistoryItemUpdate.md)| update |

### Return type

[**\Bluerain\ID4iClient\Model\HistoryItem**](../Model/HistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemVisibility**
> \Bluerain\ID4iClient\Model\HistoryItem updateItemVisibility($id4n, $organization_id, $sequence_id, $visibility)

Set history item visibility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bluerain\ID4iClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Bluerain\ID4iClient\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id4n = "id4n_example"; // string | GUID to retrieve the history for
$organization_id = "organization_id_example"; // string | organizationId
$sequence_id = 56; // int | sequenceId
$visibility = new \Bluerain\ID4iClient\Model\Visibility(); // \Bluerain\ID4iClient\Model\Visibility | History item visibility restrictions

try {
    $result = $apiInstance->updateItemVisibility($id4n, $organization_id, $sequence_id, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->updateItemVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id4n** | **string**| GUID to retrieve the history for |
 **organization_id** | **string**| organizationId |
 **sequence_id** | **int**| sequenceId |
 **visibility** | [**\Bluerain\ID4iClient\Model\Visibility**](../Model/Visibility.md)| History item visibility restrictions |

### Return type

[**\Bluerain\ID4iClient\Model\HistoryItem**](../Model/HistoryItem.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

