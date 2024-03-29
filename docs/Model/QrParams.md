# QrParams

QR parameters.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**aspect_ratio** | **double** | Height/Width ratio of 2D BarCode module. | [optional] 
**text_encoding** | **string** | DEPRECATED: This property is obsolete and will be removed in future releases. Unicode symbols detection and encoding will be processed in Auto mode with Extended Channel Interpretation charset designator. Using of own encodings requires manual CodeText encoding into byte[] array.  Sets the encoding of codetext. | [optional] 
**encode_type** | [**\Aspose\BarCode\Model\QREncodeType**](QREncodeType.md) | QR / MicroQR selector mode. Select ForceQR for standard QR symbols, Auto for MicroQR. | [optional] 
**eci_encoding** | [**\Aspose\BarCode\Model\ECIEncodings**](ECIEncodings.md) | Extended Channel Interpretation Identifiers. It is used to tell the barcode reader details about the used references for encoding the data in the symbol. Current implementation consists all well known charset encodings. | [optional] 
**encode_mode** | [**\Aspose\BarCode\Model\QREncodeMode**](QREncodeMode.md) | QR symbology type of BarCode&#39;s encoding mode. Default value: QREncodeMode.Auto. | [optional] 
**error_level** | [**\Aspose\BarCode\Model\QRErrorLevel**](QRErrorLevel.md) | Level of Reed-Solomon error correction for QR barcode. From low to high: LevelL, LevelM, LevelQ, LevelH. see QRErrorLevel. | [optional] 
**version** | [**\Aspose\BarCode\Model\QRVersion**](QRVersion.md) | Version of QR Code. From Version1 to Version40 for QR code and from M1 to M4 for MicroQr. Default value is QRVersion.Auto. | [optional] 
**structured_append** | [**\Aspose\BarCode\Model\StructuredAppend**](StructuredAppend.md) | QR structured append parameters. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


