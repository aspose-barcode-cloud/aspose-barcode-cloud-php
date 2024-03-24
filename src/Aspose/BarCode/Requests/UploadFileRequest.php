<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UploadFileRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "uploadFile" operation.
 */
class UploadFileRequest
{
    /**
     * Initializes a new instance of the UploadFileRequest class.
     *
     * @param string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext  If the content is multipart and path does not contains the file name it tries to get them from filename parameter  from Content-Disposition header.
     * @param \SplFileObject $file File to upload
     * @param string $storage_name Storage name
     */
    public function __construct($path, $file, $storage_name = null)
    {
        $this->path = $path;
        $this->file = $file;
        $this->storage_name = $storage_name;
    }

    /**
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext  If the content is multipart and path does not contains the file name it tries to get them from filename parameter  from Content-Disposition header.
     */
    public $path;

    /**
     * File to upload
     */
    public $file;

    /**
     * Storage name
     */
    public $storage_name;
}
