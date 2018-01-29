# Swagger\Client\SearchApi

All URIs are relative to *https://api.riskscreen.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCompany**](SearchApi.md#searchCompany) | **POST** /api/v1/search/bycompany | 
[**searchPerson**](SearchApi.md#searchPerson) | **POST** /api/v1/search/byperson | 


# **searchCompany**
> \Swagger\Client\Model\WebSearchCompany searchCompany($new_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SearchApi();
$new_search = new \Swagger\Client\Model\WebSearchCompany(); // \Swagger\Client\Model\WebSearchCompany | 

try {
    $result = $api_instance->searchCompany($new_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_search** | [**\Swagger\Client\Model\WebSearchCompany**](../Model/WebSearchCompany.md)|  |

### Return type

[**\Swagger\Client\Model\WebSearchCompany**](../Model/WebSearchCompany.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPerson**
> \Swagger\Client\Model\WebSearchPerson searchPerson($new_search)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\SearchApi();
$new_search = new \Swagger\Client\Model\WebSearchPerson(); // \Swagger\Client\Model\WebSearchPerson | 

try {
    $result = $api_instance->searchPerson($new_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_search** | [**\Swagger\Client\Model\WebSearchPerson**](../Model/WebSearchPerson.md)|  |

### Return type

[**\Swagger\Client\Model\WebSearchPerson**](../Model/WebSearchPerson.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

