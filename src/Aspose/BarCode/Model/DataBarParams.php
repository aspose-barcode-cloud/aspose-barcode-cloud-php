<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * DataBarParams
 *
 * @description Databar parameters.
 */
class DataBarParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "DataBarParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'columns' => 'int',
        'rows' => 'int',
        'is2_d_composite_component' => 'bool',
        'is_allow_only_gs1_encoding' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'columns' => 'int32',
        'rows' => 'int32',
        'is2_d_composite_component' => null,
        'is_allow_only_gs1_encoding' => null
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
        'rows' => 'Rows',
        'is2_d_composite_component' => 'Is2DCompositeComponent',
        'is_allow_only_gs1_encoding' => 'IsAllowOnlyGS1Encoding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'columns' => 'setColumns',
        'rows' => 'setRows',
        'is2_d_composite_component' => 'setIs2DCompositeComponent',
        'is_allow_only_gs1_encoding' => 'setIsAllowOnlyGs1Encoding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'columns' => 'getColumns',
        'rows' => 'getRows',
        'is2_d_composite_component' => 'getIs2DCompositeComponent',
        'is_allow_only_gs1_encoding' => 'getIsAllowOnlyGs1Encoding'
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
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['is2_d_composite_component'] = isset($data['is2_d_composite_component']) ? $data['is2_d_composite_component'] : null;
        $this->container['is_allow_only_gs1_encoding'] = isset($data['is_allow_only_gs1_encoding']) ? $data['is_allow_only_gs1_encoding'] : null;
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
     * @param double $aspect_ratio Height/Width ratio of 2D BarCode module. Used for DataBar stacked.
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
     * @param int $columns Columns count.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

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
     * @param int $rows Rows count.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets is2_d_composite_component
     *
     * @return bool
     */
    public function getIs2DCompositeComponent()
    {
        return $this->container['is2_d_composite_component'];
    }

    /**
     * Sets is2_d_composite_component
     *
     * @param bool $is2_d_composite_component Enables flag of 2D composite component with DataBar barcode
     *
     * @return $this
     */
    public function setIs2DCompositeComponent($is2_d_composite_component)
    {
        $this->container['is2_d_composite_component'] = $is2_d_composite_component;

        return $this;
    }

    /**
     * Gets is_allow_only_gs1_encoding
     *
     * @return bool
     */
    public function getIsAllowOnlyGs1Encoding()
    {
        return $this->container['is_allow_only_gs1_encoding'];
    }

    /**
     * Sets is_allow_only_gs1_encoding
     *
     * @param bool $is_allow_only_gs1_encoding If this flag is set, it allows only GS1 encoding standard for Databar barcode types
     *
     * @return $this
     */
    public function setIsAllowOnlyGs1Encoding($is_allow_only_gs1_encoding)
    {
        $this->container['is_allow_only_gs1_encoding'] = $is_allow_only_gs1_encoding;

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
