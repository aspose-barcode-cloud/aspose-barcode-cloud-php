<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutBarcodeRecognizeFromBodyRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "putBarcodeRecognizeFromBody" operation.
 */
class PutBarcodeRecognizeFromBodyRequest
{
    /**
     * Initializes a new instance of the PutBarcodeRecognizeFromBodyRequest class.
     *
     * @param string $name The image file name.
     * @param \Aspose\BarCode\Model\ReaderParams $reader_params BarcodeReader object with parameters.
     * @param string $type
     * @param string $storage The storage name
     * @param string $folder The image folder.
     */
    public function __construct($name, $reader_params, $type = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->reader_params = $reader_params;
        $this->type = $type;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /**
     * The image file name.
     */
    public $name;

    /**
     * BarcodeReader object with parameters.
     */
    public $reader_params;

    /**
     * Gets or sets type
     */
    public $type;

    /**
     * The storage name
     */
    public $storage;

    /**
     * The image folder.
     */
    public $folder;
}
