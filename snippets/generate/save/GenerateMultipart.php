<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Requests\GenerateMultipartRequestWrapper;

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
    $fileName = __DIR__ . '/../testdata/Pdf417.png';

    $generateApi = new GenerateApi(null, makeConfiguration());
    
    $request = new GenerateMultipartRequestWrapper(EncodeBarcodeType::Pdf417, "Aspose.BarCode.Cloud");

    $generated = $generateApi->generateMultipart($request);

    file_put_contents($fileName, $generated->fread($generated->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();