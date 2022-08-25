<?php

declare(strict_types=1);
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EncodeBarcodeType.php">
 *   Copyright (c) 2022 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

/*
 *
 */
//
// This source code was auto-generated by AsposeBarcodeCloudCodegen.
//

namespace Aspose\BarCode\Model;

use Aspose\BarCode\ObjectSerializer;

/*
 * EncodeBarcodeType
 *
 * @description See EncodeTypes
 */
class EncodeBarcodeType
{
    /// <summary>
    /// Enum value Codabar
    /// </summary>
    public const Codabar =  "Codabar";

    /// <summary>
    /// Enum value Code11
    /// </summary>
    public const Code11 =  "Code11";

    /// <summary>
    /// Enum value Code39Standard
    /// </summary>
    public const Code39Standard =  "Code39Standard";

    /// <summary>
    /// Enum value Code39Extended
    /// </summary>
    public const Code39Extended =  "Code39Extended";

    /// <summary>
    /// Enum value Code93Standard
    /// </summary>
    public const Code93Standard =  "Code93Standard";

    /// <summary>
    /// Enum value Code93Extended
    /// </summary>
    public const Code93Extended =  "Code93Extended";

    /// <summary>
    /// Enum value Code128
    /// </summary>
    public const Code128 =  "Code128";

    /// <summary>
    /// Enum value GS1Code128
    /// </summary>
    public const GS1Code128 =  "GS1Code128";

    /// <summary>
    /// Enum value EAN8
    /// </summary>
    public const EAN8 =  "EAN8";

    /// <summary>
    /// Enum value EAN13
    /// </summary>
    public const EAN13 =  "EAN13";

    /// <summary>
    /// Enum value EAN14
    /// </summary>
    public const EAN14 =  "EAN14";

    /// <summary>
    /// Enum value SCC14
    /// </summary>
    public const SCC14 =  "SCC14";

    /// <summary>
    /// Enum value SSCC18
    /// </summary>
    public const SSCC18 =  "SSCC18";

    /// <summary>
    /// Enum value UPCA
    /// </summary>
    public const UPCA =  "UPCA";

    /// <summary>
    /// Enum value UPCE
    /// </summary>
    public const UPCE =  "UPCE";

    /// <summary>
    /// Enum value ISBN
    /// </summary>
    public const ISBN =  "ISBN";

    /// <summary>
    /// Enum value ISSN
    /// </summary>
    public const ISSN =  "ISSN";

    /// <summary>
    /// Enum value ISMN
    /// </summary>
    public const ISMN =  "ISMN";

    /// <summary>
    /// Enum value Standard2of5
    /// </summary>
    public const Standard2of5 =  "Standard2of5";

    /// <summary>
    /// Enum value Interleaved2of5
    /// </summary>
    public const Interleaved2of5 =  "Interleaved2of5";

    /// <summary>
    /// Enum value Matrix2of5
    /// </summary>
    public const Matrix2of5 =  "Matrix2of5";

    /// <summary>
    /// Enum value ItalianPost25
    /// </summary>
    public const ItalianPost25 =  "ItalianPost25";

    /// <summary>
    /// Enum value IATA2of5
    /// </summary>
    public const IATA2of5 =  "IATA2of5";

    /// <summary>
    /// Enum value ITF14
    /// </summary>
    public const ITF14 =  "ITF14";

    /// <summary>
    /// Enum value ITF6
    /// </summary>
    public const ITF6 =  "ITF6";

    /// <summary>
    /// Enum value MSI
    /// </summary>
    public const MSI =  "MSI";

    /// <summary>
    /// Enum value VIN
    /// </summary>
    public const VIN =  "VIN";

    /// <summary>
    /// Enum value DeutschePostIdentcode
    /// </summary>
    public const DeutschePostIdentcode =  "DeutschePostIdentcode";

    /// <summary>
    /// Enum value DeutschePostLeitcode
    /// </summary>
    public const DeutschePostLeitcode =  "DeutschePostLeitcode";

    /// <summary>
    /// Enum value OPC
    /// </summary>
    public const OPC =  "OPC";

    /// <summary>
    /// Enum value PZN
    /// </summary>
    public const PZN =  "PZN";

    /// <summary>
    /// Enum value Code16K
    /// </summary>
    public const Code16K =  "Code16K";

    /// <summary>
    /// Enum value Pharmacode
    /// </summary>
    public const Pharmacode =  "Pharmacode";

    /// <summary>
    /// Enum value DataMatrix
    /// </summary>
    public const DataMatrix =  "DataMatrix";

    /// <summary>
    /// Enum value QR
    /// </summary>
    public const QR =  "QR";

    /// <summary>
    /// Enum value Aztec
    /// </summary>
    public const Aztec =  "Aztec";

    /// <summary>
    /// Enum value Pdf417
    /// </summary>
    public const Pdf417 =  "Pdf417";

    /// <summary>
    /// Enum value MacroPdf417
    /// </summary>
    public const MacroPdf417 =  "MacroPdf417";

    /// <summary>
    /// Enum value AustraliaPost
    /// </summary>
    public const AustraliaPost =  "AustraliaPost";

    /// <summary>
    /// Enum value Postnet
    /// </summary>
    public const Postnet =  "Postnet";

    /// <summary>
    /// Enum value Planet
    /// </summary>
    public const Planet =  "Planet";

    /// <summary>
    /// Enum value OneCode
    /// </summary>
    public const OneCode =  "OneCode";

    /// <summary>
    /// Enum value RM4SCC
    /// </summary>
    public const RM4SCC =  "RM4SCC";

    /// <summary>
    /// Enum value DatabarOmniDirectional
    /// </summary>
    public const DatabarOmniDirectional =  "DatabarOmniDirectional";

    /// <summary>
    /// Enum value DatabarTruncated
    /// </summary>
    public const DatabarTruncated =  "DatabarTruncated";

    /// <summary>
    /// Enum value DatabarLimited
    /// </summary>
    public const DatabarLimited =  "DatabarLimited";

    /// <summary>
    /// Enum value DatabarExpanded
    /// </summary>
    public const DatabarExpanded =  "DatabarExpanded";

    /// <summary>
    /// Enum value SingaporePost
    /// </summary>
    public const SingaporePost =  "SingaporePost";

    /// <summary>
    /// Enum value GS1DataMatrix
    /// </summary>
    public const GS1DataMatrix =  "GS1DataMatrix";

    /// <summary>
    /// Enum value AustralianPosteParcel
    /// </summary>
    public const AustralianPosteParcel =  "AustralianPosteParcel";

    /// <summary>
    /// Enum value SwissPostParcel
    /// </summary>
    public const SwissPostParcel =  "SwissPostParcel";

    /// <summary>
    /// Enum value PatchCode
    /// </summary>
    public const PatchCode =  "PatchCode";

    /// <summary>
    /// Enum value DatabarExpandedStacked
    /// </summary>
    public const DatabarExpandedStacked =  "DatabarExpandedStacked";

    /// <summary>
    /// Enum value DatabarStacked
    /// </summary>
    public const DatabarStacked =  "DatabarStacked";

    /// <summary>
    /// Enum value DatabarStackedOmniDirectional
    /// </summary>
    public const DatabarStackedOmniDirectional =  "DatabarStackedOmniDirectional";

    /// <summary>
    /// Enum value MicroPdf417
    /// </summary>
    public const MicroPdf417 =  "MicroPdf417";

    /// <summary>
    /// Enum value GS1QR
    /// </summary>
    public const GS1QR =  "GS1QR";

    /// <summary>
    /// Enum value MaxiCode
    /// </summary>
    public const MaxiCode =  "MaxiCode";

    /// <summary>
    /// Enum value Code32
    /// </summary>
    public const Code32 =  "Code32";

    /// <summary>
    /// Enum value DataLogic2of5
    /// </summary>
    public const DataLogic2of5 =  "DataLogic2of5";

    /// <summary>
    /// Enum value DotCode
    /// </summary>
    public const DotCode =  "DotCode";

    /// <summary>
    /// Enum value DutchKIX
    /// </summary>
    public const DutchKIX =  "DutchKIX";

    /// <summary>
    /// Enum value UpcaGs1Code128Coupon
    /// </summary>
    public const UpcaGs1Code128Coupon =  "UpcaGs1Code128Coupon";

    /// <summary>
    /// Enum value UpcaGs1DatabarCoupon
    /// </summary>
    public const UpcaGs1DatabarCoupon =  "UpcaGs1DatabarCoupon";

    /// <summary>
    /// Enum value CodablockF
    /// </summary>
    public const CodablockF =  "CodablockF";

    /// <summary>
    /// Enum value GS1CodablockF
    /// </summary>
    public const GS1CodablockF =  "GS1CodablockF";

    /// <summary>
    /// Enum value Mailmark
    /// </summary>
    public const Mailmark =  "Mailmark";
}
