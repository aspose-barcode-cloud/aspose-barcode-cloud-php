<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutBarcodeGenerateFileRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "putBarcodeGenerateFile" operation.
 */
class PutBarcodeGenerateFileRequest
{
    /**
     * Initializes a new instance of the PutBarcodeGenerateFileRequest class.
     *
     * @param string $name The image file name.
     * @param string $type Type of barcode to generate.
     * @param string $text Text to encode.
     * @param string $two_d_display_text Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
     * @param string $text_location Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below.
     * @param string $text_alignment Text alignment.
     * @param string $text_color Specify the displaying CodeText's Color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     * @param bool $no_wrap Specify word wraps (line breaks) within text. Default value: false.
     * @param double $resolution Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi.
     * @param double $resolution_x DEPRECATED: Use 'Resolution' instead.
     * @param double $resolution_y DEPRECATED: Use 'Resolution' instead.
     * @param double $dimension_x The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation.
     * @param double $text_space Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon.
     * @param string $units Common Units for all measuring in query. Default units: pixel.
     * @param string $size_mode Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None.
     * @param double $bar_height Height of the barcode in given units. Default units: pixel.
     * @param double $image_height Height of the barcode image in given units. Default units: pixel.
     * @param double $image_width Width of the barcode image in given units. Default units: pixel.
     * @param double $rotation_angle BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0.
     * @param string $back_color Background color of the barcode image. Default value: white. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     * @param string $bar_color Bars color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     * @param string $border_color Border color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     * @param double $border_width Border width. Default value: 0. Ignored if Visible is set to false.
     * @param string $border_dash_style Border dash style. Default value: BorderDashStyle.Solid.
     * @param bool $border_visible Border visibility. If false than parameter Width is always ignored (0). Default value: false.
     * @param string $enable_checksum Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology
     * @param bool $enable_escape Indicates whether explains the character \"\\\" as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \"\\\" will be explained as a special escape character. Otherwise, \"\\\" acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR.
     * @param bool $filled_bars Value indicating whether bars are filled. Only for 1D barcodes. Default value: true.
     * @param bool $always_show_checksum Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes.
     * @param double $wide_narrow_ratio Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard
     * @param bool $validate_text Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode's specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect.
     * @param string $supplement_data Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN.
     * @param double $supplement_space Space between main the BarCode and supplement BarCode.
     * @param double $bar_width_reduction Bars reduction value that is used to compensate ink spread while printing.
     * @param bool $use_anti_alias Indicates whether is used anti-aliasing mode to render image. Anti-aliasing mode is applied to barcode and text drawing.
     * @param string $storage Image's storage.
     * @param string $folder Image's folder.
     * @param string $format The image format.
     */
    public function __construct($name, $type, $text, $two_d_display_text = null, $text_location = null, $text_alignment = null, $text_color = null, $no_wrap = null, $resolution = null, $resolution_x = null, $resolution_y = null, $dimension_x = null, $text_space = null, $units = null, $size_mode = null, $bar_height = null, $image_height = null, $image_width = null, $rotation_angle = null, $back_color = null, $bar_color = null, $border_color = null, $border_width = null, $border_dash_style = null, $border_visible = null, $enable_checksum = null, $enable_escape = null, $filled_bars = null, $always_show_checksum = null, $wide_narrow_ratio = null, $validate_text = null, $supplement_data = null, $supplement_space = null, $bar_width_reduction = null, $use_anti_alias = null, $storage = null, $folder = null, $format = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->text = $text;
        $this->two_d_display_text = $two_d_display_text;
        $this->text_location = $text_location;
        $this->text_alignment = $text_alignment;
        $this->text_color = $text_color;
        $this->no_wrap = $no_wrap;
        $this->resolution = $resolution;
        $this->resolution_x = $resolution_x;
        $this->resolution_y = $resolution_y;
        $this->dimension_x = $dimension_x;
        $this->text_space = $text_space;
        $this->units = $units;
        $this->size_mode = $size_mode;
        $this->bar_height = $bar_height;
        $this->image_height = $image_height;
        $this->image_width = $image_width;
        $this->rotation_angle = $rotation_angle;
        $this->back_color = $back_color;
        $this->bar_color = $bar_color;
        $this->border_color = $border_color;
        $this->border_width = $border_width;
        $this->border_dash_style = $border_dash_style;
        $this->border_visible = $border_visible;
        $this->enable_checksum = $enable_checksum;
        $this->enable_escape = $enable_escape;
        $this->filled_bars = $filled_bars;
        $this->always_show_checksum = $always_show_checksum;
        $this->wide_narrow_ratio = $wide_narrow_ratio;
        $this->validate_text = $validate_text;
        $this->supplement_data = $supplement_data;
        $this->supplement_space = $supplement_space;
        $this->bar_width_reduction = $bar_width_reduction;
        $this->use_anti_alias = $use_anti_alias;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->format = $format;
    }

    /**
     * The image file name.
     */
    public $name;

    /**
     * Type of barcode to generate.
     */
    public $type;

    /**
     * Text to encode.
     */
    public $text;

    /**
     * Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
     */
    public $two_d_display_text;

    /**
     * Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below.
     */
    public $text_location;

    /**
     * Text alignment.
     */
    public $text_alignment;

    /**
     * Specify the displaying CodeText's Color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     */
    public $text_color;

    /**
     * Specify word wraps (line breaks) within text. Default value: false.
     */
    public $no_wrap;

    /**
     * Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi.
     */
    public $resolution;

    /**
     * DEPRECATED: Use 'Resolution' instead.
     */
    public $resolution_x;

    /**
     * DEPRECATED: Use 'Resolution' instead.
     */
    public $resolution_y;

    /**
     * The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation.
     */
    public $dimension_x;

    /**
     * Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon.
     */
    public $text_space;

    /**
     * Common Units for all measuring in query. Default units: pixel.
     */
    public $units;

    /**
     * Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None.
     */
    public $size_mode;

    /**
     * Height of the barcode in given units. Default units: pixel.
     */
    public $bar_height;

    /**
     * Height of the barcode image in given units. Default units: pixel.
     */
    public $image_height;

    /**
     * Width of the barcode image in given units. Default units: pixel.
     */
    public $image_width;

    /**
     * BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0.
     */
    public $rotation_angle;

    /**
     * Background color of the barcode image. Default value: white. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     */
    public $back_color;

    /**
     * Bars color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     */
    public $bar_color;

    /**
     * Border color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     */
    public $border_color;

    /**
     * Border width. Default value: 0. Ignored if Visible is set to false.
     */
    public $border_width;

    /**
     * Border dash style. Default value: BorderDashStyle.Solid.
     */
    public $border_dash_style;

    /**
     * Border visibility. If false than parameter Width is always ignored (0). Default value: false.
     */
    public $border_visible;

    /**
     * Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology
     */
    public $enable_checksum;

    /**
     * Indicates whether explains the character \"\\\" as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \"\\\" will be explained as a special escape character. Otherwise, \"\\\" acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR.
     */
    public $enable_escape;

    /**
     * Value indicating whether bars are filled. Only for 1D barcodes. Default value: true.
     */
    public $filled_bars;

    /**
     * Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes.
     */
    public $always_show_checksum;

    /**
     * Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard
     */
    public $wide_narrow_ratio;

    /**
     * Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode's specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect.
     */
    public $validate_text;

    /**
     * Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN.
     */
    public $supplement_data;

    /**
     * Space between main the BarCode and supplement BarCode.
     */
    public $supplement_space;

    /**
     * Bars reduction value that is used to compensate ink spread while printing.
     */
    public $bar_width_reduction;

    /**
     * Indicates whether is used anti-aliasing mode to render image. Anti-aliasing mode is applied to barcode and text drawing.
     */
    public $use_anti_alias;

    /**
     * Image's storage.
     */
    public $storage;

    /**
     * Image's folder.
     */
    public $folder;

    /**
     * The image format.
     */
    public $format;
}
