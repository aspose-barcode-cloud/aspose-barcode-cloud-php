<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeGenerateBodyPostRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "barcodeGenerateBodyPost" operation.
 */
class BarcodeGenerateBodyPostRequest
{
    /**
     * Initializes a new instance of the BarcodeGenerateBodyPostRequest class.
     *
     * @param \Aspose\BarCode\Model\GenerateParams $generate_params Parameters of generation
     */
    public function __construct($generate_params)
    {
        $this->generate_params = $generate_params;
    }

    /**
     * Parameters of generation
     */
    public $generate_params;
}
