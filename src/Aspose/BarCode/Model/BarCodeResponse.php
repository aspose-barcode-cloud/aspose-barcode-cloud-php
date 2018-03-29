<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeResponse.php">
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
 * BarCodeResponse
 *
 * @description Represents information about barcode.
 */
class BarCodeResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BarCodeResponse";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bar_code_value' => 'string',
        'bar_code_type' => 'string',
        'region' => '\Swagger\Client\Model\Point[]',
        'checksum' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bar_code_value' => null,
        'bar_code_type' => null,
        'region' => null,
        'checksum' => null
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
        'bar_code_value' => 'BarCodeValue',
        'bar_code_type' => 'BarCodeType',
        'region' => 'Region',
        'checksum' => 'Checksum'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bar_code_value' => 'setBarCodeValue',
        'bar_code_type' => 'setBarCodeType',
        'region' => 'setRegion',
        'checksum' => 'setChecksum'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bar_code_value' => 'getBarCodeValue',
        'bar_code_type' => 'getBarCodeType',
        'region' => 'getRegion',
        'checksum' => 'getChecksum'
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
        $this->container['bar_code_value'] = isset($data['bar_code_value']) ? $data['bar_code_value'] : null;
        $this->container['bar_code_type'] = isset($data['bar_code_type']) ? $data['bar_code_type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
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
     * Gets bar_code_value
     *
     * @return string
     */
    public function getBarCodeValue()
    {
        return $this->container['bar_code_value'];
    }

    /*
     * Sets bar_code_value
     *
     * @param string $bar_code_value Gets or sets barcode data.
     *
     * @return $this
     */
    public function setBarCodeValue($bar_code_value)
    {
        $this->container['bar_code_value'] = $bar_code_value;

        return $this;
    }

    /*
     * Gets bar_code_type
     *
     * @return string
     */
    public function getBarCodeType()
    {
        return $this->container['bar_code_type'];
    }

    /*
     * Sets bar_code_type
     *
     * @param string $bar_code_type Gets or sets type of the barcode.
     *
     * @return $this
     */
    public function setBarCodeType($bar_code_type)
    {
        $this->container['bar_code_type'] = $bar_code_type;

        return $this;
    }

    /*
     * Gets region
     *
     * @return \Swagger\Client\Model\Point[]
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /*
     * Sets region
     *
     * @param \Swagger\Client\Model\Point[] $region Gets or sets region with barcode.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /*
     * Gets checksum
     *
     * @return string
     */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /*
     * Sets checksum
     *
     * @param string $checksum Gets or sets checksum of barcode.
     *
     * @return $this
     */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;

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


