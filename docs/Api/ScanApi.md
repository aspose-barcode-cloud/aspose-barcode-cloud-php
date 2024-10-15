# Aspose\BarCode\ScanApi

All URIs are relative to https://barcode.qa.aspose.cloud/v4.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**barcodeScanBodyPost()**](ScanApi.md#barcodeScanBodyPost) | **POST** /barcode/scan-body | Scan barcode from file in request body using POST requests with parameter in body in json or xml format. |
| [**barcodeScanFormPost()**](ScanApi.md#barcodeScanFormPost) | **POST** /barcode/scan-form | Scan barcode from file in request body using POST requests with parameter in multipart form. |
| [**barcodeScanGet()**](ScanApi.md#barcodeScanGet) | **GET** /barcode/scan | Scan barcode from file on server using GET requests with parameter in query string. |


## `barcodeScanBodyPost()`

```php
barcodeScanBodyPost($scan_base64_request): \Aspose\BarCode\Model\BarcodeResponseList
```

Scan barcode from file in request body using POST requests with parameter in body in json or xml format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\ScanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scan_base64_request = new \Aspose\BarCode\Model\ScanBase64Request(); // \Aspose\BarCode\Model\ScanBase64Request | Barcode scan request

try {
    $result = $apiInstance->barcodeScanBodyPost($scan_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->barcodeScanBodyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scan_base64_request** | [**\Aspose\BarCode\Model\ScanBase64Request**](../Model/ScanBase64Request.md)| Barcode scan request | |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `barcodeScanFormPost()`

```php
barcodeScanFormPost($file): \Aspose\BarCode\Model\BarcodeResponseList
```

Scan barcode from file in request body using POST requests with parameter in multipart form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\ScanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | Barcode image file

try {
    $result = $apiInstance->barcodeScanFormPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->barcodeScanFormPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Barcode image file | |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `barcodeScanGet()`

```php
barcodeScanGet($file_url): \Aspose\BarCode\Model\BarcodeResponseList
```

Scan barcode from file on server using GET requests with parameter in query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\ScanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_url = 'file_url_example'; // string | Url to barcode image

try {
    $result = $apiInstance->barcodeScanGet($file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->barcodeScanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_url** | **string**| Url to barcode image | |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
