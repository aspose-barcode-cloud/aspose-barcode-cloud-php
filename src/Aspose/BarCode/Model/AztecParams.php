<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * AztecParams
 *
 * @description Aztec parameters.
 */
class AztecParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "AztecParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'error_level' => 'int',
        'symbol_mode' => '\Aspose\BarCode\Model\AztecSymbolMode',
        'text_encoding' => 'string',
        'encode_mode' => '\Aspose\BarCode\Model\AztecEncodeMode',
        'eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'is_reader_initialization' => 'bool',
        'layers_count' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'error_level' => 'int32',
        'symbol_mode' => null,
        'text_encoding' => null,
        'encode_mode' => null,
        'eci_encoding' => null,
        'is_reader_initialization' => null,
        'layers_count' => 'int32'
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
        'error_level' => 'ErrorLevel',
        'symbol_mode' => 'SymbolMode',
        'text_encoding' => 'TextEncoding',
        'encode_mode' => 'EncodeMode',
        'eci_encoding' => 'ECIEncoding',
        'is_reader_initialization' => 'IsReaderInitialization',
        'layers_count' => 'LayersCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'error_level' => 'setErrorLevel',
        'symbol_mode' => 'setSymbolMode',
        'text_encoding' => 'setTextEncoding',
        'encode_mode' => 'setEncodeMode',
        'eci_encoding' => 'setEciEncoding',
        'is_reader_initialization' => 'setIsReaderInitialization',
        'layers_count' => 'setLayersCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'error_level' => 'getErrorLevel',
        'symbol_mode' => 'getSymbolMode',
        'text_encoding' => 'getTextEncoding',
        'encode_mode' => 'getEncodeMode',
        'eci_encoding' => 'getEciEncoding',
        'is_reader_initialization' => 'getIsReaderInitialization',
        'layers_count' => 'getLayersCount'
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
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['symbol_mode'] = isset($data['symbol_mode']) ? $data['symbol_mode'] : null;
        $this->container['text_encoding'] = isset($data['text_encoding']) ? $data['text_encoding'] : null;
        $this->container['encode_mode'] = isset($data['encode_mode']) ? $data['encode_mode'] : null;
        $this->container['eci_encoding'] = isset($data['eci_encoding']) ? $data['eci_encoding'] : null;
        $this->container['is_reader_initialization'] = isset($data['is_reader_initialization']) ? $data['is_reader_initialization'] : null;
        $this->container['layers_count'] = isset($data['layers_count']) ? $data['layers_count'] : null;
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
     * Gets error_level
     *
     * @return int
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /**
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

    /**
     * Gets symbol_mode
     *
     * @return \Aspose\BarCode\Model\AztecSymbolMode
     */
    public function getSymbolMode()
    {
        return $this->container['symbol_mode'];
    }

    /**
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
     * Gets encode_mode
     *
     * @return \Aspose\BarCode\Model\AztecEncodeMode
     */
    public function getEncodeMode()
    {
        return $this->container['encode_mode'];
    }

    /**
     * Sets encode_mode
     *
     * @param \Aspose\BarCode\Model\AztecEncodeMode $encode_mode Encoding mode for Aztec barcodes. Default value: Auto
     *
     * @return $this
     */
    public function setEncodeMode($encode_mode)
    {
        $this->container['encode_mode'] = $encode_mode;

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
     * @param \Aspose\BarCode\Model\ECIEncodings $eci_encoding Identifies ECI encoding. Used when AztecEncodeMode is Auto. Default value: ISO-8859-1.
     *
     * @return $this
     */
    public function setEciEncoding($eci_encoding)
    {
        $this->container['eci_encoding'] = $eci_encoding;

        return $this;
    }

    /**
     * Gets is_reader_initialization
     *
     * @return bool
     */
    public function getIsReaderInitialization()
    {
        return $this->container['is_reader_initialization'];
    }

    /**
     * Sets is_reader_initialization
     *
     * @param bool $is_reader_initialization Used to instruct the reader to interpret the data contained within the symbol as programming for reader initialization.
     *
     * @return $this
     */
    public function setIsReaderInitialization($is_reader_initialization)
    {
        $this->container['is_reader_initialization'] = $is_reader_initialization;

        return $this;
    }

    /**
     * Gets layers_count
     *
     * @return int
     */
    public function getLayersCount()
    {
        return $this->container['layers_count'];
    }

    /**
     * Sets layers_count
     *
     * @param int $layers_count Gets or sets layers count of Aztec symbol. Layers count should be in range from 1 to 3 for Compact mode and in range from 1 to 32 for Full Range mode. Default value: 0 (auto).
     *
     * @return $this
     */
    public function setLayersCount($layers_count)
    {
        $this->container['layers_count'] = $layers_count;

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
