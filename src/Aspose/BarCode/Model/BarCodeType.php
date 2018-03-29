<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarCodeType.php">
 *   Copyright (c) 2018 Aspose Pty Ltd
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

namespace Aspose\BarCode;
use Aspose\BarCode\ObjectSerializer;

/*
 * BarCodeType
 *
 * @description Supported types of barcode for generation.
 */
class BarCodeType
{

  /// <summary>
  /// Enum value AustraliaPost
  /// </summary>
  const AustraliaPost_ =  "AustraliaPost";
  
  /// <summary>
  /// Enum value AustralianPosteParcel
  /// </summary>
  const AustralianPosteParcel_ =  "AustralianPosteParcel";
  
  /// <summary>
  /// Enum value Aztec
  /// </summary>
  const Aztec_ =  "Aztec";
  
  /// <summary>
  /// Enum value BooklandEAN
  /// </summary>
  const BooklandEAN_ =  "BooklandEAN";
  
  /// <summary>
  /// Enum value Codabar
  /// </summary>
  const Codabar_ =  "Codabar";
  
  /// <summary>
  /// Enum value Code11
  /// </summary>
  const Code11_ =  "Code11";
  
  /// <summary>
  /// Enum value Code16K
  /// </summary>
  const Code16K_ =  "Code16K";
  
  /// <summary>
  /// Enum value Code128
  /// </summary>
  const Code128_ =  "Code128";
  
  /// <summary>
  /// Enum value CodablockF
  /// </summary>
  const CodablockF_ =  "CodablockF";
  
  /// <summary>
  /// Enum value Code39Extended
  /// </summary>
  const Code39Extended_ =  "Code39Extended";
  
  /// <summary>
  /// Enum value Code39Standard
  /// </summary>
  const Code39Standard_ =  "Code39Standard";
  
  /// <summary>
  /// Enum value Code93Extended
  /// </summary>
  const Code93Extended_ =  "Code93Extended";
  
  /// <summary>
  /// Enum value Code93Standard
  /// </summary>
  const Code93Standard_ =  "Code93Standard";
  
  /// <summary>
  /// Enum value CompactPdf417
  /// </summary>
  const CompactPdf417_ =  "CompactPdf417";
  
  /// <summary>
  /// Enum value DatabarOmniDirectional
  /// </summary>
  const DatabarOmniDirectional_ =  "DatabarOmniDirectional";
  
  /// <summary>
  /// Enum value DatabarTruncated
  /// </summary>
  const DatabarTruncated_ =  "DatabarTruncated";
  
  /// <summary>
  /// Enum value DatabarLimited
  /// </summary>
  const DatabarLimited_ =  "DatabarLimited";
  
  /// <summary>
  /// Enum value DatabarExpanded
  /// </summary>
  const DatabarExpanded_ =  "DatabarExpanded";
  
  /// <summary>
  /// Enum value DatabarExpandedStacked
  /// </summary>
  const DatabarExpandedStacked_ =  "DatabarExpandedStacked";
  
  /// <summary>
  /// Enum value DatabarStacked
  /// </summary>
  const DatabarStacked_ =  "DatabarStacked";
  
  /// <summary>
  /// Enum value DatabarStackedOmniDirectional
  /// </summary>
  const DatabarStackedOmniDirectional_ =  "DatabarStackedOmniDirectional";
  
  /// <summary>
  /// Enum value DataMatrix
  /// </summary>
  const DataMatrix_ =  "DataMatrix";
  
  /// <summary>
  /// Enum value DeutschePostIdentcode
  /// </summary>
  const DeutschePostIdentcode_ =  "DeutschePostIdentcode";
  
  /// <summary>
  /// Enum value DeutschePostLeitcode
  /// </summary>
  const DeutschePostLeitcode_ =  "DeutschePostLeitcode";
  
  /// <summary>
  /// Enum value EAN128
  /// </summary>
  const EAN128_ =  "EAN128";
  
  /// <summary>
  /// Enum value EAN13
  /// </summary>
  const EAN13_ =  "EAN13";
  
  /// <summary>
  /// Enum value EAN14
  /// </summary>
  const EAN14_ =  "EAN14";
  
  /// <summary>
  /// Enum value EAN8
  /// </summary>
  const EAN8_ =  "EAN8";
  
  /// <summary>
  /// Enum value GS1Code128
  /// </summary>
  const GS1Code128_ =  "GS1Code128";
  
  /// <summary>
  /// Enum value GS1CodablockF
  /// </summary>
  const GS1CodablockF_ =  "GS1CodablockF";
  
  /// <summary>
  /// Enum value GS1DataMatrix
  /// </summary>
  const GS1DataMatrix_ =  "GS1DataMatrix";
  
  /// <summary>
  /// Enum value GS1QR
  /// </summary>
  const GS1QR_ =  "GS1QR";
  
  /// <summary>
  /// Enum value IATA2of5
  /// </summary>
  const IATA2of5_ =  "IATA2of5";
  
  /// <summary>
  /// Enum value ISBN
  /// </summary>
  const ISBN_ =  "ISBN";
  
  /// <summary>
  /// Enum value ISMN
  /// </summary>
  const ISMN_ =  "ISMN";
  
  /// <summary>
  /// Enum value ISSN
  /// </summary>
  const ISSN_ =  "ISSN";
  
  /// <summary>
  /// Enum value ITF14
  /// </summary>
  const ITF14_ =  "ITF14";
  
  /// <summary>
  /// Enum value ITF6
  /// </summary>
  const ITF6_ =  "ITF6";
  
  /// <summary>
  /// Enum value Interleaved2of5
  /// </summary>
  const Interleaved2of5_ =  "Interleaved2of5";
  
  /// <summary>
  /// Enum value ItalianPost25
  /// </summary>
  const ItalianPost25_ =  "ItalianPost25";
  
  /// <summary>
  /// Enum value MaxiCode
  /// </summary>
  const MaxiCode_ =  "MaxiCode";
  
  /// <summary>
  /// Enum value MSI
  /// </summary>
  const MSI_ =  "MSI";
  
  /// <summary>
  /// Enum value MicroPdf417
  /// </summary>
  const MicroPdf417_ =  "MicroPdf417";
  
  /// <summary>
  /// Enum value MacroPdf417
  /// </summary>
  const MacroPdf417_ =  "MacroPdf417";
  
  /// <summary>
  /// Enum value Matrix2of5
  /// </summary>
  const Matrix2of5_ =  "Matrix2of5";
  
  /// <summary>
  /// Enum value MicroQR
  /// </summary>
  const MicroQR_ =  "MicroQR";
  
  /// <summary>
  /// Enum value OPC
  /// </summary>
  const OPC_ =  "OPC";
  
  /// <summary>
  /// Enum value OneCode
  /// </summary>
  const OneCode_ =  "OneCode";
  
  /// <summary>
  /// Enum value PZN
  /// </summary>
  const PZN_ =  "PZN";
  
  /// <summary>
  /// Enum value PatchCode
  /// </summary>
  const PatchCode_ =  "PatchCode";
  
  /// <summary>
  /// Enum value Pharmacode
  /// </summary>
  const Pharmacode_ =  "Pharmacode";
  
  /// <summary>
  /// Enum value Pdf417
  /// </summary>
  const Pdf417_ =  "Pdf417";
  
  /// <summary>
  /// Enum value Planet
  /// </summary>
  const Planet_ =  "Planet";
  
  /// <summary>
  /// Enum value Postnet
  /// </summary>
  const Postnet_ =  "Postnet";
  
  /// <summary>
  /// Enum value QR
  /// </summary>
  const QR_ =  "QR";
  
  /// <summary>
  /// Enum value RM4SCC
  /// </summary>
  const RM4SCC_ =  "RM4SCC";
  
  /// <summary>
  /// Enum value SingaporePost
  /// </summary>
  const SingaporePost_ =  "SingaporePost";
  
  /// <summary>
  /// Enum value SCC14
  /// </summary>
  const SCC14_ =  "SCC14";
  
  /// <summary>
  /// Enum value SSCC18
  /// </summary>
  const SSCC18_ =  "SSCC18";
  
  /// <summary>
  /// Enum value Standard2of5
  /// </summary>
  const Standard2of5_ =  "Standard2of5";
  
  /// <summary>
  /// Enum value SwissPostParcel
  /// </summary>
  const SwissPostParcel_ =  "SwissPostParcel";
  
  /// <summary>
  /// Enum value UPCA
  /// </summary>
  const UPCA_ =  "UPCA";
  
  /// <summary>
  /// Enum value UPCE
  /// </summary>
  const UPCE_ =  "UPCE";
  
  /// <summary>
  /// Enum value VIN
  /// </summary>
  const VIN_ =  "VIN";
  
  /// <summary>
  /// Enum value Code32
  /// </summary>
  const Code32_ =  "Code32";
  
  /// <summary>
  /// Enum value Datalogic2of5
  /// </summary>
  const Datalogic2of5_ =  "Datalogic2of5";
  
  /// <summary>
  /// Enum value DotCode
  /// </summary>
  const DotCode_ =  "DotCode";
  
  /// <summary>
  /// Enum value DutchKIX
  /// </summary>
  const DutchKIX_ =  "DutchKIX";
  
}

