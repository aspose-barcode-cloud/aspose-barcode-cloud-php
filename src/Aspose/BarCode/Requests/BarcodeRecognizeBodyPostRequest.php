<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeRecognizeBodyPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeRecognizeBodyPost" operation.
 */
class BarcodeRecognizeBodyPostRequest
{
    /**
     * Initializes a new instance of the BarcodeRecognizeBodyPostRequest class.
     *
     * @param \Aspose\BarCode\Model\RecognizeBase64Request $recognize_base64_request Barcode recognition request
     */
    public function __construct($recognize_base64_request)
    {
        $this->recognize_base64_request = $recognize_base64_request;
    }

    /**
     * Barcode recognition request
     */
    public $recognize_base64_request;
}
