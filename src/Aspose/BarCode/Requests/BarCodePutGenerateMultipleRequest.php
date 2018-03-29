<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodePutGenerateMultipleRequest.php">
 *   Copyright (c) 2018 Aspose Pty Ltd
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
namespace Aspose\BarCode\Requests;

/*
 * Request model for "barCodePutGenerateMultiple" operation.
 */
class BarCodePutGenerateMultipleRequest
{
    /*
     * Initializes a new instance of the BarCodePutGenerateMultipleRequest class.
     *  
     * @param string $name New filename
     * @param \Swagger\Client\Model\BarCodeBuildersList $dto List of barcodes
     * @param string $format Format of file
     * @param string $folder Folder to place file to
     */
    public function __construct($name, $dto = null, $format = null, $folder = null)             
    {
        $this->name = $name;
        $this->dto = $dto;
        $this->format = $format;
        $this->folder = $folder;
    }

    /*
     * New filename
     */
    public $name;
	
    /*
     * List of barcodes
     */
    public $dto;
	
    /*
     * Format of file
     */
    public $format;
	
    /*
     * Folder to place file to
     */
    public $folder;
}
