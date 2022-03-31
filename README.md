# Aspose.BarCode Cloud SDK for PHP

| WARNING: **Update SDK to version >= 21.9.0**: All SDK version < 21.9.0 will stop working soon! |
| ---------------------------------------------------------------------------------------------- |

[![License](https://img.shields.io/github/license/aspose-barcode-cloud/aspose-barcode-cloud-php)](LICENSE)
[![PHP Composer](https://github.com/aspose-barcode-cloud/aspose-barcode-cloud-php/actions/workflows/php.yml/badge.svg)](https://github.com/aspose-barcode-cloud/aspose-barcode-cloud-php/actions/workflows/php.yml)
[![Packagist Version](https://img.shields.io/packagist/v/aspose/barcode-cloud-php)](https://packagist.org/packages/aspose/barcode-cloud-php)

- API version: 3.0
- Package version: 22.3.0

## Demo applications

[Scan QR](https://products.aspose.app/barcode/scanqr) | [Generate Barcode](https://products.aspose.app/barcode/generate) | [Recognize Barcode](https://products.aspose.app/barcode/recognize) | [Embed Barcode](https://products.aspose.app/barcode/embed)
:---: | :---: | :---: | :---:
[![ScanQR](https://products.aspose.app/barcode/scanqr/img/aspose_scanqr-app-48.png)](https://products.aspose.app/barcode/scanqr) | [![Generate](https://products.aspose.app/barcode/generate/img/aspose_generate-app-48.png)](https://products.aspose.app/barcode/generate) | [![Recognize](https://products.aspose.app/barcode/recognize/img/aspose_recognize-app-48.png)](https://products.aspose.app/barcode/recognize) | [![Embed](https://products.aspose.app/barcode/embed/img/aspose_embed-app-48.png)](https://products.aspose.app/barcode/embed)

[Aspose.BarCode for Cloud](https://products.aspose.cloud/barcode/) is a REST API for Linear, 2D and postal barcode generation and recognition in the cloud. API recognizes and generates barcode images in a variety of formats. Barcode REST API allows to specify barcode image attributes like image width, height, border style and output image format in order to customize the generation process. Developers can also specify the barcode type and text attributes such as text location and font styles in order to suit the application requirements.

This repository contains Aspose.BarCode Cloud SDK for PHP source code.

To use these SDKs, you will need Client Id and Client Secret which can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/applications) (free registration in Aspose Cloud is required for this).

## How to use the SDK

You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/barcode-cloud-php) (recommended).

## Installation

### Via Composer

*barcode-cloud-php* is available on Packagist as the
[`barcode-cloud-php`](https://packagist.org/packages/aspose/barcode-cloud-php) package. Run the following command:

```sh
composer require aspose/barcode-cloud-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require __DIR__ . '/vendor/autoload.php';
```

### Sample usage

```php
use Aspose\BarCode\Configuration;
use Aspose\BarCode\BarcodeApi;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;

$config = new Configuration();
$config->setClientId('Client Id from https://dashboard.aspose.cloud/applications');
$config->setClientSecret('Client Secret from https://dashboard.aspose.cloud/applications');

$request = new GetBarcodeGenerateRequest(EncodeBarcodeType::QR, 'PHP SDK Test');
$request->format = 'png';

$api = new BarcodeApi(null, $config);
$response = $api->GetBarCodeGenerate($request);

$type = 'image/png';
$size = $response->getSize();
header("Content-Type: $type");
header("Content-Length: $size");
echo $response->fread($size);
```

## Licensing

All Aspose.BarCode for Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

## Resources

- [**Website**](https://www.aspose.cloud)
- [**Product Home**](https://products.aspose.cloud/barcode/)
- [**Documentation**](https://docs.aspose.cloud/barcode/)
- [**Free Support Forum**](https://forum.aspose.cloud/c/barcode)
- [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)
- [**Blog**](https://blog.aspose.cloud/category/barcode/)

## Documentation for API Endpoints

All URIs are relative to *<https://api.aspose.cloud/v3.0>*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BarcodeApi* | [**getBarcodeGenerate**](docs/Api/BarcodeApi.md#getbarcodegenerate) | **GET** /barcode/generate | Generate barcode.
*BarcodeApi* | [**getBarcodeRecognize**](docs/Api/BarcodeApi.md#getbarcoderecognize) | **GET** /barcode/{name}/recognize | Recognize barcode from a file on server.
*BarcodeApi* | [**postBarcodeRecognizeFromUrlOrContent**](docs/Api/BarcodeApi.md#postbarcoderecognizefromurlorcontent) | **POST** /barcode/recognize | Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image or encoded with base64.
*BarcodeApi* | [**postGenerateMultiple**](docs/Api/BarcodeApi.md#postgeneratemultiple) | **POST** /barcode/generateMultiple | Generate multiple barcodes and return in response stream
*BarcodeApi* | [**putBarcodeGenerateFile**](docs/Api/BarcodeApi.md#putbarcodegeneratefile) | **PUT** /barcode/{name}/generate | Generate barcode and save on server (from query params or from file with json or xml content)
*BarcodeApi* | [**putBarcodeRecognizeFromBody**](docs/Api/BarcodeApi.md#putbarcoderecognizefrombody) | **PUT** /barcode/{name}/recognize | Recognition of a barcode from file on server with parameters in body.
*BarcodeApi* | [**putGenerateMultiple**](docs/Api/BarcodeApi.md#putgeneratemultiple) | **PUT** /barcode/{name}/generateMultiple | Generate image with multiple barcodes and put new file on server
*FileApi* | [**copyFile**](docs/Api/FileApi.md#copyfile) | **PUT** /barcode/storage/file/copy/{srcPath} | Copy file
*FileApi* | [**deleteFile**](docs/Api/FileApi.md#deletefile) | **DELETE** /barcode/storage/file/{path} | Delete file
*FileApi* | [**downloadFile**](docs/Api/FileApi.md#downloadfile) | **GET** /barcode/storage/file/{path} | Download file
*FileApi* | [**moveFile**](docs/Api/FileApi.md#movefile) | **PUT** /barcode/storage/file/move/{srcPath} | Move file
*FileApi* | [**uploadFile**](docs/Api/FileApi.md#uploadfile) | **PUT** /barcode/storage/file/{path} | Upload file
*FolderApi* | [**copyFolder**](docs/Api/FolderApi.md#copyfolder) | **PUT** /barcode/storage/folder/copy/{srcPath} | Copy folder
*FolderApi* | [**createFolder**](docs/Api/FolderApi.md#createfolder) | **PUT** /barcode/storage/folder/{path} | Create the folder
*FolderApi* | [**deleteFolder**](docs/Api/FolderApi.md#deletefolder) | **DELETE** /barcode/storage/folder/{path} | Delete folder
*FolderApi* | [**getFilesList**](docs/Api/FolderApi.md#getfileslist) | **GET** /barcode/storage/folder/{path} | Get all files and folders within a folder
*FolderApi* | [**moveFolder**](docs/Api/FolderApi.md#movefolder) | **PUT** /barcode/storage/folder/move/{srcPath} | Move folder
*StorageApi* | [**getDiscUsage**](docs/Api/StorageApi.md#getdiscusage) | **GET** /barcode/storage/disc | Get disc usage
*StorageApi* | [**getFileVersions**](docs/Api/StorageApi.md#getfileversions) | **GET** /barcode/storage/version/{path} | Get file versions
*StorageApi* | [**objectExists**](docs/Api/StorageApi.md#objectexists) | **GET** /barcode/storage/exist/{path} | Check if file or folder exists
*StorageApi* | [**storageExists**](docs/Api/StorageApi.md#storageexists) | **GET** /barcode/storage/{storageName}/exist | Check if storage exists

## Documentation For Models

- [ApiError](docs/Model/ApiError.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [AustralianPostParams](docs/Model/AustralianPostParams.md)
- [AutoSizeMode](docs/Model/AutoSizeMode.md)
- [AvailableGraphicsUnit](docs/Model/AvailableGraphicsUnit.md)
- [AztecParams](docs/Model/AztecParams.md)
- [AztecSymbolMode](docs/Model/AztecSymbolMode.md)
- [BarcodeResponse](docs/Model/BarcodeResponse.md)
- [BarcodeResponseList](docs/Model/BarcodeResponseList.md)
- [BorderDashStyle](docs/Model/BorderDashStyle.md)
- [CaptionParams](docs/Model/CaptionParams.md)
- [ChecksumValidation](docs/Model/ChecksumValidation.md)
- [CodabarChecksumMode](docs/Model/CodabarChecksumMode.md)
- [CodabarParams](docs/Model/CodabarParams.md)
- [CodabarSymbol](docs/Model/CodabarSymbol.md)
- [CodablockParams](docs/Model/CodablockParams.md)
- [Code128Emulation](docs/Model/Code128Emulation.md)
- [Code16KParams](docs/Model/Code16KParams.md)
- [CodeLocation](docs/Model/CodeLocation.md)
- [CouponParams](docs/Model/CouponParams.md)
- [CustomerInformationInterpretingType](docs/Model/CustomerInformationInterpretingType.md)
- [DataBarParams](docs/Model/DataBarParams.md)
- [DataMatrixEccType](docs/Model/DataMatrixEccType.md)
- [DataMatrixEncodeMode](docs/Model/DataMatrixEncodeMode.md)
- [DataMatrixParams](docs/Model/DataMatrixParams.md)
- [DecodeBarcodeType](docs/Model/DecodeBarcodeType.md)
- [DiscUsage](docs/Model/DiscUsage.md)
- [DotCodeParams](docs/Model/DotCodeParams.md)
- [ECIEncodings](docs/Model/ECIEncodings.md)
- [EnableChecksum](docs/Model/EnableChecksum.md)
- [EncodeBarcodeType](docs/Model/EncodeBarcodeType.md)
- [Error](docs/Model/Error.md)
- [ErrorDetails](docs/Model/ErrorDetails.md)
- [FileVersions](docs/Model/FileVersions.md)
- [FilesList](docs/Model/FilesList.md)
- [FilesUploadResult](docs/Model/FilesUploadResult.md)
- [FontMode](docs/Model/FontMode.md)
- [FontParams](docs/Model/FontParams.md)
- [FontStyle](docs/Model/FontStyle.md)
- [GeneratorParams](docs/Model/GeneratorParams.md)
- [GeneratorParamsList](docs/Model/GeneratorParamsList.md)
- [ITF14BorderType](docs/Model/ITF14BorderType.md)
- [ITFParams](docs/Model/ITFParams.md)
- [MacroCharacter](docs/Model/MacroCharacter.md)
- [MaxiCodeParams](docs/Model/MaxiCodeParams.md)
- [ObjectExist](docs/Model/ObjectExist.md)
- [Padding](docs/Model/Padding.md)
- [PatchCodeParams](docs/Model/PatchCodeParams.md)
- [PatchFormat](docs/Model/PatchFormat.md)
- [Pdf417CompactionMode](docs/Model/Pdf417CompactionMode.md)
- [Pdf417ErrorLevel](docs/Model/Pdf417ErrorLevel.md)
- [Pdf417Params](docs/Model/Pdf417Params.md)
- [PostalParams](docs/Model/PostalParams.md)
- [PresetType](docs/Model/PresetType.md)
- [QREncodeMode](docs/Model/QREncodeMode.md)
- [QREncodeType](docs/Model/QREncodeType.md)
- [QRErrorLevel](docs/Model/QRErrorLevel.md)
- [QRVersion](docs/Model/QRVersion.md)
- [QrParams](docs/Model/QrParams.md)
- [ReaderParams](docs/Model/ReaderParams.md)
- [RegionPoint](docs/Model/RegionPoint.md)
- [ResultImageInfo](docs/Model/ResultImageInfo.md)
- [StorageExist](docs/Model/StorageExist.md)
- [StorageFile](docs/Model/StorageFile.md)
- [StructuredAppend](docs/Model/StructuredAppend.md)
- [TextAlignment](docs/Model/TextAlignment.md)
- [FileVersion](docs/Model/FileVersion.md)

