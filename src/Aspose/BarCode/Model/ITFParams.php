<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * ITFParams
 *
 * @description ITF parameters.
 */
class ITFParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "ITFParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'border_thickness' => 'double',
        'border_type' => '\Aspose\BarCode\Model\ITF14BorderType',
        'quiet_zone_coef' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'border_thickness' => 'double',
        'border_type' => null,
        'quiet_zone_coef' => 'int32'
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
        'border_thickness' => 'BorderThickness',
        'border_type' => 'BorderType',
        'quiet_zone_coef' => 'QuietZoneCoef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border_thickness' => 'setBorderThickness',
        'border_type' => 'setBorderType',
        'quiet_zone_coef' => 'setQuietZoneCoef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border_thickness' => 'getBorderThickness',
        'border_type' => 'getBorderType',
        'quiet_zone_coef' => 'getQuietZoneCoef'
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
        $this->container['border_thickness'] = isset($data['border_thickness']) ? $data['border_thickness'] : null;
        $this->container['border_type'] = isset($data['border_type']) ? $data['border_type'] : null;
        $this->container['quiet_zone_coef'] = isset($data['quiet_zone_coef']) ? $data['quiet_zone_coef'] : null;
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
     * Gets border_thickness
     *
     * @return double
     */
    public function getBorderThickness()
    {
        return $this->container['border_thickness'];
    }

    /**
     * Sets border_thickness
     *
     * @param double $border_thickness ITF border (bearer bar) thickness in Unit value. Default value: 12pt.
     *
     * @return $this
     */
    public function setBorderThickness($border_thickness)
    {
        $this->container['border_thickness'] = $border_thickness;

        return $this;
    }

    /**
     * Gets border_type
     *
     * @return \Aspose\BarCode\Model\ITF14BorderType
     */
    public function getBorderType()
    {
        return $this->container['border_type'];
    }

    /**
     * Sets border_type
     *
     * @param \Aspose\BarCode\Model\ITF14BorderType $border_type Border type of ITF barcode. Default value: ITF14BorderType.Bar.
     *
     * @return $this
     */
    public function setBorderType($border_type)
    {
        $this->container['border_type'] = $border_type;

        return $this;
    }

    /**
     * Gets quiet_zone_coef
     *
     * @return int
     */
    public function getQuietZoneCoef()
    {
        return $this->container['quiet_zone_coef'];
    }

    /**
     * Sets quiet_zone_coef
     *
     * @param int $quiet_zone_coef Size of the quiet zones in xDimension. Default value: 10, meaning if xDimension = 2px than quiet zones will be 20px.
     *
     * @return $this
     */
    public function setQuietZoneCoef($quiet_zone_coef)
    {
        $this->container['quiet_zone_coef'] = $quiet_zone_coef;

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
