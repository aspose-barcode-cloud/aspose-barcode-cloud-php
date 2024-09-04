<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Requests\GenerateRequestWrapper;
use Aspose\BarCode\Model\{EncodeBarcodeType, EncodeDataType, CodeLocation, BarcodeImageFormat};

$config = new Configuration();
$config->setClientId('ClientId from https://dashboard.aspose.cloud/applications');
$config->setClientSecret('Client Secret from https://dashboard.aspose.cloud/applications');
if (getenv("TEST_CONFIGURATION_ACCESS_TOKEN")) {
    $config->setAccessToken(getenv("TEST_CONFIGURATION_ACCESS_TOKEN"));
}

$request = new GenerateRequestWrapper(EncodeBarcodeType::QR, 'PHP SDK Test');
$request->image_format = BarcodeImageFormat::Png;
$request->text_location = CodeLocation::None;

$api = new GenerateApi(null, $config);
$response = $api->generate($request);

$type = 'image/png';
$size = $response->getSize();
header("Content-Type: $type");
header("Content-Length: $size");
echo $response->fread($size);
