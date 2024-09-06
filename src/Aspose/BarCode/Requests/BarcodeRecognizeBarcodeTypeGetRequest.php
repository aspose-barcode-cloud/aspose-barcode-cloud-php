<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeRecognizeBarcodeTypeGetRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeRecognizeBarcodeTypeGet" operation.
 */
class BarcodeRecognizeBarcodeTypeGetRequest
{
    /**
     * Initializes a new instance of the BarcodeRecognizeBarcodeTypeGetRequest class.
     *
     * @param \Aspose\BarCode\Model\DecodeBarcodeType $barcode_type Type of barcode to recognize
     * @param string $url Url to barcode image
     * @param \Aspose\BarCode\Model\RecognitionMode $recognition_mode Recognition mode
     * @param \Aspose\BarCode\Model\RecognitionImageKind $image_kind Image kind
     */
    public function __construct($barcode_type, $url, $recognition_mode = null, $image_kind = null)
    {
        $this->barcode_type = $barcode_type;
        $this->url = $url;
        $this->recognition_mode = $recognition_mode;
        $this->image_kind = $image_kind;
    }

    /**
     * Type of barcode to recognize
     */
    public $barcode_type;

    /**
     * Url to barcode image
     */
    public $url;

    /**
     * Recognition mode
     */
    public $recognition_mode;

    /**
     * Image kind
     */
    public $image_kind;
}
