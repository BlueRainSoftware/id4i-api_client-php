# Swagger\Client\AuditingApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOrganizationChangeLog**](AuditingApi.md#listOrganizationChangeLog) | **GET** /api/v1/changelog/organization/{organizationId}/ | List change log entries of an organization


# **listOrganizationChangeLog**
> \Swagger\Client\Model\PaginatedResponseOfChangeLogEntry listOrganizationChangeLog($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit)

List change log entries of an organization

Listing change log entries of the specified organization id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuditingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | The namespace identifying the organization whose change log entries are to be listed
$message_mime_type = "text/mustache"; // string | The Mime-type for the message format that should be returned. e.g. 'text/plain' or 'text/mustache'
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date time as UTC Date-Time format
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date time as UTC Date-Time format
$offset = 56; // int | Start with the n-th element
$limit = 56; // int | The maximum count of returned elements

try {
    $result = $apiInstance->listOrganizationChangeLog($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditingApi->listOrganizationChangeLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The namespace identifying the organization whose change log entries are to be listed |
 **message_mime_type** | **string**| The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; | [optional] [default to text/mustache]
 **from_date** | **\DateTime**| From date time as UTC Date-Time format | [optional]
 **to_date** | **\DateTime**| To date time as UTC Date-Time format | [optional]
 **offset** | **int**| Start with the n-th element | [optional]
 **limit** | **int**| The maximum count of returned elements | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseOfChangeLogEntry**](../Model/PaginatedResponseOfChangeLogEntry.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

