# Swagger\Client\BillingApi

All URIs are relative to *https://backend.id4i.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPositionsForOrganization**](BillingApi.md#getPositionsForOrganization) | **GET** /api/v1/billing/{organizationId}/positions | Get billing positions for a given organization
[**getSumForOrganization**](BillingApi.md#getSumForOrganization) | **GET** /api/v1/billing/{organizationId} | Get billing amount of services for a given organization


# **getPositionsForOrganization**
> \Swagger\Client\Model\BillingPosition[] getPositionsForOrganization($organization_id, $from_date, $to_date)

Get billing positions for a given organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 789; // int | The organization to compute the billing information for
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Billing start date
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Billing end date

try {
    $result = $apiInstance->getPositionsForOrganization($organization_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getPositionsForOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The organization to compute the billing information for |
 **from_date** | **\DateTime**| Billing start date | [optional]
 **to_date** | **\DateTime**| Billing end date | [optional]

### Return type

[**\Swagger\Client\Model\BillingPosition[]**](../Model/BillingPosition.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSumForOrganization**
> \Swagger\Client\Model\ServiceCosts getSumForOrganization($organization_id, $from_date, $to_date)

Get billing amount of services for a given organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 789; // int | The organization to compute the billing information for
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Billing start date
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Billing end date

try {
    $result = $apiInstance->getSumForOrganization($organization_id, $from_date, $to_date);
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
 **from_date** | **\DateTime**| Billing start date | [optional]
 **to_date** | **\DateTime**| Billing end date | [optional]

### Return type

[**\Swagger\Client\Model\ServiceCosts**](../Model/ServiceCosts.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

