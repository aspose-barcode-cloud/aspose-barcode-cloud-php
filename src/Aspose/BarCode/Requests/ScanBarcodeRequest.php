<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ScanBarcodeRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "scanBarcode" operation.
 */
class ScanBarcodeRequest
{
    /**
     * Initializes a new instance of the ScanBarcodeRequest class.
     *
     * @param \SplFileObject $image_file Image as file
     * @param \Aspose\BarCode\Model\DecodeBarcodeType[] $decode_types Types of barcode to recognize
     * @param int $timeout Timeout of recognition process in milliseconds.  Default value is 15_000 (15 seconds).  Maximum value is 30_000 (1/2 minute).  In case of a timeout RequestTimeout (408) status will be returned.  Try reducing the image size to avoid timeout.
     */
    public function __construct($image_file, $decode_types = null, $timeout = null)
    {
        $this->image_file = $image_file;
        $this->decode_types = $decode_types;
        $this->timeout = $timeout;
    }

    /**
     * Image as file
     */
    public $image_file;

    /**
     * Types of barcode to recognize
     */
    public $decode_types;

    /**
     * Timeout of recognition process in milliseconds.  Default value is 15_000 (15 seconds).  Maximum value is 30_000 (1/2 minute).  In case of a timeout RequestTimeout (408) status will be returned.  Try reducing the image size to avoid timeout.
     */
    public $timeout;
}
