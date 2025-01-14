<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFileRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "deleteFile" operation.
 */
class DeleteFileRequest
{
    /**
     * Initializes a new instance of the DeleteFileRequest class.
     *
     * @param string $path File path e.g. '/folder/file.ext'
     * @param string $storage_name Storage name
     * @param string $version_id File version ID to delete
     */
    public function __construct($path, $storage_name = null, $version_id = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->version_id = $version_id;
    }

    /**
     * File path e.g. '/folder/file.ext'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;

    /**
     * File version ID to delete
     */
    public $version_id;
}
