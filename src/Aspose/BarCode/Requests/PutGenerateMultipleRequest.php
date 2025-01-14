<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutGenerateMultipleRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "putGenerateMultiple" operation.
 */
class PutGenerateMultipleRequest
{
    /**
     * Initializes a new instance of the PutGenerateMultipleRequest class.
     *
     * @param string $name New filename
     * @param \Aspose\BarCode\Model\GeneratorParamsList $generator_params_list List of barcodes
     * @param string $format Format of file
     * @param string $folder Folder to place file to
     * @param string $storage The storage name
     */
    public function __construct($name, $generator_params_list, $format = null, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->generator_params_list = $generator_params_list;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * New filename
     */
    public $name;

    /**
     * List of barcodes
     */
    public $generator_params_list;

    /**
     * Format of file
     */
    public $format;

    /**
     * Folder to place file to
     */
    public $folder;

    /**
     * The storage name
     */
    public $storage;
}
