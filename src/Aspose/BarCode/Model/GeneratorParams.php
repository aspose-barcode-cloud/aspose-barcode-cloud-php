<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * GeneratorParams
 *
 * @description Represents extended BarcodeGenerator params.
 */
class GeneratorParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "GeneratorParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'type_of_barcode' => '\Aspose\BarCode\Model\EncodeBarcodeType',
        'text' => 'string',
        'two_d_display_text' => 'string',
        'text_location' => '\Aspose\BarCode\Model\CodeLocation',
        'text_alignment' => '\Aspose\BarCode\Model\TextAlignment',
        'text_color' => 'string',
        'font' => '\Aspose\BarCode\Model\FontParams',
        'font_size_mode' => '\Aspose\BarCode\Model\FontMode',
        'no_wrap' => 'bool',
        'resolution' => 'double',
        'resolution_x' => 'double',
        'resolution_y' => 'double',
        'dimension_x' => 'double',
        'text_space' => 'double',
        'units' => '\Aspose\BarCode\Model\AvailableGraphicsUnit',
        'size_mode' => '\Aspose\BarCode\Model\AutoSizeMode',
        'bar_height' => 'double',
        'image_height' => 'double',
        'image_width' => 'double',
        'rotation_angle' => 'double',
        'padding' => '\Aspose\BarCode\Model\Padding',
        'caption_above' => '\Aspose\BarCode\Model\CaptionParams',
        'caption_below' => '\Aspose\BarCode\Model\CaptionParams',
        'back_color' => 'string',
        'bar_color' => 'string',
        'border_color' => 'string',
        'border_width' => 'double',
        'border_dash_style' => '\Aspose\BarCode\Model\BorderDashStyle',
        'border_visible' => 'bool',
        'enable_checksum' => '\Aspose\BarCode\Model\EnableChecksum',
        'enable_escape' => 'bool',
        'filled_bars' => 'bool',
        'always_show_checksum' => 'bool',
        'wide_narrow_ratio' => 'double',
        'validate_text' => 'bool',
        'supplement_data' => 'string',
        'supplement_space' => 'double',
        'bar_width_reduction' => 'double',
        'use_anti_alias' => 'bool',
        'australian_post' => '\Aspose\BarCode\Model\AustralianPostParams',
        'aztec' => '\Aspose\BarCode\Model\AztecParams',
        'codabar' => '\Aspose\BarCode\Model\CodabarParams',
        'codablock' => '\Aspose\BarCode\Model\CodablockParams',
        'code16_k' => '\Aspose\BarCode\Model\Code16KParams',
        'coupon' => '\Aspose\BarCode\Model\CouponParams',
        'data_bar' => '\Aspose\BarCode\Model\DataBarParams',
        'data_matrix' => '\Aspose\BarCode\Model\DataMatrixParams',
        'dot_code' => '\Aspose\BarCode\Model\DotCodeParams',
        'itf' => '\Aspose\BarCode\Model\ITFParams',
        'maxi_code' => '\Aspose\BarCode\Model\MaxiCodeParams',
        'pdf417' => '\Aspose\BarCode\Model\Pdf417Params',
        'postal' => '\Aspose\BarCode\Model\PostalParams',
        'qr' => '\Aspose\BarCode\Model\QrParams',
        'patch_code' => '\Aspose\BarCode\Model\PatchCodeParams',
        'code128' => '\Aspose\BarCode\Model\Code128Params',
        'han_xin' => '\Aspose\BarCode\Model\HanXinParams'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'type_of_barcode' => null,
        'text' => null,
        'two_d_display_text' => null,
        'text_location' => null,
        'text_alignment' => null,
        'text_color' => null,
        'font' => null,
        'font_size_mode' => null,
        'no_wrap' => null,
        'resolution' => 'double',
        'resolution_x' => 'double',
        'resolution_y' => 'double',
        'dimension_x' => 'double',
        'text_space' => 'double',
        'units' => null,
        'size_mode' => null,
        'bar_height' => 'double',
        'image_height' => 'double',
        'image_width' => 'double',
        'rotation_angle' => 'double',
        'padding' => null,
        'caption_above' => null,
        'caption_below' => null,
        'back_color' => null,
        'bar_color' => null,
        'border_color' => null,
        'border_width' => 'double',
        'border_dash_style' => null,
        'border_visible' => null,
        'enable_checksum' => null,
        'enable_escape' => null,
        'filled_bars' => null,
        'always_show_checksum' => null,
        'wide_narrow_ratio' => 'double',
        'validate_text' => null,
        'supplement_data' => null,
        'supplement_space' => 'double',
        'bar_width_reduction' => 'double',
        'use_anti_alias' => null,
        'australian_post' => null,
        'aztec' => null,
        'codabar' => null,
        'codablock' => null,
        'code16_k' => null,
        'coupon' => null,
        'data_bar' => null,
        'data_matrix' => null,
        'dot_code' => null,
        'itf' => null,
        'maxi_code' => null,
        'pdf417' => null,
        'postal' => null,
        'qr' => null,
        'patch_code' => null,
        'code128' => null,
        'han_xin' => null
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
        'type_of_barcode' => 'TypeOfBarcode',
        'text' => 'Text',
        'two_d_display_text' => 'TwoDDisplayText',
        'text_location' => 'TextLocation',
        'text_alignment' => 'TextAlignment',
        'text_color' => 'TextColor',
        'font' => 'Font',
        'font_size_mode' => 'FontSizeMode',
        'no_wrap' => 'NoWrap',
        'resolution' => 'Resolution',
        'resolution_x' => 'ResolutionX',
        'resolution_y' => 'ResolutionY',
        'dimension_x' => 'DimensionX',
        'text_space' => 'TextSpace',
        'units' => 'Units',
        'size_mode' => 'SizeMode',
        'bar_height' => 'BarHeight',
        'image_height' => 'ImageHeight',
        'image_width' => 'ImageWidth',
        'rotation_angle' => 'RotationAngle',
        'padding' => 'Padding',
        'caption_above' => 'CaptionAbove',
        'caption_below' => 'CaptionBelow',
        'back_color' => 'BackColor',
        'bar_color' => 'BarColor',
        'border_color' => 'BorderColor',
        'border_width' => 'BorderWidth',
        'border_dash_style' => 'BorderDashStyle',
        'border_visible' => 'BorderVisible',
        'enable_checksum' => 'EnableChecksum',
        'enable_escape' => 'EnableEscape',
        'filled_bars' => 'FilledBars',
        'always_show_checksum' => 'AlwaysShowChecksum',
        'wide_narrow_ratio' => 'WideNarrowRatio',
        'validate_text' => 'ValidateText',
        'supplement_data' => 'SupplementData',
        'supplement_space' => 'SupplementSpace',
        'bar_width_reduction' => 'BarWidthReduction',
        'use_anti_alias' => 'UseAntiAlias',
        'australian_post' => 'AustralianPost',
        'aztec' => 'Aztec',
        'codabar' => 'Codabar',
        'codablock' => 'Codablock',
        'code16_k' => 'Code16K',
        'coupon' => 'Coupon',
        'data_bar' => 'DataBar',
        'data_matrix' => 'DataMatrix',
        'dot_code' => 'DotCode',
        'itf' => 'ITF',
        'maxi_code' => 'MaxiCode',
        'pdf417' => 'Pdf417',
        'postal' => 'Postal',
        'qr' => 'QR',
        'patch_code' => 'PatchCode',
        'code128' => 'Code128',
        'han_xin' => 'HanXin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_of_barcode' => 'setTypeOfBarcode',
        'text' => 'setText',
        'two_d_display_text' => 'setTwoDDisplayText',
        'text_location' => 'setTextLocation',
        'text_alignment' => 'setTextAlignment',
        'text_color' => 'setTextColor',
        'font' => 'setFont',
        'font_size_mode' => 'setFontSizeMode',
        'no_wrap' => 'setNoWrap',
        'resolution' => 'setResolution',
        'resolution_x' => 'setResolutionX',
        'resolution_y' => 'setResolutionY',
        'dimension_x' => 'setDimensionX',
        'text_space' => 'setTextSpace',
        'units' => 'setUnits',
        'size_mode' => 'setSizeMode',
        'bar_height' => 'setBarHeight',
        'image_height' => 'setImageHeight',
        'image_width' => 'setImageWidth',
        'rotation_angle' => 'setRotationAngle',
        'padding' => 'setPadding',
        'caption_above' => 'setCaptionAbove',
        'caption_below' => 'setCaptionBelow',
        'back_color' => 'setBackColor',
        'bar_color' => 'setBarColor',
        'border_color' => 'setBorderColor',
        'border_width' => 'setBorderWidth',
        'border_dash_style' => 'setBorderDashStyle',
        'border_visible' => 'setBorderVisible',
        'enable_checksum' => 'setEnableChecksum',
        'enable_escape' => 'setEnableEscape',
        'filled_bars' => 'setFilledBars',
        'always_show_checksum' => 'setAlwaysShowChecksum',
        'wide_narrow_ratio' => 'setWideNarrowRatio',
        'validate_text' => 'setValidateText',
        'supplement_data' => 'setSupplementData',
        'supplement_space' => 'setSupplementSpace',
        'bar_width_reduction' => 'setBarWidthReduction',
        'use_anti_alias' => 'setUseAntiAlias',
        'australian_post' => 'setAustralianPost',
        'aztec' => 'setAztec',
        'codabar' => 'setCodabar',
        'codablock' => 'setCodablock',
        'code16_k' => 'setCode16K',
        'coupon' => 'setCoupon',
        'data_bar' => 'setDataBar',
        'data_matrix' => 'setDataMatrix',
        'dot_code' => 'setDotCode',
        'itf' => 'setItf',
        'maxi_code' => 'setMaxiCode',
        'pdf417' => 'setPdf417',
        'postal' => 'setPostal',
        'qr' => 'setQr',
        'patch_code' => 'setPatchCode',
        'code128' => 'setCode128',
        'han_xin' => 'setHanXin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_of_barcode' => 'getTypeOfBarcode',
        'text' => 'getText',
        'two_d_display_text' => 'getTwoDDisplayText',
        'text_location' => 'getTextLocation',
        'text_alignment' => 'getTextAlignment',
        'text_color' => 'getTextColor',
        'font' => 'getFont',
        'font_size_mode' => 'getFontSizeMode',
        'no_wrap' => 'getNoWrap',
        'resolution' => 'getResolution',
        'resolution_x' => 'getResolutionX',
        'resolution_y' => 'getResolutionY',
        'dimension_x' => 'getDimensionX',
        'text_space' => 'getTextSpace',
        'units' => 'getUnits',
        'size_mode' => 'getSizeMode',
        'bar_height' => 'getBarHeight',
        'image_height' => 'getImageHeight',
        'image_width' => 'getImageWidth',
        'rotation_angle' => 'getRotationAngle',
        'padding' => 'getPadding',
        'caption_above' => 'getCaptionAbove',
        'caption_below' => 'getCaptionBelow',
        'back_color' => 'getBackColor',
        'bar_color' => 'getBarColor',
        'border_color' => 'getBorderColor',
        'border_width' => 'getBorderWidth',
        'border_dash_style' => 'getBorderDashStyle',
        'border_visible' => 'getBorderVisible',
        'enable_checksum' => 'getEnableChecksum',
        'enable_escape' => 'getEnableEscape',
        'filled_bars' => 'getFilledBars',
        'always_show_checksum' => 'getAlwaysShowChecksum',
        'wide_narrow_ratio' => 'getWideNarrowRatio',
        'validate_text' => 'getValidateText',
        'supplement_data' => 'getSupplementData',
        'supplement_space' => 'getSupplementSpace',
        'bar_width_reduction' => 'getBarWidthReduction',
        'use_anti_alias' => 'getUseAntiAlias',
        'australian_post' => 'getAustralianPost',
        'aztec' => 'getAztec',
        'codabar' => 'getCodabar',
        'codablock' => 'getCodablock',
        'code16_k' => 'getCode16K',
        'coupon' => 'getCoupon',
        'data_bar' => 'getDataBar',
        'data_matrix' => 'getDataMatrix',
        'dot_code' => 'getDotCode',
        'itf' => 'getItf',
        'maxi_code' => 'getMaxiCode',
        'pdf417' => 'getPdf417',
        'postal' => 'getPostal',
        'qr' => 'getQr',
        'patch_code' => 'getPatchCode',
        'code128' => 'getCode128',
        'han_xin' => 'getHanXin'
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
        $this->container['type_of_barcode'] = isset($data['type_of_barcode']) ? $data['type_of_barcode'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['two_d_display_text'] = isset($data['two_d_display_text']) ? $data['two_d_display_text'] : null;
        $this->container['text_location'] = isset($data['text_location']) ? $data['text_location'] : null;
        $this->container['text_alignment'] = isset($data['text_alignment']) ? $data['text_alignment'] : null;
        $this->container['text_color'] = isset($data['text_color']) ? $data['text_color'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['font_size_mode'] = isset($data['font_size_mode']) ? $data['font_size_mode'] : null;
        $this->container['no_wrap'] = isset($data['no_wrap']) ? $data['no_wrap'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['resolution_x'] = isset($data['resolution_x']) ? $data['resolution_x'] : null;
        $this->container['resolution_y'] = isset($data['resolution_y']) ? $data['resolution_y'] : null;
        $this->container['dimension_x'] = isset($data['dimension_x']) ? $data['dimension_x'] : null;
        $this->container['text_space'] = isset($data['text_space']) ? $data['text_space'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['size_mode'] = isset($data['size_mode']) ? $data['size_mode'] : null;
        $this->container['bar_height'] = isset($data['bar_height']) ? $data['bar_height'] : null;
        $this->container['image_height'] = isset($data['image_height']) ? $data['image_height'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['padding'] = isset($data['padding']) ? $data['padding'] : null;
        $this->container['caption_above'] = isset($data['caption_above']) ? $data['caption_above'] : null;
        $this->container['caption_below'] = isset($data['caption_below']) ? $data['caption_below'] : null;
        $this->container['back_color'] = isset($data['back_color']) ? $data['back_color'] : null;
        $this->container['bar_color'] = isset($data['bar_color']) ? $data['bar_color'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_width'] = isset($data['border_width']) ? $data['border_width'] : null;
        $this->container['border_dash_style'] = isset($data['border_dash_style']) ? $data['border_dash_style'] : null;
        $this->container['border_visible'] = isset($data['border_visible']) ? $data['border_visible'] : null;
        $this->container['enable_checksum'] = isset($data['enable_checksum']) ? $data['enable_checksum'] : null;
        $this->container['enable_escape'] = isset($data['enable_escape']) ? $data['enable_escape'] : null;
        $this->container['filled_bars'] = isset($data['filled_bars']) ? $data['filled_bars'] : null;
        $this->container['always_show_checksum'] = isset($data['always_show_checksum']) ? $data['always_show_checksum'] : null;
        $this->container['wide_narrow_ratio'] = isset($data['wide_narrow_ratio']) ? $data['wide_narrow_ratio'] : null;
        $this->container['validate_text'] = isset($data['validate_text']) ? $data['validate_text'] : null;
        $this->container['supplement_data'] = isset($data['supplement_data']) ? $data['supplement_data'] : null;
        $this->container['supplement_space'] = isset($data['supplement_space']) ? $data['supplement_space'] : null;
        $this->container['bar_width_reduction'] = isset($data['bar_width_reduction']) ? $data['bar_width_reduction'] : null;
        $this->container['use_anti_alias'] = isset($data['use_anti_alias']) ? $data['use_anti_alias'] : null;
        $this->container['australian_post'] = isset($data['australian_post']) ? $data['australian_post'] : null;
        $this->container['aztec'] = isset($data['aztec']) ? $data['aztec'] : null;
        $this->container['codabar'] = isset($data['codabar']) ? $data['codabar'] : null;
        $this->container['codablock'] = isset($data['codablock']) ? $data['codablock'] : null;
        $this->container['code16_k'] = isset($data['code16_k']) ? $data['code16_k'] : null;
        $this->container['coupon'] = isset($data['coupon']) ? $data['coupon'] : null;
        $this->container['data_bar'] = isset($data['data_bar']) ? $data['data_bar'] : null;
        $this->container['data_matrix'] = isset($data['data_matrix']) ? $data['data_matrix'] : null;
        $this->container['dot_code'] = isset($data['dot_code']) ? $data['dot_code'] : null;
        $this->container['itf'] = isset($data['itf']) ? $data['itf'] : null;
        $this->container['maxi_code'] = isset($data['maxi_code']) ? $data['maxi_code'] : null;
        $this->container['pdf417'] = isset($data['pdf417']) ? $data['pdf417'] : null;
        $this->container['postal'] = isset($data['postal']) ? $data['postal'] : null;
        $this->container['qr'] = isset($data['qr']) ? $data['qr'] : null;
        $this->container['patch_code'] = isset($data['patch_code']) ? $data['patch_code'] : null;
        $this->container['code128'] = isset($data['code128']) ? $data['code128'] : null;
        $this->container['han_xin'] = isset($data['han_xin']) ? $data['han_xin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type_of_barcode'] === null) {
            $invalidProperties[] = "'type_of_barcode' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
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
        if ($this->container['type_of_barcode'] === null) {
            return false;
        }
        if ($this->container['text'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type_of_barcode
     *
     * @return \Aspose\BarCode\Model\EncodeBarcodeType
     */
    public function getTypeOfBarcode()
    {
        return $this->container['type_of_barcode'];
    }

    /**
     * Sets type_of_barcode
     *
     * @param \Aspose\BarCode\Model\EncodeBarcodeType $type_of_barcode Type of barcode to generate.
     *
     * @return $this
     */
    public function setTypeOfBarcode($type_of_barcode)
    {
        $this->container['type_of_barcode'] = $type_of_barcode;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Text to encode.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets two_d_display_text
     *
     * @return string
     */
    public function getTwoDDisplayText()
    {
        return $this->container['two_d_display_text'];
    }

    /**
     * Sets two_d_display_text
     *
     * @param string $two_d_display_text Text that will be displayed instead of codetext in 2D barcodes. Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
     *
     * @return $this
     */
    public function setTwoDDisplayText($two_d_display_text)
    {
        $this->container['two_d_display_text'] = $two_d_display_text;

        return $this;
    }

    /**
     * Gets text_location
     *
     * @return \Aspose\BarCode\Model\CodeLocation
     */
    public function getTextLocation()
    {
        return $this->container['text_location'];
    }

    /**
     * Sets text_location
     *
     * @param \Aspose\BarCode\Model\CodeLocation $text_location Specify the displaying Text Location, set to CodeLocation.None to hide CodeText. Default value: CodeLocation.Below.
     *
     * @return $this
     */
    public function setTextLocation($text_location)
    {
        $this->container['text_location'] = $text_location;

        return $this;
    }

    /**
     * Gets text_alignment
     *
     * @return \Aspose\BarCode\Model\TextAlignment
     */
    public function getTextAlignment()
    {
        return $this->container['text_alignment'];
    }

    /**
     * Sets text_alignment
     *
     * @param \Aspose\BarCode\Model\TextAlignment $text_alignment Text alignment.
     *
     * @return $this
     */
    public function setTextAlignment($text_alignment)
    {
        $this->container['text_alignment'] = $text_alignment;

        return $this;
    }

    /**
     * Gets text_color
     *
     * @return string
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     *
     * @param string $text_color Specify the displaying CodeText's Color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     *
     * @return $this
     */
    public function setTextColor($text_color)
    {
        $this->container['text_color'] = $text_color;

        return $this;
    }

    /**
     * Gets font
     *
     * @return \Aspose\BarCode\Model\FontParams
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param \Aspose\BarCode\Model\FontParams $font Specify the displaying Text's font. Default value: Arial 5pt regular. Ignored if FontSizeMode is set to FontSizeMode.Auto.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets font_size_mode
     *
     * @return \Aspose\BarCode\Model\FontMode
     */
    public function getFontSizeMode()
    {
        return $this->container['font_size_mode'];
    }

    /**
     * Sets font_size_mode
     *
     * @param \Aspose\BarCode\Model\FontMode $font_size_mode Specify FontSizeMode. If FontSizeMode is set to Auto, font size will be calculated automatically based on xDimension value. It is recommended to use FontSizeMode.Auto especially in AutoSizeMode.Nearest or AutoSizeMode.Interpolation. Default value: FontSizeMode.Auto.
     *
     * @return $this
     */
    public function setFontSizeMode($font_size_mode)
    {
        $this->container['font_size_mode'] = $font_size_mode;

        return $this;
    }

    /**
     * Gets no_wrap
     *
     * @return bool
     */
    public function getNoWrap()
    {
        return $this->container['no_wrap'];
    }

    /**
     * Sets no_wrap
     *
     * @param bool $no_wrap Specify word wraps (line breaks) within text. Default value: false.
     *
     * @return $this
     */
    public function setNoWrap($no_wrap)
    {
        $this->container['no_wrap'] = $no_wrap;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return double
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param double $resolution Resolution of the BarCode image. One value for both dimensions. Default value: 96 dpi.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets resolution_x
     *
     * @return double
     */
    public function getResolutionX()
    {
        return $this->container['resolution_x'];
    }

    /**
     * Sets resolution_x
     *
     * @param double $resolution_x DEPRECATED: Use 'Resolution' instead.
     *
     * @return $this
     */
    public function setResolutionX($resolution_x)
    {
        trigger_error('Property $resolution_x is deprecated. Use \'Resolution\' instead.', E_USER_DEPRECATED);
        $this->container['resolution_x'] = $resolution_x;

        return $this;
    }

    /**
     * Gets resolution_y
     *
     * @return double
     */
    public function getResolutionY()
    {
        return $this->container['resolution_y'];
    }

    /**
     * Sets resolution_y
     *
     * @param double $resolution_y DEPRECATED: Use 'Resolution' instead.
     *
     * @return $this
     */
    public function setResolutionY($resolution_y)
    {
        trigger_error('Property $resolution_y is deprecated. Use \'Resolution\' instead.', E_USER_DEPRECATED);
        $this->container['resolution_y'] = $resolution_y;

        return $this;
    }

    /**
     * Gets dimension_x
     *
     * @return double
     */
    public function getDimensionX()
    {
        return $this->container['dimension_x'];
    }

    /**
     * Sets dimension_x
     *
     * @param double $dimension_x The smallest width of the unit of BarCode bars or spaces. Increase this will increase the whole barcode image width. Ignored if AutoSizeMode property is set to AutoSizeMode.Nearest or AutoSizeMode.Interpolation.
     *
     * @return $this
     */
    public function setDimensionX($dimension_x)
    {
        $this->container['dimension_x'] = $dimension_x;

        return $this;
    }

    /**
     * Gets text_space
     *
     * @return double
     */
    public function getTextSpace()
    {
        return $this->container['text_space'];
    }

    /**
     * Sets text_space
     *
     * @param double $text_space Space between the CodeText and the BarCode in Unit value. Default value: 2pt. Ignored for EAN8, EAN13, UPCE, UPCA, ISBN, ISMN, ISSN, UpcaGs1DatabarCoupon.
     *
     * @return $this
     */
    public function setTextSpace($text_space)
    {
        $this->container['text_space'] = $text_space;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \Aspose\BarCode\Model\AvailableGraphicsUnit
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \Aspose\BarCode\Model\AvailableGraphicsUnit $units Common Units for all measuring in query. Default units: pixel.
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets size_mode
     *
     * @return \Aspose\BarCode\Model\AutoSizeMode
     */
    public function getSizeMode()
    {
        return $this->container['size_mode'];
    }

    /**
     * Sets size_mode
     *
     * @param \Aspose\BarCode\Model\AutoSizeMode $size_mode Specifies the different types of automatic sizing modes. Default value: AutoSizeMode.None.
     *
     * @return $this
     */
    public function setSizeMode($size_mode)
    {
        $this->container['size_mode'] = $size_mode;

        return $this;
    }

    /**
     * Gets bar_height
     *
     * @return double
     */
    public function getBarHeight()
    {
        return $this->container['bar_height'];
    }

    /**
     * Sets bar_height
     *
     * @param double $bar_height Height of the barcode in given units. Default units: pixel.
     *
     * @return $this
     */
    public function setBarHeight($bar_height)
    {
        $this->container['bar_height'] = $bar_height;

        return $this;
    }

    /**
     * Gets image_height
     *
     * @return double
     */
    public function getImageHeight()
    {
        return $this->container['image_height'];
    }

    /**
     * Sets image_height
     *
     * @param double $image_height Height of the barcode image in given units. Default units: pixel.
     *
     * @return $this
     */
    public function setImageHeight($image_height)
    {
        $this->container['image_height'] = $image_height;

        return $this;
    }

    /**
     * Gets image_width
     *
     * @return double
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /**
     * Sets image_width
     *
     * @param double $image_width Width of the barcode image in given units. Default units: pixel.
     *
     * @return $this
     */
    public function setImageWidth($image_width)
    {
        $this->container['image_width'] = $image_width;

        return $this;
    }

    /**
     * Gets rotation_angle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     * @param double $rotation_angle BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation. If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image. Default value: 0.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }

    /**
     * Gets padding
     *
     * @return \Aspose\BarCode\Model\Padding
     */
    public function getPadding()
    {
        return $this->container['padding'];
    }

    /**
     * Sets padding
     *
     * @param \Aspose\BarCode\Model\Padding $padding Barcode paddings. Default value: 5pt 5pt 5pt 5pt.
     *
     * @return $this
     */
    public function setPadding($padding)
    {
        $this->container['padding'] = $padding;

        return $this;
    }

    /**
     * Gets caption_above
     *
     * @return \Aspose\BarCode\Model\CaptionParams
     */
    public function getCaptionAbove()
    {
        return $this->container['caption_above'];
    }

    /**
     * Sets caption_above
     *
     * @param \Aspose\BarCode\Model\CaptionParams $caption_above Additional caption above barcode.
     *
     * @return $this
     */
    public function setCaptionAbove($caption_above)
    {
        $this->container['caption_above'] = $caption_above;

        return $this;
    }

    /**
     * Gets caption_below
     *
     * @return \Aspose\BarCode\Model\CaptionParams
     */
    public function getCaptionBelow()
    {
        return $this->container['caption_below'];
    }

    /**
     * Sets caption_below
     *
     * @param \Aspose\BarCode\Model\CaptionParams $caption_below Additional caption below barcode.
     *
     * @return $this
     */
    public function setCaptionBelow($caption_below)
    {
        $this->container['caption_below'] = $caption_below;

        return $this;
    }

    /**
     * Gets back_color
     *
     * @return string
     */
    public function getBackColor()
    {
        return $this->container['back_color'];
    }

    /**
     * Sets back_color
     *
     * @param string $back_color Background color of the barcode image. Default value: white. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     *
     * @return $this
     */
    public function setBackColor($back_color)
    {
        $this->container['back_color'] = $back_color;

        return $this;
    }

    /**
     * Gets bar_color
     *
     * @return string
     */
    public function getBarColor()
    {
        return $this->container['bar_color'];
    }

    /**
     * Sets bar_color
     *
     * @param string $bar_color Bars color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     *
     * @return $this
     */
    public function setBarColor($bar_color)
    {
        $this->container['bar_color'] = $bar_color;

        return $this;
    }

    /**
     * Gets border_color
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     * @param string $border_color Border color. Default value: black. Use named colors like: red, green, blue Or HTML colors like: #FF0000, #00FF00, #0000FF
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets border_width
     *
     * @return double
     */
    public function getBorderWidth()
    {
        return $this->container['border_width'];
    }

    /**
     * Sets border_width
     *
     * @param double $border_width Border width. Default value: 0. Ignored if Visible is set to false.
     *
     * @return $this
     */
    public function setBorderWidth($border_width)
    {
        $this->container['border_width'] = $border_width;

        return $this;
    }

    /**
     * Gets border_dash_style
     *
     * @return \Aspose\BarCode\Model\BorderDashStyle
     */
    public function getBorderDashStyle()
    {
        return $this->container['border_dash_style'];
    }

    /**
     * Sets border_dash_style
     *
     * @param \Aspose\BarCode\Model\BorderDashStyle $border_dash_style Border dash style. Default value: BorderDashStyle.Solid.
     *
     * @return $this
     */
    public function setBorderDashStyle($border_dash_style)
    {
        $this->container['border_dash_style'] = $border_dash_style;

        return $this;
    }

    /**
     * Gets border_visible
     *
     * @return bool
     */
    public function getBorderVisible()
    {
        return $this->container['border_visible'];
    }

    /**
     * Sets border_visible
     *
     * @param bool $border_visible Border visibility. If false than parameter Width is always ignored (0). Default value: false.
     *
     * @return $this
     */
    public function setBorderVisible($border_visible)
    {
        $this->container['border_visible'] = $border_visible;

        return $this;
    }

    /**
     * Gets enable_checksum
     *
     * @return \Aspose\BarCode\Model\EnableChecksum
     */
    public function getEnableChecksum()
    {
        return $this->container['enable_checksum'];
    }

    /**
     * Sets enable_checksum
     *
     * @param \Aspose\BarCode\Model\EnableChecksum $enable_checksum Enable checksum during generation 1D barcodes. Default is treated as Yes for symbology which must contain checksum, as No where checksum only possible. Checksum is possible: Code39 Standard/Extended, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, DeutschePostIdentcode, DeutschePostLeitcode, VIN, Codabar Checksum always used: Rest symbology
     *
     * @return $this
     */
    public function setEnableChecksum($enable_checksum)
    {
        $this->container['enable_checksum'] = $enable_checksum;

        return $this;
    }

    /**
     * Gets enable_escape
     *
     * @return bool
     */
    public function getEnableEscape()
    {
        return $this->container['enable_escape'];
    }

    /**
     * Sets enable_escape
     *
     * @param bool $enable_escape Indicates whether explains the character \"\\\" as an escape character in CodeText property. Used for Pdf417, DataMatrix, Code128 only If the EnableEscape is true, \"\\\" will be explained as a special escape character. Otherwise, \"\\\" acts as normal characters. Aspose.BarCode supports input decimal ascii code and mnemonic for ASCII control-code characters. For example, \\013 and \\\\CR stands for CR.
     *
     * @return $this
     */
    public function setEnableEscape($enable_escape)
    {
        $this->container['enable_escape'] = $enable_escape;

        return $this;
    }

    /**
     * Gets filled_bars
     *
     * @return bool
     */
    public function getFilledBars()
    {
        return $this->container['filled_bars'];
    }

    /**
     * Sets filled_bars
     *
     * @param bool $filled_bars Value indicating whether bars are filled. Only for 1D barcodes. Default value: true.
     *
     * @return $this
     */
    public function setFilledBars($filled_bars)
    {
        $this->container['filled_bars'] = $filled_bars;

        return $this;
    }

    /**
     * Gets always_show_checksum
     *
     * @return bool
     */
    public function getAlwaysShowChecksum()
    {
        return $this->container['always_show_checksum'];
    }

    /**
     * Sets always_show_checksum
     *
     * @param bool $always_show_checksum Always display checksum digit in the human readable text for Code128 and GS1Code128 barcodes.
     *
     * @return $this
     */
    public function setAlwaysShowChecksum($always_show_checksum)
    {
        $this->container['always_show_checksum'] = $always_show_checksum;

        return $this;
    }

    /**
     * Gets wide_narrow_ratio
     *
     * @return double
     */
    public function getWideNarrowRatio()
    {
        return $this->container['wide_narrow_ratio'];
    }

    /**
     * Sets wide_narrow_ratio
     *
     * @param double $wide_narrow_ratio Wide bars to Narrow bars ratio. Default value: 3, that is, wide bars are 3 times as wide as narrow bars. Used for ITF, PZN, PharmaCode, Standard2of5, Interleaved2of5, Matrix2of5, ItalianPost25, IATA2of5, VIN, DeutschePost, OPC, Code32, DataLogic2of5, PatchCode, Code39Extended, Code39Standard
     *
     * @return $this
     */
    public function setWideNarrowRatio($wide_narrow_ratio)
    {
        $this->container['wide_narrow_ratio'] = $wide_narrow_ratio;

        return $this;
    }

    /**
     * Gets validate_text
     *
     * @return bool
     */
    public function getValidateText()
    {
        return $this->container['validate_text'];
    }

    /**
     * Sets validate_text
     *
     * @param bool $validate_text Only for 1D barcodes. If codetext is incorrect and value set to true - exception will be thrown. Otherwise codetext will be corrected to match barcode's specification. Exception always will be thrown for: Databar symbology if codetext is incorrect. Exception always will not be thrown for: AustraliaPost, SingaporePost, Code39Extended, Code93Extended, Code16K, Code128 symbology if codetext is incorrect.
     *
     * @return $this
     */
    public function setValidateText($validate_text)
    {
        $this->container['validate_text'] = $validate_text;

        return $this;
    }

    /**
     * Gets supplement_data
     *
     * @return string
     */
    public function getSupplementData()
    {
        return $this->container['supplement_data'];
    }

    /**
     * Sets supplement_data
     *
     * @param string $supplement_data Supplement parameters. Used for Interleaved2of5, Standard2of5, EAN13, EAN8, UPCA, UPCE, ISBN, ISSN, ISMN.
     *
     * @return $this
     */
    public function setSupplementData($supplement_data)
    {
        $this->container['supplement_data'] = $supplement_data;

        return $this;
    }

    /**
     * Gets supplement_space
     *
     * @return double
     */
    public function getSupplementSpace()
    {
        return $this->container['supplement_space'];
    }

    /**
     * Sets supplement_space
     *
     * @param double $supplement_space Space between main the BarCode and supplement BarCode.
     *
     * @return $this
     */
    public function setSupplementSpace($supplement_space)
    {
        $this->container['supplement_space'] = $supplement_space;

        return $this;
    }

    /**
     * Gets bar_width_reduction
     *
     * @return double
     */
    public function getBarWidthReduction()
    {
        return $this->container['bar_width_reduction'];
    }

    /**
     * Sets bar_width_reduction
     *
     * @param double $bar_width_reduction Bars reduction value that is used to compensate ink spread while printing.
     *
     * @return $this
     */
    public function setBarWidthReduction($bar_width_reduction)
    {
        $this->container['bar_width_reduction'] = $bar_width_reduction;

        return $this;
    }

    /**
     * Gets use_anti_alias
     *
     * @return bool
     */
    public function getUseAntiAlias()
    {
        return $this->container['use_anti_alias'];
    }

    /**
     * Sets use_anti_alias
     *
     * @param bool $use_anti_alias Indicates whether is used anti-aliasing mode to render image. Anti-aliasing mode is applied to barcode and text drawing.
     *
     * @return $this
     */
    public function setUseAntiAlias($use_anti_alias)
    {
        $this->container['use_anti_alias'] = $use_anti_alias;

        return $this;
    }

    /**
     * Gets australian_post
     *
     * @return \Aspose\BarCode\Model\AustralianPostParams
     */
    public function getAustralianPost()
    {
        return $this->container['australian_post'];
    }

    /**
     * Sets australian_post
     *
     * @param \Aspose\BarCode\Model\AustralianPostParams $australian_post AustralianPost params.
     *
     * @return $this
     */
    public function setAustralianPost($australian_post)
    {
        $this->container['australian_post'] = $australian_post;

        return $this;
    }

    /**
     * Gets aztec
     *
     * @return \Aspose\BarCode\Model\AztecParams
     */
    public function getAztec()
    {
        return $this->container['aztec'];
    }

    /**
     * Sets aztec
     *
     * @param \Aspose\BarCode\Model\AztecParams $aztec Aztec params.
     *
     * @return $this
     */
    public function setAztec($aztec)
    {
        $this->container['aztec'] = $aztec;

        return $this;
    }

    /**
     * Gets codabar
     *
     * @return \Aspose\BarCode\Model\CodabarParams
     */
    public function getCodabar()
    {
        return $this->container['codabar'];
    }

    /**
     * Sets codabar
     *
     * @param \Aspose\BarCode\Model\CodabarParams $codabar Codabar params.
     *
     * @return $this
     */
    public function setCodabar($codabar)
    {
        $this->container['codabar'] = $codabar;

        return $this;
    }

    /**
     * Gets codablock
     *
     * @return \Aspose\BarCode\Model\CodablockParams
     */
    public function getCodablock()
    {
        return $this->container['codablock'];
    }

    /**
     * Sets codablock
     *
     * @param \Aspose\BarCode\Model\CodablockParams $codablock Codablock params.
     *
     * @return $this
     */
    public function setCodablock($codablock)
    {
        $this->container['codablock'] = $codablock;

        return $this;
    }

    /**
     * Gets code16_k
     *
     * @return \Aspose\BarCode\Model\Code16KParams
     */
    public function getCode16K()
    {
        return $this->container['code16_k'];
    }

    /**
     * Sets code16_k
     *
     * @param \Aspose\BarCode\Model\Code16KParams $code16_k Code16K params.
     *
     * @return $this
     */
    public function setCode16K($code16_k)
    {
        $this->container['code16_k'] = $code16_k;

        return $this;
    }

    /**
     * Gets coupon
     *
     * @return \Aspose\BarCode\Model\CouponParams
     */
    public function getCoupon()
    {
        return $this->container['coupon'];
    }

    /**
     * Sets coupon
     *
     * @param \Aspose\BarCode\Model\CouponParams $coupon Coupon params.
     *
     * @return $this
     */
    public function setCoupon($coupon)
    {
        $this->container['coupon'] = $coupon;

        return $this;
    }

    /**
     * Gets data_bar
     *
     * @return \Aspose\BarCode\Model\DataBarParams
     */
    public function getDataBar()
    {
        return $this->container['data_bar'];
    }

    /**
     * Sets data_bar
     *
     * @param \Aspose\BarCode\Model\DataBarParams $data_bar DataBar params.
     *
     * @return $this
     */
    public function setDataBar($data_bar)
    {
        $this->container['data_bar'] = $data_bar;

        return $this;
    }

    /**
     * Gets data_matrix
     *
     * @return \Aspose\BarCode\Model\DataMatrixParams
     */
    public function getDataMatrix()
    {
        return $this->container['data_matrix'];
    }

    /**
     * Sets data_matrix
     *
     * @param \Aspose\BarCode\Model\DataMatrixParams $data_matrix DataMatrix params.
     *
     * @return $this
     */
    public function setDataMatrix($data_matrix)
    {
        $this->container['data_matrix'] = $data_matrix;

        return $this;
    }

    /**
     * Gets dot_code
     *
     * @return \Aspose\BarCode\Model\DotCodeParams
     */
    public function getDotCode()
    {
        return $this->container['dot_code'];
    }

    /**
     * Sets dot_code
     *
     * @param \Aspose\BarCode\Model\DotCodeParams $dot_code DotCode params.
     *
     * @return $this
     */
    public function setDotCode($dot_code)
    {
        $this->container['dot_code'] = $dot_code;

        return $this;
    }

    /**
     * Gets itf
     *
     * @return \Aspose\BarCode\Model\ITFParams
     */
    public function getItf()
    {
        return $this->container['itf'];
    }

    /**
     * Sets itf
     *
     * @param \Aspose\BarCode\Model\ITFParams $itf ITF params.
     *
     * @return $this
     */
    public function setItf($itf)
    {
        $this->container['itf'] = $itf;

        return $this;
    }

    /**
     * Gets maxi_code
     *
     * @return \Aspose\BarCode\Model\MaxiCodeParams
     */
    public function getMaxiCode()
    {
        return $this->container['maxi_code'];
    }

    /**
     * Sets maxi_code
     *
     * @param \Aspose\BarCode\Model\MaxiCodeParams $maxi_code MaxiCode params.
     *
     * @return $this
     */
    public function setMaxiCode($maxi_code)
    {
        $this->container['maxi_code'] = $maxi_code;

        return $this;
    }

    /**
     * Gets pdf417
     *
     * @return \Aspose\BarCode\Model\Pdf417Params
     */
    public function getPdf417()
    {
        return $this->container['pdf417'];
    }

    /**
     * Sets pdf417
     *
     * @param \Aspose\BarCode\Model\Pdf417Params $pdf417 Pdf417 params.
     *
     * @return $this
     */
    public function setPdf417($pdf417)
    {
        $this->container['pdf417'] = $pdf417;

        return $this;
    }

    /**
     * Gets postal
     *
     * @return \Aspose\BarCode\Model\PostalParams
     */
    public function getPostal()
    {
        return $this->container['postal'];
    }

    /**
     * Sets postal
     *
     * @param \Aspose\BarCode\Model\PostalParams $postal Postal params.
     *
     * @return $this
     */
    public function setPostal($postal)
    {
        $this->container['postal'] = $postal;

        return $this;
    }

    /**
     * Gets qr
     *
     * @return \Aspose\BarCode\Model\QrParams
     */
    public function getQr()
    {
        return $this->container['qr'];
    }

    /**
     * Sets qr
     *
     * @param \Aspose\BarCode\Model\QrParams $qr QR params.
     *
     * @return $this
     */
    public function setQr($qr)
    {
        $this->container['qr'] = $qr;

        return $this;
    }

    /**
     * Gets patch_code
     *
     * @return \Aspose\BarCode\Model\PatchCodeParams
     */
    public function getPatchCode()
    {
        return $this->container['patch_code'];
    }

    /**
     * Sets patch_code
     *
     * @param \Aspose\BarCode\Model\PatchCodeParams $patch_code PatchCode params.
     *
     * @return $this
     */
    public function setPatchCode($patch_code)
    {
        $this->container['patch_code'] = $patch_code;

        return $this;
    }

    /**
     * Gets code128
     *
     * @return \Aspose\BarCode\Model\Code128Params
     */
    public function getCode128()
    {
        return $this->container['code128'];
    }

    /**
     * Sets code128
     *
     * @param \Aspose\BarCode\Model\Code128Params $code128 Code128 parameters
     *
     * @return $this
     */
    public function setCode128($code128)
    {
        $this->container['code128'] = $code128;

        return $this;
    }

    /**
     * Gets han_xin
     *
     * @return \Aspose\BarCode\Model\HanXinParams
     */
    public function getHanXin()
    {
        return $this->container['han_xin'];
    }

    /**
     * Sets han_xin
     *
     * @param \Aspose\BarCode\Model\HanXinParams $han_xin HanXin params.
     *
     * @return $this
     */
    public function setHanXin($han_xin)
    {
        $this->container['han_xin'] = $han_xin;

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
