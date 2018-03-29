<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeGetBarCodeGenerateRequest.php">
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
 * Request model for "barCodeGetBarCodeGenerate" operation.
 */
class BarCodeGetBarCodeGenerateRequest
{
    /*
     * Initializes a new instance of the BarCodeGetBarCodeGenerateRequest class.
     *  
     * @param string $text The code text.
     * @param string $type BarCode type.
     * @param string $format Result format.
     * @param double $resolution_x Horizontal resolution.
     * @param double $resolution_y Vertical resolution.
     * @param double $dimension_x Smallest width of barcode unit (bar or space).
     * @param double $dimension_y Smallest height of barcode unit (for 2D barcodes).
     * @param string $enable_checksum Sets if checksum will be generated.
     */
    public function __construct($text = null, $type = null, $format = null, $resolution_x = null, $resolution_y = null, $dimension_x = null, $dimension_y = null, $enable_checksum = null)             
    {
        $this->text = $text;
        $this->type = $type;
        $this->format = $format;
        $this->resolution_x = $resolution_x;
        $this->resolution_y = $resolution_y;
        $this->dimension_x = $dimension_x;
        $this->dimension_y = $dimension_y;
        $this->enable_checksum = $enable_checksum;
    }

    /*
     * The code text.
     */
    public $text;
	
    /*
     * BarCode type.
     */
    public $type;
	
    /*
     * Result format.
     */
    public $format;
	
    /*
     * Horizontal resolution.
     */
    public $resolution_x;
	
    /*
     * Vertical resolution.
     */
    public $resolution_y;
	
    /*
     * Smallest width of barcode unit (bar or space).
     */
    public $dimension_x;
	
    /*
     * Smallest height of barcode unit (for 2D barcodes).
     */
    public $dimension_y;
	
    /*
     * Sets if checksum will be generated.
     */
    public $enable_checksum;
}