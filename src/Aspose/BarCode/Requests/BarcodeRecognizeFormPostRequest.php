<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeRecognizeFormPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeRecognizeFormPost" operation.
 */
class BarcodeRecognizeFormPostRequest
{
    /**
     * Initializes a new instance of the BarcodeRecognizeFormPostRequest class.
     *
     * @param \Aspose\BarCode\Model\DecodeBarcodeType $barcode_type
     * @param \SplFileObject $file Barcode image file
     * @param \Aspose\BarCode\Model\RecognitionMode $recognition_mode
     * @param \Aspose\BarCode\Model\RecognitionImageKind $image_kind
     */
    public function __construct($barcode_type, $file, $recognition_mode = null, $image_kind = null)
    {
        $this->barcode_type = $barcode_type;
        $this->file = $file;
        $this->recognition_mode = $recognition_mode;
        $this->image_kind = $image_kind;
    }

    /**
     * Gets or sets barcode_type
     */
    public $barcode_type;

    /**
     * Barcode image file
     */
    public $file;

    /**
     * Gets or sets recognition_mode
     */
    public $recognition_mode;

    /**
     * Gets or sets image_kind
     */
    public $image_kind;
}
