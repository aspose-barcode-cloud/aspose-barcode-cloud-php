<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFolderRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "deleteFolder" operation.
 */
class DeleteFolderRequest
{
    /**
     * Initializes a new instance of the DeleteFolderRequest class.
     *
     * @param string $path Folder path e.g. '/folder'
     * @param string $storage_name Storage name
     * @param bool $recursive Enable to delete folders, subfolders and files
     */
    public function __construct($path, $storage_name = null, $recursive = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->recursive = $recursive;
    }

    /**
     * Folder path e.g. '/folder'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;

    /**
     * Enable to delete folders, subfolders and files
     */
    public $recursive;
}
