# Swagger\Client\FormApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForm**](FormApi.md#createform) | **POST** /forms | Create a form
[**deleteForm**](FormApi.md#deleteform) | **DELETE** /forms/{form_id} | Delete a form
[**getForm**](FormApi.md#getform) | **GET** /forms/{form_id} | Show a form details
[**listForms**](FormApi.md#listforms) | **GET** /forms | Show all forms
[**patchForm**](FormApi.md#patchform) | **PATCH** /forms/{form_id} | Update a form

# **createForm**
> \Swagger\Client\Model\CreateFormResponse createForm($body, $account_id)

Create a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateForm(); // \Swagger\Client\Model\CreateForm | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createForm($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->createForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateForm**](../Model/CreateForm.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateFormResponse**](../Model/CreateFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteForm**
> \Swagger\Client\Model\DeleteFormResponse deleteForm($form_id, $account_id)

Delete a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = "form_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->deleteForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\DeleteFormResponse**](../Model/DeleteFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForm**
> \Swagger\Client\Model\FormResponse getForm($form_id, $account_id)

Show a form details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = "form_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->getForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\FormResponse**](../Model/FormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listForms**
> \Swagger\Client\Model\FormsResponse listForms($account_id, $page, $per_page, $with_count, $sort)

Show all forms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `language`   - `created_on`   - `last_updated_on`   - `list_id`   - `status`

try {
    $result = $apiInstance->listForms($account_id, $page, $per_page, $with_count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->listForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;language&#x60;   - &#x60;created_on&#x60;   - &#x60;last_updated_on&#x60;   - &#x60;list_id&#x60;   - &#x60;status&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\FormsResponse**](../Model/FormsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchForm**
> \Swagger\Client\Model\PatchFormResponse patchForm($body, $form_id, $account_id)

Update a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Form(); // \Swagger\Client\Model\Form | 
$form_id = "form_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchForm($body, $form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->patchForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Form**](../Model/Form.md)|  |
 **form_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PatchFormResponse**](../Model/PatchFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

