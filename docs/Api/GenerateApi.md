# Aspose\BarCode\GenerateApi

All URIs are relative to https://barcode.qa.aspose.cloud/v4.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**barcodeGenerateBarcodeTypeGet()**](GenerateApi.md#barcodeGenerateBarcodeTypeGet) | **GET** /barcode/generate/{barcodeType} | Generate barcode using GET request with parameters in route and query string. |
| [**barcodeGenerateBodyPost()**](GenerateApi.md#barcodeGenerateBodyPost) | **POST** /barcode/generate-body | Generate barcode using POST request with parameters in body in json or xml format. |
| [**barcodeGenerateFormPost()**](GenerateApi.md#barcodeGenerateFormPost) | **POST** /barcode/generate-form | Generate barcode using POST request with parameters in url ecncoded form. |


## `barcodeGenerateBarcodeTypeGet()`

```php
barcodeGenerateBarcodeTypeGet($barcode_type, $data_type, $data, $image_format, $two_d_display_text, $text_location, $text_alignment, $foreground_color, $background_color, $units, $resolution, $image_height, $image_width, $rotation_angle): \SplFileObject
```

Generate barcode using GET request with parameters in route and query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\GenerateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode_type = new \Aspose\BarCode\Model\EncodeBarcodeType(); // EncodeBarcodeType | Type of barcode to generate.
$data_type = new \Aspose\BarCode\Model\EncodeDataType(); // EncodeDataType | Type of data to encode.
$data = 'data_example'; // string | String represents data to encode
$image_format = new \Aspose\BarCode\Model\AvailableBarCodeImageFormat(); // AvailableBarCodeImageFormat | Barcode output image format.  Default value: png
$two_d_display_text = 'two_d_display_text_example'; // string | Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
$text_location = new \Aspose\BarCode\Model\CodeLocation(); // CodeLocation | Specify the displaying Text Location, set to CodeLocation.None to hide CodeText.  Default value: CodeLocation.Below.
$text_alignment = new \Aspose\BarCode\Model\TextAlignment(); // TextAlignment | Text alignment.  Default value: TextAligment.Left
$foreground_color = 'foreground_color_example'; // string | Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black.
$background_color = 'background_color_example'; // string | Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White.
$units = new \Aspose\BarCode\Model\AvailableGraphicsUnit(); // AvailableGraphicsUnit | Common Units for all measuring in query. Default units: pixel.
$resolution = 3.4; // float | Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi.
$image_height = 3.4; // float | Height of the barcode image in given units. Default units: pixel.
$image_width = 3.4; // float | Width of the barcode image in given units. Default units: pixel.
$rotation_angle = 56; // int | BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0.

try {
    $result = $apiInstance->barcodeGenerateBarcodeTypeGet($barcode_type, $data_type, $data, $image_format, $two_d_display_text, $text_location, $text_alignment, $foreground_color, $background_color, $units, $resolution, $image_height, $image_width, $rotation_angle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateApi->barcodeGenerateBarcodeTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**EncodeBarcodeType**](../Model/.md)| Type of barcode to generate. | |
| **data_type** | [**EncodeDataType**](../Model/.md)| Type of data to encode. | |
| **data** | **string**| String represents data to encode | |
| **image_format** | [**AvailableBarCodeImageFormat**](../Model/.md)| Barcode output image format.  Default value: png | [optional] |
| **two_d_display_text** | **string**| Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional] |
| **text_location** | [**CodeLocation**](../Model/.md)| Specify the displaying Text Location, set to CodeLocation.None to hide CodeText.  Default value: CodeLocation.Below. | [optional] |
| **text_alignment** | [**TextAlignment**](../Model/.md)| Text alignment.  Default value: TextAligment.Left | [optional] |
| **foreground_color** | **string**| Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black. | [optional] |
| **background_color** | **string**| Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White. | [optional] |
| **units** | [**AvailableGraphicsUnit**](../Model/.md)| Common Units for all measuring in query. Default units: pixel. | [optional] |
| **resolution** | **float**| Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi. | [optional] |
| **image_height** | **float**| Height of the barcode image in given units. Default units: pixel. | [optional] |
| **image_width** | **float**| Width of the barcode image in given units. Default units: pixel. | [optional] |
| **rotation_angle** | **int**| BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `image/bmp`, `image/gif`, `image/jpeg`, `image/svg+xml`, `image/tiff`, `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `barcodeGenerateBodyPost()`

```php
barcodeGenerateBodyPost($generate_params): \SplFileObject
```

Generate barcode using POST request with parameters in body in json or xml format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\GenerateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_params = new \Aspose\BarCode\Model\GenerateParams(); // \Aspose\BarCode\Model\GenerateParams | Parameters of generation

try {
    $result = $apiInstance->barcodeGenerateBodyPost($generate_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateApi->barcodeGenerateBodyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_params** | [**\Aspose\BarCode\Model\GenerateParams**](../Model/GenerateParams.md)| Parameters of generation | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `image/png`, `image/bmp`, `image/gif`, `image/jpeg`, `image/svg+xml`, `image/tiff`, `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `barcodeGenerateFormPost()`

```php
barcodeGenerateFormPost($barcode_type, $data_type, $data, $image_format, $two_d_display_text, $text_location, $text_alignment, $foreground_color, $background_color, $units, $resolution, $image_height, $image_width, $rotation_angle): \SplFileObject
```

Generate barcode using POST request with parameters in url ecncoded form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aspose\BarCode\Api\GenerateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode_type = new \Aspose\BarCode\Model\EncodeBarcodeType(); // \Aspose\BarCode\Model\EncodeBarcodeType
$data_type = new \Aspose\BarCode\Model\EncodeDataType(); // \Aspose\BarCode\Model\EncodeDataType
$data = 'data_example'; // string | String represents data to encode
$image_format = new \Aspose\BarCode\Model\AvailableBarCodeImageFormat(); // \Aspose\BarCode\Model\AvailableBarCodeImageFormat
$two_d_display_text = 'two_d_display_text_example'; // string | Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
$text_location = new \Aspose\BarCode\Model\CodeLocation(); // \Aspose\BarCode\Model\CodeLocation
$text_alignment = new \Aspose\BarCode\Model\TextAlignment(); // \Aspose\BarCode\Model\TextAlignment
$foreground_color = 'foreground_color_example'; // string | Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black.
$background_color = 'background_color_example'; // string | Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White.
$units = new \Aspose\BarCode\Model\AvailableGraphicsUnit(); // \Aspose\BarCode\Model\AvailableGraphicsUnit
$resolution = 3.4; // float | Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi.
$image_height = 3.4; // float | Height of the barcode image in given units. Default units: pixel.
$image_width = 3.4; // float | Width of the barcode image in given units. Default units: pixel.
$rotation_angle = 56; // int | BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0.

try {
    $result = $apiInstance->barcodeGenerateFormPost($barcode_type, $data_type, $data, $image_format, $two_d_display_text, $text_location, $text_alignment, $foreground_color, $background_color, $units, $resolution, $image_height, $image_width, $rotation_angle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateApi->barcodeGenerateFormPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_type** | [**\Aspose\BarCode\Model\EncodeBarcodeType**](../Model/EncodeBarcodeType.md)|  | |
| **data_type** | [**\Aspose\BarCode\Model\EncodeDataType**](../Model/EncodeDataType.md)|  | |
| **data** | **string**| String represents data to encode | |
| **image_format** | [**\Aspose\BarCode\Model\AvailableBarCodeImageFormat**](../Model/AvailableBarCodeImageFormat.md)|  | [optional] |
| **two_d_display_text** | **string**| Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional] |
| **text_location** | [**\Aspose\BarCode\Model\CodeLocation**](../Model/CodeLocation.md)|  | [optional] |
| **text_alignment** | [**\Aspose\BarCode\Model\TextAlignment**](../Model/TextAlignment.md)|  | [optional] |
| **foreground_color** | **string**| Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black. | [optional] |
| **background_color** | **string**| Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White. | [optional] |
| **units** | [**\Aspose\BarCode\Model\AvailableGraphicsUnit**](../Model/AvailableGraphicsUnit.md)|  | [optional] |
| **resolution** | **float**| Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi. | [optional] |
| **image_height** | **float**| Height of the barcode image in given units. Default units: pixel. | [optional] |
| **image_width** | **float**| Width of the barcode image in given units. Default units: pixel. | [optional] |
| **rotation_angle** | **int**| BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `image/png`, `image/bmp`, `image/gif`, `image/jpeg`, `image/svg+xml`, `image/tiff`, `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
