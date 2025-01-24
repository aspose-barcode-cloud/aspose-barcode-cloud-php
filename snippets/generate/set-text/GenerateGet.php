<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{EncodeBarcodeType, EncodeData, EncodeDataType};
use Aspose\BarCode\Requests\GenerateRequestWrapper;

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
    $fileName = __DIR__ . '/../testdata/Qr.png';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $getRequest = new GenerateRequestWrapper(EncodeBarcodeType::QR, "Aspose.BarCode.Cloud");
    $getRequest->data_type = EncodeDataType::StringData;

    $generated = $generateApi->generate($getRequest);

    file_put_contents($fileName, $generated->fread($generated->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();