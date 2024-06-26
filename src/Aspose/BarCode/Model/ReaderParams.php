<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * ReaderParams
 *
 * @description Represents BarcodeReader object.
 */
class ReaderParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "ReaderParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'type' => '\Aspose\BarCode\Model\DecodeBarcodeType',
        'types' => '\Aspose\BarCode\Model\DecodeBarcodeType[]',
        'checksum_validation' => '\Aspose\BarCode\Model\ChecksumValidation',
        'detect_encoding' => 'bool',
        'preset' => '\Aspose\BarCode\Model\PresetType',
        'rect_x' => 'int',
        'rect_y' => 'int',
        'rect_width' => 'int',
        'rect_height' => 'int',
        'strip_fnc' => 'bool',
        'timeout' => 'int',
        'median_smoothing_window_size' => 'int',
        'allow_median_smoothing' => 'bool',
        'allow_complex_background' => 'bool',
        'allow_datamatrix_industrial_barcodes' => 'bool',
        'allow_decreased_image' => 'bool',
        'allow_detect_scan_gap' => 'bool',
        'allow_incorrect_barcodes' => 'bool',
        'allow_invert_image' => 'bool',
        'allow_micro_white_spots_removing' => 'bool',
        'allow_one_d_fast_barcodes_detector' => 'bool',
        'allow_one_d_wiped_bars_restoration' => 'bool',
        'allow_qr_micro_qr_restoration' => 'bool',
        'allow_regular_image' => 'bool',
        'allow_salt_and_pepper_filtering' => 'bool',
        'allow_white_spots_removing' => 'bool',
        'check_more1_d_variants' => 'bool',
        'fast_scan_only' => 'bool',
        'allow_additional_restorations' => 'bool',
        'region_likelihood_threshold_percent' => 'double',
        'scan_window_sizes' => 'int[]',
        'similarity' => 'double',
        'skip_diagonal_search' => 'bool',
        'read_tiny_barcodes' => 'bool',
        'australian_post_encoding_table' => '\Aspose\BarCode\Model\CustomerInformationInterpretingType',
        'ignore_ending_filling_patterns_for_c_table' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'type' => null,
        'types' => null,
        'checksum_validation' => null,
        'detect_encoding' => null,
        'preset' => null,
        'rect_x' => 'int32',
        'rect_y' => 'int32',
        'rect_width' => 'int32',
        'rect_height' => 'int32',
        'strip_fnc' => null,
        'timeout' => 'int32',
        'median_smoothing_window_size' => 'int32',
        'allow_median_smoothing' => null,
        'allow_complex_background' => null,
        'allow_datamatrix_industrial_barcodes' => null,
        'allow_decreased_image' => null,
        'allow_detect_scan_gap' => null,
        'allow_incorrect_barcodes' => null,
        'allow_invert_image' => null,
        'allow_micro_white_spots_removing' => null,
        'allow_one_d_fast_barcodes_detector' => null,
        'allow_one_d_wiped_bars_restoration' => null,
        'allow_qr_micro_qr_restoration' => null,
        'allow_regular_image' => null,
        'allow_salt_and_pepper_filtering' => null,
        'allow_white_spots_removing' => null,
        'check_more1_d_variants' => null,
        'fast_scan_only' => null,
        'allow_additional_restorations' => null,
        'region_likelihood_threshold_percent' => 'double',
        'scan_window_sizes' => 'int32',
        'similarity' => 'double',
        'skip_diagonal_search' => null,
        'read_tiny_barcodes' => null,
        'australian_post_encoding_table' => null,
        'ignore_ending_filling_patterns_for_c_table' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'Type',
        'types' => 'Types',
        'checksum_validation' => 'ChecksumValidation',
        'detect_encoding' => 'DetectEncoding',
        'preset' => 'Preset',
        'rect_x' => 'RectX',
        'rect_y' => 'RectY',
        'rect_width' => 'RectWidth',
        'rect_height' => 'RectHeight',
        'strip_fnc' => 'StripFNC',
        'timeout' => 'Timeout',
        'median_smoothing_window_size' => 'MedianSmoothingWindowSize',
        'allow_median_smoothing' => 'AllowMedianSmoothing',
        'allow_complex_background' => 'AllowComplexBackground',
        'allow_datamatrix_industrial_barcodes' => 'AllowDatamatrixIndustrialBarcodes',
        'allow_decreased_image' => 'AllowDecreasedImage',
        'allow_detect_scan_gap' => 'AllowDetectScanGap',
        'allow_incorrect_barcodes' => 'AllowIncorrectBarcodes',
        'allow_invert_image' => 'AllowInvertImage',
        'allow_micro_white_spots_removing' => 'AllowMicroWhiteSpotsRemoving',
        'allow_one_d_fast_barcodes_detector' => 'AllowOneDFastBarcodesDetector',
        'allow_one_d_wiped_bars_restoration' => 'AllowOneDWipedBarsRestoration',
        'allow_qr_micro_qr_restoration' => 'AllowQRMicroQrRestoration',
        'allow_regular_image' => 'AllowRegularImage',
        'allow_salt_and_pepper_filtering' => 'AllowSaltAndPepperFiltering',
        'allow_white_spots_removing' => 'AllowWhiteSpotsRemoving',
        'check_more1_d_variants' => 'CheckMore1DVariants',
        'fast_scan_only' => 'FastScanOnly',
        'allow_additional_restorations' => 'AllowAdditionalRestorations',
        'region_likelihood_threshold_percent' => 'RegionLikelihoodThresholdPercent',
        'scan_window_sizes' => 'ScanWindowSizes',
        'similarity' => 'Similarity',
        'skip_diagonal_search' => 'SkipDiagonalSearch',
        'read_tiny_barcodes' => 'ReadTinyBarcodes',
        'australian_post_encoding_table' => 'AustralianPostEncodingTable',
        'ignore_ending_filling_patterns_for_c_table' => 'IgnoreEndingFillingPatternsForCTable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'types' => 'setTypes',
        'checksum_validation' => 'setChecksumValidation',
        'detect_encoding' => 'setDetectEncoding',
        'preset' => 'setPreset',
        'rect_x' => 'setRectX',
        'rect_y' => 'setRectY',
        'rect_width' => 'setRectWidth',
        'rect_height' => 'setRectHeight',
        'strip_fnc' => 'setStripFnc',
        'timeout' => 'setTimeout',
        'median_smoothing_window_size' => 'setMedianSmoothingWindowSize',
        'allow_median_smoothing' => 'setAllowMedianSmoothing',
        'allow_complex_background' => 'setAllowComplexBackground',
        'allow_datamatrix_industrial_barcodes' => 'setAllowDatamatrixIndustrialBarcodes',
        'allow_decreased_image' => 'setAllowDecreasedImage',
        'allow_detect_scan_gap' => 'setAllowDetectScanGap',
        'allow_incorrect_barcodes' => 'setAllowIncorrectBarcodes',
        'allow_invert_image' => 'setAllowInvertImage',
        'allow_micro_white_spots_removing' => 'setAllowMicroWhiteSpotsRemoving',
        'allow_one_d_fast_barcodes_detector' => 'setAllowOneDFastBarcodesDetector',
        'allow_one_d_wiped_bars_restoration' => 'setAllowOneDWipedBarsRestoration',
        'allow_qr_micro_qr_restoration' => 'setAllowQrMicroQrRestoration',
        'allow_regular_image' => 'setAllowRegularImage',
        'allow_salt_and_pepper_filtering' => 'setAllowSaltAndPepperFiltering',
        'allow_white_spots_removing' => 'setAllowWhiteSpotsRemoving',
        'check_more1_d_variants' => 'setCheckMore1DVariants',
        'fast_scan_only' => 'setFastScanOnly',
        'allow_additional_restorations' => 'setAllowAdditionalRestorations',
        'region_likelihood_threshold_percent' => 'setRegionLikelihoodThresholdPercent',
        'scan_window_sizes' => 'setScanWindowSizes',
        'similarity' => 'setSimilarity',
        'skip_diagonal_search' => 'setSkipDiagonalSearch',
        'read_tiny_barcodes' => 'setReadTinyBarcodes',
        'australian_post_encoding_table' => 'setAustralianPostEncodingTable',
        'ignore_ending_filling_patterns_for_c_table' => 'setIgnoreEndingFillingPatternsForCTable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'types' => 'getTypes',
        'checksum_validation' => 'getChecksumValidation',
        'detect_encoding' => 'getDetectEncoding',
        'preset' => 'getPreset',
        'rect_x' => 'getRectX',
        'rect_y' => 'getRectY',
        'rect_width' => 'getRectWidth',
        'rect_height' => 'getRectHeight',
        'strip_fnc' => 'getStripFnc',
        'timeout' => 'getTimeout',
        'median_smoothing_window_size' => 'getMedianSmoothingWindowSize',
        'allow_median_smoothing' => 'getAllowMedianSmoothing',
        'allow_complex_background' => 'getAllowComplexBackground',
        'allow_datamatrix_industrial_barcodes' => 'getAllowDatamatrixIndustrialBarcodes',
        'allow_decreased_image' => 'getAllowDecreasedImage',
        'allow_detect_scan_gap' => 'getAllowDetectScanGap',
        'allow_incorrect_barcodes' => 'getAllowIncorrectBarcodes',
        'allow_invert_image' => 'getAllowInvertImage',
        'allow_micro_white_spots_removing' => 'getAllowMicroWhiteSpotsRemoving',
        'allow_one_d_fast_barcodes_detector' => 'getAllowOneDFastBarcodesDetector',
        'allow_one_d_wiped_bars_restoration' => 'getAllowOneDWipedBarsRestoration',
        'allow_qr_micro_qr_restoration' => 'getAllowQrMicroQrRestoration',
        'allow_regular_image' => 'getAllowRegularImage',
        'allow_salt_and_pepper_filtering' => 'getAllowSaltAndPepperFiltering',
        'allow_white_spots_removing' => 'getAllowWhiteSpotsRemoving',
        'check_more1_d_variants' => 'getCheckMore1DVariants',
        'fast_scan_only' => 'getFastScanOnly',
        'allow_additional_restorations' => 'getAllowAdditionalRestorations',
        'region_likelihood_threshold_percent' => 'getRegionLikelihoodThresholdPercent',
        'scan_window_sizes' => 'getScanWindowSizes',
        'similarity' => 'getSimilarity',
        'skip_diagonal_search' => 'getSkipDiagonalSearch',
        'read_tiny_barcodes' => 'getReadTinyBarcodes',
        'australian_post_encoding_table' => 'getAustralianPostEncodingTable',
        'ignore_ending_filling_patterns_for_c_table' => 'getIgnoreEndingFillingPatternsForCTable'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
        $this->container['checksum_validation'] = isset($data['checksum_validation']) ? $data['checksum_validation'] : null;
        $this->container['detect_encoding'] = isset($data['detect_encoding']) ? $data['detect_encoding'] : null;
        $this->container['preset'] = isset($data['preset']) ? $data['preset'] : null;
        $this->container['rect_x'] = isset($data['rect_x']) ? $data['rect_x'] : null;
        $this->container['rect_y'] = isset($data['rect_y']) ? $data['rect_y'] : null;
        $this->container['rect_width'] = isset($data['rect_width']) ? $data['rect_width'] : null;
        $this->container['rect_height'] = isset($data['rect_height']) ? $data['rect_height'] : null;
        $this->container['strip_fnc'] = isset($data['strip_fnc']) ? $data['strip_fnc'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['median_smoothing_window_size'] = isset($data['median_smoothing_window_size']) ? $data['median_smoothing_window_size'] : null;
        $this->container['allow_median_smoothing'] = isset($data['allow_median_smoothing']) ? $data['allow_median_smoothing'] : null;
        $this->container['allow_complex_background'] = isset($data['allow_complex_background']) ? $data['allow_complex_background'] : null;
        $this->container['allow_datamatrix_industrial_barcodes'] = isset($data['allow_datamatrix_industrial_barcodes']) ? $data['allow_datamatrix_industrial_barcodes'] : null;
        $this->container['allow_decreased_image'] = isset($data['allow_decreased_image']) ? $data['allow_decreased_image'] : null;
        $this->container['allow_detect_scan_gap'] = isset($data['allow_detect_scan_gap']) ? $data['allow_detect_scan_gap'] : null;
        $this->container['allow_incorrect_barcodes'] = isset($data['allow_incorrect_barcodes']) ? $data['allow_incorrect_barcodes'] : null;
        $this->container['allow_invert_image'] = isset($data['allow_invert_image']) ? $data['allow_invert_image'] : null;
        $this->container['allow_micro_white_spots_removing'] = isset($data['allow_micro_white_spots_removing']) ? $data['allow_micro_white_spots_removing'] : null;
        $this->container['allow_one_d_fast_barcodes_detector'] = isset($data['allow_one_d_fast_barcodes_detector']) ? $data['allow_one_d_fast_barcodes_detector'] : null;
        $this->container['allow_one_d_wiped_bars_restoration'] = isset($data['allow_one_d_wiped_bars_restoration']) ? $data['allow_one_d_wiped_bars_restoration'] : null;
        $this->container['allow_qr_micro_qr_restoration'] = isset($data['allow_qr_micro_qr_restoration']) ? $data['allow_qr_micro_qr_restoration'] : null;
        $this->container['allow_regular_image'] = isset($data['allow_regular_image']) ? $data['allow_regular_image'] : null;
        $this->container['allow_salt_and_pepper_filtering'] = isset($data['allow_salt_and_pepper_filtering']) ? $data['allow_salt_and_pepper_filtering'] : null;
        $this->container['allow_white_spots_removing'] = isset($data['allow_white_spots_removing']) ? $data['allow_white_spots_removing'] : null;
        $this->container['check_more1_d_variants'] = isset($data['check_more1_d_variants']) ? $data['check_more1_d_variants'] : null;
        $this->container['fast_scan_only'] = isset($data['fast_scan_only']) ? $data['fast_scan_only'] : null;
        $this->container['allow_additional_restorations'] = isset($data['allow_additional_restorations']) ? $data['allow_additional_restorations'] : null;
        $this->container['region_likelihood_threshold_percent'] = isset($data['region_likelihood_threshold_percent']) ? $data['region_likelihood_threshold_percent'] : null;
        $this->container['scan_window_sizes'] = isset($data['scan_window_sizes']) ? $data['scan_window_sizes'] : null;
        $this->container['similarity'] = isset($data['similarity']) ? $data['similarity'] : null;
        $this->container['skip_diagonal_search'] = isset($data['skip_diagonal_search']) ? $data['skip_diagonal_search'] : null;
        $this->container['read_tiny_barcodes'] = isset($data['read_tiny_barcodes']) ? $data['read_tiny_barcodes'] : null;
        $this->container['australian_post_encoding_table'] = isset($data['australian_post_encoding_table']) ? $data['australian_post_encoding_table'] : null;
        $this->container['ignore_ending_filling_patterns_for_c_table'] = isset($data['ignore_ending_filling_patterns_for_c_table']) ? $data['ignore_ending_filling_patterns_for_c_table'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets type
     *
     * @return \Aspose\BarCode\Model\DecodeBarcodeType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Aspose\BarCode\Model\DecodeBarcodeType $type The type of barcode to read.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets types
     *
     * @return \Aspose\BarCode\Model\DecodeBarcodeType[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param \Aspose\BarCode\Model\DecodeBarcodeType[] $types Multiple barcode types to read.
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets checksum_validation
     *
     * @return \Aspose\BarCode\Model\ChecksumValidation
     */
    public function getChecksumValidation()
    {
        return $this->container['checksum_validation'];
    }

    /**
     * Sets checksum_validation
     *
     * @param \Aspose\BarCode\Model\ChecksumValidation $checksum_validation Enable checksum validation during recognition for 1D barcodes. Default is treated as Yes for symbologies which must contain checksum, as No where checksum only possible. Checksum never used: Codabar Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN Checksum always used: Rest symbologies
     *
     * @return $this
     */
    public function setChecksumValidation($checksum_validation)
    {
        $this->container['checksum_validation'] = $checksum_validation;

        return $this;
    }

    /**
     * Gets detect_encoding
     *
     * @return bool
     */
    public function getDetectEncoding()
    {
        return $this->container['detect_encoding'];
    }

    /**
     * Sets detect_encoding
     *
     * @param bool $detect_encoding A flag which force engine to detect codetext encoding for Unicode.
     *
     * @return $this
     */
    public function setDetectEncoding($detect_encoding)
    {
        $this->container['detect_encoding'] = $detect_encoding;

        return $this;
    }

    /**
     * Gets preset
     *
     * @return \Aspose\BarCode\Model\PresetType
     */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
     * Sets preset
     *
     * @param \Aspose\BarCode\Model\PresetType $preset Preset allows to configure recognition quality and speed manually. You can quickly set up Preset by embedded presets: HighPerformance, NormalQuality, HighQuality, MaxBarCodes or you can manually configure separate options. Default value of Preset is NormalQuality.
     *
     * @return $this
     */
    public function setPreset($preset)
    {
        $this->container['preset'] = $preset;

        return $this;
    }

    /**
     * Gets rect_x
     *
     * @return int
     */
    public function getRectX()
    {
        return $this->container['rect_x'];
    }

    /**
     * Sets rect_x
     *
     * @param int $rect_x Set X of top left corner of area for recognition.
     *
     * @return $this
     */
    public function setRectX($rect_x)
    {
        $this->container['rect_x'] = $rect_x;

        return $this;
    }

    /**
     * Gets rect_y
     *
     * @return int
     */
    public function getRectY()
    {
        return $this->container['rect_y'];
    }

    /**
     * Sets rect_y
     *
     * @param int $rect_y Set Y of top left corner of area for recognition.
     *
     * @return $this
     */
    public function setRectY($rect_y)
    {
        $this->container['rect_y'] = $rect_y;

        return $this;
    }

    /**
     * Gets rect_width
     *
     * @return int
     */
    public function getRectWidth()
    {
        return $this->container['rect_width'];
    }

    /**
     * Sets rect_width
     *
     * @param int $rect_width Set Width of area for recognition.
     *
     * @return $this
     */
    public function setRectWidth($rect_width)
    {
        $this->container['rect_width'] = $rect_width;

        return $this;
    }

    /**
     * Gets rect_height
     *
     * @return int
     */
    public function getRectHeight()
    {
        return $this->container['rect_height'];
    }

    /**
     * Sets rect_height
     *
     * @param int $rect_height Set Height of area for recognition.
     *
     * @return $this
     */
    public function setRectHeight($rect_height)
    {
        $this->container['rect_height'] = $rect_height;

        return $this;
    }

    /**
     * Gets strip_fnc
     *
     * @return bool
     */
    public function getStripFnc()
    {
        return $this->container['strip_fnc'];
    }

    /**
     * Sets strip_fnc
     *
     * @param bool $strip_fnc Value indicating whether FNC symbol strip must be done.
     *
     * @return $this
     */
    public function setStripFnc($strip_fnc)
    {
        $this->container['strip_fnc'] = $strip_fnc;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int $timeout Timeout of recognition process in milliseconds. Default value is 15_000 (15 seconds). Maximum value is 30_000 (1/2 minute). In case of a timeout RequestTimeout (408) status will be returned. Try reducing the image size to avoid timeout.
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets median_smoothing_window_size
     *
     * @return int
     */
    public function getMedianSmoothingWindowSize()
    {
        return $this->container['median_smoothing_window_size'];
    }

    /**
     * Sets median_smoothing_window_size
     *
     * @param int $median_smoothing_window_size Window size for median smoothing. Typical values are 3 or 4. Default value is 3. AllowMedianSmoothing must be set.
     *
     * @return $this
     */
    public function setMedianSmoothingWindowSize($median_smoothing_window_size)
    {
        $this->container['median_smoothing_window_size'] = $median_smoothing_window_size;

        return $this;
    }

    /**
     * Gets allow_median_smoothing
     *
     * @return bool
     */
    public function getAllowMedianSmoothing()
    {
        return $this->container['allow_median_smoothing'];
    }

    /**
     * Sets allow_median_smoothing
     *
     * @param bool $allow_median_smoothing Allows engine to enable median smoothing as additional scan. Mode helps to recognize noised barcodes.
     *
     * @return $this
     */
    public function setAllowMedianSmoothing($allow_median_smoothing)
    {
        $this->container['allow_median_smoothing'] = $allow_median_smoothing;

        return $this;
    }

    /**
     * Gets allow_complex_background
     *
     * @return bool
     */
    public function getAllowComplexBackground()
    {
        return $this->container['allow_complex_background'];
    }

    /**
     * Sets allow_complex_background
     *
     * @param bool $allow_complex_background Allows engine to recognize color barcodes on color background as additional scan. Extremely slow mode.
     *
     * @return $this
     */
    public function setAllowComplexBackground($allow_complex_background)
    {
        $this->container['allow_complex_background'] = $allow_complex_background;

        return $this;
    }

    /**
     * Gets allow_datamatrix_industrial_barcodes
     *
     * @return bool
     */
    public function getAllowDatamatrixIndustrialBarcodes()
    {
        return $this->container['allow_datamatrix_industrial_barcodes'];
    }

    /**
     * Sets allow_datamatrix_industrial_barcodes
     *
     * @param bool $allow_datamatrix_industrial_barcodes Allows engine for Datamatrix to recognize dashed industrial Datamatrix barcodes. Slow mode which helps only for dashed barcodes which consist from spots.
     *
     * @return $this
     */
    public function setAllowDatamatrixIndustrialBarcodes($allow_datamatrix_industrial_barcodes)
    {
        $this->container['allow_datamatrix_industrial_barcodes'] = $allow_datamatrix_industrial_barcodes;

        return $this;
    }

    /**
     * Gets allow_decreased_image
     *
     * @return bool
     */
    public function getAllowDecreasedImage()
    {
        return $this->container['allow_decreased_image'];
    }

    /**
     * Sets allow_decreased_image
     *
     * @param bool $allow_decreased_image Allows engine to recognize decreased image as additional scan. Size for decreasing is selected by internal engine algorithms. Mode helps to recognize barcodes which are noised and blurred but captured with high resolution.
     *
     * @return $this
     */
    public function setAllowDecreasedImage($allow_decreased_image)
    {
        $this->container['allow_decreased_image'] = $allow_decreased_image;

        return $this;
    }

    /**
     * Gets allow_detect_scan_gap
     *
     * @return bool
     */
    public function getAllowDetectScanGap()
    {
        return $this->container['allow_detect_scan_gap'];
    }

    /**
     * Sets allow_detect_scan_gap
     *
     * @param bool $allow_detect_scan_gap Allows engine to use gap between scans to increase recognition speed. Mode can make recognition problems with low height barcodes.
     *
     * @return $this
     */
    public function setAllowDetectScanGap($allow_detect_scan_gap)
    {
        $this->container['allow_detect_scan_gap'] = $allow_detect_scan_gap;

        return $this;
    }

    /**
     * Gets allow_incorrect_barcodes
     *
     * @return bool
     */
    public function getAllowIncorrectBarcodes()
    {
        return $this->container['allow_incorrect_barcodes'];
    }

    /**
     * Sets allow_incorrect_barcodes
     *
     * @param bool $allow_incorrect_barcodes Allows engine to recognize barcodes which has incorrect checksum or incorrect values. Mode can be used to recognize damaged barcodes with incorrect text.
     *
     * @return $this
     */
    public function setAllowIncorrectBarcodes($allow_incorrect_barcodes)
    {
        $this->container['allow_incorrect_barcodes'] = $allow_incorrect_barcodes;

        return $this;
    }

    /**
     * Gets allow_invert_image
     *
     * @return bool
     */
    public function getAllowInvertImage()
    {
        return $this->container['allow_invert_image'];
    }

    /**
     * Sets allow_invert_image
     *
     * @param bool $allow_invert_image Allows engine to recognize inverse color image as additional scan. Mode can be used when barcode is white on black background.
     *
     * @return $this
     */
    public function setAllowInvertImage($allow_invert_image)
    {
        $this->container['allow_invert_image'] = $allow_invert_image;

        return $this;
    }

    /**
     * Gets allow_micro_white_spots_removing
     *
     * @return bool
     */
    public function getAllowMicroWhiteSpotsRemoving()
    {
        return $this->container['allow_micro_white_spots_removing'];
    }

    /**
     * Sets allow_micro_white_spots_removing
     *
     * @param bool $allow_micro_white_spots_removing Allows engine for Postal barcodes to recognize slightly noised images. Mode helps to recognize slightly damaged Postal barcodes.
     *
     * @return $this
     */
    public function setAllowMicroWhiteSpotsRemoving($allow_micro_white_spots_removing)
    {
        $this->container['allow_micro_white_spots_removing'] = $allow_micro_white_spots_removing;

        return $this;
    }

    /**
     * Gets allow_one_d_fast_barcodes_detector
     *
     * @return bool
     */
    public function getAllowOneDFastBarcodesDetector()
    {
        return $this->container['allow_one_d_fast_barcodes_detector'];
    }

    /**
     * Sets allow_one_d_fast_barcodes_detector
     *
     * @param bool $allow_one_d_fast_barcodes_detector Allows engine for 1D barcodes to quickly recognize high quality barcodes which fill almost whole image. Mode helps to quickly recognize generated barcodes from Internet.
     *
     * @return $this
     */
    public function setAllowOneDFastBarcodesDetector($allow_one_d_fast_barcodes_detector)
    {
        $this->container['allow_one_d_fast_barcodes_detector'] = $allow_one_d_fast_barcodes_detector;

        return $this;
    }

    /**
     * Gets allow_one_d_wiped_bars_restoration
     *
     * @return bool
     */
    public function getAllowOneDWipedBarsRestoration()
    {
        return $this->container['allow_one_d_wiped_bars_restoration'];
    }

    /**
     * Sets allow_one_d_wiped_bars_restoration
     *
     * @param bool $allow_one_d_wiped_bars_restoration Allows engine for 1D barcodes to recognize barcodes with single wiped/glued bars in pattern.
     *
     * @return $this
     */
    public function setAllowOneDWipedBarsRestoration($allow_one_d_wiped_bars_restoration)
    {
        $this->container['allow_one_d_wiped_bars_restoration'] = $allow_one_d_wiped_bars_restoration;

        return $this;
    }

    /**
     * Gets allow_qr_micro_qr_restoration
     *
     * @return bool
     */
    public function getAllowQrMicroQrRestoration()
    {
        return $this->container['allow_qr_micro_qr_restoration'];
    }

    /**
     * Sets allow_qr_micro_qr_restoration
     *
     * @param bool $allow_qr_micro_qr_restoration Allows engine for QR/MicroQR to recognize damaged MicroQR barcodes.
     *
     * @return $this
     */
    public function setAllowQrMicroQrRestoration($allow_qr_micro_qr_restoration)
    {
        $this->container['allow_qr_micro_qr_restoration'] = $allow_qr_micro_qr_restoration;

        return $this;
    }

    /**
     * Gets allow_regular_image
     *
     * @return bool
     */
    public function getAllowRegularImage()
    {
        return $this->container['allow_regular_image'];
    }

    /**
     * Sets allow_regular_image
     *
     * @param bool $allow_regular_image Allows engine to recognize regular image without any restorations as main scan. Mode to recognize image as is.
     *
     * @return $this
     */
    public function setAllowRegularImage($allow_regular_image)
    {
        $this->container['allow_regular_image'] = $allow_regular_image;

        return $this;
    }

    /**
     * Gets allow_salt_and_pepper_filtering
     *
     * @return bool
     */
    public function getAllowSaltAndPepperFiltering()
    {
        return $this->container['allow_salt_and_pepper_filtering'];
    }

    /**
     * Sets allow_salt_and_pepper_filtering
     *
     * @param bool $allow_salt_and_pepper_filtering Allows engine to recognize barcodes with salt and pepper noise type. Mode can remove small noise with white and black dots.
     *
     * @return $this
     */
    public function setAllowSaltAndPepperFiltering($allow_salt_and_pepper_filtering)
    {
        $this->container['allow_salt_and_pepper_filtering'] = $allow_salt_and_pepper_filtering;

        return $this;
    }

    /**
     * Gets allow_white_spots_removing
     *
     * @return bool
     */
    public function getAllowWhiteSpotsRemoving()
    {
        return $this->container['allow_white_spots_removing'];
    }

    /**
     * Sets allow_white_spots_removing
     *
     * @param bool $allow_white_spots_removing Allows engine to recognize image without small white spots as additional scan. Mode helps to recognize noised image as well as median smoothing filtering.
     *
     * @return $this
     */
    public function setAllowWhiteSpotsRemoving($allow_white_spots_removing)
    {
        $this->container['allow_white_spots_removing'] = $allow_white_spots_removing;

        return $this;
    }

    /**
     * Gets check_more1_d_variants
     *
     * @return bool
     */
    public function getCheckMore1DVariants()
    {
        return $this->container['check_more1_d_variants'];
    }

    /**
     * Sets check_more1_d_variants
     *
     * @param bool $check_more1_d_variants Allows engine to recognize 1D barcodes with checksum by checking more recognition variants. Default value: False.
     *
     * @return $this
     */
    public function setCheckMore1DVariants($check_more1_d_variants)
    {
        $this->container['check_more1_d_variants'] = $check_more1_d_variants;

        return $this;
    }

    /**
     * Gets fast_scan_only
     *
     * @return bool
     */
    public function getFastScanOnly()
    {
        return $this->container['fast_scan_only'];
    }

    /**
     * Sets fast_scan_only
     *
     * @param bool $fast_scan_only Allows engine for 1D barcodes to quickly recognize middle slice of an image and return result without using any time-consuming algorithms. Default value: False.
     *
     * @return $this
     */
    public function setFastScanOnly($fast_scan_only)
    {
        $this->container['fast_scan_only'] = $fast_scan_only;

        return $this;
    }

    /**
     * Gets allow_additional_restorations
     *
     * @return bool
     */
    public function getAllowAdditionalRestorations()
    {
        return $this->container['allow_additional_restorations'];
    }

    /**
     * Sets allow_additional_restorations
     *
     * @param bool $allow_additional_restorations Allows engine using additional image restorations to recognize corrupted barcodes. At this time, it is used only in MicroPdf417 barcode type. Default value: False.
     *
     * @return $this
     */
    public function setAllowAdditionalRestorations($allow_additional_restorations)
    {
        $this->container['allow_additional_restorations'] = $allow_additional_restorations;

        return $this;
    }

    /**
     * Gets region_likelihood_threshold_percent
     *
     * @return double
     */
    public function getRegionLikelihoodThresholdPercent()
    {
        return $this->container['region_likelihood_threshold_percent'];
    }

    /**
     * Sets region_likelihood_threshold_percent
     *
     * @param double $region_likelihood_threshold_percent Sets threshold for detected regions that may contain barcodes. Value 0.7 means that bottom 70% of possible regions are filtered out and not processed further. Region likelihood threshold must be between [0.05, 0.9] Use high values for clear images with few barcodes. Use low values for images with many barcodes or for noisy images. Low value may lead to a bigger recognition time.
     *
     * @return $this
     */
    public function setRegionLikelihoodThresholdPercent($region_likelihood_threshold_percent)
    {
        $this->container['region_likelihood_threshold_percent'] = $region_likelihood_threshold_percent;

        return $this;
    }

    /**
     * Gets scan_window_sizes
     *
     * @return int[]
     */
    public function getScanWindowSizes()
    {
        return $this->container['scan_window_sizes'];
    }

    /**
     * Sets scan_window_sizes
     *
     * @param int[] $scan_window_sizes Scan window sizes in pixels. Allowed sizes are 10, 15, 20, 25, 30. Scanning with small window size takes more time and provides more accuracy but may fail in detecting very big barcodes. Combining of several window sizes can improve detection quality.
     *
     * @return $this
     */
    public function setScanWindowSizes($scan_window_sizes)
    {
        $this->container['scan_window_sizes'] = $scan_window_sizes;

        return $this;
    }

    /**
     * Gets similarity
     *
     * @return double
     */
    public function getSimilarity()
    {
        return $this->container['similarity'];
    }

    /**
     * Sets similarity
     *
     * @param double $similarity Similarity coefficient depends on how homogeneous barcodes are. Use high value for clear barcodes. Use low values to detect barcodes that ara partly damaged or not lighten evenly. Similarity coefficient must be between [0.5, 0.9]
     *
     * @return $this
     */
    public function setSimilarity($similarity)
    {
        $this->container['similarity'] = $similarity;

        return $this;
    }

    /**
     * Gets skip_diagonal_search
     *
     * @return bool
     */
    public function getSkipDiagonalSearch()
    {
        return $this->container['skip_diagonal_search'];
    }

    /**
     * Sets skip_diagonal_search
     *
     * @param bool $skip_diagonal_search Allows detector to skip search for diagonal barcodes. Setting it to false will increase detection time but allow to find diagonal barcodes that can be missed otherwise. Enabling of diagonal search leads to a bigger detection time.
     *
     * @return $this
     */
    public function setSkipDiagonalSearch($skip_diagonal_search)
    {
        $this->container['skip_diagonal_search'] = $skip_diagonal_search;

        return $this;
    }

    /**
     * Gets read_tiny_barcodes
     *
     * @return bool
     */
    public function getReadTinyBarcodes()
    {
        return $this->container['read_tiny_barcodes'];
    }

    /**
     * Sets read_tiny_barcodes
     *
     * @param bool $read_tiny_barcodes Allows engine to recognize tiny barcodes on large images. Ignored if AllowIncorrectBarcodes is set to True. Default value: False.
     *
     * @return $this
     */
    public function setReadTinyBarcodes($read_tiny_barcodes)
    {
        $this->container['read_tiny_barcodes'] = $read_tiny_barcodes;

        return $this;
    }

    /**
     * Gets australian_post_encoding_table
     *
     * @return \Aspose\BarCode\Model\CustomerInformationInterpretingType
     */
    public function getAustralianPostEncodingTable()
    {
        return $this->container['australian_post_encoding_table'];
    }

    /**
     * Sets australian_post_encoding_table
     *
     * @param \Aspose\BarCode\Model\CustomerInformationInterpretingType $australian_post_encoding_table Interpreting Type for the Customer Information of AustralianPost BarCode.Default is CustomerInformationInterpretingType.Other.
     *
     * @return $this
     */
    public function setAustralianPostEncodingTable($australian_post_encoding_table)
    {
        $this->container['australian_post_encoding_table'] = $australian_post_encoding_table;

        return $this;
    }

    /**
     * Gets ignore_ending_filling_patterns_for_c_table
     *
     * @return bool
     */
    public function getIgnoreEndingFillingPatternsForCTable()
    {
        return $this->container['ignore_ending_filling_patterns_for_c_table'];
    }

    /**
     * Sets ignore_ending_filling_patterns_for_c_table
     *
     * @param bool $ignore_ending_filling_patterns_for_c_table The flag which force AustraliaPost decoder to ignore last filling patterns in Customer Information Field during decoding as CTable method. CTable encoding method does not have any gaps in encoding table and sequence \"333\" of filling patterns is decoded as letter \"z\".
     *
     * @return $this
     */
    public function setIgnoreEndingFillingPatternsForCTable($ignore_ending_filling_patterns_for_c_table)
    {
        $this->container['ignore_ending_filling_patterns_for_c_table'] = $ignore_ending_filling_patterns_for_c_table;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
