<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeReader.php">
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
 * BarCodeReader
 *
 * @description Represents BarCodeReader object.
 */
class BarCodeReader implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BarCodeReader";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'checksum_validation' => '\Swagger\Client\Model\ChecksumValidation',
        'strip_fnc' => 'bool',
        'bar_codes_count' => 'int',
        'rotation_angle' => 'int',
        'recognition_mode' => '\Swagger\Client\Model\RecognitionMode',
        'manual_hints' => '\Swagger\Client\Model\ManualHints'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'checksum_validation' => null,
        'strip_fnc' => null,
        'bar_codes_count' => 'int32',
        'rotation_angle' => 'int32',
        'recognition_mode' => null,
        'manual_hints' => null
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
        'checksum_validation' => 'ChecksumValidation',
        'strip_fnc' => 'StripFNC',
        'bar_codes_count' => 'BarCodesCount',
        'rotation_angle' => 'RotationAngle',
        'recognition_mode' => 'RecognitionMode',
        'manual_hints' => 'ManualHints'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checksum_validation' => 'setChecksumValidation',
        'strip_fnc' => 'setStripFnc',
        'bar_codes_count' => 'setBarCodesCount',
        'rotation_angle' => 'setRotationAngle',
        'recognition_mode' => 'setRecognitionMode',
        'manual_hints' => 'setManualHints'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checksum_validation' => 'getChecksumValidation',
        'strip_fnc' => 'getStripFnc',
        'bar_codes_count' => 'getBarCodesCount',
        'rotation_angle' => 'getRotationAngle',
        'recognition_mode' => 'getRecognitionMode',
        'manual_hints' => 'getManualHints'
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
        $this->container['checksum_validation'] = isset($data['checksum_validation']) ? $data['checksum_validation'] : null;
        $this->container['strip_fnc'] = isset($data['strip_fnc']) ? $data['strip_fnc'] : null;
        $this->container['bar_codes_count'] = isset($data['bar_codes_count']) ? $data['bar_codes_count'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['recognition_mode'] = isset($data['recognition_mode']) ? $data['recognition_mode'] : null;
        $this->container['manual_hints'] = isset($data['manual_hints']) ? $data['manual_hints'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /*
     * Gets checksum_validation
     *
     * @return \Swagger\Client\Model\ChecksumValidation
     */
    public function getChecksumValidation()
    {
        return $this->container['checksum_validation'];
    }

    /*
     * Sets checksum_validation
     *
     * @param \Swagger\Client\Model\ChecksumValidation $checksum_validation Gets or sets ChecksumValidation property.
     *
     * @return $this
     */
    public function setChecksumValidation($checksum_validation)
    {
        $this->container['checksum_validation'] = $checksum_validation;

        return $this;
    }

    /*
     * Gets strip_fnc
     *
     * @return bool
     */
    public function getStripFnc()
    {
        return $this->container['strip_fnc'];
    }

    /*
     * Sets strip_fnc
     *
     * @param bool $strip_fnc Gets or sets a value indicating whether FNC symbol strip must be done.
     *
     * @return $this
     */
    public function setStripFnc($strip_fnc)
    {
        $this->container['strip_fnc'] = $strip_fnc;

        return $this;
    }

    /*
     * Gets bar_codes_count
     *
     * @return int
     */
    public function getBarCodesCount()
    {
        return $this->container['bar_codes_count'];
    }

    /*
     * Sets bar_codes_count
     *
     * @param int $bar_codes_count Gets or sets count of barcodes to recognize.
     *
     * @return $this
     */
    public function setBarCodesCount($bar_codes_count)
    {
        $this->container['bar_codes_count'] = $bar_codes_count;

        return $this;
    }

    /*
     * Gets rotation_angle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /*
     * Sets rotation_angle
     *
     * @param int $rotation_angle Gets or sets rotation correction angle.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }

    /*
     * Gets recognition_mode
     *
     * @return \Swagger\Client\Model\RecognitionMode
     */
    public function getRecognitionMode()
    {
        return $this->container['recognition_mode'];
    }

    /*
     * Sets recognition_mode
     *
     * @param \Swagger\Client\Model\RecognitionMode $recognition_mode Gets or sets recognition mode.
     *
     * @return $this
     */
    public function setRecognitionMode($recognition_mode)
    {
        $this->container['recognition_mode'] = $recognition_mode;

        return $this;
    }

    /*
     * Gets manual_hints
     *
     * @return \Swagger\Client\Model\ManualHints
     */
    public function getManualHints()
    {
        return $this->container['manual_hints'];
    }

    /*
     * Sets manual_hints
     *
     * @param \Swagger\Client\Model\ManualHints $manual_hints Gets or sets manual hints.
     *
     * @return $this
     */
    public function setManualHints($manual_hints)
    {
        $this->container['manual_hints'] = $manual_hints;

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


