<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * CaptionParams
 *
 * @description Caption
 */
class CaptionParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "CaptionParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'text' => 'string',
        'alignment' => '\Aspose\BarCode\Model\TextAlignment',
        'color' => 'string',
        'visible' => 'bool',
        'font' => '\Aspose\BarCode\Model\FontParams',
        'padding' => '\Aspose\BarCode\Model\Padding',
        'no_wrap' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'text' => null,
        'alignment' => null,
        'color' => null,
        'visible' => null,
        'font' => null,
        'padding' => null,
        'no_wrap' => null
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
        'text' => 'Text',
        'alignment' => 'Alignment',
        'color' => 'Color',
        'visible' => 'Visible',
        'font' => 'Font',
        'padding' => 'Padding',
        'no_wrap' => 'NoWrap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'alignment' => 'setAlignment',
        'color' => 'setColor',
        'visible' => 'setVisible',
        'font' => 'setFont',
        'padding' => 'setPadding',
        'no_wrap' => 'setNoWrap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'alignment' => 'getAlignment',
        'color' => 'getColor',
        'visible' => 'getVisible',
        'font' => 'getFont',
        'padding' => 'getPadding',
        'no_wrap' => 'getNoWrap'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['padding'] = isset($data['padding']) ? $data['padding'] : null;
        $this->container['no_wrap'] = isset($data['no_wrap']) ? $data['no_wrap'] : null;
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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Caption text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets alignment
     *
     * @return \Aspose\BarCode\Model\TextAlignment
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param \Aspose\BarCode\Model\TextAlignment $alignment Text alignment.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Text color.   Default value: black   Use named colors like: red, green, blue   Or HTML colors like: #FF0000, #00FF00, #0000FF
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible Is caption visible.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets font
     *
     * @return \Aspose\BarCode\Model\FontParams
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param \Aspose\BarCode\Model\FontParams $font Font.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets padding
     *
     * @return \Aspose\BarCode\Model\Padding
     */
    public function getPadding()
    {
        return $this->container['padding'];
    }

    /**
     * Sets padding
     *
     * @param \Aspose\BarCode\Model\Padding $padding Padding.
     *
     * @return $this
     */
    public function setPadding($padding)
    {
        $this->container['padding'] = $padding;

        return $this;
    }

    /**
     * Gets no_wrap
     *
     * @return bool
     */
    public function getNoWrap()
    {
        return $this->container['no_wrap'];
    }

    /**
     * Sets no_wrap
     *
     * @param bool $no_wrap Specify word wraps (line breaks) within text. Default value: false.
     *
     * @return $this
     */
    public function setNoWrap($no_wrap)
    {
        $this->container['no_wrap'] = $no_wrap;

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
