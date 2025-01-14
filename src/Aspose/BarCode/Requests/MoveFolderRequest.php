<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFolderRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "moveFolder" operation.
 */
class MoveFolderRequest
{
    /**
     * Initializes a new instance of the MoveFolderRequest class.
     *
     * @param string $src_path Folder path to move e.g. '/folder'
     * @param string $dest_path Destination folder path to move to e.g '/dst'
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     */
    public function __construct($src_path, $dest_path, $src_storage_name = null, $dest_storage_name = null)
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
    }

    /**
     * Folder path to move e.g. '/folder'
     */
    public $src_path;

    /**
     * Destination folder path to move to e.g '/dst'
     */
    public $dest_path;

    /**
     * Source storage name
     */
    public $src_storage_name;

    /**
     * Destination storage name
     */
    public $dest_storage_name;
}
