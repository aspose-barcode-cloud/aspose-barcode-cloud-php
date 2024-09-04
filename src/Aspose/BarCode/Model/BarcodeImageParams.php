<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * BarcodeImageParams
 *
 * @description Barcode image optional parameters
 */
class BarcodeImageParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "BarcodeImageParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'image_format' => '\Aspose\BarCode\Model\AvailableBarCodeImageFormat',
        'two_d_display_text' => 'string',
        'text_location' => '\Aspose\BarCode\Model\CodeLocation',
        'text_alignment' => '\Aspose\BarCode\Model\TextAlignment',
        'foreground_color' => 'string',
        'background_color' => 'string',
        'units' => '\Aspose\BarCode\Model\AvailableGraphicsUnit',
        'resolution' => 'float',
        'image_height' => 'float',
        'image_width' => 'float',
        'rotation_angle' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'image_format' => null,
        'two_d_display_text' => null,
        'text_location' => null,
        'text_alignment' => null,
        'foreground_color' => null,
        'background_color' => null,
        'units' => null,
        'resolution' => 'float',
        'image_height' => 'float',
        'image_width' => 'float',
        'rotation_angle' => 'int32'
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
        'image_format' => 'imageFormat',
        'two_d_display_text' => 'twoDDisplayText',
        'text_location' => 'textLocation',
        'text_alignment' => 'textAlignment',
        'foreground_color' => 'foregroundColor',
        'background_color' => 'backgroundColor',
        'units' => 'units',
        'resolution' => 'resolution',
        'image_height' => 'imageHeight',
        'image_width' => 'imageWidth',
        'rotation_angle' => 'rotationAngle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_format' => 'setImageFormat',
        'two_d_display_text' => 'setTwoDDisplayText',
        'text_location' => 'setTextLocation',
        'text_alignment' => 'setTextAlignment',
        'foreground_color' => 'setForegroundColor',
        'background_color' => 'setBackgroundColor',
        'units' => 'setUnits',
        'resolution' => 'setResolution',
        'image_height' => 'setImageHeight',
        'image_width' => 'setImageWidth',
        'rotation_angle' => 'setRotationAngle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_format' => 'getImageFormat',
        'two_d_display_text' => 'getTwoDDisplayText',
        'text_location' => 'getTextLocation',
        'text_alignment' => 'getTextAlignment',
        'foreground_color' => 'getForegroundColor',
        'background_color' => 'getBackgroundColor',
        'units' => 'getUnits',
        'resolution' => 'getResolution',
        'image_height' => 'getImageHeight',
        'image_width' => 'getImageWidth',
        'rotation_angle' => 'getRotationAngle'
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
        $this->container['image_format'] = isset($data['image_format']) ? $data['image_format'] : null;
        $this->container['two_d_display_text'] = isset($data['two_d_display_text']) ? $data['two_d_display_text'] : null;
        $this->container['text_location'] = isset($data['text_location']) ? $data['text_location'] : null;
        $this->container['text_alignment'] = isset($data['text_alignment']) ? $data['text_alignment'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['image_height'] = isset($data['image_height']) ? $data['image_height'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
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
     * Gets image_format
     *
     * @return \Aspose\BarCode\Model\AvailableBarCodeImageFormat
     */
    public function getImageFormat()
    {
        return $this->container['image_format'];
    }

    /**
     * Sets image_format
     *
     * @param \Aspose\BarCode\Model\AvailableBarCodeImageFormat $image_format image_format
     *
     * @return $this
     */
    public function setImageFormat($image_format)
    {
        $this->container['image_format'] = $image_format;

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
     * @param string $two_d_display_text Text that will be displayed instead of codetext in 2D barcodes.  Used for: Aztec, Pdf417, DataMatrix, QR, MaxiCode, DotCode
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
     * @param \Aspose\BarCode\Model\CodeLocation $text_location text_location
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
     * @param \Aspose\BarCode\Model\TextAlignment $text_alignment text_alignment
     *
     * @return $this
     */
    public function setTextAlignment($text_alignment)
    {
        $this->container['text_alignment'] = $text_alignment;

        return $this;
    }

    /**
     * Gets foreground_color
     *
     * @return string
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color
     *
     * @param string $foreground_color Specify the displaying bars and content Color.   Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.Black.
     *
     * @return $this
     */
    public function setForegroundColor($foreground_color)
    {
        $this->container['foreground_color'] = $foreground_color;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Background color of the barcode image.  Value: Color name from https://reference.aspose.com/drawing/net/system.drawing/color/ or ARGB value started with #.   For example: Color.AliceBlue or #FF000000  Default value: Color.White.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

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
     * @param \Aspose\BarCode\Model\AvailableGraphicsUnit $units units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return float
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param float $resolution Resolution of the BarCode image.  One value for both dimensions.  Default value: 96 dpi.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets image_height
     *
     * @return float
     */
    public function getImageHeight()
    {
        return $this->container['image_height'];
    }

    /**
     * Sets image_height
     *
     * @param float $image_height Height of the barcode image in given units. Default units: pixel.
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
     * @return float
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /**
     * Sets image_width
     *
     * @param float $image_width Width of the barcode image in given units. Default units: pixel.
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
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     * @param int $rotation_angle BarCode image rotation angle, measured in degree, e.g. RotationAngle = 0 or RotationAngle = 360 means no rotation.  If RotationAngle NOT equal to 90, 180, 270 or 0, it may increase the difficulty for the scanner to read the image.  Default value: 0.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

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
