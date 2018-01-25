# Swagger\Client\ResultsApi

All URIs are relative to *https://api.riskscreen.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resultsGetCompanyDetails**](ResultsApi.md#resultsGetCompanyDetails) | **GET** /api/v1/results/company/{encodedId} | 
[**resultsGetPersonDetails**](ResultsApi.md#resultsGetPersonDetails) | **GET** /api/v1/results/person/{encodedId} | 


# **resultsGetCompanyDetails**
> object resultsGetCompanyDetails($encoded_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$encoded_id = "encoded_id_example"; // string | 

try {
    $result = $apiInstance->resultsGetCompanyDetails($encoded_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsGetCompanyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encoded_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resultsGetPersonDetails**
> object resultsGetPersonDetails($encoded_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$encoded_id = "encoded_id_example"; // string | 

try {
    $result = $apiInstance->resultsGetPersonDetails($encoded_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsGetPersonDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encoded_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

