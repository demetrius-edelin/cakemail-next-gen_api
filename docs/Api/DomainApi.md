# Swagger\Client\DomainApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**patchDomains**](DomainApi.md#patchdomains) | **PATCH** /brands/default/domains/default | Change domains
[**showDomains**](DomainApi.md#showdomains) | **GET** /brands/default/domains/default | Show domains
[**validateDomains**](DomainApi.md#validatedomains) | **GET** /brands/default/domains/default/validate | Validate domains

# **patchDomains**
> \Swagger\Client\Model\PatchDomainsResponse patchDomains($body, $account_id)

Change domains

Change the Tracking and Bounce domains.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PatchDomains(); // \Swagger\Client\Model\PatchDomains | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchDomains($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->patchDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PatchDomains**](../Model/PatchDomains.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PatchDomainsResponse**](../Model/PatchDomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showDomains**
> \Swagger\Client\Model\DomainsResponse showDomains($account_id)

Show domains

Show the Tracking and Bounce domains.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->showDomains($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->showDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\DomainsResponse**](../Model/DomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateDomains**
> \Swagger\Client\Model\ValidateDomainsResponse validateDomains($account_id)

Validate domains

Validate and return the DNS entries for the Tracking and the Bounce domains.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->validateDomains($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->validateDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ValidateDomainsResponse**](../Model/ValidateDomainsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

