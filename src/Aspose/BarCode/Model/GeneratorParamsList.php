<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * GeneratorParamsList
 *
 * @description Represents list of barcode generators
 */
class GeneratorParamsList implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "GeneratorParamsList";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'barcode_builders' => '\Aspose\BarCode\Model\GeneratorParams[]',
        'x_step' => 'int',
        'y_step' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'barcode_builders' => null,
        'x_step' => 'int32',
        'y_step' => 'int32'
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
        'barcode_builders' => 'BarcodeBuilders',
        'x_step' => 'XStep',
        'y_step' => 'YStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcode_builders' => 'setBarcodeBuilders',
        'x_step' => 'setXStep',
        'y_step' => 'setYStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcode_builders' => 'getBarcodeBuilders',
        'x_step' => 'getXStep',
        'y_step' => 'getYStep'
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
        $this->container['barcode_builders'] = isset($data['barcode_builders']) ? $data['barcode_builders'] : null;
        $this->container['x_step'] = isset($data['x_step']) ? $data['x_step'] : null;
        $this->container['y_step'] = isset($data['y_step']) ? $data['y_step'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['x_step'] === null) {
            $invalidProperties[] = "'x_step' can't be null";
        }
        if ($this->container['y_step'] === null) {
            $invalidProperties[] = "'y_step' can't be null";
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
        if ($this->container['x_step'] === null) {
            return false;
        }
        if ($this->container['y_step'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets barcode_builders
     *
     * @return \Aspose\BarCode\Model\GeneratorParams[]
     */
    public function getBarcodeBuilders()
    {
        return $this->container['barcode_builders'];
    }

    /**
     * Sets barcode_builders
     *
     * @param \Aspose\BarCode\Model\GeneratorParams[] $barcode_builders List of barcode generators
     *
     * @return $this
     */
    public function setBarcodeBuilders($barcode_builders)
    {
        $this->container['barcode_builders'] = $barcode_builders;

        return $this;
    }

    /**
     * Gets x_step
     *
     * @return int
     */
    public function getXStep()
    {
        return $this->container['x_step'];
    }

    /**
     * Sets x_step
     *
     * @param int $x_step Shift step according to X axis
     *
     * @return $this
     */
    public function setXStep($x_step)
    {
        $this->container['x_step'] = $x_step;

        return $this;
    }

    /**
     * Gets y_step
     *
     * @return int
     */
    public function getYStep()
    {
        return $this->container['y_step'];
    }

    /**
     * Sets y_step
     *
     * @param int $y_step Shift step according to Y axis
     *
     * @return $this
     */
    public function setYStep($y_step)
    {
        $this->container['y_step'] = $y_step;

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
