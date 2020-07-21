# Swagger\Client\CustomAttributeApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomAttribute**](CustomAttributeApi.md#createcustomattribute) | **POST** /lists/{list_id}/custom-attributes | Create a custom attribute
[**deleteCustomAttribute**](CustomAttributeApi.md#deletecustomattribute) | **DELETE** /lists/{list_id}/custom-attributes/{name} | Delete a custom attribute
[**getCustomAttribute**](CustomAttributeApi.md#getcustomattribute) | **GET** /lists/{list_id}/custom-attributes/{name} | Show a custom attribute
[**listCustomAttributes**](CustomAttributeApi.md#listcustomattributes) | **GET** /lists/{list_id}/custom-attributes | Show all custom attributes

# **createCustomAttribute**
> \Swagger\Client\Model\CreateAttributeResponse createCustomAttribute($body, $list_id, $account_id)

Create a custom attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateCustomAttribute(); // \Swagger\Client\Model\CreateCustomAttribute | 
$list_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createCustomAttribute($body, $list_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->createCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateCustomAttribute**](../Model/CreateCustomAttribute.md)|  |
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateAttributeResponse**](../Model/CreateAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomAttribute**
> \Swagger\Client\Model\DeleteCustomAttributeResponse deleteCustomAttribute($list_id, $name, $account_id)

Delete a custom attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$name = "name_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteCustomAttribute($list_id, $name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->deleteCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **name** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\DeleteCustomAttributeResponse**](../Model/DeleteCustomAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomAttribute**
> \Swagger\Client\Model\CustomAttributeResponse getCustomAttribute($list_id, $name, $account_id)

Show a custom attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$name = "name_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getCustomAttribute($list_id, $name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->getCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **name** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomAttributeResponse**](../Model/CustomAttributeResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomAttributes**
> \Swagger\Client\Model\CustomAttributesResponse listCustomAttributes($list_id, $account_id, $page, $per_page, $with_count)

Show all custom attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 

try {
    $result = $apiInstance->listCustomAttributes($list_id, $account_id, $page, $per_page, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeApi->listCustomAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CustomAttributesResponse**](../Model/CustomAttributesResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

