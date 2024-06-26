<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * DataMatrixParams
 *
 * @description DataMatrix parameters.
 */
class DataMatrixParams implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "DataMatrixParams";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'text_encoding' => 'string',
        'columns' => 'int',
        'data_matrix_ecc' => '\Aspose\BarCode\Model\DataMatrixEccType',
        'data_matrix_encode_mode' => '\Aspose\BarCode\Model\DataMatrixEncodeMode',
        'rows' => 'int',
        'macro_characters' => '\Aspose\BarCode\Model\MacroCharacter',
        'version' => '\Aspose\BarCode\Model\DataMatrixVersion'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var (string|null)[]
     */
    protected static array $swaggerFormats = [
        'aspect_ratio' => 'double',
        'text_encoding' => null,
        'columns' => 'int32',
        'data_matrix_ecc' => null,
        'data_matrix_encode_mode' => null,
        'rows' => 'int32',
        'macro_characters' => null,
        'version' => null
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
        'text_encoding' => 'TextEncoding',
        'columns' => 'Columns',
        'data_matrix_ecc' => 'DataMatrixEcc',
        'data_matrix_encode_mode' => 'DataMatrixEncodeMode',
        'rows' => 'Rows',
        'macro_characters' => 'MacroCharacters',
        'version' => 'Version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'text_encoding' => 'setTextEncoding',
        'columns' => 'setColumns',
        'data_matrix_ecc' => 'setDataMatrixEcc',
        'data_matrix_encode_mode' => 'setDataMatrixEncodeMode',
        'rows' => 'setRows',
        'macro_characters' => 'setMacroCharacters',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'text_encoding' => 'getTextEncoding',
        'columns' => 'getColumns',
        'data_matrix_ecc' => 'getDataMatrixEcc',
        'data_matrix_encode_mode' => 'getDataMatrixEncodeMode',
        'rows' => 'getRows',
        'macro_characters' => 'getMacroCharacters',
        'version' => 'getVersion'
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
        $this->container['text_encoding'] = isset($data['text_encoding']) ? $data['text_encoding'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['data_matrix_ecc'] = isset($data['data_matrix_ecc']) ? $data['data_matrix_ecc'] : null;
        $this->container['data_matrix_encode_mode'] = isset($data['data_matrix_encode_mode']) ? $data['data_matrix_encode_mode'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['macro_characters'] = isset($data['macro_characters']) ? $data['macro_characters'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * @param double $aspect_ratio Height/Width ratio of 2D BarCode module
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets text_encoding
     *
     * @return string
     */
    public function getTextEncoding()
    {
        return $this->container['text_encoding'];
    }

    /**
     * Sets text_encoding
     *
     * @param string $text_encoding DEPRECATED: This property is obsolete and will be removed in future releases. Unicode symbols detection and encoding will be processed in Auto mode with Extended Channel Interpretation charset designator. Using of own encodings requires manual CodeText encoding into byte[] array.  Sets the encoding of codetext.
     *
     * @return $this
     */
    public function setTextEncoding($text_encoding)
    {
        trigger_error('Property $text_encoding is deprecated. This property is obsolete and will be removed in future releases. Unicode symbols detection and encoding will be processed in Auto mode with Extended Channel Interpretation charset designator. Using of own encodings requires manual CodeText encoding into byte[] array.  Sets the encoding of codetext.', E_USER_DEPRECATED);
        $this->container['text_encoding'] = $text_encoding;

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
     * @param int $columns DEPRECATED: Will be replaced with 'DataMatrix.Version' in the next release  Columns count.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        trigger_error('Property $columns is deprecated. Will be replaced with \'DataMatrix.Version\' in the next release  Columns count.', E_USER_DEPRECATED);
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets data_matrix_ecc
     *
     * @return \Aspose\BarCode\Model\DataMatrixEccType
     */
    public function getDataMatrixEcc()
    {
        return $this->container['data_matrix_ecc'];
    }

    /**
     * Sets data_matrix_ecc
     *
     * @param \Aspose\BarCode\Model\DataMatrixEccType $data_matrix_ecc Datamatrix ECC type. Default value: DataMatrixEccType.Ecc200.
     *
     * @return $this
     */
    public function setDataMatrixEcc($data_matrix_ecc)
    {
        $this->container['data_matrix_ecc'] = $data_matrix_ecc;

        return $this;
    }

    /**
     * Gets data_matrix_encode_mode
     *
     * @return \Aspose\BarCode\Model\DataMatrixEncodeMode
     */
    public function getDataMatrixEncodeMode()
    {
        return $this->container['data_matrix_encode_mode'];
    }

    /**
     * Sets data_matrix_encode_mode
     *
     * @param \Aspose\BarCode\Model\DataMatrixEncodeMode $data_matrix_encode_mode Encode mode of Datamatrix barcode. Default value: DataMatrixEncodeMode.Auto.
     *
     * @return $this
     */
    public function setDataMatrixEncodeMode($data_matrix_encode_mode)
    {
        $this->container['data_matrix_encode_mode'] = $data_matrix_encode_mode;

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
     * @param int $rows DEPRECATED: Will be replaced with 'DataMatrix.Version' in the next release  Rows count.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        trigger_error('Property $rows is deprecated. Will be replaced with \'DataMatrix.Version\' in the next release  Rows count.', E_USER_DEPRECATED);
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets macro_characters
     *
     * @return \Aspose\BarCode\Model\MacroCharacter
     */
    public function getMacroCharacters()
    {
        return $this->container['macro_characters'];
    }

    /**
     * Sets macro_characters
     *
     * @param \Aspose\BarCode\Model\MacroCharacter $macro_characters Macro Characters 05 and 06 values are used to obtain more compact encoding in special modes. Can be used only with DataMatrixEccType.Ecc200 or DataMatrixEccType.EccAuto. Cannot be used with EncodeTypes.GS1DataMatrix Default value: MacroCharacters.None.
     *
     * @return $this
     */
    public function setMacroCharacters($macro_characters)
    {
        $this->container['macro_characters'] = $macro_characters;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Aspose\BarCode\Model\DataMatrixVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Aspose\BarCode\Model\DataMatrixVersion $version Sets a Datamatrix symbol size. Default value: DataMatrixVersion.Auto.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
