<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeScanBodyPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeScanBodyPost" operation.
 */
class BarcodeScanBodyPostRequest
{
    /**
     * Initializes a new instance of the BarcodeScanBodyPostRequest class.
     *
     * @param \Aspose\BarCode\Model\ScanBase64Request $scan_base64_request Barcode scan request
     */
    public function __construct($scan_base64_request)
    {
        $this->scan_base64_request = $scan_base64_request;
    }

    /**
     * Barcode scan request
     */
    public $scan_base64_request;
}
