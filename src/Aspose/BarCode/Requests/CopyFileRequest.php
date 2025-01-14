<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.php">
 *   Copyright (c) 2025 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "copyFile" operation.
 */
class CopyFileRequest
{
    /**
     * Initializes a new instance of the CopyFileRequest class.
     *
     * @param string $src_path Source file path e.g. '/folder/file.ext'
     * @param string $dest_path Destination file path
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     * @param string $version_id File version ID to copy
     */
    public function __construct($src_path, $dest_path, $src_storage_name = null, $dest_storage_name = null, $version_id = null)
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
        $this->version_id = $version_id;
    }

    /**
     * Source file path e.g. '/folder/file.ext'
     */
    public $src_path;

    /**
     * Destination file path
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

    /**
     * File version ID to copy
     */
    public $version_id;
}
