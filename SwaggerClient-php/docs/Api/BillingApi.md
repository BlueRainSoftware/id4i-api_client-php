# Swagger\Client\BillingApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSumForOrganization**](BillingApi.md#getSumForOrganization) | **GET** /api/v1/billing/{organizationId} | Get billing amount of services for a given organization


# **getSumForOrganization**
> \Swagger\Client\Model\ServiceCosts getSumForOrganization($organization_id, $authorization, $accept_language)

Get billing amount of services for a given organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | The organization to compute the billing information for
$authorization = "authorization_example"; // string | Authorization JWT Bearer Token
$accept_language = "accept_language_example"; // string | Requested language

try {
    $result = $apiInstance->getSumForOrganization($organization_id, $authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getSumForOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The organization to compute the billing information for |
 **authorization** | **string**| Authorization JWT Bearer Token | [optional]
 **accept_language** | **string**| Requested language | [optional]

### Return type

[**\Swagger\Client\Model\ServiceCosts**](../Model/ServiceCosts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
