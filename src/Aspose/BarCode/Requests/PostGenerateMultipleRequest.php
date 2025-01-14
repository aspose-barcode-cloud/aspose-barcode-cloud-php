<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostGenerateMultipleRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "postGenerateMultiple" operation.
 */
class PostGenerateMultipleRequest
{
    /**
     * Initializes a new instance of the PostGenerateMultipleRequest class.
     *
     * @param \Aspose\BarCode\Model\GeneratorParamsList $generator_params_list List of barcodes
     * @param string $format Format to return stream in
     */
    public function __construct($generator_params_list, $format = null)
    {
        $this->generator_params_list = $generator_params_list;
        $this->format = $format;
    }

    /**
     * List of barcodes
     */
    public $generator_params_list;

    /**
     * Format to return stream in
     */
    public $format;
}
