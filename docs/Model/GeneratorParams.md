# GeneratorParams

Represents extended BarcodeGenerator params.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**type_of_barcode** | [**\Aspose\BarCode\Model\EncodeBarcodeType**](EncodeBarcodeType.md) | Type of barcode to generate. | 
**text** | **string** | Text to encode. | 
**two_d_display_text** | **string** | Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode | [optional] 
**text_location** | [**\Aspose\BarCode\Model\CodeLocation**](CodeLocation.md) | Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below. | [optional] 
**text_alignment** | [**\Aspose\BarCode\Model\TextAlignment**](TextAlignment.md) | Text alignment. | [optional] 
**text_color** | **string** | Specify the displaying CodeText&#39;s Color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF | [optional] 
**font** | [**\Aspose\BarCode\Model\FontParams**](FontParams.md) | Specify the displaying Text&#39;s font. Default value: Arial 5pt regular. Ignored if FontSizeMode is set to FontSizeMode.Auto. | [optional] 
**font_size_mode** | [**\Aspose\BarCode\Model\FontMode**](FontMode.md) | Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto. | [optional] 
**no_wrap** | **bool** | Specify word wraps (line breaks) within text. Default value: false. | [optional] 
**resolution** | **double** | Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi. | [optional] 
**resolution_x** | **double** | DEPRECATED: Use &#39;Resolution&#39; instead. | [optional] 
**resolution_y** | **double** | DEPRECATED: Use &#39;Resolution&#39; instead. | [optional] 
**dimension_x** | **double** | The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation. | [optional] 
**text_space** | **double** | Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon. | [optional] 
**units** | [**\Aspose\BarCode\Model\AvailableGraphicsUnit**](AvailableGraphicsUnit.md) | Common Units for all measuring in query. Default units: pixel. | [optional] 
**size_mode** | [**\Aspose\BarCode\Model\AutoSizeMode**](AutoSizeMode.md) | Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None. | [optional] 
**bar_height** | **double** | Height of the barcode in given units. Default units: pixel. | [optional] 
**image_height** | **double** | Height of the barcode image in given units. Default units: pixel. | [optional] 
**image_width** | **double** | Width of the barcode image in given units. Default units: pixel. | [optional] 
**rotation_angle** | **double** | BarCode image rotation angle, measured in degree, e.g. RotationAngle &#x3D; 0 or RotationAngle &#x3D; 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0. | [optional] 
**padding** | [**\Aspose\BarCode\Model\Padding**](Padding.md) | Barcode paddings. Default value: 5pt 5pt 5pt 5pt. | [optional] 
**caption_above** | [**\Aspose\BarCode\Model\CaptionParams**](CaptionParams.md) | Additional caption above barcode. | [optional] 
**caption_below** | [**\Aspose\BarCode\Model\CaptionParams**](CaptionParams.md) | Additional caption below barcode. | [optional] 
**back_color** | **string** | Background color of the barcode image. Default value: white. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF | [optional] 
**bar_color** | **string** | Bars color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF | [optional] 
**border_color** | **string** | Border color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF | [optional] 
**border_width** | **double** | Border width. Default value: 0. Ignored if Visible is set to false. | [optional] 
**border_dash_style** | [**\Aspose\BarCode\Model\BorderDashStyle**](BorderDashStyle.md) | Border dash style. Default value: BorderDashStyle.Solid. | [optional] 
**border_visible** | **bool** | Border visibility. If false than parameter Width is always ignored (0). Default value: false. | [optional] 
**enable_checksum** | [**\Aspose\BarCode\Model\EnableChecksum**](EnableChecksum.md) | Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology | [optional] 
**enable_escape** | **bool** | Indicates whether explains the character \&quot;\\\&quot; as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \&quot;\\\&quot; will be explained as a special escape character. Otherwise, \&quot;\\\&quot; acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR. | [optional] 
**filled_bars** | **bool** | Value indicating whether bars are filled. Only for 1D barcodes. Default value: true. | [optional] 
**always_show_checksum** | **bool** | Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes. | [optional] 
**wide_narrow_ratio** | **double** | Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard | [optional] 
**validate_text** | **bool** | Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode&#39;s specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect. | [optional] 
**supplement_data** | **string** | Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN. | [optional] 
**supplement_space** | **double** | Space between main the BarCode and supplement BarCode. | [optional] 
**bar_width_reduction** | **double** | Bars reduction value that is used to compensate ink spread while printing. | [optional] 
**use_anti_alias** | **bool** | Indicates whether is used anti-aliasing mode to render image. Anti-aliasing mode is applied to barcode and text drawing. | [optional] 
**australian_post** | [**\Aspose\BarCode\Model\AustralianPostParams**](AustralianPostParams.md) | AustralianPost params. | [optional] 
**aztec** | [**\Aspose\BarCode\Model\AztecParams**](AztecParams.md) | Aztec params. | [optional] 
**codabar** | [**\Aspose\BarCode\Model\CodabarParams**](CodabarParams.md) | Codabar params. | [optional] 
**codablock** | [**\Aspose\BarCode\Model\CodablockParams**](CodablockParams.md) | Codablock params. | [optional] 
**code16_k** | [**\Aspose\BarCode\Model\Code16KParams**](Code16KParams.md) | Code16K params. | [optional] 
**coupon** | [**\Aspose\BarCode\Model\CouponParams**](CouponParams.md) | Coupon params. | [optional] 
**data_bar** | [**\Aspose\BarCode\Model\DataBarParams**](DataBarParams.md) | DataBar params. | [optional] 
**data_matrix** | [**\Aspose\BarCode\Model\DataMatrixParams**](DataMatrixParams.md) | DataMatrix params. | [optional] 
**dot_code** | [**\Aspose\BarCode\Model\DotCodeParams**](DotCodeParams.md) | DotCode params. | [optional] 
**itf** | [**\Aspose\BarCode\Model\ITFParams**](ITFParams.md) | ITF params. | [optional] 
**maxi_code** | [**\Aspose\BarCode\Model\MaxiCodeParams**](MaxiCodeParams.md) | MaxiCode params. | [optional] 
**pdf417** | [**\Aspose\BarCode\Model\Pdf417Params**](Pdf417Params.md) | Pdf417 params. | [optional] 
**postal** | [**\Aspose\BarCode\Model\PostalParams**](PostalParams.md) | Postal params. | [optional] 
**qr** | [**\Aspose\BarCode\Model\QrParams**](QrParams.md) | QR params. | [optional] 
**patch_code** | [**\Aspose\BarCode\Model\PatchCodeParams**](PatchCodeParams.md) | PatchCode params. | [optional] 
**code128** | [**\Aspose\BarCode\Model\Code128Params**](Code128Params.md) | Code128 parameters | [optional] 
**han_xin** | [**\Aspose\BarCode\Model\HanXinParams**](HanXinParams.md) | HanXin params. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


