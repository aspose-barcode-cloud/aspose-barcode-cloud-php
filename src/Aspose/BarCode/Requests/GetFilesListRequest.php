<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetFilesListRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "getFilesList" operation.
 */
class GetFilesListRequest
{
    /**
     * Initializes a new instance of the GetFilesListRequest class.
     *
     * @param string $path Folder path e.g. '/folder'
     * @param string $storage_name Storage name
     */
    public function __construct($path, $storage_name = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
    }

    /**
     * Folder path e.g. '/folder'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;
}
