<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodePutBarCodeGenerateFileRequest.php">
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
 * Request model for "barCodePutBarCodeGenerateFile" operation.
 */
class BarCodePutBarCodeGenerateFileRequest
{
    /*
     * Initializes a new instance of the BarCodePutBarCodeGenerateFileRequest class.
     *  
     * @param string $name The image name.
     * @param \SplFileObject $file File to upload
     * @param string $text BarCode's text.
     * @param string $type The barcode type.
     * @param string $format The image format.
     * @param double $resolution_x Horizontal resolution.
     * @param double $resolution_y Vertical resolution.
     * @param double $dimension_x Smallest width of barcode unit (bar or space).
     * @param double $dimension_y Smallest height of barcode unit (for 2D barcodes).
     * @param string $code_location property of the barcode.
     * @param string $gr_unit Measurement of barcode properties.
     * @param string $auto_size Sets if barcode size will be updated automatically.
     * @param double $bar_height Height of the bar.
     * @param double $image_height Height of the image.
     * @param double $image_width Width of the image.
     * @param string $image_quality Detepmines  of the barcode image.
     * @param double $rot_angle Angle of barcode orientation.
     * @param double $top_margin Top margin.
     * @param double $bottom_margin Bottom margin.
     * @param double $left_margin Left margin.
     * @param double $right_margin Right margin.
     * @param string $enable_checksum Sets if checksum will be generated.
     * @param string $storage Image's storage.
     * @param string $folder Image's folder.
     */
    public function __construct($name, $file, $text = null, $type = null, $format = null, $resolution_x = null, $resolution_y = null, $dimension_x = null, $dimension_y = null, $code_location = null, $gr_unit = null, $auto_size = null, $bar_height = null, $image_height = null, $image_width = null, $image_quality = null, $rot_angle = null, $top_margin = null, $bottom_margin = null, $left_margin = null, $right_margin = null, $enable_checksum = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->file = $file;
        $this->text = $text;
        $this->type = $type;
        $this->format = $format;
        $this->resolution_x = $resolution_x;
        $this->resolution_y = $resolution_y;
        $this->dimension_x = $dimension_x;
        $this->dimension_y = $dimension_y;
        $this->code_location = $code_location;
        $this->gr_unit = $gr_unit;
        $this->auto_size = $auto_size;
        $this->bar_height = $bar_height;
        $this->image_height = $image_height;
        $this->image_width = $image_width;
        $this->image_quality = $image_quality;
        $this->rot_angle = $rot_angle;
        $this->top_margin = $top_margin;
        $this->bottom_margin = $bottom_margin;
        $this->left_margin = $left_margin;
        $this->right_margin = $right_margin;
        $this->enable_checksum = $enable_checksum;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The image name.
     */
    public $name;
	
    /*
     * File to upload
     */
    public $file;
	
    /*
     * BarCode's text.
     */
    public $text;
	
    /*
     * The barcode type.
     */
    public $type;
	
    /*
     * The image format.
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
     * property of the barcode.
     */
    public $code_location;
	
    /*
     * Measurement of barcode properties.
     */
    public $gr_unit;
	
    /*
     * Sets if barcode size will be updated automatically.
     */
    public $auto_size;
	
    /*
     * Height of the bar.
     */
    public $bar_height;
	
    /*
     * Height of the image.
     */
    public $image_height;
	
    /*
     * Width of the image.
     */
    public $image_width;
	
    /*
     * Detepmines  of the barcode image.
     */
    public $image_quality;
	
    /*
     * Angle of barcode orientation.
     */
    public $rot_angle;
	
    /*
     * Top margin.
     */
    public $top_margin;
	
    /*
     * Bottom margin.
     */
    public $bottom_margin;
	
    /*
     * Left margin.
     */
    public $left_margin;
	
    /*
     * Right margin.
     */
    public $right_margin;
	
    /*
     * Sets if checksum will be generated.
     */
    public $enable_checksum;
	
    /*
     * Image's storage.
     */
    public $storage;
	
    /*
     * Image's folder.
     */
    public $folder;
}