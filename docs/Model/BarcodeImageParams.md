# BarcodeImageParams

Barcode image optional parameters

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**image_format** | [**\Aspose\BarCode\Model\AvailableBarCodeImageFormat**](AvailableBarCodeImageFormat.md) |  | [optional] 
**two_d_display_text** | **string** | Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional] 
**text_location** | [**\Aspose\BarCode\Model\CodeLocation**](CodeLocation.md) |  | [optional] 
**text_alignment** | [**\Aspose\BarCode\Model\TextAlignment**](TextAlignment.md) |  | [optional] 
**foreground_color** | **string** | Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black. | [optional] 
**background_color** | **string** | Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White. | [optional] 
**units** | [**\Aspose\BarCode\Model\AvailableGraphicsUnit**](AvailableGraphicsUnit.md) |  | [optional] 
**resolution** | **float** | Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi. | [optional] 
**image_height** | **float** | Height of the barcode image in given units. Default units: pixel. | [optional] 
**image_width** | **float** | Width of the barcode image in given units. Default units: pixel. | [optional] 
**rotation_angle** | **int** | BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

