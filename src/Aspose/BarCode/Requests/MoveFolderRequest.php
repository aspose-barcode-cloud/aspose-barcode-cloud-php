<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFolderRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
//
// This source code was auto-generated by AsposeBarcodeCloudCodegen.
//

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
