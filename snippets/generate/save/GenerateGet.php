<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{BarcodeImageFormat};
use Aspose\BarCode\Requests\BarcodeGenerateBarcodeTypeGetRequest;

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
    $fileName = realpath(dirname(__FILE__)) . '/Code128.jpeg';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $request = new BarcodeGenerateBarcodeTypeGetRequest(EncodeBarcodeType::Code128, "Aspose.BarCode.Cloud");
    $request->setImageFormat(BarcodeImageFormat::Png);

    $generated = $generateApi->barcodeGenerateBarcodeTypeGet($request);

    file_put_contents($fileName, $generated->fread($generated->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();