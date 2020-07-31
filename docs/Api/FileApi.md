# Aspose\BarCode\FileApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFile**](FileApi.md#copyFile) | **PUT** /barcode/storage/file/copy/{srcPath} | Copy file
[**deleteFile**](FileApi.md#deleteFile) | **DELETE** /barcode/storage/file/{path} | Delete file
[**downloadFile**](FileApi.md#downloadFile) | **GET** /barcode/storage/file/{path} | Download file
[**moveFile**](FileApi.md#moveFile) | **PUT** /barcode/storage/file/move/{srcPath} | Move file
[**uploadFile**](FileApi.md#uploadFile) | **PUT** /barcode/storage/file/{path} | Upload file


# **copyFile**
> copyFile($src_path, $dest_path, $src_storage_name, $dest_storage_name, $version_id)

Copy file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$src_path = "src_path_example"; // string | Source file path e.g. '/folder/file.ext'
$dest_path = "dest_path_example"; // string | Destination file path
$src_storage_name = "src_storage_name_example"; // string | Source storage name
$dest_storage_name = "dest_storage_name_example"; // string | Destination storage name
$version_id = "version_id_example"; // string | File version ID to copy

try {
    $apiInstance->copyFile($src_path, $dest_path, $src_storage_name, $dest_storage_name, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> deleteFile($path, $storage_name, $version_id)

Delete file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | File path e.g. '/folder/file.ext'
$storage_name = "storage_name_example"; // string | Storage name
$version_id = "version_id_example"; // string | File version ID to delete

try {
    $apiInstance->deleteFile($path, $storage_name, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**
> \SplFileObject downloadFile($path, $storage_name, $version_id)

Download file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | File path e.g. '/folder/file.ext'
$storage_name = "storage_name_example"; // string | Storage name
$version_id = "version_id_example"; // string | File version ID to download

try {
    $result = $apiInstance->downloadFile($path, $storage_name, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveFile**
> moveFile($src_path, $dest_path, $src_storage_name, $dest_storage_name, $version_id)

Move file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$src_path = "src_path_example"; // string | Source file path e.g. '/src.ext'
$dest_path = "dest_path_example"; // string | Destination file path e.g. '/dest.ext'
$src_storage_name = "src_storage_name_example"; // string | Source storage name
$dest_storage_name = "dest_storage_name_example"; // string | Destination storage name
$version_id = "version_id_example"; // string | File version ID to move

try {
    $apiInstance->moveFile($src_path, $dest_path, $src_storage_name, $dest_storage_name, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->moveFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Aspose\BarCode\Model\FilesUploadResult uploadFile($path, $file, $storage_name)

Upload file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext  If the content is multipart and path does not contains the file name it tries to get them from filename parameter  from Content-Disposition header.
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$storage_name = "storage_name_example"; // string | Storage name

try {
    $result = $apiInstance->uploadFile($path, $file, $storage_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext  If the content is multipart and path does not contains the file name it tries to get them from filename parameter  from Content-Disposition header. |
 **file** | **\SplFileObject**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

### Return type

[**\Aspose\BarCode\Model\FilesUploadResult**](../Model/FilesUploadResult.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

