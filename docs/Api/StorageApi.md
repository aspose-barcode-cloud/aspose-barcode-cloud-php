# Aspose\BarCode\StorageApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDiscUsage**](StorageApi.md#getDiscUsage) | **GET** /barcode/storage/disc | Get disc usage
[**getFileVersions**](StorageApi.md#getFileVersions) | **GET** /barcode/storage/version/{path} | Get file versions
[**objectExists**](StorageApi.md#objectExists) | **GET** /barcode/storage/exist/{path} | Check if file or folder exists
[**storageExists**](StorageApi.md#storageExists) | **GET** /barcode/storage/{storageName}/exist | Check if storage exists


# **getDiscUsage**
> \Aspose\BarCode\Model\DiscUsage getDiscUsage($storage_name)

Get disc usage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_name = "storage_name_example"; // string | Storage name

try {
    $result = $apiInstance->getDiscUsage($storage_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getDiscUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

### Return type

[**\Aspose\BarCode\Model\DiscUsage**](../Model/DiscUsage.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileVersions**
> \Aspose\BarCode\Model\FileVersions getFileVersions($path, $storage_name)

Get file versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | File path e.g. '/file.ext'
$storage_name = "storage_name_example"; // string | Storage name

try {
    $result = $apiInstance->getFileVersions($path, $storage_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getFileVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

### Return type

[**\Aspose\BarCode\Model\FileVersions**](../Model/FileVersions.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectExists**
> \Aspose\BarCode\Model\ObjectExist objectExists($path, $storage_name, $version_id)

Check if file or folder exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | File or folder path e.g. '/file.ext' or '/folder'
$storage_name = "storage_name_example"; // string | Storage name
$version_id = "version_id_example"; // string | File version ID

try {
    $result = $apiInstance->objectExists($path, $storage_name, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->objectExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

### Return type

[**\Aspose\BarCode\Model\ObjectExist**](../Model/ObjectExist.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storageExists**
> \Aspose\BarCode\Model\StorageExist storageExists($storage_name)

Check if storage exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_name = "storage_name_example"; // string | Storage name

try {
    $result = $apiInstance->storageExists($storage_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

### Return type

[**\Aspose\BarCode\Model\StorageExist**](../Model/StorageExist.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

