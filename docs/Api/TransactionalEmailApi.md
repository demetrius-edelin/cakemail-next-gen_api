# Swagger\Client\TransactionalEmailApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEmail**](TransactionalEmailApi.md#sendemail) | **POST** /emails | Send a transactional email

# **sendEmail**
> \Swagger\Client\Model\SendEmailResponse sendEmail($body, $account_id)

Send a transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Email(); // \Swagger\Client\Model\Email | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->sendEmail($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Email**](../Model/Email.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\SendEmailResponse**](../Model/SendEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

