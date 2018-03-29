<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodePutBarCodeRecognizeFromBodyRequest.php">
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
 * Request model for "barCodePutBarCodeRecognizeFromBody" operation.
 */
class BarCodePutBarCodeRecognizeFromBodyRequest
{
    /*
     * Initializes a new instance of the BarCodePutBarCodeRecognizeFromBodyRequest class.
     *  
     * @param string $name The image name.
     * @param \Swagger\Client\Model\BarCodeReader $barcode_reader BarCodeReader object with parameters.
     * @param string $type The barcode type.
     * @param string $folder The image folder.
     */
    public function __construct($name, $barcode_reader = null, $type = null, $folder = null)             
    {
        $this->name = $name;
        $this->barcode_reader = $barcode_reader;
        $this->type = $type;
        $this->folder = $folder;
    }

    /*
     * The image name.
     */
    public $name;
	
    /*
     * BarCodeReader object with parameters.
     */
    public $barcode_reader;
	
    /*
     * The barcode type.
     */
    public $type;
	
    /*
     * The image folder.
     */
    public $folder;
}