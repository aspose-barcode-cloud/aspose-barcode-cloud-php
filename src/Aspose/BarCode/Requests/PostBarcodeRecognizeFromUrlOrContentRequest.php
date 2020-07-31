<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostBarcodeRecognizeFromUrlOrContentRequest.php">
 *   Copyright (c) 2020 Aspose Pty Ltd
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
 * Request model for "postBarcodeRecognizeFromUrlOrContent" operation.
 */
class PostBarcodeRecognizeFromUrlOrContentRequest
{
    /*
     * Initializes a new instance of the PostBarcodeRecognizeFromUrlOrContentRequest class.
     *
     * @param string $type The type of barcode to read.
     * @param string $checksum_validation Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies
     * @param bool $detect_encoding A flag which force engine to detect codetext encoding for Unicode.
     * @param string $preset Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality.
     * @param int $rect_x Set X for area for recognition.
     * @param int $rect_y Set Y for area for recognition.
     * @param int $rect_width Set Width of area for recognition.
     * @param int $rect_height Set Height of area for recognition.
     * @param bool $strip_fnc Value indicating whether FNC symbol strip must be done.
     * @param int $timeout Timeout of recognition process.
     * @param int $median_smoothing_window_size Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set.
     * @param bool $allow_median_smoothing Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes.
     * @param bool $allow_complex_background Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode.
     * @param bool $allow_datamatrix_industrial_barcodes Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots.
     * @param bool $allow_decreased_image Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution.
     * @param bool $allow_detect_scan_gap Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes.
     * @param bool $allow_incorrect_barcodes Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text.
     * @param bool $allow_invert_image Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background.
     * @param bool $allow_micro_white_spots_removing Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes.
     * @param bool $allow_one_d_fast_barcodes_detector Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet.
     * @param bool $allow_one_d_wiped_bars_restoration Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern.
     * @param bool $allow_qr_micro_qr_restoration Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes.
     * @param bool $allow_regular_image Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is.
     * @param bool $allow_salt_and_pepper_filtering Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots.
     * @param bool $allow_white_spots_removing Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering.
     * @param double $region_likelihood_threshold_percent Sets threshold for detected regions that may contain barcodes.  Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time.
     * @param int[] $scan_window_sizes Scan window sizes in pixels.  Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality.
     * @param double $similarity Similarity coefficient depends on how homogeneous barcodes are.  Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9]
     * @param bool $skip_diagonal_search Allows detector to skip search for diagonal barcodes.  Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time.
     * @param string $australian_post_encoding_table Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other.
     * @param string $rectangle_region
     * @param string $url The image file url.
     * @param \SplFileObject $image Image data
     */
    public function __construct($type = null, $checksum_validation = null, $detect_encoding = null, $preset = null, $rect_x = null, $rect_y = null, $rect_width = null, $rect_height = null, $strip_fnc = null, $timeout = null, $median_smoothing_window_size = null, $allow_median_smoothing = null, $allow_complex_background = null, $allow_datamatrix_industrial_barcodes = null, $allow_decreased_image = null, $allow_detect_scan_gap = null, $allow_incorrect_barcodes = null, $allow_invert_image = null, $allow_micro_white_spots_removing = null, $allow_one_d_fast_barcodes_detector = null, $allow_one_d_wiped_bars_restoration = null, $allow_qr_micro_qr_restoration = null, $allow_regular_image = null, $allow_salt_and_pepper_filtering = null, $allow_white_spots_removing = null, $region_likelihood_threshold_percent = null, $scan_window_sizes = null, $similarity = null, $skip_diagonal_search = null, $australian_post_encoding_table = null, $rectangle_region = null, $url = null, $image = null)
    {
        $this->type = $type;
        $this->checksum_validation = $checksum_validation;
        $this->detect_encoding = $detect_encoding;
        $this->preset = $preset;
        $this->rect_x = $rect_x;
        $this->rect_y = $rect_y;
        $this->rect_width = $rect_width;
        $this->rect_height = $rect_height;
        $this->strip_fnc = $strip_fnc;
        $this->timeout = $timeout;
        $this->median_smoothing_window_size = $median_smoothing_window_size;
        $this->allow_median_smoothing = $allow_median_smoothing;
        $this->allow_complex_background = $allow_complex_background;
        $this->allow_datamatrix_industrial_barcodes = $allow_datamatrix_industrial_barcodes;
        $this->allow_decreased_image = $allow_decreased_image;
        $this->allow_detect_scan_gap = $allow_detect_scan_gap;
        $this->allow_incorrect_barcodes = $allow_incorrect_barcodes;
        $this->allow_invert_image = $allow_invert_image;
        $this->allow_micro_white_spots_removing = $allow_micro_white_spots_removing;
        $this->allow_one_d_fast_barcodes_detector = $allow_one_d_fast_barcodes_detector;
        $this->allow_one_d_wiped_bars_restoration = $allow_one_d_wiped_bars_restoration;
        $this->allow_qr_micro_qr_restoration = $allow_qr_micro_qr_restoration;
        $this->allow_regular_image = $allow_regular_image;
        $this->allow_salt_and_pepper_filtering = $allow_salt_and_pepper_filtering;
        $this->allow_white_spots_removing = $allow_white_spots_removing;
        $this->region_likelihood_threshold_percent = $region_likelihood_threshold_percent;
        $this->scan_window_sizes = $scan_window_sizes;
        $this->similarity = $similarity;
        $this->skip_diagonal_search = $skip_diagonal_search;
        $this->australian_post_encoding_table = $australian_post_encoding_table;
        $this->rectangle_region = $rectangle_region;
        $this->url = $url;
        $this->image = $image;
    }

    /*
     * The type of barcode to read.
     */
    public $type;

    /*
     * Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies
     */
    public $checksum_validation;

    /*
     * A flag which force engine to detect codetext encoding for Unicode.
     */
    public $detect_encoding;

    /*
     * Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality.
     */
    public $preset;

    /*
     * Set X for area for recognition.
     */
    public $rect_x;

    /*
     * Set Y for area for recognition.
     */
    public $rect_y;

    /*
     * Set Width of area for recognition.
     */
    public $rect_width;

    /*
     * Set Height of area for recognition.
     */
    public $rect_height;

    /*
     * Value indicating whether FNC symbol strip must be done.
     */
    public $strip_fnc;

    /*
     * Timeout of recognition process.
     */
    public $timeout;

    /*
     * Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set.
     */
    public $median_smoothing_window_size;

    /*
     * Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes.
     */
    public $allow_median_smoothing;

    /*
     * Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode.
     */
    public $allow_complex_background;

    /*
     * Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots.
     */
    public $allow_datamatrix_industrial_barcodes;

    /*
     * Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution.
     */
    public $allow_decreased_image;

    /*
     * Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes.
     */
    public $allow_detect_scan_gap;

    /*
     * Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text.
     */
    public $allow_incorrect_barcodes;

    /*
     * Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background.
     */
    public $allow_invert_image;

    /*
     * Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes.
     */
    public $allow_micro_white_spots_removing;

    /*
     * Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet.
     */
    public $allow_one_d_fast_barcodes_detector;

    /*
     * Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern.
     */
    public $allow_one_d_wiped_bars_restoration;

    /*
     * Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes.
     */
    public $allow_qr_micro_qr_restoration;

    /*
     * Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is.
     */
    public $allow_regular_image;

    /*
     * Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots.
     */
    public $allow_salt_and_pepper_filtering;

    /*
     * Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering.
     */
    public $allow_white_spots_removing;

    /*
     * Sets threshold for detected regions that may contain barcodes.  Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time.
     */
    public $region_likelihood_threshold_percent;

    /*
     * Scan window sizes in pixels.  Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality.
     */
    public $scan_window_sizes;

    /*
     * Similarity coefficient depends on how homogeneous barcodes are.  Use high value for for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9]
     */
    public $similarity;

    /*
     * Allows detector to skip search for diagonal barcodes.  Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time.
     */
    public $skip_diagonal_search;

    /*
     * Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other.
     */
    public $australian_post_encoding_table;

    /*
     * Gets or sets rectangle_region
     */
    public $rectangle_region;

    /*
     * The image file url.
     */
    public $url;

    /*
     * Image data
     */
    public $image;
}
