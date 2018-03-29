<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeBuilder.php">
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
/*
 * 
 */

namespace Aspose\BarCode;

use \ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/*
 * BarCodeBuilder
 *
 * @description Represents BarCodeBuilder.
 */
class BarCodeBuilder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BarCodeBuilder";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'type_of_bar_code' => '\Swagger\Client\Model\BarCodeType',
        'text' => 'string',
        'resolution' => '\Swagger\Client\Model\Resolution',
        'dimension_x' => 'double',
        'dimension_y' => 'double',
        'code_location' => '\Swagger\Client\Model\CodeLocation',
        'graphics_unit' => '\Swagger\Client\Model\GraphicsUnit',
        'auto_size' => 'bool',
        'bar_height' => 'double',
        'image_height' => 'double',
        'image_width' => 'double',
        'image_quality' => '\Swagger\Client\Model\ImageQualityMode',
        'rotation_angle' => 'double',
        'margins' => '\Swagger\Client\Model\Margins',
        'back_color' => 'string',
        'fore_color' => 'string',
        'code_text_color' => 'string',
        'border_color' => 'string',
        'border_visible' => 'bool',
        'enable_checksum' => '\Swagger\Client\Model\EnableChecksum'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'type_of_bar_code' => null,
        'text' => null,
        'resolution' => null,
        'dimension_x' => 'double',
        'dimension_y' => 'double',
        'code_location' => null,
        'graphics_unit' => null,
        'auto_size' => null,
        'bar_height' => 'double',
        'image_height' => 'double',
        'image_width' => 'double',
        'image_quality' => null,
        'rotation_angle' => 'double',
        'margins' => null,
        'back_color' => null,
        'fore_color' => null,
        'code_text_color' => null,
        'border_color' => null,
        'border_visible' => null,
        'enable_checksum' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type_of_bar_code' => 'TypeOfBarCode',
        'text' => 'Text',
        'resolution' => 'Resolution',
        'dimension_x' => 'DimensionX',
        'dimension_y' => 'DimensionY',
        'code_location' => 'CodeLocation',
        'graphics_unit' => 'GraphicsUnit',
        'auto_size' => 'AutoSize',
        'bar_height' => 'BarHeight',
        'image_height' => 'ImageHeight',
        'image_width' => 'ImageWidth',
        'image_quality' => 'ImageQuality',
        'rotation_angle' => 'RotationAngle',
        'margins' => 'Margins',
        'back_color' => 'BackColor',
        'fore_color' => 'ForeColor',
        'code_text_color' => 'CodeTextColor',
        'border_color' => 'BorderColor',
        'border_visible' => 'BorderVisible',
        'enable_checksum' => 'EnableChecksum'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_of_bar_code' => 'setTypeOfBarCode',
        'text' => 'setText',
        'resolution' => 'setResolution',
        'dimension_x' => 'setDimensionX',
        'dimension_y' => 'setDimensionY',
        'code_location' => 'setCodeLocation',
        'graphics_unit' => 'setGraphicsUnit',
        'auto_size' => 'setAutoSize',
        'bar_height' => 'setBarHeight',
        'image_height' => 'setImageHeight',
        'image_width' => 'setImageWidth',
        'image_quality' => 'setImageQuality',
        'rotation_angle' => 'setRotationAngle',
        'margins' => 'setMargins',
        'back_color' => 'setBackColor',
        'fore_color' => 'setForeColor',
        'code_text_color' => 'setCodeTextColor',
        'border_color' => 'setBorderColor',
        'border_visible' => 'setBorderVisible',
        'enable_checksum' => 'setEnableChecksum'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_of_bar_code' => 'getTypeOfBarCode',
        'text' => 'getText',
        'resolution' => 'getResolution',
        'dimension_x' => 'getDimensionX',
        'dimension_y' => 'getDimensionY',
        'code_location' => 'getCodeLocation',
        'graphics_unit' => 'getGraphicsUnit',
        'auto_size' => 'getAutoSize',
        'bar_height' => 'getBarHeight',
        'image_height' => 'getImageHeight',
        'image_width' => 'getImageWidth',
        'image_quality' => 'getImageQuality',
        'rotation_angle' => 'getRotationAngle',
        'margins' => 'getMargins',
        'back_color' => 'getBackColor',
        'fore_color' => 'getForeColor',
        'code_text_color' => 'getCodeTextColor',
        'border_color' => 'getBorderColor',
        'border_visible' => 'getBorderVisible',
        'enable_checksum' => 'getEnableChecksum'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type_of_bar_code'] = isset($data['type_of_bar_code']) ? $data['type_of_bar_code'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['dimension_x'] = isset($data['dimension_x']) ? $data['dimension_x'] : null;
        $this->container['dimension_y'] = isset($data['dimension_y']) ? $data['dimension_y'] : null;
        $this->container['code_location'] = isset($data['code_location']) ? $data['code_location'] : null;
        $this->container['graphics_unit'] = isset($data['graphics_unit']) ? $data['graphics_unit'] : null;
        $this->container['auto_size'] = isset($data['auto_size']) ? $data['auto_size'] : null;
        $this->container['bar_height'] = isset($data['bar_height']) ? $data['bar_height'] : null;
        $this->container['image_height'] = isset($data['image_height']) ? $data['image_height'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['image_quality'] = isset($data['image_quality']) ? $data['image_quality'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['margins'] = isset($data['margins']) ? $data['margins'] : null;
        $this->container['back_color'] = isset($data['back_color']) ? $data['back_color'] : null;
        $this->container['fore_color'] = isset($data['fore_color']) ? $data['fore_color'] : null;
        $this->container['code_text_color'] = isset($data['code_text_color']) ? $data['code_text_color'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_visible'] = isset($data['border_visible']) ? $data['border_visible'] : null;
        $this->container['enable_checksum'] = isset($data['enable_checksum']) ? $data['enable_checksum'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type_of_bar_code'] === null) {
            $invalidProperties[] = "'type_of_bar_code' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['type_of_bar_code'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets type_of_bar_code
     *
     * @return \Swagger\Client\Model\BarCodeType
     */
    public function getTypeOfBarCode()
    {
        return $this->container['type_of_bar_code'];
    }

    /*
     * Sets type_of_bar_code
     *
     * @param \Swagger\Client\Model\BarCodeType $type_of_bar_code Gets or sets type of barcode to generate.
     *
     * @return $this
     */
    public function setTypeOfBarCode($type_of_bar_code)
    {
        $this->container['type_of_bar_code'] = $type_of_bar_code;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Gets or sets text to encode.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets resolution
     *
     * @return \Swagger\Client\Model\Resolution
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /*
     * Sets resolution
     *
     * @param \Swagger\Client\Model\Resolution $resolution Gets or sets  parameters.>
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /*
     * Gets dimension_x
     *
     * @return double
     */
    public function getDimensionX()
    {
        return $this->container['dimension_x'];
    }

    /*
     * Sets dimension_x
     *
     * @param double $dimension_x Gets or sets smallest width unit of barcode.
     *
     * @return $this
     */
    public function setDimensionX($dimension_x)
    {
        $this->container['dimension_x'] = $dimension_x;

        return $this;
    }

    /*
     * Gets dimension_y
     *
     * @return double
     */
    public function getDimensionY()
    {
        return $this->container['dimension_y'];
    }

    /*
     * Sets dimension_y
     *
     * @param double $dimension_y Gets or sets smallest height unit of barcode.
     *
     * @return $this
     */
    public function setDimensionY($dimension_y)
    {
        $this->container['dimension_y'] = $dimension_y;

        return $this;
    }

    /*
     * Gets code_location
     *
     * @return \Swagger\Client\Model\CodeLocation
     */
    public function getCodeLocation()
    {
        return $this->container['code_location'];
    }

    /*
     * Sets code_location
     *
     * @param \Swagger\Client\Model\CodeLocation $code_location Gets or sets  of barcode.
     *
     * @return $this
     */
    public function setCodeLocation($code_location)
    {
        $this->container['code_location'] = $code_location;

        return $this;
    }

    /*
     * Gets graphics_unit
     *
     * @return \Swagger\Client\Model\GraphicsUnit
     */
    public function getGraphicsUnit()
    {
        return $this->container['graphics_unit'];
    }

    /*
     * Sets graphics_unit
     *
     * @param \Swagger\Client\Model\GraphicsUnit $graphics_unit Gets or sets  for barcode dimension parameers.
     *
     * @return $this
     */
    public function setGraphicsUnit($graphics_unit)
    {
        $this->container['graphics_unit'] = $graphics_unit;

        return $this;
    }

    /*
     * Gets auto_size
     *
     * @return bool
     */
    public function getAutoSize()
    {
        return $this->container['auto_size'];
    }

    /*
     * Sets auto_size
     *
     * @param bool $auto_size Gets or sets a value indicating whether size of barcode changes automatically.
     *
     * @return $this
     */
    public function setAutoSize($auto_size)
    {
        $this->container['auto_size'] = $auto_size;

        return $this;
    }

    /*
     * Gets bar_height
     *
     * @return double
     */
    public function getBarHeight()
    {
        return $this->container['bar_height'];
    }

    /*
     * Sets bar_height
     *
     * @param double $bar_height Gets or sets height of the barcode.
     *
     * @return $this
     */
    public function setBarHeight($bar_height)
    {
        $this->container['bar_height'] = $bar_height;

        return $this;
    }

    /*
     * Gets image_height
     *
     * @return double
     */
    public function getImageHeight()
    {
        return $this->container['image_height'];
    }

    /*
     * Sets image_height
     *
     * @param double $image_height Gets or sets height of the barcode image.
     *
     * @return $this
     */
    public function setImageHeight($image_height)
    {
        $this->container['image_height'] = $image_height;

        return $this;
    }

    /*
     * Gets image_width
     *
     * @return double
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /*
     * Sets image_width
     *
     * @param double $image_width Gets or sets width of the barcode image.
     *
     * @return $this
     */
    public function setImageWidth($image_width)
    {
        $this->container['image_width'] = $image_width;

        return $this;
    }

    /*
     * Gets image_quality
     *
     * @return \Swagger\Client\Model\ImageQualityMode
     */
    public function getImageQuality()
    {
        return $this->container['image_quality'];
    }

    /*
     * Sets image_quality
     *
     * @param \Swagger\Client\Model\ImageQualityMode $image_quality Gets or sets  of the image.
     *
     * @return $this
     */
    public function setImageQuality($image_quality)
    {
        $this->container['image_quality'] = $image_quality;

        return $this;
    }

    /*
     * Gets rotation_angle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /*
     * Sets rotation_angle
     *
     * @param double $rotation_angle Gets or sets angle of barcode orientation.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }

    /*
     * Gets margins
     *
     * @return \Swagger\Client\Model\Margins
     */
    public function getMargins()
    {
        return $this->container['margins'];
    }

    /*
     * Sets margins
     *
     * @param \Swagger\Client\Model\Margins $margins Gets or sets  around barcode.
     *
     * @return $this
     */
    public function setMargins($margins)
    {
        $this->container['margins'] = $margins;

        return $this;
    }

    /*
     * Gets back_color
     *
     * @return string
     */
    public function getBackColor()
    {
        return $this->container['back_color'];
    }

    /*
     * Sets back_color
     *
     * @param string $back_color Gets or sets background color.
     *
     * @return $this
     */
    public function setBackColor($back_color)
    {
        $this->container['back_color'] = $back_color;

        return $this;
    }

    /*
     * Gets fore_color
     *
     * @return string
     */
    public function getForeColor()
    {
        return $this->container['fore_color'];
    }

    /*
     * Sets fore_color
     *
     * @param string $fore_color Gets or sets foreground color.
     *
     * @return $this
     */
    public function setForeColor($fore_color)
    {
        $this->container['fore_color'] = $fore_color;

        return $this;
    }

    /*
     * Gets code_text_color
     *
     * @return string
     */
    public function getCodeTextColor()
    {
        return $this->container['code_text_color'];
    }

    /*
     * Sets code_text_color
     *
     * @param string $code_text_color Gets or sets color of the code text.
     *
     * @return $this
     */
    public function setCodeTextColor($code_text_color)
    {
        $this->container['code_text_color'] = $code_text_color;

        return $this;
    }

    /*
     * Gets border_color
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /*
     * Sets border_color
     *
     * @param string $border_color Gets or sets color of the border.
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /*
     * Gets border_visible
     *
     * @return bool
     */
    public function getBorderVisible()
    {
        return $this->container['border_visible'];
    }

    /*
     * Sets border_visible
     *
     * @param bool $border_visible Gets or sets a value indicating whether border is visible.
     *
     * @return $this
     */
    public function setBorderVisible($border_visible)
    {
        $this->container['border_visible'] = $border_visible;

        return $this;
    }

    /*
     * Gets enable_checksum
     *
     * @return \Swagger\Client\Model\EnableChecksum
     */
    public function getEnableChecksum()
    {
        return $this->container['enable_checksum'];
    }

    /*
     * Sets enable_checksum
     *
     * @param \Swagger\Client\Model\EnableChecksum $enable_checksum Gets or sets a value indicating whether checksum is enabled.
     *
     * @return $this
     */
    public function setEnableChecksum($enable_checksum)
    {
        $this->container['enable_checksum'] = $enable_checksum;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
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


