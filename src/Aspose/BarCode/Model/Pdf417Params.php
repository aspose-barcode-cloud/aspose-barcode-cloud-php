<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use ArrayAccess;
use Aspose\BarCode\ObjectSerializer;

/**
 * Pdf417Params
 *
 * @description PDF417 parameters.
 */
class Pdf417Params implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = "Pdf417Params";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'aspect_ratio' => 'double',
        'text_encoding' => 'string',
        'columns' => 'int',
        'compaction_mode' => '\Aspose\BarCode\Model\Pdf417CompactionMode',
        'error_level' => '\Aspose\BarCode\Model\Pdf417ErrorLevel',
        'macro_file_id' => 'int',
        'macro_segment_id' => 'int',
        'macro_segments_count' => 'int',
        'rows' => 'int',
        'truncate' => 'bool',
        'pdf417_eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'is_reader_initialization' => 'bool',
        'macro_time_stamp' => '\DateTime',
        'macro_sender' => 'string',
        'macro_file_size' => 'int',
        'macro_checksum' => 'int',
        'macro_file_name' => 'string',
        'macro_addressee' => 'string',
        'macro_eci_encoding' => '\Aspose\BarCode\Model\ECIEncodings',
        'code128_emulation' => '\Aspose\BarCode\Model\Code128Emulation',
        'is_code128_emulation' => 'bool',
        'pdf417_macro_terminator' => '\Aspose\BarCode\Model\Pdf417MacroTerminator',
        'is_linked' => 'bool',
        'macro_characters' => '\Aspose\BarCode\Model\MacroCharacter'
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
        'compaction_mode' => null,
        'error_level' => null,
        'macro_file_id' => 'int32',
        'macro_segment_id' => 'int32',
        'macro_segments_count' => 'int32',
        'rows' => 'int32',
        'truncate' => null,
        'pdf417_eci_encoding' => null,
        'is_reader_initialization' => null,
        'macro_time_stamp' => 'date-time',
        'macro_sender' => null,
        'macro_file_size' => 'int32',
        'macro_checksum' => 'int32',
        'macro_file_name' => null,
        'macro_addressee' => null,
        'macro_eci_encoding' => null,
        'code128_emulation' => null,
        'is_code128_emulation' => null,
        'pdf417_macro_terminator' => null,
        'is_linked' => null,
        'macro_characters' => null
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
        'compaction_mode' => 'CompactionMode',
        'error_level' => 'ErrorLevel',
        'macro_file_id' => 'MacroFileID',
        'macro_segment_id' => 'MacroSegmentID',
        'macro_segments_count' => 'MacroSegmentsCount',
        'rows' => 'Rows',
        'truncate' => 'Truncate',
        'pdf417_eci_encoding' => 'Pdf417ECIEncoding',
        'is_reader_initialization' => 'IsReaderInitialization',
        'macro_time_stamp' => 'MacroTimeStamp',
        'macro_sender' => 'MacroSender',
        'macro_file_size' => 'MacroFileSize',
        'macro_checksum' => 'MacroChecksum',
        'macro_file_name' => 'MacroFileName',
        'macro_addressee' => 'MacroAddressee',
        'macro_eci_encoding' => 'MacroECIEncoding',
        'code128_emulation' => 'Code128Emulation',
        'is_code128_emulation' => 'IsCode128Emulation',
        'pdf417_macro_terminator' => 'Pdf417MacroTerminator',
        'is_linked' => 'IsLinked',
        'macro_characters' => 'MacroCharacters'
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
        'compaction_mode' => 'setCompactionMode',
        'error_level' => 'setErrorLevel',
        'macro_file_id' => 'setMacroFileId',
        'macro_segment_id' => 'setMacroSegmentId',
        'macro_segments_count' => 'setMacroSegmentsCount',
        'rows' => 'setRows',
        'truncate' => 'setTruncate',
        'pdf417_eci_encoding' => 'setPdf417EciEncoding',
        'is_reader_initialization' => 'setIsReaderInitialization',
        'macro_time_stamp' => 'setMacroTimeStamp',
        'macro_sender' => 'setMacroSender',
        'macro_file_size' => 'setMacroFileSize',
        'macro_checksum' => 'setMacroChecksum',
        'macro_file_name' => 'setMacroFileName',
        'macro_addressee' => 'setMacroAddressee',
        'macro_eci_encoding' => 'setMacroEciEncoding',
        'code128_emulation' => 'setCode128Emulation',
        'is_code128_emulation' => 'setIsCode128Emulation',
        'pdf417_macro_terminator' => 'setPdf417MacroTerminator',
        'is_linked' => 'setIsLinked',
        'macro_characters' => 'setMacroCharacters'
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
        'compaction_mode' => 'getCompactionMode',
        'error_level' => 'getErrorLevel',
        'macro_file_id' => 'getMacroFileId',
        'macro_segment_id' => 'getMacroSegmentId',
        'macro_segments_count' => 'getMacroSegmentsCount',
        'rows' => 'getRows',
        'truncate' => 'getTruncate',
        'pdf417_eci_encoding' => 'getPdf417EciEncoding',
        'is_reader_initialization' => 'getIsReaderInitialization',
        'macro_time_stamp' => 'getMacroTimeStamp',
        'macro_sender' => 'getMacroSender',
        'macro_file_size' => 'getMacroFileSize',
        'macro_checksum' => 'getMacroChecksum',
        'macro_file_name' => 'getMacroFileName',
        'macro_addressee' => 'getMacroAddressee',
        'macro_eci_encoding' => 'getMacroEciEncoding',
        'code128_emulation' => 'getCode128Emulation',
        'is_code128_emulation' => 'getIsCode128Emulation',
        'pdf417_macro_terminator' => 'getPdf417MacroTerminator',
        'is_linked' => 'getIsLinked',
        'macro_characters' => 'getMacroCharacters'
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
        $this->container['compaction_mode'] = isset($data['compaction_mode']) ? $data['compaction_mode'] : null;
        $this->container['error_level'] = isset($data['error_level']) ? $data['error_level'] : null;
        $this->container['macro_file_id'] = isset($data['macro_file_id']) ? $data['macro_file_id'] : null;
        $this->container['macro_segment_id'] = isset($data['macro_segment_id']) ? $data['macro_segment_id'] : null;
        $this->container['macro_segments_count'] = isset($data['macro_segments_count']) ? $data['macro_segments_count'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['truncate'] = isset($data['truncate']) ? $data['truncate'] : null;
        $this->container['pdf417_eci_encoding'] = isset($data['pdf417_eci_encoding']) ? $data['pdf417_eci_encoding'] : null;
        $this->container['is_reader_initialization'] = isset($data['is_reader_initialization']) ? $data['is_reader_initialization'] : null;
        $this->container['macro_time_stamp'] = isset($data['macro_time_stamp']) ? $data['macro_time_stamp'] : null;
        $this->container['macro_sender'] = isset($data['macro_sender']) ? $data['macro_sender'] : null;
        $this->container['macro_file_size'] = isset($data['macro_file_size']) ? $data['macro_file_size'] : null;
        $this->container['macro_checksum'] = isset($data['macro_checksum']) ? $data['macro_checksum'] : null;
        $this->container['macro_file_name'] = isset($data['macro_file_name']) ? $data['macro_file_name'] : null;
        $this->container['macro_addressee'] = isset($data['macro_addressee']) ? $data['macro_addressee'] : null;
        $this->container['macro_eci_encoding'] = isset($data['macro_eci_encoding']) ? $data['macro_eci_encoding'] : null;
        $this->container['code128_emulation'] = isset($data['code128_emulation']) ? $data['code128_emulation'] : null;
        $this->container['is_code128_emulation'] = isset($data['is_code128_emulation']) ? $data['is_code128_emulation'] : null;
        $this->container['pdf417_macro_terminator'] = isset($data['pdf417_macro_terminator']) ? $data['pdf417_macro_terminator'] : null;
        $this->container['is_linked'] = isset($data['is_linked']) ? $data['is_linked'] : null;
        $this->container['macro_characters'] = isset($data['macro_characters']) ? $data['macro_characters'] : null;
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
     * Gets compaction_mode
     *
     * @return \Aspose\BarCode\Model\Pdf417CompactionMode
     */
    public function getCompactionMode()
    {
        return $this->container['compaction_mode'];
    }

    /**
     * Sets compaction_mode
     *
     * @param \Aspose\BarCode\Model\Pdf417CompactionMode $compaction_mode Pdf417 symbology type of BarCode's compaction mode. Default value: Pdf417CompactionMode.Auto.
     *
     * @return $this
     */
    public function setCompactionMode($compaction_mode)
    {
        $this->container['compaction_mode'] = $compaction_mode;

        return $this;
    }

    /**
     * Gets error_level
     *
     * @return \Aspose\BarCode\Model\Pdf417ErrorLevel
     */
    public function getErrorLevel()
    {
        return $this->container['error_level'];
    }

    /**
     * Sets error_level
     *
     * @param \Aspose\BarCode\Model\Pdf417ErrorLevel $error_level Pdf417 symbology type of BarCode's error correction level ranging from level0 to level8, level0 means no error correction info, level8 means best error correction which means a larger picture.
     *
     * @return $this
     */
    public function setErrorLevel($error_level)
    {
        $this->container['error_level'] = $error_level;

        return $this;
    }

    /**
     * Gets macro_file_id
     *
     * @return int
     */
    public function getMacroFileId()
    {
        return $this->container['macro_file_id'];
    }

    /**
     * Sets macro_file_id
     *
     * @param int $macro_file_id Macro Pdf417 barcode's file ID. Used for MacroPdf417.
     *
     * @return $this
     */
    public function setMacroFileId($macro_file_id)
    {
        $this->container['macro_file_id'] = $macro_file_id;

        return $this;
    }

    /**
     * Gets macro_segment_id
     *
     * @return int
     */
    public function getMacroSegmentId()
    {
        return $this->container['macro_segment_id'];
    }

    /**
     * Sets macro_segment_id
     *
     * @param int $macro_segment_id Macro Pdf417 barcode's segment ID, which starts from 0, to MacroSegmentsCount - 1.
     *
     * @return $this
     */
    public function setMacroSegmentId($macro_segment_id)
    {
        $this->container['macro_segment_id'] = $macro_segment_id;

        return $this;
    }

    /**
     * Gets macro_segments_count
     *
     * @return int
     */
    public function getMacroSegmentsCount()
    {
        return $this->container['macro_segments_count'];
    }

    /**
     * Sets macro_segments_count
     *
     * @param int $macro_segments_count Macro Pdf417 barcode segments count.
     *
     * @return $this
     */
    public function setMacroSegmentsCount($macro_segments_count)
    {
        $this->container['macro_segments_count'] = $macro_segments_count;

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
     * Gets truncate
     *
     * @return bool
     */
    public function getTruncate()
    {
        return $this->container['truncate'];
    }

    /**
     * Sets truncate
     *
     * @param bool $truncate Whether Pdf417 symbology type of BarCode is truncated (to reduce space).
     *
     * @return $this
     */
    public function setTruncate($truncate)
    {
        $this->container['truncate'] = $truncate;

        return $this;
    }

    /**
     * Gets pdf417_eci_encoding
     *
     * @return \Aspose\BarCode\Model\ECIEncodings
     */
    public function getPdf417EciEncoding()
    {
        return $this->container['pdf417_eci_encoding'];
    }

    /**
     * Sets pdf417_eci_encoding
     *
     * @param \Aspose\BarCode\Model\ECIEncodings $pdf417_eci_encoding Extended Channel Interpretation Identifiers. It is used to tell the barcode reader details about the used references for encoding the data in the symbol. Current implementation consists all well known charset encodings.
     *
     * @return $this
     */
    public function setPdf417EciEncoding($pdf417_eci_encoding)
    {
        $this->container['pdf417_eci_encoding'] = $pdf417_eci_encoding;

        return $this;
    }

    /**
     * Gets is_reader_initialization
     *
     * @return bool
     */
    public function getIsReaderInitialization()
    {
        return $this->container['is_reader_initialization'];
    }

    /**
     * Sets is_reader_initialization
     *
     * @param bool $is_reader_initialization Used to instruct the reader to interpret the data contained within the symbol as programming for reader initialization
     *
     * @return $this
     */
    public function setIsReaderInitialization($is_reader_initialization)
    {
        $this->container['is_reader_initialization'] = $is_reader_initialization;

        return $this;
    }

    /**
     * Gets macro_time_stamp
     *
     * @return \DateTime
     */
    public function getMacroTimeStamp()
    {
        return $this->container['macro_time_stamp'];
    }

    /**
     * Sets macro_time_stamp
     *
     * @param \DateTime $macro_time_stamp Macro Pdf417 barcode time stamp
     *
     * @return $this
     */
    public function setMacroTimeStamp($macro_time_stamp)
    {
        $this->container['macro_time_stamp'] = $macro_time_stamp;

        return $this;
    }

    /**
     * Gets macro_sender
     *
     * @return string
     */
    public function getMacroSender()
    {
        return $this->container['macro_sender'];
    }

    /**
     * Sets macro_sender
     *
     * @param string $macro_sender Macro Pdf417 barcode sender name
     *
     * @return $this
     */
    public function setMacroSender($macro_sender)
    {
        $this->container['macro_sender'] = $macro_sender;

        return $this;
    }

    /**
     * Gets macro_file_size
     *
     * @return int
     */
    public function getMacroFileSize()
    {
        return $this->container['macro_file_size'];
    }

    /**
     * Sets macro_file_size
     *
     * @param int $macro_file_size Macro Pdf417 file size. The file size field contains the size in bytes of the entire source file
     *
     * @return $this
     */
    public function setMacroFileSize($macro_file_size)
    {
        $this->container['macro_file_size'] = $macro_file_size;

        return $this;
    }

    /**
     * Gets macro_checksum
     *
     * @return int
     */
    public function getMacroChecksum()
    {
        return $this->container['macro_checksum'];
    }

    /**
     * Sets macro_checksum
     *
     * @param int $macro_checksum Macro Pdf417 barcode checksum. The checksum field contains the value of the 16-bit (2 bytes) CRC checksum using the CCITT-16 polynomial
     *
     * @return $this
     */
    public function setMacroChecksum($macro_checksum)
    {
        $this->container['macro_checksum'] = $macro_checksum;

        return $this;
    }

    /**
     * Gets macro_file_name
     *
     * @return string
     */
    public function getMacroFileName()
    {
        return $this->container['macro_file_name'];
    }

    /**
     * Sets macro_file_name
     *
     * @param string $macro_file_name Macro Pdf417 barcode file name
     *
     * @return $this
     */
    public function setMacroFileName($macro_file_name)
    {
        $this->container['macro_file_name'] = $macro_file_name;

        return $this;
    }

    /**
     * Gets macro_addressee
     *
     * @return string
     */
    public function getMacroAddressee()
    {
        return $this->container['macro_addressee'];
    }

    /**
     * Sets macro_addressee
     *
     * @param string $macro_addressee Macro Pdf417 barcode addressee name
     *
     * @return $this
     */
    public function setMacroAddressee($macro_addressee)
    {
        $this->container['macro_addressee'] = $macro_addressee;

        return $this;
    }

    /**
     * Gets macro_eci_encoding
     *
     * @return \Aspose\BarCode\Model\ECIEncodings
     */
    public function getMacroEciEncoding()
    {
        return $this->container['macro_eci_encoding'];
    }

    /**
     * Sets macro_eci_encoding
     *
     * @param \Aspose\BarCode\Model\ECIEncodings $macro_eci_encoding Extended Channel Interpretation Identifiers. Applies for Macro PDF417 text fields.
     *
     * @return $this
     */
    public function setMacroEciEncoding($macro_eci_encoding)
    {
        $this->container['macro_eci_encoding'] = $macro_eci_encoding;

        return $this;
    }

    /**
     * Gets code128_emulation
     *
     * @return \Aspose\BarCode\Model\Code128Emulation
     */
    public function getCode128Emulation()
    {
        return $this->container['code128_emulation'];
    }

    /**
     * Sets code128_emulation
     *
     * @param \Aspose\BarCode\Model\Code128Emulation $code128_emulation DEPRECATED: This property is obsolete and will be removed in future releases. See samples of using new parameters on https://releases.aspose.com/barcode/net/release-notes/2023/aspose-barcode-for-net-23-10-release-notes/ Function codeword for Code 128 emulation. Applied for MicroPDF417 only. Ignored for PDF417 and MacroPDF417 barcodes.
     *
     * @return $this
     */
    public function setCode128Emulation($code128_emulation)
    {
        trigger_error('Property $code128_emulation is deprecated. This property is obsolete and will be removed in future releases. See samples of using new parameters on https://releases.aspose.com/barcode/net/release-notes/2023/aspose-barcode-for-net-23-10-release-notes/ Function codeword for Code 128 emulation. Applied for MicroPDF417 only. Ignored for PDF417 and MacroPDF417 barcodes.', E_USER_DEPRECATED);
        $this->container['code128_emulation'] = $code128_emulation;

        return $this;
    }

    /**
     * Gets is_code128_emulation
     *
     * @return bool
     */
    public function getIsCode128Emulation()
    {
        return $this->container['is_code128_emulation'];
    }

    /**
     * Sets is_code128_emulation
     *
     * @param bool $is_code128_emulation Can be used only with MicroPdf417 and encodes Code 128 emulation modes. Can encode FNC1 in second position modes 908 and 909, also can encode 910 and 911 which just indicate that recognized MicroPdf417 can be interpret as Code 128.
     *
     * @return $this
     */
    public function setIsCode128Emulation($is_code128_emulation)
    {
        $this->container['is_code128_emulation'] = $is_code128_emulation;

        return $this;
    }

    /**
     * Gets pdf417_macro_terminator
     *
     * @return \Aspose\BarCode\Model\Pdf417MacroTerminator
     */
    public function getPdf417MacroTerminator()
    {
        return $this->container['pdf417_macro_terminator'];
    }

    /**
     * Sets pdf417_macro_terminator
     *
     * @param \Aspose\BarCode\Model\Pdf417MacroTerminator $pdf417_macro_terminator Used to tell the encoder whether to add Macro PDF417 Terminator (codeword 922) to the segment. Applied only for Macro PDF417.
     *
     * @return $this
     */
    public function setPdf417MacroTerminator($pdf417_macro_terminator)
    {
        $this->container['pdf417_macro_terminator'] = $pdf417_macro_terminator;

        return $this;
    }

    /**
     * Gets is_linked
     *
     * @return bool
     */
    public function getIsLinked()
    {
        return $this->container['is_linked'];
    }

    /**
     * Sets is_linked
     *
     * @param bool $is_linked Defines linked modes with GS1MicroPdf417, MicroPdf417 and Pdf417 barcodes. With GS1MicroPdf417 symbology encodes 906, 907, 912, 913, 914, 915 “Linked” UCC/EAN-128 modes. With MicroPdf417 and Pdf417 symbologies encodes 918 linkage flag to associated linear component other than an EAN.UCC.
     *
     * @return $this
     */
    public function setIsLinked($is_linked)
    {
        $this->container['is_linked'] = $is_linked;

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
     * @param \Aspose\BarCode\Model\MacroCharacter $macro_characters Macro Characters 05 and 06 values are used to obtain more compact encoding in special modes. Can be used only with MicroPdf417 and encodes 916 and 917 MicroPdf417 modes. Default value: MacroCharacters.None.
     *
     * @return $this
     */
    public function setMacroCharacters($macro_characters)
    {
        $this->container['macro_characters'] = $macro_characters;

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
