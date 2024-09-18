<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeScanGetRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeScanGet" operation.
 */
class BarcodeScanGetRequest
{
    /**
     * Initializes a new instance of the BarcodeScanGetRequest class.
     *
     * @param string $file_url Url to barcode image
     */
    public function __construct($file_url)
    {
        $this->file_url = $file_url;
    }

    /**
     * Url to barcode image
     */
    public $file_url;
}
