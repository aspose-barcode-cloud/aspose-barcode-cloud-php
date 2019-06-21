# Aspose.BarCode Cloud SDK for PHP
Aspose.BarCode for Cloud is a REST API for Linear, 2D and postal barcode generation and recognition in the cloud. API recognizes and generates barcode images in a variety of formats. Barcode REST API allows to specify barcode image attributes like image width, height, border style and output image format in order to customize the generation process. Developers can also specify the barcode type and text attributes such as text location and font styles in order to suit the application requirements.

This repository contains Aspose.BarCode Cloud SDK for PHP source code. 


To use these SDKs, you will need App SID and App Key which can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) (free registration in Aspose Cloud is required for this).

## How to use the SDK?
You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/barcode-cloud-php) (recommended).

## Installation

## Via Composer:
*barcode-cloud-php* is available on Packagist as the
[`barcode-cloud-php`](https://packagist.org/packages/aspose/barcode-cloud-php) package. Run the following command:
```bash
composer require aspose/barcode-cloud-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require __DIR__ . '/vendor/autoload.php';
```

### Sample usage

```php
use Aspose\BarCode\Configuration;
use Aspose\BarCode\BarCodeApi;
use Aspose\BarCode\Requests\BarCodeGetBarCodeGenerateRequest;


$config = new Configuration();
$config->setAppKey("your_key");
$config->setAppSid("your_sid");

$request = new BarCodeGetBarCodeGenerateRequest();
$request->type = "QR";
$request->text = "PHP SDK Test";
$request->format = "png";

$api = new BarCodeApi(null, $config);
$response = $api->BarCodeGetBarCodeGenerate($request);

$type = 'image/png';
$size = $response->getSize();
header('Content-Type:'.$type);
header('Content-Length: ' . $size);
echo $response->fread($size);
```

# Licensing
All Aspose.BarCode for Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

# Resources
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/barcode/cloud)
+ [**Documentation**](https://docs.aspose.cloud/display/barcodecloud/Home)
+ [**Free Support Forum**](https://forum.aspose.cloud/c/barcode)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose-barcode-product-family/)
