<?php declare(strict_types=1);
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AztecParams.php">
 *   Copyright (c) 2021 Aspose Pty Ltd
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
//
// This source code was auto-generated by AsposeBarcodeCloudCodegen.
//

namespace Aspose\BarCode\Model;

use \ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/*
 * AztecParams
 *
 * @description Aztec parameters.
 */
class AztecParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AztecParams";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'aspect_ratio' => 'double',
        'error_level' => 'int',
        'symbol_mode' => '\Aspose\BarCode\Model\AztecSymbolMode',
        'text_encoding' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'aspect_ratio' => 'double',
        'error_level' => 'int32',
        'symbol_mode' => null,
        'text_encoding' => null
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
        'aspect_ratio' => 'AspectRatio',
        'error_level' => 'ErrorLevel',
        'symbol_mode' => 'SymbolMode',
        'text_encoding' => 'TextEncoding'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'error_level' => 'setErrorLevel',
        'symbol_mode' => 'setSymbolMode',
        'text_encoding' => 'setTextEncoding'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'error_level' => 'getErrorLevel',
        'symbol_mode' => 'getSymbolMode',
        'text_encoding' => 'getTextEncoding'
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
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['symbol_mode'] = isset($data['symbol_mode']) ? $data['symbol_mode'] : null;
        $this->container['text_encoding'] = isset($data['text_encoding']) ? $data['text_encoding'] : null;
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
     * Gets aspect_ratio
     *
     * @return double
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /*
     * Sets aspect_ratio
     *
     * @param double $aspect_ratio Height/Width ratio of 2D BarCode module.
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /*
     * Gets error_level
     *
     * @return int
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /*
     * Sets error_level
     *
     * @param int $error_level Level of error correction of Aztec types of barcode. Value should between 10 to 95.
     *
     * @return $this
     */
    public function setErrorLevel($error_level)
    {
        $this->container['error_level'] = $error_level;

        return $this;
    }

    /*
     * Gets symbol_mode
     *
     * @return \Aspose\BarCode\Model\AztecSymbolMode
     */
    public function getSymbolMode()
    {
        return $this->container['symbol_mode'];
    }

    /*
     * Sets symbol_mode
     *
     * @param \Aspose\BarCode\Model\AztecSymbolMode $symbol_mode Aztec Symbol mode. Default value: AztecSymbolMode.Auto.
     *
     * @return $this
     */
    public function setSymbolMode($symbol_mode)
    {
        $this->container['symbol_mode'] = $symbol_mode;

        return $this;
    }

    /*
     * Gets text_encoding
     *
     * @return string
     */
    public function getTextEncoding()
    {
        return $this->container['text_encoding'];
    }

    /*
     * Sets text_encoding
     *
     * @param string $text_encoding Sets the encoding of codetext.
     *
     * @return $this
     */
    public function setTextEncoding($text_encoding)
    {
        $this->container['text_encoding'] = $text_encoding;

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
