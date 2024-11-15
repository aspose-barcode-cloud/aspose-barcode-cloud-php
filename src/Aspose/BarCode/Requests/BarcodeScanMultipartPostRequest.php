<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeScanMultipartPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeScanMultipartPost" operation.
 */
class BarcodeScanMultipartPostRequest
{
    /**
     * Initializes a new instance of the BarcodeScanMultipartPostRequest class.
     *
     * @param \SplFileObject $file Barcode image file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Barcode image file
     */
    public $file;
}
