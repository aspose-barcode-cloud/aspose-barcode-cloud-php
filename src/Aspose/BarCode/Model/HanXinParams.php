<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * HanXinParams
 *
 * @description HanXin params.
 */
class HanXinParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "HanXinParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'encode_mode' => '\Aspose\BarCode\Model\HanXinEncodeMode',
        'error_level' => '\Aspose\BarCode\Model\HanXinErrorLevel',
        'version' => '\Aspose\BarCode\Model\HanXinVersion',
        'eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'encode_mode' => null,
        'error_level' => null,
        'version' => null,
        'eci_encoding' => null
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
        'encode_mode' => 'EncodeMode',
        'error_level' => 'ErrorLevel',
        'version' => 'Version',
        'eci_encoding' => 'ECIEncoding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encode_mode' => 'setEncodeMode',
        'error_level' => 'setErrorLevel',
        'version' => 'setVersion',
        'eci_encoding' => 'setEciEncoding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encode_mode' => 'getEncodeMode',
        'error_level' => 'getErrorLevel',
        'version' => 'getVersion',
        'eci_encoding' => 'getEciEncoding'
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
        $this->container['encode_mode'] = isset($data['encode_mode']) ? $data['encode_mode'] : null;
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['eci_encoding'] = isset($data['eci_encoding']) ? $data['eci_encoding'] : null;
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
     * Gets encode_mode
     *
     * @return \Aspose\BarCode\Model\HanXinEncodeMode
     */
    public function getEncodeMode()
    {
        return $this->container['encode_mode'];
    }

    /**
     * Sets encode_mode
     *
     * @param \Aspose\BarCode\Model\HanXinEncodeMode $encode_mode Encoding mode for XanXin barcodes. Default value: HanXinEncodeMode.Auto.
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
     * @return \Aspose\BarCode\Model\HanXinErrorLevel
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /**
     * Sets error_level
     *
     * @param \Aspose\BarCode\Model\HanXinErrorLevel $error_level Allowed Han Xin error correction levels from L1 to L4. Default value: HanXinErrorLevel.L1.
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
     * @return \Aspose\BarCode\Model\HanXinVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Aspose\BarCode\Model\HanXinVersion $version Allowed Han Xin versions, Auto and Version01 - Version84. Default value: HanXinVersion.Auto.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
     * @param \Aspose\BarCode\Model\ECIEncodings $eci_encoding Extended Channel Interpretation Identifiers. It is used to tell the barcode reader details about the used references for encoding the data in the symbol. Current implementation consists all well known charset encodings. Default value: ECIEncodings.ISO_8859_1
     *
     * @return $this
     */
    public function setEciEncoding($eci_encoding)
    {
        $this->container['eci_encoding'] = $eci_encoding;

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
