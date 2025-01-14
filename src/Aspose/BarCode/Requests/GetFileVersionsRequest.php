<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetFileVersionsRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "getFileVersions" operation.
 */
class GetFileVersionsRequest
{
    /**
     * Initializes a new instance of the GetFileVersionsRequest class.
     *
     * @param string $path File path e.g. '/file.ext'
     * @param string $storage_name Storage name
     */
    public function __construct($path, $storage_name = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
    }

    /**
     * File path e.g. '/file.ext'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;
}
