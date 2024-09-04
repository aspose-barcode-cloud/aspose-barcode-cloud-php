<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * GenerateParams
 *
 * @description Barcode generation parameters
 */
class GenerateParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "GenerateParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'barcode_type' => '\Aspose\BarCode\Model\EncodeBarcodeType',
        'encode_data' => '\Aspose\BarCode\Model\EncodeData',
        'barcode_image_params' => '\Aspose\BarCode\Model\BarcodeImageParams'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'barcode_type' => null,
        'encode_data' => null,
        'barcode_image_params' => null
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
        'barcode_type' => 'barcodeType',
        'encode_data' => 'encodeData',
        'barcode_image_params' => 'barcodeImageParams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcode_type' => 'setBarcodeType',
        'encode_data' => 'setEncodeData',
        'barcode_image_params' => 'setBarcodeImageParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcode_type' => 'getBarcodeType',
        'encode_data' => 'getEncodeData',
        'barcode_image_params' => 'getBarcodeImageParams'
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
        $this->container['barcode_type'] = isset($data['barcode_type']) ? $data['barcode_type'] : null;
        $this->container['encode_data'] = isset($data['encode_data']) ? $data['encode_data'] : null;
        $this->container['barcode_image_params'] = isset($data['barcode_image_params']) ? $data['barcode_image_params'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['barcode_type'] === null) {
            $invalidProperties[] = "'barcode_type' can't be null";
        }
        if ($this->container['encode_data'] === null) {
            $invalidProperties[] = "'encode_data' can't be null";
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
        if ($this->container['barcode_type'] === null) {
            return false;
        }
        if ($this->container['encode_data'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets barcode_type
     *
     * @return \Aspose\BarCode\Model\EncodeBarcodeType
     */
    public function getBarcodeType()
    {
        return $this->container['barcode_type'];
    }

    /**
     * Sets barcode_type
     *
     * @param \Aspose\BarCode\Model\EncodeBarcodeType $barcode_type barcode_type
     *
     * @return $this
     */
    public function setBarcodeType($barcode_type)
    {
        $this->container['barcode_type'] = $barcode_type;

        return $this;
    }

    /**
     * Gets encode_data
     *
     * @return \Aspose\BarCode\Model\EncodeData
     */
    public function getEncodeData()
    {
        return $this->container['encode_data'];
    }

    /**
     * Sets encode_data
     *
     * @param \Aspose\BarCode\Model\EncodeData $encode_data encode_data
     *
     * @return $this
     */
    public function setEncodeData($encode_data)
    {
        $this->container['encode_data'] = $encode_data;

        return $this;
    }

    /**
     * Gets barcode_image_params
     *
     * @return \Aspose\BarCode\Model\BarcodeImageParams
     */
    public function getBarcodeImageParams()
    {
        return $this->container['barcode_image_params'];
    }

    /**
     * Sets barcode_image_params
     *
     * @param \Aspose\BarCode\Model\BarcodeImageParams $barcode_image_params barcode_image_params
     *
     * @return $this
     */
    public function setBarcodeImageParams($barcode_image_params)
    {
        $this->container['barcode_image_params'] = $barcode_image_params;

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
