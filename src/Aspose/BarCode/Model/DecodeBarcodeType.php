<?php declare(strict_types=1);
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DecodeBarcodeType.php">
 *   Copyright (c) 2020 Aspose Pty Ltd
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
 * DecodeBarcodeType
 *
 * @description See DecodeType
 */
class DecodeBarcodeType
{

  /// <summary>
    /// Enum value all
    /// </summary>
    const all =  "all";
  
    /// <summary>
    /// Enum value AustraliaPost
    /// </summary>
    const AustraliaPost =  "AustraliaPost";
  
    /// <summary>
    /// Enum value Aztec
    /// </summary>
    const Aztec =  "Aztec";
  
    /// <summary>
    /// Enum value ISBN
    /// </summary>
    const ISBN =  "ISBN";
  
    /// <summary>
    /// Enum value Codabar
    /// </summary>
    const Codabar =  "Codabar";
  
    /// <summary>
    /// Enum value Code11
    /// </summary>
    const Code11 =  "Code11";
  
    /// <summary>
    /// Enum value Code128
    /// </summary>
    const Code128 =  "Code128";
  
    /// <summary>
    /// Enum value GS1Code128
    /// </summary>
    const GS1Code128 =  "GS1Code128";
  
    /// <summary>
    /// Enum value Code39Extended
    /// </summary>
    const Code39Extended =  "Code39Extended";
  
    /// <summary>
    /// Enum value Code39Standard
    /// </summary>
    const Code39Standard =  "Code39Standard";
  
    /// <summary>
    /// Enum value Code93Extended
    /// </summary>
    const Code93Extended =  "Code93Extended";
  
    /// <summary>
    /// Enum value Code93Standard
    /// </summary>
    const Code93Standard =  "Code93Standard";
  
    /// <summary>
    /// Enum value DataMatrix
    /// </summary>
    const DataMatrix =  "DataMatrix";
  
    /// <summary>
    /// Enum value DeutschePostIdentcode
    /// </summary>
    const DeutschePostIdentcode =  "DeutschePostIdentcode";
  
    /// <summary>
    /// Enum value DeutschePostLeitcode
    /// </summary>
    const DeutschePostLeitcode =  "DeutschePostLeitcode";
  
    /// <summary>
    /// Enum value EAN13
    /// </summary>
    const EAN13 =  "EAN13";
  
    /// <summary>
    /// Enum value EAN14
    /// </summary>
    const EAN14 =  "EAN14";
  
    /// <summary>
    /// Enum value EAN8
    /// </summary>
    const EAN8 =  "EAN8";
  
    /// <summary>
    /// Enum value IATA2of5
    /// </summary>
    const IATA2of5 =  "IATA2of5";
  
    /// <summary>
    /// Enum value Interleaved2of5
    /// </summary>
    const Interleaved2of5 =  "Interleaved2of5";
  
    /// <summary>
    /// Enum value ISSN
    /// </summary>
    const ISSN =  "ISSN";
  
    /// <summary>
    /// Enum value ISMN
    /// </summary>
    const ISMN =  "ISMN";
  
    /// <summary>
    /// Enum value ItalianPost25
    /// </summary>
    const ItalianPost25 =  "ItalianPost25";
  
    /// <summary>
    /// Enum value ITF14
    /// </summary>
    const ITF14 =  "ITF14";
  
    /// <summary>
    /// Enum value ITF6
    /// </summary>
    const ITF6 =  "ITF6";
  
    /// <summary>
    /// Enum value MacroPdf417
    /// </summary>
    const MacroPdf417 =  "MacroPdf417";
  
    /// <summary>
    /// Enum value Matrix2of5
    /// </summary>
    const Matrix2of5 =  "Matrix2of5";
  
    /// <summary>
    /// Enum value MSI
    /// </summary>
    const MSI =  "MSI";
  
    /// <summary>
    /// Enum value OneCode
    /// </summary>
    const OneCode =  "OneCode";
  
    /// <summary>
    /// Enum value OPC
    /// </summary>
    const OPC =  "OPC";
  
    /// <summary>
    /// Enum value PatchCode
    /// </summary>
    const PatchCode =  "PatchCode";
  
    /// <summary>
    /// Enum value Pdf417
    /// </summary>
    const Pdf417 =  "Pdf417";
  
    /// <summary>
    /// Enum value MicroPdf417
    /// </summary>
    const MicroPdf417 =  "MicroPdf417";
  
    /// <summary>
    /// Enum value Planet
    /// </summary>
    const Planet =  "Planet";
  
    /// <summary>
    /// Enum value Postnet
    /// </summary>
    const Postnet =  "Postnet";
  
    /// <summary>
    /// Enum value PZN
    /// </summary>
    const PZN =  "PZN";
  
    /// <summary>
    /// Enum value QR
    /// </summary>
    const QR =  "QR";
  
    /// <summary>
    /// Enum value MicroQR
    /// </summary>
    const MicroQR =  "MicroQR";
  
    /// <summary>
    /// Enum value RM4SCC
    /// </summary>
    const RM4SCC =  "RM4SCC";
  
    /// <summary>
    /// Enum value SCC14
    /// </summary>
    const SCC14 =  "SCC14";
  
    /// <summary>
    /// Enum value SSCC18
    /// </summary>
    const SSCC18 =  "SSCC18";
  
    /// <summary>
    /// Enum value Standard2of5
    /// </summary>
    const Standard2of5 =  "Standard2of5";
  
    /// <summary>
    /// Enum value Supplement
    /// </summary>
    const Supplement =  "Supplement";
  
    /// <summary>
    /// Enum value UPCA
    /// </summary>
    const UPCA =  "UPCA";
  
    /// <summary>
    /// Enum value UPCE
    /// </summary>
    const UPCE =  "UPCE";
  
    /// <summary>
    /// Enum value VIN
    /// </summary>
    const VIN =  "VIN";
  
    /// <summary>
    /// Enum value Pharmacode
    /// </summary>
    const Pharmacode =  "Pharmacode";
  
    /// <summary>
    /// Enum value GS1DataMatrix
    /// </summary>
    const GS1DataMatrix =  "GS1DataMatrix";
  
    /// <summary>
    /// Enum value DatabarOmniDirectional
    /// </summary>
    const DatabarOmniDirectional =  "DatabarOmniDirectional";
  
    /// <summary>
    /// Enum value DatabarTruncated
    /// </summary>
    const DatabarTruncated =  "DatabarTruncated";
  
    /// <summary>
    /// Enum value DatabarLimited
    /// </summary>
    const DatabarLimited =  "DatabarLimited";
  
    /// <summary>
    /// Enum value DatabarExpanded
    /// </summary>
    const DatabarExpanded =  "DatabarExpanded";
  
    /// <summary>
    /// Enum value SwissPostParcel
    /// </summary>
    const SwissPostParcel =  "SwissPostParcel";
  
    /// <summary>
    /// Enum value AustralianPosteParcel
    /// </summary>
    const AustralianPosteParcel =  "AustralianPosteParcel";
  
    /// <summary>
    /// Enum value Code16K
    /// </summary>
    const Code16K =  "Code16K";
  
    /// <summary>
    /// Enum value DatabarStackedOmniDirectional
    /// </summary>
    const DatabarStackedOmniDirectional =  "DatabarStackedOmniDirectional";
  
    /// <summary>
    /// Enum value DatabarStacked
    /// </summary>
    const DatabarStacked =  "DatabarStacked";
  
    /// <summary>
    /// Enum value DatabarExpandedStacked
    /// </summary>
    const DatabarExpandedStacked =  "DatabarExpandedStacked";
  
    /// <summary>
    /// Enum value CompactPdf417
    /// </summary>
    const CompactPdf417 =  "CompactPdf417";
  
    /// <summary>
    /// Enum value GS1QR
    /// </summary>
    const GS1QR =  "GS1QR";
  
    /// <summary>
    /// Enum value MaxiCode
    /// </summary>
    const MaxiCode =  "MaxiCode";
  
    /// <summary>
    /// Enum value MicrE13B
    /// </summary>
    const MicrE13B =  "MicrE13B";
  
    /// <summary>
    /// Enum value Code32
    /// </summary>
    const Code32 =  "Code32";
  
    /// <summary>
    /// Enum value DataLogic2of5
    /// </summary>
    const DataLogic2of5 =  "DataLogic2of5";
  
    /// <summary>
    /// Enum value DotCode
    /// </summary>
    const DotCode =  "DotCode";
  
    /// <summary>
    /// Enum value DutchKIX
    /// </summary>
    const DutchKIX =  "DutchKIX";
  
    /// <summary>
    /// Enum value CodablockF
    /// </summary>
    const CodablockF =  "CodablockF";
}
