# Aspose\BarCode\RecognizeApi

All URIs are relative to https://api.aspose.cloud/v4.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recognize()**](RecognizeApi.md#recognize) | **GET** /barcode/recognize | Recognize barcode from file on server using GET requests with parameters in route and query string. |
| [**recognizeBase64()**](RecognizeApi.md#recognizeBase64) | **POST** /barcode/recognize-body | Recognize barcode from file in request body using POST requests with parameters in body in json or xml format. |
| [**recognizeMultipart()**](RecognizeApi.md#recognizeMultipart) | **POST** /barcode/recognize-multipart | Recognize barcode from file in request body using POST requests with parameters in multipart form. |


## `recognize()`

```php
recognize($barcode_type, $file_url, $recognition_mode, $recognition_image_kind): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file on server using GET requests with parameters in route and query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_type = new \Aspose\BarCode\Model\DecodeBarcodeType(); // DecodeBarcodeType | Type of barcode to recognize
$file_url = 'file_url_example'; // string | Url to barcode image
$recognition_mode = new \Aspose\BarCode\Model\RecognitionMode(); // RecognitionMode | Recognition mode
$recognition_image_kind = new \Aspose\BarCode\Model\RecognitionImageKind(); // RecognitionImageKind | Image kind for recognition

try {
    $result = $apiInstance->recognize($barcode_type, $file_url, $recognition_mode, $recognition_image_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**DecodeBarcodeType**](../Model/.md)| Type of barcode to recognize | |
| **file_url** | **string**| Url to barcode image | |
| **recognition_mode** | [**RecognitionMode**](../Model/.md)| Recognition mode | [optional] |
| **recognition_image_kind** | [**RecognitionImageKind**](../Model/.md)| Image kind for recognition | [optional] |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recognizeBase64()`

```php
recognizeBase64($recognize_base64_request): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recognize_base64_request = new \Aspose\BarCode\Model\RecognizeBase64Request(); // \Aspose\BarCode\Model\RecognizeBase64Request | Barcode recognition request

try {
    $result = $apiInstance->recognizeBase64($recognize_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recognize_base64_request** | [**\Aspose\BarCode\Model\RecognizeBase64Request**](../Model/RecognizeBase64Request.md)| Barcode recognition request | |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recognizeMultipart()`

```php
recognizeMultipart($barcode_type, $file, $recognition_mode, $recognition_image_kind): \Aspose\BarCode\Model\BarcodeResponseList
```

Recognize barcode from file in request body using POST requests with parameters in multipart form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aspose\BarCode\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_type = new \Aspose\BarCode\Model\DecodeBarcodeType(); // \Aspose\BarCode\Model\DecodeBarcodeType
$file = "/path/to/file.txt"; // \SplFileObject | Barcode image file
$recognition_mode = new \Aspose\BarCode\Model\RecognitionMode(); // \Aspose\BarCode\Model\RecognitionMode
$recognition_image_kind = new \Aspose\BarCode\Model\RecognitionImageKind(); // \Aspose\BarCode\Model\RecognitionImageKind

try {
    $result = $apiInstance->recognizeMultipart($barcode_type, $file, $recognition_mode, $recognition_image_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeMultipart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**\Aspose\BarCode\Model\DecodeBarcodeType**](../Model/DecodeBarcodeType.md)|  | |
| **file** | **\SplFileObject****\SplFileObject**| Barcode image file | |
| **recognition_mode** | [**\Aspose\BarCode\Model\RecognitionMode**](../Model/RecognitionMode.md)|  | [optional] |
| **recognition_image_kind** | [**\Aspose\BarCode\Model\RecognitionImageKind**](../Model/RecognitionImageKind.md)|  | [optional] |

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
