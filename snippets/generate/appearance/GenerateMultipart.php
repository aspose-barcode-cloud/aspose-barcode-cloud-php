<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{BarcodeImageFormat};
use Aspose\BarCode\Requests\GenerateMultipartRequestWrapper;
use Aspose\BarCode\Model\EncodeBarcodeType;

function makeConfiguration(): Configuration
{
    $config = new Configuration();

    $envToken = getenv("TEST_CONFIGURATION_JWT_TOKEN");
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
    $fileName = __DIR__ . '/../testdata/Pdf417.svg';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $request = new GenerateMultipartRequestWrapper(
        EncodeBarcodeType::Pdf417,
        "Aspose.BarCode.Cloud"
    );
    $request->text_location = "Above";
    $request->image_format = BarcodeImageFormat::Svg;

    $barcodeStream = $generateApi->generateMultipart($request);

    file_put_contents($fileName, $barcodeStream->fread($barcodeStream->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();