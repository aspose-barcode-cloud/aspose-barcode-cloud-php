<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\BarcodeImageParams;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Requests\GenerateMultipartRequestWrapper;

function makeConfiguration(): Configuration
{
    $config = new Configuration();

    $envToken = getenv("TEST_CONFIGURATION_ACCESS_TOKEN");
    if (empty($envToken)) {
        $config->setClientId("Client Id from https://dashboard.aspose.cloud/applications");
        $config->setClientSecret("Client Secret from https://dashboard.aspose.cloud/applications");
    } else {
        $config->setAccessToken($envToken);
    }

    return $config;
}

function main(): void
{
    $fileName = __DIR__ . '/../testdata/Aztec.png';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $request = new GenerateMultipartRequestWrapper(EncodeBarcodeType::Aztec, "Aspose.BarCode.Cloud");
    $request->image_height = 200;
    $request->image_width = 200;
    $request->resolution = 150;
    $request->units = 'Point';
   
    $generated = $generateApi->generateMultipart($request);

    file_put_contents($fileName, $generated->fread($generated->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();