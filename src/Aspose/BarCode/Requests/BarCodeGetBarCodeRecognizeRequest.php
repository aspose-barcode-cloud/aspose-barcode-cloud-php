<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeGetBarCodeRecognizeRequest.php">
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
 * Request model for "barCodeGetBarCodeRecognize" operation.
 */
class BarCodeGetBarCodeRecognizeRequest
{
    /*
     * Initializes a new instance of the BarCodeGetBarCodeRecognizeRequest class.
     *  
     * @param string $name The image name.
     * @param string $type The barcode type.
     * @param string $checksum_validation Checksum validation parameter.
     * @param bool $strip_fnc Allows to strip FNC symbol in recognition results.
     * @param int $rotation_angle Allows to correct angle of barcode.
     * @param int $barcodes_count Count of barcodes to recognize.
     * @param int $rect_x Top left point X coordinate of  to recognize barcode inside.
     * @param int $rect_y Top left point Y coordinate of  to recognize barcode inside.
     * @param int $rect_width Width of  to recognize barcode inside.
     * @param int $rect_height Height of  to recognize barcode inside.
     * @param string $storage The image storage.
     * @param string $folder The image folder.
     */
    public function __construct($name, $type = null, $checksum_validation = null, $strip_fnc = null, $rotation_angle = null, $barcodes_count = null, $rect_x = null, $rect_y = null, $rect_width = null, $rect_height = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->type = $type;
        $this->checksum_validation = $checksum_validation;
        $this->strip_fnc = $strip_fnc;
        $this->rotation_angle = $rotation_angle;
        $this->barcodes_count = $barcodes_count;
        $this->rect_x = $rect_x;
        $this->rect_y = $rect_y;
        $this->rect_width = $rect_width;
        $this->rect_height = $rect_height;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The image name.
     */
    public $name;
	
    /*
     * The barcode type.
     */
    public $type;
	
    /*
     * Checksum validation parameter.
     */
    public $checksum_validation;
	
    /*
     * Allows to strip FNC symbol in recognition results.
     */
    public $strip_fnc;
	
    /*
     * Allows to correct angle of barcode.
     */
    public $rotation_angle;
	
    /*
     * Count of barcodes to recognize.
     */
    public $barcodes_count;
	
    /*
     * Top left point X coordinate of  to recognize barcode inside.
     */
    public $rect_x;
	
    /*
     * Top left point Y coordinate of  to recognize barcode inside.
     */
    public $rect_y;
	
    /*
     * Width of  to recognize barcode inside.
     */
    public $rect_width;
	
    /*
     * Height of  to recognize barcode inside.
     */
    public $rect_height;
	
    /*
     * The image storage.
     */
    public $storage;
	
    /*
     * The image folder.
     */
    public $folder;
}