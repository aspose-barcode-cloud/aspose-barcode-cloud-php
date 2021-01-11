<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectExistsRequest.php">
 *   Copyright (c) 2021 Aspose Pty Ltd
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

/*
 * Request model for "objectExists" operation.
 */
class ObjectExistsRequest
{
    /*
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

    /*
     * File or folder path e.g. '/file.ext' or '/folder'
     */
    public $path;

    /*
     * Storage name
     */
    public $storage_name;

    /*
     * File version ID
     */
    public $version_id;
}
