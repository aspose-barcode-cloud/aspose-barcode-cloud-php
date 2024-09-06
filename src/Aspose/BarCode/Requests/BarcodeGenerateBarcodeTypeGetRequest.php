<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeGenerateBarcodeTypeGetRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeGenerateBarcodeTypeGet" operation.
 */
class BarcodeGenerateBarcodeTypeGetRequest
{
    /**
     * Initializes a new instance of the BarcodeGenerateBarcodeTypeGetRequest class.
     *
     * @param \Aspose\BarCode\Model\EncodeBarcodeType $barcode_type Type of barcode to generate.
     * @param \Aspose\BarCode\Model\EncodeDataType $data_type Type of data to encode.
     * @param string $data String represents data to encode
     * @param \Aspose\BarCode\Model\AvailableBarCodeImageFormat $image_format Barcode output image format.  Default value: png
     * @param string $two_d_display_text Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
     * @param \Aspose\BarCode\Model\CodeLocation $text_location Specify the displaying Text Location, set to CodeLocation.None to hide CodeText.  Default value: CodeLocation.Below.
     * @param \Aspose\BarCode\Model\TextAlignment $text_alignment Text alignment.  Default value: TextAligment.Left
     * @param string $foreground_color Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black.
     * @param string $background_color Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White.
     * @param \Aspose\BarCode\Model\AvailableGraphicsUnit $units Common Units for all measuring in query. Default units: pixel.
     * @param float $resolution Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi.
     * @param float $image_height Height of the barcode image in given units. Default units: pixel.
     * @param float $image_width Width of the barcode image in given units. Default units: pixel.
     * @param int $rotation_angle BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0.
     */
    public function __construct($barcode_type, $data_type, $data, $image_format = null, $two_d_display_text = null, $text_location = null, $text_alignment = null, $foreground_color = null, $background_color = null, $units = null, $resolution = null, $image_height = null, $image_width = null, $rotation_angle = null)
    {
        $this->barcode_type = $barcode_type;
        $this->data_type = $data_type;
        $this->data = $data;
        $this->image_format = $image_format;
        $this->two_d_display_text = $two_d_display_text;
        $this->text_location = $text_location;
        $this->text_alignment = $text_alignment;
        $this->foreground_color = $foreground_color;
        $this->background_color = $background_color;
        $this->units = $units;
        $this->resolution = $resolution;
        $this->image_height = $image_height;
        $this->image_width = $image_width;
        $this->rotation_angle = $rotation_angle;
    }

    /**
     * Type of barcode to generate.
     */
    public $barcode_type;

    /**
     * Type of data to encode.
     */
    public $data_type;

    /**
     * String represents data to encode
     */
    public $data;

    /**
     * Barcode output image format.  Default value: png
     */
    public $image_format;

    /**
     * Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
     */
    public $two_d_display_text;

    /**
     * Specify the displaying Text Location, set to CodeLocation.None to hide CodeText.  Default value: CodeLocation.Below.
     */
    public $text_location;

    /**
     * Text alignment.  Default value: TextAligment.Left
     */
    public $text_alignment;

    /**
     * Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black.
     */
    public $foreground_color;

    /**
     * Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White.
     */
    public $background_color;

    /**
     * Common Units for all measuring in query. Default units: pixel.
     */
    public $units;

    /**
     * Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi.
     */
    public $resolution;

    /**
     * Height of the barcode image in given units. Default units: pixel.
     */
    public $image_height;

    /**
     * Width of the barcode image in given units. Default units: pixel.
     */
    public $image_width;

    /**
     * BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0.
     */
    public $rotation_angle;
}
