<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectExistsRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "objectExists" operation.
 */
class ObjectExistsRequest
{
    /**
     * Initializes a new instance of the ObjectExistsRequest class.
     *
     * @param string $path File or folder path e.g. '/file.ext' or '/folder'
     * @param string $storage_name Storage name
     * @param string $version_id File version ID
     */
    public function __construct($path, $storage_name = null, $version_id = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->version_id = $version_id;
    }

    /**
     * File or folder path e.g. '/file.ext' or '/folder'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;

    /**
     * File version ID
     */
    public $version_id;
}
