<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * QrParams
 *
 * @description QR parameters.
 */
class QrParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "QrParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'text_encoding' => 'string',
        'encode_type' => '\Aspose\BarCode\Model\QREncodeType',
        'eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'encode_mode' => '\Aspose\BarCode\Model\QREncodeMode',
        'error_level' => '\Aspose\BarCode\Model\QRErrorLevel',
        'version' => '\Aspose\BarCode\Model\QRVersion',
        'structured_append' => '\Aspose\BarCode\Model\StructuredAppend'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'text_encoding' => null,
        'encode_type' => null,
        'eci_encoding' => null,
        'encode_mode' => null,
        'error_level' => null,
        'version' => null,
        'structured_append' => null
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
        'aspect_ratio' => 'AspectRatio',
        'text_encoding' => 'TextEncoding',
        'encode_type' => 'EncodeType',
        'eci_encoding' => 'ECIEncoding',
        'encode_mode' => 'EncodeMode',
        'error_level' => 'ErrorLevel',
        'version' => 'Version',
        'structured_append' => 'StructuredAppend'
    ];

    /**
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
        'version' => 'setVersion',
        'structured_append' => 'setStructuredAppend'
    ];

    /**
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
        'version' => 'getVersion',
        'structured_append' => 'getStructuredAppend'
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
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['text_encoding'] = isset($data['text_encoding']) ? $data['text_encoding'] : null;
        $this->container['encode_type'] = isset($data['encode_type']) ? $data['encode_type'] : null;
        $this->container['eci_encoding'] = isset($data['eci_encoding']) ? $data['eci_encoding'] : null;
        $this->container['encode_mode'] = isset($data['encode_mode']) ? $data['encode_mode'] : null;
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['structured_append'] = isset($data['structured_append']) ? $data['structured_append'] : null;
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
     * Gets aspect_ratio
     *
     * @return double
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
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

    /**
     * Gets text_encoding
     *
     * @return string
     */
    public function getTextEncoding()
    {
        return $this->container['text_encoding'];
    }

    /**
     * Sets text_encoding
     *
     * @param string $text_encoding DEPRECATED: This property is obsolete and will be removed in future releases. Unicode symbols detection and encoding will be processed in Auto mode with Extended Channel Interpretation charset designator. Using of own encodings requires manual CodeText encoding into byte[] array.  Sets the encoding of codetext.
     *
     * @return $this
     */
    public function setTextEncoding($text_encoding)
    {
        trigger_error('Property $text_encoding is deprecated. This property is obsolete and will be removed in future releases. Unicode symbols detection and encoding will be processed in Auto mode with Extended Channel Interpretation charset designator. Using of own encodings requires manual CodeText encoding into byte[] array.  Sets the encoding of codetext.', E_USER_DEPRECATED);
        $this->container['text_encoding'] = $text_encoding;

        return $this;
    }

    /**
     * Gets encode_type
     *
     * @return \Aspose\BarCode\Model\QREncodeType
     */
    public function getEncodeType()
    {
        return $this->container['encode_type'];
    }

    /**
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

    /**
     * Gets eci_encoding
     *
     * @return \Aspose\BarCode\Model\ECIEncodings
     */
    public function getEciEncoding()
    {
        return $this->container['eci_encoding'];
    }

    /**
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

    /**
     * Gets encode_mode
     *
     * @return \Aspose\BarCode\Model\QREncodeMode
     */
    public function getEncodeMode()
    {
        return $this->container['encode_mode'];
    }

    /**
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

    /**
     * Gets error_level
     *
     * @return \Aspose\BarCode\Model\QRErrorLevel
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /**
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

    /**
     * Gets version
     *
     * @return \Aspose\BarCode\Model\QRVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
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

    /**
     * Gets structured_append
     *
     * @return \Aspose\BarCode\Model\StructuredAppend
     */
    public function getStructuredAppend()
    {
        return $this->container['structured_append'];
    }

    /**
     * Sets structured_append
     *
     * @param \Aspose\BarCode\Model\StructuredAppend $structured_append QR structured append parameters.
     *
     * @return $this
     */
    public function setStructuredAppend($structured_append)
    {
        $this->container['structured_append'] = $structured_append;

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
