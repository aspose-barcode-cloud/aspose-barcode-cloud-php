<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateFolderRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "createFolder" operation.
 */
class CreateFolderRequest
{
    /**
     * Initializes a new instance of the CreateFolderRequest class.
     *
     * @param string $path Folder path to create e.g. 'folder_1/folder_2/'
     * @param string $storage_name Storage name
     */
    public function __construct($path, $storage_name = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
    }

    /**
     * Folder path to create e.g. 'folder_1/folder_2/'
     */
    public $path;

    /**
     * Storage name
     */
    public $storage_name;
}
