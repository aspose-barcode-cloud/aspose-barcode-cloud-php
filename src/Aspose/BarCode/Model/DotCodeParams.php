<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * DotCodeParams
 *
 * @description DotCode parameters.
 */
class DotCodeParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "DotCodeParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'columns' => 'int',
        'encode_mode' => '\Aspose\BarCode\Model\DotCodeEncodeMode',
        'eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'is_reader_initialization' => 'bool',
        'rows' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'columns' => 'int32',
        'encode_mode' => null,
        'eci_encoding' => null,
        'is_reader_initialization' => null,
        'rows' => 'int32'
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
        'columns' => 'Columns',
        'encode_mode' => 'EncodeMode',
        'eci_encoding' => 'ECIEncoding',
        'is_reader_initialization' => 'IsReaderInitialization',
        'rows' => 'Rows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'columns' => 'setColumns',
        'encode_mode' => 'setEncodeMode',
        'eci_encoding' => 'setEciEncoding',
        'is_reader_initialization' => 'setIsReaderInitialization',
        'rows' => 'setRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'columns' => 'getColumns',
        'encode_mode' => 'getEncodeMode',
        'eci_encoding' => 'getEciEncoding',
        'is_reader_initialization' => 'getIsReaderInitialization',
        'rows' => 'getRows'
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
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['encode_mode'] = isset($data['encode_mode']) ? $data['encode_mode'] : null;
        $this->container['eci_encoding'] = isset($data['eci_encoding']) ? $data['eci_encoding'] : null;
        $this->container['is_reader_initialization'] = isset($data['is_reader_initialization']) ? $data['is_reader_initialization'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
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
     * Gets columns
     *
     * @return int
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param int $columns Identifies columns count. Sum of the number of rows plus the number of columns of a DotCode symbol must be odd. Number of columns must be at least 5.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets encode_mode
     *
     * @return \Aspose\BarCode\Model\DotCodeEncodeMode
     */
    public function getEncodeMode()
    {
        return $this->container['encode_mode'];
    }

    /**
     * Sets encode_mode
     *
     * @param \Aspose\BarCode\Model\DotCodeEncodeMode $encode_mode Identifies DotCode encode mode. Default value: Auto.
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
     * @param \Aspose\BarCode\Model\ECIEncodings $eci_encoding Identifies ECI encoding. Used when DotCodeEncodeMode is Auto. Default value: ISO-8859-1.
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
     * @param bool $is_reader_initialization Indicates whether code is used for instruct reader to interpret the following data as instructions for initialization or reprogramming of the bar code reader. Default value is false.
     *
     * @return $this
     */
    public function setIsReaderInitialization($is_reader_initialization)
    {
        $this->container['is_reader_initialization'] = $is_reader_initialization;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return int
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param int $rows Identifies rows count. Sum of the number of rows plus the number of columns of a DotCode symbol must be odd. Number of rows must be at least 5.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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
