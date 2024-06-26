<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * PatchCodeParams
 *
 * @description PatchCode parameters.
 */
class PatchCodeParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "PatchCodeParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'extra_barcode_text' => 'string',
        'patch_format' => '\Aspose\BarCode\Model\PatchFormat'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'extra_barcode_text' => null,
        'patch_format' => null
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
        'extra_barcode_text' => 'ExtraBarcodeText',
        'patch_format' => 'PatchFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extra_barcode_text' => 'setExtraBarcodeText',
        'patch_format' => 'setPatchFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extra_barcode_text' => 'getExtraBarcodeText',
        'patch_format' => 'getPatchFormat'
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
        $this->container['extra_barcode_text'] = isset($data['extra_barcode_text']) ? $data['extra_barcode_text'] : null;
        $this->container['patch_format'] = isset($data['patch_format']) ? $data['patch_format'] : null;
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
     * Gets extra_barcode_text
     *
     * @return string
     */
    public function getExtraBarcodeText()
    {
        return $this->container['extra_barcode_text'];
    }

    /**
     * Sets extra_barcode_text
     *
     * @param string $extra_barcode_text Specifies codetext for an extra QR barcode, when PatchCode is generated in page mode.
     *
     * @return $this
     */
    public function setExtraBarcodeText($extra_barcode_text)
    {
        $this->container['extra_barcode_text'] = $extra_barcode_text;

        return $this;
    }

    /**
     * Gets patch_format
     *
     * @return \Aspose\BarCode\Model\PatchFormat
     */
    public function getPatchFormat()
    {
        return $this->container['patch_format'];
    }

    /**
     * Sets patch_format
     *
     * @param \Aspose\BarCode\Model\PatchFormat $patch_format PatchCode format. Choose PatchOnly to generate single PatchCode. Use page format to generate Patch page with PatchCodes as borders. Default value: PatchFormat.PatchOnly
     *
     * @return $this
     */
    public function setPatchFormat($patch_format)
    {
        $this->container['patch_format'] = $patch_format;

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
