<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeScanFormPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeScanFormPost" operation.
 */
class BarcodeScanFormPostRequest
{
    /**
     * Initializes a new instance of the BarcodeScanFormPostRequest class.
     *
     * @param \SplFileObject $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Gets or sets file
     */
    public $file;
}
