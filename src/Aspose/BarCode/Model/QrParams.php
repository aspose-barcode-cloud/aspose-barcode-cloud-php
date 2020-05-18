<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="QrParams.php">
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
//
// This source code was auto-generated by AsposeBarcodeCloudCodegen.
//

namespace Aspose\BarCode\Model;

use \ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/*
 * QrParams
 *
 * @description QR parameters.
 */
class QrParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "QrParams";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'aspect_ratio' => 'double',
        'text_encoding' => 'string',
        'encode_type' => '\Aspose\BarCode\Model\QREncodeType',
        'eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'encode_mode' => '\Aspose\BarCode\Model\QREncodeMode',
        'error_level' => '\Aspose\BarCode\Model\QRErrorLevel',
        'version' => '\Aspose\BarCode\Model\QRVersion'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'aspect_ratio' => 'double',
        'text_encoding' => null,
        'encode_type' => null,
        'eci_encoding' => null,
        'encode_mode' => null,
        'error_level' => null,
        'version' => null
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
        'text_encoding' => 'TextEncoding',
        'encode_type' => 'EncodeType',
        'eci_encoding' => 'ECIEncoding',
        'encode_mode' => 'EncodeMode',
        'error_level' => 'ErrorLevel',
        'version' => 'Version'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'text_encoding' => 'setTextEncoding',
        'encode_type' => 'setEncodeType',
        'eci_encoding' => 'setEciEncoding',
        'encode_mode' => 'setEncodeMode',
        'error_level' => 'setErrorLevel',
        'version' => 'setVersion'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'text_encoding' => 'getTextEncoding',
        'encode_type' => 'getEncodeType',
        'eci_encoding' => 'getEciEncoding',
        'encode_mode' => 'getEncodeMode',
        'error_level' => 'getErrorLevel',
        'version' => 'getVersion'
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
        $this->container['text_encoding'] = isset($data['text_encoding']) ? $data['text_encoding'] : null;
        $this->container['encode_type'] = isset($data['encode_type']) ? $data['encode_type'] : null;
        $this->container['eci_encoding'] = isset($data['eci_encoding']) ? $data['eci_encoding'] : null;
        $this->container['encode_mode'] = isset($data['encode_mode']) ? $data['encode_mode'] : null;
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * @param string $text_encoding Encoding of codetext.
     *
     * @return $this
     */
    public function setTextEncoding($text_encoding)
    {
        $this->container['text_encoding'] = $text_encoding;

        return $this;
    }

    /*
     * Gets encode_type
     *
     * @return \Aspose\BarCode\Model\QREncodeType
     */
    public function getEncodeType()
    {
        return $this->container['encode_type'];
    }

    /*
     * Sets encode_type
     *
     * @param \Aspose\BarCode\Model\QREncodeType $encode_type QR / MicroQR selector mode. Select ForceQR for standard QR symbols, Auto for MicroQR.
     *
     * @return $this
     */
    public function setEncodeType($encode_type)
    {
        $this->container['encode_type'] = $encode_type;

        return $this;
    }

    /*
     * Gets eci_encoding
     *
     * @return \Aspose\BarCode\Model\ECIEncodings
     */
    public function getEciEncoding()
    {
        return $this->container['eci_encoding'];
    }

    /*
     * Sets eci_encoding
     *
     * @param \Aspose\BarCode\Model\ECIEncodings $eci_encoding Extended Channel Interpretation Identifiers. It is used to tell the barcode reader details about the used references for encoding the data in the symbol. Current implementation consists all well known charset encodings.
     *
     * @return $this
     */
    public function setEciEncoding($eci_encoding)
    {
        $this->container['eci_encoding'] = $eci_encoding;

        return $this;
    }

    /*
     * Gets encode_mode
     *
     * @return \Aspose\BarCode\Model\QREncodeMode
     */
    public function getEncodeMode()
    {
        return $this->container['encode_mode'];
    }

    /*
     * Sets encode_mode
     *
     * @param \Aspose\BarCode\Model\QREncodeMode $encode_mode QR symbology type of BarCode's encoding mode. Default value: QREncodeMode.Auto.
     *
     * @return $this
     */
    public function setEncodeMode($encode_mode)
    {
        $this->container['encode_mode'] = $encode_mode;

        return $this;
    }

    /*
     * Gets error_level
     *
     * @return \Aspose\BarCode\Model\QRErrorLevel
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /*
     * Sets error_level
     *
     * @param \Aspose\BarCode\Model\QRErrorLevel $error_level Level of Reed-Solomon error correction for QR barcode. From low to high: LevelL, LevelM, LevelQ, LevelH. see QRErrorLevel.
     *
     * @return $this
     */
    public function setErrorLevel($error_level)
    {
        $this->container['error_level'] = $error_level;

        return $this;
    }

    /*
     * Gets version
     *
     * @return \Aspose\BarCode\Model\QRVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /*
     * Sets version
     *
     * @param \Aspose\BarCode\Model\QRVersion $version Version of QR Code. From Version1 to Version40 for QR code and from M1 to M4 for MicroQr. Default value is QRVersion.Auto.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


