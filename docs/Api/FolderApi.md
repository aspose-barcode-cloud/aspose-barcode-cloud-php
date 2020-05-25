# Aspose\BarCode\FolderApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFolder**](FolderApi.md#copyFolder) | **PUT** /barcode/storage/folder/copy/{srcPath} | Copy folder
[**createFolder**](FolderApi.md#createFolder) | **PUT** /barcode/storage/folder/{path} | Create the folder
[**deleteFolder**](FolderApi.md#deleteFolder) | **DELETE** /barcode/storage/folder/{path} | Delete folder
[**getFilesList**](FolderApi.md#getFilesList) | **GET** /barcode/storage/folder/{path} | Get all files and folders within a folder
[**moveFolder**](FolderApi.md#moveFolder) | **PUT** /barcode/storage/folder/move/{srcPath} | Move folder


# **copyFolder**
> copyFolder($src_path, $dest_path, $src_storage_name, $dest_storage_name)

Copy folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$src_path = "src_path_example"; // string | Source folder path e.g. '/src'
$dest_path = "dest_path_example"; // string | Destination folder path e.g. '/dst'
$src_storage_name = "src_storage_name_example"; // string | Source storage name
$dest_storage_name = "dest_storage_name_example"; // string | Destination storage name

try {
    $apiInstance->copyFolder($src_path, $dest_path, $src_storage_name, $dest_storage_name);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->copyFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> createFolder($path, $storage_name)

Create the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | Folder path to create e.g. 'folder_1/folder_2/'
$storage_name = "storage_name_example"; // string | Storage name

try {
    $apiInstance->createFolder($path, $storage_name);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> deleteFolder($path, $storage_name, $recursive)

Delete folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | Folder path e.g. '/folder'
$storage_name = "storage_name_example"; // string | Storage name
$recursive = false; // bool | Enable to delete folders, subfolders and files

try {
    $apiInstance->deleteFolder($path, $storage_name, $recursive);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesList**
> \Aspose\BarCode\Model\FilesList getFilesList($path, $storage_name)

Get all files and folders within a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | Folder path e.g. '/folder'
$storage_name = "storage_name_example"; // string | Storage name

try {
    $result = $apiInstance->getFilesList($path, $storage_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

### Return type

[**\Aspose\BarCode\Model\FilesList**](../Model/FilesList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveFolder**
> moveFolder($src_path, $dest_path, $src_storage_name, $dest_storage_name)

Move folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$src_path = "src_path_example"; // string | Folder path to move e.g. '/folder'
$dest_path = "dest_path_example"; // string | Destination folder path to move to e.g '/dst'
$src_storage_name = "src_storage_name_example"; // string | Source storage name
$dest_storage_name = "dest_storage_name_example"; // string | Destination storage name

try {
    $apiInstance->moveFolder($src_path, $dest_path, $src_storage_name, $dest_storage_name);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->moveFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

