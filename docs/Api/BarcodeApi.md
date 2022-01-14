# Aspose\BarCode\BarcodeApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBarcodeGenerate**](BarcodeApi.md#getBarcodeGenerate) | **GET** /barcode/generate | Generate barcode.
[**getBarcodeRecognize**](BarcodeApi.md#getBarcodeRecognize) | **GET** /barcode/{name}/recognize | Recognize barcode from a file on server.
[**postBarcodeRecognizeFromUrlOrContent**](BarcodeApi.md#postBarcodeRecognizeFromUrlOrContent) | **POST** /barcode/recognize | Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image or encoded with base64.
[**postGenerateMultiple**](BarcodeApi.md#postGenerateMultiple) | **POST** /barcode/generateMultiple | Generate multiple barcodes and return in response stream
[**putBarcodeGenerateFile**](BarcodeApi.md#putBarcodeGenerateFile) | **PUT** /barcode/{name}/generate | Generate barcode and save on server (from query params or from file with json or xml content)
[**putBarcodeRecognizeFromBody**](BarcodeApi.md#putBarcodeRecognizeFromBody) | **PUT** /barcode/{name}/recognize | Recognition of a barcode from file on server with parameters in body.
[**putGenerateMultiple**](BarcodeApi.md#putGenerateMultiple) | **PUT** /barcode/{name}/generateMultiple | Generate image with multiple barcodes and put new file on server


# **getBarcodeGenerate**
> \SplFileObject getBarcodeGenerate($type, $text, $two_d_display_text, $text_location, $text_alignment, $text_color, $font_size_mode, $no_wrap, $resolution, $resolution_x, $resolution_y, $dimension_x, $text_space, $units, $size_mode, $bar_height, $image_height, $image_width, $rotation_angle, $back_color, $bar_color, $border_color, $border_width, $border_dash_style, $border_visible, $enable_checksum, $enable_escape, $filled_bars, $always_show_checksum, $wide_narrow_ratio, $validate_text, $supplement_data, $supplement_space, $bar_width_reduction, $format)

Generate barcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Type of barcode to generate.
$text = "text_example"; // string | Text to encode.
$two_d_display_text = "two_d_display_text_example"; // string | Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
$text_location = "text_location_example"; // string | Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below.
$text_alignment = "text_alignment_example"; // string | Text alignment.
$text_color = "text_color_example"; // string | Specify the displaying CodeText's Color. Default value: Color.Black.
$font_size_mode = "font_size_mode_example"; // string | Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto.
$no_wrap = true; // bool | Specify word wraps (line breaks) within text. Default value: false.
$resolution = 1.2; // double | Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi.
$resolution_x = 1.2; // double | DEPRECATED: Use 'Resolution' instead.
$resolution_y = 1.2; // double | DEPRECATED: Use 'Resolution' instead.
$dimension_x = 1.2; // double | The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation.
$text_space = 1.2; // double | Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon.
$units = "units_example"; // string | Common Units for all measuring in query. Default units: pixel.
$size_mode = "size_mode_example"; // string | Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None.
$bar_height = 1.2; // double | Height of the barcode in given units. Default units: pixel.
$image_height = 1.2; // double | Height of the barcode image in given units. Default units: pixel.
$image_width = 1.2; // double | Width of the barcode image in given units. Default units: pixel.
$rotation_angle = 1.2; // double | BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0.
$back_color = "back_color_example"; // string | Background color of the barcode image. Default value: Color.White.
$bar_color = "bar_color_example"; // string | Bars color. Default value: Color.Black.
$border_color = "border_color_example"; // string | Border color. Default value: Color.Black.
$border_width = 1.2; // double | Border width. Default value: 0. Ignored if Visible is set to false.
$border_dash_style = "border_dash_style_example"; // string | Border dash style. Default value: BorderDashStyle.Solid.
$border_visible = true; // bool | Border visibility. If false than parameter Width is always ignored (0). Default value: false.
$enable_checksum = "enable_checksum_example"; // string | Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology
$enable_escape = true; // bool | Indicates whether explains the character \"\\\" as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \"\\\" will be explained as a special escape character. Otherwise, \"\\\" acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR.
$filled_bars = true; // bool | Value indicating whether bars are filled. Only for 1D barcodes. Default value: true.
$always_show_checksum = true; // bool | Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes.
$wide_narrow_ratio = 1.2; // double | Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard
$validate_text = true; // bool | Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode's specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect.
$supplement_data = "supplement_data_example"; // string | Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN.
$supplement_space = 1.2; // double | Space between main the BarCode and supplement BarCode.
$bar_width_reduction = 1.2; // double | Bars reduction value that is used to compensate ink spread while printing.
$format = "format_example"; // string | Result image format.

try {
    $result = $apiInstance->getBarcodeGenerate($type, $text, $two_d_display_text, $text_location, $text_alignment, $text_color, $font_size_mode, $no_wrap, $resolution, $resolution_x, $resolution_y, $dimension_x, $text_space, $units, $size_mode, $bar_height, $image_height, $image_width, $rotation_angle, $back_color, $bar_color, $border_color, $border_width, $border_dash_style, $border_visible, $enable_checksum, $enable_escape, $filled_bars, $always_show_checksum, $wide_narrow_ratio, $validate_text, $supplement_data, $supplement_space, $bar_width_reduction, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->getBarcodeGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of barcode to generate. |
 **text** | **string**| Text to encode. |
 **two_d_display_text** | **string**| Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional]
 **text_location** | **string**| Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below. | [optional]
 **text_alignment** | **string**| Text alignment. | [optional]
 **text_color** | **string**| Specify the displaying CodeText&#39;s Color. Default value: Color.Black. | [optional]
 **font_size_mode** | **string**| Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto. | [optional]
 **no_wrap** | **bool**| Specify word wraps (line breaks) within text. Default value: false. | [optional]
 **resolution** | **double**| Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi. | [optional]
 **resolution_x** | **double**| DEPRECATED: Use &#39;Resolution&#39; instead. | [optional]
 **resolution_y** | **double**| DEPRECATED: Use &#39;Resolution&#39; instead. | [optional]
 **dimension_x** | **double**| The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation. | [optional]
 **text_space** | **double**| Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon. | [optional]
 **units** | **string**| Common Units for all measuring in query. Default units: pixel. | [optional]
 **size_mode** | **string**| Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None. | [optional]
 **bar_height** | **double**| Height of the barcode in given units. Default units: pixel. | [optional]
 **image_height** | **double**| Height of the barcode image in given units. Default units: pixel. | [optional]
 **image_width** | **double**| Width of the barcode image in given units. Default units: pixel. | [optional]
 **rotation_angle** | **double**| BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0. | [optional]
 **back_color** | **string**| Background color of the barcode image. Default value: Color.White. | [optional]
 **bar_color** | **string**| Bars color. Default value: Color.Black. | [optional]
 **border_color** | **string**| Border color. Default value: Color.Black. | [optional]
 **border_width** | **double**| Border width. Default value: 0. Ignored if Visible is set to false. | [optional]
 **border_dash_style** | **string**| Border dash style. Default value: BorderDashStyle.Solid. | [optional]
 **border_visible** | **bool**| Border visibility. If false than parameter Width is always ignored (0). Default value: false. | [optional]
 **enable_checksum** | **string**| Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology | [optional]
 **enable_escape** | **bool**| Indicates whether explains the character \&quot;\\\&quot; as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \&quot;\\\&quot; will be explained as a special escape character. Otherwise, \&quot;\\\&quot; acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR. | [optional]
 **filled_bars** | **bool**| Value indicating whether bars are filled. Only for 1D barcodes. Default value: true. | [optional]
 **always_show_checksum** | **bool**| Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes. | [optional]
 **wide_narrow_ratio** | **double**| Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard | [optional]
 **validate_text** | **bool**| Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode&#39;s specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect. | [optional]
 **supplement_data** | **string**| Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN. | [optional]
 **supplement_space** | **double**| Space between main the BarCode and supplement BarCode. | [optional]
 **bar_width_reduction** | **double**| Bars reduction value that is used to compensate ink spread while printing. | [optional]
 **format** | **string**| Result image format. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: image/png, image/bmp, image/gif, image/jpeg, image/svg+xml, image/tiff

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBarcodeRecognize**
> \Aspose\BarCode\Model\BarcodeResponseList getBarcodeRecognize($name, $type, $checksum_validation, $detect_encoding, $preset, $rect_x, $rect_y, $rect_width, $rect_height, $strip_fnc, $timeout, $median_smoothing_window_size, $allow_median_smoothing, $allow_complex_background, $allow_datamatrix_industrial_barcodes, $allow_decreased_image, $allow_detect_scan_gap, $allow_incorrect_barcodes, $allow_invert_image, $allow_micro_white_spots_removing, $allow_one_d_fast_barcodes_detector, $allow_one_d_wiped_bars_restoration, $allow_qr_micro_qr_restoration, $allow_regular_image, $allow_salt_and_pepper_filtering, $allow_white_spots_removing, $check_more1_d_variants, $fast_scan_only, $region_likelihood_threshold_percent, $scan_window_sizes, $similarity, $skip_diagonal_search, $read_tiny_barcodes, $australian_post_encoding_table, $ignore_ending_filling_patterns_for_c_table, $rectangle_region, $storage, $folder)

Recognize barcode from a file on server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The image file name.
$type = "type_example"; // string | The type of barcode to read.
$checksum_validation = "checksum_validation_example"; // string | Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies
$detect_encoding = true; // bool | A flag which force engine to detect codetext encoding for Unicode.
$preset = "preset_example"; // string | Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality.
$rect_x = 56; // int | Set X for area for recognition.
$rect_y = 56; // int | Set Y for area for recognition.
$rect_width = 56; // int | Set Width of area for recognition.
$rect_height = 56; // int | Set Height of area for recognition.
$strip_fnc = true; // bool | Value indicating whether FNC symbol strip must be done.
$timeout = 56; // int | Timeout of recognition process.
$median_smoothing_window_size = 56; // int | Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set.
$allow_median_smoothing = true; // bool | Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes.
$allow_complex_background = true; // bool | Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode.
$allow_datamatrix_industrial_barcodes = true; // bool | Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots.
$allow_decreased_image = true; // bool | Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution.
$allow_detect_scan_gap = true; // bool | Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes.
$allow_incorrect_barcodes = true; // bool | Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text.
$allow_invert_image = true; // bool | Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background.
$allow_micro_white_spots_removing = true; // bool | Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes.
$allow_one_d_fast_barcodes_detector = true; // bool | Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet.
$allow_one_d_wiped_bars_restoration = true; // bool | Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern.
$allow_qr_micro_qr_restoration = true; // bool | Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes.
$allow_regular_image = true; // bool | Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is.
$allow_salt_and_pepper_filtering = true; // bool | Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots.
$allow_white_spots_removing = true; // bool | Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering.
$check_more1_d_variants = true; // bool | Allows engine to recognize 1D barcodes with checksum by checking more recognition variants. Default value: False.
$fast_scan_only = true; // bool | Allows engine for 1D barcodes to quickly recognize middle slice of an image and return result without using any time-consuming algorithms. Default value: False.
$region_likelihood_threshold_percent = 1.2; // double | Sets threshold for detected regions that may contain barcodes. Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time.
$scan_window_sizes = array(56); // int[] | Scan window sizes in pixels. Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality.
$similarity = 1.2; // double | Similarity coefficient depends on how homogeneous barcodes are. Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9]
$skip_diagonal_search = true; // bool | Allows detector to skip search for diagonal barcodes. Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time.
$read_tiny_barcodes = true; // bool | Allows engine to recognize tiny barcodes on large images. Ignored if AllowIncorrectBarcodes is set to True. Default value: False.
$australian_post_encoding_table = "australian_post_encoding_table_example"; // string | Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other.
$ignore_ending_filling_patterns_for_c_table = true; // bool | The flag which force AustraliaPost decoder to ignore last filling patterns in Customer Information Field during decoding as CTable method. CTable encoding method does not have any gaps in encoding table and sequnce \"333\" of filling paterns is decoded as letter \"z\".
$rectangle_region = "rectangle_region_example"; // string | 
$storage = "storage_example"; // string | The image storage.
$folder = "folder_example"; // string | The image folder.

try {
    $result = $apiInstance->getBarcodeRecognize($name, $type, $checksum_validation, $detect_encoding, $preset, $rect_x, $rect_y, $rect_width, $rect_height, $strip_fnc, $timeout, $median_smoothing_window_size, $allow_median_smoothing, $allow_complex_background, $allow_datamatrix_industrial_barcodes, $allow_decreased_image, $allow_detect_scan_gap, $allow_incorrect_barcodes, $allow_invert_image, $allow_micro_white_spots_removing, $allow_one_d_fast_barcodes_detector, $allow_one_d_wiped_bars_restoration, $allow_qr_micro_qr_restoration, $allow_regular_image, $allow_salt_and_pepper_filtering, $allow_white_spots_removing, $check_more1_d_variants, $fast_scan_only, $region_likelihood_threshold_percent, $scan_window_sizes, $similarity, $skip_diagonal_search, $read_tiny_barcodes, $australian_post_encoding_table, $ignore_ending_filling_patterns_for_c_table, $rectangle_region, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->getBarcodeRecognize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The image file name. |
 **type** | **string**| The type of barcode to read. | [optional]
 **checksum_validation** | **string**| Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies | [optional]
 **detect_encoding** | **bool**| A flag which force engine to detect codetext encoding for Unicode. | [optional]
 **preset** | **string**| Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality. | [optional]
 **rect_x** | **int**| Set X for area for recognition. | [optional]
 **rect_y** | **int**| Set Y for area for recognition. | [optional]
 **rect_width** | **int**| Set Width of area for recognition. | [optional]
 **rect_height** | **int**| Set Height of area for recognition. | [optional]
 **strip_fnc** | **bool**| Value indicating whether FNC symbol strip must be done. | [optional]
 **timeout** | **int**| Timeout of recognition process. | [optional]
 **median_smoothing_window_size** | **int**| Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set. | [optional]
 **allow_median_smoothing** | **bool**| Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes. | [optional]
 **allow_complex_background** | **bool**| Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode. | [optional]
 **allow_datamatrix_industrial_barcodes** | **bool**| Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots. | [optional]
 **allow_decreased_image** | **bool**| Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution. | [optional]
 **allow_detect_scan_gap** | **bool**| Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes. | [optional]
 **allow_incorrect_barcodes** | **bool**| Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text. | [optional]
 **allow_invert_image** | **bool**| Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background. | [optional]
 **allow_micro_white_spots_removing** | **bool**| Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes. | [optional]
 **allow_one_d_fast_barcodes_detector** | **bool**| Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet. | [optional]
 **allow_one_d_wiped_bars_restoration** | **bool**| Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern. | [optional]
 **allow_qr_micro_qr_restoration** | **bool**| Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes. | [optional]
 **allow_regular_image** | **bool**| Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is. | [optional]
 **allow_salt_and_pepper_filtering** | **bool**| Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots. | [optional]
 **allow_white_spots_removing** | **bool**| Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering. | [optional]
 **check_more1_d_variants** | **bool**| Allows engine to recognize 1D barcodes with checksum by checking more recognition variants. Default value: False. | [optional]
 **fast_scan_only** | **bool**| Allows engine for 1D barcodes to quickly recognize middle slice of an image and return result without using any time-consuming algorithms. Default value: False. | [optional]
 **region_likelihood_threshold_percent** | **double**| Sets threshold for detected regions that may contain barcodes. Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time. | [optional]
 **scan_window_sizes** | [**int[]**](../Model/int.md)| Scan window sizes in pixels. Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality. | [optional]
 **similarity** | **double**| Similarity coefficient depends on how homogeneous barcodes are. Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9] | [optional]
 **skip_diagonal_search** | **bool**| Allows detector to skip search for diagonal barcodes. Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time. | [optional]
 **read_tiny_barcodes** | **bool**| Allows engine to recognize tiny barcodes on large images. Ignored if AllowIncorrectBarcodes is set to True. Default value: False. | [optional]
 **australian_post_encoding_table** | **string**| Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other. | [optional]
 **ignore_ending_filling_patterns_for_c_table** | **bool**| The flag which force AustraliaPost decoder to ignore last filling patterns in Customer Information Field during decoding as CTable method. CTable encoding method does not have any gaps in encoding table and sequnce \&quot;333\&quot; of filling paterns is decoded as letter \&quot;z\&quot;. | [optional]
 **rectangle_region** | **string**|  | [optional]
 **storage** | **string**| The image storage. | [optional]
 **folder** | **string**| The image folder. | [optional]

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBarcodeRecognizeFromUrlOrContent**
> \Aspose\BarCode\Model\BarcodeResponseList postBarcodeRecognizeFromUrlOrContent($type, $checksum_validation, $detect_encoding, $preset, $rect_x, $rect_y, $rect_width, $rect_height, $strip_fnc, $timeout, $median_smoothing_window_size, $allow_median_smoothing, $allow_complex_background, $allow_datamatrix_industrial_barcodes, $allow_decreased_image, $allow_detect_scan_gap, $allow_incorrect_barcodes, $allow_invert_image, $allow_micro_white_spots_removing, $allow_one_d_fast_barcodes_detector, $allow_one_d_wiped_bars_restoration, $allow_qr_micro_qr_restoration, $allow_regular_image, $allow_salt_and_pepper_filtering, $allow_white_spots_removing, $check_more1_d_variants, $fast_scan_only, $region_likelihood_threshold_percent, $scan_window_sizes, $similarity, $skip_diagonal_search, $read_tiny_barcodes, $australian_post_encoding_table, $ignore_ending_filling_patterns_for_c_table, $rectangle_region, $url, $image)

Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image or encoded with base64.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | The type of barcode to read.
$checksum_validation = "checksum_validation_example"; // string | Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies
$detect_encoding = true; // bool | A flag which force engine to detect codetext encoding for Unicode.
$preset = "preset_example"; // string | Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality.
$rect_x = 56; // int | Set X for area for recognition.
$rect_y = 56; // int | Set Y for area for recognition.
$rect_width = 56; // int | Set Width of area for recognition.
$rect_height = 56; // int | Set Height of area for recognition.
$strip_fnc = true; // bool | Value indicating whether FNC symbol strip must be done.
$timeout = 56; // int | Timeout of recognition process.
$median_smoothing_window_size = 56; // int | Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set.
$allow_median_smoothing = true; // bool | Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes.
$allow_complex_background = true; // bool | Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode.
$allow_datamatrix_industrial_barcodes = true; // bool | Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots.
$allow_decreased_image = true; // bool | Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution.
$allow_detect_scan_gap = true; // bool | Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes.
$allow_incorrect_barcodes = true; // bool | Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text.
$allow_invert_image = true; // bool | Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background.
$allow_micro_white_spots_removing = true; // bool | Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes.
$allow_one_d_fast_barcodes_detector = true; // bool | Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet.
$allow_one_d_wiped_bars_restoration = true; // bool | Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern.
$allow_qr_micro_qr_restoration = true; // bool | Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes.
$allow_regular_image = true; // bool | Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is.
$allow_salt_and_pepper_filtering = true; // bool | Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots.
$allow_white_spots_removing = true; // bool | Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering.
$check_more1_d_variants = true; // bool | Allows engine to recognize 1D barcodes with checksum by checking more recognition variants. Default value: False.
$fast_scan_only = true; // bool | Allows engine for 1D barcodes to quickly recognize middle slice of an image and return result without using any time-consuming algorithms. Default value: False.
$region_likelihood_threshold_percent = 1.2; // double | Sets threshold for detected regions that may contain barcodes. Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time.
$scan_window_sizes = array(56); // int[] | Scan window sizes in pixels. Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality.
$similarity = 1.2; // double | Similarity coefficient depends on how homogeneous barcodes are. Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9]
$skip_diagonal_search = true; // bool | Allows detector to skip search for diagonal barcodes. Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time.
$read_tiny_barcodes = true; // bool | Allows engine to recognize tiny barcodes on large images. Ignored if AllowIncorrectBarcodes is set to True. Default value: False.
$australian_post_encoding_table = "australian_post_encoding_table_example"; // string | Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other.
$ignore_ending_filling_patterns_for_c_table = true; // bool | The flag which force AustraliaPost decoder to ignore last filling patterns in Customer Information Field during decoding as CTable method. CTable encoding method does not have any gaps in encoding table and sequnce \"333\" of filling paterns is decoded as letter \"z\".
$rectangle_region = "rectangle_region_example"; // string | 
$url = "url_example"; // string | The image file url.
$image = "/path/to/file.txt"; // \SplFileObject | Image data

try {
    $result = $apiInstance->postBarcodeRecognizeFromUrlOrContent($type, $checksum_validation, $detect_encoding, $preset, $rect_x, $rect_y, $rect_width, $rect_height, $strip_fnc, $timeout, $median_smoothing_window_size, $allow_median_smoothing, $allow_complex_background, $allow_datamatrix_industrial_barcodes, $allow_decreased_image, $allow_detect_scan_gap, $allow_incorrect_barcodes, $allow_invert_image, $allow_micro_white_spots_removing, $allow_one_d_fast_barcodes_detector, $allow_one_d_wiped_bars_restoration, $allow_qr_micro_qr_restoration, $allow_regular_image, $allow_salt_and_pepper_filtering, $allow_white_spots_removing, $check_more1_d_variants, $fast_scan_only, $region_likelihood_threshold_percent, $scan_window_sizes, $similarity, $skip_diagonal_search, $read_tiny_barcodes, $australian_post_encoding_table, $ignore_ending_filling_patterns_for_c_table, $rectangle_region, $url, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->postBarcodeRecognizeFromUrlOrContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of barcode to read. | [optional]
 **checksum_validation** | **string**| Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies | [optional]
 **detect_encoding** | **bool**| A flag which force engine to detect codetext encoding for Unicode. | [optional]
 **preset** | **string**| Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality. | [optional]
 **rect_x** | **int**| Set X for area for recognition. | [optional]
 **rect_y** | **int**| Set Y for area for recognition. | [optional]
 **rect_width** | **int**| Set Width of area for recognition. | [optional]
 **rect_height** | **int**| Set Height of area for recognition. | [optional]
 **strip_fnc** | **bool**| Value indicating whether FNC symbol strip must be done. | [optional]
 **timeout** | **int**| Timeout of recognition process. | [optional]
 **median_smoothing_window_size** | **int**| Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set. | [optional]
 **allow_median_smoothing** | **bool**| Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes. | [optional]
 **allow_complex_background** | **bool**| Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode. | [optional]
 **allow_datamatrix_industrial_barcodes** | **bool**| Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots. | [optional]
 **allow_decreased_image** | **bool**| Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution. | [optional]
 **allow_detect_scan_gap** | **bool**| Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes. | [optional]
 **allow_incorrect_barcodes** | **bool**| Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text. | [optional]
 **allow_invert_image** | **bool**| Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background. | [optional]
 **allow_micro_white_spots_removing** | **bool**| Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes. | [optional]
 **allow_one_d_fast_barcodes_detector** | **bool**| Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet. | [optional]
 **allow_one_d_wiped_bars_restoration** | **bool**| Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern. | [optional]
 **allow_qr_micro_qr_restoration** | **bool**| Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes. | [optional]
 **allow_regular_image** | **bool**| Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is. | [optional]
 **allow_salt_and_pepper_filtering** | **bool**| Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots. | [optional]
 **allow_white_spots_removing** | **bool**| Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering. | [optional]
 **check_more1_d_variants** | **bool**| Allows engine to recognize 1D barcodes with checksum by checking more recognition variants. Default value: False. | [optional]
 **fast_scan_only** | **bool**| Allows engine for 1D barcodes to quickly recognize middle slice of an image and return result without using any time-consuming algorithms. Default value: False. | [optional]
 **region_likelihood_threshold_percent** | **double**| Sets threshold for detected regions that may contain barcodes. Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time. | [optional]
 **scan_window_sizes** | [**int[]**](../Model/int.md)| Scan window sizes in pixels. Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality. | [optional]
 **similarity** | **double**| Similarity coefficient depends on how homogeneous barcodes are. Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9] | [optional]
 **skip_diagonal_search** | **bool**| Allows detector to skip search for diagonal barcodes. Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time. | [optional]
 **read_tiny_barcodes** | **bool**| Allows engine to recognize tiny barcodes on large images. Ignored if AllowIncorrectBarcodes is set to True. Default value: False. | [optional]
 **australian_post_encoding_table** | **string**| Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other. | [optional]
 **ignore_ending_filling_patterns_for_c_table** | **bool**| The flag which force AustraliaPost decoder to ignore last filling patterns in Customer Information Field during decoding as CTable method. CTable encoding method does not have any gaps in encoding table and sequnce \&quot;333\&quot; of filling paterns is decoded as letter \&quot;z\&quot;. | [optional]
 **rectangle_region** | **string**|  | [optional]
 **url** | **string**| The image file url. | [optional]
 **image** | **\SplFileObject**| Image data | [optional]

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded, application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGenerateMultiple**
> \SplFileObject postGenerateMultiple($generator_params_list, $format)

Generate multiple barcodes and return in response stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generator_params_list = new \Aspose\BarCode\Model\GeneratorParamsList(); // \Aspose\BarCode\Model\GeneratorParamsList | List of barcodes
$format = "png"; // string | Format to return stream in

try {
    $result = $apiInstance->postGenerateMultiple($generator_params_list, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->postGenerateMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generator_params_list** | [**\Aspose\BarCode\Model\GeneratorParamsList**](../Model/GeneratorParamsList.md)| List of barcodes |
 **format** | **string**| Format to return stream in | [optional] [default to png]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: image/png, image/bmp, image/gif, image/jpeg, image/svg+xml, image/tiff

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBarcodeGenerateFile**
> \Aspose\BarCode\Model\ResultImageInfo putBarcodeGenerateFile($name, $type, $text, $two_d_display_text, $text_location, $text_alignment, $text_color, $font_size_mode, $no_wrap, $resolution, $resolution_x, $resolution_y, $dimension_x, $text_space, $units, $size_mode, $bar_height, $image_height, $image_width, $rotation_angle, $back_color, $bar_color, $border_color, $border_width, $border_dash_style, $border_visible, $enable_checksum, $enable_escape, $filled_bars, $always_show_checksum, $wide_narrow_ratio, $validate_text, $supplement_data, $supplement_space, $bar_width_reduction, $storage, $folder, $format)

Generate barcode and save on server (from query params or from file with json or xml content)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The image file name.
$type = "type_example"; // string | Type of barcode to generate.
$text = "text_example"; // string | Text to encode.
$two_d_display_text = "two_d_display_text_example"; // string | Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
$text_location = "text_location_example"; // string | Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below.
$text_alignment = "text_alignment_example"; // string | Text alignment.
$text_color = "text_color_example"; // string | Specify the displaying CodeText's Color. Default value: Color.Black.
$font_size_mode = "font_size_mode_example"; // string | Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto.
$no_wrap = true; // bool | Specify word wraps (line breaks) within text. Default value: false.
$resolution = 1.2; // double | Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi.
$resolution_x = 1.2; // double | DEPRECATED: Use 'Resolution' instead.
$resolution_y = 1.2; // double | DEPRECATED: Use 'Resolution' instead.
$dimension_x = 1.2; // double | The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation.
$text_space = 1.2; // double | Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon.
$units = "units_example"; // string | Common Units for all measuring in query. Default units: pixel.
$size_mode = "size_mode_example"; // string | Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None.
$bar_height = 1.2; // double | Height of the barcode in given units. Default units: pixel.
$image_height = 1.2; // double | Height of the barcode image in given units. Default units: pixel.
$image_width = 1.2; // double | Width of the barcode image in given units. Default units: pixel.
$rotation_angle = 1.2; // double | BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0.
$back_color = "back_color_example"; // string | Background color of the barcode image. Default value: Color.White.
$bar_color = "bar_color_example"; // string | Bars color. Default value: Color.Black.
$border_color = "border_color_example"; // string | Border color. Default value: Color.Black.
$border_width = 1.2; // double | Border width. Default value: 0. Ignored if Visible is set to false.
$border_dash_style = "border_dash_style_example"; // string | Border dash style. Default value: BorderDashStyle.Solid.
$border_visible = true; // bool | Border visibility. If false than parameter Width is always ignored (0). Default value: false.
$enable_checksum = "enable_checksum_example"; // string | Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology
$enable_escape = true; // bool | Indicates whether explains the character \"\\\" as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \"\\\" will be explained as a special escape character. Otherwise, \"\\\" acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR.
$filled_bars = true; // bool | Value indicating whether bars are filled. Only for 1D barcodes. Default value: true.
$always_show_checksum = true; // bool | Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes.
$wide_narrow_ratio = 1.2; // double | Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard
$validate_text = true; // bool | Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode's specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect.
$supplement_data = "supplement_data_example"; // string | Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN.
$supplement_space = 1.2; // double | Space between main the BarCode and supplement BarCode.
$bar_width_reduction = 1.2; // double | Bars reduction value that is used to compensate ink spread while printing.
$storage = "storage_example"; // string | Image's storage.
$folder = "folder_example"; // string | Image's folder.
$format = "format_example"; // string | The image format.

try {
    $result = $apiInstance->putBarcodeGenerateFile($name, $type, $text, $two_d_display_text, $text_location, $text_alignment, $text_color, $font_size_mode, $no_wrap, $resolution, $resolution_x, $resolution_y, $dimension_x, $text_space, $units, $size_mode, $bar_height, $image_height, $image_width, $rotation_angle, $back_color, $bar_color, $border_color, $border_width, $border_dash_style, $border_visible, $enable_checksum, $enable_escape, $filled_bars, $always_show_checksum, $wide_narrow_ratio, $validate_text, $supplement_data, $supplement_space, $bar_width_reduction, $storage, $folder, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->putBarcodeGenerateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The image file name. |
 **type** | **string**| Type of barcode to generate. |
 **text** | **string**| Text to encode. |
 **two_d_display_text** | **string**| Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional]
 **text_location** | **string**| Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below. | [optional]
 **text_alignment** | **string**| Text alignment. | [optional]
 **text_color** | **string**| Specify the displaying CodeText&#39;s Color. Default value: Color.Black. | [optional]
 **font_size_mode** | **string**| Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto. | [optional]
 **no_wrap** | **bool**| Specify word wraps (line breaks) within text. Default value: false. | [optional]
 **resolution** | **double**| Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi. | [optional]
 **resolution_x** | **double**| DEPRECATED: Use &#39;Resolution&#39; instead. | [optional]
 **resolution_y** | **double**| DEPRECATED: Use &#39;Resolution&#39; instead. | [optional]
 **dimension_x** | **double**| The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation. | [optional]
 **text_space** | **double**| Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon. | [optional]
 **units** | **string**| Common Units for all measuring in query. Default units: pixel. | [optional]
 **size_mode** | **string**| Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None. | [optional]
 **bar_height** | **double**| Height of the barcode in given units. Default units: pixel. | [optional]
 **image_height** | **double**| Height of the barcode image in given units. Default units: pixel. | [optional]
 **image_width** | **double**| Width of the barcode image in given units. Default units: pixel. | [optional]
 **rotation_angle** | **double**| BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0. | [optional]
 **back_color** | **string**| Background color of the barcode image. Default value: Color.White. | [optional]
 **bar_color** | **string**| Bars color. Default value: Color.Black. | [optional]
 **border_color** | **string**| Border color. Default value: Color.Black. | [optional]
 **border_width** | **double**| Border width. Default value: 0. Ignored if Visible is set to false. | [optional]
 **border_dash_style** | **string**| Border dash style. Default value: BorderDashStyle.Solid. | [optional]
 **border_visible** | **bool**| Border visibility. If false than parameter Width is always ignored (0). Default value: false. | [optional]
 **enable_checksum** | **string**| Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology | [optional]
 **enable_escape** | **bool**| Indicates whether explains the character \&quot;\\\&quot; as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \&quot;\\\&quot; will be explained as a special escape character. Otherwise, \&quot;\\\&quot; acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR. | [optional]
 **filled_bars** | **bool**| Value indicating whether bars are filled. Only for 1D barcodes. Default value: true. | [optional]
 **always_show_checksum** | **bool**| Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes. | [optional]
 **wide_narrow_ratio** | **double**| Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard | [optional]
 **validate_text** | **bool**| Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode&#39;s specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect. | [optional]
 **supplement_data** | **string**| Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN. | [optional]
 **supplement_space** | **double**| Space between main the BarCode and supplement BarCode. | [optional]
 **bar_width_reduction** | **double**| Bars reduction value that is used to compensate ink spread while printing. | [optional]
 **storage** | **string**| Image&#39;s storage. | [optional]
 **folder** | **string**| Image&#39;s folder. | [optional]
 **format** | **string**| The image format. | [optional]

### Return type

[**\Aspose\BarCode\Model\ResultImageInfo**](../Model/ResultImageInfo.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBarcodeRecognizeFromBody**
> \Aspose\BarCode\Model\BarcodeResponseList putBarcodeRecognizeFromBody($name, $reader_params, $type, $storage, $folder)

Recognition of a barcode from file on server with parameters in body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The image file name.
$reader_params = new \Aspose\BarCode\Model\ReaderParams(); // \Aspose\BarCode\Model\ReaderParams | BarcodeReader object with parameters.
$type = "type_example"; // string | 
$storage = "storage_example"; // string | The storage name
$folder = "folder_example"; // string | The image folder.

try {
    $result = $apiInstance->putBarcodeRecognizeFromBody($name, $reader_params, $type, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->putBarcodeRecognizeFromBody: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The image file name. |
 **reader_params** | [**\Aspose\BarCode\Model\ReaderParams**](../Model/ReaderParams.md)| BarcodeReader object with parameters. |
 **type** | **string**|  | [optional]
 **storage** | **string**| The storage name | [optional]
 **folder** | **string**| The image folder. | [optional]

### Return type

[**\Aspose\BarCode\Model\BarcodeResponseList**](../Model/BarcodeResponseList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGenerateMultiple**
> \Aspose\BarCode\Model\ResultImageInfo putGenerateMultiple($name, $generator_params_list, $format, $folder, $storage)

Generate image with multiple barcodes and put new file on server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT
$config = Aspose\BarCode\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aspose\BarCode\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | New filename
$generator_params_list = new \Aspose\BarCode\Model\GeneratorParamsList(); // \Aspose\BarCode\Model\GeneratorParamsList | List of barcodes
$format = "png"; // string | Format of file
$folder = "folder_example"; // string | Folder to place file to
$storage = "storage_example"; // string | The storage name

try {
    $result = $apiInstance->putGenerateMultiple($name, $generator_params_list, $format, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->putGenerateMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| New filename |
 **generator_params_list** | [**\Aspose\BarCode\Model\GeneratorParamsList**](../Model/GeneratorParamsList.md)| List of barcodes |
 **format** | **string**| Format of file | [optional] [default to png]
 **folder** | **string**| Folder to place file to | [optional]
 **storage** | **string**| The storage name | [optional]

### Return type

[**\Aspose\BarCode\Model\ResultImageInfo**](../Model/ResultImageInfo.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

