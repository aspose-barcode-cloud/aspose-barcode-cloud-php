<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * CodabarParams
 *
 * @description Codabar parameters.
 */
class CodabarParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "CodabarParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'checksum_mode' => '\Aspose\BarCode\Model\CodabarChecksumMode',
        'start_symbol' => '\Aspose\BarCode\Model\CodabarSymbol',
        'stop_symbol' => '\Aspose\BarCode\Model\CodabarSymbol'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'checksum_mode' => null,
        'start_symbol' => null,
        'stop_symbol' => null
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
        'checksum_mode' => 'ChecksumMode',
        'start_symbol' => 'StartSymbol',
        'stop_symbol' => 'StopSymbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checksum_mode' => 'setChecksumMode',
        'start_symbol' => 'setStartSymbol',
        'stop_symbol' => 'setStopSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checksum_mode' => 'getChecksumMode',
        'start_symbol' => 'getStartSymbol',
        'stop_symbol' => 'getStopSymbol'
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
        $this->container['checksum_mode'] = isset($data['checksum_mode']) ? $data['checksum_mode'] : null;
        $this->container['start_symbol'] = isset($data['start_symbol']) ? $data['start_symbol'] : null;
        $this->container['stop_symbol'] = isset($data['stop_symbol']) ? $data['stop_symbol'] : null;
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
     * Gets checksum_mode
     *
     * @return \Aspose\BarCode\Model\CodabarChecksumMode
     */
    public function getChecksumMode()
    {
        return $this->container['checksum_mode'];
    }

    /**
     * Sets checksum_mode
     *
     * @param \Aspose\BarCode\Model\CodabarChecksumMode $checksum_mode Checksum algorithm for Codabar barcodes. Default value: CodabarChecksumMode.Mod16. To enable checksum calculation set value EnableChecksum.Yes to property EnableChecksum.
     *
     * @return $this
     */
    public function setChecksumMode($checksum_mode)
    {
        $this->container['checksum_mode'] = $checksum_mode;

        return $this;
    }

    /**
     * Gets start_symbol
     *
     * @return \Aspose\BarCode\Model\CodabarSymbol
     */
    public function getStartSymbol()
    {
        return $this->container['start_symbol'];
    }

    /**
     * Sets start_symbol
     *
     * @param \Aspose\BarCode\Model\CodabarSymbol $start_symbol Start symbol (character) of Codabar symbology. Default value: CodabarSymbol.A
     *
     * @return $this
     */
    public function setStartSymbol($start_symbol)
    {
        $this->container['start_symbol'] = $start_symbol;

        return $this;
    }

    /**
     * Gets stop_symbol
     *
     * @return \Aspose\BarCode\Model\CodabarSymbol
     */
    public function getStopSymbol()
    {
        return $this->container['stop_symbol'];
    }

    /**
     * Sets stop_symbol
     *
     * @param \Aspose\BarCode\Model\CodabarSymbol $stop_symbol Stop symbol (character) of Codabar symbology. Default value: CodabarSymbol.A
     *
     * @return $this
     */
    public function setStopSymbol($stop_symbol)
    {
        $this->container['stop_symbol'] = $stop_symbol;

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
