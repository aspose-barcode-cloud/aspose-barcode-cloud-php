<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodePostBarCodeRecognizeFromUrlorContentRequest.php">
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
 * Request model for "barCodePostBarCodeRecognizeFromUrlorContent" operation.
 */
class BarCodePostBarCodeRecognizeFromUrlorContentRequest
{
    /*
     * Initializes a new instance of the BarCodePostBarCodeRecognizeFromUrlorContentRequest class.
     *  
     * @param string $type BarCode type.
     * @param string $checksum_validation Checksum validation parameter.
     * @param bool $strip_fnc Allows to strip FNC symbol in recognition results.
     * @param int $rotation_angle Recognition of rotated barcode. Possible angles are 90, 180, 270, default is 0
     * @param string $url The image file url.
     * @param \SplFileObject $image_data Image data with image
     */
    public function __construct($type = null, $checksum_validation = null, $strip_fnc = null, $rotation_angle = null, $url = null, $image_data = null)             
    {
        $this->type = $type;
        $this->checksum_validation = $checksum_validation;
        $this->strip_fnc = $strip_fnc;
        $this->rotation_angle = $rotation_angle;
        $this->url = $url;
        $this->image_data = $image_data;
    }

    /*
     * BarCode type.
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
     * Recognition of rotated barcode. Possible angles are 90, 180, 270, default is 0
     */
    public $rotation_angle;
	
    /*
     * The image file url.
     */
    public $url;
	
    /*
     * Image data with image
     */
    public $image_data;
}