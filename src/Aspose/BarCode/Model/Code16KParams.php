<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * Code16KParams
 *
 * @description Code16K parameters.
 */
class Code16KParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "Code16KParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'quiet_zone_left_coef' => 'int',
        'quiet_zone_right_coef' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'quiet_zone_left_coef' => 'int32',
        'quiet_zone_right_coef' => 'int32'
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
        'quiet_zone_left_coef' => 'QuietZoneLeftCoef',
        'quiet_zone_right_coef' => 'QuietZoneRightCoef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'quiet_zone_left_coef' => 'setQuietZoneLeftCoef',
        'quiet_zone_right_coef' => 'setQuietZoneRightCoef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'quiet_zone_left_coef' => 'getQuietZoneLeftCoef',
        'quiet_zone_right_coef' => 'getQuietZoneRightCoef'
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
        $this->container['quiet_zone_left_coef'] = isset($data['quiet_zone_left_coef']) ? $data['quiet_zone_left_coef'] : null;
        $this->container['quiet_zone_right_coef'] = isset($data['quiet_zone_right_coef']) ? $data['quiet_zone_right_coef'] : null;
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
     * Gets quiet_zone_left_coef
     *
     * @return int
     */
    public function getQuietZoneLeftCoef()
    {
        return $this->container['quiet_zone_left_coef'];
    }

    /**
     * Sets quiet_zone_left_coef
     *
     * @param int $quiet_zone_left_coef Size of the left quiet zone in xDimension. Default value: 10, meaning if xDimension = 2px than left quiet zone will be 20px.
     *
     * @return $this
     */
    public function setQuietZoneLeftCoef($quiet_zone_left_coef)
    {
        $this->container['quiet_zone_left_coef'] = $quiet_zone_left_coef;

        return $this;
    }

    /**
     * Gets quiet_zone_right_coef
     *
     * @return int
     */
    public function getQuietZoneRightCoef()
    {
        return $this->container['quiet_zone_right_coef'];
    }

    /**
     * Sets quiet_zone_right_coef
     *
     * @param int $quiet_zone_right_coef Size of the right quiet zone in xDimension. Default value: 1, meaning if xDimension = 2px than right quiet zone will be 2px.
     *
     * @return $this
     */
    public function setQuietZoneRightCoef($quiet_zone_right_coef)
    {
        $this->container['quiet_zone_right_coef'] = $quiet_zone_right_coef;

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
