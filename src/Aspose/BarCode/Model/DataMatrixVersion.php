<?php

declare(strict_types=1);

namespace Aspose\BarCode\Model;

use Aspose\BarCode\ObjectSerializer;

/**
 * DataMatrixVersion
 *
 * @description
 */
class DataMatrixVersion
{
    /// <summary>
    /// Enum value Auto
    /// </summary>
    public const Auto =  "Auto";

    /// <summary>
    /// Enum value RowsColumns
    /// </summary>
    public const RowsColumns =  "RowsColumns";

    /// <summary>
    /// Enum value ECC000_9x9
    /// </summary>
    public const ECC000_9x9 =  "ECC000_9x9";

    /// <summary>
    /// Enum value ECC000_050_11x11
    /// </summary>
    public const ECC000_050_11x11 =  "ECC000_050_11x11";

    /// <summary>
    /// Enum value ECC000_100_13x13
    /// </summary>
    public const ECC000_100_13x13 =  "ECC000_100_13x13";

    /// <summary>
    /// Enum value ECC000_100_15x15
    /// </summary>
    public const ECC000_100_15x15 =  "ECC000_100_15x15";

    /// <summary>
    /// Enum value ECC000_140_17x17
    /// </summary>
    public const ECC000_140_17x17 =  "ECC000_140_17x17";

    /// <summary>
    /// Enum value ECC000_140_19x19
    /// </summary>
    public const ECC000_140_19x19 =  "ECC000_140_19x19";

    /// <summary>
    /// Enum value ECC000_140_21x21
    /// </summary>
    public const ECC000_140_21x21 =  "ECC000_140_21x21";

    /// <summary>
    /// Enum value ECC000_140_23x23
    /// </summary>
    public const ECC000_140_23x23 =  "ECC000_140_23x23";

    /// <summary>
    /// Enum value ECC000_140_25x25
    /// </summary>
    public const ECC000_140_25x25 =  "ECC000_140_25x25";

    /// <summary>
    /// Enum value ECC000_140_27x27
    /// </summary>
    public const ECC000_140_27x27 =  "ECC000_140_27x27";

    /// <summary>
    /// Enum value ECC000_140_29x29
    /// </summary>
    public const ECC000_140_29x29 =  "ECC000_140_29x29";

    /// <summary>
    /// Enum value ECC000_140_31x31
    /// </summary>
    public const ECC000_140_31x31 =  "ECC000_140_31x31";

    /// <summary>
    /// Enum value ECC000_140_33x33
    /// </summary>
    public const ECC000_140_33x33 =  "ECC000_140_33x33";

    /// <summary>
    /// Enum value ECC000_140_35x35
    /// </summary>
    public const ECC000_140_35x35 =  "ECC000_140_35x35";

    /// <summary>
    /// Enum value ECC000_140_37x37
    /// </summary>
    public const ECC000_140_37x37 =  "ECC000_140_37x37";

    /// <summary>
    /// Enum value ECC000_140_39x39
    /// </summary>
    public const ECC000_140_39x39 =  "ECC000_140_39x39";

    /// <summary>
    /// Enum value ECC000_140_41x41
    /// </summary>
    public const ECC000_140_41x41 =  "ECC000_140_41x41";

    /// <summary>
    /// Enum value ECC000_140_43x43
    /// </summary>
    public const ECC000_140_43x43 =  "ECC000_140_43x43";

    /// <summary>
    /// Enum value ECC000_140_45x45
    /// </summary>
    public const ECC000_140_45x45 =  "ECC000_140_45x45";

    /// <summary>
    /// Enum value ECC000_140_47x47
    /// </summary>
    public const ECC000_140_47x47 =  "ECC000_140_47x47";

    /// <summary>
    /// Enum value ECC000_140_49x49
    /// </summary>
    public const ECC000_140_49x49 =  "ECC000_140_49x49";

    /// <summary>
    /// Enum value ECC200_10x10
    /// </summary>
    public const ECC200_10x10 =  "ECC200_10x10";

    /// <summary>
    /// Enum value ECC200_12x12
    /// </summary>
    public const ECC200_12x12 =  "ECC200_12x12";

    /// <summary>
    /// Enum value ECC200_14x14
    /// </summary>
    public const ECC200_14x14 =  "ECC200_14x14";

    /// <summary>
    /// Enum value ECC200_16x16
    /// </summary>
    public const ECC200_16x16 =  "ECC200_16x16";

    /// <summary>
    /// Enum value ECC200_18x18
    /// </summary>
    public const ECC200_18x18 =  "ECC200_18x18";

    /// <summary>
    /// Enum value ECC200_20x20
    /// </summary>
    public const ECC200_20x20 =  "ECC200_20x20";

    /// <summary>
    /// Enum value ECC200_22x22
    /// </summary>
    public const ECC200_22x22 =  "ECC200_22x22";

    /// <summary>
    /// Enum value ECC200_24x24
    /// </summary>
    public const ECC200_24x24 =  "ECC200_24x24";

    /// <summary>
    /// Enum value ECC200_26x26
    /// </summary>
    public const ECC200_26x26 =  "ECC200_26x26";

    /// <summary>
    /// Enum value ECC200_32x32
    /// </summary>
    public const ECC200_32x32 =  "ECC200_32x32";

    /// <summary>
    /// Enum value ECC200_36x36
    /// </summary>
    public const ECC200_36x36 =  "ECC200_36x36";

    /// <summary>
    /// Enum value ECC200_40x40
    /// </summary>
    public const ECC200_40x40 =  "ECC200_40x40";

    /// <summary>
    /// Enum value ECC200_44x44
    /// </summary>
    public const ECC200_44x44 =  "ECC200_44x44";

    /// <summary>
    /// Enum value ECC200_48x48
    /// </summary>
    public const ECC200_48x48 =  "ECC200_48x48";

    /// <summary>
    /// Enum value ECC200_52x52
    /// </summary>
    public const ECC200_52x52 =  "ECC200_52x52";

    /// <summary>
    /// Enum value ECC200_64x64
    /// </summary>
    public const ECC200_64x64 =  "ECC200_64x64";

    /// <summary>
    /// Enum value ECC200_72x72
    /// </summary>
    public const ECC200_72x72 =  "ECC200_72x72";

    /// <summary>
    /// Enum value ECC200_80x80
    /// </summary>
    public const ECC200_80x80 =  "ECC200_80x80";

    /// <summary>
    /// Enum value ECC200_88x88
    /// </summary>
    public const ECC200_88x88 =  "ECC200_88x88";

    /// <summary>
    /// Enum value ECC200_96x96
    /// </summary>
    public const ECC200_96x96 =  "ECC200_96x96";

    /// <summary>
    /// Enum value ECC200_104x104
    /// </summary>
    public const ECC200_104x104 =  "ECC200_104x104";

    /// <summary>
    /// Enum value ECC200_120x120
    /// </summary>
    public const ECC200_120x120 =  "ECC200_120x120";

    /// <summary>
    /// Enum value ECC200_132x132
    /// </summary>
    public const ECC200_132x132 =  "ECC200_132x132";

    /// <summary>
    /// Enum value ECC200_144x144
    /// </summary>
    public const ECC200_144x144 =  "ECC200_144x144";

    /// <summary>
    /// Enum value ECC200_8x18
    /// </summary>
    public const ECC200_8x18 =  "ECC200_8x18";

    /// <summary>
    /// Enum value ECC200_8x32
    /// </summary>
    public const ECC200_8x32 =  "ECC200_8x32";

    /// <summary>
    /// Enum value ECC200_12x26
    /// </summary>
    public const ECC200_12x26 =  "ECC200_12x26";

    /// <summary>
    /// Enum value ECC200_12x36
    /// </summary>
    public const ECC200_12x36 =  "ECC200_12x36";

    /// <summary>
    /// Enum value ECC200_16x36
    /// </summary>
    public const ECC200_16x36 =  "ECC200_16x36";

    /// <summary>
    /// Enum value ECC200_16x48
    /// </summary>
    public const ECC200_16x48 =  "ECC200_16x48";

    /// <summary>
    /// Enum value DMRE_8x48
    /// </summary>
    public const DMRE_8x48 =  "DMRE_8x48";

    /// <summary>
    /// Enum value DMRE_8x64
    /// </summary>
    public const DMRE_8x64 =  "DMRE_8x64";

    /// <summary>
    /// Enum value DMRE_8x80
    /// </summary>
    public const DMRE_8x80 =  "DMRE_8x80";

    /// <summary>
    /// Enum value DMRE_8x96
    /// </summary>
    public const DMRE_8x96 =  "DMRE_8x96";

    /// <summary>
    /// Enum value DMRE_8x120
    /// </summary>
    public const DMRE_8x120 =  "DMRE_8x120";

    /// <summary>
    /// Enum value DMRE_8x144
    /// </summary>
    public const DMRE_8x144 =  "DMRE_8x144";

    /// <summary>
    /// Enum value DMRE_12x64
    /// </summary>
    public const DMRE_12x64 =  "DMRE_12x64";

    /// <summary>
    /// Enum value DMRE_12x88
    /// </summary>
    public const DMRE_12x88 =  "DMRE_12x88";

    /// <summary>
    /// Enum value DMRE_16x64
    /// </summary>
    public const DMRE_16x64 =  "DMRE_16x64";

    /// <summary>
    /// Enum value DMRE_20x36
    /// </summary>
    public const DMRE_20x36 =  "DMRE_20x36";

    /// <summary>
    /// Enum value DMRE_20x44
    /// </summary>
    public const DMRE_20x44 =  "DMRE_20x44";

    /// <summary>
    /// Enum value DMRE_20x64
    /// </summary>
    public const DMRE_20x64 =  "DMRE_20x64";

    /// <summary>
    /// Enum value DMRE_22x48
    /// </summary>
    public const DMRE_22x48 =  "DMRE_22x48";

    /// <summary>
    /// Enum value DMRE_24x48
    /// </summary>
    public const DMRE_24x48 =  "DMRE_24x48";

    /// <summary>
    /// Enum value DMRE_24x64
    /// </summary>
    public const DMRE_24x64 =  "DMRE_24x64";

    /// <summary>
    /// Enum value DMRE_26x40
    /// </summary>
    public const DMRE_26x40 =  "DMRE_26x40";

    /// <summary>
    /// Enum value DMRE_26x48
    /// </summary>
    public const DMRE_26x48 =  "DMRE_26x48";

    /// <summary>
    /// Enum value DMRE_26x64
    /// </summary>
    public const DMRE_26x64 =  "DMRE_26x64";

}
