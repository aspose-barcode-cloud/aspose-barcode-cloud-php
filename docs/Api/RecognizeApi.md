# Aspose\BarCode\RecognizeApi

All URIs are relative to https://barcode.qa.aspose.cloud/v4.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**barcodeRecognizeBarcodeTypeGet()**](RecognizeApi.md#barcodeRecognizeBarcodeTypeGet) | **GET** /barcode/recognize/{barcodeType} | Recognize barcode from file on server using GET requests with parameters in route and query string. |
| [**barcodeRecognizeBodyPost()**](RecognizeApi.md#barcodeRecognizeBodyPost) | **POST** /barcode/recognize-body | Recognize barcode from file in request body using POST requests with parameters in body in json or xml format. |
| [**barcodeRecognizeFormPost()**](RecognizeApi.md#barcodeRecognizeFormPost) | **POST** /barcode/recognize-form | Recognize barcode from file in request body using POST requests with parameters in multipart form. |


## `barcodeRecognizeBarcodeTypeGet()`

```php
barcodeRecognizeBarcodeTypeGet($barcode_type, $url, $recognition_mode, $image_kind): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file on server using GET requests with parameters in route and query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode_type = new \Aspose\BarCode\Model\DecodeBarcodeType(); // DecodeBarcodeType | Type of barcode to recognize
$url = 'url_example'; // string | Url to barcode image
$recognition_mode = new \Aspose\BarCode\Model\RecognitionMode(); // RecognitionMode | Recognition mode
$image_kind = new \Aspose\BarCode\Model\RecognitionImageKind(); // RecognitionImageKind | Image kind

try {
    $result = $apiInstance->barcodeRecognizeBarcodeTypeGet($barcode_type, $url, $recognition_mode, $image_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->barcodeRecognizeBarcodeTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**DecodeBarcodeType**](../Model/.md)| Type of barcode to recognize | |
| **url** | **string**| Url to barcode image | |
| **recognition_mode** | [**RecognitionMode**](../Model/.md)| Recognition mode | [optional] |
| **image_kind** | [**RecognitionImageKind**](../Model/.md)| Image kind | [optional] |

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

## `barcodeRecognizeBodyPost()`

```php
barcodeRecognizeBodyPost($recognize_base64_request): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recognize_base64_request = new \Aspose\BarCode\Model\RecognizeBase64Request(); // \Aspose\BarCode\Model\RecognizeBase64Request | Barcode recognition request

try {
    $result = $apiInstance->barcodeRecognizeBodyPost($recognize_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->barcodeRecognizeBodyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recognize_base64_request** | [**\Aspose\BarCode\Model\RecognizeBase64Request**](../Model/RecognizeBase64Request.md)| Barcode recognition request | |

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

## `barcodeRecognizeFormPost()`

```php
barcodeRecognizeFormPost($barcode_type, $file, $recognition_mode, $image_kind): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file in request body using POST requests with parameters in multipart form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode_type = new \Aspose\BarCode\Model\DecodeBarcodeType(); // \Aspose\BarCode\Model\DecodeBarcodeType
$file = "/path/to/file.txt"; // \SplFileObject
$recognition_mode = new \Aspose\BarCode\Model\RecognitionMode(); // \Aspose\BarCode\Model\RecognitionMode
$image_kind = new \Aspose\BarCode\Model\RecognitionImageKind(); // \Aspose\BarCode\Model\RecognitionImageKind

try {
    $result = $apiInstance->barcodeRecognizeFormPost($barcode_type, $file, $recognition_mode, $image_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->barcodeRecognizeFormPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**\Aspose\BarCode\Model\DecodeBarcodeType**](../Model/DecodeBarcodeType.md)|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **recognition_mode** | [**\Aspose\BarCode\Model\RecognitionMode**](../Model/RecognitionMode.md)|  | [optional] |
| **image_kind** | [**\Aspose\BarCode\Model\RecognitionImageKind**](../Model/RecognitionImageKind.md)|  | [optional] |

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
