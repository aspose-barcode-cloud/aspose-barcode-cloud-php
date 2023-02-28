<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\BarcodeApi;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;

$config = new Configuration();
$config->setClientId('ClientId from https://dashboard.aspose.cloud/applications');
$config->setClientSecret('Client Secret from https://dashboard.aspose.cloud/applications');
if (getenv("TEST_CONFIGURATION_ACCESS_TOKEN")) {
    $config->setAccessToken(getenv("TEST_CONFIGURATION_ACCESS_TOKEN"));
}

$request = new GetBarcodeGenerateRequest(EncodeBarcodeType::QR, 'PHP SDK Test');
$request->format = 'png';

$api = new BarcodeApi(null, $config);
$response = $api->GetBarCodeGenerate($request);

$type = 'image/png';
$size = $response->getSize();
header("Content-Type: $type");
header("Content-Length: $size");
echo $response->fread($size);
